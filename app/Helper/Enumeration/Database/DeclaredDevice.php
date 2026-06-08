<?php

namespace App\Helper\Enumeration\Database;

enum DeclaredDevice : string
{
  case Large      = 'large';
  case Tablet     = 'tablet';
  case Handheld   = 'handheld';
  case Other      = 'other';
}