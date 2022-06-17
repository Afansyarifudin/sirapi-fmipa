<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Arsip;
use App\Models\Category;
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Contracts\Role;
use Illuminate\Support\Facades\Storage;

class DataArsipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $list_arsips = Arsip::all()
                        ->where('user_id', auth()->user()->id)
                        ->where('deleted_at', NULL)
                        ->all();
        // if (!$this->middleware(['role:dosen'])) {
        //     $list_arsips = Arsip::all()->where('user_id', auth()->user()->id)->all();
        // } else {
        //     $list_arsips = Arsip::all();
        // }



        if ($request->ajax()){
            return datatables()-> of ($list_arsips)
            ->addColumn('action', function($data){



                return "<div style='text-align: center'>

                <a href='". route('data.show', $data->id) ."' data-toggle='tooltip'  data-id='".$data->id."' data-original-title='View' class='badge badge-success mx-1'><i class='anticon anticon-select'></i></a>
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
            'file'=> 'file|max:2048',
        ]);



        // $filetime = Carbon::now()->format('Y-m-d H:i:s');
        // $file_extension = $request->file('file')->getClientOriginalExtension();
        // $filename = md5($filetime) . '.' . $file_extension;
        // // $request ->file->move(public_path('arsips/'), $filename);
        // $request->file = 'arsips/' . $filename;

        if ($request->file('file')) {
            $validateData['file'] = $request->file('file')->store('arsips');
        }

        // $name = $request->file('file')->getClientOriginalName();

        // $file = $request->file('file')->store('public/arsips');

        $validateData['user_id'] = auth()->user()->id;

        // $file = $request->file('file')->store($request);
        // $file = $request->file('file')->store('arsips');

        $store = Arsip::create($validateData);


        return ($store) ?
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
        $data = Arsip::find($id);

        return view('dosen.data.view', compact('data'));
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
        $categories = Category::all();

        return view('dosen.data.edit', compact('data', 'categories'));
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

        // return $request;/

        // if (!$request->hasFile('file')){

        //     back()-> with('error', 'file wajib diisi');
        // }

        // return "Success";

        // return $request;

        $rules = [
            'category_id' => 'required',
            'name'=> 'required|max:255',
            'deskripsi'=>'required',
            'sifat'=> 'required',
            // 'file'=> 'file|max:2048',
        ];

        // $update = Arsip::where('id', $id)->update($validatedData);
        // $filetime = Carbon::now()->format('Y-m-d H:i:s');
        // $file_extension = $request->file('file')->getClientOriginalExtension();
        // $filename = md5($filetime) . '.' . $file_extension;
        // // $request ->file->move(public_path('arsips/'), $filename);
        // $request->file = 'arsips/' . $filename;

        // return "success";

        $validateData = $request->validate($rules);


        if ($request->file('file')) {
            $request->file('file')->store('arsips');
        }

        $validateData['user_id'] = auth()->user()->id;

        $update = Arsip::where('id', $id)->update($validateData);

        // $file = $request->file('file')->store($request);
        // $file = $request->file('file')->update('arsips');




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


