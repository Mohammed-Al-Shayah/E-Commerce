{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}


<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Register | Upbond - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="{{asset('adminassets/assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('adminassets/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{asset('adminassets/assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body class="auth-body-bg">
    <div class="home-btn d-none d-sm-block">
        <a href="index.html"></a>
    </div>
    <div class="account-pages my-5 pt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center mt-4">
                                <div class="mb-3">
                                    <a href="index.html" class="">
                                        <img src="{{asset('adminassets/assets/images/logo-dark.png')}}" alt="" height="22" class="auth-logo logo-dark mx-auto">
                                        <img src="{{asset('adminassets/assets/images/logo-light.png')}}" alt="" height="22" class="auth-logo logo-light mx-auto">
                                    </a>
                                </div>
                            </div>
                            <div class="p-3">
                                <h4 class="font-size-18 text-muted mt-2 text-center">Free Register</h4>
                                <p class="text-muted text-center mb-4">Get your free upbond account now.</p>

                                <form class="form-horizontal" action="{{ route('register') }}" method="POST">
                                    @csrf

                                    <div class="mb-3">
                                        <label class="form-label" for="useremail">Email</label>
                                        <input type="email" class="form-control" id="useremail"
                                            placeholder="Enter email"name="email" @error('email') is-invalid @enderror  value="{{ old('email') }}" >
                                             @error('email')
                                                <small style="color: red">{{ $message }}</small>
                                            @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="username">Username</label>
                                        <input type="text" class="form-control" id="username"
                                            placeholder="Enter username" name="name" @error('name') is-invalid @enderror  value="{{ old('email') }}">
                                            @error('name')
                                                <small style="color: red">{{ $message }}</small>
                                            @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="userpassword">Password</label>
                                        <input type="password" class="form-control" id="userpassword"
                                            placeholder="Enter password" name="password" @error('password') is-invalid @enderror>
                                            @error('password')
                                                <small style="color: red">{{ $message }}</small>
                                            @enderror
                                    </div>


                                    <div class="mb-3">
                                        <label class="form-label" for="password-confirm">confirm Password</label>
                                        <input type="password" class="form-control" id="userpassword"
                                            placeholder="Enter password" name="password_confirmation" required autocomplete="new-password" >
                                    </div>

                                    <div class="mb-3 row mt-4">
                                        <div class="col-12 text-end">
                                            <button class="btn btn-primary w-100 waves-effect waves-light"
                                                type="submit">Register</button>
                                        </div>
                                    </div>



                                    <div class="row">
                                        <div class="col-12">
                                            <div class="text-center plan-line">
                                                or sign up with
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end row -->

                                    <div class="row mt-3">

                                        <div class="button-list btn-social-icon text-center">
                                            <button type="button" class="btn btn-facebook">
                                                <i class="fab fa-facebook"></i>
                                            </button>

                                            <button type="button" class="btn btn-twitter ms-1">
                                                <i class="fab fa-twitter"></i>
                                            </button>

                                            <button type="button" class="btn btn-linkedin  ms-1">
                                                <i class="fab fa-linkedin"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- end row -->

                                    <div class="mt-4 row">
                                        <div class="col-12">
                                            <div class="text-center">
                                                <p class="text-muted mb-0">By registering you agree to the Upbond <a
                                                        href="#">Terms of Use</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end row -->
                                </form>

                            </div>

                        </div>
                    </div>
                    <div class="mt-5 text-center">
                        <p>Already have an account ? <a href="{{ asset('login') }}" class="fw-bold text-primary"> Login </a>
                        </p>
                        <p>©
                            <script>document.write(new Date().getFullYear())</script> Upbond. Crafted with <i
                                class="mdi mdi-heart text-danger"></i> by Mohammed Alshayah
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>



    <!-- JAVASCRIPT -->
    <script src="{{asset('adminassets/assets/libs/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('adminassets/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('adminassets/assets/libs/metismenu/metisMenu.min.js')}}"></script>
    <script src="{{asset('adminassets/assets/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{asset('adminassets/assets/libs/node-waves/waves.min.js')}}"></script>

    <script src="{{asset('adminassets/assets/js/app.js')}}"></script>

</body>

</html>
