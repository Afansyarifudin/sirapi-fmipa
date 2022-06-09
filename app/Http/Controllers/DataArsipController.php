<?php

namespace App\Http\Controllers;

use App\Models\Arsip;
use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataArsipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $list_arsips = DB::table('arsips')->get();


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

        return view('dosen.data.index', compact('list_arsips'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dosen.data.create', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // ddd($request);
        // return $request->file('file')->store('arsips');

        if (!$request->hasFile('file')){
            return back()-> with('error', 'file wajib diisi');
        }

        $validateData = $request->validate([
            'category_id' => 'required',
            'name'=> 'required|max:255',
            'deskripsi'=>'required',
            'sifat'=> 'required',
            'file'=> 'required',
        ]);



        $filetime = Carbon::now()->format('Y-m-d H:i:s');
        $file_extension = $request->file('file')->getClientOriginalExtension();
        $filename = md5($filetime) . '.' . $file_extension;
        // $request ->file->move(public_path('arsips/'), $filename);
        $request->file = 'arsips/' . $filename;

        $validateData['user_id'] = auth()->user()->id;

        // $file = $request->file('file')->store($request);
        $file = $request->file('file')->store('arsips');

        $store = Arsip::create($validateData);


        return ($file) ?
        redirect()->route('data.index')->with('success', 'arsip berhasil ditambahkan') :
        back()->with('error', 'arsip gagal ditambahkan');
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
