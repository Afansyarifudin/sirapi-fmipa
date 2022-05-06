@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h4><b>Tambah Penelitian</b></h4>
                        <p>Menambahkan Daftar Penelitian</p>
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
                            <label for="NamaKetua">Nama Ketua</label>
                            <input type="text" class="form-control" id="NamaKetua" placeholder="Nama Ketua">
                        </div>
                        <div class="col">
                            <label for="NamaAnggota">Nama Anggota</label>
                            <input type="text" class="form-control" id="NamaAnggota" placeholder="Nama 1, Nama 2, Nama 3,...">
                        </div>
                    </div>
                    <div class="form-row mb-3">
                        <div class="col">
                            <label for="JudulPenelitian">Judul Penelitian</label>
                            <input type="text" class="form-control" id="JudulPenelitian" placeholder="Judul Penelitian">
                        </div>
                        <div class="col">
                            <label for="TahunPenelitian">Tahun Penelitian</label>
                            <input type="number" class="form-control" id="TahunPenelitian" placeholder="Tahun">
                        </div>
                    </div>
                    <div class="form-row mb-3">
                        <div class="col">
                            <label for="Anggaran">Anggaran Penelitian</label>
                            <input type="number" class="form-control" id="Anggaran" placeholder="Rp...">
                        </div>
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
