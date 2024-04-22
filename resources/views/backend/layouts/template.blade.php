<!DOCTYPE html>
<html lang="en">

<head>

    <title>@yield('page_title')</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description"
        content="Dasho Bootstrap admin template made using Bootstrap 5 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords"
        content="admin templates, bootstrap admin templates, bootstrap 5, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, Dasho, Dasho bootstrap admin template">
    <meta name="author" content="Phoenixcoded" />

    <!-- Favicon icon -->
    <link rel="icon" href="{{ asset('backend/assets/images/icon.png') }}" type="image/x-icon">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="{{ asset('backend/assets/fonts/fontawesome/css/fontawesome-all.min.css') }}">
    <!-- animation css -->
    <link rel="stylesheet" href="{{ asset('backend/assets/plugins/animation/css/animate.min.css') }}">

    <!-- notification css -->
    <link rel="stylesheet" href="{{ asset('backend/assets/plugins/notification/css/notification.min.css') }}">

    <!-- vendor css -->
    <link rel="stylesheet" href="{{ asset('backend/assets/css/style.css') }}">

</head>

<body class="">
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->

    @include('backend.includes.navbarleft')



    <!-- [ Header ] start -->
    <header class="navbar pcoded-header navbar-expand-lg navbar-light headerpos-fixed">
        <div class="collapse navbar-collapse">
            <a href="#!" class="mob-toggler"></a>
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <div class="main-search open">
                        <div class="input-group">
                            <input type="text" id="m-search" class="form-control" placeholder="Search . . .">
                            <a href="#!" class="input-group-append search-close">
                                <i class="feather icon-x input-group-text"></i>
                            </a>
                            <span class="ms-1 input-group-append search-btn btn btn-primary">
                                <i class="feather icon-search input-group-text"></i>
                            </span>
                        </div>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li>
                    <div class="dropdown drp-user">
                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="icon feather icon-user"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end profile-notification">
                            <div class="pro-head">
                                <img src="{{ asset('backend/assets/images/user/avatar-1.jpg') }}" class="img-radius"
                                    alt="User-Profile-Image">
                                <span>
                                    <span class="text-muted">Free Trial</span>
                                    <span class="h6">doe@company.com</span>
                                </span>
                            </div>
                            <ul class="pro-body">
                                <li><a href="#!" class="dropdown-item"><i class="feather icon-user"></i>
                                        Profile</a>
                                </li>

                                <li><a href="#!" class="dropdown-item"><i class="feather icon-settings"></i>
                                        Settings</a></li>

                                <li><a href="#!" class="dropdown-item"><i
                                            class="feather icon-power text-danger"></i> Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

    </header>
    <!-- [ Header ] end -->


    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <div class="main-body">
                        <div class="page-wrapper">
                            <!-- [ breadcrumb ] start -->
                            <div class="page-header">
                                <div class="page-block">
                                    <div class="row align-items-center">
                                        <div class="col-md-12">
                                            <div class="page-header-title">
                                                <h5>Home</h5>
                                            </div>
                                            <ul class="breadcrumb">
                                                <li class="breadcrumb-item">
                                                    <i class="fa fa-home"></i>
                                                </li>
                                             
                                                @for($i = 2; $i <= count(Request::segments()); $i++)
                                                   <li class="breadcrumb-item">
                                                      <a href="{{ URL::to( implode( '/', array_slice(Request::segments(), 0 ,$i, true)))}}">
                                                         {{strtoupper(Request::segment($i))}}
                                                      </a>
                                                   </li>
                                                @endfor
                                                </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- [ breadcrumb ] end -->

                            <!-- [ Main Content ] start -->
                            <div class="row">
                                @yield('content')
                            </div>

                            <!-- [ Main Content ] end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- [ Main Content ] end -->

    <!-- Required Js -->
    <script src="{{ asset('backend/assets/js/vendor-all.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/pcoded.min.js') }}"></script>

    <!-- am chart js -->
    <script src="{{ asset('backend/assets/plugins/chart-am4/js/core.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/chart-am4/js/charts.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/chart-am4/js/animated.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/chart-am4/js/maps.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/chart-am4/js/worldLow.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/chart-am4/js/continentsLow.js') }}"></script>



    <!-- dashboard-custom js -->
    <script src="{{ asset('backend/assets/js/pages/dashboard-analytics.js') }}"></script>


</body>

</html>
