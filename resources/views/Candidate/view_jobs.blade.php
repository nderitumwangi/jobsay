@extends('layouts.candidate')
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
                    <h1 class="text-white">Available Jobs</h1>
                </div>
                <p class="lead text-white">Start your awesome job search! </p>
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
                    <div class="post-padding table-responsive table-striped">
                        <div class="job-title hidden-sm hidden-xs text-center"><h3>Available Jobs</h3></div>
                        <hr>
                        @if($jobs->count() >0)
                            <table class="table">
                                <tr>
                                    <td></td>
                                    <th>Job Title</th>
                                    <th>Company Logo</th>
                                    <th>Company Name</th>
                                    <th>Job Type</th>
                                    <th>Category</th>
                                    <th>Applicants</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                <?php
                                $count = 1;
                                ?>
                                @foreach($jobs as $job)
                                    <tr>
                                        <td>{{ $count++ }}</td>
                                        <td>{{ $job->job_title }}</td>
                                        <td>{{ $job->company_logo }}</td>
                                        <td>{{ $job->company_name }}</td>
                                        <td>{{ $job->job_type }}</td>
                                        <td>{{ $job->job_category }}</td>
                                        <td>(20)</td>
                                        <td><a href="" class="btn btn-primary btn-sm">Edit</a></td>
                                        <td><a href="" class="btn btn-danger btn-sm">Delete Job</a></td>
                                    </tr>
                                    @endforeach
                            </table>
                            @else
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                No records found, try again later!
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                    </div><!-- end post-padding -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->


    {{--<div class="kamkaaj-sub-header">--}}
        {{--<span class="kamkaaj-dark-transparent"></span>--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-12">--}}
                    {{--<h1>Post New Job</h1>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="clearfix"></div>--}}
    {{--</div>--}}
    {{--<div class="kamkaaj-breadcrumb">--}}
        {{--<div class="container">--}}
            {{--<ul>--}}
                {{--<li><a href="#">Home</a></li>--}}
                {{--<li><a href="#">Jobs</a></li>--}}
                {{--<li>Listings</li>--}}
            {{--</ul>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<!-- Sub Header -->--}}

    {{--<!-- Content -->--}}
    {{--<div class="kamkaaj-main-content">--}}

        {{--<!-- Main Section -->--}}
        {{--<div class="kamkaaj-login-box-inner col-md-6 offset-md-3">--}}
            {{--<h2>Post New Job</h2>--}}

            {{--<div class="form-group">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-2">--}}
                        {{--<label>Title:</label>--}}
                    {{--</div>--}}
                    {{--<div class="col-10">--}}
                        {{--<input type="text" placeholder="Enter job title " name="Title" class="form-control" required>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="form-group">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-2">--}}
                        {{--<label>Category:</label>--}}
                    {{--</div>--}}
                    {{--<div class="col-10">--}}
                        {{--<input type="text" placeholder="Enter the job category" name="Category" class="form-control"--}}
                               {{--required>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="form-group">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-2">--}}
                        {{--<label>City:</label>--}}
                    {{--</div>--}}
                    {{--<div class="col-10">--}}
                        {{--<input type="text" placeholder="Enter job city" name="City" class="form-control" required>--}}

                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="form-group">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-2">--}}
                        {{--<label>Details:</label>--}}
                    {{--</div>--}}
                    {{--<div class="col-10">--}}
                        {{--<textarea placeholder="Enter job details" name="Details" class="form-control"--}}
                                 {{--rows="5" required></textarea>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="form-group">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-2">--}}
                        {{--<label>Qualifications:</label>--}}
                    {{--</div>--}}
                    {{--<div class="col-10">--}}
                        {{--<select type="text" placeholder="Enter job qualifications" name="Qualifications" class="form-control"--}}
                                  {{--required>--}}
                            {{--<option value="Phd">Phd</option>--}}
                            {{--<option value="Masters">Masters</option>--}}
                            {{--<option value="Degree">Degree</option>--}}
                            {{--<option value="Diploma">Diploma</option>--}}
                            {{--<option value="Certificate">Certificate</option>--}}
                            {{--<option value="Secondary">Secondary</option>--}}
                            {{--<option value="Basic">Basic</option>--}}
                        {{--</select>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="form-group">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-2">--}}
                        {{--<label>Date:</label>--}}
                    {{--</div>--}}
                    {{--<div class="col-10">--}}
                        {{--<input type="text" placeholder="Enter deadline of application " name="Date"--}}
                               {{--class="form-control" value="{{date('d/m/Y')}}" readonly/>--}}
                        {{--<input type="text" name="Date"--}}
                               {{--value="{{date('d/m/Y')}}" hidden/>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="form-group">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-6">--}}
                        {{--<input type="submit" value="Post" class="custom-button btn-outline-success" required>--}}
                    {{--</div>--}}
                {{--</div>--}}

            {{--</div>--}}
        {{--</div>--}}

    {{--</div>--}}
    {{--<!-- Content -->--}}

@endsection