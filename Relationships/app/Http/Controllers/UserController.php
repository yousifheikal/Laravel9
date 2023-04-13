<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use App\Models\role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
//        $user = User::find(2);
//        return $user->phone;

        $roles = role::find(2);
        return $roles->users;
    }
}
