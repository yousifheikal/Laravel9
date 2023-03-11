<?php

use App\Http\Controllers\CrudController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProfileController;
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

Route::get('/profile/{id}', function (int $id){
    if ($id == 33) {
        return view('/profile', ['name'=>'yousif']);
    }
    else
    {
        return "Error please check again";
    }
});


Route::controller(ProfileController::class)->group(function ()
{
   Route::get('profiles', 'welcome');
    Route::get('profiles', 'bye');

});

Route::resource('crud', CrudController::class);

Route::controller(PostController::class)->group(function (){
    Route::get('posts', 'index')->name('post.index');
    Route::get('posts/create', 'create');
    Route::post('posts/insert', 'insert')->name('post.insert');
    Route::get('posts/edit/{id}', 'edit')->name('post.edit');
    Route::post('posts/update/{id}', 'update')->name('post.update');
    Route::get('posts/delete/{id}', 'delete')->name('post.delete');
    Route::get('posts/delete/all', 'deleteAll')->name('posts.delete');
    Route::get('posts/delete/truncate', 'deleteTruncate')->name('posts.delete.truncate');

});


//Route::get('posts', function (){
//    return view('posts');
//});
