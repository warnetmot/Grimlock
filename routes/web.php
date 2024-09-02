<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ConsultaController;
use App\Http\Controllers\ConsultorController;
use App\Http\Controllers\FormacionController;
use App\Http\Controllers\ComprobanteController;
use App\Http\Controllers\UserController;

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

Route::resource('Clientes', ClienteController::class);
Route::resource('Consultores', ConsultorController::class);
Route::resource('Formaciones', FormacionController::class);
Route::resource('Consultas', ConsultaController::class);
Route::resource('Comprobantes', ComprobanteController::class);
Route::resource('Users', UserController::class);

