<?php

namespace App\Http\Controllers;

use DateTime;

use App\Helper\Trait\TranslationsSerializer;

use App\Helper\WebDate;

// models
use App\Models\Survey\Answer;
use App\Models\Stop;
use App\Models\Departure;
use App\Models\Line;
use App\Models\TimePeriod;

use App\Helper\Enumeration\Design;

// laravel
use Illuminate\Support\Facades\View;
use Inertia\Inertia;
use Illuminate\Support\Facades\DB;

class TimetableController extends Controller
{
  use TranslationsSerializer;

  //*****************************************************************************

  public function index(
    string $framework,
    string $calendarDate,

    ?string $serviceType    = null,
    ?string $serviceLine    = null,
    ?string $endStationId   = null,
    ?string $currentStopId  = null
  )
  {
    Answer::get()->setNullColumnOnce(
      // first step: verify if this enum is valid
      // second step: prepare column name dynamically
      Design::from($framework)->value . 'Start',
      now()
    );
    
    // pass context (which framework we use) to blade component
    View::share('framework', $framework);
    View::share('pageTitle', config('app.name') . ' | ' . __('Timetable'));

    $contextData = $this->getContextData($serviceLine, $currentStopId, $endStationId);
    
    // Inertia: auto deserializes into json
    // $contextDataJson = json_encode($contextData);

    // handle current locale translation

    $translationsAsJson = $this->getTranslationsAsJson();

    return Inertia::render(ucfirst($framework), [
      'calendarDate'  => $calendarDate,
      'serviceType'   => $serviceType,
      'serviceLine'   => $serviceLine,
      'endStation'    => $endStationId,
      'currentStop'   => $currentStopId,
      'contextData'   => $contextData,
      'translations'  => $translationsAsJson
    ]);
  }

  //*****************************************************************************

  private function getContextData($serviceLine, $currentStopId, $endStationId)
  {
    $linePickerData = $this->getLinePickerData();

    // fetching line of interest
    $line = Line::all()
      ->where('no', '=', $serviceLine)
      ->first();

    $stopPickerData = $this->getStopPickerData($line);
    
    $timeViewerData = $this->getTimeViewerData($line, $currentStopId, $endStationId);

    return [
      'linePickerData' => $linePickerData,
      'stopPickerData' => $stopPickerData,  // nullable
      'timeViewerData' => $timeViewerData   // nullable
    ];
  }

  //*****************************************************************************
  private function getTimeViewerData($line, $currentStopId, $endStationId)
  {
    // $currentStopId passed: latter argument in application router
    if (is_null($currentStopId) || is_null($endStationId) || is_null($line))
    {
      // TimeViewer: not ready
      // await next requests

      return null;
    }

    $timePeriodIds = [
      config('database.timeperiod.workdays'),
      config('database.timeperiod.saturdays'),
      config('database.timeperiod.sundays'),
    ];

    $hourMinuteTimetables = [];

    foreach ($timePeriodIds as $timePeriodId)
    {

      $departuresByTimePeriods[$timePeriodId] = Departure::getOneTimetableDepartures(
        $line,
        Stop::find($currentStopId),
        Stop::find($endStationId),
        TimePeriod::find($timePeriodId)
      );

      // prepare tabular hour-based data

      if (count($departuresByTimePeriods[$timePeriodId]) == 0)
      {
        // what: skip empty time periods
        // little case: no transit on sundays
        // (A) exception: never allowed

        $hourMinuteTimetables[$timePeriodId] = [];

        continue;
      }

      foreach ($departuresByTimePeriods[$timePeriodId] as $departure)
      {
        // H = 24-based
        $hour   = (new DateTime($departure->departure))->format('H');
        $hour   = (int)$hour;

        $minute = (int)(new DateTime($departure->departure))->format('i');
        $minute = (int)$minute;

        $hourMinuteTimetables[$timePeriodId][$hour][$minute] = $departure;

        // (A) sort(null) : TypeError
        ksort($hourMinuteTimetables[$timePeriodId][$hour]);
      }

      // pad tabular data

      // pad hour timestamps
      $hourMinuteTimetables[$timePeriodId] =
        WebDate::padTimeArray($hourMinuteTimetables[$timePeriodId]);

      /*

      // dont pad minutes

      foreach ($hourMinuteTimetables[$timePeriodId] as $minuteArrayKey => $minuteArray)
      {
        // pad nested minute timestamps
        $minuteArray = WebDate::padTimeArray($minuteArray, 0, 59);

        // replace nested-array in the hours-array
        $hourMinuteTimetables[$timePeriodId] = array_replace(
          $hourMinuteTimetables[$timePeriodId],
          [$minuteArrayKey => $minuteArray]
        );
      }

      */
      
      // padTimeArray ksort-s already
      // ksort($hourMinuteTimetables[$timePeriodId]);
    }

    // laravel::dd() bricks return
    // react.js doesnt like void responses from apache
    // therefore: react.js signals 500 error on laravel dd()

    // get url data of interest
    // $regex = config('regex.timetable.timeViewer.getEndStationId');
    // $endStationId = $this->getUrlRegexMatch($regex, true);

    // get backward links
    $previousUrls = $this->getBackwardLinksData($line, $currentStopId, $endStationId);

    return [
      'previousUrls'            => $previousUrls,
      'hourMinuteTimetables'    => $hourMinuteTimetables,
      'endStationId'            => $endStationId
    ];
  }

  //*****************************************************************************
  private function getStopPickerData($line)
  {
    if (is_null($line))
    {
      // no line of interest

      return null;
    }
    
    // fetching line's takeoff departures
    $departures = $line->getTakeoffs();

    // 
    $departures = removeDuplicatesByAttribute(
      $departures, 'stops_lines_id'
    );
    
    $departureRoutes = [];

    foreach ($departures as $departureKey => $departure)
    {
      $departureRoutes[] = $departure->nexts();

      foreach ($departureRoutes[$departureKey] as $departureStopKey => & $departureStop)
      {
        $departureStop = $departureStop->stop();
      }
    }

    // get url data of interest
    $stopPickerRegex = config('regex.timetable.stopPicker');
    $requestUrl = $this->getUrlRegexMatch($stopPickerRegex);
    
    // backward links
    $previousUrls = $this->getBackwardLinksData($line);

    return [
      'previousUrls'    => $previousUrls,
      'requestUrl'      => $requestUrl,
      'departureRoutes' => $departureRoutes
    ];
  }

  //*****************************************************************************
  private function getLinePickerData()
  {
    // using Eloquent:
    // cannot get service_type.type
    // merged with lines.no
    // easily

    // $serviceTypes = ServiceType::all();

    // $serviceLines = [];

    // foreach ($serviceTypes as $key => $serviceType)
    // {
    //   $serviceLines[] = $serviceType->lines;
    // }

    $serviceLines = DB::table('lines')
      ->join('service_types', 'service_types.id', '=', 'lines.service_type_id')
      ->select(['lines.id', 'lines.no', 'service_types.type'])
      ->orderBy('lines.no')
      ->get();
    
    return [
      'serviceLines' => $serviceLines
    ];
  }

  //*****************************************************************************

  private function getBackwardLinksData(
    $lineModel,
    $currentStopId = null,
    $endStationId = null
  )
  {
    try
    {
      
      // line picker regex
      $linePickerRegex = config('regex.timetable.linePicker');

      // line picker button label
      $linePickerButton = __('Return');

      // line picker aside label
      $linePickerLabel = __('Line: :number', ['number' => $lineModel->no]);

      // line picker link
      $linePickerLink = $this->getUrlRegexMatch($linePickerRegex);

      // line picker data
      $linePickerData = [
        'button'          => $linePickerButton,
        'label'           => $linePickerLabel,

        // fontello: service type looked up into fontello class name in react
        'serviceType'     => $lineModel->serviceType->type,

        'link'            => $linePickerLink
      ];

      if ($currentStopId == null || $endStationId == null)
      {
        return [ $linePickerData ];
      }

      // stop picker regex
      $stopPickerRegex = config('regex.timetable.stopPicker');

      // stop picker button label
      $stopPickerButton = __('Return');

      // stop picker from
      $stopPickerFromName = DB::table('stops')
        ->where('id', '=', $currentStopId)
        ->get()
        ->get(0)
        ->name;

      // stop picker to
      $stopPickerToName = DB::table('stops')
        ->where('id', '=', $endStationId)
        ->get()
        ->get(0)
        ->name;

      // stop picker aside label
      $stopPickerLabel = __('Stop: :from - :to', [
        'from' => $stopPickerFromName,
        'to'   => $stopPickerToName
      ]);

      // stop picker link
      $stopPickerLink = $this->getUrlRegexMatch($stopPickerRegex);

      // stop picker data
      $stopPickerData = [
        'button'          => $stopPickerButton,
        'label'           => $stopPickerLabel,
        'serviceType'     => null,
        'link'            => $stopPickerLink
      ];
      
      // first we pick a line
      // second we pick a line stop
      $backwardLinks = [ $linePickerData, $stopPickerData ];

      return $backwardLinks;

    }
    catch (\Throwable $th)
    {
      throw $th;
    }
  }

  //*****************************************************************************

  private function getUrlRegexMatch($regex, $isGroupMatch=false)
  {
    try
    {
      $matches = [];

      $currentUrl = request()->url();

      preg_match($regex, $currentUrl, $matches);

      return $isGroupMatch ? $matches[1] : $matches[0];
    }
    catch (\Throwable $t)
    {
      return $t;
    }
  }
}
