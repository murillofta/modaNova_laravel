<?php

use App\Http\Controllers\RegisterController;
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

Route::get('/', function () {
    return view('home');
})->name('inicio');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', [RegisterController::class, 'show']);
Route::post('/validar-registro', [RegisterController::class, 'register'])->name('validar-registro');
Route::post('/validar-login', [RegisterController::class, 'login'])->name('validar-login');
Route::post('/logout', [RegisterController::class,'logout'])->name('logout');



Auth::routes();