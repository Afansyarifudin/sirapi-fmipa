<?php

use App\Http\Controllers\ArsipGuestController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ManajemenArsipController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\DataArsipController;
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


Auth::routes();


// Route for guest
Route::middleware(['guest'])->group(function () {

    // Route for welcome page
    Route::get('/', function () {
        return view('welcome');
    });

    // Route for arsip guest
    Route::name('guest.')->group(function () {
        Route::get('guest_arsip', [ArsipGuestController::class, 'index'])->name('guest_arsip');
    });

});

// Route for authenticat user need to login
Route::middleware(['auth'])->group(function () {

    // Route for dashboard/ home
    Route::get('/home', [HomeController::class, 'index'])->name('home');


    // Route for pengaturan
    Route::get('/setting', [ProfileController::class, 'index'])->name('setting');


    // Route for user
    Route::get('/user', [UserController::class, 'index'])->name('user');
    Route::resource('user', UserController::class);

    Route::resource('data', DataArsipController::class);


    // Route for role
    Route::resource('role', RoleController::class);



    // Route for permission
    Route::resource('permission', PermissionController::class);


    // Route for Manajemen Arsip
    Route::resource('arsip', ManajemenArsipController::class);


    // Route for Kategori
    Route::resource('category', KategoriController::class);


});



