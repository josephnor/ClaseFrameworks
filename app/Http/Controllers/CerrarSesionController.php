<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CerrarSesionController extends Controller
{
    public function store(){
        //dd('cerrando la sesion');
        auth()->logout();
        return redirect()->route('login');
    }
}
