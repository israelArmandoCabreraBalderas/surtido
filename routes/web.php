<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuControlador;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\HomeController;

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

Route::get('/productos', function () {
    return view('productos');
});*/

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

Route::get('/misproductos', [ProductoController::class, 'index']);

Route::get('/misproductos/crear', [ProductoController::class,'create']);

Route::get('/misproductos/ver/{id}', [ProductoController::class,'show']);

Route::get('/misproductos/editar/{id}', [ProductoController::class,'edit']);

Route::get('/misproductos/eliminar/{id}', [ProductoController::class,'destroy']);

Route::post('/categorias/crear', [CategoriaController::class,'store']);

Route::post('/misproductos/crear/{id}', [ProductoController::class,'store']);

Route::put('/categorias/editar/{id}', [CategoriaController::class,'update']);

Route::put('/misproductos/editar/{id}', [ProductoController::class,'update']);

Route::get('/perfil', function () {
    return view('perfil');
});

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

Route::get('/productos', function () {
    return view('misproductos');
});

Route::get('/productos/{id}', function () {
    return view('miproducto');
});

Route::get('/miproductoeditar/{id}', function () {
    return view('miproductoeditar');
});

Route::get('/misventas', function () {
    return view('misventas');
});

Route::get('/miventa/{id}', function () {
    return view('miventa');
});

Route::get('/productos', function () {
    return view('productos');
});

Route::get('/producto/{id}', function () {
    return view('producto');
});

Route::get('/vendedores', function () {
    return view('vendedores');
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

