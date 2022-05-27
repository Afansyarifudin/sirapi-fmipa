<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArsipGuestController extends Controller
{
    public function index()
    {
        $arsip = DB::table('arsips')->where('sifat', 'public')->first();
        return view('guest.arsip', compact('arsip'));
    }
}
