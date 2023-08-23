@extends('layouts.app')

@section('title', 'Registro Personas')

@section('content')
    <div class="container">
        <h1>Editar Registro de Personas</h1>
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-header bg-info text-white">
                        {{ $person->name }}
                    </div>
                    <div class="card-body">
                        <form action="{{ route('PersonEditUpdate', $person) }}" enctype="multipart/form-data" method="POST">
                            @csrf

                            @method('put')

                            <div class="form-group">
                                <label for="nombre">Nombre:</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Ingrese el nombre" value="{{ $person->name }}">
                            </div>
                            <div class="form-group">
                                <label for="edad">Edad:</label>
                                <input type="number" class="form-control" id="edad" name="edad"
                                    placeholder="Ingrese la edad" min="0" value="{{ $person->edad }}">
                            </div>
                            <div class="form-group">
                                <label for="sexo">Sexo:</label>
                                <select class="form-control" id="sexo" name="sexo" value="{{ $person->sexo }}">
                                    <option value="M">Masculino</option>
                                    <option value="F">Femenino</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="fechaNacimiento">Fecha de Nacimiento:</label>
                                <input type="date" class="form-control" id="fecha_nacimiento"
                                    value="{{ $person->fecha_nacimiento }}" name="fecha_nacimiento">
                            </div>
                            <div class="form-group"><br>
                                <label for="foto">Foto:</label>
                                <input type="file" accept="image/*" class="form-control-file" id="foto "
                                    name="foto" value="{{ $person->foto }}">
                                @error('foto')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group"><br>
                                <label for="ubicacion">Ubicación:</label>
                                <select class="form-control" id="ubicacion" name="ubicacion"
                                    value="{{ $person->ubicacion }}">
                                    <option value="bramon">Bramon</option>
                                    <option value="palmita">Palmita</option>
                                    <option value="5patio">5 Patio</option>
                                </select>
                            </div><br>
                            <button type="submit" class="btn btn-info">Actualizar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
