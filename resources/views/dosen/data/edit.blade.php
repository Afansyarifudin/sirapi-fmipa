@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h4><b>Edit Data Arsip</b></h4>
                        <p>Mengedit Data Arsip</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{ route('data.update', $data->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-row mb-3">
                        <div class="col">
                            <label for="NamaArsip">Nama Arsip</label>
                            <input type="hidden" name="id" id="id" value="{{ $data->id }}">
                            <input type="text"  class="form-control @error('name') is-invalid @enderror" id="name" name="name" required autofocus value="{{ $data->name }}" placeholder="Nama">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="SifatSurat">Sifat Surat</label>
                            <select class="custom-select">
                                <option value="1" {{ $data->sifat == 1 ? 'selected' : '' }}>Private</option>
                                <option value="2" {{ $data->sifat == 2 ? 'selected' : '' }}>Publik</option>

                            </select>
                        </div>
                    </div>
                    <div class="form-row mb-3">
                        <div class="col">
                            <label for="category">Kategori</label>
                            <select class="custom-select" name="category_id">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" {{ $category->id == $category->id ? 'selected' : '' }} >{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-row mb-3">
                        <div class="col">
                            <label for="Deskripsi">Deskripsi</label>
                            {{-- <input type="text" class="form-control" id="Deskripsi" placeholder=" "> --}}
                            <input type="text"  class="form-control @error('Deskripsi') is-invalid @enderror" id="Deskripsi" name="Deskripsi" required autofocus value="{{ $data->deskripsi }}" placeholder="Deskripsi">
                            @error('Deskripsi')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row mb-3">
                        <div class="col">
                            <label for="Keterangan">Pilih File</label>
                            <div class="form-row">
                                <div class="custom-file">
                                    <input type="file" class="form-control" id="file" name="file" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary float-right">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
