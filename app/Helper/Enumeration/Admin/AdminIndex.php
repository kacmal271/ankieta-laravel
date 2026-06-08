<?php

//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

/**
 * relations with
 *   resources\js\helper\enumeration\admin\AdminIndex.js
 */

namespace App\Helper\Enumeration\Admin;

//-----------------------------------------------------------------------------
enum AdminIndex : string
{
  case Download         = 'download';
  case Statistics       = 'statistics';
}