<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;
use App\Models\User;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $productos;
    protected $categorias;
    
    public function __construct(Producto $productos, Categoria $categorias)
    {
        $this->productos = $productos;
        $this->categorias = $categorias;
    }


    public function index()
    {
        $productos = $this->productos->obtenerProductos();
        return view('productos.lista',['productos'=>$productos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = $this->categorias->obtenerCategorias();
        return view('productos.agregar', ['categorias'=>$categorias]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $producto = new Producto($request->all());
        $producto->imagen = Cloudinary::upload ( $producto->imagen->getRealPath())->getSecurePath();
        if($producto->idcategoria == "null"){
            $producto->idcategoria = null;
        }else{
            $categoria = Categoria::find($producto->idcategoria);
            $categoria->cantidadproductos = $categoria->cantidadproductos+1;
            $categoria->save();
        }
        if($producto->cantidad>0){
            $producto->activo = 1;
        }
        $producto->idvendedor=$id;
        $producto->save();
        return redirect()->action([ProductoController::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producto = $this->productos->obtenerProductoPorId($id);
        return view('productos.ver',['producto'=>$producto]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto = $this->productos->obtenerProductoPorId($id);
        return view('productos.editar',['producto'=>$producto]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $producto = Producto::find($id);
        if($request->idcategoria != $producto->idcategoria){
            $categoria = Categoria::find($producto->idcategoria);
            $categoria->cantidadproductos = $categoria->cantidadproductos-1;
            $categoria->save();
            $categoria = Categoria::find($request->idcategoria);
            $categoria->cantidadproductos = $categoria->cantidadproductos+1;
            $categoria->save();
            if($request->imagen != $producto->imagen){
                $imagen = $producto->imagen;
                $producto->imagen = Cloudinary::upload ( $producto->imagen->getRealPath())->getSecurePath();
                Cloudinary::destroy($imagen->getId());
            }
        }
        if($request->imagen != $producto->imagen){
            $imagen = $producto->imagen;
            $producto->imagen = Cloudinary::upload ( $producto->imagen->getRealPath())->getSecurePath();
            Cloudinary::destroy($imagen->getId());
        }
        $producto->fill($request->all());
        $producto->save();
    
        return redirect()->action([ProductoController::class,'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto = Producto::find($id);
        $categoria = Categoria::find($producto->idcategoria);
        Cloudinary::destroy($producto->$imagen->getId());
        $categoria->cantidadproductos = $categoria->cantidadproductos-1;
        $producto->delete();
        return redirect()->action([ProductoController::class,'index']);
    }
}
