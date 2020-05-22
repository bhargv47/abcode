<!doctype html>
<html lang="en">


<!-- Mirrored from demo.riktheme.com/xvito-2/side-menu-white/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Feb 2020 10:57:45 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->


    <!-- Title -->
    <title>ABCODE ADMIN</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('public/backend/img/core-img/favicon.png') }}">

    <!-- Master Stylesheet [If you remove this CSS file, your file will be broken undoubtedly.] -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500&amp;display=swap">
    <link rel="stylesheet" href="{{ asset('public/backend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('public/backend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/backend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/backend/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('public/backend/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('public/backend/css/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/backend/css/default-assets/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('public/backend/css/typicons.min.html') }}">
    <link rel="stylesheet" href="{{ asset('public/backend/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/backend/css/pe-icon-7-stroke.min.css') }}">

    <link rel="stylesheet" href="{{ asset('public/backend/css/material-design-iconic-font.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/backend/etline/style.css') }}">
    <link rel="stylesheet" href="{{ asset('public/backend/css/style.css') }}">

</head>

<body class="login-area">

    <!-- Preloader -->
    <div id="pagepreloader" class="page-loading clearfix">
        <div class="page-load-inner">
            <div class="preloader-wrap">
                <div class="wrap-2">
                    <div> <img src="{{ asset('public/backend/img/core-img/pre.gif') }}" alt="Preloader"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader -->

    <!-- ======================================
    ******* Page Wrapper Area Start **********
    ======================================= -->
    <div class="main-content- h-100vh">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="hero">
                    <div class="cube"></div>
                    <div class="cube"></div>
                    <div class="cube"></div>
                    <div class="cube"></div>
                    <div class="cube"></div>
                    <div class="cube"></div>
                </div>
                <div class="col-sm-10 col-md-8 col-lg-5">
                    <!-- Middle Box -->
                    <div class="middle-box">
                        <div class="card">
                            <div class="card-body p-4">

                                <!-- Logo -->
                                <h4 class="font-24 mb-30">Login.</h4>

                                <form id="admin-login" method="post">
                                    @if (session('status'))
                                        <div class="alert alert-danger">
                                            {{ session('status') }}
                                        </div>
                                    @endif
                                    @csrf 
                                    <div class="form-group">
                                        <input class="form-control login" name="email" type="email" id="emailaddress" required="" placeholder="Enter your email">
                                    </div>

                                    <div class="form-group">
                                        <a href="forget-password.html" class="text-dark float-right"></a>
                                        <input class="form-control login" type="password" name="password" required="" id="password" placeholder="Enter your password">
                                    </div>

                   
                                    <div class="form-group mb-0">
                                        <button class="btn btn-success btn-block" type="submit"> Log In </button>
                                    </div>

                                </form>

                                <!-- end card -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ======================================
    ********* Page Wrapper Area End ***********
    ======================================= -->

    <!-- Must needed plugins to the run this Template -->
    <script src="{{ asset('public/backend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('public/backend/js/popper.min.js') }}"></script>
    <script src="{{ asset('public/backend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/backend/js/bundle.js') }}"></script>

    <script src="{{ asset('public/backend/js/default-assets/active.js') }}"></script>
    <script src="{{ asset('public/backend/js/page/login.js') }}"></script>

</body>


<!-- Mirrored from demo.riktheme.com/xvito-2/side-menu-white/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Feb 2020 10:57:45 GMT -->
</html>