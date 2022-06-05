<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $count_user = DB::table('users')->where('deleted_at', NULL)->count();
        $count_arsip = DB::table('arsips')->where('deleted_at', NULL)->count();
        $count_category = DB::table('categories')->where('deleted_at', NULL)->count();
        $count_role = DB::table('roles')->count();

        return view('home.index', compact([
            'count_user',
            'count_arsip',
            'count_category',
            'count_role',
        ]));
    }
}
