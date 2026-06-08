<?php

//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

/**
 * ServerDatabaseConversion Class - Goals
 * # define function(s) converting datatypes
 * # support view data display
 * 
 * Table of Contents
 * # LANGUAGE INFLEXION
 * # AM/PM DATE() STRING SWITCH
 */

namespace App\Helper;

use App\Models\Survey\Question;
use App\Helper\Enumeration\ParameterString;
use App\Helper\Interface\IParameterStringResolver;

use Illuminate\Support\Str;
use Illuminate\Http\UploadedFile;

//-----------------------------------------------------------------------------
class ServerDatabaseConversion
{
	///////////////////////////////////////////////////////////////////////////////
  // STATIC: MEMBER FUNCTION: PUBLIC

	//*****************************************************************************

  /**
   * desc
   * 
   *   input
   * 
   *     $resolver:            IParameterStringResolver
   *     $parameterString:     "text containing :icon and :link to :icon"
   *     $prefix:              ":"
   *     $contextString:       "metro"
   * 
   *   return
   *     string: "text containing <i class="fontello"></i> and <a href='/metro/link'>link</a> to <i class="fontello"></i>"
   */
  
  /**
   * resolveParameterString
   *
   * @param array<string,?string> $contextString
   * @return string
   */

  public static function resolveParameterString(
    IParameterStringResolver $resolver,
    ?string $parameterString,
    string $prefix,
    ?string $contextString
  ) : ?string
  {
    if (is_null($contextString))
    {
      return $parameterString;
    }

    $resolvedString = $parameterString;

    $codes = [];
    
    // need regex
    preg_match_all('/\:[_a-zA-Z]+/', $parameterString, $codes);

    // save matches, discard the wrapper
    $codes = $codes[0];
    
    foreach ($codes as $code)
    {
      // beware: exception string[0]

      if ( ! empty($code) && $code[0] == $prefix)
      {
        // hit: parameter

        // resolve all the $prefix codes

        $resolvedCode = $resolver->resolveParameterString(

          /**
           * what
           *   ParameterString::Icon
           *   ParameterString::Link
           *   ParameterString::Default
           * context
           *   ServiceType::Bus->value
           *   'metro'
           *   'metro'
           */  

          // what
          ParameterString::from($code),

          // context
          Question::lookupContextString(ParameterString::from($code), $contextString)
        );

        $resolvedString = str_replace($code, $resolvedCode, $resolvedString);
      }

    } // foreach

    return $resolvedString;
  }

	//*****************************************************************************

  /**
   * desc
   *   input: Uploaded File from <form multipart/form-data>
   *   output: "myfile-20241002-CNXD420.realExtension"
   */

  public static function getFileName(UploadedFile $file) : string
  {
    // get file name and ext
    $fileName = $file->getClientOriginalName();

    // get real file ext
    $fileExt = $file->extension();

    // get file name
    $fileExtClient = $file->getClientOriginalExtension();
    $fileName = basename($fileName, ".$fileExtClient");

    // Assert: filename unique
    $date = config('fs.filename.date');
    $seed = Str::random(config('fs.filename.seed.length'));
    
    return $fileName . "-$date-$seed.$fileExt";
  }

	//*****************************************************************************
	
  /**
   * description
   *   Turn Newline(s) Into <br>
   */

	public static function markupNewlines(?string $message) : ?string
	{
    if ($message == null)
    {
      return null;
    }

    $message = Sanitization::sanitizeInput($message);

		$message = str_replace("\r\n", '<br>', $message);
		$message = str_replace('\n', '<br>', $message);
		
		return $message;
		
	}

	//*****************************************************************************
	
  /**
   * description
   *   input: string "long-something-text-so-so-looong-like-a-snake.extension"
   *   output: string "long-somet..."
   *   output: string "long-somet... .extension"
   */

	public static function shortenFileName(
    string $fileName,
    int $maxChars = 10,
    bool $isExt = true
  ) : string
	{
    $dotPosition = strpos($fileName, '.');              // : int(10)
    $extension = substr($fileName, $dotPosition + 1);   // : 'txt'
    $fileName = substr($fileName, 0, $dotPosition);     // : 'robots'
		$fileNameNew = substr($fileName, 0, $maxChars);

    if (strlen($fileNameNew) != strlen($fileName))
    {
      $fileNameNew .= '...';
      if ($isExt)
        $fileNameNew .= " .$extension";
    }
    else
    {
      if ($isExt)
        $fileNameNew .= ".$extension";
    }
		
		return $fileNameNew;
		
	}
	
}