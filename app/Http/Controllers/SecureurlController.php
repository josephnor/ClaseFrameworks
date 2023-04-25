<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
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
    public function index(User $user)
    {

        //Solo trare 6 publicaciones sin importar cuantas tenga guardada el usuario
        $posts = Post::where('user_id', $user->id)->paginate(6);


        return view('dashboard', ['user' => $user, 'posts' => $posts]);
    }

    public function show(User $user, Post $post ,Comentario $comentario)
    {

        return view('publicaciones.show', ['post' => $post, 'user' => $user,'comentario'=>$comentario]);
    }



    public function create()
    {

        //dd('creando nueva publicacion');
        return view('publicaciones.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'titulo' => 'required',
            'Descripcion' => 'required',
            'imagen' => 'required',

        ]);

        $post = new Post([
            'titulo' => $request->titulo,
            'Descripcion' => $request->Descripcion,
            'imagen' => $request->imagen,
        ]);
        $post->user()->associate(auth()->user());
        $post->save();




        return redirect()->route('accesoseguro', ['user' => auth()->user()->username]);
    }
}
