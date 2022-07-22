@extends('layouts.app')

@section('content')
@if (Auth::user()->id == $producto->idvendedor)
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Productos') }}</div>
                    


                <div class="card-body">
                    <div class="card text-center">
                        <center>
                            <img src="{{ $producto->imagen }}" class="img-responsive" width="50%" alt="{{ $producto->nombre }}">
                        </center>
                        <div class="card-body">
                            <h5 class="card-title">{{ $producto->nombre }}</h5>
                            <p class="card-text">{{ $producto->descripcion }}</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">${{ $producto->preciounitario }}</li>
                            <li class="list-group-item">{{ $producto->cantidad }} unidades</li>
                            <li class="list-group-item">{{ $producto->oferta }}%</li>
                        </ul>
                    </div>
                </div>
                
                <div class="d-grid gap-2 col-6 mx-auto"><a class="btn btn-secondary" href="/misproductos" role="button">Volver</a></div>
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