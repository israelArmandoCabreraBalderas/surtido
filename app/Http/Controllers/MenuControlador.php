<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuControlador extends Controller
{
    public function opcProveedores(){
        return view('welcome');
    }
    public function opcProductos(){
        return view('welcome');
    }
    public function opcPerfil(){
        return view('welcome');
    }
}