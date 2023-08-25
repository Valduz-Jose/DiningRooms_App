@extends('layouts.app')

@section('title', 'Registro Viveres')

@section('content')
    <div class="container">
        <h1 class="mt-4">Bienvenido a Registro de viveres</h1>
        <div class="row">
            <div class="col-md-4">
                <div class="card mb">
                    <div class="card-header bg-info text-white">
                        Entrada de Alimentos
                    </div>
                    @foreach ($viveres as $vivere)
                        <div class="card-body">
                            <form action="{{ route('viveres.actualiza', $vivere->id) }}" method="POST">
                                @csrf
                                @method('PUT')

                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <label class="col-form-label">{{ $vivere->name }}</label>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="number" class="form-control" value="cantidad" name="cantidad"
                                            id="cantidadEntrada" placeholder="#">
                                    </div>
                                    <div class="col-md-4">
                                        <button type="submit" class="btn btn-info">Entran</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mb">
                    <div class="card-header bg-info text-white">
                        Salida de Alimentos
                    </div>
                    @foreach ($viveres as $vivere)
                        <div class="card-body">
                            <form action="{{ route('viveres.actualizados', $vivere->id) }}" method="POST">
                                @csrf
                                @method('PUT')

                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <label class="col-form-label">{{ $vivere->name }}</label>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="number" class="form-control" value="cantidad" name="cantidad"
                                            id="cantidadEntrada" placeholder="#">
                                    </div>
                                    <div class="col-md-4">
                                        <button type="submit" class="btn btn-info">Salen</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mb-3">
                    <div class="card-header bg-info text-white">
                        Platos Servidos Hoy
                    </div>
                    <div class="card-body">
                        <form action="{{ route('platosstore') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="platosServidos">Número de platos servidos:</label>
                                <input type="number" class="form-control" id="platosServidos"
                                    placeholder="Ingrese el número de platos" name="platos_diarios" min="0">
                            </div><br>
                            <button type="submit" class="btn btn-info">Guardar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Espacio vacío -->
        <div class="row">
            <div class="col-md-12 mt-4"></div>
        </div>
    </div>
@endsection
