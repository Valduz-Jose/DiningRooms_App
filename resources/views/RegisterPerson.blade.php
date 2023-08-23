@extends('layouts.app')

@section('title', 'Registro Personas')

@section('content')
    <div class="container">
        <h1>Bienvenido a Registro de Personas</h1>
        <div class="row">
            <div class="col-md-8">
                <div class="card mb-3">
                    <div class="card-header bg-info text-white">
                        Personas en Sistema
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    {{-- <th>ID</th> --}}
                                    <th>Foto </th>
                                    <th>Nombre</th>
                                    <th>Edad</th>
                                    <th>Sexo</th>
                                    <th>Fecha_nacimiento</th>
                                    {{-- <th>Ubicacion</th> --}}
                                    {{-- <th>Opciones</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Aquí se llenarían los datos del inventario desde la base de datos -->
                                @foreach ($personas as $person)
                                    <tr>
                                        {{-- <td>{{ $person->id }}</td> --}}
                                        <td><img class="card-img-top" src="{{ asset($person->foto) }}" alt=""></td>
                                        <td>{{ $person->name }}</td>
                                        <td>{{ $person->edad }}</td>
                                        <td>{{ $person->sexo }}</td>
                                        <td>{{ $person->fecha_nacimiento }}</td>
                                        {{-- <td>{{ $person->ubicacion }}</td> --}}
                                        <td><a href="{{ route('registerpersonedit', $person->id) }}">Editar</a> </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-center">
                            {{ $personas->links('pagination.bootstrap') }}
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-3">
                    <div class="card-header bg-info text-white">
                        Agregar Nueva Persona
                    </div>
                    <div class="card-body">
                        <form action="{{ route('registerpersonstore') }}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="nombre">Nombre:</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Ingrese el nombre">
                            </div>
                            <div class="form-group">
                                <label for="edad">Edad:</label>
                                <input type="number" class="form-control" id="edad" name="edad"
                                    placeholder="Ingrese la edad" min="0">
                            </div>
                            <div class="form-group">
                                <label for="sexo">Sexo:</label>
                                <select class="form-control" id="sexo" name="sexo">
                                    <option value="M">Masculino</option>
                                    <option value="F">Femenino</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="fechaNacimiento">Fecha de Nacimiento:</label>
                                <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento">
                            </div>
                            <div class="form-group"><br>
                                <label for="foto">Foto:</label>
                                <input type="file" accept="image/*" class="form-control-file" id="foto"
                                    name="foto">
                                @error('foto')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group"><br>
                                <label for="ubicacion">Ubicación:</label>
                                <select class="form-control" id="ubicacion" name="ubicacion">
                                    <option value="bramon">Bramon</option>
                                    <option value="palmita">Palmita</option>
                                    <option value="5patio">5 Patio</option>
                                </select>
                            </div><br>
                            <button type="submit" class="btn btn-info">Guardar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
