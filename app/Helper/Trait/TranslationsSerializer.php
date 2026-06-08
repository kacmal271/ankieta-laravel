<?php

namespace App\Helper\Trait;

//-----------------------------------------------------------------------------

trait TranslationsSerializer
{

  //*****************************************************************************

  private function getTranslationsAsJson()
  {
    $locale = app()->getLocale();

    $filePath = base_path("lang/$locale.json");

    $fileContents = file_get_contents($filePath);

    $fileAsJson = json_decode($fileContents);

    return $fileAsJson;
  }
}