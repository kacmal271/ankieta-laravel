<?php

namespace App\Http\Controllers\Auth;

use App\helper\Enumeration\Admin\AdminIndex;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
  /*
  |--------------------------------------------------------------------------
  | Login Controller
  |--------------------------------------------------------------------------
  |
  | This controller handles authenticating users for the application and
  | redirecting them to your home screen. The controller uses a trait
  | to conveniently provide its functionality to your applications.
  |
  */
  
  use AuthenticatesUsers;
  
  /**
   * Where to redirect users after login.
   *
   * @var string
   */
  protected $redirectTo = '/';
  
  //*****************************************************************************
  
  /**
  * Create a new controller instance.
  *
  * @return void
  */
  public function __construct()
  {
    // Laravel 12.x
    // cannot use like this
    // alternative: see web.php
    // Route::get(...)->middleware('guest');

    // $this->middleware('guest');
  }
  
  //*****************************************************************************
  // SHOW LOGIN FORM

  public function index()
  {
    return view('auth.login');
    
  }

  //*****************************************************************************
  // MANUAL LOGIN LOGIC

  public function authenticate(Request $request)
  {
    /**
     * validate()
     * 
     *     handles the token: @csrf
     *     prevents: the double form submission problem
     * 
     * Handle an authentication attempt
     * 
     * Login User based on:
     * # id
     * # password
     */

    $credentials = $request->validate([

      /**
       * $request has names-values of <form>
       */

      // array of special requirements
      'name' => ['required', ''],

      // password hashed automatically
      'password' => ['required', ''],
      
    ]);
    
    $isRemembered = $request->input('remember') == null ? false : true;
      
    // make database query
    if (Auth::attempt($credentials, $isRemembered))
    {
      return redirect()->route('admin.index', [
        'adminIndex' => AdminIndex::Download
      ]);

    }

    return back()->withErrors([
      'status-bar' => __("Authorization failed.")
    ]);

  }  
  
  //*****************************************************************************

  public function logout()
  {
    Auth::logout();
    
    // after login: redirect to welcome page
    return redirect()->route('auth.index');

  }
}
