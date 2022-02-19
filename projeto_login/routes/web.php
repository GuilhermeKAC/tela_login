<?php

use App\Http\Controllers\UserController;
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

Route::get('/login',[UserController::class, 'login'])->name('login.page');
Route::post('/index',[UserController::class, 'auth'])->name('auth.user');

Route::get('',[UserController::class, 'index'])->name('index');
Route::post('/create/usuario',[UserController::class, 'storeUser'])->name('store');
Route::post('/create/pessoa',[UserController::class, 'storePessoa'])->name('store');
