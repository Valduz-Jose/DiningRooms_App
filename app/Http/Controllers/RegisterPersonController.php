<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Faker\Provider\ar_EG\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\File;


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
        $ubicacionUsuario = auth()->user()->ubicacion;
        $personas = Persona::where('ubicacion', $ubicacionUsuario)
            ->orderBy('id', 'desc')
            ->paginate(10);

        return view('RegisterPerson', compact('personas'));
    }
    public function store(Request $request)
    {

        $person = new Persona();
        $person->name = $request->name;
        $person->edad = $request->edad;
        $person->sexo = $request->sexo;
        $person->fecha_nacimiento = $request->fecha_nacimiento;
        $person->ubicacion = $request->ubicacion;

        $request->validate([
            'foto' => 'required|image|max:2048'
        ]);
        $imagenes = $request->file('foto')->store('public/fotos');
        $url = Storage::url($imagenes);

        $person->foto = $url;

        $person->save();
        return redirect()->route('registerperson');
    }
    public function edit($id)
    {
        $person = Persona::find($id);
        return view('PersonEdit', compact('person'));
    }
    public function update(Request $request)
    {

        $person = new Persona();
        $person->name = $request->name;
        $person->edad = $request->edad;
        $person->sexo = $request->sexo;
        $person->fecha_nacimiento = $request->fecha_nacimiento;
        $person->ubicacion = $request->ubicacion;
        $request->validate([
            'foto' => 'required|image|max:2048'
        ]);
        $imagenes = $request->file('foto')->store('public/fotos');
        $url = Storage::url($imagenes);

        $person->foto = $url;

        $person->save();
        return redirect()->route('registerperson');
    }
}
