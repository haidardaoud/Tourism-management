<?php

namespace App\Http\Controllers;

use App\Http\Requests\ForgetPasswordRequest;
use App\Http\Requests\ResetPasswordRequest;
use App\Models\User;
use App\Notifications\ResetPasswordVerificationNotification;
use Ichtrojan\Otp\Otp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ForgetPasswordController extends Controller
{

    public function ForgetPassword(ForgetPasswordRequest $request)
    {
    $user=User::query()->where('email','=',$request['email'])->first();
    $user->notify(new ResetPasswordVerificationNotification());
    return response()->json(['message'=>'success']);
    }


}
