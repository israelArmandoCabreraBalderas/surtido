@extends('layouts.app')

@section('content')
@if (Auth::user()->type == 1)
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Categorías') }}</div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Descripción</th>
                                <th scope="col">Cantidad</th>
                                <th scope="col">Ver</th>
                                <th scope="col">Editar</th>
                                <th scope="col">Eliminar</th>
                                </tr>
                            </thead>
                            @foreach ($categorias as $categoria)
                            <tbody>
                                <tr>
                                <th scope="row">{{ $categoria->id }}</th>
                                <td>{{ $categoria->nombre }}</td>
                                <td>{{ $categoria->descripcion }}</td>
                                <td>{{ $categoria->cantidadproductos }}</td>
                                <td><a href="/categorias/ver/{{$categoria->id}}" style="color:#000;"><i class="fa-solid fa-eye"></i></a>
                                <td><a href="/categorias/editar/{{$categoria->id}}" style="color:#000;"><i class="fa-solid fa-pencil"></i></a></td>
                                <td><a href="/categorias/eliminar/{{$categoria->id}}" onclick="return eliminarCategoria('¿Eliminar Categoría?')" style="color:#000;"><i class="fa-solid fa-delete-left"></i></a></td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                <div class="d-grid gap-2 col-6 mx-auto"><a class="btn btn-secondary" href="/categorias/crear" role="button">Agregar categoría</a></div>
            </div>
        </div>
    </div>
</div>
<script>
    function eliminarCategoria(value){
        action = confirm(value) ? true : event.preventDefault()
    }
</script>
@else
    <script>
        alert('No ha iniciado sesión');
        window.location.href="/login";
    </script>
@endif
@endsection