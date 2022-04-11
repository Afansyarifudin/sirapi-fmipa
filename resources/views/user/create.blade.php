@extends('layouts.master')
@push('css')
<link href="{{ url('assets/vendors/datatables/dataTables.bootstrap.min.css') }}" rel="stylesheet">
@endpush

@section('content')

<form>
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h4><b>Tambah Data User</b></h4>
                        <p>Di bawah ini merupakan list daftar user yang terdia dalam sistem</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
    {{-- <div class="form-group">
        <label for="inputAddress2">Address 2</label>
        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
    </div> --}}
    {{-- <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputNamaUser">Nama User</label>
            <input type="text" class="form-control" id="inputNamaUser" placeholder="Masukkan Nama User">
        </div>
        <div class="form-group col-md-6">
            <label for="inputNIP">NIP</label>
            <input type="text" class="form-control" id="inputNIP" placeholder="NIP User">
        </div>
    </div> --}}
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputEmail">Email</label>
            <input type="email" class="form-control" id="inputEmail" placeholder="Email">
        </div>
        <div class="form-group col-md-6">
            <label for="inputPassword">Password</label>
            <input type="password" class="form-control" id="inputPassword" placeholder="Password">
        </div>
    </div>
    {{-- <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputState">Jurusan</label>
            <select id="inputState" class="form-control">
                <option selected>Jurusan Ilmu Komputer</option>
                <option>Jurusan Fisika</option>
                <option>Jurusan Biologi</option>
                <option>Jurusan Kimia</option>
                <option>Jurusan IPA Terpadu</option>
                <option>Jurusan Matematika</option>
            </select>
        </div>
        <div class="form-group col-md-6">
            <label for="inputAlamat">Alamat</label>
            <input type="text" class="form-control" id="inputAlamat" placeholder="Masukkan Alamat User">
        </div>
    </div> --}}


    {{-- <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputCity">City</label>
            <input type="text" class="form-control" id="inputCity">
        </div>
        <div class="form-group col-md-4">
            <label for="inputState">State</label>
            <select id="inputState" class="form-control">
                <option selected>Choose...</option>
                <option>...</option>
            </select>
        </div>
        <div class="form-group col-md-2">
            <label for="inputZip">Zip</label>
            <input type="text" class="form-control" id="inputZip">
        </div>
    </div>
    <div class="form-group">
        <div class="checkbox">
            <input id="gridCheck" type="checkbox">
            <label for="gridCheck">Check me out</label>
        </div>
    </div> --}}
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection
@push('js')
<script src="{{ url('assets/vendors/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ url('assets/vendors/datatables/dataTables.bootstrap.min.js') }}"></script>
@endpush
