<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;
use App\Models\HealthData;
use App\Http\Controllers\HealthDataController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/login/google', [LoginController::class,'redirectToGoogle'])->name('login.google');
Route::get('/login/google/callback',[LoginController::class,'handleGoogleCallback']);

Route::get('/login/facebook', [LoginController::class,'redirectToFacebook'])->name('login.facebook');;
Route::get('/login/facebook/callback', [LoginController::class,'handleFacebookCallback']);

Route::middleware('auth')->group(function () {
    Route::get('/health-data', [App\Http\Controllers\HealthDataController::class,'index']);
    Route::post('/health-data', [App\Http\Controllers\HealthDataController::class,'store'])->name('health_data.store');
});
