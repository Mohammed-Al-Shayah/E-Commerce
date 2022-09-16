<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title> @yield('title', config('app.name'))</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('adminassets/assets/images/favicon.ico') }}">

    <!-- Bootstrap Css -->
    <link href="{{ asset('adminassets/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('adminassets/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('adminassets/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    @yield('styles')
    <style>
        /* .main-content{
            width: 100%;
    padding-right: 20%;
    padding-left: 20%;
    margin-right: auto;
    margin-left: auto;
    padding-top:5% ;
        } */
    </style>
</head>

<body data-sidebar="dark">



    <!-- Begin page -->
    <div id="layout-wrapper">


        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <a href="{{ route('admin.index') }}" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="{{ asset('adminassets/assets/images/logo-sm-dark.png') }}" alt="logo-sm-dark"
                                    height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="{{ asset('adminassets/assets/images/logo-dark.png') }}" alt="logo-dark"
                                    height="22">
                            </span>
                        </a>

                        <a href="{{ route('admin.index') }}" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="{{ asset('adminassets/assets/images/logo-sm-light.png') }}"
                                    alt="logo-sm-light" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="{{ asset('adminassets/assets/images/logo-light.png') }}" alt="logo-light"
                                    height="22">
                            </span>
                        </a>
                    </div>

                    <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect"
                        id="vertical-menu-btn">
                        <i class="ri-menu-2-line align-middle"></i>
                    </button>

                    <!-- App Search-->
                    <form class="app-search d-none d-lg-block">
                        <div class="input-group">
                            <button class="btn btn-rounded dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">Projects <i class="mdi mdi-chevron-down ms-2"></i></button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Jobs</a></li>
                                <li><a class="dropdown-item" href="#">Users</a></li>
                                <li><a class="dropdown-item" href="#">Projects</a></li>
                            </ul>
                            <input type="text" class="form-control bg-transparent" placeholder="Search.."
                                aria-label="Text input with dropdown button">
                            <span class="mdi mdi-magnify"></span>
                        </div>

                    </form>
                </div>

                <div class="d-flex">
                    <div class="dropdown d-inline-block d-lg-none">
                        <button type="button" class="btn header-item noti-icon waves-effect"
                            id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <div class="top-icon">
                                <i class="ri-search-line"></i>
                            </div>

                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                            aria-labelledby="page-header-search-dropdown">
                            <form class="p-3">
                                <div class="m-0">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search ...">
                                        <button class="btn btn-primary" type="submit"><i
                                                class="ri-search-line"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- end -->
                    <ul class="metismenu list-unstyled">
                        <li class="nav-item dropdown no-arrow ">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Languages
                                    ({{ app()->currentLocale() }})</span>
                                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                    <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}"
                                        href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                        {{ $properties['native'] }}
                                    </a>
                                @endforeach
                            </div>
                        </li>

                    </ul>





                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item noti-icon waves-effect"
                            id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="top-icon">
                                <i class="mdi mdi-bell"></i>
                            </div>
                            <span class="badge bg-danger rounded-pill">3</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                            aria-labelledby="page-header-notifications-dropdown">
                            <div class="p-3">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h6 class="m-0"> Notifications </h6>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#!" class="small"> View All</a>
                                    </div>
                                </div>
                            </div>
                            <div data-simplebar style="max-height: 230px;">
                                <a href="" class="text-reset notification-item">
                                    <div class="d-flex">
                                        <div class="avatar-xs me-3">
                                            <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                <i class="ri-shopping-cart-line"></i>
                                            </span>
                                        </div>
                                        <div class="flex-1">
                                            <h6 class="mt-0 mb-1">Your order is placed</h6>
                                            <div class="font-size-12 text-muted">
                                                <p class="mb-1">If several languages coalesce the grammar</p>
                                                <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="" class="text-reset notification-item">
                                    <div class="d-flex">
                                        <img src="{{ asset('adminassets/assets/images/users/avatar-3.jpg') }}"
                                            class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                        <div class="flex-1">
                                            <h6 class="mt-0 mb-1">James Lemire</h6>
                                            <div class="font-size-12 text-muted">
                                                <p class="mb-1">It will seem like simplified English.</p>
                                                <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 hours ago
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="" class="text-reset notification-item">
                                    <div class="d-flex">
                                        <div class="avatar-xs me-3">
                                            <span class="avatar-title bg-success rounded-circle font-size-16">
                                                <i class="ri-checkbox-circle-line"></i>
                                            </span>
                                        </div>
                                        <div class="flex-1">
                                            <h6 class="mt-0 mb-1">Your item is shipped</h6>
                                            <div class="font-size-12 text-muted">
                                                <p class="mb-1">If several languages coalesce the grammar</p>
                                                <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a href="" class="text-reset notification-item">
                                    <div class="d-flex">
                                        <img src="{{ asset('adminassets/assets/images/users/avatar-4.jpg') }}"
                                            class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                        <div class="flex-1">
                                            <h6 class="mt-0 mb-1">Salena Layfield</h6>
                                            <div class="font-size-12 text-muted">
                                                <p class="mb-1">As a skeptical Cambridge friend of mine occidental.
                                                </p>
                                                <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 hours ago
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="p-2 border-top">
                                <div class="d-grid">
                                    <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">
                                        <i class="mdi mdi-arrow-right-circle me-1"></i> View More..
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end notification -->

                    <div class="dropdown d-inline-block user-dropdown">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user"
                                src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}" alt="Header Avatar">
                            <span class="d-none d-xl-inline-block ms-1">{{ Auth::user()->name }}</span>
                            <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a class="dropdown-item" href="#"><i class="ri-user-line align-middle me-1"></i>
                                Profile</a>
                            <a class="dropdown-item" href="#"><i
                                    class="ri-wallet-2-line align-middle me-1"></i> My Wallet</a>
                            <a class="dropdown-item d-block" href="#"><span
                                    class="badge bg-success float-end mt-1">11</span><i
                                    class="ri-settings-2-line align-middle me-1"></i> Settings</a>
                            <a class="dropdown-item" href="#"><i
                                    class="ri-lock-unlock-line align-middle me-1"></i> Lock
                                screen</a>
                            <div class="dropdown-divider"></div>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button class="dropdown-item text-danger" href="#"><i
                                        class="ri-shut-down-line align-middle me-1 text-danger"></i>Logout</button>
                            </form>
                        </div>
                    </div>
                    <!-- end user -->

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                            <div class="top-icon">
                                <i class="mdi mdi-cog-outline mdi-spin"></i>
                            </div>
                        </button>
                    </div>
                    <!-- end setting -->
                </div>
            </div>
        </header>

        <!-- ========== Left Sidebar Start ========== -->
          @include('admin.sidebar')
        <!-- Left Sidebar End -->



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->


        <div class="main-content">
            <div class="page-content">
                @yield('content')
            </div>

        </div>


        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>
                            document.write(new Date().getFullYear())
                        </script> © Ecommerce.
                    </div>

                </div>
            </div>
        </footer>

    <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->

    <!-- JAVASCRIPT -->
    <script src="{{ asset('adminassets/assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('adminassets/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('adminassets/assets/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('adminassets/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('adminassets/assets/libs/node-waves/waves.min.js') }}"></script>

    <script src="{{ asset('adminassets/assets/js/app.js') }}"></script>
    @yield('scripts')

</body>

</html>
