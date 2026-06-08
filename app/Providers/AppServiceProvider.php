<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

  //*****************************************************************************

  /**
   * Register any application services.
   */

  public function register(): void
  {
    
  }
  
  //*****************************************************************************

  /**
   * Bootstrap any application services.
   */

  public function boot(): void
  {

    $this->bootPagination();
    $this->bootLivewire();
    
    /**
     * Answer Model
     */

    config([
      'answer.paginator.onEachSide' => 1,
      'answer.paginator.itemsPerPage' => 16
    ]);
    
    /**
     * database
     */

    config([
      'database.timeperiod.workdays'      => 1,
      'database.timeperiod.saturdays'     => 2,
      'database.timeperiod.sundays'       => 3,
    ]);
    
    /**
     * datetime
     */

    config([
      'datetime.datetime.format' => 'Y-m-d H:i:s',
      'datetime.date.format' => 'Y-m-d',
      'datetime.time.format' => 'H:i:s'
    ]);

    /**
     * filesystem
     */

    config([
      'filesystem.file.name.seed.length' => 4,
    ]);
    
    /**
     * localization
     */

    config([
      'localization.datetime.format'    => 'H:i'
    ]);
    
    /**
     * path
     * 
     * global array config('key')
     */

    config([
      'path.url.admin.download'                    => url("/storage/database"),
      'path.url.storage.graphics.graphics'         => url("/storage/graphics"),
      'path.url.storage.graphics.languageChooser'  => url("/storage/graphics/language_chooser"),
      'path.url.storage.graphics.credit'           => url("/storage/graphics/credit"),
    ]);
    
    /**
     * regex
     */

    config([
      'regex.timetable.linePicker' =>
        '/.*\/timetable\/[a-z]+\/\d+-\d+-\d+/',

      'regex.timetable.stopPicker' =>
        '/.*\/timetable\/[a-z]+\/\d+-\d+-\d+\/[a-z\.]+\/\d+/',

      'regex.timetable.timeViewer' =>
        '/.*\/timetable\/[a-z]+\/\d+-\d+-\d+\/[a-z\.]+\/\d+\/\d+\/\d+/',

      'regex.timetable.timeViewer.getEndStationId' =>
        '/.*\/timetable\/[a-z]+\/\d+-\d+-\d+\/[a-z\.]+\/\d+\/(\d+)\/\d+/'
    ]);
    
    /**
     * survey
     */

    config([
      'question_answer.count'      => 4
    ]);

  }

  //*****************************************************************************

  private function bootPagination()
  {
    Paginator::defaultView('snippet.pagination');

    Paginator::defaultSimpleView('snippet.pagination');
  }

  //*****************************************************************************

  private function bootLivewire()
  {
		//
		// livewire.js is not at localhost/livewire/[here]
		// in production: supply it [here]
		//

		// fix: localhost/livewire/update
    
    \Livewire\Livewire::setUpdateRoute(function ($handle) {
      return Route::post(env('APP_RELATIVE_URL') . '/livewire/update', $handle);
    });

		// fix: localhost/livewire/livewire.js  

    \Livewire\Livewire::setScriptRoute(function ($handle) {
      return Route::get(url('/livewire/livewire.js'), $handle);
    });
  }
}
