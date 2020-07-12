@extends('layouts.admin')
@section('content')

    {{--<div class="kamkaaj-sub-header">
        <span class="kamkaaj-dark-transparent"></span>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Recent Blog Posts</h1>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <!-- Content -->
    <div class="kamkaaj-main-content">

        <!-- Main Section -->
        <div class="kamkaaj-main-section">
            
            <div class="container">

                <div class="row">

                    <!-- Left Content -->
                    <div class="col-md-12">

                        <!-- Blog Large -->
                        @if(count($blogs))
                        <div class="kamkaaj-blog kamkaaj-blog-large">

                                <?php

                                $count = 1;
                                ?>
                                @foreach($blogs as $blog)
                            <ul class="row">


                                <li class="col-md-12">
                                    <figure><a href="{{route('admin.blog')}}"><img src="{{ asset('upload/blogs/' .$blog->image) }}" alt="">
                                            <span class="kamkaaj-blog-link-hover"><i class="fa fa-link kamkaaj-bgcolor-two">

                                                </i></span> </a></figure>
                                    <div class="kamkaaj-bloglarge-text">
                                        <h2><a href="#">{{$blog->subject}} </a></h2>
                                        <ul class="kamkaaj-post-options">
                                            <li>Posted By: <a class="kamkaaj-colorhover" href="#">{{$blog->login->name}}</a></li>
                                            <li>Date: <time datetime="2016-10-14"> {{$blog->created_at}} </time> </li>

                                            <li><a href="#" class="kamkaaj-colorhover"><i class="fa fa-comments">

                                                    </i> 0 Comments</a></li>
                                        </ul>
                                        <p>{{$blog->post}}</p>
                                        <a class="kamkaaj-readmore-btn kamkaaj-color" href="#">Read More
                                            <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </li>
                            </ul>
                                    @endforeach

                        </div>
                        @else
                            <div class="alert alert-info alert-dismissible" role="alert">
                                No posts found!!
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                        </div>

                    </div>
                    <!-- Left Content -->

                    <!-- SideBaar -->
                    <aside class="col-md-3">



                        <div class="widget widget_gallery">
                            <div class="kamkaaj_widget_title"> <h2>Flicker Photos</h2> </div>
                            <ul>
                                <li><a data-fancybox="gallery" href="{{asset('images/1.jpg')}}" size="100px by 100px">
                                        <img src="{{asset('images/1.jpg')}}" alt=""></a></li>
                                <li><a data-fancybox="gallery" href="{{asset('images/1.jpg')}}">
                                        <img src="{{asset('images/1.jpg')}}" alt=""></a></li>
                                <li><a data-fancybox="gallery" href="{{asset('images/1.jpg')}}">
                                        <img src="{{asset('images/1.jpg')}}" alt=""></a></li>
                                <li><a data-fancybox="gallery" href="{{asset('images/3.jpg')}}">
                                        <img src="{{asset('images/3.jpg')}}" alt=""></a></li>
                                <li><a data-fancybox="gallery" href="{{asset('images/3.jpg')}}">
                                        <img src="{{asset('images/3.jpg')}}" alt=""></a></li>
                                <li><a data-fancybox="gallery" href="{{asset('images/3.jpg')}}">
                                        <img src="{{asset('images/3.jpg')}}" alt=""></a></li>
                                <li><a data-fancybox="gallery" href="{{asset('images/4.jpg')}}">
                                        <img src="{{asset('images/4.jpg')}}" alt=""></a></li>
                                <li><a data-fancybox="gallery" href="{{asset('images/4.jpg')}}">
                                        <img src="{{asset('images/4.jpg')}}" alt=""></a></li>
                                <li><a data-fancybox="gallery" href="{{asset('images/4.jpg')}}">
                                        <img src="{{asset('images/4.jpg')}}" alt=""></a></li>
                            </ul>
                        </div>

                        <!-- Widget Archive -->


                    </aside>
                    <!-- SideBaar -->

                </div>
            </div>
        </div>
        <!-- Main Section -->


    <!-- Content -->--}}
    jvbndfhvbdfijv
@endsection