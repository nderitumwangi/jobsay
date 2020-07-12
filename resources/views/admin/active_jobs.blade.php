@extends('layouts.admin')
@section('content')
    <div class="main-content">
        <section class="section">
    <div class="row">
        <div class="col-md-12 col-lg-12 col-xl-12">
            <!-- Support tickets -->
            <div class="card">
                <div class="card-header">
                    <h4>Active Jobs</h4>
                    <form class="card-header-form">
                        <input type="text" name="search" class="form-control" placeholder="Search">
                    </form>
                </div>
                @if($jobs->count() >0)
                <div class="card-body">
                    <?php
                    $count = 1;
                    ?>
                    @foreach($jobs as $job)
                    <div class="support-ticket media pb-2 mb-6">
                        <img src="{{ asset('extra-images/' .$job->company_logo) }}" class="user-img mr-8" alt="">
                        <div class="media-body ml-3">
                            <span class="font-weight-bold">{{ $job->id }}</span>
                            <p><h3>{{ $job->job_title }}</h3></p>
                            <p class="my-1">{{ $job->job_description }}</p>
                            <large class="text-muted">Created by <span class="font-weight-bold font-13">{{ $job->company_name }}
                          </span>

                                 {{ $job->created_at}}
                            </large>

                            <div class="badge badge-pill badge-success mb-1 float-right">Feature</div>
                        </div>
                    </div>
                        @endforeach
                </div>
                @else
                    <div class="alert alert-danger alert-dismissible" role="alert">
                        No records found, try again later!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

            </div>
            <!-- Support tickets -->
        </div>

    </div>
        </section>
    </div>
    @endsection