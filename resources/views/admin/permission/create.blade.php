@php
    // dd($permissions);
@endphp
@extends('admin.layouts.app')
@section('content')
@section('title', 'create permissions')
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

    .toast-error {
        background-color: red !important;
    }
</style>
<section class="content">
    <h3 class="text-center " style="font-weight: bold;color:#e83e8c">
        CREATE PERMISSION
    </h3>
    <div class="form-group col-md-12">
        <a href="{{ route('permissions.index') }}" class="btn btn-primary float-left ">BACK</a>
    </div>
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
                            <form action="{{ url('permissions') }}" enctype="multipart/form-data" id="brochureCreate"
                                method="POST">
                                @csrf
                                <div class="container mt-4 card p-3 bg-white">
                                    <div class="row">
                                        <div class="form-group col-md-12 required">
                                            <label for="">Permission Name:</label>
                                            <input type="text" name="name" id="" class="form-control"
                                                placeholder="Permission Name">
                                            <span class="text-danger">
                                                @error('title')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                            <button type="submit" id="submit"
                                                class="btn btn-primary btn-lg float-right from-prevent-multiple-submits">SAVE</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    function changeStatus(id) {
        $.ajax({
            type: 'GET',
            url: '/change/brochure/status/' + id,
            data: id,
            processData: false,
            contentType: false,
            success: function(response) {
                console.log(response);
                window.location.href = "";

            },
            error: function(response) {
                console.log("something went wrong");
            }
        });
    }
</script>
<script>
    function updateModalBody(id) {
        // Send an AJAX request
        // $('#exampleModalLong').modal('hide');
        $('#modalBody').html('');
        var id = id;
        $.ajax({
            type: 'GET',
            url: '/case/get-description/' + id,
            data: id,
            processData: false,
            contentType: false,
            success: function(response) {
                console.log(response);
                $('#modalBody').html('');
                $('#modalBody').html(response.description);
                $('#exampleModalLong').modal('show');
            },
            error: function(response) {
                console.log("hii");
            }
        });
    }

    // Delete function 
    function deleteModal(id) {

        console.log(id);
        var modalToastrButton = $('#modalToastr');

        console.log(modalToastrButton);
        modalToastrButton.attr('href', "{{ url('case-study/delete') }}/" + id);
        $('#deleteModal').modal('show');

        $('#modalToastr').on('click', function(event) {
            event.preventDefault();
            $.ajax({
                type: 'GET',
                url: modalToastrButton.attr('href'),
                success: function(response) {
                    // $("#deleteButton").attr("disabled", true)
                    $("#deleteButton").removeAttr("disabled");
                    $('#deleteModal').modal('hide');
                    toastr.options = {
                        'progressBar': true,
                        'closeButton': true,
                        // 'timeOut': 5000
                    }
                    toastr.success(response.message);
                    window.location.href = "";
                },
                error: function(response) {
                    toastr.error(response.message);
                }
            });
        });
    }
</script>

@endsection
