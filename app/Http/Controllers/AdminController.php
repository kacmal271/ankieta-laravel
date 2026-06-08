<?php

namespace App\Http\Controllers;

use InvalidArgumentException;
use Inertia\Inertia;
use App\Jobs\DownloadCsv;
use App\Models\Survey\Answer;
use App\Helper\Trait\TranslationsSerializer;
use App\Helper\Enumeration\Admin\AdminIndex;
use App\Helper\Filesystem;
use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;
use Illuminate\Broadcasting\BroadcastException;
use Laravel\SerializableClosure\SerializableClosure;

//-----------------------------------------------------------------------------

/**
 * AdminController
 */

class AdminController extends Controller
{
  use TranslationsSerializer;

  ///////////////////////////////////////////////////////////////////////////////
  // Member Function: Public

  //*****************************************************************************
  
  /**
   * getDownloadDataCsv
   *
   * @param array $allAsArray
   * @param bool $isMaxNullValues
   * @param int $maxNullValues
   * @param bool $isEmptyResearchQuestion
   * @param bool $isWrongControlQuestion
   * @return array<int,array<int,string>
   */

  public static function getDownloadDataCsv(
    array $allAsArray,
    bool $isMaxNullValues = false,
    int $maxNullValues = PHP_INT_MAX,
    bool $isEmptyResearchQuestion = false,
    bool $isWrongControlQuestion = false,
    bool $isFirstLineHeader = true,
  ) : array
  {
    if ($isFirstLineHeader)
    {
      $firstLine = $allAsArray[0];
      array_shift($allAsArray);
    }

    $answers = Answer::all();

    if ($isMaxNullValues)
    {
      $answers = Answer::filterFilled($answers, $maxNullValues);
    }

    if ($isEmptyResearchQuestion)
    {
      $answers = Answer::filterFilledResearchQuestions($answers);
    }

    if ($isWrongControlQuestion)
    {
      $answers = Answer::filterControlled($answers);
    }
    
    $filteredAsArray = Arr::where($allAsArray, function ($arrayAnswer) use ($answers) {

      foreach ($answers as $answer)
      {
        if ($arrayAnswer[0] == $answer->id)
        {
          return true;
        }
      }

      return false;

    });

    array_unshift($filteredAsArray, $firstLine);
    
    return $filteredAsArray;
  }

  //*****************************************************************************

  /**
   * index
   *
   * @param  AdminIndex $adminPage
   * @return 
   */

  public function index(AdminIndex $adminPage = AdminIndex::Download)
  {
    View::share('pageTitle', config('app.name') . ' | ' . __('Backrooms'));

    $contextData = $this->getContextData($adminPage);

    $csrf_field = $adminPage == AdminIndex::Download ? csrf_field()->toHtml() : null;

    return Inertia::render('Admin', [
      '$admin'        => auth()->user(),
      '$adminIndex'   => $adminPage,
      '$contextData'  => $contextData,
      '$csrf_field'   => $csrf_field,
      'translations'  => $this->getTranslationsAsJson(),
    ]);
  }

  //*****************************************************************************

  public function download($fileName)
  {
    /**
     * Linux: Litespeed
     *   csv contains html gibberish
     */

    FileSystem::download(
      storage_path("app/private/database/$fileName"),
      'text/csv',
      true
    );

    return back();

    /**
     * Linux: Litespeed
     *   doesnt work
     */

    // $filePathName = storage_path("app/private/database/$fileName");

    // return response()
    //   ->download(
    //     $filePathName,
    //     $fileName,
    //     [
    //       'Content-Description' => 'File Transfer',
    //       'Content-Type' => 'text/csv',
    //       'Content-Disposition' => 'attachment; filename="' . $fileName . '"',
    //       'Content-Transfer-Encoding' => 'binary',
    //       'Expires' => '0',
    //       'Cache-Control' => 'no-store, no-cache, must-revalidate',
    //       'Pragma' => 'no-cache',
    //       'Content-Length' => (string)filesize($filePathName)
    //     ]
    //   )
    //   ->deleteFileAfterSend(true);
  }

  //*****************************************************************************

  public function queue(Request $request)
  {
    try
    {

      // validate form-input data
      $validatedInputs = $request->validate([

        // working with validation:rule:boolean
        //   works: rule:boolean: <input type="checkbox" value="1" />
        //   invalid: rule:boolean: <input type="checkbox" value="true" />
        'is_max_null_values' => ['boolean'],

        'max_null_values' => ['required_if:is_max_null_values,true', 'integer', 'min:0'],
        'is_empty_research_question' => ['boolean'],
        'is_wrong_control_question' => ['boolean']
      ]);

      // define file path and name
      $filePathName = '/database/admin-download.csv';
      
      // append seed
      $filePathName = Filesystem::postfixFileName($filePathName, config('filesystem.file.name.seed.length'));

      $getCsvDataClosure = fn () => AdminController::getDownloadDataCsv(
        Answer::allAsArray(),
        $validatedInputs['is_max_null_values'] ?? false,
        $validatedInputs['max_null_values'] ?? PHP_INT_MAX,
        $validatedInputs['is_empty_research_question'] ?? false,
        $validatedInputs['is_wrong_control_question'] ?? false,
      );

      $serializableClosure = SerializableClosure::unsigned($getCsvDataClosure);

      // dispatch csv-download
      DownloadCsv::dispatch(
        userId: auth()->user()->id,
        filePathName: $filePathName,
        downloadLink: route('admin.download.download', [
          'fileName' => basename($filePathName)
        ]),
        serializedCsvDataClosure: serialize($serializableClosure)
      );
        // delay works only on queue:'database'
        // delay not needed when: CRON+Scheduler USED
        // CRON delays every minute
        // ->delay(now()->addSeconds(4));

    }
    catch (BroadcastException)
    {

      $this->download(basename($filePathName));

    }

    // return to download view
    return back();
    
  }

  ///////////////////////////////////////////////////////////////////////////////
  // Member Function: Private

  //*****************************************************************************

  private function getContextData(AdminIndex $adminIndex)
  {
    switch ($adminIndex)
    {
      case AdminIndex::Download:

        return $this->getDownloadDataInertia();
      
      case AdminIndex::Statistics:

        return $this->getStatisticsData();
      
      default:

        throw new InvalidArgumentException("unknown AdminIndex::Case");
    }
  }

  //*****************************************************************************

  private function getDownloadDataInertia() : array
  {
    // get answer-model data from its file definition
    $allAsArray = Answer::allAsArray();

    // define header data
    $headerData = $allAsArray[0];

    // map first column with keys
    $answerNameLabels = Arr::map(
      $headerData, 
      function ($columnName) {
        return [
          'value' => $columnName,

          // key for your annoying react.js
          'key' => $columnName
        ];
      }
    );

    // append key to the header row
    $tabularHeader = array_merge(
      $answerNameLabels,
      [ 'key' => 'names' ]
    );

    // remove header row
    $dataRows = $allAsArray;
    array_shift($dataRows);

    // sort data rows
    $sortedDataRows = array_sort($dataRows, 0, SORT_DESC);

    // declare $tabularData
    $tabularData = [];

    // fill $tabularData
    foreach ($sortedDataRows as $answer)
    {
      // declare $tabularRow
      $tabularRow = [];

      // fill $tabularRow
      foreach ($headerData as $universalKey => $columnName)
      {
        $tabularRow[] = [

          // $univarsalKey from same origin
          'value' => $answer[$universalKey],

          // key for your annoying react.js
          'key' => $columnName . $answer[0]
        ];

      }
      
      // append current data row
      $tabularData[] = array_merge(

        $tabularRow,
        
        // assign to key: answer.id
        [ 'key' => $answer[0] ]

      );

    }

    $paginator = $this->getPaginatedAnswers($tabularData);
    
    return [
      'downloadLink'          => route('admin.download.queue'),

      // passing an assoc array
      // react.js: converts to JS object
      'tabularHeader'         => $tabularHeader,

      // passing an assoc array
      // react.js: converts to JS object
      'tabularData'           => $paginator->items(),

      // Illuminate\Pagination\Paginator::getOption()
      'paginator'             => $paginator,
      'paginatorOptions'      => $paginator->getOptions()
    ];
  }

  //*****************************************************************************

  private function getPaginatedAnswers($answers)
  {
    // paginator: which page ?
    $currentPage = Paginator::resolveCurrentPage() ?? 1;

    // paginator: how many pages ?
    $perPage = config('answer.paginator.itemsPerPage');

    // data: slice out portion for paginator
    $answersArray = array_slice($answers, ($currentPage - 1) * $perPage, $perPage);

    // paginator: instance
    $paginatedAnswers = new Paginator($answersArray, $perPage, $currentPage, [
      'path'        => Paginator::resolveCurrentPath(),
      'currentPage' => Paginator::resolveCurrentPage(),
      'firstPage'   => 1,
      'lastPage'    => (int)ceil(count($answers) / $perPage)
    ]);

    return $paginatedAnswers;
  }

  //*****************************************************************************

  private function getStatisticsData() : array
  {
    $answers = Answer::all();

    $correct = Answer::filterCorrect($answers);
    $correctControlled = Answer::filterControlled($correct);
    $correctControlledOther = Answer::getComplement($correctControlled);

    return [
      'surveys.count.total'                   => $answers->count(),

      // not reject filled
      // filter filled = preserve filled
      'surveys.count.filled'                  => Answer::filterFilled($answers, 0)->count(),

      'surveys.count.null'                    => Answer::filterNulls($answers)->count(),
      'surveys.count.correct'                 => $correct->count(),
      'surveys.count.incorrect'               => Answer::filterIncorrect($answers)->count(),
      'surveys.count.correctControlled'       => $correctControlled->count(),
      'surveys.count.correctControlledOther'  => $correctControlledOther->count(),
    ];
  }
}
