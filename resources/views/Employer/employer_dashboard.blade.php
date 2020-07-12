@extends('layouts.employer')
@section('content')
    <div class="parallax section homehero" data-stellar-background-ratio="0.5"
         style="background-image:url('{{asset('dashboard/upload/1.png')}}');">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="home-message">
                        <h1><span> Jobsay job Portal<br></span><span class="element"></span><br>Job Portal</h1>
                        <p class="text-capitalize">We fully profile all our employers and utilise the best
                            matching solutions to ensure you get the right fit, faster. We are there for you,
                            every step of the way.
                        </p>
                        <div class="svg-wrapper">
                            <div class="ttext">
                                <a class="btn btn-custom" href="{{route('job')}}">View All Jobs
                                    <span class="fa fa-angle-right"></span></a>
                            </div>
                            <svg height="57" width="200" xmlns="http://www.w3.org/2000/svg">
                                <rect class="shape" height="57" width="200"/>
                            </svg>
                        </div>
                    </div><!-- end message -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->



    <div class="section lb">
        <div class="container">
            <div class="section-title text-center clearfix">
                <h4>Featured Jobs</h4>
                <hr>
                <p class="lead">You decrease the time spent on sorting
                    through the huge volume of applications from job-seekers.
                    You can sort through job seekers based on test scores
                    they achieve. An assessment will not only help you
                    identify candidates that will be a good fit for jobs at
                    your company, but it will also help predict a new
                    hire’s on-the-job performance. It Introduces an element of
                    objectivity into the hiring process by providing standardised
                    results that can be applied to all your applicants..</p>
            </div>
            @if($jobs->count() >0)
                <div class="all-jobs job-listing clearfix">

                    <?php
                    $count = 1;
                    ?>
                    @foreach($jobs as $job)
                        <div class="row">

                            <div class="col-md-2 col-sm-2 col-xs-12">
                                <div class="post-media">
                                    <img src="{{ asset('extra-images/' .$job->company_logo) }}"
                                                                   class="img-responsive img-thumbnail">
                                </div><!-- end media -->
                            </div><!-- end col -->

                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="badge part-badge">{{ $job->job_type}}</div>
                                <h3><a href="#" title="">{{ $job->job_title }}</a>
                                </h3>
                                <small>
                                    <span>Company Name : <a href="#">{{ $job->company_name }}</a></span>
                                    <br>
                                    <span> <a href="#"> Posted At: </a></span>
                                    <span>{{ $job->created_at}}</span>
                                </small>
                            </div><!-- end col -->

                            <div class="col-md-2 col-sm-2 col-xs-12">
                                <div class="job-meta">
                                    <p>Location</p>
                                    <small>{{ $job->job_location }}</small>
                                </div><!-- end meta -->
                            </div><!-- end col -->

                            <div class="col-md-2 col-sm-2 col-xs-12">
                                <div class="job-meta text-center">
                                    <h4>{{ $job->job_salary }}</h4>
                                    <a href="{{route('edit.job',['id'=>$job->id])}}" class="btn btn-primary btn-sm btn-block">Edit Job</a>
                                </div>
                            </div><!-- end col -->

                        </div><!-- end row -->
                    @endforeach


                </div><!-- end job-tab -->
            @else
                <div class="alert alert-danger alert-dismissible" role="alert">
                    No records found, try again later!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

        </div><!-- end alljobs -->
        @endif
        <div class="loadmorebutton text-center clearfix">
            <a href="#" class="btn btn-primary" id="loadMore">Load More Jobs</a>
        </div><!-- end loadmore -->
    </div><!-- end container -->
    </div><!-- end section -->
    <div class="section wb">
        <div class="container">
            <hr class="largeinvis1">

            <div class="row whoweare">
                <div class="col-md-4">
                    <div class="about-widget">
                        <h5>Who We Are?</h5>
                        <hr>
                        <p>Jobsay has more than 1000 employers who offer best job positions and
                            favorable salaries to their employees.
                            We offer fast response to our Clients to make it possible to achieve our Goals.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="about-widget">
                        <h5>What We Do?</h5>
                        <hr>
                        <p>Jobsay job portal provides Employers to upload/ Post new jobs on the website
                            to get the most qualified personnel in the market. the Job-seekers are also
                            given a chance to view available job positions and apply for them online.</p>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="about-widget">
                        <h5>Why Choose Us?</h5>
                        <hr>
                        <p>Jobsay has more than 1000 employers who offer best job positions and
                            favorable salaries to their employees.
                            We offer fast response to our Clients to make it possible to achieve our Goals.</p>

                    </div>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
    <script src="{{asset('dashboard/js/jquery.js')}}"></script>
    <script src="{{asset('dashboard/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('dashboard/js/all.js')}}"></script>
    <script src="{{asset('dashboard/js/custom.js')}}"></script>

    <script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places"></script>
    <!-- MAP & CONTACT -->
    <script src="{{asset('dashboard/js/map-job.js')}}"></script>
    <script src="{{asset('dashboard/js/map-upload.js')}}"></script>
@endsection