<?php

namespace App\Http\Controllers\API;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        return Post::all();
    }


    public function store(Request $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();
        return $post;
    }


    public function show($id)
    {
        return Post::find($id);
    }


    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post->title = $request->title;
        $post->content = $request->content;
        $post->update();
        return $post;
    }


    public function destroy($id)
    {
        return Post::find($id)->delete();

    }
}
