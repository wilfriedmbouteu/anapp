<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Image;
use App\User;

class PagesController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth')->except(['index','contact', 'about','navy','loans']);
    }

    public function test()
    {
        return view('pages.test');
    }
    public function index()
    {
    	$posts = Post::latest()->get();
    	return view('pages.index', compact('posts'));
    }

     public function contact()
    {
    	return view('pages.contact');
    }

    public function profile()
    {
        return view('register.profile');
    }

    public function profile2()
    {
        return view('register.profile2');
    }

    public function uploadimg(Request $request)
    {
       if($request->hasFile('avatar')) 
       {

        $avatar = $request->file('avatar');
        $filename = time() . '.' . $avatar->getClientOriginalExtension();

        Image::make($avatar)->resize(300, 300)->save(public_path("/uploads/avatars/" . $filename ) );
        $user = auth()->user();
        $user->avatar = $filename;
        
        $user->save();
        
          }
       return view('register.profile', compact('user'));
    }
    public function navy()
    {
        return view('pages.navy');
    }
    public function loans()
    {
        return view('pages.loans');
    }

}
