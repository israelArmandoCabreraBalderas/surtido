<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuControlador;

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

Route::get('/perfil', function () {
    return view('perfil');
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

Route::get('/misproductos', function () {
    return view('misproductos');
});

Route::get('/miproducto/{id}', function () {
    return view('miproducto');
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

