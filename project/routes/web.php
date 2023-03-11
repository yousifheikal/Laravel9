<?php

use App\Http\Controllers\ProfileController;
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

Route::controller(ProfileController::class)->group(function (){
    Route::get('profile/create', 'create')->name('profile.create');
    Route::post('profile/store', 'store')->name('profile.store');
    Route::get('profile/index', 'index')->name('profile.index');
    Route::get('profile/edit/{id}', 'edit')->name('profile.edit');
    Route::post('profile/update/{id}', 'update')->name('profile.update');
    Route::get('profile/delete/{id}', 'destroy')->name('profile.delete');
    Route::get('profile/delete/all', 'deleteAll')->name('profile.delete.all');
    Route::get('profile/truncate/all', 'truncate')->name('profile.truncate.all');
    Route::get('profile/password/{id}', 'show')->name('profile.password');
    Route::get('profile/id', 'trying');

});
