<?php

//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

/**
 * Represent single bus take-off (from stop A to stop B)
 * 
 * Table of Contents
 * # FILTER BIDIRECTIONAL ROUTES
 */

namespace App\Models;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

use App\Helper\Converter;

use App\Helper\Enumeration\ServiceType as EnumerationServiceType;
use App\Helper\Enumeration\TimePeriod as EnumerationTimePeriod;

use Illuminate\Database\Eloquent\Model;

class Departure extends Model
{
  ///////////////////////////////////////////////////////////////////////////////
  // Member Data
  
  // make all member data mass assignable
  // protected $guarded = [];
  
  // mass assignable
  protected $fillable = [
    'id',
    'departure'
  ];

  protected $casts = [
    'deperture' => 'datetime'
  ];

  ///////////////////////////////////////////////////////////////////////////////
  // Member Function: Public

  //*****************************************************************************

  public static function getEndStationStatic(Departure $departure)
  {
    return collect($departure->nexts())->last()->stop();
  }

  //*****************************************************************************

  public static function lineStopDeparturesOf($departure, $isSameEndStation = true, $sortTime = 'desc')
  {
    $idsAsStdClass = DB::table('stops_lines')
      ->join('departures', 'stops_lines.id', '=', 'departures.stops_lines_id')
      ->where('stops_lines.stop_id', '=', $departure->stop()->stop_id)

      // and where
      ->where('stops_lines.line_id', '=', $departure->line()->id)

      ->select([

        // # Remember departure id
        'departures.id'

      ])
      
      // index 0: latest transit
      ->orderBy('departures.departure', $sortTime)

      ->get();

    // # Remember departure id
    $multiEndStationDepartures = Converter::classToModelCollection($idsAsStdClass, Departure::class);

    if ( ! $isSameEndStation)
    {
      // return multi-directional departures
      return $multiEndStationDepartures;
    }

    // # FILTER BIDIRECTIONAL ROUTES
    // filter departures into: same end station
    // Illuminate\Support\Collection::reject
    $uniEndStationDepartures = Departure::filterByEndStation(
      $multiEndStationDepartures->all(),
      $departure->getEndStation()
    );

    return collect($uniEndStationDepartures);
  }

  //*****************************************************************************

  public static function getRandom()
  {
    $arguments = func_get_args();
    
    switch( func_num_args() )
    {
      case 1:
      
        return self::getRandom__Fb($arguments[0]);
        
        break;
        
      case 2:
      
        return self::getRandom__FbT($arguments[0], $arguments[1]);
        
        break;
        
      case 3:
      
        return self::getRandom__FbTS($arguments[0], $arguments[1], $arguments[2]);
        
        break;
    }
  }

  //*****************************************************************************
  
  /**
   * @param  mixed $line
   * @param  mixed $stop
   * @param  mixed $endStation
   * @return mixed single timetable departure sheet
   *     for given line
   *     for given stop
   *     for given turn
   *     for given day
   */

  public static function getOneTimetableDepartures($line, $stop, $endStation, $timePeriod)
  {
    // 1. get departures toward the end-station
    // prevent the bi-directional problem
    
    $departuresDueStation = Departure::getDeparturesDueStation($line, $endStation);

    // 2. get departures toward the end-station on current-stop
    // map old departures from the start station to departures on current-stop

    $departuresDueStation = Departure::getDeparturesOnStop($departuresDueStation, $stop);

    // 3. filter by time period

    $departuresDueStation = Departure::filterByTimePeriod($departuresDueStation, $timePeriod);

    return $departuresDueStation;
  }

  //*****************************************************************************

  public function getEndStation()
  {
    return collect($this->nexts())->last()->stop();
  }

  //*****************************************************************************
  
  /**
   * since each Departure is unique
   * there can be only one takeoff for specific Departure
   *
   * @param  mixed $departure
   * @return Departure
   */

  public function getTakeoff() : ?Departure
  {
    $takeoffs = Departure::where('isTakeoff', '1')->get();

    foreach ($takeoffs as $takeoff)
    {
      // loop all takeoffs
      foreach ($takeoff->nexts() as $next)
      {
        // searching for precedence
        if ($next->id == $this->id)
        {
          return $takeoff;
        }
      }
    }

    return null;
  }

  //*****************************************************************************
  
  /**
   * nexts
   *
   * @param  mixed $withCurrent
   * @return array
   */

  public function nexts($withCurrent = true) : array
  {
    // returnal array
    $nextDepartures = [];

    // variable current departure
    $currentDeparture = $this;

    if ($withCurrent)
    {
      // include takeoff or other starting departure
      $nextDepartures[] = $currentDeparture;
    }

    // variable next departure
    $nextDeparture = $currentDeparture->next;

    // 
    while ($currentDeparture->stops_lines_id != $nextDeparture->stops_lines_id)
    {
      // next becomes current
      $currentDeparture = $nextDeparture;

      $nextDepartures[] = $currentDeparture;

      // set next forward
      $nextDeparture = $currentDeparture->next;
    }
    
    return $nextDepartures;
  }

  //*****************************************************************************

  /**
   * status: Tinker tested
   */

  public function next()
  {
    return $this->belongsTo(Departure::class, 'next_id', 'id');
  }

  ///////////////////////////////////////////////////////////////////////////////
  // Member Function: Private

  //*****************************************************************************

  private static function getRandom__Fb(bool $withEndStations)
  {
    $departures = Departure::all();

    do
    {
      $randomDeparture = $departures->random();

      // dont draw end station
    } while ( ! $withEndStations && $randomDeparture->next_id == $randomDeparture->id);
    
    return $randomDeparture;
  }

  //*****************************************************************************

  private static function getRandom__FbT(bool $withEndStations, ?EnumerationTimePeriod $tp)
  {
    $randomDeparture = Departure::getRandom__Fb($withEndStations);

    // while isnt time period value
    while (is_null($tp) ? false : $randomDeparture->timePeriod->period != $tp->value)
    {
      $randomDeparture = Departure::getRandom__Fb($withEndStations);
    }
    
    return $randomDeparture;
  }

  //*****************************************************************************

  private static function getRandom__FbTS(bool $withEndStations, ?EnumerationTimePeriod $tp, ?EnumerationServiceType $st)
  {
    $randomDeparture = Departure::getRandom__FbT($withEndStations, $tp);

    // while isnt time period value
    while (is_null($st) ? false : $randomDeparture->line()->serviceType->type != $st->value)
    {
      $randomDeparture = Departure::getRandom__FbT($withEndStations, $tp);
    } 
    
    return $randomDeparture;
  }

  //*****************************************************************************

  private static function filterByTimePeriod($departures, $timePeriod)
  {
    return Arr::where($departures, function ($departure) use ($timePeriod) {

      return $departure->time_period_id == $timePeriod->id;

    });
    
    // WORKING CODE

    // $filteredDepartures = [];

    // foreach ($departures as $departure)
    // {
    //   if ($departure->time_period_id == $timePeriod->id)
    //   {
    //     $filteredDepartures[] = $departure;
    //   }
    // }

    // return $filteredDepartures;
  }

  //*****************************************************************************

  /**
   * map the start-station departures to current-stop departures
   */

  private static function getDeparturesOnStop($departures, $stop)
  {
    return Arr::map($departures, function ($departure) use ($stop) {
      
      while ($departure->stop()->id != $stop->id)
      {
        $departure = $departure->next;
      }

      return $departure;

    });

    // OLD CODE

    // $departuresOnStop = [];

    // foreach ($departures as $departure)
    // {
    //   while ($departure->stop()->id != $stop->id)
    //   {
    //     $departure = $departure->next;
    //   }

    //   $departuresOnStop[] = $departure;
    // }

    // return $departuresOnStop;
  }

  //*****************************************************************************
  
  /**
   * filterByEndStation
   *
   * @param  array<mixed,Departure> $departures
   * @param  Stop $endStation
   * @return array<mixed,Departure>
   */

  private static function filterByEndStation(array $departures, Stop $endStation)
  {
    return Arr::where($departures, function ($departure) use ($endStation) {

      // pick records with proper $endStation
      $departureEndStation = Departure::getEndStationStatic($departure);

      // departures with proper $endStation
      return $departureEndStation->id == $endStation->id;

    });
  }

  //*****************************************************************************

  /**
   * station is not a stop
   */

  private static function getDeparturesDueStation($line, $endStation)
  {
    // fetching line's takeoff departures
    $takeoffs = $line->getTakeoffs();

    // one way departures
    $departuresDueEndStation = Departure::filterByEndStation($takeoffs, $endStation);

    return $departuresDueEndStation;
  }

  ///////////////////////////////////////////////////////////////////////////////
  // Member Function: Relations

  //*****************************************************************************

  /**
   * status: Tinker tested
   * 
   * usage: $departure->stop()
   *        not $departure->stop
   */

  public function stop()
  {
    // should return one model

    return $this->belongsToMany(
      Stop::class,      // model name
      'stops_lines',    // pivot table name
      'id',             // in pivot: my model's id
      'stop_id',        // in pivot: other model's id
      'stops_lines_id', // in my model: id used for relation
      'stop_id'         // in other model: id used for relation
    ) ->get()
      ->get(0, fn () => null);
  }

  //*****************************************************************************

  /**
   * usage: $departure->line()
   *        not $departure->line
   */

  public function line()
  {
    // should return one model

    return $this->belongsToMany(
      Line::class,      // model name
      'stops_lines',    // pivot table name
      'id',             // in pivot: my model's id
      'line_id',        // in pivot: other model's id
      'stops_lines_id', // in my model: id used for relation
      'id'              // in other model: id used for relation
    ) ->get()
      ->get(0, fn () => null);
  }

  //*****************************************************************************

  /**
   * Laravel translates "timePeriod" into "time_period"
   * Laravel translates using Reflection API and Str::snake()
   */

  public function timePeriod()
  {
    // should return one model

    return $this->belongsTo(TimePeriod::class);
  }
}
