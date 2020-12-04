@extends('layouts.master')
@section('title') Bookeeping - Balance Sheet @endsection
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
        @slot('pageheading') Balance Sheet @endslot
        @slot('pagetitle') Bookeeping @endslot
        @slot('title') Balance Sheet @endslot
    @endcomponent

        <div class="row">

            <div class="col-md-6">
                <div class="form-group">
                    <br>
                    <button class="btn btn-primary" data-toggle="modal" data-target="#new_report">New Report</button>
                </div>
            </div>
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
                            <th>ID</th>
                            <th>Date</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Document</th>
                            <th>Income</th>
                            <th>Expenses</th>
                            <th>Balance</th>
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
                            <td>
                                12 Oct, 2020
                            </td>
                            <td>Connie Franco</td>
                            <td>Connie Franco</td>
                            <td>
                                <span class="badge badge-success">Yes</span>
                            </td>
                            <td>6732</td>
                            <td>6789</td>
                            <td>987654</td>
                        </tr>
                    </tbody>
                    <tfoot>

                        <tr>
                            <td class="text-right" colspan="8">Total:</td>
                            <td>987654</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            
        </div>
    </div>
    <!-- end row -->

    
    <div class="modal fade" id="new_report" tabindex="-1" role="dialog" aria-labelledby="composemodalTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="composemodalTitle">New Report</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="formrow-firstname-input">Date</label> 
                                <input type="text" placeholder="07 Nov, 2020" class="form-control" id="formrow-firstname-input" data-provide="datepicker" data-date-format="dd M, yyyy">
                            </div>
                            <div class="form-group">
                                <label for="formrow-firstname-input">Name</label> 
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="formrow-firstname-input">Description</label>  
                                    <textarea class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="formrow-firstname-input">Amount</label> 
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="formrow-firstname-input">Type</label>                
                                <select class="form-control">
                                    <option value="1">Income</option>
                                    <option value="2">Expenses</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="formrow-firstname-input">Upload Document</label> 
                                <input type="file" class="form-control">
                            </div>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Submit</button>
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
@endsection
