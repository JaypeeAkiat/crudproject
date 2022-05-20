<?php

use App\Http\Controllers\PagesController;
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

Route::get('/user',  [UserController::class, 'index']);

Route::get('/',  [PagesController::class, 'login']);

Route::get('/home', [PagesController::class, 'welcome'])->name('home');    

Route::get('/main', [PagesController::class, 'index'])->name('main');    

Auth::routes();