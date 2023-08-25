<!DOCTYPE html>
<html lang="es">

<head>
    <title>Mi Comedor</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{ asset('img/logo2.ico') }}">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <style>
        /* Estilos personalizados */
        /* Agrega aquí tus estilos personalizados si deseas */
    </style>
</head>

<body>

    <section class="vh-100 d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center">
                    <img src="{{ asset('img/login.svg') }}" class="img-fluid" alt="Imagen de ejemplo">
                </div>
                <div class="col-md-6">
                    <form action="{{ route('register') }}" method="post">
                        @csrf
                        <h2 class="text-center mb-4">Regístrate</h2>

                        <div class="mb-3">
                            <label for="form3Example3" class="form-label">Nombre</label>
                            <input type="text" id="form3Example3" class="form-control"
                                placeholder="Ingrese su nombre" name="name" />
                        </div>

                        <div class="mb-3">
                            <label for="ubicacion" class="form-label">Ubicación</label>
                            <select class="form-select" name="ubicacion" id="ubicacion">
                                <option value="bramon">Bramon</option>
                                <option value="palmita">Palmita</option>
                                <option value="5patio">5to Patio</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="form3Example3" class="form-label">Correo Electrónico</label>
                            <input type="email" id="form3Example3" class="form-control"
                                placeholder="Ingrese un correo válido" name="email" />
                        </div>

                        <div class="mb-3">
                            <label for="form3Example4" class="form-label">Contraseña</label>
                            <input type="password" id="form3Example4" class="form-control"
                                placeholder="Ingrese la contraseña" name="password" />
                        </div>

                        <div class="mb-3">
                            <label for="form3Example4" class="form-label">Confirme su Contraseña</label>
                            <input type="password" id="form3Example4" class="form-control"
                                placeholder="Ingrese la contraseña" name="password_confirmation" />
                        </div>

                        <button type="submit" class="btn btn-primary btn-lg w-100">Registrarse</button>

                        <p class="mt-3">¿Ya tienes una cuenta? <a href="{{ route('login') }}"
                                class="text-danger">Iniciar Sesión</a></p>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-primary py-4 px-4 px-xl-5 text-center text-md-start">
        <div class="text-white mb-3">Copyright © 2023. Todos los Derechos Reservados.</div>
        <div>
            <a href="https://www.facebook.com/acamijunin" class="text-white me-4"><i class="fab fa-facebook-f"></i></a>
            <a href="https://twitter.com/Amijunin?t=Nfu7mqVTk-baEWbxQL-pWg&s=09" class="text-white me-4"><i
                    class="fab fa-twitter"></i></a>
            <a href="https://www.instagram.com/amijunin/" class="text-white me-4"><i class="fab fa-instagram"></i></a>
            <a href="https://t.me/AMIJUNIN" class="text-white"><i class="fab fa-telegram"></i></a>
        </div>
    </footer>

    <!-- Bibliotecas JavaScript de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>

{{-- <!doctype html>
<html lang="es">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

</head>

<body>

    <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="{{ asset('img/login.svg') }}" class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form action="{{ route('register') }}" method="post">
                        @csrf
                        <div
                            class="d-flex flex-row align-items-center justify-content-center justify-content-lg-center">
                            <h2 class="lead fw-normal mb-0 me-3">Registrate</h2>
                        </div>

                        <div class="divider d-flex align-items-center my-4"></div>
                        <!-- Name input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form3Example3">Nombre </label>
                            <input type="text" id="form3Example3" class="form-control form-control-lg"
                                placeholder="Ingrese su nombre" name="name" />
                        </div>
                        <!-- Select ubicacion -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="ubicacion-select">Ubicación</label>
                            <select class="form-select form-select-lg" name="ubicacion" id="ubicacion">
                                <option value="bramon">Bramon</option>
                                <option value="palmita">Palmita</option>
                                <option value="5patio">5to Patio</option>
                            </select>
                        </div>

                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form3Example3">Correo Electronico</label>
                            <input type="email" id="form3Example3" class="form-control form-control-lg"
                                placeholder="Ingrese un correo valido" name="email" />
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <label class="form-label" for="form3Example4">Contraseña</label>
                            <input type="password" id="form3Example4" class="form-control form-control-lg"
                                placeholder="Ingrese la contraseña" name="password" />
                        </div>
                        <!-- Confirm Password input -->
                        <div class="form-outline mb-3">
                            <label class="form-label" for="form3Example4">Confirme su Contraseña</label>
                            <input type="password" id="form3Example4" class="form-control form-control-lg"
                                placeholder="Ingrese la contraseña" name="password_confirmation" />
                        </div>

                        {{-- <div class="d-flex justify-content-between align-items-center">
                            <!-- Checkbox -->
                            <div class="form-check mb-0">
                                <input class="form-check-input me-2" type="checkbox" value=""
                                    id="form2Example3" />
                                <label class="form-check-label" for="form2Example3">
                                    Recuerdame
                                </label>
                            </div>
                            <a href="#!" class="text-body">Perdio su Contraseña?</a> 
                            </div> --}

                        <div class="text-center text-lg-center mt-4 pt-2">
                            <button type="submit" class="btn btn-primary btn-lg"
                                style="padding-left: 2.5rem; padding-right: 2.5rem;">Registrarse</button>
                            <p class="small fw-bold mt-2 pt-1 mb-0">o en su lugar <a href="{{ route('login') }}"
                                    class="link-danger">Iniciar Sesion</a></p>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <div
            class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
            <!-- Copyright -->
            <div class="text-white mb-3 mb-md-0">
                Copyright © 2023. Todos los Derechos Reservados.
            </div>
            <!-- Copyright -->

            <!-- Right -->
            <div>
                <a href="#!" class="text-white me-4">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#!" class="text-white me-4">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#!" class="text-white me-4">
                    <i class="fab fa-google"></i>
                </a>
                <a href="#!" class="text-white">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>
            <!-- Right -->
        </div>
    </section>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html> --}}
{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
