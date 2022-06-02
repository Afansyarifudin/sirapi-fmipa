@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h4><b>Edit Kategori</b></h4>
                        <p>Mengedit Kategori</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{ route('category.update', $data->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form">
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="hidden" name="id" id="id" value="{{ $data->id }}">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required autofocus value="{{ $data->name }}" placeholder="Nama">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="slug">Slug</label>
                            <input type="text" class="form-control @error('slug') is-invalid @enderror " id="slug" name="slug" required value="{{ $data->slug }}" placeholder="Slug">
                            @error('slug')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary float-right">Edit Kategori</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
