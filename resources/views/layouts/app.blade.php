<!doctype html>
<html lang="zxx">
<head>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>JOBSAY </title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome-all.css')}}">
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('css/slick-slider.css')}}">
    <link rel="stylesheet" href="{{asset('css/fancybox.css')}}">
    <link rel="stylesheet" href="{{asset('css/smartmenus.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/plugin.css')}}">
    <link rel="stylesheet" href="{{asset('css/color.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">

</head>

<body>

<div class="kamkaaj-wrapper">
    <!-- Header -->
    <header id="kamkaaj-header" class="kamkaaj-header-two">

        <!-- TopStrip -->
        <div class="kamkaaj-top-strip">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p><i class="far fa-envelope-open"></i>
                            <a href="https://mail.google.com/mail/u/0/?tab=wm#inbox">danieltrejjo1@gmail.com</a>
                        </p>
                        <p><i class="fa-phone"></i> +254 706 229 506</p>
                        <ul class="kamkaaj-stripuser">
                            <li><a href="{{ route('login') }}">
                                    <i class="icon-flat kamkaaj-user-plus"></i> Login</a>
                            </li>

                            <li><a href="{{route('register')}}"  >
                                    <i class="icon-flat kamkaaj-multimedia"></i> Signup</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- TopStrip -->

        <!-- MainHeader -->
        <div class="kamkaaj-header-main">
            <span class="kamkaaj-header-transparent"></span>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{route('index')}}" class="kamkaaj-logo"><img src="assets/img/logo.png"
                                         class="header-logo"/> <span
                                    class="logo-name">Jobsay</span>
                        </a>
                        <div class="kamkaaj-right-head">
                                <span class="kamkaaj-menu-link">
                                    <span class="menu-bar"></span>
                                    <span class="menu-bar"></span>
                                    <span class="menu-bar"></span>
                                </span>
                            <nav id="main-nav">
                                <ul id="main-menu" class="sm sm-blue">
                                    <li><a href="{{route('index')}}">Home</a>
                                    </li>
                                    <li><a href="{{route('job')}}">Available Jobs</a>
                                    </li>
                                    <li><a href="{{route('employer')}}">Employers</a>
                                    </li>
                                    <li><a href="{{route('candidate')}}">Candidates</a>
                                    </li>
                                    <li><a href="{{route('blog')}}">Blog</a>

                                    </li>
                                    <li><a href="{{route('contact')}}">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                            <a href="{{route('login')}}" class="kamkaaj-header-btn">Post New Job</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- MainHeader -->

    </header>

    @yield('content')
    <footer id="kamkaaj-footer" class="kamkaaj-footer-two">

        <!-- Call To Action -->
        <div class="kamkaaj-footer-action">
            <div class="container">
                <h2>Jobsay Recruiting helps you to find your dream job!</h2>
                <a href="{{route('job')}}">find a job</a>
            </div>
        </div>
        <!-- Call To Action -->

        <!-- Footer Widget -->
        <div class="kamkaaj-footer-widget">
            <div class="container">
                <div class="row">
                    <!-- Widget Footer About -->
                    <aside class="widget col-md-4 widget_footer_about">
                        <a href="index-eight.html" class="kamkaaj-logo"><img src="assets/img/logo.png"
                                                                             class="header-logo"/> <span
                                    class="logo-name">Jobsay</span>
                        </a>
                        <p>Jobsay Recruiting helps you to find your dream job.</p>
                        <ul>
                            <b>
                                <li><span>E-mail:</span> <a href="#">dantetrejjo1@gmail.com</a></li>
                                <li><span>Phone:</span> (254) 706-229 506</li>
                                <li><span>Address:</span> 504-Nairobi</li>
                            </b>
                        </ul>
                    </aside>
                    <!-- Widget Footer About -->
                    <!-- Widget Nav -->
                    <aside class="widget col-md-2 widget_nav_menu">
                        <div class="footer-widget-title"><h2>Jobs</h2></div>
                        <ul>
                            <li><a href="{{route('contact')}}">Contact us</a></li>
                            <li><a href="{{route('job')}}">Find a job</a></li>
                            <li><a href="#{{route('job')}}">Popular jobs</a></li>
                        </ul>
                    </aside>
                    <!-- Widget Nav -->
                    <!-- Widget Nav -->
                    <aside class="widget col-md-2 widget_nav_menu">
                        <div class="footer-widget-title"><h2>Job Seekers</h2></div>
                        <ul>
                            <li><a href="#">CV Writing</a></li>
                            <li><a href="{{route('blog')}}">Success Stories</a></li>
                        </ul>
                    </aside>
                    <!-- Widget Nav -->
                    <!-- Widget Nav -->
                    <aside class="widget col-md-4 widget_newslatter">
                        <div class="footer-widget-title"><h2>Newsletter</h2></div>
                        <p>Jobsay helps you get your dream job. Have your needs considered at Jobsay.</p>
                        <form>
                            <input type="text" placeholder="Your e-mail">
                            <input type="submit" value="Subscribe" class="kamkaaj-bgcolor-two">
                        </form>
                    </aside>
                    <!-- Widget Nav -->
                </div>
            </div>
        </div>
        <!-- Footer Widget -->

        <!-- CopyRight -->
        <div class="kamkaaj-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p>Terms & Conditions Apply. Copyrights © DANTE 2020 - By <a href="layout.index">Daniel</a></p>
                        <ul class="kamkaaj-copyright-social">
                            <li><a href="#" class="fab fa-facebook-f"></a></li>
                            <li><a href="#" class="fab fa-twitter"></a></li>
                            <li><a href="#" class="fab fa-linkedin-in"></a></li>
                            <li><a href="#" class="fab fa-dribbble"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- CopyRight -->

    </footer>
    <!-- Footer -->
</div>

<!-- jQuery -->
<script src="{{asset('script/jquery.js')}}"></script>
<script src="{{asset('script/popper.min.js')}}"></script>
<script src="{{asset('script/bootstrap.min.js')}}"></script>
<script src="{{asset('script/slick.slider.min.js')}}"></script>
<script src="{{asset('script/fancybox.min.js')}}"></script>
<script src="{{asset('script/isotope.min.js')}}"></script>
<script src="{{asset('script/smartmenus.min.js')}}"></script>
<script src="{{asset('script/progressbar.js')}}"></script>
<script src="{{asset('https://maps.googleapis.com/maps/api/js')}}"></script>
<script src="{{asset('script/functions.js')}}"></script>


<!-- Login Modal Box -->
<div class="modal fade kamkaaj-loginmodal" id="twoeModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">

        <div class="kamkaaj-login-box kamkaaj-login-box-top">
            <a href="#" class="kamkaaj-cart-box-close" data-dismiss="modal" aria-label="Close">
                <i class="fa fa-times"></i></a>
            <div class="kamkaaj-login-box-inner">
                <h2>Login</h2>
                <ul>
                    <li>
                        <label>Email</label>
                        <input type="text" value="Enter your email" onblur="if(this.value == '')
                        { this.value ='Enter your email'; }" onfocus="if(this.value =='Enter your email')
                        { this.value = ''; }">
                        <i class="input-icon kamkaaj-icon kamkaaj-downarrow"></i>
                    </li>
                    <li>
                        <label>Password</label>
                        <input type="text" value="Enter your Password" onblur="if(this.value == '')
                        { this.value ='Enter your Password'; }" onfocus="if(this.value =='Enter your Password')
                        { this.value = ''; }">
                        <i class="input-icon kamkaaj-icon kamkaaj-downarrow"></i>
                    </li>
                    <li><span class="kamkaaj-login-info">Don't have an account? <a href="#">Sign up!</a></span></li>
                    <li><input type="submit" value="Sign In"></li>
                </ul>
            </div>
        </div>

        <div class="kamkaaj-login-box kamkaaj-register-box-wrap">
            <a href="#" class="kamkaaj-cart-box-close" data-dismiss="modal" aria-label="Close">
                <i class="fa fa-times"></i></a>
            <div class="kamkaaj-login-box-inner">
                <h2>Register</h2>
                <ul>
                    <li>
                        <label>Name</label>
                        <input type="text" value="Enter your name" onblur="if(this.value == '')
                        { this.value ='Enter your name'; }" onfocus="if(this.value =='Enter your name')
                        { this.value = ''; }">
                        <i class="input-icon kamkaaj-icon kamkaaj-downarrow"></i>
                    </li>
                    <li>
                        <label>Email</label>
                        <input type="text" value="Enter your email" onblur="if(this.value == '')
                        { this.value ='Enter your email'; }" onfocus="if(this.value =='Enter your email')
                        { this.value = ''; }">
                        <i class="input-icon JOBSAY-icon JOBSAY-downarrow"></i>
                    </li>
                    <li>
                        <label>Password</label>
                        <input type="text" value="Enter your password" onblur="if(this.value == '')
                        { this.value ='Enter your password'; }" onfocus="if(this.value =='Enter your password')
                        { this.value = ''; }">
                        <i class="input-icon JOBSAY-icon kamkaaj-downarrow"></i>
                    </li>
                    <li><input type="submit" value="Sign Up"></li>
                    <li> <span class="JOBSAY-login-info">Already have an account?
                            <a href="#">Sign in!</a></span></li>
                </ul>
            </div>
        </div>

    </div>
</div>
<!-- Login Modal Box -->

</body>
</html>
