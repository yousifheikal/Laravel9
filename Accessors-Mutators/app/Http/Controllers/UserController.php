<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function index($id)
    {
        $user = User::findorfail($id);
        return $user->password;
    }

    public function store()
    {
        User::create([
            'name' => 'mohamed',
            'email' => 'mohamedgamal@gmail.com',
            'password' => Hash::make('01004121711'),
        ]);

        return response('Data existing');
    }
}
