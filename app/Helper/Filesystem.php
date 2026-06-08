<?php

//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

/**
 * Filesystem.php
 * # define static helper functions
 * # provide PHP experience of .bat
 * 
 */

namespace App\Helper;

use Illuminate\Support\Str;

use DateTime;

//-----------------------------------------------------------------------------

/**
 * Filesystem class
 * 
 */

class Filesystem
{
  ///////////////////////////////////////////////////////////////////////////////
  // Member Function: Public
	
	//*****************************************************************************
	
	/**
	 * # Author: https://www.php.net/manual/en/function.file-put-contents.php#84180
	 */
	 
	public static function file_force_contents($pathFile, $content)
	{
		$pathFile = Filesystem::transformBackslashToSlash($pathFile);
		
		$parts = explode('/', $pathFile);	// create array on delimiter '/'
		
		$file = array_pop($parts);				// remove and return last element
		
		$pathFile = '';										// refresh variable
		
		// Handle letter on Windows
		if (preg_match('/[A-Z]:/', $parts[0]))
		{
			$pathFile = $parts[0];
			
			array_shift($parts);	// remove first element
			
		}
		
		foreach($parts as $part)
		{
			if( ! is_dir($pathFile .= "/$part"))
			{
				mkdir($pathFile);
				
			}
			
		}
			
		file_put_contents("$pathFile/$file", $content);
			
	}

  //*****************************************************************************
  
  /**
   * download
   *
   * @param  mixed $filePathName
   * @return void
   */

  public static function download(string $filePathName, string $mime, bool $shouldDelete)
  {
    try
    {

      if(file_exists($filePathName))
      {
        // HEADERS - OBLIGATORY
        header('Content-Description: File Transfer');
        header("Content-Type: $mime");

        // Content-Disposition
        header('Content-Disposition: attachment; filename="' . basename($filePathName) . '"');
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
        header('Pragma: public');
        header('Content-Length: ' . filesize($filePathName));

        // DOWNLOAD FILE - READFILE() IN PRACTICE
        readfile($filePathName);

      }

      // Assert file_exists() behaves properly
      clearstatcache();

      if ($shouldDelete && file_exists($filePathName))
      {
        unlink($filePathName);
      }

      exit();

      throw new \Throwable('FileDownloaded');

    }
    catch (\Throwable $e)
    {

      if ($e->getMessage() !== 'FileDownloaded')
      {

        throw $e;
        
      }

    }
  }

  //*****************************************************************************
  
  /**
   * saveAsCsv
   *
   * @param array<int,array<int,string>> $csv
   *   example:
   *     id, fName, lName
   *     1, Solaire, Astora
   *     2, Anastacia, Astora
   * 
   * @return void
   */

  public static function saveAsCsv(string $filePathName, array $csv) : void
  {
    // create new file
    Filesystem::file_force_contents($filePathName, '');

    // open file
    $csvStream = fopen($filePathName, 'w');

    // declare csv contents
    $csvContents = Converter::arrayToCsvString($csv);

    // write $csvContents to $csvStream
    fwrite($csvStream, $csvContents);

    // close $csvStream
    fclose($csvStream);
  }

  //*****************************************************************************
  
  /**
   * input:   tmp.txt
   * output:   tmp.txt
   *
   * @param  string $fileName
   * @param  int $fileseedLengthName
   * @return string
   */
  
  public static function postfixFileName(string $fileName, int $seedLength = 4) : string
  {
    $extension = Filesystem::extension($fileName);
    $fileName = Filesystem::fileNameWithoutExtension($fileName);

    // append date string
    $fileName .= '_' . (new DateTime())->format('Ymd_his');

    // append seed string
    $fileName .= '_' . Str::random($seedLength);

    // return postfixed file-name
    return "$fileName.$extension";
  }

  ///////////////////////////////////////////////////////////////////////////////
  // Member Function: Private

	//*****************************************************************************
	
	/**
	 * $path
	 *   path to dir or file
	 */
	
	private static function transformBackslashToSlash($path)
	{
		return str_replace("\\", "/", $path);
		
	}

  //*****************************************************************************
  
  /**
   * extension
   *
   * @param  mixed $fileName
   * @return string
   *   'txt', 'json', 'js'
   */

  private static function fileNameWithoutExtension(string $fileName) : string
  {
    // remember regex (.+)\.[a-zA-Z0-9]+
    $fileNameRegex = '/(.+)\.[a-zA-Z0-9]+/';

    $matches = [];

    preg_match($fileNameRegex, $fileName, $matches);

    return $matches[1];
  }

  //*****************************************************************************
  
  /**
   * extension
   *
   * @param  mixed $fileName
   * @return string
   *   'txt', 'json', 'js'
   */

  private static function extension(string $fileName) : string
  {
    // remember regex (.+)\.[a-zA-Z0-9]+
    $fileNameRegex = '/.+\.([a-zA-Z0-9]+)/';

    $matches = [];

    preg_match($fileNameRegex, $fileName, $matches);

    return $matches[1];
  }
}