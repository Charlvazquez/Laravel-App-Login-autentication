<?php

use Illuminate\Support\Facades\Route;
//importar Controladores
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoutController;

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
    return view('welcome');
});
//rutas de registro
Route::get('/registro',[RegistroController::class,'show']);

Route::post('/registro',[RegistroController::class, 'registro']);
//rutas de login
Route::get('/login',[LoginController::class,'show']);

Route::post('/login',[LoginController::class, 'login']);
//ruta de home
Route::get('/home',[HomeController::class,'index']);
//ruta logout
Route::get('/logout',[LogoutController::class,'logout']);