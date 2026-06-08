<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetQueueDriver
{  
  /**
   * handle
   *
   * @param  Request $request
   * @param  Closure $next
   * @return Response
   */

  public function handle(Request $request, Closure $next): Response
  {

    /**
     * queue
     */

    config([
      'queue.default' => session('queue.default') ?? config('queue.default'),
    ]);

    return $next($request);
  }
}
