<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArsipGuestController extends Controller
{
    public function index()
    {
        return view('guest.arsip');
    }
}
