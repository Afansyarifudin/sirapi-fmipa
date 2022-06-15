<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArsipGuestController extends Controller
{
    public function index(Request $request)
    {

        $list_category = Category::all();

        $arsip_guest = DB::table('arsips')->where('sifat', 'public')->get();

        if ($request->ajax()){
            return datatables()-> of ($arsip_guest)
            ->addColumn('action', function($data){
                $button = '<a href="#" data-toggle="tooltip"  data-id="'.$data->id.'" data-original-title="View" class="badge badge-success mx-1"><i class="anticon anticon-select"></i></a>';
                $button .= '<a href="'. route('guest.guest_arsip', $data->file) .'" data-toggle="tooltip"  data-id="'.$data->id.'" data-original-title="Download" class="badge badge-primary mx-1"><i class= "anticon anticon-download"></i></a>';
                return $button;
            })
            ->rawColumns(['action'])
            ->addIndexColumn()
            -> make(true);
        }
        return view('guest.arsip', compact([
            'arsip_guest',
            'list_category'
        ]));
    }

    public function list_arsip($id, Request $request){

        $arsip_guest = DB::table('arsips')->where('sifat', 'public')->get();

        if ($request->ajax()){
            return datatables()-> of ($arsip_guest)
            ->addColumn('action', function($data){
                $button = '<a href="#" data-toggle="tooltip"  data-id="'.$data->id.'" data-original-title="View" class="badge badge-success mx-1"><i class="anticon anticon-select"></i></a>';
                $button .= '<a href="#" data-toggle="tooltip"  data-id="'.$data->id.'" data-original-title="Download" class="badge badge-primary mx-1"><i class= "anticon anticon-download"></i></a>';
                return $button;
            })
            ->rawColumns(['action'])
            ->addIndexColumn()
            -> make(true);
        }

        return view('guest.arsip', compact(''));
    }
}
