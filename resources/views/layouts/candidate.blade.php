<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- SITE META -->
    <title>Candidate Dashboard</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <!-- FAVICONS -->
    <link rel="shortcut icon" href="{{asset('dashboard/images/favicon.ico')}}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{asset('dashboard/images/apple-touch-icon.png')}}">
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('dashboard/images/apple-touch-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('dashboard/images/apple-touch-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('dashboard/images/apple-touch-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('dashboard/images/apple-touch-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('dashboard/images/apple-touch-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('dashboard/images/apple-touch-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('dashboard/images/apple-touch-icon-152x152.png')}}">

    <!-- BOOTSTRAP STYLES -->
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/css/bootstrap.min.css')}}">
    <!-- TEMPLATE STYLES -->
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/style.css')}}">
    <!-- RESPONSIVE STYLES -->
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/css/responsive.css')}}">
    <!-- COLORS -->
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/css/colors.css')}}">

    <!-- CUSTOM STYLES -->
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/css/custom.css')}}">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

<!-- PRELOADER -->
<div class="cssload-container">
    <div class="cssload-loader"></div>
</div>
<!-- end PRELOADER -->

<!-- START SITE -->
<div id="wrapper">
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 center-xs">
                    <p class="topbar-text">
                        <strong><i class="fa fa-phone"></i></strong> +254 706 229 506&nbsp;&nbsp;
                        <strong><i class="fa fa-envelope-o"></i></strong>
                        <a href="dantetrejjo@gmail.com">info@yoursite.com</a>
                    </p>
                </div><!-- end col -->

                <div class="col-md-6 col-sm-12 center-xs text-right">
                    <div class="social-topbar">
                        <ul class="list-inline social-small">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        </ul>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end topbar -->

    <header class="header">
        <div class="container-fluid">
            <nav class="navbar navbar-default yamm">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed"
                                data-toggle="collapse" data-target="#navbar"
                                aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" title="" href="index.html">
                            <img src="images/logo.png" alt="" class="img-responsive"></a>
                    </div>
                    <!-- end navbar header -->

                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li><a title="" href="{{route('candidate.dashboard')}}">Home</a></li>
                            <li class="dropdown yamm-half hasmenu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-haspopup="true" aria-expanded="false">Candidate
                                    <span class="fa fa-angle-down"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="freelancer-profile.html">Candidate Profile</a></li>
                                    <li><a href="freelancer-edit-resume.html">Candidate Edit Profile</a></li>
                                    <li><a href="freelancer-change-password.html">Candidate Change Password</a>
                                    </li>
                                    <li><a href="{{route('view_job')}}">View Job</a></li>
                                    <li><a href="{{route('job')}}">My Jobs</a></li>
                                </ul>
                            </li>
                            <li class="dropdown yamm-half hasmenu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                   role="button" aria-haspopup="true" aria-expanded="false"> Curriculum Vitae
                                    <span class="fa fa-angle-down"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{route('upload')}}">Upload CV</a></li>
                                    <li><a href="{{route('view')}}">View CV</a></li>

                                </ul>
                            </li>
                            <li><a title="" href="#">Blog</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="{{route('home')}}"><span class="fa fa-user"></span>{{ $user->name }}</a>
                            <li><a class="btn btn-primary" title="" href="{{ route('post_job') }}">View Job</a></li>
                            <li><a class="btn btn-danger" title="" href="{{ route('employer.logout') }}">Logout</a></li>
                        </ul>
                        <!-- end dropdown -->
                    </div>
                    <!--/.nav-collapse -->
                </div>
                <!--/.container-fluid -->
            </nav>
            <!-- end nav -->
        </div>
        <!-- end container -->
    </header>
    <!-- end header -->
    @yield('content')
    <div class="section footer">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-12">

                    <!-- /END SITE -->

                    <!-- ******************************************
                    DEFAULT JAVASCRIPT FILES
                    ********************************************** -->
                    <script src="{{ asset('dashboard/js/jquery.js') }}"></script>
                    <script src="{{ asset('dashboard/js/bootstrap.min.js') }}"></script>
                    <script src="{{ asset('dashboard/js/all.js') }}"></script>
                    <script src="{{ asset('dashboard/js/custom.js') }}"></script>


                    <!-- ********
                     ADD YOUR CUSTOM JAVASCRIPT FILES HERE
                     ************************** -->
                    <script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places"></script>
                    <!-- MAP & CONTACT -->
                    <script src="{{ asset('dashboard/js/map-job.js') }}"></script>
                    <script src="{{ asset('dashboard/js/map-upload.js') }}"></script>
                </div>
            </div>
        </div>
    </div>
</div>
