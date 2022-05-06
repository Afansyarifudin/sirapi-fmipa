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
                        <h4><b>SK Pangkat Dosen</b></h4>
                        <p>Di bawah ini merupakan list Sk Pangkat yang tersedia</p>
                    </div>
                    <div class="col-md-4">
                        <a href="#" class="btn btn-primary float-right">Tambah SK Pangkat</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <table class="table table-hover" id="datatable">
                    <thead>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Golongan Ruang</th>
                        <th>Status Pengajuan</th>
                        <th style="width: 10px; text-align: center"><i class='anticon anticon-setting'></i></th>
                    </thead>
                    <tbody>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="text-center d-inline-flex">
                            <a href="#" class="badge badge-success mx-1"data-toggle="tooltip" title= "Show"><i class='anticon anticon-select'></i></a>
                            <a href="#" class="badge badge-primary mx-1" data-toggle="tooltip" title= "Edit"><i class='fas fa-user-edit'></i></a>
                            <a href="#" class="badge badge-danger mx-1"data-toggle="tooltip" title= "Delete"><i class='far fa-trash-alt'></i></a>
                        </td>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
@push('js')
<script>
    $(document).ready( function () {
        $('#datatable').DataTable();
    } );
</script>
<script src="{{ url('assets/vendors/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ url('assets/vendors/datatables/dataTables.bootstrap.min.js') }}"></script>
@endpush
