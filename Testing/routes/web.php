<?php

use App\Http\Controllers\TestingController;
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

Route::controller(TestingController::class)->group(function (){
   Route::get('test/create', 'create');
   Route::post('test/insert', 'insert')->name('test.insert');
   Route::get('test/show', 'index')->name('test.index');
   Route::get('test/edit/{id}', 'edit')->name('test.edit');
});
