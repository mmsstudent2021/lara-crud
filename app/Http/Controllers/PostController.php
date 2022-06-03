<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $posts = Post::all();
//        return view('index',compact('posts'));
        return view('index',[
            "posts" => Post::paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $post = new Post();
//        $post->title = $request->title;
//        $post->description = $request->description;
//        $post->save();

//        Validator::make($request->all(),[
//
//        ])->validate();

        $request->validate([
           "title" => "bail|required|unique:posts,title|min:10",
           "description" => "required|min:10"
        ]);


        Post::create([
           "title" => $request->title,
           "description" => $request->description
        ]);

//        Post::create($request->all());

        return redirect()->route('post.index')->with("status","New Post is added");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('show',[
           "post" => Post::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('edit',[
            "post" => Post::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {




        $post = Post::findOrFail($id);
        $post->title = $request->title;
        $post->description = $request->description;
        $post->update();
        return redirect()->route('post.index')->with("status","Post is updated");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect()->route('post.index')->with("status","Post is deleted");
    }
}
