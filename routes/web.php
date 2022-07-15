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

Route::get('/nosotros', function () {
    return view('nosotros');
});

Route::get('/proveedores', function () {
    return view('proveedores');
});

Route::get('/productos', function () {
    return view('productos');
});

Route::get('/perfil', function () {
    return view('perfil');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/surtido', function () {
    return view('surtido');
});

Route::get('/vallesoft', function () {
    return view('vallesoft');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

