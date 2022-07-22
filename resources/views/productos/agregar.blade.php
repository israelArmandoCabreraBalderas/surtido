@extends('layouts.app')

@section('content')
@if (Auth::check())
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Agregar producto') }}</div>

                <div class="card-body">
                    <form action="/misproductos/crear/{{ Auth::user()->id }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-3">
                            <label for="nombre" class="col-md-4 col-form-label text-md-end">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control" name="nombre" required oninvalid="this.setCustomValidity('Por favor introduzca el nombre del producto');" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="descripcion" class="col-md-4 col-form-label text-md-end">{{ __('Descripción') }}</label>

                            <div class="col-md-6">
                                <textarea id="descripcion" type="text" class="form-control" name="descripcion" required oninvalid="this.setCustomValidity('Por favor introduzca la descripción del producto');"></textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="preciounitario" class="col-md-4 col-form-label text-md-end">{{ __('Precio unitario') }}</label>

                            <div class="col-md-6">
                                <input id="preciounitario" type="number" class="form-control" name="preciounitario" required oninvalid="this.setCustomValidity('Por favor introduzca el precio del producto');">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="cantidad" class="col-md-4 col-form-label text-md-end">{{ __('Cantidad') }}</label>

                            <div class="col-md-6">
                                <input id="cantidad" type="number" class="form-control" name="cantidad" required oninvalid="this.setCustomValidity('Por favor introduzca la cantidad de producto');">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="oferta" class="col-md-4 col-form-label text-md-end">{{ __('Porcentaje de oferta') }}</label>

                            <div class="col-md-6">
                                <input id="oferta" type="number" class="form-control" name="oferta" required value="0">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="imagen" class="col-md-4 col-form-label text-md-end">{{ __('Imagen') }}</label>
                            <div class="col-md-6">
                                <input type="file" class="form-control" name="imagen" required oninvalid="this.setCustomValidity('Por favor introduzca la imagen del producto');">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="imagen" class="col-md-4 col-form-label text-md-end">{{ __('Categoría') }}</label>
                            <div class="col-md-6">    
                                <select name="idcategoria" class="form-control" id="inputGroupSelect01">
                                    <option selected>Selecciona una categoría...</option>
                                    <option value="null">Ninguna categoría</option>
                                    @foreach ($categorias as $categoria)
                                    <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                                    @endforeach
                                </select>
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