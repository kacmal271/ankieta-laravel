<?php

namespace App\Helper\Enumeration;

enum OperatingSystem : string
{
  case Windows      = 'windows';
  case Android      = 'android';
  case Macintosh    = 'macintosh';
  case iOS          = 'ios';
  case Generic      = 'generic';
}