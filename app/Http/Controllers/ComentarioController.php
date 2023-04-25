<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\Comentario;

class ComentarioController extends Controller
{
   /*  public function create(Post $post)
    {
        return view('comentarios.create', compact('post'));
    } */

    public function store(Request $request)
    {
      
        $this->validate($request, [
            'textoComentario' => 'required',

        ]);

        $comentario = new Comentario([
            'textoComentario' => $request->textoComentario,
           
        ]);
        $comentario->user()->associate(auth()->user());
        $comentario->save();

        return redirect()->route('accesoseguro', ['user' => auth()->user()->username]);
    }

    public function show(User $user,Post $post, comentario $comentario)
    {
        return view('comentarios.show',['post'=>$post,'user'=>$user,'comentario'=>$comentario]);
    }

   /*  public function edit(Post $post, comentario $comentario)
    {
        return view('comentarios.edit', compact('post', 'comentario'));
    }

    public function update(Post $post, comentario $comentario)
    {
        $validatedData = request()->validate([
            'body' => 'required',
        ]);

        $comentario->update($validatedData);

        return redirect('/posts/' . $post->id);
    }

    public function destroy(Post $post, comentario $comentario)
    {
        $comentario->delete();

        return redirect('/posts/' . $post->id);
    } */
}
