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


Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/example/{id}/{idb}/{ids}', [App\Http\Controllers\HomeController::class, 'Examp'])->name('example');
Route::get('/visual/{id}', [App\Http\Controllers\HomeController::class, 'Vis'])->name('visual');


Route::post('visual/addBangunan', [App\Http\Controllers\HomeController::class, 'addBangunan']);
Route::post('addData', [App\Http\Controllers\HomeController::class, 'addData'])->name('addData');
Route::post('addData2/{id}', [App\Http\Controllers\HomeController::class, 'addData2'])->name('addData2');
Route::post('addTran/{id}', [App\Http\Controllers\HomeController::class, 'addTran'])->name('addTran');
Route::post('addFasilitas/{id}', [App\Http\Controllers\HomeController::class, 'addFasilitas'])->name('addFasilitas');
Route::post('addKamar/{id}', [App\Http\Controllers\HomeController::class, 'addkamar'])->name('addkamar');


Route::delete('/visual/deleteBangunan/{id}', [App\Http\Controllers\HomeController::class, 'deleteBangunan']);
Route::delete('/deletePegawai/{id}', [App\Http\Controllers\HomeController::class, 'deletePegawai']);
Route::delete('/deleteTransaksi/{id}', [App\Http\Controllers\HomeController::class, 'deleteTransaksi']);
Route::delete('/deleteFasilitas/{id}', [App\Http\Controllers\HomeController::class, 'deleteFasilitas']);
Route::delete('/deleteKamar/{id}', [App\Http\Controllers\HomeController::class, 'deleteKamar']);


//edit
Route::get('/editBangunan/{id}', [App\Http\Controllers\UpdateController::class, 'editBangunan']);
Route::post('/editBangunan/{id}', [App\Http\Controllers\UpdateController::class, 'updateBagunan']);
Route::get('/editPegawai/{id}/{idp}/{ids}', [App\Http\Controllers\UpdateController::class, 'editPegawai']);
Route::post('/editPegawai/{id}/', [App\Http\Controllers\UpdateController::class, 'updatePegawai']);
Route::get('/editTransaksi/{id}/{idp}/{ids}', [App\Http\Controllers\UpdateController::class, 'editTransaksi']);
Route::post('/editTransaksi/{id}/', [App\Http\Controllers\UpdateController::class, 'updateTransaksi']);
Route::get('/editFasilitas/{id}/{idp}/{ids}', [App\Http\Controllers\UpdateController::class, 'editFasilitas']);
Route::post('/editFasilitas/{id}/', [App\Http\Controllers\UpdateController::class, 'updateFasilitas']);
Route::get('/editKamar/{id}/{idp}/{ids}', [App\Http\Controllers\UpdateController::class, 'editKamar']);
Route::post('/editKamar/{id}/', [App\Http\Controllers\UpdateController::class, 'updateKamar']);


// Route::get('/view', [App\Http\Controllers\OrderController::class, 'home']);
// Route::post('/orders',[App\Http\Controllers\OrderController::class, 'store']);
// Route::post('/addData',[App\Http\Controllers\OrderController::class, 'addData']);

// Route::get('/example', [App\Http\Controllers\HomeController::class, 'Visa'])->name('example');
// Route::get('/view', [App\Http\Controllers\HomeController::class, 'a'])->name('view');
// Route::get('/home', 'HomeController@index');
// Route::get('/view', 'HomeController@index2');
// Route::post('/add', 'HomeController@addbarang');
// Route::get('/visual', [App\Http\Controllers\HomeController::class, 'Via'])->name('visual');

Auth::routes();



