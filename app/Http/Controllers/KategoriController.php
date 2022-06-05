<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $category_list = Category::all();

        if($request->ajax()){
            return datatables() -> of($category_list)
            ->addColumn('action', function($data){


                // $button = '<a href="'. route('category.edit', $data->id) .'" data-toggle="tooltip"  data-id="'.$data->id.'" data-original-title="Edit" class="badge badge-primary mx-1"><i class="fas fa-user-edit"></i></a>';
                // $button .= '<a href="#" data-toggle="tooltip" data-form="#categoryDeleteButton$data->id" data-id="'.$data->id.'" data-original-title="Delete" class="badge badge-danger mx-1"><i class="far fa-trash-alt"></i></a>';
                // return $button;

                return "<div style='text-align: center'>
                return "<div>
                    <a href='". route('category.edit', $data->id) ."' data-toggle='tooltip'  data-id='".$data->id."' data-original-title='Edit' class='badge badge-primary mx-1'><i class='fas fa-user-edit'></i></a>
                    <a href=' ' class='badge badge-danger mx-1 deleteButton' data-form='#categoryDeleteButton$data->id'>
                    <i class='far fa-trash-alt'></i>
                    </a>
                    <form id='categoryDeleteButton$data->id' action='" . route('category.destroy', $data->id) . "' method='POST'>" . csrf_field() . " " . method_field('DELETE') . "
                    </form>
                </div>";
            })
            ->rawColumns(['action'])
            ->addIndexColumn()

            -> make(true);

        }

        return view('operator.category.index', compact('category_list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('operator.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd('success');

        $validatedData = $request->validate([
            'name' => 'required|unique:categories|max:50',
            'slug' => 'required|unique:categories'
        ]);

        $validatedData['user_id'] = auth()->user()->id;

        $category = Category::create($validatedData);

        return ($category) ?
            redirect()->route('category.index') ->with('success', 'Kategori berhasil ditambahkan') :
            back()->with('error', 'Kategori gagal ditambahkan');


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
        $data = Category::where('id', $id)->first();

        return view('operator.category.edit', compact('data'));
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
        $validatedData = $request->validate([
            'name' => 'required|unique:categories|max:50',
            'slug' => 'required|unique:categories'
        ]);

        $update = Category::where('id', $id)->update($validatedData);

        return ($update) ?
        redirect() -> route('category.index')->with('success', 'kategori berhasil disunting') :
        back() -> with('error', 'kategori gagal disunting');
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
            $delete = Category::where('id', $id)->delete();
            DB::commit();
            return ($delete) ?
            redirect()->route('category.index')->with('success', 'kategori berhasil dihapus') :
            back()->with('error', 'kategori gagal dihapus');

        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', 'terjadi kesalahan, kategori gagal dihapus');

        }
    }
}
