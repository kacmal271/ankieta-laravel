<?php

namespace App\Models\Survey;

use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
  ///////////////////////////////////////////////////////////////////////////////
  // MEMBER DATA
  
  // make all member data mass assignable
  // protected $guarded = [];
  
  // mass assignable
  protected $fillable = [
    'created_at',
    'updated_at',
    'session_id',
    'answer_id',
  ];

  protected $casts = [
    'created_at' => 'datetime',
    'updated_at' => 'datetime',
  ];

  ///////////////////////////////////////////////////////////////////////////////
  // MEMBER FUNCTION

  //*****************************************************************************

  /**
   * tested: tinker tested
   */

  public function answer()
  {
    return $this->hasOne(Answer::class, 'id', 'answer_id');
  }
}
