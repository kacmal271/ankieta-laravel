<?php

//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

/**
 * cooperate with
 *   ServerDatabaseConversion.php
 *   ParameterString.php : enum
 */

namespace App\Helper\Interface;

use App\Helper\Enumeration\ParameterString;

interface IParameterStringResolver
{
  /**
   * public in the Interface
   * public in the Class implementation
   * NO OTHER OPTION
   */
  
  /**
   * lookupContextString
   * 
   * lookup context string further
   * callable from outside the class
   *
   * @return string
   */

  public static function lookupContextString(
    ParameterString $parameterString,
    string $contextString
  ) : string;
  
  /**
   * resolveParameterString
   *
   * @param ParameterString $parameterEnum
   * @param string $contextString
   * @return string
   */

  public function resolveParameterString(
    ParameterString $parameterEnum,
    string $contextStrings
  ) : string;

  public function resolveIcon(
    string $contextString
  ) : string;

  public function resolveLink(
    string $contextString
  ) : string;
}