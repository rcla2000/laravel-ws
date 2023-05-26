<?php

use App\Http\Controllers\MapaController;
use App\Http\Controllers\PruebasController;
use App\Http\Controllers\WebSocketController;
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

Route::view('/', 'welcome');
Route::get('/mapa', [MapaController::class, 'mapa']);
Route::get('/obtener-votos', [MapaController::class, 'votos'])->name('obtener-votos');
Route::get('/agregar-ubicacion-votos', [MapaController::class, 'votosSinGeolocalizacion']);
Route::post('/actualizar-voto', [MapaController::class, 'actualizarLtnLng'])->name('actualizar-voto');
Route::get('/prueba-api', [PruebasController::class, 'pruebaAPI']);
Route::get('/ws', [WebSocketController::class, 'inicio']);
Route::get('/ws/generar-evento/{mensaje}', [WebSocketController::class, 'generarEvento']);
Route::get('/ws/evento', [WebSocketController::class, 'evento']);
