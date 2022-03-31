<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\peliculasController;
use App\Http\Controllers\apiController;

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


Route::get('/api', function () {
    return view('api');
})->name('ejapi');

Route::get('/sobre', function () {
    return view('sobre');
})->name('nosotros');

Route::get('/video', function () {
    return view('video');
})->name('tutorial');

Route::get('/pelicula', function () {
    return view('pelicula');
})->name('descripcion');

Route::get('/', [peliculasController::class,'mostrarPelicula'])->name('inicio');

Route::get('/detallePelicula/{id}', [peliculasController::class,'detallePelicula'])->name('detallePelicula');

Route::post('/api', [apiController::class,'mostrarEdad'])->name('mostrarEdad');