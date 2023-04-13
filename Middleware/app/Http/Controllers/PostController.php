<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //Index

    public function index()
    {
        if (auth()->user()->status == 1) {
            return "Hello mr: " . auth()->user()->name;
        }
        return view('auth.login');
    }
}
