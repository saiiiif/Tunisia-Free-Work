<?php

namespace App\Http\Controllers\MembreAuth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Hesto\MultiAuth\Traits\LogsoutGuard;
use App\Post;
use App\Membre;
use App\Postulation;

use Illuminate\Http\Request;
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

    use AuthenticatesUsers, LogsoutGuard {
        LogsoutGuard::logout insteadof AuthenticatesUsers;
    }
   
      

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
  // public $redirectTo = '/index';
    public function authenticated($request , $membre){

        $request->session()->put("users",$membre);
        if($membre->type=='F'){
           
           
           
            $data = $request->session()->all();
            $_SESSION= $data;
         //   var_dump($_SESSION->name);
          
         $posts= Post::all();
         $postulations= Postulation::all();
         return view('freelancerHome',compact('posts'),compact('postulations'));
           // return view('freelancerHome');
        }elseif($membre->type=='D'){
            $posts= Post::all();
    $postulations= Postulation::all();
          
          return view('donneurHome',compact('posts'),compact('postulations')) ;
        }
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('membre.guest')->except('logout');
       
       
    }

    /**
     * Show the application's login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        return view('membre.auth.login');
    }

    /**
     * Get the guard to be used during authentication.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('membre');
    }
}
