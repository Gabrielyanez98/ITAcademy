<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class LoginController extends Controller
{
    public function login(){
        return view('login');
    }
    public function logout(){
        return view('logout');
    }

    public function saveCookie(Request $req){
        $username = $req->input('usuario');
        $password = $req->input('password');
        
        $minute = 5;
        $response = new Response("Hola $username ya estás logueado");
        $response->withCookie((cookie('name', $username, $minute)));
        $response->withCookie((cookie('password', $password, $minute)));

        return $response;
    }

    
}
