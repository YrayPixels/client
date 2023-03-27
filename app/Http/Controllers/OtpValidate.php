<?php

namespace App\Http\Controllers;

use App\Mail\email\VerifyAccount;
use App\Mail\verify_otp;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class OtpValidate extends Controller
{


    public function request(Request $request)
    {
        // dd($id);
        $otp = rand(000000, 999999);
        $update_otp = DB::table('users')->where('email', $request->email)->update(['token' => $otp]);

        $user = User::where('email', $request->email)->first();
        if ($update_otp) {
            // $user_email = 'moseserhinyodavwe2@gmail.com';
            Mail::to($request->email)->send(new verify_otp($user));
            return response()->json(['status' => 'otp sent']);
        } else {
            return response()->json(['status' => 'otp not sent']);
        }
    }

    public function verify_otp(Request $request)
    {
        $user = Auth::user()->token;
        if ($user === $request->otp) {
            return redirect('/dealer');
        } else {
            return view('verify_otp')->with('error', 'Wrong Otp');
        }
    }
}
