<?php

use App\Http\Controllers\Authcontroller;
use App\Http\Controllers\Livrescontroller;
use App\Http\Controllers\Livrescontroller1;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

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

/*Route::get('/layouts/app', function () {
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
Route::get('/show', function () 
    return view('show');
});*/

Route::middleware(['auth'])->group(function () {

Route::post('livres', [Livrescontroller::class, 'add']);

Route::get('delLivre/{id}', [Livrescontroller::class, 'supprdialog'])->whereNumber('id');

Route::delete('livres/{id}', [Livrescontroller::class, 'destroy'])->whereNumber('id')->name('supprimer');

Route::get('editLivres/{id}', [Livrescontroller::class, 'edit'])
->whereNumber('id');

Route::post('livres/{id}', [Livrescontroller::class, 'update'])
->name('maj');

});

Route::get('livres', [Livrescontroller::class, 'getall'])->name('livres');
Route::get('livres/{id}', [Livrescontroller::class, 'show'])->whereNumber('id');
Route::get('auteurs/{id}', [Livrescontroller::class, 'showlivresAut'])->whereNumber('id');

Route::get('register', [Authcontroller::class, 'register'])->name('register');

Route::post('register', [Authcontroller::class, 'register_action'])->name('register.action');

Route::get('login', [Authcontroller::class, 'login'])->name('login');

Route::post('login', [Authcontroller::class, 'login_action'])->name('login.action');

Route::get('signout', [AuthController::class, 'logout'])->name('signout');
/*Route::resource('livres',Livrescontroller::class)->missing(function (Request $request) {
    return Redirect::route('livres');});*/

