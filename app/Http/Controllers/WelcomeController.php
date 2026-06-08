<?php

//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

/**
 * WelcomeController aka start controller
 */

namespace App\Http\Controllers;

use Exception;

use Illuminate\Database\QueryException;

use Illuminate\Support\Facades\DB;

use App\Models\Survey\Answer;
use App\Models\Survey\Question;
use App\Models\Survey\Visitor;

class WelcomeController extends Controller
{
  //*****************************************************************************

  public function __construct()
  {
    // # prevent double starting
    $this->middleware('not-started');
  }

  //*****************************************************************************

  public function create()
  {

    try
    {
    
      // ima be using it many times
      $sessionId = session()->id();

      // save session-first-id
      // login as user: destroys old session id
      // save outside transaction closure: assert session entry exists
      session(['saved_session_id' => session()->id()]);

      // automatically roll-back on exception throw

      DB::transaction(function () use ($sessionId) {
        
        if (Visitor::where('session_id', $sessionId)->exists())
        {
          // already exists
          // did the user spam click the [Start Survey]

          // dont send redirect or the valid request will expire
          // return redirect()->route('form.index');
          return;
        }

        // create new answer entry
        $answer = Answer::create();

        Visitor::create([
          'session_id' => $sessionId,
          'answer_id' => $answer->id
        ]);

      });

      $answer = Visitor::where('session_id', $sessionId)
        ->first()
        ->answer;

      // prepareDynamicQuestions updates: session()
      // session doesn't like transactions
      Question::prepareDynamicQuestions($answer);

    }
    catch (QueryException  $e)
    {
      // Duplicate session_id
      
      // dont send redirect or the valid request will expire
      // return redirect()->route('form.index');

      return;
    }
    catch (Exception $e)
    {

      return back()->withErrors([

        'model-save' => __('A new survey hasn\'t been created. Please try refreshing the page.')

      ]);

    }

    return redirect()->route('form.index');
  }

  //*****************************************************************************

  public function index()
  {
    return view('welcome');
  }
}