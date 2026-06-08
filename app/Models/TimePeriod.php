<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TimePeriod extends Model
{
  ///////////////////////////////////////////////////////////////////////////////
  // Protected: member data
  
  // make all member data mass assignable
  // protected $guarded = [];
  
  // mass assignable
  protected $fillable = [
    'id',
    'period'
  ];

  protected $casts = [
    'period' => 'string',
    'created_at' => 'datetime',
    'updated_at' => 'datetime',
  ];

  ///////////////////////////////////////////////////////////////////////////////
  // Public: member functions: relations

  //*****************************************************************************

  public function departures()
  {
    return $this->hasMany(Departure::class, 'time_period_id', 'id');
  }
}