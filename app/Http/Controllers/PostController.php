<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index() 
    {

        return view('posts', [
            "title" => "posts",
            "posts" => Post::all()
        ]);
        
    }

    public function show($slug)
    {
        return view('post', [
            "title" => "single Post",
            "post" => Post::find($slug)
        ]);
    }

    public function tentang()
    {
        return view('about', [
            "title" => "about",
            "name" => "Daniel Marbun | Ngoding",
            "email" => "Danielmarbun.usd.ac.id",
            "image" => "IMG_4354.JPG"
        ]);
    }
}
