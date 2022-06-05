<?php

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
    return view('Welcome');
});

Route::get('/perfilclientes', function () {
    return \App\Models\perfilclientes::ALL();
});

Route::get('/producto', function () {
    return \App\Models\productos::ALL();
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home/{id}/detalleproductos', [App\Http\Controllers\HomeController::class, 'detalles']);
Route::get('/home/{id}/carrito', [App\Http\Controllers\carritocontroller::class, 'index']);
Route::get('/admin', [App\Http\Controllers\adminscontroller::class, 'index']);
Route::get('/admin/create', [App\Http\Controllers\adminscontroller::class, 'create']);
Route::get('/producto', [App\Http\Controllers\modificarproductoscontroller::class, 'index']);
Route::get('/producto/create', [App\Http\Controllers\modificarproductoscontroller::class, 'create']);
Route::post('/producto/insert', [App\Http\Controllers\modificarproductoscontroller::class, 'insert']);
Route::get('/producto/{id}/editar', [App\Http\Controllers\modificarproductoscontroller::class, 'modify']);
Route::post('/producto/editar/{id}', [App\Http\Controllers\modificarproductoscontroller::class, 'update']);
Route::get('/producto/{id}/delete', [App\Http\Controllers\modificarproductoscontroller::class, 'delete']);

