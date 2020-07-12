@extends('layouts.admin')
@section('content')

    <div class="kamkaaj-sub-header">
        <span class="kamkaaj-dark-transparent"></span>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Create a New Blog Post</h1>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <!-- Content -->
    <div class="kamkaaj-main-content">

        <!-- Main Section -->
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
        </div>
        </div>
        <!-- Main Section -->


    <!-- Content -->
@endsection