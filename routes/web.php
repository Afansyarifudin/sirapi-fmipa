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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('home.index');
});

Route::get('/user', function () {
    return view('user.index');
});

Route::get('/createuser', function () {
    return view('user.create');
});
Route::get('/edituser', function () {
    return view('user.edit');
});


