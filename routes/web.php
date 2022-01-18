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
// Route::get('/example', [App\Http\Controllers\HomeController::class, 'LabaBersih'])->name('example');
// Route::get('/example/{id}/{idB}', [App\Http\Controllers\HomeController::class, 'LabaBersih'])->name('example');
Route::get('/visual/{id}', [App\Http\Controllers\HomeController::class, 'Vis'])->name('visual');
Route::get('/example', [App\Http\Controllers\HomeController::class, 'Visa'])->name('example');
// Route::get('/visual', [App\Http\Controllers\HomeController::class, 'Via'])->name('visual');


// Route::get('/home', 'HomeController@index');
// Route::get('/view', 'HomeController@index2');
// Route::post('/add', 'HomeController@addbarang');

Auth::routes();



