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
                        <h4><b>Penelitian</b></h4>
                        <p>Di bawah ini merupakan list daftar penelitan yang terdia dalam sistem</p>
                    </div>
                    <div class="col-md-4">
                        <a href="#" class="btn btn-primary float-right">Tambah Penelitian</a>
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
                        <th>Nama Ketua</th>
                        <th>Judul Penelitian</th>
                        <th>Tahun Penelitian</th>
                        <th>File</th>
                        <th style="width: 10px; text-align: center"><i class='anticon anticon-setting'></i></th>
                    </thead>
                    <tbody>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="text-center d-inline-flex">
                            <a href="#" class="badge badge-success mx-1" data-toggle="tooltip" title= "Show"><i class="anticon anticon-eye"></i></a>
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
