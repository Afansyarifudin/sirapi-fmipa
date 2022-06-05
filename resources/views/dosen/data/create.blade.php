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
                <form action="" method="">
                    @csrf
                    <div class="form-row mb-3">
                        <div class="col-8">
                            <label for="name">Nama Arsip</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Nama Arsip">
                        </div>
                        <div class="col">
                            <label for="sifat">Sifat Surat</label>
                            <select class="custom-select" name="sifat">
                                <option value="private">Private</option>
                                <option value="public">Public</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row mb-3">
                        <div class="col">
                            <label for="category">Kategori</label>
                            <select class="custom-select" name="category_id">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-row mb-3">
                        <div class="col">
                            <label for="deskripsi">Deskripsi</label>
                            <input type="text" class="form-control" name="deskripsi" id="deskripsi" placeholder="Deskripsi">
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
