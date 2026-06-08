<?php

//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

/**
* Tell what it is: Bus or Tram or ..
*/

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceType extends Model
{
  ///////////////////////////////////////////////////////////////////////////////
  // Protected: member data
  
  // make all member data mass assignable
  // protected $guarded = [];
  
  // mass assignable
  protected $fillable = [
    'id',
    'type'
  ];

  ///////////////////////////////////////////////////////////////////////////////
  // Public: member functions: relations

  //*****************************************************************************

  public function lines()
  {
    return $this->hasMany(Line::class, 'service_type_id', 'id');
  }
}
