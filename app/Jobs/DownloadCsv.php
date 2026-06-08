<?php

//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

/**
 * DownloadCsv.php
 * 
 * 
 */

namespace App\Jobs;

use App\Events\FileDownloadReady;
use App\Helper\Converter;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Storage;

//-----------------------------------------------------------------------------

/**
 * DownloadCsv
 * 
 * 
 */

class DownloadCsv implements ShouldQueue
{
  use Queueable;

  //*****************************************************************************
  
  /**
   * __construct
   *
   * @return void
   */

  public function __construct(
    private int $userId,
    private string $filePathName,
    private string $downloadLink,
    private string $serializedCsvDataClosure,
  )
  {
    //
  }

  //*****************************************************************************
  
  /**
   * handle
   *
   * @return void
   */
  
  public function handle(): void
  {
    // get csv closure
    $csvDataClosure = unserialize($this->serializedCsvDataClosure);

    // get csv data
    $csvData = $csvDataClosure();

    // save csv file
    Storage::disk('local')->put(
      $this->filePathName,
      Converter::arrayToCsvString($csvData)
    );

    // broadcast download route after job finished
    FileDownloadReady::dispatch(
      $this->userId,
      $this->downloadLink
    );
  }
}
