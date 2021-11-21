<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::all();
        return view('post.index',compact('posts'));
    }


    public function create()
    {
        return view('post.create');
    }


    public function store(PostRequest $request)
    {
        // $post = new Post();
        // $post->title = $request->title;
        // $post->content = $request->content;
        // $post->save();
        // return redirect('post')->with('success','A Post was successfully');
        // $post = Post::create([
        //     'title' => $request->title,
        //     'content' => $request->content
        // ]);
        // $post->save();
        // return redirect('post')->with('success','A Post was successfully');

        $post = Post::create($request->all());
        $post->save();
        return redirect('post')->with('success','A Post was successfully');
    }


    public function show($id)
    {
        $post = Post::find($id);
        return view('post.show',compact('post'));
    }


    public function edit($id)
    {
        $post = Post::find($id);
        return view('post.edit',compact('post'));
    }


    public function update(Request $request,$id )
    {
        $post = Post::find($id)->update($request->all());
        // $post->title = $request->title;
        // $post->content = $request->content;
        // $post->save();
        return redirect('post');
    }


    public function destroy($id)
    {
        $post = Post::find($id)->delte();
        return redirect('post');
    }
}
