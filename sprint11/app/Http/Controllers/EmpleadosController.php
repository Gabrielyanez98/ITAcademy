<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadosController extends Controller
{
    public function index(){
        $empleados = Empleado::paginate();
        return view('index', compact('empleados'));
    }
    public function create( ){
        return view('create');
    }
    public function store(Request $request){
        
        $empleados = new Empleado();

        $empleados->nombre = $request-> nombre;
        $empleados->apellido = $request-> apellido;
        

        $empleados->save();

        return redirect()->route('empleados.index');
    }

    public function edit(Empleado $empleado){
        return view('edit', compact('empleado'));
    }

    public function update(Request $request, Empleado $empleado){

        $request->validate([
            'nombre'=> 'required',
            'apellido'=> 'required'
        ]);
        
        $empleado-> nombre = $request->nombre;
        $empleado-> apellido = $request->apellido;

        $empleado->save();

        return redirect()->route('empleados.index', $empleado);

    }

    public function delete(Empleado $empleado){
        $id = $empleado->id;
        $empleados = Empleado::find($id);
        $empleados->delete();

        return redirect()->route('empleados.index', $empleado);

    }
}
