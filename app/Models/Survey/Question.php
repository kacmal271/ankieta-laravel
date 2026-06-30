<?php

//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

/**
 * Table of Contents
 * # 
 */

namespace App\Models\Survey;

use DateTime;
use DateTimeImmutable;
use InvalidArgumentException;

use App\Models\Departure;

use App\Helper\Question\QuestionAnswer as HelperQuestionAnswer;
use App\Helper\Enumeration\ServiceType;
use App\Helper\Enumeration\Design;
use App\Helper\Enumeration\ParameterString;
use App\Helper\Enumeration\TimePeriod;
use App\Helper\Interface\IParameterStringResolver;
use App\Helper\Statistics;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;

use Laravel\SerializableClosure\SerializableClosure;

//-----------------------------------------------------------------------------

/**
 * Question
 */

class Question extends Model implements IParameterStringResolver
{
  ///////////////////////////////////////////////////////////////////////////////
  // MEMBER DATA

  // mass assignable: can user Model->fill()
  
  // foreign key: dont let mass assignable

  protected $fillable = [
    'id',
    'created_at',
    'updated_at',
    'orderNumber',
    'question',
    'input_type',
    'correct_value',
    'subquestion',
    'context',
  ];

  protected $casts = [
    'created_at' => 'datetime',
    'updated_at' => 'datetime',
  ];

  ///////////////////////////////////////////////////////////////////////////////
  // MEMBER FUNCTION: function

  //*****************************************************************************
  
  /**
   * lookupContextString
   *
   * @param ParameterString $parameterString
   * @param string $contextString
   * @return string
   */

  public static function lookupContextString(
    ParameterString $parameterString,
    string $contextString
  ) : string
  {
    switch ($parameterString)
    {
      case ParameterString::Icon:
        
        $serviceType = ParameterString::ServiceType->value;

        return session("survey.subquestion.$contextString.$serviceType");

      case ParameterString::Link:
        
        return $contextString;

      default:

        return $contextString;
    }
  }

  //*****************************************************************************

  public static function prepareDynamicQuestions($answerRecord)
  {
    Question::prepareDynamicMetroQuestion($answerRecord);
    Question::prepareDynamicFluentQuestion($answerRecord);
  }

  //*****************************************************************************

  /**
   * wrapper for: Question::lookupParameterString()
   */

  public function resolveParameterString(
    ParameterString $parameterEnum,
    string $contextStrings
  ) : string
  {
    $resolutionString = match ($parameterEnum)
    {
      ParameterString::Icon           => $this->resolveIcon($contextStrings),

      ParameterString::Link           => $this->resolveLink($contextStrings),

      // default => throw new InvalidArgumentException('add ParameterString values as your application requires')

      default => $this->resolveContextParameter($contextStrings, $parameterEnum->value)
    };

    return $resolutionString;
  }

  //*****************************************************************************
  
  /**
   * get m questions
   * 
   * tested: tinker tested
   */

  public function category()
  {
    return $this->belongsTo(Category::class, 'category_id', 'id', 'category');
  }

  //*****************************************************************************
  
  /**
   * get m question answers
   * 
   * tested: tinker tested
   */

  public function questionAnswers()
  {
    return $this->hasMany(QuestionAnswer::class, 'question_id', 'id');
  }

  //*****************************************************************************

  public function resolveIcon(string $contextString) : string
  {
    switch ($contextString)
    {
      case ServiceType::Bus->value:
        return "<i class='icon-bus'></i>";

      case ServiceType::Tram->value:
        return "<i class='icon-train'></i>";

      case ServiceType::NightService->value:
        return "<i class='icon-moon'></i>";

      case ServiceType::TouristLine->value:
        return "<i class='icon-suitcase'></i>";

    }
    
    throw new InvalidArgumentException('cannot resolve an icon');
  }

  //*****************************************************************************

  public function resolveLink(string $contextString) : string
  {
    $todayYMD = new DateTimeImmutable();
    $todayYMD = $todayYMD->format('Y-m-d');

    /**
     * route() makes extra values into query string
     * route('named.route', ['extra' => 'value'])
     */

    // [BUG]: livewire updates to /livewire/update
    $callbackLink = "?callbackLink=" . url()->full();

    // matches array
    // $matches = [];

    // save pagination number
    // preg_match('/\?page=(\d+)/', url()->full(), $matches);

    // apply pagination number on callback
    // $callbackLink = "?callbackLink=" . route('form.index', ["page=$matches[1]"]);

    $callbackId = "&callbackId=$this->orderNumber";

    // this is the same as below
    // given web.php hasnt changed
    // $link = url("timetable/$contextString/$todayYMD") . $callbackLink . $callbackId;

    $link = route('timetable.index', [
      'framework'       => $contextString,
      'calendarDate'    => $todayYMD
    ]) . $callbackLink . $callbackId;

    $timetable = __('Timetable');

    $anchor = "
      <a
        class='bi-decoration-none bi-inline-block'
        href='$link'>
        
        <span class='bi-link'>$timetable</span>
        <i class='icon-link'></i>
      </a>";

    return $anchor;
  }

  //*****************************************************************************
  
  /**
   * use case
   * 
   *   fluent question answers
   *
   * @param  Collection<int>  $collection
   * @param  int              $finalCount
   * @return Collection<int>
   */

  private static function fillWithRandomValues(
    Collection $collection,
    int $finalCount
  ) : Collection
  {
    // first value
    $firstValue = $collection->first(
      default: random_int(PHP_INT_MIN, PHP_INT_MAX)
    );

    while ($collection->count() < $finalCount)
    {
      $min = $firstValue - $finalCount / 2;
      $max = $firstValue + $finalCount / 2;

      // return fake answer
      $randomCount = random_int($min, $max);

      // clamp to look natural
      $randomCount = Statistics::clamp(value: $randomCount, min: 0);

      // add duplicate or unique
      $collection->add($randomCount);

      // assert: unique
      $collection = $collection

        // immutable (as most are)
        // remove dupes
        ->unique();
    }

    // randomize among fake answers
    $collection = $collection->sort()

      // reset indexing
      ->values();

    return $collection;
  }

  //*****************************************************************************
  
  /**
   * prepareDynamicMetroQuestion
   *
   * @param  mixed $answerRecord
   * @return void
   */

  private static function prepareDynamicMetroQuestion($answerRecord)
  {
    // metro: departure (its takeoff time is the answer)

    $randomDepartures = [];

    // # increment on: no duplicate
    for ($i = 0; $i < config('question_answer.count');)
    {
      // get random record from table: 'departures'
      $randomDeparture = Departure::getRandom(false);

      // get corresponding table: 'line_stop' ids
      // 'line_stop' ids relate to table: 'departures'
      $lineStopDepartures = Departure::lineStopDeparturesOf($randomDeparture);

      do
      {
        $randomPeriod = Arr::random([
          // match database period names
          TimePeriod::WorkDays->value,
          TimePeriod::Saturdays->value,
          TimePeriod::Sundays->value,
        ]);

        // get dynamic-survey data
        $lastDeparture = $lineStopDepartures->first(
          fn ($entry) => $entry->timePeriod->period == $randomPeriod
        );

        // assert: time period has takeoffs
        // what if: no takeoffs on sunday

      } while ($lastDeparture == null);

      // verify: no overlapping departures
      $isDuplicate = false;

      // verification: loop each entry
      for ($j = 0; $j < count($randomDepartures); $j++)
      {
        // verify: time (we dont want 2 same options in a dropdown)
        if ($randomDepartures[$j]->departure == $lastDeparture->departure)
        {
          dump($randomDepartures[$j]);
          dump($lastDeparture);
          // verification: fail
          $isDuplicate = true;
          break;
        }
      }

      if ($isDuplicate)
      {
        // loop again
        continue;
      }
      
      // # increment on: no duplicate
      $randomDepartures[$i++] = $lastDeparture;
    }

    // draw correct answer
    // # correct answer
    $correctDeparture = collect($randomDepartures)->random();

    // get correct end station
    $endStation = collect($correctDeparture->nexts())
      ->last()
      ->stop();
    
    // prepare metro labels and values
    $metroLabelsValues = [];

    // fill metro labels and values
    foreach ($randomDepartures as $randomDeparture)
    {
      // each <option>: contains: label and value

      $dateTime = new DateTimeImmutable($randomDeparture->departure);
      $label = $dateTime->format(config('localization.datetime.format'));
      $value = $randomDeparture->id;

      $metroLabelsValues[] = new HelperQuestionAnswer(
        id: $randomDeparture->id,
        label: $label,
        value: $value,
      );
    }

    $metroLabelsValues = Arr::sort($metroLabelsValues, function ($labelValue) {
      return new DateTime($labelValue->label);
    });

    // matching database values
    // enum should assert that

    $designKey    = Design::Metro->value;
    $serviceType  = ParameterString::ServiceType->value;
    $lineNo       = ParameterString::LineNo->value;
    $stopName     = ParameterString::StopName->value;
    $stationName  = ParameterString::StationName->value;
    $timePeriod   = ParameterString::TimePeriod->value;

    // session values data

    $correctDepartureServiceType    = $correctDeparture->line()->serviceType->type;
    $correctDepartureLineNo         = $correctDeparture->line()->no;
    $correctDepartureStopName       = $correctDeparture->stop()->name;
    $correctDepartureTimePeriod     = $correctDeparture->timePeriod->period;

    // get station name from eloquent
    $endStationName                 = $endStation->name;

    // get readability icon
    $serviceTypeIcon = (new Question())
      ->resolveParameterString(ParameterString::Icon, $correctDepartureServiceType);

    // fill metro session structure

    session([
      "survey.subquestion.$designKey.$serviceType"   => $correctDepartureServiceType,
      "survey.subquestion.$designKey.$lineNo"        => $correctDepartureLineNo,
      "survey.subquestion.$designKey.$stopName"      => $correctDepartureStopName,
      "survey.subquestion.$designKey.$timePeriod"    => $correctDepartureTimePeriod,
      "survey.subquestion.$designKey.$stationName"   => $endStationName,
      "survey.question_answers.$designKey.name"      => "metroValue",
      "survey.question_answers.$designKey.answers"   => $metroLabelsValues,
    ]);

    // save subquestion closure for localization

    // store subquestion closure generator in session
    Question::sessionSubquestionClosure(function () use (
      $correctDepartureServiceType,
      $serviceTypeIcon,
      $correctDepartureLineNo,
      $correctDepartureStopName,
      $endStationName,
      $correctDepartureTimePeriod,
    )
    {

      return __("What time does the last :service_type :icon of line no. :line_no depart from the ':stop_name' stop towards ':station_name' on :time_period?", [
        'service_type'       => __($correctDepartureServiceType),
        'icon'               => __($serviceTypeIcon),
        'line_no'            => __($correctDepartureLineNo),
        'stop_name'          => __($correctDepartureStopName),
        'station_name'       => __($endStationName),
        'time_period'        => __($correctDepartureTimePeriod)
      ]);
    
    }, $designKey);

    // metro: saving correct answer (takeoff time id)
    // # correct answer
    $answerRecord->metroCorrectValue = $correctDeparture->id;
    $answerRecord->save();
  }

  //*****************************************************************************

  private static function sessionSubquestionClosure($closure, $designKey)
  {
    // closure wrapper
    $serializableClosure = SerializableClosure::unsigned($closure);

    $serialized = serialize($serializableClosure);

    session([
      // save closure wrapper for: inertia.blade.php
      "survey.subquestion.$designKey.subquestion"    => $serialized
    ]);
  }

  //*****************************************************************************
    
  /**
   * prepareDynamicFluentQuestion
   *
   * @return void
   */
  
  private static function prepareDynamicFluentQuestion($answerRecord)
  {
    // fluent: departures (total # of takeoffs is the answer)

    // set random departure
    $randomDeparture = Departure::all()->random();

    // line stop departure count
    $lineStopTakeoffsCount = Question::lineStopTakeoffsCountOf($randomDeparture);

    // generate fake answers
    $fluentFakeAnswers = Question::fillWithRandomValues(
      collect($lineStopTakeoffsCount),

      // select-options count
      config('question_answer.count')
    )->all(); // convert to: array

    // prepare fluent labels and values
    $fluentLabelsValues = [];

    // fill fluent labels and values
    foreach ($fluentFakeAnswers as $fluentFakeAnswer)
    {
      $fluentLabelsValues[] = new HelperQuestionAnswer(
        id: $randomDeparture->id,
        label: $fluentFakeAnswer,
        value: $fluentFakeAnswer,
      );
    }

    // matching database values
    // enum should assert that

    $designKey    = Design::Fluent->value;
    $serviceType  = ParameterString::ServiceType->value;
    $lineNo       = ParameterString::LineNo->value;
    $stationName  = ParameterString::StationName->value;
    $timePeriod   = ParameterString::TimePeriod->value;

    // session values data

    $randomDepartureServiceType     = $randomDeparture->line()->serviceType->type;
    $randomDepartureLineNo          = $randomDeparture->line()->no;
    $randomDepartureTimePeriod      = $randomDeparture->timePeriod->period;
    $endStationName                 = $randomDeparture->getEndStation()->name;

    // get readability icon
    $serviceTypeIcon = (new Question())->resolveParameterString(
      ParameterString::Icon,
      $randomDepartureServiceType
    );

    // fill session structure

    session([
      "survey.subquestion.$designKey.$serviceType"   => $randomDepartureServiceType,
      "survey.subquestion.$designKey.$lineNo"        => $randomDepartureLineNo,
      "survey.subquestion.$designKey.$timePeriod"    => $randomDepartureTimePeriod,
      "survey.subquestion.$designKey.$stationName"   => $endStationName,
      "survey.question_answers.$designKey.name"      => "fluentValue",
      "survey.question_answers.$designKey.answers"   => $fluentLabelsValues,
    ]);

    // save subquestion closure for localization

    Question::sessionSubquestionClosure(function () use (
      $randomDepartureServiceType,
      $serviceTypeIcon,
      $randomDepartureLineNo,
      $endStationName,
      $randomDepartureTimePeriod,
    )
    {

      return __("How many times does :service_type :icon no. :line_no transit due the ':station_name' station on :time_period?", [
        'service_type'       => __($randomDepartureServiceType),
        'icon'               => __($serviceTypeIcon),
        'line_no'            => __($randomDepartureLineNo),
        'station_name'       => __($endStationName),
        'time_period'        => __($randomDepartureTimePeriod)
      ]);
    
    }, $designKey);

    // fluent: saving correct answer (total # of takeoffs)
    $answerRecord->fluentCorrectValue = $lineStopTakeoffsCount;
    $answerRecord->save();
  }

  //*****************************************************************************  
  
  /**
   * input:    any instanceof Departure
   * output:   int count of takeoffs:
   *           Departure -> its takeoff -> its takeoff stop_line -> count all takeoffs
   *
   * @param  mixed $departure
   * @return void
   */

  private static function lineStopTakeoffsCountOf($departure)
  {
    // find takeoff

    // preparing dynamic question doesnt work
    //     $departure->getTakeoff() : null
    //     dump($takeoff) doesnt work
    //     log it

    $takeoff = $departure->getTakeoff();

    // ASSERT: NAMING CONVENTIONS OBSERVED
    $endStation = collect($takeoff->nexts())
      ->last()

      // not departure: its STOP
      ->stop();
    
    $departuresDueStation = Departure::getOneTimetableDepartures(
      $takeoff->line(),
      $takeoff->stop(),
      $endStation,
      $takeoff->timePeriod
    );

    return count($departuresDueStation);
  }

  //*****************************************************************************

  private function resolveContextParameter($contextString, $parameterStringValue) : string
  {
    // subquestion: required for translations
    return session("survey.subquestion.$contextString.$parameterStringValue", "");
  }
}
