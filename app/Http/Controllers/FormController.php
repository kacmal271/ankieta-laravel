<?php

//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

/**
 * This Class Goals
 * # User entry point into application
 */

namespace App\Http\Controllers;

class FormController extends Controller
{
  //*****************************************************************************

  /**
   * delegate to livewire: survey_form
   */

  public function index()
  {
    return view('form.index');
  }
}
