<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Route::get('/penelitian', function () {
    return view('penelitian.index');
});
Route::get('/create', function () {
    return view('penelitian.create');
});
Route::get('/show', function () {
    return view('penelitian.show');
});

Route::get('/user', function() {
    return view('user.index');
});

Route::get('/skpangkat', function () {
    return view('sk_pangkat.index');
});

Route::get('/createskpangkat', function () {
    return view('sk_pangkat.create');
});

Route::get('/showskpangkat', function () {
    return view('sk_pangkat.show');
});

Route::get('/setting', function () {
    return view('setting.index');
});


Auth::routes();


// Route for guest
Route::middleware(['guest'])->group(function () {

    //

});

// Route for authenticat user need to login
Route::middleware(['auth'])->group(function () {

    //
    Route::get('/home', [HomeController::class, 'index'])->name('home');


});



