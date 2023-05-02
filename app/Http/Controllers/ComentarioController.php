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

    public function store(Request $request,User $user,Post $post,comentario $comentario)
    {
      
        $this->validate($request, [
            'textoComentario' => 'required',

        ]);

        Comentario::create([
            'textoComentario' => $request->textoComentario,
            'post_id'=>$post->id,
            'user_id'=>auth()->user()->id
           
        ]);

       

        return back();
    }

    public function show(User $user,Post $post, comentario $comentario)
    {
        return view('publicaciones.show',['post'=>$post,'user'=>$user,'comentario'=>$comentario]);
    }


    public function destroy( comentario $comentario)
    {
        $comentario->delete();

        return back();
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
*/
    
}
