@extends('layouts.master')
@push('css')
<link href="{{ url('assets/vendors/datatables/dataTables.bootstrap.min.css') }}" rel="stylesheet">
@endpush
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h4><b>Data User</b></h4>
                        <p>Di bawah ini merupakan list daftar user yang terdia dalam sistem</p>
                    </div>
                    <div class="col-md-4">
                        <a href="#" class="btn btn-primary float-right">Tambah User</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <table class="table" id="datatable">
                    <thead>
                        <th>No</th>
                        <th>Username</th>
                        <th>Nama Lengkap</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th colspan="3" style="width: 10px; text-align: center"><i class='anticon anticon-setting'></i></th>
                    </thead>
                    <tr>
                        <td><button type='button' class='btn btn-primary'><i class='fas fa-user-edit'></i></button></td>
                        <td><button type='button' class='btn btn-danger'><i class='far fa-trash-alt'></i></button></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
@push('js')
<script src="{{ url('assets/vendors/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ url('assets/vendors/datatables/dataTables.bootstrap.min.js') }}"></script>


@endpush
