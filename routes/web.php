<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

use App\Http\Controllers\UserController;
use App\Http\Controllers\GoogleController;

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
    return view('register');
});
 
 Route::post('upload',[UserController::class,'index']);
 Route::get('login',[UserController::class,'Login']);

 // Google URL
Route::prefix('google')->name('google.')->group( function(){
    Route::get('login', [GoogleController::class, 'loginWithGoogle'])->name('login');
    Route::any('callback', [GoogleController::class, 'callbackFromGoogle'])->name('callback');
});
Route::get('admin',[UserController::class,'Admin']);
Route::get('show',[UserController::class,'showdata']);
Route::get('search',[UserController::class,'search']);

Route::post('sign',[UserController::class,'loginsign']);
Route::get('logout',[UserController::class,'Logout']);

