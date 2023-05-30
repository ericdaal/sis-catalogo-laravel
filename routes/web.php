<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\panelController;
use App\Http\Controllers\inicioController;
use App\Http\Controllers\productController;
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
Route::get('/panel', [panelController::class, 'index'])->name('panel');
Route::post('/panel', [panelController::class, 'store']);
Route::put('/panel', [panelController::class, 'update']);
Route::delete('/panel/{product}', [panelController::class, 'destroy']);
Route::get('/product', [productController::class, 'index'])->name('product');
Route::post('/product', [productController::class, 'store']);
Route::get('/registro', [registroController::class, 'index'])->name('registro');
Route::post('/registro', [registroController::class, 'store']);