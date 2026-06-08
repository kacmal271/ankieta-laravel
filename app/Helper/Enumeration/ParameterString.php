<?php

//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

/**
 * cooperate with
 *   ServerDatabaseConversion.php
 *   IParameterStringResolver.php
 */

namespace App\Helper\Enumeration;

//-----------------------------------------------------------------------------
enum ParameterString : string
{
  case Default      = 'default';
  case Link         = ':link';
  case Icon         = ':icon';
  case ServiceType  = ':service_type';
  case LineNo       = ':line_no';
  case StopName     = ':stop_name';
  case StationName  = ':station_name';
  case TimePeriod   = ':time_period';
}