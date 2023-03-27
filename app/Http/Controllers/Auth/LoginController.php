<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    protected $redirectTo = RouteServiceProvider::OTP;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function login(Request $request)
    {

        $errors = "bad erro";
        $data = $request->all();
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
            'otp' => 'required'
        ]);

        if (auth()->attempt(array('email' => $data['email'], 'password' => $data['password'], 'token' => $data['otp']))) {
            $otp = rand(000000, 999999);
            $update_otp = DB::table('users')->where('email', $request->email)->update(['token' => $otp]);
            if (auth()->user()->is_admin == 1) {

                return redirect()->route('/home');
            } else {
                return redirect('/home');
            }
        } else {
            return redirect()->route('login')->with($errors, 'badd');
        }
    }
}
