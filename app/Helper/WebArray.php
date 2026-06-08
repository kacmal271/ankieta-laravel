<?php

namespace App\Helper;

//-----------------------------------------------------------------------------

class WebArray
{
  //*****************************************************************************

  public static function assertNonZeroArray($array)
  {
    if ($array == null)
    {
      // handle null values
      
      throw new \Exception("WebArray :: array expected, not null");
    }

    if (count($array) == 0)
    {
      // handle empty array
      
      throw new \Exception("WebArray :: array cannot be empty");
    }
  }
}