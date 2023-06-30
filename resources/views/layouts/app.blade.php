<!doctype html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{--<title>{{ config('www.usm.cl', 'Evaluacion 3') }}</title>--}}

    <title>{{ config('www.usm.cl', 'Evaluacion 3') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <link href="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.css" rel="stylesheet" type="text/css">
    <script src="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.js" type="text/javascript"></script>

 
</head>
<body background = "{{asset('images/arte.png')}}" style="height:auto;background-size: cover;background-repeat: no-repeat:">
    <div id="app">
       <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{--{{ config('app.name', 'Laravel') }}--}}
                    {{ config('www.usm.cl', 'Evaluacion 3') }}

                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->

                    {{--@if(Auth::check())--}}

                    <ul class="navbar-nav me-auto">

                        
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('publico.index') }}">{{ __('Galeria') }}</a>
                        </li>
                        
                        {{--@if(Auth::check())--}}

                        {{--<li class="nav-item">
                            <a class="nav-link" href="{{ route('perfiles.index') }}">{{ __('Perfil') }}</a>
                        </li>
                        {{--@perfiles('Administrador')--}}
                        {{--<li class="nav-item">
                            <a class="nav-link" href="{{ route('imagenes.index') }}">{{ __('Imagenes') }}</a>
                        </li>
                       
                        {{--@role('Artistista')--}}
                        {{--<li class="nav-item">
                            <a class="nav-link" href="{{ route('cuentas.index') }}">{{ __('Cuenta') }}</a>
                        </li>--}}
                                             
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('ingreso') }}">{{ __('Iniciar Sesion') }}</a>
                        </li>
                        


                         {{--@endrole--}}
                       {{--}} @endif--}}

                    </ul>

                    {{--@endif--}}

                    <!-- Right Side Of Navbar -->
                    {{--<ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('ingreso'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('ingreso') }}">{{ __('Iniciar Sesion') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarce') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('cerrar sesion') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>--}}



                    
                </div>
            </div>
        </nav>

        

        <main class="py-4">
            @yield('content')
        </main>
    </div>


</body>

{{-- <style>

    body{
        background-image: url("/../../public/images/arte.png");
        background-position:center;
        background-repeat:no-repeat;
        background-size:cover;
        background-attachment:fixed;
    } 

</style> --}}



</html>
