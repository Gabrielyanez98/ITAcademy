<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    //
    public function index(){
        $indice = "hola";
       return view('curso')->with('curso', $indice);    
    } 

    public function miCurso($curso){
        return "Estás en el curso de: $curso";
    }

}
