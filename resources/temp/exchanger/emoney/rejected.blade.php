@extends('layouts.master')
@section('title') Emoney - Rejected @endsection
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
        @slot('pageheading') Rejected  @endslot
        @slot('pagetitle') Emoney @endslot
        @slot('title') Rejected @endslot
    @endcomponent

    <div class="row mt-2">
        <div class="col-lg-12">
            <ul class="nav nav-tabs nav-tabs-custom mb-3 ecommerce-sortby-list">
                <li class="nav-item">
                    <a class="nav-link disabled font-weight-medium pl-0" href="#" tabindex="-1"
                        aria-disabled="true">Sort by:</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Popularity</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Newest</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Volume</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Most Favourite</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Most Saved</a>
                </li>

            </ul>


            <div class="table-responsive custom-table mb-4">
            <div class="tableButtons1 mb-3"></div>
            <table class="table table-centered datatable1 dt-responsive nowrap table-card-list table-check"
                    style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">
                    <thead>
                        <tr class="bg-transparent">
                            <th style="width: 20px;">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" name="check" class="custom-control-input" id="checkAll"
                                        table-target="datatable-order" value="1">
                                    <label class="custom-control-label" for="checkAll"></label>
                                </div>
                            </th>
                            <th>Exchange ID</th>
                            <th>Created</th>
                            <th>Currency</th>
                            <th>E-money</th>
                            <th>Direction</th>
                            <th>Get</th>
                            <th>Give</th>
                            <th>Rate</th>
                            <th>Stage</th>
                            <th>Reason</th>
                            <th>By Admin</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="invoicecheck1">
                                    <label class="custom-control-label" for="invoicecheck1"></label>
                                </div>
                            </td>

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0112</a> </td>
                            
                            <td>
                                12 Oct, 2020
                            </td>

                            <td>
                                $26.30
                            </td>

                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>myusername</td>
                            <td>127</td>
                            <td>Stage</td>

                            <td>                                
                                Reason
                            </td>
                            <td>                                
                                Admin
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- end row -->

    
    <div class="modal fade" id="reject_req" tabindex="-1" role="dialog" aria-labelledby="composemodalTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="composemodalTitle">Why you reject the request?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>

                        <div class="form-group">
                            <textarea class="form-control"> </textarea>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Back</button>
                    <button type="button" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>

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

    <script>
        $(document).ready(function() {

            $("#volume").ionRangeSlider({
                skin: "round",
                type: "double",
                grid: true,
                min: 0,
                max: 2000,
                from: 500,
                to: 1500
            });
        });
    </script>
@endsection