<?php

//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

/**
* Represent Stop (bus stop booth)
*/

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stop extends Model
{
  ///////////////////////////////////////////////////////////////////////////////
  // Protected: member data
  
  // make all member data mass assignable
  // protected $guarded = [];
  
  // mass assignable
  protected $fillable = [
    'id',
    'name'
  ];

  ///////////////////////////////////////////////////////////////////////////////
  // Public: member functions: relations

  //*****************************************************************************

  public function departures()
  {
    // should return many models

    return $this->belongsToMany(
      Departure::class,       // model name
      'stops_lines',          // pivot table name
      'stop_id',              // in pivot: my model's id
      'id',                   // in pivot: other model's id
      'stop_id',              // in my model: id used for relation
      'stops_lines_id'        // in other model: id used for relation
    );
  }

  //*****************************************************************************

  /**
   * status: Tinker tested
   */

  public function lines()
  {
    return $this->belongsToMany(
      Line::class,
      'stops_lines',
      'stop_id',
      'line_id',
      'stop_id',
      'id'
    );
  }
}
