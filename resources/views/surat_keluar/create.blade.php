@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h4><b>Tambah Surat Keluar</b></h4>
                        <p>Menambahkan Daftar Surat Keluar</p>
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
                            <label for="NomorSurat">Nomor Surat</label>
                            <input type="text" class="form-control" id="NomorSurat" placeholder="Nomor Surat">
                        </div>
                        <div class="col"> 
                            <label for="SifatSurat">Sifat Surat</label>
                            <select class="custom-select">
                                <option value="1">Sangat Segera atau Kilat</option>
                                <option value="2">Segera</option>
                                <option value="3">Dinas</option>
                                <option value="4">Biasa</option>
                              </select>                              
                        </div>
                    </div>
                    <div class="form-row mb-3">
                        <div class="col">
                            <label for="PerihalSurat">Perihal Surat</label>
                            <input type="text" class="form-control" id="PerihalSurat" placeholder="Perihal Surat">
                        </div>
                        <div class="col">
                            <label for="TujuanSurat">Tujuan Surat</label>
                            <input type="text" class="form-control" id="TujuanSurat" placeholder="Tujuan Surat">
                        </div>
                    </div>
                    <div class="form-row mb-3">
                        <div class="col">
                            <label for="TanggalMasuk">Tanggal Keluar</label>
                            <input type="date" class="form-control" id="TanggalMasuk" placeholder="Tanggal Masuk">
                        </div>
                        <div class="col">
                            <label for="Keterangan">Keterangan</label>
                            <input type="text" class="form-control" id="Keterangan" placeholder="Keterangan">
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