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
                <form method="POST" action=" {{ route('data.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row mb-3">
                        <div class="col-8">
                            <label for="name">Nama Arsip</label>
                            <input type="text" class="form-control @error('name')
                                is-invailid
                            @enderror" name="name" id="name" placeholder="Nama Arsip" required autofocus value="{{ old('name') }}" >
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
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
                            <input type="text" class="form-control @error('deskripsi')
                                is-invailid
                            @enderror" name="deskripsi" id="deskripsi" placeholder="Deskripsi" value="{{ old('deskripsi') }}">
                            @error('deskripsi')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row mb-3">
                        <div class="col">
                            <label for="file">Pilih File</label>
                            <div class="form-row">
                                <div class="custom-file">
                                    <input type="file" class="form-control @error('file') is-invalid @enderror" id="file" name="file" />
                                    @error('file')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary float-right">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
