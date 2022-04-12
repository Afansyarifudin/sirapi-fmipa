@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h4><b>Edit Data User</b></h4>
                        <p>Mengedit Data User</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputState">User-As</label>
                            <select id="inputState" class="form-control">
                                <option selected>Admin</option>
                                <option>Dosen</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="SifatSurat">Username</label>
                            <input type="text" class="form-control" placeholder="Sifat Surat">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail">Email</label>
                            <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword">Password</label>
                            <input type="text" class="form-control" id="inputPassword" placeholder="Password">
                        </div>
                    </div>
                    <a href="#" class="btn btn-primary float-right">Simpan</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
