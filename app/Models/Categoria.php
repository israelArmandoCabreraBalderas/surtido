<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $table = "categorias";

    protected $fillable = ['nombre', 'descripcion', 'cantidadproductos'];
    protected $hidden = ['id'];

    public function obtenerCategorias()
    {
        return Categoria::all();
    }

    public function obtenerCategoriaPorId($id)
    {
        return Categoria::find($id);
    }
}
