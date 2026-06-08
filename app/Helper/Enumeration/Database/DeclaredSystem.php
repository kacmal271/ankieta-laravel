<?php

namespace App\Helper\Enumeration\Database;

enum DeclaredSystem : string
{
  case Win10      = 'win10';
  case Win8       = 'win8';
  case WinOld     = 'win_old';
  case MacOS      = 'macos';
  case Android    = 'android';
  case iOS        = 'ios';
  case Other      = 'other';
}