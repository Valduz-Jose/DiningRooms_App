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
        $viveres = Vivere::all();
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
}
