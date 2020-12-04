@extends('layouts.master')
@section('title') Expenses @endsection
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
        @slot('pageheading') Expenses @endslot
        @slot('pagetitle') Finance @endslot
        @slot('title') Expenses @endslot
    @endcomponent

        <div class="row">
            <div class="col-md-12 form-inline">
                <div class="form-group">
                    <label for="formrow-firstname-input">Summaries:</label> &nbsp;&nbsp;
                    <select class="form-control">
                        <option>This month</option>
                        <option>Last month</option>
                        <option>Past 6 month</option>
                        <option>This year</option>
                        <option>Last year</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-3">
            @include('finance.partials.summary',
            [
                'title' => 'Total transaction',
                'value' => '1234123',
                'icon' => 'bar-chart-2',
                'color' => 'primary',

            ])
            </div>
            <div class="col-md-3">
            @include('finance.partials.summary',
            [
                'title' => 'Total Amount',
                'value' => '9876533',
                'icon' => 'pie-chart',
                'color' => 'danger',

            ])
            </div>
            <div class="col-md-3">
            @include('finance.partials.summary',
            [
                'title' => 'Total Income',
                'value' => '886234',
                'icon' => 'trending-up',
                'color' => 'success',

            ])
            </div>
            <div class="col-md-3">
            @include('finance.partials.summary',
            [
                'title' => 'Total Users',
                'value' => '234',
                'icon' => 'users',
                'color' => 'alert',

            ])
            </div>
        </div>


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
            
            <div class="col-md-6">
                <div class="form-group">
                    <label for="formrow-firstname-input">Cateogry</label>
                    <br>
                    <label for="defaultCheck1" class="mt-2 mb-3">
                        <input type="checkbox" value="" id="defaultCheck1"> &nbsp; All
                    </label>
                    &nbsp;&nbsp;&nbsp;
                    <label for="defaultCheck2" class="mt-2 mb-3">
                        <input type="checkbox" value="" id="defaultCheck2"> &nbsp; Payroll
                    </label>
                    &nbsp;&nbsp;&nbsp;
                    <label for="defaultCheck3" class="mt-2 mb-3">
                        <input type="checkbox" value="" id="defaultCheck3"> &nbsp; Outsource
                    </label>
                    &nbsp;&nbsp;
                    <label for="defaultCheck4" class="mt-2 mb-3">
                        <input type="checkbox" value="" id="defaultCheck4"> &nbsp; Inhouse
                    </label>
                    &nbsp;&nbsp;
                    <label for="defaultCheck5" class="mt-2 mb-3">
                        <input type="checkbox" value="" id="defaultCheck5"> &nbsp; Other
                    </label>

                </div>
            </div>
            
            <div class="col-md-3">
                <div class="form-group">
                    <label for="formrow-firstname-input">Type</label>                
                    <select class="form-control">
                        <option>Select</option>
                        <option>All</option>
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="formrow-firstname-input">Payment</label>                
                    <select class="form-control">
                        <option>Select</option>
                        <option>All</option>
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="formrow-firstname-input">Employee</label>                
                    <select class="form-control">
                        <option>Select</option>
                        <option>All</option>
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group ">
                    <label for="formrow-firstname-input">Amount</label>
                    <input type="text" class="price">
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
                            <th>Category</th>
                            <th>Type</th>
                            <th>Payment</th>
                            <th>Amount</th>
                            <th>Employee</th>
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
                            <td>
                                12 Oct, 2020
                            </td>
                            <td>ABC</td>
                            <td>Open</td>
                            <td>$678</td>
                            <td>$5678</td>
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
                            <td>ABC</td>
                            <td>Open</td>
                            <td>$678</td>
                            <td>$5678</td>
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
                            <td>ABC</td>
                            <td>Open</td>
                            <td>$678</td>
                            <td>$5678</td>
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
                            <td>ABC</td>
                            <td>Open</td>
                            <td>$678</td>
                            <td>$5678</td>
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
                            <td>ABC</td>
                            <td>Open</td>
                            <td>$678</td>
                            <td>$5678</td>
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
