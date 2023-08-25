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
                                    {{-- <th>ubicacion</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Aquí se llenarían los datos del inventario desde la base de datos -->
                                @foreach ($viveres as $vivere)
                                    <tr>
                                        <td>{{ $vivere->name }}</td>
                                        <td>{{ $vivere->cantidad }} {{ $vivere->unidad_medida }}</td>
                                        {{-- <td>{{ $vivere->ubicacion }}</td> --}}
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
                                    {{-- <th>Cantidad</th> --}}
                                    <th>Fecha</th>
                                    {{-- <th>ubicacion</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Aquí se mostrarían los últimos productos usados desde la base de datos -->
                                @foreach ($viveres2 as $vivere)
                                    <tr>
                                        <td>{{ $vivere->name }}</td>
                                        {{-- <td>{{ $vivere->unidad_medida }}</td> --}}
                                        <td>{{ $vivere->updated_at }}</td>
                                        {{-- <td>{{ $vivere->ubicacion }}</td> --}}
                                    </tr>
                                @endforeach
                                <!-- ... -->
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-center">
                            {{ $viveres2->links('pagination.bootstrap') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
