<?php

namespace App\Http\Controllers;

use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $subcategory = Subcategory::all();

        if ($request->ajax()) {
            return datatables()->of($subcategory)
                ->addcolumn('action', function ($data) {
                    return "<div style='text-align: center'>

                    <a href='" . route('category.edit', $data->id) . "' data-toggle='tooltip'  data-id='" . $data->id . "' data-original-title='Edit' class='badge badge-primary mx-1'><i class='fas fa-user-edit'></i></a>
                    <a href=' ' class='badge badge-danger mx-1 deleteButton' data-form='#categoryDeleteButton$data->id'>
                    <i class='far fa-trash-alt'></i>
                    </a>
                    <form id='categoryDeleteButton$data->id' action='" . route('category.destroy', $data->id) . "' method='POST'>" . csrf_field() . " " . method_field('DELETE') . "
                    </form>
                </div>";
                })
                ->rawColumns(['action'])
                ->addIndexColumn()

                ->make(true);
        }
        return view('operator.subcategory.index', compact('subcategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('operator.subcategory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedata = $request->validate([
            'name' => 'required|unique:subcategories|max:50',
            'slug' => 'required|unique:subcategories'
        ]);

        $subcategory = Subcategory::create($validatedata);

        return ($subcategory) ?
            redirect()->route('subcategory.index')->with('success', 'Subcategori berhasil ditambahkan') :
            back()->with('error', 'Subkategori gagal ditambahkan');
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
        $data = Subcategory::where('id', $id)->first();

        return view('operator.subcategory.edit', compact('data'));
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
        $validatedata = $request->validate([
            'name' => 'required',
            'slug' => 'required'
        ]);

        $update = Subcategory::where('id', $id)->update($validatedata);

        return ($update) ?
            redirect()->route('subcategory.index')->with('success', 'subkategori berhasil disunting') :
            back()->with('error', 'c=subkategori gagal disunting');
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
            $delete = Subcategory::where('id', $id)->delete();
            DB::commit();
            return ($delete) ?
                redirect()->route('subcategory.index')->with('success', 'kategori berhasil dihapus') :
                back()->with('error', 'subkategori gagal dihapus');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', 'terjadi kesalahan, subkategori gagal dihapus');
        }
    }
}
