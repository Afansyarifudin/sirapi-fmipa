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
                        <h4><b>Manajemen Arsip</b></h4>
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
                        <th>Nama Arsip</th>
                        <th>Sifat Arsip</th>
                        <th>Deskripsi</th>
                        <th>Created by</th>
                        <th style=" text-align: center"><i class='anticon anticon-setting'></i></th>
                    </thead>
                    <tbody>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="text-center d-inline-flex">
                            <a href="#" class="badge badge-success mx-1"data-toggle="tooltip" title= "View"><i class='anticon anticon-select'></i></a>
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
        $('#datatable').DataTable({
            processing : true,
            severSide : true,
            ajax : {
                url: "{{ route('arsip.index')}}",
                type : 'GET'
            },
            columns: [
                { data: 'id', name:'id'},
                { data: 'name', name:'name'},
                { data: 'sifat', name:'sifat', width:'12%'},
                { data: 'deskripsi', name:'deskripsi'},
                { data: 'user_id', name:'user_id', width:'12%'},
                { data: 'action', name:'action', width:'10%'},
            ],
            order: [[0,'asc']]
        });
    } );
</script>
<script src="{{ url('assets/vendors/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ url('assets/vendors/datatables/dataTables.bootstrap.min.js') }}"></script>
@endpush
