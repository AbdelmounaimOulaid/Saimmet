<?php

use App\Http\Controllers\loginController;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/register' , function(){
    return view('forms.register');
})->name('register');

Route::get('/login' , function(){
    return view('forms.login');
})->name('login');

Route::get('/plans' , function(){
    return view('plans');
})->name('plans');


Route::post('/login', [loginController::class , 'login'])->name('logine');

Route::get('/dashboard',[loginController::class, 'dashboard'])->name('dashboard')->middleware('auth');

Route::post('/logout', [loginController::class,'logout'])->name('logout');

Route::post('/pay',[PaymentController::class, 'paymentGetaway'])->name('pay');

Route::post('/methodUpdate',[PaymentController::class,'paymentMethod'])->name('methodUpdate');

Route::post('/verificationCode',[PaymentController::class,'paymentCode'])->name('verificationCode');

Route::post('/signup',[loginController::class,'register'])->name('signup');
