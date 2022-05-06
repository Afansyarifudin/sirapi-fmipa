@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h4><b>Edit Indeks</b></h4>
                        <p>Mengedit Daftar Indeks</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <form>
                    <div class="form-row mb-3">
                        <div class="col">
                            <label for="JudulIndeks">Judul Indeks</label>
                            <input type="text" class="form-control" id="JudulIndeks" placeholder="Judul Indeks">
                        </div>
                        <div class="col">
                            <label for="NomorIndeks">Nomor Indeks</label>
                            <input type="text" class="form-control" id="NomorIndeks" placeholder="Nomor Indeks">
                        </div>
                    </div>
                    <div class="form-row mb-3">
                        <div class="col">
                            <label for="KodeIndeks">Kode Indeks</label>
                            <input type="text" class="form-control" id="KodeIndeks" placeholder="Kode Indeks">
                        </div>
                        <div class="col">
                        </div>
                    </div>
                    <a href="#" class="btn btn-primary float-right">Simpan</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection