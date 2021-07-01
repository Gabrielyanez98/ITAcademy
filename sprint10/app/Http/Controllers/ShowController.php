<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function show($idLibro){
        $libro = $idLibro;
        return view('show') ->with(['libro'=> $libro]);
    }
}
