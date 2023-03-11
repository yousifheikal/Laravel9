<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $posts = DB::table('profile')->get();
        return view('testing.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('testing.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function insert(Request $request)
    {
        //
        DB::table('profile')->insert([
           'title'=>$request->title,
            'body'=>$request->body
        ]);
        return response("<h1>Mission Success</h1>");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $posts = DB::table('profile')->where('id', $id)->first();
        return view("testing/edit", compact('posts'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
