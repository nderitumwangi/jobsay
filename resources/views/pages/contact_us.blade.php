@extends('layouts.app')
@section('content')
    <header id="kamkaaj-header" class="kamkaaj-header-two">

        <!-- TopStrip -->


    </header>
    <!-- Header -->

    <!-- Sub Header -->
    <div class="kamkaaj-sub-header">
        <span class="kamkaaj-dark-transparent"></span>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Contact Us</h1>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <!-- Sub Header -->

    <!-- Content -->
    <div class="kamkaaj-main-content">

        <!-- Main Section -->
        <div class="kamkaaj-main-section map-full-element">
            <div class="container-fluid">
                <div class="row">

                    <div class="kamkaaj-column-12 px-0">
                        <!-- Map -->
                        <div id="map"></div>
                        <!-- Map -->
                    </div>

                </div>
            </div>
        </div>
        <!-- Main Section -->

        <!-- Main Section -->
        <div class="kamkaaj-main-section contact-service-full">
            <div class="container">
                <div class="row">

                    <div class="kamkaaj-column-12">
                        <!--// Contact List \\-->
                        <div class="contact-service">
                            <ul class="row">
                                <li class="col-md-4">
                                    <div class="contact-service-wrap">
                                        <h2>Want to join us?</h2>
                                        <i class="far fa-user"></i>
                                        <a href="#">Careers</a>
                                        <span class="far fa-user modal-icon-space"></span>
                                    </div>
                                </li>
                                <li class="col-md-4">
                                    <div class="contact-service-wrap">
                                        <h2>Read our latest news</h2>
                                        <i class="far fa-file-word"></i>
                                        <a href="#">Our Blog</a>
                                        <span class="far fa-file-word modal-icon-space"></span>
                                    </div>
                                </li>
                                <li class="col-md-4">
                                    <div class="contact-service-wrap">
                                        <h2>Have questions?</h2>
                                        <i class="far fa-comment-alt"></i>
                                        <a href="#">Our FAQ</a>
                                        <span class="far fa-comment-alt modal-icon-space"></span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!--// Contact List \\-->
                    </div>

                </div>
            </div>
        </div>
        <!-- Main Section -->

        <!-- Main Section -->
        <div class="kamkaaj-main-section">
            <div class="container">
                <div class="row">

                    <div class="kamkaaj-column-12">
                        <!--// Contact Form \\-->
                        <div class="kamkaaj-contact-form">
                            <h2>Send a Message</h2>
                            <form>
                                <ul>
                                    <li>
                                        <label>First Name</label>
                                        <input type="text" value="First Name" onblur="if(this.value == '')
                                        { this.value ='First Name'; }" onfocus="if(this.value =='First Name')
                                        { this.value = ''; }">
                                    </li>
                                    <li>
                                        <label>Last Name</label>
                                        <input type="text" value="Last Name" onblur="if(this.value == '')
                                        { this.value ='Last Name'; }" onfocus="if(this.value =='Last Name')
                                        { this.value = ''; }">
                                    </li>
                                    <li class="kamkaaj-fullwidth"></li>
                                    <li>
                                        <label>Email</label>
                                        <input type="text" value="Email" onblur="if(this.value == '')
                                        { this.value ='Email'; }" onfocus="if(this.value =='Email')
                                        { this.value = ''; }">
                                    </li>
                                    <li>
                                        <label>Subject</label>
                                        <input type="text" value="Subject" onblur="if(this.value == '')
                                        { this.value ='Subject'; }" onfocus="if(this.value =='Subject')
                                        { this.value = ''; }">
                                    </li>
                                    <li class="textarea-element">
                                        <label>Message</label>
                                        <textarea placeholder="Type Words"></textarea>
                                    </li>
                                    <li class="kamkaaj-fullwidth"> <input type="submit" value="Send Message"> </li>
                                </ul>
                            </form>
                        </div>
                        <!--// Contact Form \\-->
                    </div>

                </div>
            </div>
        </div>
        <!-- Main Section -->

        <!-- Main Section -->
        <div class="kamkaaj-main-section kamkaaj-partner-style1-fulltwo">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- FancyTitle -->
                        <div class="kamkaaj-fancy-title-view1">
                            <h2><span class="kamkaaj-color-two">Our <i class="fab fa-black-tie"></i></span> Brands</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Etiam in dui velit Fusce
                                accumsan.</p>
                        </div>
                        <!-- FancyTitle -->
                        <!-- Partner -->
                        <div class="kamkaaj-partner-style1">
                            <ul>
                                <li><a href="#"><img src="extra-images/partner-logo-1.png" alt=""></a></li>
                                <li><a href="#"><img src="extra-images/partner-logo-2.png" alt=""></a></li>
                                <li><a href="#"><img src="extra-images/partner-logo-3.png" alt=""></a></li>
                                <li><a href="#"><img src="extra-images/partner-logo-4.png" alt=""></a></li>
                                <li><a href="#"><img src="extra-images/partner-logo-5.png" alt=""></a></li>
                            </ul>
                        </div>
                        <!-- Partner -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Section -->

    </div>


@endsection