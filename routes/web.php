<?php

use App\Mail\Toursim;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/send', function () {
        Mail::to('motasemnassif2@gmail.com')->send(new Toursim());
return response('send');
})->middleware('verified');
Route::get('/dashboard',function (){
    return view('welcome');
})->name('dashboard');
