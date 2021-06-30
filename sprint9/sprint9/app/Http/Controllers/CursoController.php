<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    //
    public function index(){
       return view('curso');    
    }

    public function miCurso($curso){
        return "Estás en el curso de: $curso";
    }

}
