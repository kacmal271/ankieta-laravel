<?php

namespace App\Http\Middleware;

use App\Models\Survey\Answer;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AssertIsFinished
{
  /**
  * Handle an incoming request.
  *
  * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
  */
  public function handle(Request $request, Closure $next): Response
  {
    $answer = Answer::get();

    if ( ! is_null($answer) &&  ! $answer->isFinished)
    {
      // not finished ? goto form
      return redirect()->route('form.index');
    }

    return $next($request);
  }
}
