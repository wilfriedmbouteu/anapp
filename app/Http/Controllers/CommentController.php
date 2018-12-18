<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Post;
use App\User;


class CommentController extends Controller
{
    //
   public function __construct()
   {
    $this->middleware('auth');
   }

    public function store(Post $post)
    {
    	$this->validate(request(), [
       'body' => 'required'
    	]);

    	 Comment::create([
         'body' => request('body'),
         
         'user_id' => auth()->id(),
         'post_id' => $post->id
    	 ]);

    	 return back();
    }
}
