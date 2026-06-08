<?php

namespace App\Helper\Trait;

trait ModelExtended
{
  //*****************************************************************************
  
  /**
   * setNullColumnOnce
   *
   * @param  string $columnName
   * @param  mixed $value
   * @return void
   */

  public function setNullColumnOnce(string $columnName, mixed $value) : void
  {
    if ( ! is_null($this->$columnName))
    {
      return;
    }

    $this->$columnName = $value;

    $this->save();
  }
}