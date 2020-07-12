@extends('layouts.app')
@section('content')

    <div class="kamkaaj-sub-header">
        <span class="kamkaaj-dark-transparent"></span>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Employers Listings</h1>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="kamkaaj-breadcrumb">
        <div class="container">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Employers</a></li>
                <li>Listings</li>
            </ul>
        </div>
    </div>
    <!-- Sub Header -->

    <!-- Content -->
    <div class="kamkaaj-main-content">

        <!-- Main Section -->
        <div class="kamkaaj-main-section">
            <div class="container">
                <div class="row">

                    <!-- SideBaar -->
                    <aside class="kamkaaj-column-3">

                        <!-- Search Filter -->
                        <div class="kamkaaj-search-filter-wrap">
                            <div class="kamkaaj_widget_title"> <h2>Filter Results</h2> </div>
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
                                <i class="icon-flat kamkaaj-down-arrow"></i> <i class="icon-flat kamkaaj-up-arrow">

                                </i> </a>
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
                            <a href="#" class="kamkaaj-search-checkbox-btn">Date Posted
                                <i class="icon-flat kamkaaj-down-arrow"></i> <i class="icon-flat kamkaaj-up-arrow">

                                </i> </a>
                            <ul class="kamkaaj-search-checkbox">
                                <li>
                                    <input id="r15" name="rr" type="checkbox">
                                    <label for="r15"><span></span>Last Hour</label>
                                    <small>10</small>
                                </li>
                                <li>
                                    <input id="r16" name="rr" type="checkbox">
                                    <label for="r16"><span></span>Last 24 hours</label>
                                    <small>4</small>
                                </li>
                                <li>
                                    <input id="r17" name="rr" type="checkbox">
                                    <label for="r17"><span></span>Last 7 days</label>
                                    <small>2</small>
                                </li>
                                <li>
                                    <input id="r18" name="rr" type="checkbox">
                                    <label for="r18"><span></span>Last 14 days</label>
                                    <small>19</small>
                                </li>
                                <li>
                                    <input id="r19" name="rr" type="checkbox">
                                    <label for="r19"><span></span>Last 30 days</label>
                                    <small>6</small>
                                </li>
                                <li>
                                    <input id="r20" name="rr" type="checkbox">
                                    <label for="r20"><span></span>All</label>
                                    <small>5</small>
                                </li>
                            </ul>
                        </div>
                        <!-- Search Filter -->

                        <!-- Search Filter -->
                        <div class="kamkaaj-search-filter-wrap">
                            <a href="#" class="kamkaaj-search-checkbox-btn">Locations
                                <i class="icon-flat kamkaaj-down-arrow"></i> <i class="icon-flat kamkaaj-up-arrow">

                                </i> </a>
                            <ul class="kamkaaj-search-checkbox">
                                <li>
                                    <input id="r21" name="rr" type="checkbox">
                                    <label for="r21"><span></span>San Francisco</label>
                                    <small>10</small>
                                </li>
                                <li>
                                    <input id="r22" name="rr" type="checkbox">
                                    <label for="r22"><span></span>Portland</label>
                                    <small>4</small>
                                </li>
                                <li>
                                    <input id="r23" name="rr" type="checkbox">
                                    <label for="r23"><span></span>London</label>
                                    <small>2</small>
                                </li>
                                <li>
                                    <input id="r24" name="rr" type="checkbox">
                                    <label for="r24"><span></span>Bangalore</label>
                                    <small>19</small>
                                </li>
                            </ul>
                        </div>
                        <!-- Search Filter -->

                        <!-- Search Filter -->
                        <div class="kamkaaj-search-filter-wrap">
                            <a href="#" class="kamkaaj-search-checkbox-btn">Work Experience
                                <i class="icon-flat kamkaaj-down-arrow"></i> <i class="icon-flat kamkaaj-up-arrow">

                                </i> </a>
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
                    <!-- SideBaar -->

                    <!-- Left Content -->
                    <div class="kamkaaj-column-9">

                        <div class="kamkaaj-job-filter-list">
                            <h2>Showing 0-13 of 17 results</h2>
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
                                <li><a href="#"><i class="icon-flat kamkaaj-squares"></i> Grid</a></li>
                                <li><a href="#"><i class="icon-flat kamkaaj-list"></i> List</a></li>
                            </ul>
                        </div>

                        <!-- Employers Listings -->
                        <div class="kamkaaj-employer kamkaaj-employer-list">

                            <ul class="kamkaaj-row">
                                @if($employer->count() >0)
                                    <ul class="row">
                                        <?php
                                        $count = 1;
                                        ?>
                                        @foreach($employer as $employer)
                                <li class="kamkaaj-column-12">
                                    <div class="kamkaaj-table-layer">
                                        <div class="kamkaaj-table-row">
                                            <div class="kamkaaj-table-cell">
                                                <figure>
                                                    <a href="#">
                                                        <img src="extra-images/job-listing-logo-1.png" alt="">
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="kamkaaj-table-cell">
                                                <small>Telecommunications</small>
                                                <h2><a href="#">{{ $employer->name }}</a> </h2>
                                                <span><i class="fa fa-map-marker-alt">

                                                    </i> {{ $employer->address }}</span>
                                            </div>
                                            <div class="kamkaaj-table-cell">
                                                <strong>Detail: <em class="color-time">{{ $employer->company_detail }}</em></strong> <br>
                                                <strong>Description: <em>{{ $employer->description }}</em></strong>
                                            </div>
                                            <div class="kamkaaj-table-cell">
                                                <a href="#" class="kamkaaj-employer-list-btn">6 Vacancies </a> </div>
                                            <div class="kamkaaj-featured-label">Featured</div>
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

                        <!-- Employers Listings -->

                        <!-- Pagination -->
                        <div class="kamkaaj-pagination">
                            <ul class="page-numbers">
                                <li><a class="next page-numbers" href="#"><span aria-label="Next">
                                            <i class="fa fa-chevron-left"></i></span></a></li>
                                <li><a class="page-numbers" href="#">1</a></li>
                                <li><span class="page-numbers current">2</span></li>
                                <li><a class="page-numbers" href="#">3</a></li>
                                <li><a class="page-numbers" href="#">4</a></li>
                                <li><a class="next page-numbers" href="#"><span aria-label="Next">
                                            <i class="fa fa-chevron-right"></i></span></a></li>
                            </ul>
                        </div>
                        <!-- Pagination -->

                    </div>
                    <!-- Left Content -->

                </div>
            </div>
        </div>
        <!-- Main Section -->

    </div>
    <!-- Content -->

@endsection
