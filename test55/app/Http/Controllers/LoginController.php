<?php

namespace App\Http\Controllers;

use App\Models\login;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $login = login::all();
        return $login;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('login.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 1ST
        $login = new login();
        $login->name = $request->name;
        $login->password = $request->password;
        $login->save();

        //2ND
//        login::create([
//            'name' => $request->name,
//            'password' => $request->password,
//        ]);
        return redirect()->route('login.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(login $login)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(login $login)
    {
        //

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, login $login)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(login $login)
    {
        //
    }
}
