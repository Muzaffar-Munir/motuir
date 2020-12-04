@extends('layouts.master')
@section('title') New Announcement @endsection
@section('css')
    <!-- bootstrap-datepicker css -->
    <link href="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet">
    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
    <style>
        .table th {
            border: 1px solid #eee !important;
        }
    </style>
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('pageheading') New Announcement @endslot
        @slot('pagetitle') Announcements @endslot
        @slot('title') New @endslot
    @endcomponent

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="col-md-12"> 
                        <div class="form-group">
                            <label for="formrow-firstname-input">Publish</label>                       
                            <div class="custom-control custom-radio mb-3">
                                <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                <label class="custom-control-label" for="customRadio1">Now</label>
                            </div>
                            <div class="custom-control custom-radio mb-3">
                                <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                <label class="custom-control-label form-inline" for="customRadio2">
                                    <span style="position: relative;top: -7px;">
                                        Scheduled 
                                        <input type="text" placeholder="07 Nov, 2020" class="form-control" data-provide="datepicker" data-date-format="dd M, yyyy">
                                    </span>
                                </label>

                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="formrow-firstname-input">Title</label>
                            <input type="text" class="form-control" id="formrow-firstname-input">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="formrow-firstname-input">Content</label>
                            <textarea  class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="formrow-firstname-input">Purpose</label>
                            <input type="text" class="form-control" id="formrow-firstname-input">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="formrow-firstname-input">Department</label>
                            <input type="text" class="form-control" id="formrow-firstname-input">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Create</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

@endsection
@section('script')
    <!-- bootstrap datepicker -->
    <script src="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <!-- datatables-->
    <script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
    <!-- init js -->
    <script src="{{ URL::asset('/assets/js/pages/ecommerce-datatables.init.js') }}"></script>    
    <!-- init js -->
    <script src="{{ URL::asset('/assets/js/pages/form-advanced.init.js') }}"></script>
@endsection