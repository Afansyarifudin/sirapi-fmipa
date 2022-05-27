@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h4><b>Selamat Datang {{ Auth::user()->name }}</b></h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="layout">
            <!-- Content Wrapper START -->
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="media align-items-center">
                                    <div class="avatar avatar-icon avatar-lg avatar-blue">
                                        <i class="anticon anticon-dollar"></i>
                                    </div>
                                    <div class="m-l-15">
                                        <h2 class="m-b-0">0000</h2>
                                        <p class="m-b-0 text-muted">Data Arsip</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="media align-items-center">
                                    <div class="avatar avatar-icon avatar-lg avatar-cyan">
                                        <i class="anticon anticon-line-chart"></i>
                                    </div>
                                    <div class="m-l-15">
                                        <h2 class="m-b-0">1234</h2>
                                        <p class="m-b-0 text-muted">User</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-">
                        <div class="card">
                            <div class="card-body">
                                <div class="media align-items-center">
                                    <div class="avatar avatar-icon avatar-lg avatar-cyan">
                                        <i class="anticon anticon-line-chart"></i>
                                    </div>
                                    <div class="m-l-15">
                                        <h2 class="m-b-0">12</h2>
                                        <p class="m-b-0 text-muted">Kategori</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-">
                        <div class="card">
                            <div class="card-body">
                                <div class="media align-items-center">
                                    <div class="avatar avatar-icon avatar-lg avatar-cyan">
                                        <i class="anticon anticon-line-chart"></i>
                                    </div>
                                    <div class="m-l-15">
                                        <h2 class="m-b-0">iii</h2>
                                        <p class="m-b-0 text-muted">Role</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection
