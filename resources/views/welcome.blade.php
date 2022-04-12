<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>E-ARSIP | FMIPA UNNES</title>

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
                <img alt="logoarsip" src="{{ url('assets/images/logoarsip.png') }}" height="50"/>
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
                            <li class="nav-item active px-3">
                                <a class="nav-link" href="#">Beranda</a>
                            </li>
                            <li class="nav-item active px-3">
                                <a class="nav-link" href="#">Arsip</a>
                            </li>
                            <li class="nav-item active px-3">
                                <a class="nav-link" href="#">Login</a>
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
    <section id="Home" class="Home">
    <div class="top-wrapper text-center" style="background-image: url(assets/images/bgarsip.jpeg); background-size: cover; background-opacity : 0.2; padding: 250px 0 180px 0; oacity: 0.2">
        <div class="container">
            <h1 class="display-4 font-weight-bold wow fadeInUp" data-wow-delay=".2s" style="color: rgb(65, 105, 225); ">Selamat Datang di E-Arsip FMIPA</h1>
            <h1 class="display-4 wow fadeInUp" data-wow-delay=".2s" style="color: rgb(65, 105, 225); "><b>Universitas Negeri Semarang</b></h1>
            <br>
            <h4 data-wow-delay=".4s" style="color: rgb(65, 105, 225);">Silahkan Klik Tombol <b>Arsip</b> Untuk Melihat Arsip Yang Tersedia</h4>
            <div class="btn-wrapper text-center my-4 py-4">
                <button type="submit" class="btn btn-primary btn-rounded btn-lg" >
                    <i class="fa fa-envelope-open-text py-2" > </i>    Arsip
                </button>
            </div>
        </div>
    </div>
    </section>

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