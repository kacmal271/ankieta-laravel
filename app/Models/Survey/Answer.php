<?php

//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

/**
 * Answer.php
 * 
 * Description
 * 
 *   Survery Answer-s are identified by: PHP session id
 *   stored in: [php_info() @ session.save_path]
 *   Worst case screnerio: one respondent will overwrite another's survey
 *   Best case screnerio: there will not be enough respondents
 * 
 * 
 */

namespace App\Models\Survey;

use Closure;

use Illuminate\Support\Facades\Schema;

use App\Helper\Trait\ModelExtended;
use App\Helper\Enumeration\Database\DeclaredDevice;
use App\Helper\Enumeration\Database\DeclaredSystem;
use App\Helper\Enumeration\Design;
use App\Helper\Enumeration\OperatingSystem;
use App\Models\Session;
use Illuminate\Database\Eloquent\Model;
use InvalidArgumentException;

//-----------------------------------------------------------------------------

/**
 * Answer
 * 
 * 
 */

class Answer extends Model
{
  use ModelExtended;

  ///////////////////////////////////////////////////////////////////////////////
  // MEMBER DATA
  
  // make all member data mass assignable
  // protected $guarded = [];
  
  // mass assignable
  protected $guarded = [];

  protected $casts = [
    'created_at'              => 'datetime',
    'updated_at'              => 'datetime',
    'metroStart'              => 'datetime',
    'metroEnd'                => 'datetime',
    'fluentStart'             => 'datetime',
    'fluentEnd'               => 'datetime',
  ];

  ///////////////////////////////////////////////////////////////////////////////
  // MEMBER FUNCTION: Public Static

  //*****************************************************************************
  
  /**
   * allAsArray
   *
   * @param  mixed $withExtras
   *   extras is:
   *     * difference between: updated_at - created_at
   *       how much time the survey took
   *       in seconds
   *     
   * @return array<int,array<int,string>>
   */

  public static function allAsArray($withExtras = true) : array
  {
    // declare returnal array
    $answersAsArray = [];

    // declare column names array
    $columnNamesArray = [];

    // loop each column
    foreach (Schema::getColumns('answers') as $column)
    {
      $columnNamesArray[] = $column['name'];
    }

    // push column names into answers-array
    $answersAsArray[] = $columnNamesArray;

    // loop each answer model
    foreach (Answer::all() as $answer)
    {
      // declare row-data array
      $rowDataArray = [];

      // loop each column
      foreach ($columnNamesArray as $columnName)
      {
        $data = $answer->$columnName;

        if (is_null($data))
        {
        // transform null data to "null"-string
          $rowDataArray[] = 'null';
          continue;
        }

        // switch between $columnName
        switch (Schema::getColumnType('answers', $columnName))
        {
          case "timestamp":
          case "datetime":

            // cast to human-readable datetime
            $data = $data->format(config('datetime.datetime.format'));

            break;
        }

        // push row-data of column
        $rowDataArray[] = $data;

      }

      // push row-data into answers-array
      $answersAsArray[] = $rowDataArray;
    }

    // if $withExtras then append extras
    if ($withExtras)
    {
      Answer::appendExtraColumns($answersAsArray);
    }

    // return array<int,array<int,string>>
    return $answersAsArray;
  }

  //*****************************************************************************

  public static function getComplement($answers)
  {
    $allAnswers = Answer::all();

    return $allAnswers->reject(function ($answer) use ($answers)
    {
      foreach ($answers as $answerToCompareTo)
      {
        if ($answer->id === $answerToCompareTo->id)
        {
          // reject this answer if answerToCompareTo matches
          return true;
        }
      }

      return false;
    });
  }

  //*****************************************************************************

  public static function filterControlled($answers)
  {
    // filter = preserve
    return $answers->filter(function ($answer) {
      
      switch ($answer->declaredDevice)
      {
        case DeclaredDevice::Large->value:

          if ($answer->declaredSystem === DeclaredSystem::Win10   ->value  && Session::detectOS() === OperatingSystem::Windows)     return true;    
          if ($answer->declaredSystem === DeclaredSystem::Win8    ->value  && Session::detectOS() === OperatingSystem::Windows)     return true;    
          if ($answer->declaredSystem === DeclaredSystem::WinOld  ->value  && Session::detectOS() === OperatingSystem::Windows)     return true;    
          if ($answer->declaredSystem === DeclaredSystem::MacOS   ->value  && Session::detectOS() === OperatingSystem::Macintosh)   return true;    
          if ($answer->declaredSystem === DeclaredSystem::Other   ->value  && Session::detectOS() === OperatingSystem::Generic)     return true;

          break;

        case DeclaredDevice::Tablet->value:
        case DeclaredDevice::Handheld->value:

          if ($answer->declaredSystem === DeclaredSystem::iOS     ->value && Session::detectOS() === OperatingSystem::iOS)      return true;    
          if ($answer->declaredSystem === DeclaredSystem::Android ->value && Session::detectOS() === OperatingSystem::Android)  return true;    
          if ($answer->declaredSystem === DeclaredSystem::Other   ->value && Session::detectOS() === OperatingSystem::Generic)  return true;  

          break;

        case DeclaredDevice::Other->value:

          return true;

          break;
      }

      return false;

    });
  }

  //*****************************************************************************

  public static function filterFilledResearchQuestions($answers)
  {
    // filter = preserve
    return $answers->reject(function ($answer) {

      if (is_null($answer->metroValue))
      {
        return true;
      }

      if (is_null($answer->fluentValue))
      {
        return true;
      }

      return false;

    });
  }

  //*****************************************************************************

  public static function filterIncorrect($answers)
  {
    // filter = preserve
    return $answers->reject(function ($answer) {

      $condition = $answer->metroCorrectValue === $answer->metroValue;
      $condition = $condition && $answer->fluentCorrectValue === $answer->fluentValue;

      return $condition;

    });
  }

  //*****************************************************************************

  public static function filterCorrect($answers)
  {
    // filter = preserve
    return $answers->filter(function ($answer) {

      $condition = $answer->metroCorrectValue === $answer->metroValue;
      $condition = $condition && ($answer->fluentCorrectValue === $answer->fluentValue);

      return $condition;

    });
  }
  
  //*****************************************************************************
    
  /**
   * filterNulls
   *
   * @param  mixed $answers
   * @return mixed answers w/ nulls
   */

  public static function filterNulls($answers)
  {
    // filter = preserve
    return $answers->filter(function ($answer) {

      foreach ($answer->getAttributes() as $attribute)
      {
        if (is_null($attribute))
        {
          // at least one attribute has to be null
          // null attribute preserves the answer
          return true;
        }
      }

      return false;

    });
  }

  //*****************************************************************************
  
  /**
   * filterFilled
   *
   * @param  mixed $answers
   * @return mixed answers w/o nulls
   */

  public static function filterFilled($answers, $maxNullValues = PHP_INT_MAX)
  {

    return $answers->reject(function ($answer) use ($maxNullValues) {

      $nullValuesCount = 0;

      foreach ($answer->getAttributes() as $attribute)
      {
        if (is_null($attribute))
        {
          $nullValuesCount++;
        }

        if ($nullValuesCount > $maxNullValues)
        {
          // remove answer model that misses any attribute
          return true;
        }
      }

      return false;

    });
  }

  //*****************************************************************************

  public static function get()
  {
    $visitor = Visitor::where('session_id', session('saved_session_id'))
      ->first();

    return is_null($visitor) ? null : $visitor->answer;
  }

  ///////////////////////////////////////////////////////////////////////////////
  // MEMBER FUNCTION: Public

  //*****************************************************************************

  public function isCorrect(Design $context) : bool
  {
    switch ($context)
    {
      case Design::Metro:

        return $this->metroCorrectValue == $this->metroValue;
      
      case Design::Fluent:

        return $this->fluentCorrectValue == $this->fluentValue;
      
      default:

        throw new InvalidArgumentException("cannot find Design::$context");
    }
  }

  //*****************************************************************************

  /**
   * tested: tinker tested
   * 
   * database
   * 
   *   removing record: removes visitor
   */

  public function visitor()
  {
    return $this->belongsTo(Visitor::class, 'id', 'answer_id');
  }

  ///////////////////////////////////////////////////////////////////////////////
  // MEMBER FUNCTION: Private Static
  
  //*****************************************************************************
  
  /**
   * appendExtraColumns
   *
   * @param  array & $answersAsArray
   * @return void
   */

  private static function & appendExtraColumns(array & $answersAsArray)
  {
    // append secondsTaken extra column
    Answer::appendExtraColumn(
      $answersAsArray,
      'secondsTaken',
      fn ($answer) => Answer::getSeconds($answer)
    );

    // append isMetroCorrect extra column
    Answer::appendExtraColumn(
      $answersAsArray,
      'isMetroCorrect',
      fn ($answer) => (int)Answer::isResearchQuestionCorrect($answer, 'metro')
    );

    // append metroSecondsTaken extra column
    Answer::appendExtraColumn(
      $answersAsArray,
      'metroSecondsTaken',
      fn ($answer) => Answer::getSeconds($answer, Design::from('metro'))
    );

    // append isFluentCorrect extra column
    Answer::appendExtraColumn(
      $answersAsArray,
      'isFluentCorrect',
      fn ($answer) => (int)Answer::isResearchQuestionCorrect($answer, 'fluent')
    );

    // append fluentSecondsTaken extra column
    Answer::appendExtraColumn(
      $answersAsArray,
      'fluentSecondsTaken',
      fn ($answer) => Answer::getSeconds($answer, Design::from('fluent'))
    );

    // return (reference to) $answerAsArray with extra columns
    return $answersAsArray;
  }

  //*****************************************************************************
  
  /**
   * appendExtraColumn
   *
   * @param array & $answersAsArray
   * @param string $columnName
   * @param Closure(Answer $answer):mixed $columnValue
   *   call closure to get column value
   * @return array &
   */

  private static function & appendExtraColumn(
    array & $answersAsArray,
    string $columnName,
    Closure $columnValue
  ) : array
  {
    // loop each $answersAsArray row
    foreach ($answersAsArray as $key => & $row)
    {
      // if first row then push column name
      if ($key == 0)
      {
        $row[] = $columnName;

        continue;
      }

      // fetch model of interest
      $answerOfInterest = Answer::find($row[0]);

      // call generator closure
      $generatedValue = $columnValue($answerOfInterest);

      // push column value
      $row[] = $generatedValue;
    }

    // return $answersAsArray
    return $answersAsArray;
  }

  //*****************************************************************************
  
  /**
   * isResearchQuestionCorrect
   *
   * @param Answer $answer
   * @param string $researchQuestion
   * @return bool
   */

  private static function isResearchQuestionCorrect(
    Answer $answer,
    string $researchQuestion
  ) : bool
  {
    if (is_null($answer))
    {
      return false;
    }

    switch ($researchQuestion)
    {
      case 'metro':

        return $answer->metroValue === $answer->metroCorrectValue;
      
      case 'fluent':

        return $answer->fluentValue === $answer->fluentCorrectValue;
        
    }

    return false;
  }

  //*****************************************************************************

  private static function getSeconds($answer, ?Design $design = null) : int
  {
    if (is_null($answer))
    {
      return 0;
    }

    switch ($design)
    {
      // case of Metro question seconds
      case Design::Metro:

        $startTime = $answer->metroStart;
        $finishTime = $answer->metroEnd;
        
        break;

      // case of Fluent question seconds
      case Design::Fluent:

        $startTime = $answer->fluentStart;
        $finishTime = $answer->fluentEnd;

        break;

      // whole survey seconds
      default:

        $startTime = $answer->created_at;
        $finishTime = $answer->updated_at;

    }

    if (is_null($startTime) || is_null($finishTime))
    {
      return -1;
    }

    return $startTime->diffInSeconds($finishTime, absolute: true);;
  }
}