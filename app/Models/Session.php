<?php

namespace App\Models;

use App\Helper\Enumeration\OperatingSystem;

class Session
{
  public static function detectOS() : OperatingSystem
  {
    // Windows
    if (preg_match('/Windows/i', $_SERVER['HTTP_USER_AGENT']))
    {
      return OperatingSystem::Windows;
    }

    // Android
    if (preg_match('/Android/i', $_SERVER['HTTP_USER_AGENT']))
    {
      return OperatingSystem::Android;
    }

    // macOS (exclude iPhone/iPad to avoid false positives)
    if (preg_match('/Macintosh|Mac OS X/i', $_SERVER['HTTP_USER_AGENT']) && !preg_match('/iPhone|iPad|iPod/i', $_SERVER['HTTP_USER_AGENT']))
    {
      return OperatingSystem::Macintosh;
    }

    // iOS (iPhone / iPad / iPod)
    if (preg_match('/iPhone|iPad|iPod/i', $_SERVER['HTTP_USER_AGENT']))
    {
      return OperatingSystem::iOS;
    }

    return OperatingSystem::Generic;
  }
}