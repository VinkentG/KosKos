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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/example', [App\Http\Controllers\HomeController::class, 'index1'])->name('example');
// Route::get('/home', 'HomeController@index');
// Route::get('/view', 'HomeController@index2');
// Route::post('/add', 'HomeController@addbarang');

// Auth::routes();



<<<<<<< HEAD
=======

>>>>>>> 5d0b6bcb2275a62fc4f0ce883c49601f485e1e5c
