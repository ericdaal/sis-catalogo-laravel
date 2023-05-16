<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\panelController;
use App\Http\Controllers\inicioController;
use App\Http\Controllers\mantenimientoController;
use App\Http\Controllers\registroController;

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

Route::get('/', function(){
    return view('inicio');
});
Route::get('/login', [loginController::class, 'index'])->name('login');
Route::post('/login', [loginController::class, 'store']);
Route::get('/panel', [panelController::class, 'index']);
Route::post('/panel', [panelController::class, 'store']);
Route::get('/mantenimiento', [mantenimientoController::class, 'index'])->name('mantenimiento');
Route::post('/mantenimiento', [mantenimientoController::class, 'store']);
Route::get('/registro', [registroController::class, 'index'])->name('registro');
Route::post('/registro', [registroController::class, 'store'])->name('registro');