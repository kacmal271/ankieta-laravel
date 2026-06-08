<?php

//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

/**
 * cooperate with ServerDatabaseConversion::translateParameterString
 */

namespace App\Helper\Enumeration;

//-----------------------------------------------------------------------------
enum Design : string
{
  case Metro        = 'metro';
  case Fluent       = 'fluent';
}