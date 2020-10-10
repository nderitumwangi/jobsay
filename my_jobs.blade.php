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
                    <h1 class="text-white">My Jobs</h1>
                </div>
                <p class="lead text-white">Start your awesome employee search! </p>
            </div>
        </div><!-- end container -->
    </div><!-- end section -->

    <div class="section lb">
        <div class="container">
            <div class="row">
                <div class="content col-md-2"></div>
                <div class="content col-md-12">
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
                                    <th>Job Description</th>
                                    <th>Category</th>
                                    <th>Salary</th>
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
                                        <td>{{ $job->job_description }}</td>
                                        <td>{{ $job->job_category }}</td>
                                        <td>{{ $job->job_salary }}</td>
                                        <td>(20)</td>

                                        <td><a href="{{route('edit.job',['id'=>$job->id])}}" class="btn btn-danger btn-sm">Edit</a></td>
                                        <td><a href="{{route('delete.job',['id'=>$job->id])}}" class="btn btn-danger btn-sm">Delete</a></td>
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

@endsection