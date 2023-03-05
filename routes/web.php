<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use GuzzleHttp\Middleware;
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
})->middleware('auth');


Route::get('/registrarse', [RegisterController::class, 'create'])
->middleware('guest')
->name('register.index');

Route::post('/registrarse', [RegisterController::class, 'store'])
->name('register.store');

Route::get('/login', [SessionsController::class, 'create'])
->middleware('guest')
->name('login.index');

Route::post('/login', [SessionsController::class, 'store'])
->name('login.store');



Route::get('/logout', [SessionsController::class, 'destroy'])
->name('login.destroy');

// Route::get('/pruebaLogin', function(){
//     return('Esta pagina solo iniciara si estas logeado');
// })->middleware('auth');

// Route::get('/pruebaNoLogin', function(){
//     return('Esta pagina iniciara sin necesidad de estar logeado');
// })->middleware('guest');


Route::get('admin', [AdminController::class, 'index']) //solo podra acceder el admin
->middleware('auth.admin')//indicando que es necesario que un admin este logeado
->name('admin.index');