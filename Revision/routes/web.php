<?php

use App\Http\Controllers\FormController;
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

Route::get('home', function () {
    return view('layouts.home');
});

Route::get('navbar', function () {
    return view('layouts.navbar');
});

Route::resource('forms', FormController::class);

Route::get('forms/showDeleted', [FormController::class, 'show'])->name('forms.deleted');
Route::get('forms/restore/{id}', [FormController::class, 'restore'])->name('forms.restore');
Route::get('forms/forcedDelete/{id}', [FormController::class, 'forcedDelete'])->name('forms.forcedDelete');
