<?php

namespace App\Models\Survey;

use Illuminate\Database\Eloquent\Model;

class QuestionAnswer extends Model
{
  // mass assignable: can user Model->fill()
  
  // foreign key: dont let mass assignable

  protected $fillable = [
    'id',
    'created_at',
    'updated_at',
    'orderNumber',
    'answer',
    'answer_name',
    'value',
  ];

  protected $casts = [
    'created_at' => 'datetime',
    'updated_at' => 'datetime',
  ];

  ///////////////////////////////////////////////////////////////////////////////
  // Public: member functions: relations

  //*****************************************************************************
  
  /**
   * get 1 picture
   * 
   * tested: tinker tested
   */

  public function picture()
  {
    return $this->belongsTo(Picture::class, 'picture_id', 'id');
  }

  //*****************************************************************************
  
  /**
   * get 1 question
   * 
   * tested: tinker tested
   */

  public function question()
  {
    return $this->belongsTo(Question::class, 'question_id', 'id');
  }

}
