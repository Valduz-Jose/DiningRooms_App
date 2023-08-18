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
        $viveres = Vivere::paginate();

        return view('inventory', compact('viveres'));
    }
}
