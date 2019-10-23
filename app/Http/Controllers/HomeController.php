<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $posts = DB::table('posts')->get();

        return view('home', ['posts' => $posts]);
    }

    public function blogpost($id)
    {
        $posts = DB::table('posts')->find($id);

        return view('blogpost', ['post' => $posts]);
    }
}
