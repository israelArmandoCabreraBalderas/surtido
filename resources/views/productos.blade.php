@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Productos') }}</div>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="{{URL::asset('stranger things.png')}}">
                            <div class="card-body">
                                <h5 class="card-title">Stranger Things Completa</h5>
                                <p class="card-text">Serie de Stranger Things, todas las temporadas en español e inglés HD 1080p 4K gratis un link mega.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="" class="btn btn-secondary">Detalles</a>
                                    </div>
                                    <a href="" class="btn btn-secondary">Agregar</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--<div class="col">
                        <div class="card shadow-sm">
                            <img src="{{URL::asset('stranger things.png')}}">
                            <div class="card-body">
                                <h5 class="card-title">Stranger Things Completa</h5>
                                <p class="card-text">Serie de Stranger Things, todas las temporadas en español e inglés HD 1080p 4K gratis un link mega.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="" class="btn btn-secondary">Detalles</a>
                                    </div>
                                    <a href="" class="btn btn-secondary">Agregar</a>
                                </div>
                            </div>
                        </div>
                    </div>-->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection