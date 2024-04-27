@extends('admin.layouts.app')
@section('content')
@section('title', 'Home')
@section('header-title', 'Dashboard')

<!-- Main Content -->
@can('view-dashboard')
    <section class="content">
        <div class="">
            {{-- <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2>Dashboard</h2>
                    </div>
                </div>
            </div> --}}
            <div class="container-fluid">
                <div class="row clearfix">
                    @can('view-job-opening')
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="card widget_2">
                                <div class="body">
                                    <h6 class="heading-main">Job Openings</h6>
                                    <div class="dash-box">
                                        <div class="left-db">
                                            <h2>{{ isset($jobCount) ? $jobCount : 0 }}</h2>
                                            <a href="{{ route('opened-job') }}" class="tab-links">View All<img src="{{ asset('assets/images/arrows.png') }}" alt="Job"
                                                class="link-icon"></a>
                                        </div>
                                        <div class="right-db">
                                            <img src="{{ asset('assets/images/job.png') }}" alt="Job" class="dash-icon">
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
                                    <h6>Case Study</h6>
                                    <div class="dash-box">
                                        <div class="left-db">
                                            <h2>{{ isset($CaseStudy) ? $CaseStudy : 0 }}</h2>
                                            <a href="{{ route('case-section') }}" class="tab-links">View All <img src="{{ asset('assets/images/arrows.png') }}" alt="Job"
                                                class="link-icon"></a>
                                        </div>
                                        <div class="right-db">
                                            <img src="{{ asset('assets/images/case.png') }}" alt="Job" class="dash-icon">
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
                                    <h6 class="heading-main">Job Applicant Leads</h6>
                                    <div class="dash-box">
                                        <div class="left-db">
                                            <h2>{{ isset($Applicant) ? $Applicant : 0 }}</h2>
                                            <a href="{{ route('applicants') }}" class="tab-links">View All <img src="{{ asset('assets/images/arrows.png') }}" alt="Job"
                                                class="link-icon"></a>
                                        </div>
                                        <div class="right-db">
                                            <img src="{{ asset('assets/images/applicant.png') }}" alt="Job"
                                                class="dash-icon">
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
                                    <h6>Contact Us Leads</h6>
                                    <div class="dash-box">
                                        <div class="left-db">
                                            <h2>{{ isset($contactUsCounts) ? $contactUsCounts : 0 }}</h2>
                                            <a href="{{ route('contact-applicants') }}" class="tab-links">View All <img src="{{ asset('assets/images/arrows.png') }}" alt="Job"
                                                class="link-icon"></a>
                                        </div>
                                        <div class="right-db">
                                            <img src="{{ asset('assets/images/contact.png') }}" alt="Job"
                                            class="dash-icon">
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
