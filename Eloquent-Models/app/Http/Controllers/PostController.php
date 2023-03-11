<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $posts = Post::yousif()->get();
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //First method to insert data using a Eloquent-Models
//        $post = new Post();
//        $post->title = $request->title;
//        $post->body = $request->body;
//        $post->save();
        Post::create([
            'title'=>$request->title,
            'body'=>$request->body

            //Insert all data in once
            // you should field in database = request in form
            //$request->all();
        ]);
        return "Success";
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
        $posts = Post::onlyTrashed()->get();
        return view('posts.softdelete', compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $post = Post::findorfail($id);
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //First Method
//        $post = Post::where('id', '=', $id)->update([
//            'title'=>$request->title,
//            'body'=>$request->body
//        ]);
        //Second Method
        $post = Post::findorfail($id);
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();

        return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //First Method
//        Post::findFail($id)->delete();

        Post::destroy($id);
        return redirect()->route('post.index');
//        Post::destroy($id);
    }

    public function restore($id){
        Post::withTrashed()->where('id', '=', $id)->restore();
        return redirect()->back();
    }

    public function delete($id)
    {
        Post::withTrashed()->where('id', '=', $id)->forceDelete();
        return redirect()->back();
    }
}
