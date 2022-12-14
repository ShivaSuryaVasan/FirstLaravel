<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    protected function authenticated(Request $request,$user)
    {
        if($user ->hasRole('superadmin')){
            $request -> session() -> put('user_id', $user['id']);
            return redirect('/superadmin');
        }
        if($user ->hasRole('admin')){
            $request -> session() -> put('user_id', $user['id']);
            return redirect('/admin');
        }
        if($user ->hasRole('user')){
            $request -> session() -> put('user_id', $user['id']);
            return redirect('/user');
        }

    }

    function logout(){

        Auth::logout();
        
        return redirect('/');

    }
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
