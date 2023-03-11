<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    //
    public function index()
    {
        $posts = DB::table('query')->get();
        return view('posts.index',compact('posts'));
    }
    public function create()
    {
        return view('posts.create');
    }

    public function insert(Request $request)
    {
        DB::table('query')->insert([
            'title'=>$request->title,
            'body'=>$request->body

        ]);
        return redirect()->route('post.index');
    }

    public function edit($id)
    {
        $post = DB::table('query')->where('id', '=', $id)->first();
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        DB::table('query')->where('id','=', $id)->update([
            'title'=>$request->title,
            'body'=>$request->body,
        ]);
//        return response('<h1>Mission Success</h1>');
        return redirect()->route('post.index');
    }

    public function delete($id)
    {
        DB::table('query')->where('id', '=', $id)->delete();
        return redirect()->route('post.index');
    }

    public function deleteAll()
    {
        DB::table('query')->delete();
        return view('profile');
    }

    public function deleteTruncate()
    {
        DB::table('query')->truncate();
        return redirect()->route('post.index');
    }
}
