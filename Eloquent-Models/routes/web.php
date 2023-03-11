<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('post', PostController::class);
Route::get('post/restore/{id}', [PostController::class, 'restore'])->name('post.restore');
Route::delete('post/delete/{id}', [PostController::class, 'delete'])->name('post.delete');

//Route::resource('posts/create', [PostController::class, 'crate']);

//Route::controller(PostController::class)->group(function (){
//    Route::get('posts', 'index')->name('post.index');
//    Route::get('posts/create', 'create')->name('post.create');
//    Route::post('posts/store', 'store')->name('post.store');
//    Route::get('posts/edit/{id}', 'edit')->name('post.edit');
//    Route::PUT('posts/update/{id}', 'update')->name('post.update');
//});

//Route::get('post/destroy/{id}', [PostController::class, 'destroy'])->name('post.destroy');

