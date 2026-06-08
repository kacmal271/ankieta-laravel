<?php

namespace App\Http\Middleware;

use App\Helper\Enumeration\Admin\AdminIndex;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class GuestRedirect
{
  /**
  * Handle an incoming request.
  *
  * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
  */
  public function handle(Request $request, Closure $next): Response
  {
    if (auth()->user())
    {
      return redirect()->route('admin.index', ['adminIndex' => AdminIndex::Download]);
    }

    return $next($request);
  }
}
