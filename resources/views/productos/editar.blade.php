@extends('layouts.app')

@section('content')
@if (Auth::user()->id == $producto->idvendedor)
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Editar producto') }}</div>

                <div class="card-body">
                    <form action="/productos/editar/{{ $producto->id }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{ method_field('PUT') }}
                        <div class="row mb-3">
                            <label for="nombre" class="col-md-4 col-form-label text-md-end">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control" name="nombre" value="{{ $producto->nombre }}" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="descripcion" class="col-md-4 col-form-label text-md-end">{{ __('Descripción') }}</label>

                            <div class="col-md-6">
                                <textarea id="descripcion" type="text" class="form-control" name="descripcion" value="{{ $producto->descripcion }}"></textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="preciounitario" class="col-md-4 col-form-label text-md-end">{{ __('Precio unitario') }}</label>

                            <div class="col-md-6">
                                <input id="preciounitario" type="number" class="form-control" name="preciounitario" value="{{ $producto->preciounitario }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="cantidad" class="col-md-4 col-form-label text-md-end">{{ __('Cantidad') }}</label>

                            <div class="col-md-6">
                                <input id="cantidad" type="number" class="form-control" name="cantidad" value="{{ $producto->cantidad }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="oferta" class="col-md-4 col-form-label text-md-end">{{ __('Porcentaje de oferta') }}</label>

                            <div class="col-md-6">
                                <input id="oferta" type="number" class="form-control" name="oferta" value="{{ $producto->oferta }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="imagen" class="col-md-4 col-form-label text-md-end">{{ __('Imagen') }}</label>
                            <div class="col-md-6">
                                <input type="file" class="form-control" name="imagen" value="{{ $producto->imagen }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="imagen" class="col-md-4 col-form-label text-md-end">{{ __('Categoría') }}</label>
                            <div class="col-md-6">    
                                <select name="idcategoria" class="form-control" id="inputGroupSelect01">
                                    <option selected>Selecciona una categoría...</option>
                                    <option value="null">Ninguna categoría</option>
                                    @foreach ($categorias as $categoria)
                                    @if ($categoria->id == $producto->idcategoria)
                                    <option value="{{ $categoria->id }}" selected>{{ $categoria->nombre }}</option>
                                    @else
                                    <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <input class="btn btn-secondary" type="submit" value="Enviar">
                            </div>
                        </div>
                        <!--<div class="row mb-3">
                            <label for="nombre" class="col-md-4 col-form-label text-md-end">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control" name="nombre" value="{{ $producto->nombre }}" autofocus>
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
                        </div>-->
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