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
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a href="/productos/ver/{{ $producto->id }}" style="color:#000;"><i class="fa-solid fa-eye fa-2xl"></i></a>                                        </div>
                                        <div class="btn-group">
                                            <a href="/productos/editar/{{ $producto->id }}" style="color:#000;"><i class="fa-solid fa-pencil fa-2xl"></i></a>
                                        </div>
                                        <div class="btn-group">
                                            <a href="/productos/eliminar/{{ $producto->id }}" style="color:#000;"><i class="fa-solid fa-delete-left fa-2xl"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="d-grid gap-2 col-6 mx-auto"><a class="btn btn-secondary" href="/productos/crear" role="button">Agregar producto</a></div>
                
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