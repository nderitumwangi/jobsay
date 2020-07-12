<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- SITE META -->
    <title>Employer Dashboard</title>
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
                        <a class="navbar-brand" title="" href="{{route('employer.dashboard')}}">
                            <img src="assets/img/logo.png" alt="logo" class="img-responsive" width="40" height="50">
                                 <span class="logo-name">Jobsay</span></a>
                    </div>
                    <!-- end navbar header -->

                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li><a title="" href="{{route('employer.dashboard')}}">Home</a></li>
                            <li class="dropdown yamm-half hasmenu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-haspopup="true" aria-expanded="false">Employer
                                    <span class="fa fa-angle-down"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{route('employer')}}">Employer Profile</a></li>
                                    <li><a href="{{route('employer.dashboard')}}">Employer Dashboard</a></li>
                                    <li><a href="freelancer-change-password.html">Employer Change Password</a>
                                    </li>
                                    <li><a href="{{route('post_job')}}">Post Job</a></li>
                                    <li><a href="{{route('employer.my.jobs')}}">My Jobs</a></li>
                                </ul>
                            </li>
                            <li class="dropdown yamm-half hasmenu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                   role="button" aria-haspopup="true" aria-expanded="false">Pages
                                    <span class="fa fa-angle-down"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{route('contact')}}">About us</a></li>
                                    <li><a href="{{route('blog')}}">Testimonials</a></li>
                                    <li><a href="{{route('contact')}}">Contact Page</a></li>
                                </ul>
                            </li>
                            <li><a title="" href="{{route('blog.view')}}">Blog</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                         <!--  <li><a href=""><span class=""></span></a></li> -->
                            <li><a class="btn btn-primary"  title="" href="{{ route('post_job') }}">Post Job</a></li>
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
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h4>Contact</h4>
                        </div><!-- end widget-title -->
                        <div class="section footer">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-2 col-sm-12">
                                        <div class="widget clearfix">
                                            <div class="widget-title">
                                                <h4>Contact</h4>
                                            </div><!-- end widget-title -->


                                            <div class="link-widget">
                                                <ul class="check">
                                                    <li><a href="#">Live Chat Support</a></li>
                                                    <li><a href="#">Email Newsletter</a></li>
                                                    <li><a href="#">Follow on Social</a></li>
                                                    <li><a href="#">Subscribe to Youtube</a></li>
                                                </ul><!-- end check -->
                                            </div><!-- end link-widget -->
                                        </div>
                                    </div><!-- end col -->

                                    <div class="col-md-2 col-sm-12">
                                        <div class="widget clearfix">
                                            <div class="widget-title">
                                                <h4>Network</h4>
                                            </div><!-- end widget-title -->

                                            <div class="link-widget">
                                                <ul class="check">
                                                    <li><a href="job-search.html">Job Search</a></li>
                                                    <li><a href="{{route('post_job')}}">Add a Job</a></li>
                                                    <li><a href="employer-dashboard.html">Employer Dashboard</a></li>
                                                    <li><a href="employer-edit-profile.html">Employer Edit Profile</a></li>
                                                    <li><a href="freelancer-add-resume.html">View a Resume / CV</a></li>
                                                </ul><!-- end check -->
                                            </div><!-- end link-widget -->
                                        </div>
                                    </div><!-- end col -->

                                    <div class="col-md-2 col-sm-12">
                                        <div class="widget clearfix">
                                            <div class="widget-title">
                                                <h4>Our Pages</h4>
                                            </div><!-- end widget-title -->

                                            <div class="link-widget">
                                                <ul class="check">
                                                    <li><a href="{{route('contact')}}">About us</a></li>
                                                    <li><a href="{{route('blog')}}">Testimonials</a></li>
                                                </ul><!-- end check -->
                                            </div><!-- end link-widget -->
                                        </div>
                                    </div><!-- end col -->

                                    <div class="col-md-2 col-sm-12">
                                        <div class="widget clearfix">
                                            <div class="widget-title">
                                                <h4>Company</h4>
                                            </div><!-- end widget-title -->

                                            <div class="link-widget">
                                                <ul class="check">
                                                    <li><a href="#">About YourJob</a></li>
                                                    <li><a href="{{route('contact')}}">Contact Us</a></li>
                                                </ul><!-- end check -->
                                            </div><!-- end link-widget -->
                                        </div>
                                    </div><!-- end col -->

                                    <div class="col-md-4 col-sm-12">
                                        <div class="widget clearfix">
                                            <div class="widget-title">
                                                <img class="flogo" src="images/flogo.png" alt="">
                                            </div><!-- end widget-title -->

                                            <div class="text-widget">
                                                <p>This is a professional job portal system,
                                                    job search and freelancer website system.</p>

                                                <ul class="list-inline social-small">
                                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                </ul>
                                            </div><!-- end text-widget -->
                                        </div>
                                    </div><!-- end col -->
                                </div><!-- end row -->
                            </div><!-- end container -->
                        </div><!-- end footer -->

                        <div id="sitefooter-wrap" class="stickyfooter">
                            <div id="sitefooter" class="container">
                                <div id="copyright" class="row">
                                    <div class="col-md-6 col-sm-12 text-left">
                                        <p>Jobsay ® is a designed and registered trademark of
                                            <a href="http://psdconverthtml.com/">dan.tecksol.co.ke</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="contactme hidden-xs">
                            <a href="page-contact.html">
                                <img src="upload/me.jpg" class="img-circle" alt=""
                                     data-toggle="tooltip" data-placement="top" title="Need Help?">
                                <span class="oi" data-glyph="chat"></span>
                            </a>
                        </div>

                        <div class="dmtop"><i class="fa fa-angle-up"></i></div>

                        <div class="modal fade" id="loginmodal" tabindex="-1" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <button type="button" class="close closebtn" data-dismiss="modal"
                                            aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <div class="modal-body">
                                        <div class="widget clearfix">
                                            <div class="post-padding item-price">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="content-title">
                                                            <h4><i class="fa fa-lock"></i> Login Account</h4>
                                                        </div><!-- end widget-title -->

                                                        <form id="submit" class="submit-form">
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12">
                                                                    <input type="text" class="form-control"
                                                                           placeholder="Username or Email">
                                                                    <input type="password" class="form-control"
                                                                           placeholder="*******">
                                                                    <button class="btn btn-primary">Login</button>
                                                                </div>
                                                            </div><!-- end row -->
                                                        </form>
                                                    </div><!-- end col -->

                                                    <div class="col-md-6">
                                                        <div class="content-title">
                                                            <h4> Have no account?</h4>
                                                        </div><!-- end widget-title -->

                                                        <p class="text-capitalize">Jobsay is here to help achieve your dream career</p>
                                                        <a href="#" class="btn btn-custom">Register Account</a>
                                                    </div><!-- end col -->
                                                </div><!-- end row -->
                                            </div><!-- end newsletter -->
                                        </div><!-- end post-padding -->
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                    </div><!-- end wrapper -->
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
