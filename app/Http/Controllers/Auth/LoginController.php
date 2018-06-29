<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    protected function sendLoginResponse(Request $request)
    {
        $request->session()->regenerate();
        
       // $this->guard()->user()->role->name=='university'? $this->redirectTo='/universidad':'';
       //      $this->guard()->user()->role->name=='company'? $this->redirectTo='/empresa':'';
       //      $this->guard()->user()->role->name=='student'? $this->redirectTo='/estudiante':'';
       //  $this->clearLoginAttempts($request);
        if($request->ajax()){
            return 'true';
        }


        return $this->authenticated($request, $this->guard()->user())
        ?: redirect()->intended($this->redirectTo);
    }
}
