<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Faker\Provider\ar_EG\Person;
use Illuminate\Http\Request;

class RegisterPersonController extends Controller
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
        $personas = Persona::orderBy('id', 'desc')->paginate();

        return view('RegisterPerson', compact('personas'));
    }
    public function store(Request $request)
    {
        $person = new Persona();
        $person->name = $request->name;
        $person->edad = $request->edad;
        $person->sexo = $request->sexo;
        $person->fecha_nacimiento = $request->fecha_nacimiento;
        $person->ruta_foto = $request->ruta_foto;
        $person->ubicacion = $request->ubicacion;
        $person->save();
        return redirect()->route('registerperson');
        // return $request->all();
    }
}
