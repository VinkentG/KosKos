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


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/example/{id}/{idb}/{ids}', [App\Http\Controllers\HomeController::class, 'Examp'])->name('example');
// Route::post('/example/{id}/{idb}/addData', [App\Http\Controllers\HomeController::class, 'addData']);

Route::get('/visual/{id}', [App\Http\Controllers\HomeController::class, 'Vis'])->name('visual');
Route::post('visual/addBangunan', [App\Http\Controllers\HomeController::class, 'addBangunan']);
// Route::post('addData', [App\Http\Controllers\HomeController::class, 'addData'])->name('addData');
Route::delete('visual/deleteBangunan/{id}', [App\Http\Controllers\HomeController::class, 'DeleteBangunan']);

Route::get('/view', [App\Http\Controllers\OrderController::class, 'home']);
Route::post('/orders',[App\Http\Controllers\OrderController::class, 'store']);
Route::post('/addData',[App\Http\Controllers\OrderController::class, 'addData']);

// Route::get('/example', [App\Http\Controllers\HomeController::class, 'Visa'])->name('example');
// Route::get('/view', [App\Http\Controllers\HomeController::class, 'a'])->name('view');
// Route::get('/home', 'HomeController@index');
// Route::get('/view', 'HomeController@index2');
// Route::post('/add', 'HomeController@addbarang');
// Route::get('/visual', [App\Http\Controllers\HomeController::class, 'Via'])->name('visual');

Auth::routes();



