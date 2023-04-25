<?php

use App\Http\Controllers\CerrarSesionController;
use App\Http\Controllers\ComentarioController;
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
Route::get('publicaciones/{user:username}/{post}',[SecureurlController::class,'show'])->name('publicaciones.show');



// Ruta para mostrar el formulario de creación de comentarios
Route::get('publicaciones/{user:username}/{post}/comentarios/create',[ComentarioController::class,'create'])->name('comentarios.create');

// Ruta para almacenar el comentario en la base de datos
Route::post('publicaciones/{user:username}/{post}', [ComentarioController::class,'store'])->name('comentarios.store');

// Ruta para mostrar un comentario específico
Route::get('publicaciones/{user:username}/{post}/comentarios/{comentario}',[ComentarioController::class,'show'])->name('comentarios.show');

// Ruta para mostrar el formulario de edición de un comentario
Route::get('publicaciones/{user:username}/{post}/comentarios/{comentario}/edit',[ComentarioController::class,'edit'])->name('comentarios.edit');

// Ruta para actualizar un comentario en la base de datos
Route::put('publicaciones/{user:username}/{post}/comentarios/{comentario}',[ComentarioController::class,'update'])->name('comentarios.update');

// Ruta para eliminar un comentario de la base de datos
Route::delete('publicaciones/{user:username}/{post}/comentarios/{comentario}',[ComentarioController::class,'destroy'])->name('comentarios.destroy');
