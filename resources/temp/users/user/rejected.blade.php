@extends('layouts.master')
@section('title') Rejected @endsection
@section('css')
    <!-- bootstrap-datepicker css -->
    <link href="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet">
    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('/assets/libs/select2/select2.min.css') }}" rel="stylesheet">
    <!-- ION Slider -->
    <link href="{{ URL::asset('/assets/libs/ion-rangeslider/ion-rangeslider.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('/assets/libs/summernote/summernote.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('pageheading') Rejected @endslot
        @slot('pagetitle') Users @endslot
        @slot('title') Rejected @endslot
    @endcomponent
   


    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">

                    <div class="table-responsive mb-4">
                        <div class="tableButtons1 mb-3"></div>
                        <table class="table datatable1 table-responsive table-centered table-nowrap table-check mb-0">
                            <thead>
                                <tr>
                                    <th scope="col" style="width: 50px;">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="checkAll">
                                            <label class="custom-control-label" for="checkAll"></label>
                                        </div>
                                    </th>
                                    <th scope="col">ID</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">level</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Country</th>
                                    <th scope="col">Rating</th>
                                    <th scope="col">Created</th>
                                    <th scope="col">Active IMEI</th>
                                    <th scope="col">Trigger</th>
                                    <th scope="col">Documents</th>
                                    <th scope="col">KYC</th>
                                    <th scope="col">Reason</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="contacusercheck1">
                                            <label class="custom-control-label" for="contacusercheck1"></label>
                                        </div>
                                    </th>
                                    <td>#4567</td>
                                    <td>
                                        <img src="{{ URL::asset('/assets/images/users/avatar-1.jpg') }}" alt=""
                                            class="avatar-xs rounded-circle mr-2">
                                        <a href="#" class="text-body">Donald Risher</a>
                                    </td>
                                    <td>
                                        <span class="badge badge-success">123</span>
                                    </td>
                                    <td>
                                        <span class="badge badge-success">Active</span>
                                    </td>
                                    <td>DonaldRisher@drezon.com</td>
                                    <td>+56789097654</td>
                                    <td>Something</td>
                                    <td>Something</td>
                                    <td>Something</td>
                                    <td>Something</td>
                                    <td>Something</td>
                                    <td>Something</td>
                                    <td>Something</td>
                                    <td>Something</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

@endsection
@section('script')
<!-- bootstrap datepicker -->

<script src="{{ URL::asset('/assets/libs/select2/select2.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <!-- init js -->
    <script src="{{ URL::asset('/assets/js/pages/form-advanced.init.js') }}"></script>
        <!-- datatables-->
        <script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
    <!-- init js -->
    <script src="{{ URL::asset('/assets/js/pages/ecommerce-datatables.init.js') }}"></script>
    <!-- init js -->
    <script src="{{ URL::asset('/assets/js/pages/form-advanced.init.js') }}"></script>
    <!-- Ion Range Slider-->
    <script src="{{ URL::asset('/assets/libs/ion-rangeslider/ion-rangeSlider.min.js') }}"></script>
    <!-- init js -->
    <script src="{{ URL::asset('/assets/js/pages/product-filter-range.init.js') }}"></script>
    <!-- init js -->
    <script src="{{ URL::asset('/assets/js/pages/range-sliders.init.js') }}"></script>
    <!-- summernote Js-->
    <script src="{{ URL::asset('/assets/libs/summernote/summernote.min.js') }}"></script>
    <!-- init js -->
    <script src="{{ URL::asset('/assets/js/pages/email-summernote.init.js') }}"></script>
@endsection
