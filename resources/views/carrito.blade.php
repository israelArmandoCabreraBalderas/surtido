@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Carrito') }}</div>
                <div class="card-body">
                    <div class="d-grid gap-2 col-6 mx-auto"><a class="btn btn-secondary" href="/pagar" role="button">Pagar</a></div>
                </div>
                <!--
                <div class="card-body">
                    <form method="POST" action="https://formspree.io/f/xoqrgavb">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="name" class="form-control" name="name" value="{{ old('name') }}" required oninvalid="this.setCustomValidity('Por favor introduzca su nombre');" autocomplete="name" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Mensaje') }}</label>

                            <div class="col-md-6">
                                <textarea id="message" type="text" class="form-control" name="message" required oninvalid="this.setCustomValidity('Por favor introduzca el mensaje');"></textarea>
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                {!! htmlFormSnippet() !!}
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <input type="submit" value="Enviar">
                            </div>
                        </div>
                    </form>
                </div>-->
            </div>
        </div>
    </div>
</div>
@endsection 