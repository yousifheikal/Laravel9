<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route case sensitive

Route::get("/users", function (){
    return "<h1>Hello Mr Goo</h1>" ;
});

Route::get('/login', function (){
    return view('login');
});// Post not supported (Error)

Route::post('/logout',function (){
   return 'Thx for visit';
});

Route::get('Site/{id}',function (int $id){
    if ($id == 1)
    {
        return view('/welcome');
    }
    else
    {
        return view('/login');
    }
});

Route::get('/show',function (){
    return view('/show',['name'=>'Mohamed']);
});

Route::get('/user', function (){
    return view('/user');
});
