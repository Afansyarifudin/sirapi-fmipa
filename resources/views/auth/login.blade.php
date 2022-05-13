<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Icon Arsip -->
    <link rel="shortcut icon" href="{{ url('assets/images/logoUNNES.png') }}">

    <!-- page css -->

    <!-- Core css -->
    <link href="assets/css/app.min.css" rel="stylesheet">

</head>

<body>
    <div class="app">
        <div class="container-fluid p-h-0 p-v-20 bg full-height d-flex" style="background-image: url('assets/images/others/login-3.png')">
            <div class="d-flex flex-column justify-content-between w-100">
                <div class="container d-flex h-100">
                    <div class="row align-items-center w-100">
                        <div class="col-md-7 col-lg-5 m-h-auto">
                            <div class="card shadow-lg">
                                <div class="card-body">
                                    <img class="rounded mx-auto d-block"  alt="" src="{{ url('assets/images/logo2.png ') }}" style="width: 200px">
                                    {{-- <div class="d-flex align-items-center justify-content-between m-b-30">
                                        <img class="img-fluid"  alt="" src="{{ url('assets/images/e-arsip2.png ') }}" style="height:90px">
                                    </div> --}}
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf

                                        <div class="form-group">
                                            <label class="font-weight-semibold" for="email">Email :</label>

                                            <div class="input-affix">
                                                <i class="prefix-icon anticon anticon-user"></i>
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="email">
                                            </div>

                                            {{-- email eror message --}}
                                            @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror

                                        </div>

                                        <div class="form-group">
                                            <label class="font-weight-semibold" for="password">Password :</label>
                                            {{-- <a class="float-right font-size-13 text-muted" href="">Forget Password?</a> --}}

                                            <div class="input-affix m-b-10">
                                                <i class="prefix-icon anticon anticon-lock"></i>
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="password">
                                            </div>

                                            {{-- password eror messsage  --}}
                                            @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>

                                        <div class="col align-self-end">
                                            <button type="submit" class="btn btn-primary form-control mt-2 bg-primary text-white">Login</button>
                                            {{-- <div class="d-flex align-items-center justify-content-between text-end">
                                                <span class="font-size-13 text-muted">
                                                    Don't have an account?
                                                    <a class="small" href=""> Signup</a>
                                                </span>
                                                <button class="btn btn-primary text-end">Log In</button>
                                            </div> --}}
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-none d-md-flex p-h-40 justify-content-between">
                    <span class="">© 2022 FIMPA UNNES</span>
                    {{-- <ul class="list-inline">
                        <li class="list-inline-item">
                            <a class="text-dark text-link" href="">Legal</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="text-dark text-link" href="">Privacy</a>
                        </li>
                    </ul> --}}
                </div>
            </div>
        </div>
    </div>


    <!-- Core Vendors JS -->
    <script src="assets/js/vendors.min.js"></script>

    <!-- page js -->

    <!-- Core JS -->
    <script src="assets/js/app.min.js"></script>

</body>

</html>
