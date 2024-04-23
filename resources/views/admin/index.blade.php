@extends('admin.layouts.app')
@section('content')
@section('title', 'Home')


<!-- Main Content -->
@can('view-dashboard')
    <section class="content">

        <div class="">
            <div class="block-header">

                <div class="row">
                    <div class="col-lg-7 col-md-6 col-sm-12">
                        <h2>Dashboard</h2>
                        <!-- <ul class="breadcrumb">
                                                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="zmdi zmdi-home"></i>
                                                            AVA-Global</a></li>
                                                    <li class="breadcrumb-item active">Dashboard</li>
                                                </ul> -->
                        <button class="btn btn-primary btn-icon mobile_menu" type="button"><i
                                class="zmdi zmdi-sort-amount-desc"></i></button>
                    </div>

                </div>
            </div>

            <div class="container-fluid">
                <div class="row clearfix">
                    @can('view-job-opening')
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="card widget_2">
                                <div class="body">
                                    <div class="dash-box">
                                        <div class="left-db">
                                            <img src="{{ asset('assets/images/job.png') }}" alt="Job" class="dash-icon">
                                        </div>
                                        <div class="right-db">
                                            <h6>Job Openings</h6>
                                            <h2>{{ isset($jobCount) ? $jobCount : 0 }}</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endcan
                    @can('view-case-study')
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="card widget_2 ">
                                <div class="body">
                                    <div class="dash-box">
                                        <div class="left-db">
                                            <img src="{{ asset('assets/images/case.png') }}" alt="Job" class="dash-icon">
                                        </div>
                                        <div class="right-db">
                                            <h6>Case Study</h6>
                                            <h2>{{ isset($CaseStudy) ? $CaseStudy : 0 }}</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endcan
                    @can('view-job-applicants')
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="card widget_2 ">
                                <div class="body">
                                    <div class="dash-box">
                                        <div class="left-db">
                                            <img src="{{ asset('assets/images/applicant.png') }}" alt="Job"
                                                class="dash-icon">
                                        </div>
                                        <div class="right-db">
                                            <h6>Job Applicant Leads</h6>
                                            <h2>{{ isset($Applicant) ? $Applicant : 0 }}</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endcan
                    @can('view-contactus-lead')
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="card widget_2 ">
                                <div class="body">
                                    <div class="dash-box">
                                        <div class="left-db">
                                            <img src="{{ asset('assets/images/contact.png') }}" alt="Job"
                                                class="dash-icon">
                                        </div>
                                        <div class="right-db">
                                            <h6>Contact Us Leads</h6>
                                            <h2>{{ isset($contactUsCounts) ? $contactUsCounts : 0 }}</h2>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endcan
                </div>
            </div>
        </div>
    </section>
@endcan


@endsection
