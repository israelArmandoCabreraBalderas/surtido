<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {!! htmlScriptTagJsApi(['lang' => 'es']) !!}
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" onclick="window.open('https://drive.google.com/file/d/1UafpGzfbjhtqCTeM2Cao1-WL0--42ah9/view?usp=sharing', '_blank')">{{ __('Aviso de privacidad') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Inicio de sesi??n') }}</a>
                        </li>
                        @endif

                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Registrar') }}</a>
                        </li>
                        @endif
                        @else
                        <!--<li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link" href="/proveedores" role="button">
                                    Proveedores
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link" href="/productos" role="button">
                                    Productos
                                </a>
                            </li>-->
                        
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ __('Acerca de') }}
                                </a>
    
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
    
                                    <a class="dropdown-item" href="/vallesoft">
                                        {{ __('Valle Soft') }}
                                    </a>

                                    <a class="dropdown-item" href="/surtido">
                                        {{ __('Surtido') }}
                                    </a>

                                    <a class="dropdown-item" href="/contacto">
                                        {{ __('Cont??ctanos') }}
                                    </a>
                                </div>
                            </li>
                        
                            <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

                                <a class="dropdown-item" href="/perfil">
                                    {{ __('Perfil') }}
                                </a>

                                <a class="dropdown-item" href="/carrito">
                                    {{ __('Carrito') }}
                                </a>

                                <a class="dropdown-item" href="/perfil">
                                    {{ __('Mis compras') }}
                                </a>

                                <a class="dropdown-item" href="/misproductos">
                                    {{ __('Mis productos') }}
                                </a>
                                <a class="dropdown-item" onclick="window.open('https://drive.google.com/file/d/1UafpGzfbjhtqCTeM2Cao1-WL0--42ah9/view?usp=sharing', '_blank')">
                                    {{ __('Aviso de privacidad') }}
                                </a>

                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Cerrar sesi??n') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>