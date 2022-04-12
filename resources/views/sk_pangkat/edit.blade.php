@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h4><b>Tambah Surat Masuk</b></h4>
                        <p>Menambahkan Daftar Surat Masuk</p>
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
                            <label for="Nama">Nama Lengkap</label>
                            <input type="text" class="form-control" id="Nama" placeholder="Nama Lengkap">
                        </div>
                        <div class="col">
                            <label for="Tanggal">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="Tanggal" placeholder="Tanggal">
                        </div>
                    </div>
                    <div class="form-row mb-3">
                        <div class="col">
                            <label for="GolonganRuang">Golongan Ruang</label>
                            <input type="text" class="form-control" id="GolonganRuang" placeholder="Golongan Ruang">
                        </div>
                        <div class="col">
                            <label for="Pendidikan">Pendidikan Terakhir</label>
                            <select class="custom-select">
                                <option value="1">S1</option>
                                <option value="2">S2</option>
                                <option value="3">S3</option>
                                <option value="4">Prof</option>
                              </select>
                        </div>
                    </div>
                    <div class="form-row mb-3">
                        <div class="col">
                            <label for="Keterangan">Status Pengajuan</label>
                            <input type="text" class="form-control" id="Keterangan" placeholder="Keterangan">
                        </div>
                    </div>
                    <a href="#" class="btn btn-primary float-right">Simpan</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
