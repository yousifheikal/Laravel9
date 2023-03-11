<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $profiles = DB::table('profile')->get();
        return view('profiles.index', compact('profiles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('profiles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table('profile')->insert([
            'name'=>$request->name,
            'password'=>$request->password
        ]);
        return redirect()->route('profile.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $password = DB::table('profile')->where('id', '>', $id)->value('password');
        return view('profiles.password', compact('password'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $profile = DB::table('profile')->where('id', '=', $id)->first();
        return view('profiles.edit', compact('profile'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        DB::table('profile')->where('id', '=', $id)->update([
            'name'=>$request->name,
            'password'=>$request->password
        ]);
        return redirect()->route('profile.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        DB::table('profile')->where('id', '=', $id)->delete();
        return redirect()->route('profile.index');
    }

    public function deleteAll()
    {
        DB::table('profile')->delete();
        return redirect()->route('profile.index');
    }

    public function truncate()
    {
        DB::table('profile')->truncate();
        return redirect()->route('profile.index');
    }

    public function trying()
    {
        $user = DB::table('profile')->find(3);
        return view('profiles.user', compact('user'));
    }
}
