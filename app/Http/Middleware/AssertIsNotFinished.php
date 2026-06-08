<?php

namespace App\Http\Middleware;

use App\Models\Survey\Answer;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AssertIsNotFinished
{
  /**
  * Assert exists.
  *
  * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
  */
  public function handle(Request $request, Closure $next): Response
  {
    $answer = Answer::get();

    if ( ! is_null($answer) && $answer->isFinished)
    {
      // this line may disrupt links
      // this line may produce other unexpected behaviors
      // return back();

      // finished ? goto thank-you
      return redirect()->route('thank-you');
    }

    return $next($request);
  }
}
