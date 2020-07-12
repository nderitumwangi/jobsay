@extends('layouts.app')

@section('content')

    <div class="kamkaaj-sub-header">
        <span class="kamkaaj-dark-transparent"></span>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Available Jobs</h1>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>

    <!-- Sub Header -->

    <!-- Content -->
    <div class="kamkaaj-main-content col-md-12">

        <!-- Main Section -->
        <div class="kamkaaj-main-section">
            <div class="container">
                <div class="row">

                    <div class="kamkaaj-column-12">
                        <!-- Search -->
                        <div class="kamkaaj-job-search">
                            <form>
                                <ul>
                                    <li><input value="Job Title or Keywords" onblur="if(this.value == '')
                                    { this.value ='Job Title or Keywords'; }" onfocus="
                                    if(this.value =='Job Title or Keywords,') { this.value = ''; }" type="text">
                                    </li>
                                    <li><input value="City or State" onblur="if(this.value == '')
                                    { this.value ='City or State'; }" onfocus="if(this.value =='City or State')
                                    { this.value = ''; }" type="text"></li>
                                    <li>
                                        <div class="kamkaaj-select-style-two">
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
                                    <li><label class="kamkaaj-jobsearch-submit-btn"> <i
                                                    class="icon-flat kamkaaj-search">

                                            </i> <input type="submit" value=""> </label></li>
                                </ul>
                            </form>
                        </div>
                        <!-- Search -->
                    </div>

                    <!-- SideBaar -->
                    <aside class="kamkaaj-column-3">

                        <!-- Search Filter -->
                        <div class="kamkaaj-search-filter-wrap" >
                            <div class="kamkaaj_widget_title"><h2>Filter Results</h2></div>
                            <a href="#" class="kamkaaj-search-checkbox-btn">By Categories
                                <i class="icon-flat kamkaaj-down-arrow"></i> <i class="icon-flat kamkaaj-up-arrow">

                                </i> </a>
                            <ul class="kamkaaj-search-checkbox">
                                <li>
                                    <input id="r1" name="rr" type="checkbox">
                                    <label for="r1"><span></span>Accountancy</label>
                                    <small>10</small>
                                </li>
                                <li>
                                    <input id="r2" name="rr" type="checkbox">
                                    <label for="r2"><span></span>Banking</label>
                                    <small>4</small>
                                </li>
                                <li>
                                    <input id="r3" name="rr" type="checkbox">
                                    <label for="r3"><span></span>Charity & Voluntary</label>
                                    <small>2</small>
                                </li>
                                <li>
                                    <input id="r4" name="rr" type="checkbox">
                                    <label for="r4"><span></span>Digital & Creative</label>
                                    <small>19</small>
                                </li>
                                <li>
                                    <input id="r5" name="rr" type="checkbox">
                                    <label for="r5"><span></span>Estate Agency</label>
                                    <small>6</small>
                                </li>
                                <li>
                                    <input id="r6" name="rr" type="checkbox">
                                    <label for="r6"><span></span>Graduate</label>
                                    <small>5</small>
                                </li>
                                <li>
                                    <input id="r7" name="rr" type="checkbox">
                                    <label for="r7"><span></span>IT Contractor</label>
                                    <small>1</small>
                                </li>
                            </ul>
                        </div>
                        <!-- Search Filter -->

                        <!-- Search Filter -->
                        <div class="kamkaaj-search-filter-wrap">
                            <a href="#" class="kamkaaj-search-checkbox-btn">Vacancy Type
                                <i class="icon-flat kamkaaj-down-arrow"></i> <i class="icon-flat kamkaaj-up-arrow"></i>
                            </a>
                            <ul class="kamkaaj-search-checkbox">
                                <li>
                                    <input id="r8" name="rr" type="checkbox">
                                    <label for="r8"><span></span>Freelance</label>
                                    <small>10</small>
                                </li>
                                <li>
                                    <input id="r9" name="rr" type="checkbox">
                                    <label for="r9"><span></span>Banking</label>
                                    <small>4</small>
                                </li>
                                <li>
                                    <input id="r10" name="rr" type="checkbox">
                                    <label for="r10"><span></span>Charity & Voluntary</label>
                                    <small>2</small>
                                </li>
                                <li>
                                    <input id="r11" name="rr" type="checkbox">
                                    <label for="r11"><span></span>Digital & Creative</label>
                                    <small>19</small>
                                </li>
                                <li>
                                    <input id="r12" name="rr" type="checkbox">
                                    <label for="r12"><span></span>Estate Agency</label>
                                    <small>6</small>
                                </li>
                                <li>
                                    <input id="r13" name="rr" type="checkbox">
                                    <label for="r13"><span></span>Graduate</label>
                                    <small>5</small>
                                </li>
                                <li>
                                    <input id="r14" name="rr" type="checkbox">
                                    <label for="r14"><span></span>IT Contractor</label>
                                    <small>1</small>
                                </li>
                            </ul>
                        </div>
                        <!-- Search Filter -->



                        <!-- Search Filter -->
                        <div class="kamkaaj-search-filter-wrap">
                            <a href="#" class="kamkaaj-search-checkbox-btn">Salary Range
                                <i class="icon-flat kamkaaj-down-arrow"></i> <i class="icon-flat kamkaaj-up-arrow">

                                </i> </a>
                        </div>
                        <!-- Search Filter -->
                    </aside>
                    <!-- SideBar -->

                    <!-- Left Content -->
                    <div class="kamkaaj-column-9">

                        <div class="kamkaaj-job-filter-list">

                            <ul>

                                <li>
                                    <div class="kamkaaj-select-style-two">
                                        <select>
                                            <option>Sort By</option>
                                            <option>Accounting</option>
                                            <option>Automotive Jobs</option>
                                            <option>Construction</option>
                                            <option>Education</option>
                                            <option>Health Care</option>
                                            <option>Restaurant</option>
                                        </select>
                                    </div>
                                </li>
                            </ul>
                        </div>

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

                                                    </div>
                                                    <button class=" btn-block  btn-lg " href=" #" >Apply  Job</button>
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

                    </div>
                </div>
            </div>
        </div>
        <!-- Left Content -->

    </div>

    <!-- Main Section -->

    <!-- Content -->

@endsection
