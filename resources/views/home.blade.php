@extends('layouts.app')

@section('title', 'Home')

@section('content')


    <h1 class="text-center">{{ ucwords($comedore->name) }} Platos servidos: {{ $comedore->platos_acumulados }}</h1>

    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('img/f1.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/f2.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/f3.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/f4.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/f5.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/f6.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/f7.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/f8.jpg') }}" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container mt-5">
        <h1 class="text-center mb-4">Comedores Solidarios del Municipio Junín</h1>

        <div class="row">
            <div class="col-lg-6 text-center">
                <h2 class="text-primary ">AC AMIJUNÍN</h2>
                <p>Número de RIF: J-411084387</p>
                <div class="container-sm">
                    <img class="container-sm" src="{{ asset('img/LOGO1A.png') }}" alt="">
                </div>
                <!-- ... Agrega más detalles aquí ... -->
            </div>

            <div class="col-lg-6">
                <h2 class="text-primary">COMEDORES SOLIDARIOS DE JUNÍN</h2>
                <p>Objetivo: Proporcionar apoyo alimentario, educativo, médico y psicológico a niños en edad escolar (2 – 12
                    años) de los sectores más vulnerables de la ciudad de Rubio, municipio Junín.</p>
                <!-- ... Agrega más detalles aquí ... -->
                <div class="container-sm bg-light">
                    <img class="container-sm" src="{{ asset('img/Logo Alimenta.png') }}" alt="">
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <!-- Agrega más información detallada sobre los comedores aquí... -->
        </div>

        <h2 class="mt-5 text-primary">Información de Contacto</h2>
        <p>Dr. Francisco José Gamboa Valderrama</p>
        <p>Coordinador General</p>
        <!-- ... Agrega más detalles de contacto aquí ... -->
    </div>

@endsection

{{-- <!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- favicon --
    {{-- estilos --
</head>

<body>
    {{-- header --}}
{{-- nav --}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card-body">
        <h4>Bienvenido . {{ auth()->user()->name }} </h4>
        <h4>Ubicacion . {{ auth()->user()->ubicacion }} </h4>
    </div>


    {{-- footer --}}
{{-- logout --}
    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
 --}}
{{-- script --}
</body>

</html>

{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
