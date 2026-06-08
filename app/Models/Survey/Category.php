<?php

namespace App\Models\Survey;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  // mass assignable: can user Model->fill()
  
  protected $fillable = [
    'id',
    'created_at',
    'updated_at',
    'orderNumber',
    'category',
  ];

  protected $casts = [
    'created_at' => 'datetime',
    'updated_at' => 'datetime',
  ];
  
  ///////////////////////////////////////////////////////////////////////////////
  // Public: member functions: relations

  //*****************************************************************************
  
  /**
   * get m questions
   * 
   * tested: tinker tested
   */

  public function questions()
  {
    return $this->hasMany(Question::class, 'category_id', 'id');
  }
}
