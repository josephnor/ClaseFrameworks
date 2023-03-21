<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistroController extends Controller
{
    public function index(){

        return view('registro');
    }



    public function store(Request $request){
       $request->request->add(['username'=>Str::slug($request->username)]);
       
        $validated=$request ->validate([
        'name'=>'required|min:4',
        'username'=>'required|unique:users|min:3|max:15',
        'email'=>'required|unique:users|min:3|max:40',
        'password'=>'required|min:6|max:50',
        'ProgramaAcademico'=>'required',
        'celular'=>'required|min:10',
        'genero'=>'required',
        'direccion'=>'required|min:4',
        'descripcion'=>'required|min:4',
        'semestre'=>'required'

       ]);


        User::create([

            'name'=>$request->name,
            'username'=>Str::slug($request->username),
            'email'=>$request->email,
            'password'=>Hash::make( $request->password),
            'ProgramaAcademico'=>$request->ProgramaAcademico,
            'semestre'=>$request->semestre,
            'celular'=>$request->celular,
            'genero'=>$request->genero,
            'direccion'=>$request->direccion,
            'descripcion'=>$request->descripcion,
        ]);

       auth()->attempt([
        'email'=>$request->email,
        'password'=>$request->password,


       ]);

       return redirect()->route('login');


    }


}

