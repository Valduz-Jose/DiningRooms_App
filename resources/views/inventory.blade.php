@extends('layouts.app')

@section('title', 'Inventario')


@section('content')
    <div class="container">
        <h1>Bienvenido a Inventario</h1>
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-header bg-info text-white">
                        Inventario
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Producto</th>
                                    <th>Cantidad</th>
                                    <th>Unidad de Medida</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Aquí se llenarían los datos del inventario desde la base de datos -->
                                @foreach ($viveres as $vivere)
                                    <tr>
                                        <td>{{ $vivere->name }}</td>
                                        <td>{{ $vivere->cantidad }}</td>
                                        <td>{{ $vivere->unidad_medida }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-center">
                            {{ $viveres->links('pagination.bootstrap') }}
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-header bg-info text-white">
                        Últimos Productos Usados
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Producto</th>
                                    <th>Cantidad</th>
                                    <th>Fecha</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Aquí se mostrarían los últimos productos usados desde la base de datos -->
                                <tr>
                                    <td>Producto 1</td>
                                    <td>2</td>
                                    <td>2023-08-10</td>
                                </tr>
                                <tr>
                                    <td>Producto 2</td>
                                    <td>1</td>
                                    <td>2023-08-09</td>
                                </tr>
                                <!-- ... -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
