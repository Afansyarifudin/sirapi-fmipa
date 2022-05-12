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

Auth::routes();


// Route for guest --> taruh semua route yang bisa di akses tanpa login dulu
Route::middleware(['guest'])->group(function () {

    // route for arsip-guest


});

// Route for authenticate user need to login --> taruh semua route yang user perlu login dulu di sini
Route::middleware(['auth'])->group(function () {

    // route for home/ dashboard
    Route::get('/home', [HomeController::class, 'index'])->name('home');


    // route for arsip | manajemen arsip @dosen & @operator



    // route for category @operator



    // route for manajemen user @admin + prefix 



    // route for permission @admin



    // route for role @admin



    // route for setting @dosen, @operator, dan @admin



});



