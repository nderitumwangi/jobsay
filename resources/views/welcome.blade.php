@extends('layouts.app')
@section('content')

    <!-- Banner -->
    <div class="kamkaaj-banner-style1">

        <div class="kamkaaj-banner-style1-layer">
            <img src="{{asset('images/2.jpg')}}" alt="">
            <span class="kamkaaj-banner-style1-transparent kamkaaj-bgcolor"></span>
            <div class="kamkaaj-banner-style1-caption kamkaaj-banner-style1-caption-left">
                <div class="container">

                    <div class="kamkaaj-banner-search-style1">
                        <h1>Search between more them 5,000 open jobs.</h1>
                        <p>Get employed easily by applying to Jobsay jobs centre
                        and uploading your CV.</p>
                        <form>
                            <ul>
                                <li><input value="Job Title Keywords" onblur="if(this.value == '')
                                { this.value ='Job Title Keywords'; }" onfocus="if(this.value =='Job Title Keywords')
                                { this.value = ''; }" type="text"></li>
                                <li><input value="City, State or ZIP" onblur="if(this.value == '')
                                { this.value ='City, State or ZIP'; }" onfocus="if(this.value =='City, State or ZIP')
                                { this.value = ''; }" type="text"></li>
                                <li>
                                    <div class="kamkaaj-select-style">
                                        <select>
                                            <option>Select Category</option>
                                            <option>Accounting / Finance</option>
                                            <option>Automotive Jobs</option>
                                            <option>Construction / Facilities</option>
                                            <option>Education Training</option>
                                            <option>Health Care</option>
                                            <option>Non-Skilled</option>
                                            <option>Restaurant / Food Services</option>
                                        </select>
                                    </div>
                                </li>
                                <li class="submit-section"><i class="icon-flat kamkaaj-search"></i>
                                    <input type="submit" value=""></li>
                            </ul>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <div class="kamkaaj-banner-style1-layer">
            <img src="extra-images/1.png" alt="">
            <span class="kamkaaj-banner-style1-transparent kamkaaj-bgcolor"></span>
            <div class="kamkaaj-banner-style1-caption">
                <div class="container">
                    <h1>Starting from Dream Jobs</h1>
                    <br>
                    <h1><p>The system aims at: Developing an online search portal for job seekers,<br>
                        Facilitating the company to get the best candidate available.<br>
                        </p>
                    </h1>

                    <br>
                    <a href="#" class="kamkaaj-banner-style1-btn">Search Jobs</a>
                </div>
            </div>
        </div>

    </div>
    <span class="kamkaaj-banner-style1-shape"></span>
    <!-- Banner -->

    <!-- Content -->
    <div class="kamkaaj-main-content">

        <!-- Main Section -->
        <div class="kamkaaj-main-section kamkaaj-categories-style2-full">
            <div class="container">
                <div class="row">

                    <div class="col-md-12">

                        <!-- FancyTitle -->
                        <div class="kamkaaj-fancy-title-view1">
                            <h2>Top Employers Here</h2>
                            <p>Jobsay has more than 1000 employers who offer best job positions and
                                favorable salaries to their employees.</p>
                        </div>
                        <!-- FancyTitle -->

                        <!-- Categories -->
                        <div class="kamkaaj-categories kamkaaj-categories-style2">
                            <ul class="row">
                                <li class="col-md-3">
                                    <a href="#">
                                        <span class="kamkaaj-categories-style2-counter">01</span>
                                        <img src="extra-images/partner-logo-1.png" alt="">
                                        <span class="kamkaaj-categories-style2-inner">
                                                <span>Open Vacancies</span>
                                                <small>(5)</small>
                                            </span>
                                    </a>
                                </li>
                                <li class="col-md-3">
                                    <a href="#">
                                        <span class="kamkaaj-categories-style2-counter">02</span>
                                        <img src="extra-images/partner-logo-2.png" alt="">
                                        <span class="kamkaaj-categories-style2-inner">
                                                <span>Open Vacancies</span>
                                                <small>(10)</small>
                                            </span>
                                    </a>
                                </li>
                                <li class="col-md-3">
                                    <a href="#">
                                        <span class="kamkaaj-categories-style2-counter">03</span>
                                        <img src="extra-images/partner-logo-3.png" alt="">
                                        <span class="kamkaaj-categories-style2-inner">
                                                <span>Open Vacancies</span>
                                                <small>(4)</small>
                                            </span>
                                    </a>
                                </li>
                                <li class="col-md-3">
                                    <a href="#">
                                        <span class="kamkaaj-categories-style2-counter">04</span>
                                        <img src="extra-images/partner-logo-4.png" alt="">
                                        <span class="kamkaaj-categories-style2-inner">
                                                <span>Open Vacancies</span>
                                                <small>(25)</small>
                                            </span>
                                    </a>
                                </li>
                                <li class="col-md-3">
                                    <a href="#">
                                        <span class="kamkaaj-categories-style2-counter">05</span>
                                        <img src="extra-images/partner-logo-4.png" alt="">
                                        <span class="kamkaaj-categories-style2-inner">
                                                <span>Open Vacancies</span>
                                                <small>(50)</small>
                                            </span>
                                    </a>
                                </li>
                                <li class="col-md-3">
                                    <a href="#">
                                        <span class="kamkaaj-categories-style2-counter">06</span>
                                        <img src="extra-images/partner-logo-3.png" alt="">
                                        <span class="kamkaaj-categories-style2-inner">
                                                <span>Open Vacancies</span>
                                                <small>(7)</small>
                                            </span>
                                    </a>
                                </li>
                                <li class="col-md-3">
                                    <a href="#">
                                        <span class="kamkaaj-categories-style2-counter">07</span>
                                        <img src="extra-images/partner-logo-2.png" alt="">
                                        <span class="kamkaaj-categories-style2-inner">
                                                <span>Open Vacancies</span>
                                                <small>(1)</small>
                                            </span>
                                    </a>
                                </li>
                                <li class="col-md-3">
                                    <a href="#">
                                        <span class="kamkaaj-categories-style2-counter">08</span>
                                        <img src="extra-images/partner-logo-1.png" alt="">
                                        <span class="kamkaaj-categories-style2-inner">
                                                <span>Open Vacancies</span>
                                                <small>(11)</small>
                                            </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- Categories -->

                        <div class="kamkaaj-more-spacer"></div>
                        <div class="kamkaaj-main-load-btn"><a href="{{route('employer')}}">Load More</a></div>

                        <!-- <div class="kamkaaj-more-view1-btn"><a href="#">Load More</a></div> -->

                    </div>

                </div>
            </div>
        </div>
        <!-- Main Section -->

        <!-- Main Section -->
        <div class="kamkaaj-main-section kamkaaj-services-style2-full">
            <div class="container">
                <div class="row">

                    <div class="col-md-12">

                        <!-- FancyTitle -->
                        <div class="kamkaaj-fancy-title-view1">
                            <h2>Our Recruitment</h2>
                            <p>Jobsay offers recruitment online by allowing employers to post jobs
                                online and also employees applying for available jobs and uploading
                                their Curriculum Vitae.</p>
                        </div>
                        <!-- FancyTitle -->

                        <!-- Services -->
                        <div class="kamkaaj-services kamkaaj-services-style2">
                            <ul class="row">
                                <li class="col-md-4">
                                    <i class="icon-flat kamkaaj-view"></i>
                                    <h2>Our Vision</h2>
                                    <p>Quality and timely services for sustainable solutions by automated
                                        and specific methods</p>
                                </li>
                                <li class="col-md-4">
                                    <i class="icon-flat kamkaaj-target"></i>
                                    <h2>Our Mission</h2>
                                    <p>To provide services and facilities to turn our vision into
                                         sustainable reality</p>
                                </li>
                                <li class="col-md-4">
                                    <i class="icon-flat kamkaaj-diamond"></i>
                                    <h2>Our Values</h2>
                                    <p>Being honest and forthright in everything we do while
                                        understand and the contributions</p>
                                </li>
                            </ul>
                        </div>
                        <!-- Services -->

                    </div>

                </div>
            </div>
        </div>
        <!-- Main Section -->

        <!-- Main Section -->
        <div class="kamkaaj-main-section kamkaaj-jobs-listing-view1-full">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- FancyTitle -->
                        <div class="kamkaaj-fancy-title-view1">
                            <h2>Featured Jobs</h2>
                            <p>Jobsay jobs centre provides you with the following job positions from different employers.</p>
                        </div>
                        <!-- FancyTitle -->
                        <!-- Jobs Listing's -->

                        <div class="kamkaaj-jobs kamkaaj-jobs-listing-view1">
                            @if($jobs->count() >0)
                            <ul class="row">
                                <?php
                                $count = 1;
                                ?>
                                @foreach($jobs as $job)
                                <li class="col-md-12">
                                    <div class="kamkaaj-table">
                                        <div class="kamkaaj-table-row">
                                            <div class="kamkaaj-table-cell"><a href="#"
                                        class="kamkaaj-jobs-listing-view1-thumb">
                                                    <img src="{{ asset('extra-images/' .$job->company_logo) }}" alt=""></a></div>
                                            <div class="kamkaaj-table-cell">
                                                <div class="kamkaaj-jobs-listing-view1-wrap2">
                                                    <h1><a href="#">{{ $job->job_title }}</a></h1>

                                                   <h2><a href="#">{{ $job->company_name }}</a></h2>

                                                    <ul class="kamkaaj-jobs-listing-view1-options">
                                                        <li><i class="icon-flat kamkaaj-map-pin-fill"></i>
                                                            {{ $job->job_location }}

                                                        </li>
                                                        <li><i class="icon-flat kamkaaj-calendar"></i>
                                                            {{ $job->created_at }}
                                                        </li>
                                                        <li><i class="icon-flat kamkaaj-filter-tool-black-shape"></i>
                                                            <a href="#">{{ $job->job_category }}</a></li>
                                                        <li><i class="fa fa-heart"></i> <a href="#">Like Job</a></li>

                                                    </ul>

                                                </div>
                                                <a class=" btn-block  btn-lg " href=" {{route('login')}}" >Login to Apply</a>
                                            </div>

                                            <div class="kamkaaj-table-cell">
                                                <a href="#" class="kamkaaj-job-type-btn"><span>{{ $job->job_type }}</span></a>
                                            </div>

                                        </div>
                                    </div>
                                </li>
                               @endforeach
                            </ul>
                            @else
                                <div class="alert alert-danger alert-dismissible" role="alert">
                                    No records found, try again later!
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                        </div>

                        <!-- Jobs Listing's -->
                        <div class="kamkaaj-more-spacer"></div>
                        <div class="kamkaaj-main-load-btn"><a href="{{route('job')}}">Browse All Jobs</a></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Section -->

        <!-- Main Section -->
        <div class="kamkaaj-main-section kamkaaj-categories-view1-full">
            <span class="kamkaaj-light-transparent"></span>
            <div class="container">
                <div class="row">

                    <div class="col-md-12">

                        <!-- FancyTitle -->
                        <div class="kamkaaj-fancy-title-view1 kamkaaj-fancy-title-view1-color">
                            <h2>Top Categories</h2>
                            <p>Some of the <b>top categories</b> of most available job vacancies are listed below.</p>
                        </div>
                        <!-- FancyTitle -->

                        <!-- Categories List -->
                        <div class="kamkaaj-categories kamkaaj-categories-view1">
                            <ul class="row">
                                <li class="col-md-4">
                                    <div class="kamkaaj-categories-view1-wrap">
                                        <i class="icon-flat kamkaaj-accounting"></i>
                                        <a href="#">Accounting / Finance</a>
                                        <small>(3 Open Vacancies)</small>
                                        <span>01</span>
                                    </div>
                                </li>
                                <li class="col-md-4">
                                    <div class="kamkaaj-categories-view1-wrap">
                                        <i class="icon-flat kamkaaj-fast-food"></i>
                                        <a href="#">Restaurant Services</a>
                                        <small>(2 Open Vacancies)</small>
                                        <span>02</span>
                                    </div>
                                </li>
                                <li class="col-md-4">
                                    <div class="kamkaaj-categories-view1-wrap">
                                        <i class="icon-flat kamkaaj-business"></i>
                                        <a href="#">Sales & Marketing</a>
                                        <small>(13 Open Vacancies)</small>
                                        <span>03</span>
                                    </div>
                                </li>
                                <li class="col-md-4">
                                    <div class="kamkaaj-categories-view1-wrap">
                                        <i class="icon-flat kamkaaj-antenna"></i>
                                        <a href="#">Telecommunications</a>
                                        <small>(22 Open Vacancies)</small>
                                        <span>04</span>
                                    </div>
                                </li>
                                <li class="col-md-4">
                                    <div class="kamkaaj-categories-view1-wrap">
                                        <i class="icon-flat kamkaaj-degree-cap"></i>
                                        <a href="#">Education Training</a>
                                        <small>(18 Open Vacancies)</small>
                                        <span>05</span>
                                    </div>
                                </li>
                                <li class="col-md-4">
                                    <div class="kamkaaj-categories-view1-wrap">
                                        <i class="icon-flat kamkaaj-car"></i>
                                        <a href="#">Automotive Jobs</a>
                                        <small>(4 Open Vacancies)</small>
                                        <span>06</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- Categories List -->

                        <div class="kamkaaj-more-spacer"></div>
                        <div class="kamkaaj-main-load-btn"><a href="{{route('job')}}">Browse All Categories</a></div>

                    </div>

                </div>
            </div>
        </div>
        <!-- Main Section -->

        <!-- Main Section -->
        <div class="kamkaaj-main-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <!-- FancyTitle -->
                        <div class="kamkaaj-fancy-title-view1">
                            <h2>Popular Candidates</h2>
                            <p>Jobsay management is pleased to have the following as successful candidates
                                who have been grateful as they achieved their dream careers through the system.</p>
                        </div>
                        <!-- FancyTitle -->

                        <!-- Candidate Grid -->
                        <div class="kamkaaj-candidates kamkaaj-popular-candidates">
                            <ul class="row">
                                <li class="col-md-3">
                                    <div class="kamkaaj-popular-candidates-wrap">
                                        <figure><a href="#"><img src="images/3.jpg" alt=""></a>
                                        </figure>
                                        <div class="kamkaaj-popular-candidates-text">
                                            <h2><a href="#" tabindex="-1">Daniel James</a></h2>
                                            <span>Creative Director</span>
                                            <small>Salary: $78000</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-3">
                                    <div class="kamkaaj-popular-candidates-wrap">
                                        <figure><a href="#"><img src="extra-images/candidates-grid-2.jpg"
                                                                 alt=""></a></figure>
                                        <div class="kamkaaj-popular-candidates-text">
                                            <h2><a href="#" tabindex="-1">Adam Khoo </a></h2>
                                            <span>Creative Director</span>
                                            <small>Salary: $120000</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-3">
                                    <div class="kamkaaj-popular-candidates-wrap">
                                        <figure><a href="#"><img src="images/2.jpg"
                                                                 alt=""></a></figure>
                                        <div class="kamkaaj-popular-candidates-text">
                                            <h2><a href="#" tabindex="-1">Mercy Lee</a></h2>
                                            <span>Creative Director</span>
                                            <small>Salary: $7000</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-3">
                                    <div class="kamkaaj-popular-candidates-wrap">
                                        <figure><a href="#"><img src="extra-images/candidates-grid-4.jpg" alt=""></a>
                                        </figure>
                                        <div class="kamkaaj-popular-candidates-text">
                                            <h2><a href="#" tabindex="-1">Samantha Lucy</a></h2>
                                            <span>Creative Director</span>
                                            <small>Salary: $10000</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-3">
                                    <div class="kamkaaj-popular-candidates-wrap">
                                        <figure><a href="#"><img src="images/5.jpg"
                                                                 alt=""></a></figure>
                                        <div class="kamkaaj-popular-candidates-text">
                                            <h2><a href="#" tabindex="-1">Daniel Trejjo</a></h2>
                                            <span>Creative Director</span>
                                            <small>Salary: $9800</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-3">
                                    <div class="kamkaaj-popular-candidates-wrap">
                                        <figure><a href="#"><img src="images/4.jpg"
                                                                 alt=""></a></figure>
                                        <div class="kamkaaj-popular-candidates-text">
                                            <h2><a href="#" tabindex="-1">Peter Moore</a></h2>
                                            <span>Creative Director</span>
                                            <small>Salary: $7500</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-3">
                                    <div class="kamkaaj-popular-candidates-wrap">
                                        <figure><a href="#"><img src="images/6.jpg"
                                                                 alt=""></a></figure>
                                        <div class="kamkaaj-popular-candidates-text">
                                            <h2><a href="#" tabindex="-1">Vidal Arturo</a></h2>
                                            <span>Creative Director</span>
                                            <small>Salary: $6000</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-3">
                                    <div class="kamkaaj-popular-candidates-wrap">
                                        <figure><a href="#"><img src="images/7.jpg"
                                                                 alt=""></a></figure>
                                        <div class="kamkaaj-popular-candidates-text">
                                            <h2><a href="#" tabindex="-1">Robert Surgee</a></h2>
                                            <span>Creative Director</span>
                                            <small>Salary: $8000</small>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- Candidate Grid -->

                    </div>
                </div>
            </div>
        </div>
        <!-- Main Section -->

        <!-- Main Section -->
        <div class="kamkaaj-main-section kamkaaj-testimonial-veiw1-fulltwo">
            <span class="kamkaaj-light-transparent"></span>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Testimonial -->
                        <div class="kamkaaj-testimonial-veiw1">
                            <div class="kamkaaj-testimonial-veiw1-layer">
                                <p>Jobsay has helped many people to search for jobs at their comfort locations.
                                    Continue with the same spirit Jobsay!</p>
                                <img src="extra-images/testimonial-2.jpg" alt="">
                                <h2>Richard Gunah</h2>
                                <span>Nakuru, KENYA</span>
                            </div>
                            <div class="kamkaaj-testimonial-veiw1-layer">
                                <p>Good work! Not only helping the jobless to get better jobs that suit them,
                                but also assisting the employers get qualified workforce. Viva Viva Jobsay!</p>
                                <img src="extra-images/testimonial-1.jpg" alt="">
                                <h2>Rose Scott</h2>
                                <span>Mombasa, KENYA</span>
                            </div>
                            <div class="kamkaaj-testimonial-veiw1-layer">
                                <p>Thanks Jobsay for good responsibility that you play in nation building. Very
                                    responsinsive site and easy to use. Keep it up!</p>
                                <img src="extra-images/testimonial-3.jpg" alt="">
                                <h2>Frack Ferguson</h2>
                                <span>Thika, KENYA</span>
                            </div>
                        </div>
                        <!-- Testimonial -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Section -->

        <!-- Main Section -->
        <div class="kamkaaj-main-section kamkaaj-counter-style1-full">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Counter -->
                        <div class="kamkaaj-counter kamkaaj-counter-style1">
                            <ul class="row">
                                <li class="col-md-3">
                                    <span class="word-counter">136</span>
                                    <small>Jobs Every Day</small>
                                </li>
                                <li class="col-md-3">
                                    <span class="word-counter">425</span>
                                    <small>Current Resumes</small>
                                </li>
                                <li class="col-md-3">
                                    <span class="word-counter">214</span>
                                    <small>Companies</small>
                                </li>
                                <li class="col-md-3">
                                    <span class="word-counter">570</span>
                                    <small>Registered Vacancies</small>
                                </li>
                            </ul>
                        </div>
                        <!-- Counter -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Section -->

        <!-- Main Section -->
        <div class="kamkaaj-main-section kamkaaj-partner-classic-full">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <!-- FancyTitle -->
                        <div class="kamkaaj-fancy-title-view1">
                            <h2>Our Sponsors</h2>
                            <p><i>Jobsay is sponsored by companies from different parts of the world. We are grateful
                                    to all our sponsors for taking part in the system. <br><strong>Thank You!</strong></i></p>
                        </div>
                        <!-- FancyTitle -->

                        <!-- Partner -->
                        <div class="kamkaaj-partner-classic">
                            <ul class="row">
                                <li><a href="#"><img src="extra-images/partner-logo-1.png" alt=""></a></li>
                                <li><a href="#"><img src="extra-images/partner-logo-2.png" alt=""></a></li>
                                <li><a href="#"><img src="extra-images/partner-logo-3.png" alt=""></a></li>
                                <li><a href="#"><img src="extra-images/partner-logo-4.png" alt=""></a></li>
                                <li><a href="#"><img src="extra-images/partner-logo-4.png" alt=""></a></li>
                                <li><a href="#"><img src="extra-images/partner-logo-3.png" alt=""></a></li>
                                <li><a href="#"><img src="extra-images/partner-logo-2.png" alt=""></a></li>
                                <li><a href="#"><img src="extra-images/partner-logo-1.png" alt=""></a></li>
                            </ul>
                        </div>
                        <!-- Partner -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Section -->

    </div>
    <!-- Content -->

    <!-- Footer -->

@endsection
