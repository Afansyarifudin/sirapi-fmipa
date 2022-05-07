<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="{{ url('homebite/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('homebite/assets/owl.carousel/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ url('homebite/assets/owl.carousel/owl.theme.default.css') }}" rel="stylesheet">
    <link href="{{ url('css/style.css') }}" rel="stylesheet">
    <link href="{{ url('homebite/css/style.css') }}" rel="stylesheet">
    <!-- Fontawesome CSS -->
    <link href="{{ url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css') }}" rel="stylesheet">

    @livewireStyles

    @stack('css')
</head>

<body class="fix-header">
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <div id="main-wrapper">
        <header class="topheader bg-cs-yellow sticky-top" id="top">
            <div class="fix-width">
                <nav class="navbar navbar-expand-md navbar-light p-l-0">
                    <a class="navbar-brand" href="{{ url('') }}">
                        <img src="{{ url('logo/wearit.svg') }}" height="14" alt="admin template" />
                    </a>
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav ml-auto stylish-nav">
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ route('room_fitting') }}">Virtual Fitting Room</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ route('search_products') }}">Produk</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ route('about') }}">Tentang</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ route('contact') }}">Kontak</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ route('custom') }}">Custom</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <div class="page-wrapper">
            <div class="container-fluid bg-cs-white" id="top">
                @yield('content')
                <a class="bt-top btn btn-circle btn-lg bg-cs-blue text-white" href="#top">
                    <i class="ti-arrow-up"></i>
                </a>
                <footer class="footer row bg-cs-blue">
                    <div class="fix-width">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 mb-mobile-3">
                                <img src="{{ url('logo/wearit-white.svg') }}" height="30" alt="logo" />
                                <p class="m-t-30">
                                    <span class="text-white">Wear-It
                                    </span> mengatasi permasalahan dalam ketidakcocokan memilih ukuran pakaian saat berbelanja online store.
                                </p>
                                <div class="row mt-5 align-items-center">
                                    <div class="col-md-12">
                                        <a href="https://wa.me/628781770310"><img src="{{ url('assets/icons/waw.svg') }}"></a>
                                        <a href="https://www.instagram.com/wearit.ind/"><img src="{{ url('assets/icons/igw.svg') }}"></a>
                                        <a href="https://twitter.com/WEARIT_IND"><img src="{{ url('assets/icons/tww.svg') }}"></a>
                                        <a href="https://www.facebook.com/Wear-It-102385638934768/"><img src="{{ url('assets/icons/fbw.svg') }}"></a>
                                        <a href="https://youtube.com/channel/UCXKTEAFgwUyt5_gZ3cHWVqQ"><img src="{{ url('assets/icons/ytw.svg') }}"></a>
                                    </div>
                                </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-mobile-3">
                        <ul class="footer-link list-icons">
                            <li>
                                <h4 class="text-white">Fitur Utama</h4>
                            </li>
                            <li class="li-narrow"><a href="#" class="text-white">Virtual Fitting Room</a></li>
                            <li class="li-narrow"><a href="#" class="text-white">List Produk</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-mobile-3">
                        <ul class="footer-link list-icons">
                            <li>
                                <h4 class="text-white">Link Menu</h4>
                            </li>
                            <li class="li-narrow"><a href="#" class="text-white">Produk</a></li>
                            <li class="li-narrow"><a href="#" class="text-white">Custom</a></li>
                            <li class="li-narrow"><a href="#" class="text-white">Blog</a></li>
                            <li class="li-narrow"><a href="#" class="text-white">Tentang</a></li>
                            <li class="li-narrow"><a href="#" class="text-white">Kontak</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <span href="#" class="text-white">Jl. KH HASYIM ASYARI<br>
                            SIDOARJO, JAWA TIMUR 61253
                            INDONESIA<br>
                            wearitind@gmail.com<br>
                            087817703710
                        </span>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-12 sub-footer">
                        <span>Copyright 2021. All Rights Reserved by
                            <a class="text-white" href="#" target="_blank">WearIt
                            </a>
                        </span>
                    </div>
            </div>
    </div>
    </footer>
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
    </div>
    </div>
    </div>
    <script src="{{ url('homebite/js/jquery.min.js') }}"></script>
    <script src="{{ url('homebite/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ url('homebite/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('homebite/js/waves.js') }}"></script>
    <script src="{{ url('homebite/js/custom.min.js') }}"></script>

    @livewireScripts

    @stack('js')
</body>
<!-- Fontawesome JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>

</html>
