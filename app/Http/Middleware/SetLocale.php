<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
  /**
   * handle
   *
   * @param  mixed $request
   * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
   * @return Response
   */

  public function handle(Request $request, Closure $next): Response
  {
    // pointless: post -> redirect -> wrong-locale
    // if ($request->method() === 'GET')

    // first element of the resource string
    $locale = $request->segment(1);

    // in_array, PHP global helper
    if (in_array($locale, config('app.supported_locales', [])))
    {
      // set locale for current request
      app()->setLocale($locale);
    }
    else
    {
      // set default locale
      app()->setLocale(config('app.locale'));
    }

    // URL Generation, and nothing else
    //   default parameter: 'locale' to current-locale
    //   order of execution: service-provider -> middleware -> router
    //   service-provider doesnt access current-locale
    //   current-locale is available inside middleware
    URL::defaults(['locale' => app()->getLocale()]);

    // remove route argument: controllers never see it
    // controllers: app()->getLocale()
    $request->route()->forgetParameter('locale');

    // next middleware
    return $next($request);
  }
}
