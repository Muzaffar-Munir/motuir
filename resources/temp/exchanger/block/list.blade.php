@extends('layouts.master')
@section('title') Block List @endsection
@section('css')
    <!-- bootstrap-datepicker css -->
    <link href="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet">
    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('pageheading') Block List @endslot
        @slot('pagetitle') Exchanger @endslot
        @slot('title') Block List @endslot
    @endcomponent

    <div class="row">

        <div class="col-md-3">
            <div class="form-group">
                <label for="formrow-firstname-input">From</label>
                <input type="text" placeholder="07 Nov, 2020" class="form-control" id="formrow-firstname-input" data-provide="datepicker" data-date-format="dd M, yyyy">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="formrow-firstname-input">To</label>
                <input type="text" placeholder="07 Nov, 2030" class="form-control" id="formrow-firstname-input" data-provide="datepicker" data-date-format="dd M, yyyy">
            </div>
        </div>
        
        <div class="col-md-2">
            <div class="form-group ">
                <label for="formrow-firstname-input">Blocker</label>
                <input type="text" class="form-control" id="formrow-firstname-input" >
            </div>
        </div>
        
        <div class="col-md-2">
            <div class="form-group ">
                <label for="formrow-firstname-input">Blocked</label>
                <input type="text" class="form-control" id="formrow-firstname-input" >
            </div>
        </div>
        
        <div class="col-md-2">
            <div class="form-group ">
                <label for="formrow-firstname-input">Section</label>
                <input type="text" class="form-control" id="formrow-firstname-input" >
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">

            <div class="table-responsive custom-table mb-4">
                <div class="tableButtons1 mb-3"></div>
                <table class="table table-centered datatable1 dt-responsive nowrap table-check table-card-list"
                    style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">
                    <thead>
                        <tr class="bg-transparent">
                            <th style="width: 24px;">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="checkAll">
                                    <label class="custom-control-label" for="checkAll"></label>
                                </div>
                            </th>
                            <th>Date</th>
                            <th>Blocker</th>
                            <th>Blocked</th>
                            <th>Section</th>
                            <th>Comments</th>
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
                            <td>
                                12 Oct, 2020
                            </td>
                            <td>Connie Franco</td>
                            <td>Connie Franco</td>
                            <td>Connie Franco</td>
                            <td>Connie Franco</td>
                        </tr>

                        <tr>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="invoicecheck1">
                                    <label class="custom-control-label" for="invoicecheck1"></label>
                                </div>
                            </td>
                            <td>
                                12 Oct, 2020
                            </td>
                            <td>Connie Franco</td>
                            <td>Connie Franco</td>
                            <td>Connie Franco</td>
                            <td>Connie Franco</td>
                        </tr>

                        <tr>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="invoicecheck1">
                                    <label class="custom-control-label" for="invoicecheck1"></label>
                                </div>
                            </td>
                            <td>
                                12 Oct, 2020
                            </td>
                            <td>Connie Franco</td>
                            <td>Connie Franco</td>
                            <td>Connie Franco</td>
                            <td>Connie Franco</td>
                        </tr>

                        <tr>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="invoicecheck1">
                                    <label class="custom-control-label" for="invoicecheck1"></label>
                                </div>
                            </td>
                            <td>
                                12 Oct, 2020
                            </td>
                            <td>Connie Franco</td>
                            <td>Connie Franco</td>
                            <td>Connie Franco</td>
                            <td>Connie Franco</td>
                        </tr>
                        
                    </tbody>
                </table>
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
@endsection
