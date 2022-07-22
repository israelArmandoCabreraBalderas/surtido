@extends('layouts.app')

@section('content')
@if (Auth::user()->type == 1)
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Editar categoría') }}</div>

                <div class="card-body">
                    <form action="/categorias/editar/{{ $categoria->id }}" method="POST">
                        @csrf
                        {{ method_field('PUT') }}
                        <div class="row mb-3">
                            <label for="nombre" class="col-md-4 col-form-label text-md-end">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control" name="nombre" value="{{ $categoria->nombre }}" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="descripcion" class="col-md-4 col-form-label text-md-end">{{ __('Descripción') }}</label>

                            <div class="col-md-6">
                                <textarea id="descripcion" type="text" class="form-control" name="descripcion">{{ $categoria->descripcion }}</textarea>
                            </div>
                        </div>
                        
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <input class="btn btn-secondary" type="submit" value="Enviar">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- jejeje -->
</div>
@else
    <script>
        alert('No ha iniciado sesión');
        window.location.href="/login";
    </script>
@endif
@endsection