<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
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
    return view('home');
});


Route::get('/registrarse', [RegisterController::class, 'create'])
->name('register.index');

Route::post('/registrarse', [RegisterController::class, 'store'])
->name('register.store');

Route::get('/login', [SessionsController::class, 'create'])
->name('login.index');

Route::post('/login', [SessionsController::class, 'store'])
->name('login.store');



Route::get('/logout', [SessionsController::class, 'destroy'])
->name('login.destroy');
