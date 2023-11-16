<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EquiposController;
use App\Http\Controllers\PartidosController;
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
//GENERAL//
Route::get("/", HomeController::class);//Acceso pagina principal, pendiente hacer el view posibles dos botenes para ir a equipos y a partidos...

//EQUIPOS//
Route::get('equipos', [EquiposController::class, 'index'])->name('equipos.index');

Route::post('equipos/create', [EquiposController::class,'create'])->name('equipos.create');

Route::get('equipos/{equipo}/edit', [EquiposController::class,'edit'])->name('equipos.edit');

Route::get('equipos/{equipo1}/delete', [EquiposController::class,'delete'])->name('equipos.delete');

//PARTIDOS//
Route::get('partidos', [PartidosController::class, 'index'])->name('partidos.index');

Route::get('partidos/create', [PartidosController::class,'create'])->name('partidos.create');

Route::get('partidos/{partido}/edit', [PartidosController::class,'edit'])->name('partidos.edit');

Route::get('partidos/{partido}/delete', [PartidosController::class,'delete'])->name('partidos.delete');