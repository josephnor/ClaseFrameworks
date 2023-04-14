<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable=[
        'titulo',
        'Descripcion',
        'imagen',
        'user_id'


    ];

    public function user(){
        #onetomany--un usuario puede tener multiples publicaciones
        return $this->belongsTo(Post::class)->select(['name','username']);

        
    }

    
    
}
