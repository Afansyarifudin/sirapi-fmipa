<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="shortcut icon" href="{{ url('assets/images/iconarsip.png') }}">
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
                                    <table class="table" id="datatable">
                                        <thead>
                                            <th>No</th>
                                            <th>Judul</th>
                                            <th>No Surat Lengkap</th>
                                            <th>Rak Arsip</th>
                                            <th>Unit Arsip</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Lorem ipsum dolor sit amet</td>
                                                <td>Lorem ipsum dolor sit amet</td>
                                                <td>Lorem ipsum dolor sit amet</td>
                                                <td>Lorem ipsum dolor sit amet</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        {{--  <div class="card shadow">
                            <div class="card-header py-3">
                                <p class="text-primary m-0 font-weight-bold">DATA ARSIP</p>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-6"></div>
                                    <div class="col-md-3">
                                        <select class="combobox">
                                            <option value="Select">Penelitian Dosen</option>
                                            <option value="php">SK Kenaikan Pangkat</option>
                                            <option value="html">Surat-Surat</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- Tabel -->
                                <table class="table" id="datatable">
                                    <thead>
                                        <th>No</th>
                                        <th>Judul</th>
                                        <th>No Surat Lengkap</th>
                                        <th>Rak Arsip</th>
                                        <th>Unit Arsip</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Lorem ipsum dolor sit amet</td>
                                            <td>Lorem ipsum dolor sit amet</td>
                                            <td>Lorem ipsum dolor sit amet</td>
                                            <td>Lorem ipsum dolor sit amet</td>
                                        </tr>
                                </tbody>
                                </table>
                                <div class="table-responsive mt-2" id="datatable">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr class="text-center">
                                                <th>No</th>
                                                <th>Judul</th>
                                                <th>No Surat</th>
                                                <th>Rak Arsip</th>
                                                <th>Unit Arsip</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Lorem ipsum dolor sit amet</td>
                                                    <td>Lorem ipsum dolor sit amet</td>
                                                    <td>Lorem ipsum dolor sit amet</td>
                                                    <td>Lorem ipsum dolor sit amet</td>
                                                </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>  --}}
                    </div>
                </div>
            </div>
        </div>
    </header>

    <script src="{{ url('assets/js/vendors.min.js') }}"></script>
    <script src="{{ url('assets/js/app.min.js') }}"></script>

    @stack('js')

</body>

<style>
    /* Home */
.top-wrapper {
    background-blend-mode: lighten;
    background-color: rgba(255,255,255,0.8);
    animation: zoom 1s;
    }
    @keyframes zoom {from {transform: scale(0.5);}to {transform: scale(1);}}
.top-wrapper h1, h4 {
    animation: bawahkeatas 1s ;
    }
    @keyframes bawahkeatas {from { transform:translate(0px, 1000px);} to {transform:translate(0px, 0px);}}
</style>

</html>
