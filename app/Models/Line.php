<?php

//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

/**
* Represent Line (bus line)
*/

namespace App\Models;

use Illuminate\Support\Arr;

use Illuminate\Database\Eloquent\Model;

class Line extends Model
{
  ///////////////////////////////////////////////////////////////////////////////
  // Protected: member data
  
  // make all member data mass assignable
  // protected $guarded = [];
  
  // mass assignable
  protected $fillable = [
    'id',
    'no'
  ];

  ///////////////////////////////////////////////////////////////////////////////
  // Public: member functions: helpers

  //*****************************************************************************

  public function getTakeoffs()
  {
    return Arr::where(

      $this->departures->all(),

      function ($departure) {

        return $departure->isTakeoff;

      }

    );
  }

  ///////////////////////////////////////////////////////////////////////////////
  // Public: member functions: relations

  //*****************************************************************************

  /**
   * 
   */

  public function departures()
  {
    // should return many models

    return $this->belongsToMany(
      Departure::class,       // model name
      'stops_lines',          // pivot table name
      'line_id',              // in pivot: my model's id
      'id',                   // in pivot: other model's id
      'id',                   // in my model: id used for relation
      'stops_lines_id'        // in other model: id used for relation
    );
  }

  //*****************************************************************************

  /**
   * status: Tinker tested
   */

  public function serviceType()
  {
    return $this->belongsTo(ServiceType::class, 'service_type_id', 'id');
  }

  //*****************************************************************************

  /**
   * status: Tinker tested
   */

  public function stops()
  {
    return $this->belongsToMany(
      Stop::class,
      'stops_lines',
      'line_id',
      'stop_id',
      'id',
      'stop_id'
    );
  }
}
