<?php

//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

/**
 * cooperate with
 *   Question.php
 */

namespace App\Helper\Enumeration;

//-----------------------------------------------------------------------------
enum TimePeriod : string
{
  case WorkDays   = 'workdays';
  case Saturdays  = 'saturdays';
  case Sundays    = 'sundays';
}