@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h4><b>Edit Role</b></h4>
                        <p>Mengedit Role</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">

                <form method="POST" action="{{ route('role.update', $data->id) }}">
                    <div class="form">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name">Nama</label>

                            <input type="hidden" name="id" id="id" value="{{ $data->id }}">
                            <input type="text"  class="form-control @error('name') is-invalid @enderror" id="name" name="name" required autofocus value="{{ $data->name }}" placeholder="Nama">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="guard_name">Guard Name</label>

                        <select class="form-control @error('slug') is-invalid @enderror " id="guard_name" name="guard_name" required value="{{ $data->guard_name }}" placeholder="guard_name">
                            <option value="Web">Web</option>
                            <option value="API">API</option>
                        </select>
                            @error('guard_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary float-right">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
