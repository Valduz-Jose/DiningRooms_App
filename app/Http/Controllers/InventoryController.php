<?php

namespace App\Http\Controllers;

use App\Models\Vivere;
use Illuminate\Http\Request;

class InventoryController extends Controller
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
        // Crud Listar y leer registros
        $ubicacionUsuario = auth()->user()->ubicacion;
        $viveres = Vivere::where('ubicacion', $ubicacionUsuario)
            ->orderBy('cantidad', 'asc')
            ->paginate();

        $viveres2 = Vivere::where('ubicacion', $ubicacionUsuario)
            ->orderBy('updated_at', 'desc')
            ->paginate();
        return view('inventory', compact('viveres'), compact('viveres2'));
    }
}
