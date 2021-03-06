<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
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
    // protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(){

        return view('auth.login');

    }

    public function logout(){
        Auth::logout();
        return redirect(route('homepage'));

    }

    public function postLogin(Request $rq){

        $rq->validate(
            [
                'email' => 'required|email',
                'password' => 'required|min:4'
            ],
            [
                'email.required' => 'Vui lòng nhập email',
                'email.email' => 'Email không đúng định dạng',
                'password.required' => 'Vui lòng nhập mật khẩu',
                'password.min' => 'Độ dài tối thiểu của mật khẩu là 4 ký tự'
            ]
        );

        if(Auth::attempt(['email' => $rq->email, 'password' => $rq->password])){
            return redirect(route('homepage'));
        }else{
            return view('auth.login', ['errMsg' => 'Sai email/password']);
        }

    }
}

