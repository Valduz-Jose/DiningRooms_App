<?php

namespace App\Http\Controllers;

use App\Models\Comedore;
use Illuminate\Http\Request;

class HomeController extends Controller
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
        $comedore = Comedore::where('name', $ubicacionUsuario)
            ->latest('id')
            ->first();

        return view('home', compact('comedore'));
    }
}
