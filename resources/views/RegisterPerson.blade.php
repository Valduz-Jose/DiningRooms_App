@extends('layouts.app')

@section('title', 'Registro Personas')

@section('content')
    <div class="container">
        <h1>Bienvenido a Registro de Personas</h1>
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-header bg-info text-white">
                        Agregar Nueva Persona
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="nombre">Nombre:</label>
                                <input type="text" class="form-control" id="nombre" placeholder="Ingrese el nombre">
                            </div>
                            <div class="form-group">
                                <label for="edad">Edad:</label>
                                <input type="number" class="form-control" id="edad" placeholder="Ingrese la edad"
                                    min="0">
                            </div>
                            <div class="form-group">
                                <label for="sexo">Sexo:</label>
                                <select class="form-control" id="sexo">
                                    <option value="masculino">Masculino</option>
                                    <option value="femenino">Femenino</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="fechaNacimiento">Fecha de Nacimiento:</label>
                                <input type="date" class="form-control" id="fechaNacimiento">
                            </div>
                            <div class="form-group"><br>
                                <label for="foto">Foto:</label>
                                <input type="file" class="form-control-file" id="foto">
                            </div>
                            <div class="form-group"><br>
                                <label for="ubicacion">Ubicación:</label>
                                <select class="form-control" id="ubicacion">
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
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-header bg-info text-white">
                        Actualizar Datos de Personas
                    </div>
                    <div class="card-body">
                        <!-- Aquí se mostrarían los registros de personas y la opción de editar -->
                        <!-- Puedes utilizar un ciclo para mostrar los registros y generar un formulario por cada uno -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
