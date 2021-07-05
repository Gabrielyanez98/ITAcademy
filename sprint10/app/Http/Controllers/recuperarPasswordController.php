<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class recuperarPasswordController extends Controller
{
    public function recuperarPassword(){
        return view('recuperarPassword');
    }
}
