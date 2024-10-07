<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

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

Route::view('/', 'welcome');

Route::apiResource('productos', App\Http\Controllers\ProductoController::class);

Route::get('productos', [ProductoController::class, 'index'])->name('productos.lista');

Route::get('productos/create', [ProductoController::class, 'create'])->name('productos.create');

Route::get('productos/{producto}/edit', [ProductoController::class, 'edit'])->name('productos.edit');
