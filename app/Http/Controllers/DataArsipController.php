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
        $list_arsips = Arsip::all();


        if ($request->ajax()){
            return datatables()-> of ($list_arsips)
            ->addColumn('action', function($data){



                return "<div style='text-align: center'>

                <a href='' data-toggle='tooltip'  data-id='".$data->id."' data-original-title='View' class='badge badge-success mx-1'><i class='anticon anticon-select'></i></a>
                <a href='". route('data.edit', $data->id) ."' data-toggle='tooltip'  data-id='".$data->id."' data-original-title='Edit' class='badge badge-primary mx-1'><i class='fas fa-user-edit'></i></a>
                <a href=' ' class='badge badge-danger mx-1 deleteButton' data-form='#dataDeleteButton$data->id'> <i class='far fa-trash-alt'></i> </a>

                <form id='dataDeleteButton$data->id' action='" . route('data.destroy', $data->id) . "' method='POST'>" . csrf_field() . " " . method_field('DELETE') . "
                </form>
                </div>";

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
        $data = Arsip::where('id', $id)->first();

        return view('dosen.data.edit', compact('data'));
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

        if (!$request->hasFile('file')){

            back()-> with('error', 'file wajib diisi');
        }

        $validatedData = $request->validate([
            'category_id' => 'required',
            'name'=> 'required|max:255',
            'deskripsi'=>'required',
            'sifat'=> 'required',
            'file'=> 'required',
        ]);

        $update = Arsip::where('id', $id)->update($validatedData);
        $filetime = Carbon::now()->format('Y-m-d H:i:s');
        $file_extension = $request->file('file')->getClientOriginalExtension();
        $filename = md5($filetime) . '.' . $file_extension;
        // $request ->file->move(public_path('arsips/'), $filename);
        $request->file = 'arsips/' . $filename;

        $validateData['user_id'] = auth()->user()->id;

        // $file = $request->file('file')->store($request);
        $file = $request->file('file')->store('arsips');



        $update = Arsip::where('id', $id)->update($validatedData);


        return ($update) ?
        redirect() -> route('data.index')->with('success', 'Data Arsip berhasil disunting') :
        back() -> with('error', 'Data Arsip gagal disunting');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        try {
            DB::beginTransaction();
            $delete = Arsip::where('id', $id)->delete();
            DB::commit();
            return ($delete) ?
            redirect()->route('data.index')->with('success', 'Data Arsip berhasil dihapus') :
            back()->with('error', 'Data Arsip gagal dihapus');

        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', 'terjadi kesalahan, Data Arsip gagal dihapus');

        }
    }
}


