<?php

use App\Http\Controllers\SessionController;
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

Route::get('sesi', [SessionController::class, 'index']);
Route::get('home', function () {
    return view('sesi.home');
})->name('home');
Route::post('sesi/login', [SessionController::class, 'login']);
Route::get('sesi/logout', [SessionController::class, 'logout']);
Route::get('sesi/register', [SessionController::class, 'register'])->name('register');
Route::post('sesi/register', [SessionController::class, 'create']);
