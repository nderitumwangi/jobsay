@extends('layouts.employer')
@section('content')
    <style>
        .text-white{
            color: white;!important;
        }
    </style>

    <div class="section db">
        <div class="container">
            <div class="page-title text-center text-white">
                <div class="heading-holder">
                    <h1 class="text-white">Submit a Job</h1>
                </div>
                <p class="lead text-white">Start your awesome project! Complete all fields and submit</p>
            </div>
        </div><!-- end container -->
    </div><!-- end section -->

    <div class="section lb">
        <div class="container">
            <div class="row">
                <div class="content col-md-2"></div>
                <div class="content col-md-8">
                    <br>
                    @include('inc.alerts')
                    <br>
                    <div class="post-padding">
                        <div class="job-title hidden-sm hidden-xs text-center"><h3>Job Details</h3></div>
                        <hr>
                        <form id="submit" class="submit-form" method="post" action="{{route('employer.post.job')}}">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <label class="control-label">Company Name <small>Enter your company name</small></label>
                                    <input type="text" class="form-control" placeholder="" name="company_name" required>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label class="control-label">Company Website <small>Enter your website here</small>
                                    </label>
                                    <input type="text" class="form-control" placeholder="http://" name="company_website"
                                           required>
                                </div>
                            </div><!-- end row -->

                            <hr class="invis">

                            <div class="row">

                                <div class="col-md-6 col-sm-12">
                                    <label class="control-label">Company Email <small>Enter official email here</small>
                                    </label>
                                    <input type="email" class="form-control" placeholder="" name="company_email" required>
                                </div>

                                <div class="col-md-6 col-sm-12">
                                    <label class="control-label">Job Category <small>Select project category</small></label>
                                    <select class="form-control" data-style="btn-default" data-live-search="true"
                                            name="job_category">
                                        <option>Accounting/Finance</option>
                                        <option>Automotive Jobs</option>
                                        <option>Construction</option>
                                        <option>Education</option>
                                        <option>Health care</option>
                                        <option>Restaurant/Hotel</option>
                                        <option>Non-Skilled</option>
                                        <option>IT/ Technology</option>
                                    </select>
                                </div>
                            </div><!-- end row -->

                            <hr class="invis">

                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <label class="control-label">Company Logo <small>Please add a your company logo.
                                            (100x100)</small></label>
                                    <div class="col-md-6">

                                        <br>
                                        <span class="btn btn-default btn-file">
                                                    <span class="fileupload-new">Select Logo</span>

                                                    <input type="file" class="form-control" name="company_logo">
                                                </span>
                                        <a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">
                                            <i class="fa fa-close">Remove logo</i></a>
                                    </div>
                                </div>
                            </div><!-- end row -->

                            <hr class="invis">

                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <label class="control-label">Job Title <small>Enter a short title for your project
                                        </small></label>
                                    <input type="text" class="form-control" placeholder="" name="job_title" required>
                                </div>
                            </div><!-- end row -->

                            <hr class="invis">

                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <label class="control-label">Job Description <small>Enter long description for
                                            your job</small></label>
                                    <textarea class="form-control" placeholder="" name="job_description" required>
                                    </textarea>
                                </div>
                            </div><!-- end row -->

                            <hr class="invis">

                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                <label class="control-label">Job Type <small>Full-time, Freelancer etc. (optional)</small>
                                </label>
                                <select class="form-control" data-style="btn-default" data-live-search="true"
                                        name="job_type">
                                    <option>Freelancer</option>
                                    <option>Full Time</option>
                                    <option>Part Time</option>
                                    <option>Partnership</option>
                                </select>
                            </div>
                                <div class="col-md-6 col-sm-12">
                                    <label class="control-label">Job Salary per month<small>Select your min salary per month</small></label>
                                    <select class="form-control" data-style="btn-default" data-live-search="true"
                                            name="job_salary">
                                        <option>$50 - $100</option>
                                        <option>$100 - $150</option>
                                        <option>$150 - $250</option>
                                        <option>$250 - $350</option>
                                        <option>$350 - $450</option>
                                        <option>$450 - $500</option>
                                        <option> $500+</option>
                                    </select>
                                </div>
                            </div><!-- end row -->

                            <hr class="invis">

                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <label class="control-label">Location </label>
                                    <input id="geocomplete" type="text" class="form-control"
                                           placeholder="Type in an address" name="job_location" required>
                                    <br>
                                </div>
                            </div><!-- end row -->

                            <hr class="invis">
                            <button class="btn btn-primary btn-block" value="Post">Submit Form</button>
                        </form>
                    </div><!-- end post-padding -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->




@endsection