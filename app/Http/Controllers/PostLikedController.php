<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Mail\PostLiked;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PostLikedController extends Controller
{

    public function __construct(){
        $this->middleware(['auth']);
    }

    public function store(Request $request,Post $post){

        if($post->likedBy($request->user())){
            return response(null, 409);
        }

        $post->likes()->create([
            'user_id'=> $request->user()->id
        ]);
        if(!$post->likes()->onlyTrashed()->where('user_id', $request->user()->id)->count()){
            
            Mail::to($post->user)->send(new PostLiked(auth()->user(), $post));

        }

        return back();
    }

    public function destroy(Request $request,Post $post)
    {
        $request->user()->likes()->where('post_id', $post->id)->delete();
        
        return back();
    }
}
