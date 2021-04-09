<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use Auth;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('role:user');
        
    }


    public function index()
    {
        $user = Auth::user();
        $posts = Post::where('user_id', $user->id)->orderBy('id', 'desc')->get(); 
        
        return view('user.index')->with('posts', $posts, 'user', $user);
    }
}
