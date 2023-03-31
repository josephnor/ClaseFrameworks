<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class imgController extends Controller
{
    public function store(Request $request){
        $imagen=$request->file('file');
       

        $nombreImagen=Str::uuid().".".$imagen->extension();
        return response()->json(['imagen'=>$nombreImagen]);
        
    
    
    }
}
