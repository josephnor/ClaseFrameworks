<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{

    protected $fillable=[
      
        'textoComentario',
        'user_id',


    ];
    public function post()
    {
        return $this->belongsTo(Post::class)->select(['titulo']);
    }

    public function user(){
        #onetomany--un usuario puede tener multiples publicaciones
        return $this->belongsTo(Post::class)->select(['name','username']);

    }
}
