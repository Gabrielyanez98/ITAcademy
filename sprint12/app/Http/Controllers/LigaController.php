<?php

namespace App\Http\Controllers;

use App\Models\Liga;
use Illuminate\Http\Request;

class ligaController extends Controller
{
    public function index() {
        $liga = Liga::paginate();
        return view('home', compact('liga'));
    }
    
}
