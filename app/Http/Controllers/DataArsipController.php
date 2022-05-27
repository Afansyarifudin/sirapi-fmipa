<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Arsip;

class DataArsipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $list_arsips = Arsip::all();

        if ($request->ajax()){
            return datatables()-> of ($list_arsips)
            ->addColumn('action', function($data){


                $button = '<a href="#" data-toggle="tooltip"  data-id="'.$data->id.'" data-original-title="View" class="badge badge-success mx-1"><i class="anticon anticon-select"></i></a>';
                $button .= '<a href="#" data-toggle="tooltip"  data-id="'.$data->id.'" data-original-title="Edit" class="badge badge-primary mx-1"><i class= "anticon anticon-edit"></i></a>';
                $button .= '<a href="#" data-toggle="tooltip"  data-id="'.$data->id.'" data-original-title="Delete" class="badge badge-danger mx-1"><i class="far fa-trash-alt"></i></a>';
                return $button;
            })
            ->rawColumns(['action'])
            ->addIndexColumn()
            -> make(true);
        }

        return view('dosen.data.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dosen.data.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
