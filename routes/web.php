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
Route::get('/welcome', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
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

Route::get('/home/{id}/perfilcliente', [App\Http\Controllers\perfilcliente::class, 'index']);
Route::post('/home/{id}/modify', [App\Http\Controllers\perfilcliente::class, 'modify']);

Route::get('/categorias', [App\Http\Controllers\categoriaController::class, 'index']);
Route::get('/categorias/create', [App\Http\Controllers\categoriaController::class, 'create']);
Route::post('/categorias/insert', [App\Http\Controllers\categoriaController::class, 'insert']);
Route::get('/categorias/{id}/edit', [App\Http\Controllers\categoriaController::class, 'edit']);
Route::post('/categorias/update/{id}', [App\Http\Controllers\categoriaController::class, 'update']);
Route::get('/categorias/delete/{id}', [App\Http\Controllers\categoriaController::class, 'delete']);
