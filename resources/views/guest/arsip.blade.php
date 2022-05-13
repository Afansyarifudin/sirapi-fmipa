<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="shortcut icon" href="{{ url('assets/images/logo_unnes.png') }}">
    <link href="{{ url('assets/css/app.min.css') }}" rel="stylesheet">

    @stack('css')

</head>

<body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg bg-primary navbar-dark fixed-top scrolling-navbar">
        <div class="container">
            <!-- Navbar brand -->
            <a class="navbar-brand" href="#">
                <img alt="logoarsip" src="{{ url('assets/images/logo2.png') }}" height="50"/>
            </a>

            <!-- Collapse button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Collapsible content -->
            <div class="collapse navbar-collapse" id="basicExampleNav">
                <!-- Links -->
                <ul class="navbar-nav mr-auto smooth-scroll"></ul>
                </ul>
                <!-- Links -->
                <ul class="navbar-nav nav-flex-icons">
                    <!-- Collapsible content -->
                    <div class="collapse navbar-collapse" id="basicExampleNav">
                        <!-- Links -->
                        <ul class="navbar-nav mr-auto smooth-scroll" style="font-size: 20px">
                            {{-- <li class="nav-item active px-3">
                                <a class="nav-link" href="/">Beranda</a>
                            </li>
                            <li class="nav-item active px-3">
                                <a class="nav-link" href="#">Arsip</a>
                            </li> --}}
                            <li class="nav-item active px-3">
                                <a class="nav-link" href="/">Beranda</a>
                            </li>
                            <li class="nav-item active px-3">
                                <a class="nav-link" href="{{ route('guest.guest_arsip') }}">Arsip</a>
                            </li>
                            <li class="nav-item active px-3">
                                <a class="nav-link" href="{{ route('login') }}">Login</a>
                            </li>

                            <!-- Dropdown -->
                            {{--  <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>  --}}
                        </ul>
                        <!-- Links -->
                    </div>
                    <!-- Collapsible content -->
                </ul>
            </div>
        </div>
    </nav>

    <!--Isi-->
    <header class="masthead " >
        <h1 class="mb-5">Arsip</h1>
        <div class="d-flex align-items-center flex-column">
            <div class="row">
                <div class="col-lg-2 mb-3">
                    <!-- Accordion -->
                    <div class="accordion" id="accordion-default">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">
                                    <a data-toggle="collapse" href="#collapseOneDefault">
                                        Arsip Terbaru
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseOneDefault" class="collapse show" data-parent="#accordion-default">
                                <div class="card-body">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">
                                    <a class="collapsed" data-toggle="collapse" href="#collapseTwoDefault">
                                        Jurusan
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseTwoDefault" class="collapse" data-parent="#accordion-default">
                                <div class="card-body">
                                    ...
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-10">
                    <div class="container-fluid">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-md-8">
                                            <h4><b>DATA ARSIP</b></h4>
                                            <p>Di bawah ini merupakan list daftar arsip surat yang tersedia dalam sistem</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row text-nowrap">
                                        <div class="col-sm-4">
                                            <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"><label>Show&nbsp;<select class="form-control form-control-sm custom-select custom-select-sm">
                                                        <option value="10" selected="">10</option>
                                                        <option value="25">25</option>
                                                        <option value="50">50</option>
                                                        <option value="100">100</option>
                                                    </select>&nbsp;</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="input-affix m-b-10">
                                                <i class="prefix-icon anticon anticon-search"></i>
                                                <input type="text" class="form-control" placeholder="Icon Prefix">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="dropdown dropdown-animated scale-right float-end">
                                                <button type="button float-end" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                    Kategori
                                                </button>
                                                <div class="dropdown-menu">
                                                    <button class="dropdown-item" type="button">Action</button>
                                                    <button class="dropdown-item" type="button">Another action</button>
                                                    <button class="dropdown-item" type="button">Something else here</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <table class="table" id="datatable">
                                        <thead>
                                            <th>No</th>
                                            <th>Nama Arsip</th>
                                            <th>Sifat Arsip</th>
                                            <th>Deskripi</th>
                                            <th style="width: 10px; text-align: center"><i class='anticon anticon-setting'></i></th>
                                        </thead>
                                        <tbody>
                                            <td>Lorem ipsum dolor sit amet</td>
                                            <td>Lorem ipsum dolor sit amet</td>
                                            <td>Lorem ipsum dolor sit amet</td>
                                            <td>Lorem ipsum dolor sit amet</td>
                                            <td class="text-center d-inline-flex">
                                                <a href="#" class="badge badge-success mx-1"data-toggle="tooltip" title= "View"><i class='anticon anticon-select'></i></a>
                                                <a href="#" class="badge badge-primary mx-1" data-toggle="tooltip" title= "Edit"><i class="anticon anticon-edit"></i></a>
                                            </td>
                                        </tbody>
                                    </table>
                                    <div class="row">
                                        <div class="col-md-6 align-self-center">
                                            <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Showing 1 to 10 of 27</p>
                                        </div>
                                        <div class="col-md-6">
                                            <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                                                <ul class="pagination">
                                                    <li class="page-item disabled"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                    <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <script src="{{ url('assets/js/vendors.min.js') }}"></script>
    <script src="{{ url('assets/js/app.min.js') }}"></script>

    @stack('js')
    {{--  <script>
        $(document).ready( function () {
            $('#datatable').DataTable();
        } );
    </script>
    <script src="{{ url('assets/vendors/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('assets/vendors/datatables/dataTables.bootstrap.min.js') }}"></script>  --}}

</body>

</html>
