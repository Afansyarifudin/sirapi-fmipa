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
                        <h4><b>Role</b></h4>
                        <p></p>
                    </div>
                    <div class="col-md-4">
                        <a href="{{ route('role.create')}}" class="btn btn-primary float-right">Tambah Role</a>
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
                        <th>Nama</th>
                        <th>Guard Name</th>
                        <th><i class='anticon anticon-setting'></i></th>
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
                url: "{{ route('role.index')}}",
                type : 'GET'
            },
            columns: [
                { data: 'id', name:'id'},
                { data: 'name', name:'name'},
                { data: 'guard_name', name:'guard_name'},
                { data: 'action', name:'action'},
            ],
            order: [[0,'asc']]
        });
    } );
</script>
<script src="{{ url('assets/vendors/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ url('assets/vendors/datatables/dataTables.bootstrap.min.js') }}"></script>
@endpush
