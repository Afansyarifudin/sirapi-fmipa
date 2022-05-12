@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h4><b>Tambah Permission</b></h4>
                        <p>Menambahkan Permission</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="">
                    <div class="form">
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" class="form-control" id="name" placeholder="nama">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="guard_name">Guard Name</label>
                        <select class="custom-select">
                            <option value="1">Web</option>
                            <option value="2">API</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary float-right">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
