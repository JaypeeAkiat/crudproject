<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;
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

Route::resource('/user', UserController::class);

Route::post('/', [LoginController::class, 'sendLoginLink'])->name('userLogin');


Route::get('/',  [PagesController::class, 'landing']);


Route::get('/welcome', [PagesController::class, 'welcome'])->name('welcome');    

Route::get('/home', [PagesController::class, 'index'])->name('home');    



Auth::routes();