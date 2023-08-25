<?php

namespace App\Http\Controllers;

use App\Models\Comedore;
use App\Models\Vivere;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RegisterVivereController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $ubicacionUsuario = auth()->user()->ubicacion;
        $viveres = Vivere::where('ubicacion', $ubicacionUsuario)
            ->orderBy('id', 'desc')
            ->get(); // Agregar este método para ejecutar la consulta y obtener los resultados
        return view('RegisterVivere', compact('viveres'));
    }

    public function store(Request $request)
    {
        $comedor = new Comedore();
        $comedor->name = auth()->user()->ubicacion;
        $comedor->fecha = Carbon::today();
        $comedor->platos_diarios = $request->platos_diarios;

        $comedorRecords = Comedore::all(); // Obtén todos los registros de la tabla 'comedor'
        $totalPlatosDiarios = 0;

        foreach ($comedorRecords as $registro) {
            // return  auth()->user()->ubicacion;
            if ($registro->name == auth()->user()->ubicacion) {
                $totalPlatosDiarios += $registro->platos_diarios;
            }
        }
        $comedor->platos_acumulados = $totalPlatosDiarios;
        // return "No Funciono";
        $comedor->save();
        return redirect()->route('registervivere');
    }
    public function update(Request $request, $id)
    {
        $vivere = Vivere::findOrFail($id);

        $request->validate([
            'cantidad' => 'required|numeric|min:1'
        ]);

        // Actualizar la cantidad del alimento restando la cantidad ingresada
        $vivere->cantidad += $request->cantidad;
        $vivere->save();

        return redirect()->route('registervivere')->with('success', 'Cantidad actualizada exitosamente.');
    }
    public function update2(Request $request, $id)
    {
        $vivere = Vivere::findOrFail($id);

        $request->validate([
            'cantidad' => 'required|numeric|min:1'
        ]);

        // Actualizar la cantidad del alimento restando la cantidad ingresada
        $vivere->cantidad -= $request->cantidad;
        $vivere->save();

        return redirect()->route('registervivere')->with('success', 'Cantidad actualizada exitosamente.');
    }
}
