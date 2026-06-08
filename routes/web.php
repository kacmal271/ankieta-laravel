<?php

use Illuminate\Support\Facades\App;

use Illuminate\Support\Facades\Route;

use App\Helper\Enumeration\Admin\AdminIndex;

use App\Http\Controllers;

use Illuminate\Support\Facades\Artisan;

///////////////////////////////////////////////////////////////////////////////
// DATA BINDING

Route::bind('adminIndex', function ($enumValueFromUrl) {
  return AdminIndex::from($enumValueFromUrl); // $enumValueFromUrl is int|string
});

///////////////////////////////////////////////////////////////////////////////
// Server Commands

#
# dont use this if: SSH ENABLED 
#
# /queue-work
#

// Route::get('/queue-work', function () {

//   $result = Artisan::call('queue:work');

//   // it will never reach this line
//   // dump("queue:work resulted in: $result");
  
//   // response will never be returned
//   // return response();

//   // just close the browser tab and IT WILL RUN IN BACKGROUND
//   // on the server

// });

#
# /set-queue-default/{value}
#

Route::get('/set-queue-default/{value}', function ($value) {

  switch ($value)
  {
    case 'sync':
    case 'database':
      
      session(['queue.default' => $value]);

      dump("set session queue default to: $value");
    
      break;
    
    default:

      dump("invalid value: $value");

      break;
  }

});

#
# /storage-link
#

Route::get('/storage-link', function () {

  $result = Artisan::call('storage:link');

  dump("storage:link resulted in: $result");

});

///////////////////////////////////////////////////////////////////////////////
// RESTFUL RESOURCE ROUTES
// Person: Respondent or Admin

/*

VERB			PATH										ACTION			ROUTE NAME

GET				/photos									index				photos.index
GET				/photos/{photo}					show				photos.show

GET				/photos/create					create			photos.create
POST			/photos									store				photos.store

GET				/photos/{photo}/edit		edit				photos.edit
PUT/PATCH	/photos/{photo}					update			photos.update

DELETE		/photos/{photo}					destroy			photos.destroy

*/

// redirect to locale prefix

Route::get('/', function () {

  // input:   '/'
  // output:  '/pl'
  return redirect(app()->getLocale());

});

// locale prefix

Route::prefix('{locale}')

  // en|pl|fr|jp
  ->where(['locale' => implode('|', config('app.supported_locales'))])

  ->group(function () {

  // Auth::routes();

  #
  # /
  # then: /create
  # then: /form
  # then: /thank-you
  #

  Route::get('/',
  [Controllers\WelcomeController::class, 'index'])
    ->name('welcome.index')
    ->middleware([
      'not-started',
      'not-finished'
    ]);

  #
  # /create
  #

  Route::post('/create',
  [Controllers\WelcomeController::class, 'create'])
    ->name('welcome.create')
    ->middleware([
      'not-started',
      'not-finished'
    ]);

  #
  # /admin/{adminIndex}
  #

  Route::get('/admin/{adminIndex}',
  [Controllers\AdminController::class, 'index'])
    ->name('admin.index')
    ->middleware('auth');

  #
  # /admin/AdminIndex::Download/queue
  #

  Route::post('/admin' . '/' . AdminIndex::Download->value . '/queue',
  [Controllers\AdminController::class, 'queue'])
    ->name('admin.download.queue')
    ->middleware('auth');

  #
  # /admin/AdminIndex::Download/download
  #

  Route::get('/admin' . '/' . AdminIndex::Download->value . '/download/{fileName}',
  [Controllers\AdminController::class, 'download'])
    ->name('admin.download.download');

  #
  # /about
  #

  Route::get('/about', function () {
    return view('about');
  })->name('about');

  #
  # /form
  #

  Route::get('/form',
  [Controllers\FormController::class, 'index'])
    ->name('form.index')
    ->middleware([
      'started',
      'not-finished'
    ]);

  #
  # /login
  #

  Route::get('/login',
  [Controllers\Auth\LoginController::class, 'index'])
    ->name('auth.index')
    ->middleware('guest-redirect');

  Route::post('/login/authenticate',
  [Controllers\Auth\LoginController::class, 'authenticate'])
    ->name('auth.show');

  #
  # /logout
  #

  Route::get('/logout',
  [Controllers\Auth\LoginController::class, 'logout'])
    ->name('auth.logout')
    ->middleware('auth');

  #
  # /thank-you
  #

  Route::get('/thank-you', function () {
    return view('thank-you');
  })->name('thank-you')
    ->middleware([
      'started',
      'finished'
    ]);

  #
  # /set-locale
  #

  Route::get('/set-locale',

  /**
   * @param string $locale is set by Route::prefix()->group
   */

  function () {

    session(['localization.isSet' => "true"]);

    return redirect()->route('welcome.index');

  })->name('localize');

  #
  # /timetable
  #

  Route::get('/timetable'
    . '/{framework}'
    . '/{calendarDate}'
    . '/{serviceType?}'
    . '/{serviceLine?}'
    . '/{endStationId?}'
    . '/{currentStopId?}',
  [Controllers\TimetableController::class, 'index'])
    ->name('timetable.index');

});