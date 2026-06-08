<?php

//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

/**
 * convert between types
 */

namespace App\Helper;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

//-----------------------------------------------------------------------------
class Converter
{  
  //*****************************************************************************
  
  /**
   * & arrayToCsvString
   *
   * @param array & $csv
   *   example:
   *     id, fName, lName
   *     1, Solaire, Astora
   *     2, Anastacia, Astora
   * 
   * @return string
   */

  public static function & arrayToCsvString(array & $csv) : string
  {
    // declare csv contents
    $csvContents = '';

    // all lines of csv
    foreach ($csv as $line)
    {
      // one line of csv
      for ($stringIndex = 0; $stringIndex < count($line); $stringIndex++)
      {
        // append data-string to current-line
        $csvContents .= $line[$stringIndex];

        // if not last data-string: append ';'
        if ($stringIndex < count($line) - 1)
        {
          $csvContents .= ';';
        }
      }

      // append PHP_EOL to $csvContents
      $csvContents .= PHP_EOL;
    }

    return $csvContents;
  }

  //*****************************************************************************
  
  /**
   * use case
   *   DB::table::get() -> Illuminate\Support\Collection<Model>
   *
   * @param  Collection<int,stdClass> $stdClassArray
   * @param  string $modelClass
   * @return Collection
   */

  public static function classToModelCollection(
    Collection $stdClassCollection,
    string $modelClass
  ) : Collection
  {
    $collection = collect();

    foreach ($stdClassCollection as $stdClass)
    {
      $collection->add( $modelClass::find($stdClass->id) );
    }

    return $collection;
  }
}