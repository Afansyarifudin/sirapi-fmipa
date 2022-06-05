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
                        <h4><b>Data Arsip</b></h4>
                    </div>
                    <div class="col-md-4">
                        <a href="{{ route('data.create') }}" class="btn btn-primary float-right">Tambah Data Arsip</a>
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
                        <th>Ketegori</th>
                        <th style="text-align: center"><i class='anticon anticon-setting'></i></th>
                    </thead>

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
                url: "{{ route('data.index')}}",
                type : 'GET'
            },
            columns: [
                { data: 'id', name:'id'},
                { data: 'name', name:'name'},
                { data: 'sifat', name:'sifat'},
                { data: 'category_id', name:'category'},
                { data: 'action', name:'action'},
            ],
            order: [[0,'asc']]
        });
    } );
</script>
<script src="{{ url('assets/vendors/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ url('assets/vendors/datatables/dataTables.bootstrap.min.js') }}"></script>
@endpush
