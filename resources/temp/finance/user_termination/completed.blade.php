@extends('layouts.master')
@section('title') User Termination - Completed @endsection
@section('css')
    <!-- bootstrap-datepicker css -->
    <link href="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet">
    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- ION Slider -->
    <link href="{{ URL::asset('/assets/libs/ion-rangeslider/ion-rangeslider.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('pageheading') Completed @endslot
        @slot('pagetitle') User Termination @endslot
        @slot('title') Completed @endslot
    @endcomponent

        <div class="row">

            <div class="col-md-4">
                <div class="form-group">
                    <label for="formrow-firstname-input">From</label>
                    <input type="text" placeholder="07 Nov, 2020" class="form-control" id="formrow-firstname-input" data-provide="datepicker" data-date-format="dd M, yyyy">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="formrow-firstname-input">To</label>
                    <input type="text" placeholder="07 Nov, 2030" class="form-control" id="formrow-firstname-input" data-provide="datepicker" data-date-format="dd M, yyyy">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="formrow-firstname-input">Cases</label>                
                    <select class="form-control">
                        <option>Select</option>
                        <option>All</option>
                    </select>
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
                            <th>ID</th>
                            <th>Case</th>
                            <th>Status</th>
                            <th>Username</th>
                            <th>Exchanger</th>
                            <th>Arbitration</th>
                            <th>Document</th>
                            <th>Balances</th>
                            <th>Remaining in GBP</th>
                            <th>Notes</th>
                            <th>Action</th>
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
                            <td>#er567u</td>
                            <td>6732</td>
                            <td>
                                <span class="badge badge-success">Active</span>
                            </td>
                            <td>Connie Franco</td>
                            <td>Connie Franco</td>
                            <td>Connie Franco</td>
                            <td>Connie Franco</td>
                            <td>6789</td>
                            <td>987654</td>
                            <td>Notes</td>
                            <td>
                                <button type="button" class="btn btn-success btn-sm waves-effect waves-light" data-toggle="modal" data-target="#review_form">View </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>
    <!-- end row -->

    
    <div class="modal fade" id="review_form" tabindex="-1" role="dialog" aria-labelledby="composemodalTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="composemodalTitle">Termination View</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="table-responsive custom-table mb-4">
                        <table class="table table-centered datatable dt-responsive nowrap table-check table-card-list"
                            style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">
                            <thead>
                                <tr class="bg-transparent">
                                    <th style="width: 24px;">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="checkAll">
                                            <label class="custom-control-label" for="checkAll"></label>
                                        </div>
                                    </th>
                                    <th>ID</th>
                                    <th>Username</th>
                                    <th>Date</th>
                                    <th>Case</th>
                                    <th>Status</th>
                                    <th>Exchanger</th>
                                    <th>Arbitration</th>
                                    <th>Balances</th>
                                    <th>Remaining in GBP</th>
                                    <th>Notes</th>
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
                                    <td>#er567u</td>
                                    <td>Connie Franco</td>
                                    <td>
                                        12 Oct, 2020
                                    </td>
                                    <td>6732</td>
                                    <td>
                                        <span class="badge badge-success">Active</span>
                                    </td>
                                    <td><button type="button" class="btn btn-success btn-sm waves-effect waves-light mb-2" >View </button></td>
                                    <td><button type="button" class="btn btn-success btn-sm waves-effect waves-light mb-2" >View </button></td>
                                    <td>6789</td>
                                    <td>987654</td>
                                    <td>Notes</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                        

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Back</button>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('script')
    <!-- bootstrap datepicker -->
    <script src="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <!-- datatables-->
    <script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
    <!-- init js -->
    <script src="{{ URL::asset('/assets/js/pages/ecommerce-datatables.init.js') }}"></script>
    <!-- Ion Range Slider-->
    <script src="{{ URL::asset('/assets/libs/ion-rangeslider/ion-rangeSlider.min.js') }}"></script>
    <script>
        $(document).ready(function() {

            $(".price").ionRangeSlider({
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
