<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('index',compact('posts'));
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){

        $post = new Post();
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();

        return redirect()->route('post.index');
    }
}
