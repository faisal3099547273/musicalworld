<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MusicWorld\landingPageController;
use App\Http\Controllers\Panel\UserController;

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

Auth::routes();
Route::get('auth/signup',[UserController::class,'signup_view'])->name('signup');
Route::get('/',[landingPageController::class,'landingpage'])->name('landing.page');
Route::get('root', [App\Http\Controllers\HomeController::class, 'root'])->name('root');
//Update User Details
Route::post('/update-profile/{id}', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('updateProfile');
Route::post('/update-password/{id}', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('updatePassword');

Route::get('index', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

//Language Translation
Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);

 Route::prefix('user')->group(function () {
  Route::get('',[UserController::class,'user_view'])->name('user.view');
  Route::get('company',[UserController::class,'company_view'])->name('company.view');
});
