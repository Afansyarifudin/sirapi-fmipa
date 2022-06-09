<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user_list = User::all();

        if($request->ajax()){
            return datatables() -> of($user_list)
            ->addColumn('action', function($data){


                $button = '<a href="#" data-toggle="tooltip"  data-id="'.$data->id.'" data-original-title="Edit" class="badge badge-primary mx-1"><i class="fas fa-user-edit"></i></a>';
                $button .= '<a href="#" data-toggle="tooltip"  data-id="'.$data->id.'" data-original-title="Edit" class="badge badge-danger mx-1"><i class="far fa-trash-alt"></i></a>';
                $button .= '<a href="#" data-toggle="tooltip"  data-id="'.$data->id.'" data-original-title="Role" class="badge badge-info mx-1"><i class="anticon anticon-usergroup-add"></i></a>';
                return $button;
            })
            ->rawColumns(['action'])
            ->addIndexColumn()

            -> make(true);
        }
        return view('admin.user.index');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
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
        return view('admin.user.edit');
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
