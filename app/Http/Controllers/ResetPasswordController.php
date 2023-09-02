<?php

namespace App\Http\Controllers;

use App\Http\Requests\ResetPasswordRequest;
use App\Models\User;
use Ichtrojan\Otp\Otp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ResetPasswordController extends Controller
{
    private $otp;
    public function __construct()
    {
        $this->otp=new Otp;
    }
    public function ResetPassword(ResetPasswordRequest $request)
    {
        $otpE=$this->otp->validate($request['email'],$request['otp']);
        if(!$otpE->status)
        {
            return response()->json(['error'=>$otpE],400);
        }
        $user=User::query()->where('email','=',$request['email'])->first();
        $user->update(['password'=>Hash::make($request['password'])]);
        $user->save();
        return response()->json(['message'=>'success']);
    }
}
