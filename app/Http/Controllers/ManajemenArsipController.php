<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Arsip;
use Illuminate\Support\Facades\DB;

class ManajemenArsipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $arsip_list = Arsip::all();

        if($request->ajax()){
            return datatables() -> of($arsip_list)
            ->addColumn('action', function($data){


                return "<div style='text-align: center'>
                    <a href='' data-toggle='tooltip'  data-id='".$data->id."' data-original-title='View' class='badge badge-success mx-1'><i class='anticon anticon-select'></i></a>
                    <a href=' ' class='badge badge-danger mx-1 deleteButton' data-form='#dataDeleteButton$data->id'> <i class='far fa-trash-alt'></i> </a>

                    <form id='dataDeleteButton$data->id' action='" . route('arsip.destroy', $data->id) . "' method='POST'>" . csrf_field() . " " . method_field('DELETE') . "
                    </form>
                </div>";
            })
            ->rawColumns(['action'])
            ->addIndexColumn()

            -> make(true);
        }
        return view('operator.arsip.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        {
            try {
                DB::beginTransaction();
                $delete = Arsip::where('id', $id)->delete();
                DB::commit();
                return ($delete) ?
                redirect()->route('arsip.index')->with('success', 'Data Arsip berhasil dihapus') :
                back()->with('error', 'Data Arsip gagal dihapus');

            } catch (\Exception $e) {
                DB::rollBack();
                return back()->with('error', 'terjadi kesalahan, Data Arsip gagal dihapus');

            }
        }
    }
}
