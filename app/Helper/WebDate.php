<?php

namespace App\Helper;

//-----------------------------------------------------------------------------

class WebDate
{

  //*****************************************************************************

  /**
   * input:   [
   *   0 => stdClass,
   *   1 => stdClass,
   *   4 => stdClass
   * ]
   * 
   * output:  [
   *   23 => stdClass,
   *   0  => stdClass,
   *   1  => stdClass,
   *   2  => stdClass,
   *   3  => stdClass,
   *   4  => stdClass
   *   5  => stdClass
   * ]
   */

  public static function padTimeArray(
    $timestampsArray,
    $minTimestampValue = 0,
    $maxTimestampValue = 23,
    $paddingValue = [],
    $withOuterPadding = true
  )
  {
    try
    {
      WebArray::assertNonZeroArray($timestampsArray);

      // assert correct key timestamp chronology of time
      // ksort($timestampsArray);

      // inner padding first

      $inbetweenTimestamp = array_key_first($timestampsArray);

      // (A) prepare first entry
      $paddedTimetampsArray = [ " $inbetweenTimestamp" => $timestampsArray[$inbetweenTimestamp] ];

      $isFirstLoop = true;

      foreach ($timestampsArray as $currentTimestampKey => $currentTimestamp)
      {
        if ($isFirstLoop)
        {
          // (A) at least 2 values needed for a comparison

          $isFirstLoop = false;

          continue;
        }

        // dont overwrite the previous timestamp array entry
        $inbetweenTimestamp++;

        // clamp
        $inbetweenTimestamp = $inbetweenTimestamp % ($maxTimestampValue + 1);

        // compare 2 values
        // pad until current timestamp reached
        while ($inbetweenTimestamp < $currentTimestampKey)
        {
          // note: dont loop from Smallest Hour to Greatest Hour
          // note: do loop from Smallest Index to Greatest Index
          // maybe 23 <-- THIS , 01, 02, 03

          // previous timestamp didnt match the current
          $paddedTimetampsArray[" $inbetweenTimestamp"] = $paddingValue;
          $inbetweenTimestamp++;
        }
        
        // previous timestamp matched current
        $paddedTimetampsArray[" $inbetweenTimestamp"] = $currentTimestamp;

      }

      // substitute old array with the padded array
      $timestampsArray = $paddedTimetampsArray;

      if ($withOuterPadding)
      {
        // get outer padding context

        $firstTimestampKey    = array_key_first($timestampsArray);
        $lastTimestampKey     = array_key_last($timestampsArray);

        // get outer padding
        // assume: 0-23

        $firstExtraTimestamp  = $firstTimestampKey == 0  ? 23  : $firstTimestampKey - 1;
        $lastExtraTimestamp   = $lastTimestampKey  == 23 ? 0   : $lastTimestampKey + 1;

        // prepend original array
        $timestampsArray = [" $firstExtraTimestamp" => $paddingValue] + $timestampsArray;

        // append original array
        $timestampsArray = $timestampsArray + [" $lastExtraTimestamp" => $paddingValue];
      }

      return $timestampsArray;
    }
    catch (\Exception $e)
    {
      // dont assign anything
      // to the caller
      
      return;
    }
  }
}