@extends('layouts.app')

@section('content')
@if (Auth::check())
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Productos') }}</div>
                <div class="card-body">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                        @foreach ($productos as $producto)
                        <div class="col">
                            <div class="card shadow-sm">
                                <img src="{{ $producto->imagen }}">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $producto->nombre }}</h5>
                                    <p class="card-text">{{ $producto->descripcion }}</p>
                                    @if (Auth::user()->id == $producto->idvendedor)  
                                    <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                            <a href="/productos/ver/{{ $producto->id }}" style="color:#000;"><i class="fa-solid fa-eye fa-2xl"></i></a>
                                            <!--
                                            <a href="/categorias/ver/id" style="color:#000;"><i class="fa-solid fa-eye"></i></a>
                                            <a href="/categorias/editar/id" style="color:#000;"><i class="fa-solid fa-pencil"></i></a>
                                            <a href="/categorias/eliminar/id" onclick="return eliminarCategoria('¿Eliminar Categoría?')" style="color:#000;"><i class="fa-solid fa-delete-left"></i></a>
                                            -->
                                            </div>
                                            <div class="btn-group">
                                            <a href="/productos/editar/{{ $producto->id }}" style="color:#000;"><i class="fa-solid fa-pencil fa-2xl"></i></a>
                                            <!--
                                            <a href="/categorias/ver/id" style="color:#000;"><i class="fa-solid fa-eye"></i></a>
                                            <a href="/categorias/editar/id" style="color:#000;"><i class="fa-solid fa-pencil"></i></a>
                                            <a href="/categorias/eliminar/id" onclick="return eliminarCategoria('¿Eliminar Categoría?')" style="color:#000;"><i class="fa-solid fa-delete-left"></i></a>
                                            -->
                                            </div>
                                            <div class="btn-group">
                                            <a href="/productos/eliminar/{{ $producto->id }}" style="color:#000;"><i class="fa-solid fa-delete-left fa-2xl"></i></a>
                                            <!--
                                            <a href="/categorias/ver/id" style="color:#000;"><i class="fa-solid fa-eye"></i></a>
                                            <a href="/categorias/editar/id" style="color:#000;"><i class="fa-solid fa-pencil"></i></a>
                                            <a href="/categorias/eliminar/id" onclick="return eliminarCategoria('¿Eliminar Categoría?')" style="color:#000;"><i class="fa-solid fa-delete-left"></i></a>
                                            -->                               
                                        </div>
                                    </div>
                                    @else
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                        <a href="/productos/ver/{{ $producto->id }}" class="btn btn-secondary">Detalles</a>
                                        </div>
                                        <a href="" class="btn btn-secondary">Agregar</a>
                                    </div>
                                    @endif
                                    
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
@else
    <script>
        alert('No ha iniciado sesión');
        window.location.href="/login";
    </script>
@endif
@endsection