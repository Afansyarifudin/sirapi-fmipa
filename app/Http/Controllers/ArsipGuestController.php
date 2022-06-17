<?php

namespace App\Http\Controllers;

use App\Models\Arsip;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArsipGuestController extends Controller
{
    public function index(Request $request)
    {

        $list_category = Category::all();

        $arsip_guest = DB::table('arsips')
            ->where('sifat', 'public')
            ->where('deleted_at', NULL)
            ->get();

        if ($request->ajax()){
            return datatables()-> of ($arsip_guest)
            ->addColumn('action', function($data){
                $button = '<a href="'. url('show', $data->id) .'" data-toggle="tooltip"  data-id="'.$data->id.'" data-original-title="View" class="badge badge-success mx-1"><i class="anticon anticon-select"></i></a>';
                // $button .= '<a href="/{{$data->file}}" data-toggle="tooltip"  data-id="'.$data->id.'" data-original-title="Download" class="badge badge-primary mx-1"><i class= "anticon anticon-download"></i></a>';
                $button .= '<a href="'. url("/{$data->file}" ) .'" data-toggle="tooltip"  data-id="'.$data->id.'" data-original-title="Download" class="badge badge-primary mx-1"><i class= "anticon anticon-download"></i></a>';
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

    public function show($id, Request $request)
    {
        $data = Arsip::find($id);

        // if ($request->ajax()){
        //     return datatables()-> of ($data)
        //     // ->addColumn('action', function($data){
        //     //     $button = '<a href="'. url('guest/show', $data->id) .'" data-toggle="tooltip"  data-id="'.$data->id.'" data-original-title="View" class="badge badge-success mx-1"><i class="anticon anticon-select"></i></a>';
        //     //     // $button .= '<a href="/{{$data->file}}" data-toggle="tooltip"  data-id="'.$data->id.'" data-original-title="Download" class="badge badge-primary mx-1"><i class= "anticon anticon-download"></i></a>';
        //     //     $button .= '<a href="'. url("/{$data->file}" ) .'" data-toggle="tooltip"  data-id="'.$data->id.'" data-original-title="Download" class="badge badge-primary mx-1"><i class= "anticon anticon-download"></i></a>';
        //     //     return $button;
        //     // })
        //     ->rawColumns(['action'])
        //     ->addIndexColumn()
        //     -> make(true);
        // }

        return view('guest.view', compact('data'));
    }

    public function list($id, Request $request) {
        $arsip_category = DB::table('arsips')
                ->where('category_id', $id)
                ->where('sifat', 'public')
                ->get();

        $data = Arsip::all();

        if ($request->ajax()){
            return datatables()-> of ($arsip_category)
            ->addColumn('action', function($data){
                $button = '<a href="'. url('show', $data->id) .'" data-toggle="tooltip"  data-id="'.$data->id.'" data-original-title="View" class="badge badge-success mx-1"><i class="anticon anticon-select"></i></a>';
                // $button .= '<a href="/{{$data->file}}" data-toggle="tooltip"  data-id="'.$data->id.'" data-original-title="Download" class="badge badge-primary mx-1"><i class= "anticon anticon-download"></i></a>';
                $button .= '<a href="'. url("/{$data->file}" ) .'" data-toggle="tooltip"  data-id="'.$data->id.'" data-original-title="Download" class="badge badge-primary mx-1"><i class= "anticon anticon-download"></i></a>';
                return $button;
            })
            ->rawColumns(['action'])
            ->addIndexColumn()
            -> make(true);
        }
        return view('guest.list', compact([
            'arsip_category',
            'data'
        ]));


    }


}
