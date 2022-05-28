@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h4><b>Tambah Data Arsip</b></h4>
                        <p>Menambahkan Data Arsip</p>
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
                            <label for="NamaArsip">Nama Arsip</label>
                            <input type="text" class="form-control" id="NamaArsip" placeholder="Nama Arsip">
                        </div>
                        <div class="col">
                            <label for="SifatSurat">Sifat Surat</label>
                            <select class="custom-select">
                                <option value="1">Private</option>
                                <option value="2">Publik</option>

                            </select>
                        </div>
                    </div>
                    <div class="form-row mb-3">
                        <div class="col">
                            <label for="Deskripsi">Deskripsi</label>
                            <input type="text" class="form-control" id="Deskripsi" placeholder=" ">
                        </div>
                    </div>
                    <div class="form-row mb-3">
                        <div class="col">
                            <label for="Keterangan">Pilih File</label>
                            <div class="form-row">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">Pilih file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="btn btn-primary float-right">Simpan</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
