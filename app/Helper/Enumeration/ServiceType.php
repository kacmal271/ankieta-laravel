<?php

//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

/**
 * relations with
 *   database => assert values match or SUFFER horribly...
 */

namespace App\Helper\Enumeration;

//-----------------------------------------------------------------------------
enum ServiceType : string
{
  case Bus            = 'bus';
  case Tram           = 'tram';
  case NightService   = 'night.service';
  case TouristLine    = 'tourist.line';
}