<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserProfileController;
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
//...................................................................
Route::get('/', function () {
    return view('welcome');
});

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/users/{id}', function (int $id){
//    return 'id = '.$id;
//});

//..........................................................................................................
//Old versions you should use when call one method from controller
//Route::get('posts', [PostController::class, 'showUsers']);
//Route::get('posts/create', [PostController::class, 'createUsers']);
//Route::get('posts/edit/{id}', [PostController::class, 'editUsers']);

//...........................................................................................................
//New versions may be user a method of controller you should use when call many method from controller
Route::controller(PostController::class)->group(function (){
    Route::get('posts', 'showUsers');
    Route::get('posts/create', 'createUsers');
    Route::get('posts/edit/{id}', 'editUsers');

});

Route::get('/tempo/{id}', function (int $id){
    return $id;
});

//.............................................................................

//Call a resource-controller and all method in one line
//Resource Controller

Route::resource('users', UserController::class);

//..............................................................................

// Invoke Controller

//First Method if method not name __invoke
Route::get('user_profile', [UserProfileController::class, '__invokeeee']);

//Second Method
Route::get('user_profile', UserProfileController::class);

