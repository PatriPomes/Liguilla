<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EquiposController;
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

Route::get("/", HomeController::class);//Acceso pagina principal, pendiente hacer el view posibles dos botenes para ir a equipos y a partidos...

Route::get('equipos', [EquiposController::class, 'index']);

Route::get('equipos/create', [EquiposController::class,'create']);

Route::get('equipos/{equipo}', [EquiposController::class,'edit']);

Route::get('equipos/{equipo1}', [EquiposController::class,'delete']);

