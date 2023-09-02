<?php

namespace App\Http\Controllers;


use App\Models\User;
use Ichtrojan\Otp\Otp;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Validated;
use App\Http\Requests\EmailVerificationRequest;

class EmailVerificationController extends Controller
{
    private $otp;
    public function __construct()
    {
        $this->otp=new Otp;
    }
    public function EmailVerification(EmailVerificationRequest $request)
    {
        $otpE=$this->otp->validate($request['email'],$request['otp']);
        if(!$otpE->status)
        {
            return response()->json(['error'=>$otpE]);
        }
        $user=User::query()->where('email','=',$request['email'])->first();
        $user->update(["email_verified_at" =>now()]);
        $user->save();
        return response()->json(['Success']);
    }
}
