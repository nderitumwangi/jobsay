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
                    <h1 class="text-white">Submit a Blog</h1>
                </div>
                <p class="lead text-white">Start your awesome blog! Complete all fields and publish</p>
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
                        <div class="job-title hidden-sm hidden-xs text-center"><h3>Create New Blog</h3></div>
                        <hr>
                        <form id="submit" class="submit-form" method="post" action="{{route('employer.post.blog')}}">
                            @csrf
                            <div class="form-group">
                                <label>Subject:</label>
                                <input type="text" class="form-control" name="subject"
                                       43 placeholder="Enter Your Blog Subject " required>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label> Image:</label>
                                <div class="form-group">
                                    <input type="file"     class="custom-control-input form-control"
                                           name="image">
                                </div>
                            </div>
                            <hr>

                            <div class="form-group">
                                <label>Message:</label>
                                <textarea name="post" class="form-control" required></textarea>
                            </div>
                            <hr class="invis">
                            <div class="submit-btn text-right">
                                <button type="submit" value="login" class="btn btn-primary btn-block ">
                                    Publish Post</button>
                            </div>
                        </form>
                    </div><!-- end post-padding -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->




@endsection