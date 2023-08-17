@extends('layouts.app')

@section('title', 'Estadisticas')

@section('content')
    <div class="container">
        <h1>Bienvenido a Estadisticas</h1>
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-header bg-info text-white">
                        Gráfico de Consumo Producto/Cantidad
                    </div>
                    <div class="card-body">
                        <canvas id="areaChart"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-header bg-info text-white">
                        Gráfico de Edades de Personas
                    </div>
                    <div class="card-body">
                        <canvas id="pieChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-header bg-info text-white">
                        Gráfico de Top de Productos Más Usados
                    </div>
                    <div class="card-body">
                        <canvas id="barChart"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-header bg-info text-white">
                        Promedio de Consumo del Gas
                    </div>
                    <div class="card-body">
                        <h4>Promedio: XX unidades por mes</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Agrega los scripts necesarios para inicializar los gráficos, como Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Aquí puedes escribir el código para inicializar y cargar los datos en los gráficos
    </script>
@endsection
