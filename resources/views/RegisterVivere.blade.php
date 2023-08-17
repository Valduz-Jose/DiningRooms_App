@extends('layouts.app')

@section('title', 'Registro Viveres')

@section('content')
    <div class="container">
        <h1>Bienvenido a Registro de viveres</h1>
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-header bg-info text-white">
                        Entrada de Alimentos
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="selectEntrada">Seleccione el alimento:</label>
                                <select class="form-control" id="selectEntrada">
                                    <!-- Opciones para la selección de alimentos desde la base de datos -->
                                    <option>Alimento 1</option>
                                    <option>Alimento 2</option>
                                    <!-- ... -->
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="cantidadEntrada">Cantidad:</label>
                                <input type="number" class="form-control" id="cantidadEntrada"
                                    placeholder="Ingrese la cantidad" min="0">
                            </div><br>
                            <button type="submit" class="btn btn-info">Guardar Entrada</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-header bg-info text-white">
                        Salida de Alimentos
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="selectSalida">Seleccione el alimento:</label>
                                <select class="form-control" id="selectSalida">
                                    <!-- Opciones para la selección de alimentos desde la base de datos -->
                                    <option>Alimento 1</option>
                                    <option>Alimento 2</option>
                                    <!-- ... -->
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="cantidadSalida">Cantidad:</label>
                                <input type="number" class="form-control" id="cantidadSalida"
                                    placeholder="Ingrese la cantidad" min="0">
                            </div><br>
                            <button type="submit" class="btn btn-info">Guardar Salida</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="card-header bg-info text-white">
                    Platos Servidos Hoy
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="platosServidos">Número de platos servidos:</label>
                            <input type="number" class="form-control" id="platosServidos"
                                placeholder="Ingrese el número de platos" min="0">
                        </div><br>
                        <button type="submit" class="btn btn-info">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
