<?php

namespace App\Providers;

use App\Mail\Toursim;
use App\Models\User;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\ServiceProvider;
use Laravel\Sanctum\PersonalAccessToken;
use Laravel\Sanctum\Sanctum;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Sanctum::usePersonalAccessTokenModel(PersonalAccessToken::class);
//        User::created(function ($user){
//            try {
//                Mail::to($user->email)->send(new Toursim($user));
//                return response()->json(['message'=>'send','user'=>$user,'state'=>200]);
//            }catch (\Exception $exception)
//            {
//                return response()->json(['message'=>$exception->getMessage()]);
//            }
//        });
    }
}
