@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h4><b>Tambah Data User</b></h4>
                        <p>Menambahkan Data User</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <form action="" method="{{ route('register') }}">
                    @csrf

                    <div class="form-row mb-3">
                        <div class="col">
                            <label for="Name">Nama</label>
                            <input type="text" class="form-control" id="Name" placeholder="Nama">
                        </div>
                    </div>
                    <div class="form-row mb-3">
                        <div class="col">
                            <label for="inputEmail">Email</label>
                            <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-row mb-3">
                        <div class="col">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="password">
                        </div>
                    </div>
                    <div class="form-row mb-3">
                        <div class="col">
                            <label for="password">Confirm Password</label>
                            <input type="password" class="form-control" id="password" placeholder="confirm password">
                        </div>
                    </div>
                    {{-- <div class="form-row mb-3">
                        <div class="col">
                            <label for="role">Roles</label>
                                <select class="custom-select">
                                    <option value="1">Admin</option>
                                    <option value="2">Opertor</option>
                                    <option value="2">Dosen</option>
                                </select>
                        </div>
                    </div> --}}
                    <button type="submit" class="btn btn-primary float-right">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
