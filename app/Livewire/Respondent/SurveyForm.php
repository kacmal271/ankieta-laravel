<?php

namespace App\Livewire\Respondent;

use App\Helper\Enumeration\Design;

use App\Helper\Sanitization;
use App\Helper\ServerDatabaseConversion;
use App\Helper\Translator;
use App\Models\Survey\Answer;
use App\Models\Survey\Visitor;

use App\Models\Survey\Category;
use Livewire\WithPagination;

use Livewire\Component;

class SurveyForm extends Component
{
  use WithPagination;

  ///////////////////////////////////////////////////////////////////////////////
  // MEMBER DATA

  public $answersRecord;

  /**
   * refresh component by calling: php: $this->dispatch('myForceReload')
   * refresh component by calling: js: Livewire.emit('myForceReload')
   */

  protected $listener = [
    'myForceReload' => '$refresh'
  ];

  ///////////////////////////////////////////////////////////////////////////////
  // MEMBER FUNCTION: PUBLIC

  //*****************************************************************************

  public function render()
  {
    /**
     * fetch survey answers here in Component
     * remember: properties are not reactive
     * 
     * laravel view fetched Model -
     * is not guaranteed to reflect -
     * Livewire updates -
     * as the user makes them
     */

    $this->answersRecord = Visitor::where('session_id', session('saved_session_id'))
      ->first()
      ->answer;

    $paginator = $this->getPaginator();

    $categoriesQuestionsAnswers = [];

    foreach ($paginator as $category)
    {
      $categoriesQuestionsAnswers[] = $this->getCategoryQuestions($category);
    }

    return view('livewire.respondent.survey-form', [
      'paginator'                       => $paginator,
      'categoriesQuestionsAnswers'      => $categoriesQuestionsAnswers,
    ]);
  }

  //*****************************************************************************

  public function update($answerName, $answerValue)
  {
    // if updating research question
    if (in_array($answerName, ['metroValue', 'fluentValue']))
    {
      // remember the fetch datetime of the information
      Answer::get()->setNullColumnOnce(
        str_replace('Value', '', $answerName) . 'End',
        now()
      );
    }

    // remove error messages
    $this->resetValidation();

    // handle placeholders
    if ($answerValue == "null")
    {
      return;
    }
    
    try
    {
      // validate
      $this->_validate([$answerName, $answerValue]);
    }
    catch (\Exception $e)
    {
      // error message
      $this->addError("error.$answerName", __($e->getMessage()));

      return;
    }
    
    $this->answersRecord->{$answerName} = $answerValue;

    if ( ! $this->answersRecord->update())
    {
      // error message
      $this->addError("error.$answerName", __('Cannot register the answer, please try again.'));

      return;
    }

    // success message
    $this->addError("success.$answerName", __('Answer registered successfully.'));
  }

  //*****************************************************************************

  public function finish()
  {

    /**
     * migration sets: boolean
     * laravel treats boolean as: TINYINT
     * 
     * mysql type: TINYINT
     */

    $this->answersRecord->isFinished = 1;

    if ( ! $this->answersRecord->update())
    {
      // error message
      $this->addError("error.finish", __('Unable to close the survey. This is optional anyways. Thank You for your time.'));

      return;
    }

    return redirect()->route('thank-you');
  }

  ///////////////////////////////////////////////////////////////////////////////
  // MEMBER FUNCTION: PRIVATE

  //*****************************************************************************

  private function _validate($validables)
  {
    foreach ($validables as $validableKey => $validable)
    {
      $sanitized = Sanitization::sanitizeInput($validable);

      if ($sanitized != $validable)
      {
        throw new \Exception(__("Validation failed for: :validable", ['validable' => $validable]));
      }
    }
  }

  //*****************************************************************************

  /**
   * post processing functions wrapper
   */

  private function postprocessQuestions($questions)
  {
    $resolvedQuestions = $this->resolveParameterStrings($questions);

    $translatedQuestions = $this->translateResolvedParameters($resolvedQuestions);

    return $translatedQuestions;
  }

  //*****************************************************************************

  private function translateResolvedParameters($questions)
  {
    // prepare translations array
    $translatedQuestions = [];

    foreach ($questions as $question)
    {
      // TRANSLATE
      $question->question = Translator::translate($question->question);
      $question->subquestion = Translator::translate($question->subquestion);

      // append to translations
      $translatedQuestions[] = $question;
    }

    return $translatedQuestions;
  }

  //*****************************************************************************

  private function resolveParameterStrings($questions)
  {
    $resolvedQuestions = [];

    foreach ($questions as $question)
    {
      $question = $this->resolveParameterStringAttribute($question, 'question');
      $question = $this->resolveParameterStringAttribute($question, 'subquestion');
      $resolvedQuestions[] = $question;
    }

    return $resolvedQuestions;
  }

  //*****************************************************************************

  private function resolveParameterStringAttribute($question, $attribute)
  {
    // resolve: pretranslated string
    $resolution = __($question->$attribute);
    
    // RESOLVE QUESTION PARAMETERS
    // convert parameter strings into normal strings
    $resolvedQuestion = ServerDatabaseConversion::resolveParameterString(
      $question, $resolution, ':', $question->context
    );

    $question->$attribute = $resolvedQuestion;

    return $question;
  }

  //*****************************************************************************

  private function getPaginator()
  {
    $paginator = Category::paginate(1);

    $paginator->publicFirstPage = 1;

    $paginator->publicLastPage = Category::all()->count();

    return $paginator;
  }

  //*****************************************************************************

  private function getCategoryQuestions($category)
  {
    // questions are unsorted at first

    $questionsAnswers = collect();

    foreach ($category->questions as $question)
    {
      // extract question answers

      $questionAnswers = $this->getQuestionAnswers($question);

      // add question to sortable array

      $questionsAnswers->push($questionAnswers);
    }

    // sortBy sorts collection of objects by their public attributes
    $sortedQuestionsAnswers = $questionsAnswers->sortBy('orderNumber');

    $questions = $this->postprocessQuestions($sortedQuestionsAnswers);

    $category->questions = $questions;
    
    return $category;
  }

  //*****************************************************************************

  private function getQuestionAnswers($question)
  {
    // answers are unsorted at first

    $answers = collect();

    foreach ($question->questionAnswers as $answer)
    {
      // add question to sortable array

      $answers->push($answer);
    }
    $sortedAnswers = $answers->sortBy('orderNumber');

    $question->answers = $sortedAnswers;

    return $question;
  }
}
