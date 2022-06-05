<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $role_list = Role::all();

        if($request->ajax()){
            return datatables() -> of($role_list)
            ->addColumn('action', function($data){


                return "<div style='text-align: center'>
                    <a href='". route('role.edit', $data->id) ."' data-toggle='tooltip'  data-id='".$data->id."' data-original-title='Edit' class='badge badge-primary mx-1'><i class='fas fa-user-edit'></i></a>
                    <a href=' ' class='badge badge-danger mx-1 deleteButton' data-form='#roleDeleteButton$data->id'>
                    <i class='far fa-trash-alt'></i>
                    </a>
                    <form id='roleDeleteButton$data->id' action='" . route('role.destroy', $data->id) . "' method='POST'>" . csrf_field() . " " . method_field('DELETE') . "
                    </form>
                </div>";
            })
            ->rawColumns(['action'])
            ->addIndexColumn()

            -> make(true);
        }
        return view('admin.role.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.role.create');
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

        $validateData = $request->validate([
            'name' => 'required|unique:roles',
            'guard_name' => 'required',
        ]);

        // $validateData['user_id'] = auth()->user()->id;

        $role = Role::create($validateData);

        return ($role) ?
            redirect()->route('role.index')->with('success', 'Role berhasil ditambahkan') :
            back()->with('error', 'role gagal ditambahkan');

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
        $data = Role::where('id', $id)->first();

        return view('admin.role.edit', compact('data'));
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
            'name' => 'required',
            'guard_name' => 'required'
        ]);

        $update = Role::where('id', $id)->update($validatedData);

        return ($update) ?
        redirect() -> route('role.index')->with('success', 'kategori berhasil disunting') :
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
            $delete = Role::where('id', $id)->delete();
            DB::commit();
            return ($delete) ?
            redirect()->route('role.index')->with('success', 'role berhasil dihapus') :
            back()->with('error', 'role gagal dihapus');

        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', 'terjadi kesalahan, kategori gagal dihapus');

        }
    }
}
