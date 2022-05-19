<?php

use App\Http\Controllers\Livrescontroller;
use App\Http\Controllers\Livrescontroller1;
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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/layouts/app', function () {
    return view('layouts/app');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/create', function () {
    return view('create');
});
Route::get('/edit', function () {
    return view('edit');
});
Route::get('/show', function () {
    return view('show');
});

Route::get('livres', [Livrescontroller::class,'getall'] )->name('livres');

Route::post('livres', [Livrescontroller::class,'add'] );

Route::get('delLivre/{id}', [Livrescontroller::class,'supprdialog']);

Route::get('livres/{id}', [Livrescontroller::class,'show'])->whereNumber('id');

Route::delete('livres/{id}', [Livrescontroller::class,'destroy']);



