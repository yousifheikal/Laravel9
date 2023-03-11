<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{

    public function showUsers()
    {
        return 'Users';
    }

    public function createUsers()
    {
        return view('createUser');
    }

    public function editUsers()
    {
        return view('editUser');
    }
}
