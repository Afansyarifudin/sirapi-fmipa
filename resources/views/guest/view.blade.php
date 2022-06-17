<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="shortcut icon" href="{{ url('assets/images/logo_unnes.png') }}">
    <link href="{{ url('assets/css/app.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendors/datatables/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    @stack('css')
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-primary navbar-dark fixed-top scrolling-navbar">
        <div class="container">
            <!-- Navbar brand -->
            <a class="navbar-brand" href="/">
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
    <!-- End Navbar -->

    <!-- Content -->
    <div class="row">
        <div class="col-md-12">
            <header class="masthead">
                <h1 class="mb-5">Arsip</h1>
                <div class="d-flex flex-column">
                    <div class="row">
                        {{-- <div class="col-lg-2 mb-3 mx-3"> --}}
                            <!-- Accordion -->
                            {{-- <div class="accordion" id="accordion-default"> --}}
                                {{-- <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseOneDefault">
                                                Terbaru
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseOneDefault" class="collapse show" data-parent="#accordion-default">
                                        <div class="card-body">
                                            ...
                                        </div>
                                    </div>
                                </div> --}}
                                {{-- <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseTwoDefault">
                                                Kategori
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseTwoDefault" class="collapse" data-parent="#accordion-default">
                                        <div class="card-body">
                                            @foreach ($list_category as $item)
                                                <a class="dropdown-item" href="">{{ $item->name }}</a>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <!-- End Accordion -->
                        {{-- </div> --}}

                        <div class="col-lg-12">
                            <div class="container">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col-md-8">
                                                    <h4><b> Detail Arsip </b></h4>
                                                    <p>{{ $data->deskripsi }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body mb-2">
                                            <table class="table table-hover">
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">Nama</th>
                                                        <td>{{ $data->name }}</td>
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
                                            <embed src="/{{ $data->file }}" width="1030"  height="600" alt="pdf" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </div>
    </div>
    <!-- End Content -->

    <script src="{{ url('assets/js/vendors.min.js') }}"></script>
    <script src="{{ url('assets/js/app.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="{{ url('assets/vendors/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('assets/vendors/datatables/dataTables.bootstrap.min.js') }}"></script>
    @stack('js')
    @push('js')

    {{-- <script>
        $('#gen_view').attr("src", res.path);
    </script> --}}

    {{-- <script>
        $(document).ready( function () {
            $('#datatable').DataTable({
            processing : true,
            severSide : true,
            ajax : {
                url: "{{ url('guest/show') }}",
                type : 'GET'
            },
            columns: [
                { data: 'id', name:'id'},
                { data: 'name', name:'name'},
                { data: 'action', name:'action'},
            ],
            order: [[0,'asc']]
            });
        });
    </script> --}}

</body>
</html>
