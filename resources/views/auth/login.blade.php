{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
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
    <title>Login | Upbond - Admin & Dashboard Template</title>
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
                                        <img href="{{asset('adminassets/assets/images/logo-dark.png')}}" alt="" height="22" class="auth-logo logo-dark mx-auto">
                                        <img href="{{asset('adminassets/assets/images/logo-light.png')}}" alt="" height="22" class="auth-logo logo-light mx-auto">
                                    </a>
                                </div>
                            </div>
                            <div class="p-3">
                                <h4 class="font-size-18 text-muted mt-2 text-center">Welcome Back !</h4>
                                <p class="text-muted text-center mb-4">Sign in to continue to upbond.</p>

                                <form class="form-horizontal" action="{{ route('login') }}" method="POST">
                                    @csrf

                                    <div class="mb-3">
                                        <label class="form-label" for="email">E-mail Address</label>
                                        <input type="email" class="form-control" id="email"
                                            placeholder="Enter username" name="email" @error('email') is-invalid @enderror  value="{{ old('email') }}">
                                            @error('email')
                                                <small style="color: red">{{ $message }}</small>
                                            @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="userpassword">Password</label>
                                        <input type="password" class="form-control" id="userpassword"
                                            placeholder="Enter password" name="password"  @error('email') is-invalid @enderror>
                                            @error('password')
                                                <small style="color: red">{{ $message }}</small>
                                             @enderror
                                    </div>

                                    <div class="mb-3 row mt-4">
                                        <div class="col-sm-6">
                                            <div class="form-checkbox">
                                                <input type="checkbox" class="form-check-input me-1"
                                                    id="customControlInline">
                                                <label class="form-label" class="form-check-label"
                                                    for="customControlInline">Remember me</label>
                                            </div>
                                        </div>
                                        <!-- end col -->
                                        <div class="col-sm-6 text-end">
                                            @if (Route::has('password.request'))
                                            <a class="btn btn-link  text-muted" href="{{ route('password.request') }}"><i
                                                class="mdi mdi-lock"></i>
                                                Forgot Your Password?
                                            </a>
                                            @endif
                                        </div>
                                        {{-- <div class="col-sm-6 text-end">
                                            <a href="{{ asset('') }}" class="text-muted"><i
                                                    class="mdi mdi-lock"></i> Forgot your password?</a>
                                        </div> --}}
                                        <!-- end col -->
                                    </div>
                                    <!-- end row -->

                                    <div class="row mb-4">
                                        <div class="col-12 text-center">
                                            <button class="btn btn-primary w-100 waves-effect waves-light"
                                                type="submit">Log
                                                In</button>
                                        </div>
                                    </div>
                                    <!-- end row -->

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
                                </form>
                                <!-- end form -->
                            </div>
                        </div>
                        <!-- end cardbody -->
                    </div>
                    <!-- end card -->
                    <div class="mt-5 text-center">
                        <p>Don't have an account ?<a href="{{ asset('register') }}" class="fw-bold text-primary"> Signup
                                Now </a></p>
                        <p>©
                            <script>document.write(new Date().getFullYear())</script> Upbond. <i
                                class="mdi mdi-heart text-danger"></i> by Mohammed Alshayah
                        </p>
                    </div>

                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
    </div>




    <!-- JAVASCRIPT -->
    <script href="{{asset('adminassets/assets/libs/jquery/jquery.min.js')}}"></script>
    <script href="{{asset('adminassets/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script href="{{asset('adminassets/assets/libs/metismenu/metisMenu.min.js')}}"></script>
    <script href="{{asset('adminassets/assets/libs/simplebar/simplebar.min.js')}}"></script>
    <script href="{{asset('adminassets/assets/libs/node-waves/waves.min.js')}}"></script>

    <script href="{{asset('adminassets/assets/js/app.js')}}"></script>

</body>

</html>



