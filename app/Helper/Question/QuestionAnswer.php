<?php

namespace App\Helper\Question;

class QuestionAnswer
{
  public function __construct(
    public $id,
    public $label,
    public $value,
  ) { }
}