<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuControlador;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

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

/*Route::get('/nosotros', function () {
    return view('nosotros');
});

Route::get('/proveedores', function () {
    return view('proveedores');
});
*/

Route::get('/vallesoft', function () {
    return view('vallesoft');
});

Route::get('/surtido', function () {
    return view('surtido');
});

Route::get('/buzon', function () {
    return view('buzon');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/categorias', [CategoriaController::class, 'index']);

Route::get('/categorias/crear', [CategoriaController::class,'create']);

Route::get('/categorias/ver/{id}', [CategoriaController::class,'show']);

Route::get('/categorias/editar/{id}', [CategoriaController::class,'edit']);

Route::get('/categorias/eliminar/{id}', [CategoriaController::class,'destroy']);

Route::get('/productos/crear', [ProductoController::class,'create']);

Route::get('/productos/{id}', [ProductoController::class, 'index']);

Route::get('/misproductos/{id}', [ProductoController::class, 'miindex']);

Route::get('/productos/ver/{id}', [ProductoController::class,'show']);

Route::get('/productos/editar/{id}', [ProductoController::class,'edit']);

Route::get('/productos/eliminar/{id}', [ProductoController::class,'destroy']);

Route::get('/vendedores/{id}', [UserController::class,'index']);

Route::post('/productos/crear/{id}', [ProductoController::class,'store']);

Route::put('/categorias/editar/{id}', [CategoriaController::class,'update']);

Route::put('/productos/editar/{id}', [ProductoController::class,'update']);

Route::get('/perfil/{id}', [UserController::class, 'show']);

Route::get('/pagar', function () {
    return view('pagar');
});

Route::get('/carrito', function () {
    return view('carrito');
});

Route::get('/compras', function () {
    return view('compras');
});

Route::get('/compra', function () {
    return view('compra');
});

Route::get('/misventas', function () {
    return view('misventas');
});

Route::get('/miventa/{id}', function () {
    return view('miventa');
});

Route::get('/vendedor/{id}', function () {
    return view('vendedor');
});

Route::get('/ofertas', function () {
    return view('ofertas');
});

Route::get('/oferta/{id}', function () {
    return view('oferta');
});

