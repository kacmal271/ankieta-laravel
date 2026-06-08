<?php

namespace App\Models\Survey;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
  // mass assignable: can user Model->fill()
  
  protected $fillable = [
    'id',
    'created_at',
    'updated_at',
    'path_relative_url',
  ];

  protected $casts = [
    'created_at' => 'datetime',
    'updated_at' => 'datetime',
  ];
  
  ///////////////////////////////////////////////////////////////////////////////
  // Public: member functions: relations

  //*****************************************************************************
  
  /**
   * get m question answers
   * 
   * tested: tinker tested
   */

  public function questionAnswers()
  {
    return $this->hasMany(QuestionAnswer::class, 'picture_id', 'id');
  }
}
