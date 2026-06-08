<?php

use Illuminate\Support\Facades\Schedule;

Schedule::command('queue:work --stop-when-empty')
  ->everyMinute()
  ->withoutOverlapping();

Schedule::command('reverb:restart')
  ->dailyAt('04:00');

Schedule::command('reverb:start')
  ->dailyAt('04:00');