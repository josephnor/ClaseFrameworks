<?php

use App\Http\Controllers\CerrarSesionController;
use App\Http\Controllers\imgController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\SecureurlController;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Whoops\Run;

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
//Route::get('/login', function () {
    //return view('login');


//});

//Route::get('/registro', function () {
    //return view('registro');
//});

Route::get('/registrarse',[RegistroController::class,'index'])->name('registro');
Route::post('/registrarse',[RegistroController::class,'store']);



Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,'store']);

Route::get('/{user:username}',[SecureurlController::class,'index'])->name('accesoseguro');

Route::post('/logout',[CerrarSesionController::class,'store'])->name('logout');

Route::get('/publicaciones/create',[SecureurlController::class,'create'])->name('publicaciones.create');
Route::post('publicaciones',[SecureurlController::class,'store'])->name('publicaciones.store');

Route::post('/imgs',[imgController::class,'store'])->name('imagenes.store');
