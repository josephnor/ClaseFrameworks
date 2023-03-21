<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){

        return view('login');
    }

    /*public function store(){

        dd("iniciando sesion");
    }
    */
    public function store(Request $request){
        $validated=$request ->validate([
         'email'=>'required|min:3|max:40',
         'password'=>'required|min:6|max:50'

        ]);
        //dd("iniciando sesion");
        if(!auth()->attempt($request->only('email','password'))){

            return back()->with('mensaje','Usuario o Contraseña incorrecta');
        }
        return redirect()->route('accesoseguro',['user'=>auth()->user()->username]);
    }


}
