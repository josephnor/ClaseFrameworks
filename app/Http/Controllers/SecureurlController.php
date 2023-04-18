<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\Middleware;

class SecureurlController extends Controller
{

    public function __construct()
    {
        $this->Middleware('auth');
    }
    public function index(User $user){

        //Solo trare 6 publicaciones sin importar cuantas tenga guardada el usuario
        $posts=Post::where('user_id',$user->id)->paginate(6);
     
        //$posts=Post::where('user_id',$user->id)->get();
        //dd($posts);
        //$users=User::all();
        return view('dashboard',['user'=>$user,'posts'=>$posts]);
    }


    public function create(){

        //dd('creando nueva publicacion');
        return view('publicaciones.create');
    }

    public function store(Request $request){
        $this->validate($request,[
            'titulo'=>'required',
            'Descripcion'=>'required',
            'imagen'=>'required',
        
        ]);

    

        /*Post::create([

            'titulo'=>$request->titulo,
            'Descripcion'=>$request->Descripcion,
            'imagen'=>$request->imagen,
            'user_id'=>auth()->user()->id
       ]); */
       $post = new Post([
        'titulo' => $request->titulo,
        'Descripcion' => $request->Descripcion,
        'imagen' => $request->imagen,
        ]);
        $post->user()->associate(auth()->user());
        $post->save();

    


        return redirect()->route('accesoseguro',['user'=>auth()->user()->username]);
    }
}
