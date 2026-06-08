<?php

namespace App\Http\Middleware;

use App\Models\Survey\Answer;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AssertSurveyStarted
{
  /**
   * Assert Answer exists.
   *
   * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
   */
  public function handle(Request $request, Closure $next): Response
  {
    $answer = Answer::get();

    if (is_null($answer))
    {
      // not started ? goto welcome
      return redirect()->route('welcome.index');
    }
    
    // Answer exists
    return $next($request);
  }
}
