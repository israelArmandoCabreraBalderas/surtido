<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Producto extends Model
{
    use HasFactory;

    protected $table = "productos";

    protected $fillable = ['nombre', 'descripcion', 'preciounitario', 'cantidad', 'oferta', 'imagen','idvendedor','idcategoria', 'activo'];
    protected $hidden = ['id'];

    public function obtenerProductos()
    {
        return Producto::all();
    }

    public function obtenerProductoPorId($id)
    {
        return Producto::find($id);
    }
}
