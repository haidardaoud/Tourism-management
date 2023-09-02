<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailVerificationController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('register',[UserController::class,'store']);

Route::post('email',[EmailVerificationController::class,'EmailVerification']);

Route::post('ForgetPassword',[\App\Http\Controllers\ForgetPasswordController::class,'ForgetPassword']);

Route::post('reset',[\App\Http\Controllers\ResetPasswordController::class,'ResetPassword']);

Route::middleware(['verified'])->group(function () {

       Route::post('login', [UserController::class, 'login']);

    });

Route::middleware(['auth:sanctum','verified'])->group(function () {

    Route::post('update_profile', [UserController::class, 'update']);

    Route::get('profile',[UserController::class,'profile']);

    Route::get('logout',[UserController::class,'logout']);

    Route::post('searchHotel',[\App\Http\Controllers\HotelController::class,'search']);


});

Route::get('all_country',[\App\Http\Controllers\CountryController::class,'index']);

Route::post('country',[\App\Http\Controllers\CountryController::class,'Country']);

Route::post('profile_hotel',[\App\Http\Controllers\HotelController::class,'profile_Hotel']);
