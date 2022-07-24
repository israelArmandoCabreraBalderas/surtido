@extends('layouts.app')

@section('content')
@if (Auth::check())
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Perfil</div>
                    <div class="card-body">
                        <div class="card text-center">
                            <div class="card-header">
                            {{ $user->id }}
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{ $user->name }}</h5>
                                <p class="card-text">{{ $user->email }}</p>
                            </div>
                            <!--<div class="card-footer text-muted">
                            {{ $user->cantidadproductos }} elementos
                            </div>-->
                        </div>
                    </div>
                @if(Auth::user()->id == $user->id)
                <div class="d-grid gap-2 col-6 mx-auto"><a class="btn btn-secondary" role="button">Editar</a></div>
                @endif
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