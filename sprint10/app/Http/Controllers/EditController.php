<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditController extends Controller
{
   public function edit($idLibro){
       $libro = $idLibro;
       return view('edit')->with(['libro'=>$libro]);
   }
}
