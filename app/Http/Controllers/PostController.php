<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    //
    public function create()
    {
    	return view('posts.create');
    }

    public function store()
    {
    	$this->validate(request(), [
        'title' => 'required|min:2',
        'body' => 'required'
    	]);

    	$posts= Post::create([
         'title' => request('title'),
         'body'  => request('body'),
         'user_id' => auth()->id()
    	]);

    	return redirect('/')->with('message','Successfully published');
    }
    public function show($id)
    {
    	$post= Post::find($id);
         $user = $post->user;

    	return view('posts.show', compact('post', 'user'));
    }
}
