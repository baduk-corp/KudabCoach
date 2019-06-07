<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class vipController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $posts = DB::table('users')->leftjoin('posts', 'users.id', '=', 'posts.autor')->paginate(7); 
        return view('vip/home', ['posts' => $posts]);
    }

    public function getFullPost($id) {
        $post = DB::table('users')->leftjoin('posts', 'users.id', '=', 'posts.autor')->where('posts.id', '=', $id)->first();
        return view('vip/read', ['post' => $post]);
    }
}
