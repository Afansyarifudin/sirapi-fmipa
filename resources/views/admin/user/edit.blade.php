@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h4><b>Edit Data User</b></h4>
                        <p>Mengedit Data User</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{ route('user.update', $data->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="form">
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
                    <div class="form">
                        <div class="form-group">
                            <label for="inputEmail">Email</label>
                            {{-- <input type="email" class="form-control" id="email" placeholder="Email"> --}}
                            <input type="text"  class="form-control @error('name') is-invalid @enderror" id="Email" name="Email" required autofocus value="{{ $data->email }}" placeholder="Email">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form">
                        <div class="form-group">
                            <label for="password">Password</label>
                            {{-- <input type="text" class="form-control" id="password" placeholder="password"> --}}
                            <input type="password"  class="form-control @error('name') is-invalid @enderror" id="password" name="password" placeholder="Password">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <input type="checkbox"  onclick="myFunction()" >Show Password
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary float-right">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
function myFunction() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
@endsection
