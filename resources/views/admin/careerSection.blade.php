@extends('admin.layouts.app')
@section('content')
@section('title', 'Job Details')
<style>
    label {
        color: black;
    }

    .required label::after {
        content: " *";
        color: red;
    }

    .error {
        color: red;
    }

    h3 {
        margin-bottom: -9px;
    }
</style>


<section class="content">
    <h3 class="text-center " style="font-weight: bold;color:#e83e8c">
        Job Posted List
    </h3>
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">


            </div>
        </div>

        <div class="container-fluid">
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">

                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable"
                                    id="job-posted">
                                    <thead>

                                        <tr>
                                            <th>S.No</th>
                                            <th>Department</th>
                                            <th>Job Role</th>
                                            <th>Location</th>
                                            <th>Time Period</th>
                                            <th>Description</th>
                                        </tr>

                                    </thead>

                                    <tbody>
                                        @foreach ($jobPost as $data)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $data->department }}</td>
                                                <td>{{ $data->job_role }}</td>
                                                <td>{{ $data->location }}</td>
                                                <td>{{ $data->time_period }}</td>

                                                <td>
                                                    <div class="d-flex">
                                                        <a href="{{ url('/career-description') }}/{{ $data->id }}/{{ $data->job_role }}"
                                                            class="btn btn-primary">Add</a>
                                                        <a href="{{ url('/edit-description') }}/{{ $job_id = isset($descData->job_id) ? $descData->job_id : $data->id }}"
                                                            class="btn" style="background-color: #e83e8c;">Edit</a>
                                                    </div>
                                                </td>


                                            </tr>
                                        @endforeach


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>
</section>


{{-- Toastr script --}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<!-- Jquery Core Js -->
<script src="{{ asset('assets/bundles/libscripts.bundle.js') }}"></script> <!-- Lib Scripts Plugin Js -->
<script src="{{ asset('assets/bundles/vendorscripts.bundle.js') }}"></script> <!-- Lib Scripts Plugin Js -->

<script src="{{ asset('assets/plugins/momentjs/moment.js') }}"></script> <!-- Moment Plugin Js -->
<!-- Bootstrap Material Datetime Picker Plugin Js -->
<script src="{{ asset('assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js') }}">
</script>

<script src="{{ asset('assets/js/pages/forms/basic-form-elements.js') }}"></script>

<!-- Jquery DataTable Plugin Js -->
<script src="{{ asset('assets/bundles/datatablescripts.bundle.js') }}"></script>
<script src="{{ asset('assets/plugins/jquery-datatable/buttons/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jquery-datatable/buttons/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jquery-datatable/buttons/buttons.colVis.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jquery-datatable/buttons/buttons.flash.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jquery-datatable/buttons/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jquery-datatable/buttons/buttons.print.min.js') }}"></script>

<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script><!-- Custom Js -->
<script src="{{ asset('assets/js/pages/tables/jquery-datatable.js') }}"></script>
@endsection
