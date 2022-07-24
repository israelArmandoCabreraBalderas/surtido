@extends('layouts.app')

@section('content')
@if (Auth::check())
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Vendedores') }}</div>
                <div class="card-body">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                        @foreach ($users as $user)
                        <div class="col">
                            <div class="card shadow-sm">
                                <img src="{{ $user->imagen }}">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $user->name }}</h5>
                                    <p class="card-text">{{ $user->email }}</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                        <a href="/perfil/{{ $user->id }}" class="btn btn-secondary">Ver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                
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