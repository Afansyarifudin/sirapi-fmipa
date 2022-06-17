@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h4><b>Detail Data Arsip</b></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <table class="table table-hover">
                    <tbody>
                        <tr>
                            <th scope="row">Nama</th>
                            <td>{{ $data->name }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Sifat Arsip</th>
                            <td>{{ $data->sifat }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Deskripsi</th>
                            <td>{{ $data->deskripsi }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Kategori</th>
                            <td>{{ $data->category_id }}</td>
                        </tr>
                    </tbody>
                </table>
                <embed src="/{{ $data->file }}" width="1020"  height="600" alt="pdf" />
            </div>
        </div>
    </div>
</div>
@endsection
