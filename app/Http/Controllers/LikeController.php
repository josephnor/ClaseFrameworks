<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\Like;


class LikeController extends Controller
{

    public function store(Request $request,User $user,Post $post)
    {
   
    

    Like::create([
        
        'post_id'=>$request->post_id,
        'user_id'=>auth()->user()->id
       
    ]);



    return back();

}
}
