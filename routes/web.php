<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadosController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\ProveedorController;

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

Route::get('/home', function(){
    return view('bienvenida');
});
Route::middleware(['auth:sanctum', 'verified'])->get('/mi_dashboard', function () {
    return view('inicioDashboard');
})->name('dashboard2');

Route::resource('empleados', EmpleadosController::class)->middleware(['auth:sanctum']);

Route::resource('productos', ProductosController::class)->middleware(['auth:sanctum']);

Route::resource('proveedor', ProveedorController::class)->middleware(['auth:sanctum']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
