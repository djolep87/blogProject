<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('role:admin');
    }



    public function index()
    {
        $users = User::all();
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('admin.index')->with(['posts' => $posts, 'users' => $users]);
    }
}
