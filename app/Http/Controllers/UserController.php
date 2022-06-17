<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

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

                return "<div style='text-align: center'>

                <a href='". route('user.edit', $data->id) ."' data-toggle='tooltip'  data-id='".$data->id."' data-original-title='Edit' class='badge badge-primary mx-1'><i class='fas fa-user-edit'></i></a>
                <a href=' ' class='badge badge-danger mx-1 deleteButton' data-form='#userDeleteButton$data->id'> <i class='far fa-trash-alt'></i>  </a>
                <a href='". route('category.edit', $data->id) ."' data-toggle='tooltip'  data-id='".$data->id."' data-original-title='Edit' class='badge badge-info mx-1'><i class='anticon anticon-usergroup-add'></i></a>
                <form id='userDeleteButton$data->id' action='" . route('user.destroy', $data->id) . "' method='POST'>" . csrf_field() . " " . method_field('DELETE') . "
                </form>
            </div>";

                // $button = '<a href="#" data-toggle="tooltip"  data-id="'.$data->id.'" data-original-title="Edit" class="badge badge-primary mx-1"><i class="fas fa-user-edit"></i></a>';
                // $button .= '<a href="#" data-toggle="tooltip"  data-id="'.$data->id.'" data-original-title="Edit" class="badge badge-danger mx-1"><i class="far fa-trash-alt"></i></a>';
                // $button .= '<a href="#" data-toggle="tooltip"  data-id="'.$data->id.'" data-original-title="Role" class="badge badge-info mx-1"><i class="anticon anticon-usergroup-add"></i></a>';
                // return $button;
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
        if ($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300,300)->save(public_path('assets/images/' . $filename ));

            $user = Auth::user();
            $user->avatar = $filename;
            


        }

        return view('setting.index');
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
        $data = User::where('id', $id)->first();

        return view('admin.user.edit', compact('data'));
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
            'email' => 'required',
            'password' => 'required'
        ]);

        $update = User::where('id', $id)->update($validatedData);


        return ($update) ?
        redirect() -> route('user.index')->with('success', 'User berhasil disunting') :
        back() -> with('error', 'User gagal disunting');
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
            $delete = User::where('id', $id)->delete();
            DB::commit();
            return ($delete) ?
            redirect()->route('user.index')->with('success', 'User berhasil dihapus') :
            back()->with('error', 'kategori gagal dihapus');

        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', 'terjadi kesalahan, User gagal dihapus');

        }
    }
}
