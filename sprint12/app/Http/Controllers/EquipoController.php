<?php

namespace App\Http\Controllers;

use App\Models\Liga;
use Illuminate\Http\Request;

class equipoController extends Controller
{
    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $liga = new Liga();

        $liga->equipoLocal = $request -> equipoLocal;
        $liga->equipoVisitante = $request -> equipoVisitante;
        $liga->golesLocal = $request -> golesLocal;
        $liga->golesVisitante = $request -> golesVisitante;

        $liga->save();

        return redirect()->route('liga.home');
    }

    public function edit(Liga $liga){
        return view('edit', compact('liga'));
    }

    public function update(Request $request, Liga $liga){

        $request->validate ([
            'equipoLocal'=> 'required',
            'equipoVisitante' => 'required',
            'golesLocal' => 'required',
            'golesVisitante' => 'required'
        ]);

        $liga -> equipoLocal = $request ->equipoLocal;
        $liga -> equipoVisitante = $request ->equipoVisitante;
        $liga -> golesLocal = $request ->golesLocal;
        $liga -> golesVisitante = $request ->golesVisitante;

        $liga->save();

        return redirect()->route('liga.home', $liga);
    }

    public function delete(Liga $liga){
        $id = $liga->id;
        $equipo = Liga::find($id);
        $equipo->delete();

        return redirect()->route('liga.home', $liga);
    }

}
