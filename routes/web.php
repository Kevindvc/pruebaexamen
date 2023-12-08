<?php

use App\Http\Controllers\ContactoController;
use App\Http\Controllers\DirectorioController;
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
    return view('welcome');
});

Route::get('/directorio',[DirectorioController::class,'index'])->name('directorio.index');

Route::get('/directorio/create',[DirectorioController::class,'create'])->name('directorio.create');

Route::post('/directorio/store',[DirectorioController::class,'store'])->name('directorio.store');

Route::get('/directorio/buscar',[DirectorioController::class,'buscar'])->name('directorio.buscar');
Route::get('directorio/delete',[DirectorioController::class,'delete'])->name('directorio.delete');
Route::delete('directorio/destroy/{codigoEntrada}',[DirectorioController::class,'destroy'])->name('directorio.destroy');
Route::get('/contacto',[ContactoController::class,'ver'])->name('contacto.ver');
Route::get('/contacto/create',[ContactoController::class,'create'])->name('contacto.create');
Route::post('/contacto/store',[ContactoController::class,'store'])->name('contacto.store');
