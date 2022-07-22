@extends('layouts.app')

@section('content')
@if (Auth::user()->type == 1)
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Categorías') }}</div>
                    <div class="card-body">
                        <div class="card text-center">
                            <div class="card-header">
                            {{ $categoria->id }}
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{ $categoria->nombre }}</h5>
                                <p class="card-text">{{ $categoria->descripcion }}</p>
                            </div>
                            <div class="card-footer text-muted">
                            {{ $categoria->cantidadproductos }} elementos
                            </div>
                        </div>
                    </div>
                <div class="d-grid gap-2 col-6 mx-auto"><a class="btn btn-secondary" href="/categorias" role="button">Volver</a></div>
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