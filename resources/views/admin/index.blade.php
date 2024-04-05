@extends('admin.layouts.app')
@section('content')
@section('title', 'Home')

<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img class="zmdi-hc-spin" src="/images/loader.gif" alt="Loder"></div>
    </div>
</div>

<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- Right Icon menu Sidebar -->
<div class="navbar-right">
    <ul class="navbar-nav">
        <li><a href="{{ route('logout') }}" class="mega-menu" title="Sign Out"><i class="zmdi zmdi-power"></i></a>
        </li>
    </ul>
</div>

<!-- Main Content -->
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
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card widget_2">
                        <div class="body">
                            <h6>Job Openings</h6>
                            <h2>{{ isset($jobCount) ? $jobCount : 0 }}</h2>
                            <div class="progress">
                                <div class="progress-bar l-amber" role="progressbar" aria-valuenow="45"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 45%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card widget_2 ">
                        <div class="body">
                            <h6>Case Study</h6>
                            <h2>{{ isset($CaseStudy) ? $CaseStudy : 0 }}</h2>
                            <div class="progress">
                                <div class="progress-bar l-blue" role="progressbar" aria-valuenow="38" aria-valuemin="0"
                                    aria-valuemax="100" style="width: 38%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card widget_2 ">
                        <div class="body">
                            <h6>Job Applicant Leads</h6>
                            <h2>{{ isset($Applicant) ? $Applicant : 0 }}</h2>
                            <div class="progress">
                                <div class="progress-bar l-purple" role="progressbar" aria-valuenow="39"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 39%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card widget_2 ">
                        <div class="body">
                            <h6>Contact Us Leads</h6>
                            <h2>{{ isset($contactUsCounts) ? $contactUsCounts : 0 }}</h2>
                            <div class="progress">
                                <div class="progress-bar l-green" role="progressbar" aria-valuenow="89"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 89%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
