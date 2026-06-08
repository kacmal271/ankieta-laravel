<?php

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

use Illuminate\Http\Request;

use App\Http\Middleware\SetLocale;
use App\Http\Middleware\AssertIsFinished;
use App\Http\Middleware\AssertIsNotFinished;
use App\Http\Middleware\AssertSurveyStarted;
use App\Http\Middleware\AssertSurveyNotStarted;
use App\Http\Middleware\GuestRedirect;
use App\Http\Middleware\HandleInertiaRequests;
use App\Http\Middleware\SetQueueDriver;

use Illuminate\Routing\Middleware\SubstituteBindings;

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

///////////////////////////////////////////////////////////////////////////////
// Implement My Global Helper Functions

require __DIR__ . '/../app/Helper/Extended/SPL.php';

///////////////////////////////////////////////////////////////////////////////
// Laravel Config

return Application::configure(basePath: dirname(__DIR__))

  ->withRouting(
    web: __DIR__.'/../routes/web.php',
    commands: __DIR__.'/../routes/console.php',
        channels: __DIR__.'/../routes/channels.php',
    health: '/up',
  )
  
  ->withMiddleware(function (Middleware $middleware) {

    // locale has to be first
    // laravel datatype-binding has to be second
    $middleware->prependToPriorityList(
      before: SubstituteBindings::class,
      prepend: SetLocale::class
    );

    $middleware->alias([

      'guest-redirect' => GuestRedirect::class,
      'finished' => AssertIsFinished::class,
      'not-finished' => AssertIsNotFinished::class,
      'started' => AssertSurveyStarted::class,
      'not-started' => AssertSurveyNotStarted::class,

    ]);

    // HTTP 80 middleware
    $middleware->web(append: [

      SetQueueDriver::class,
      SetLocale::class,
      HandleInertiaRequests::class

    ]);

  })

  ->withExceptions(function (Exceptions $exceptions) {
    
    $exceptions->render(function (NotFoundHttpException $e, Request $request) {

      if ( ! $request->expectsJson())
      {
        // handle non-API requests

        return back();
      }

    });

  })
  
  ->create();
  