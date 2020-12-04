@extends('layouts.master')
@section('title') Transactions @endsection
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
        @slot('pageheading') Transactions @endslot
        @slot('pagetitle') Wallet @endslot
        @slot('title') Transactions @endslot
    @endcomponent
   


    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="formrow-firstname-input">From</label>
                                <input type="text" placeholder="07 Nov, 2020" class="form-control" id="formrow-firstname-input" data-provide="datepicker" data-date-format="dd M, yyyy">
                            </div>
                        </div>
                        <div class="col-md-3 no_padding">
                            <div class="form-group">
                                <label for="formrow-firstname-input">To</label>
                                <input type="text" placeholder="07 Nov, 2030" class="form-control" id="formrow-firstname-input" data-provide="datepicker" data-date-format="dd M, yyyy">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Category</label>
                                <select name="" class="form-control">
                                    <option value="1">Wallet</option>
                                    <option value="1">Exchanger</option>
                                    <option value="1">Cash Station</option>
                                    <option value="1">Merchant</option>
                                    <option value="1">Arbitration</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Direction</label>
                                <select name="" class="form-control">
                                    <option value="1">Inbound</option>
                                    <option value="1">Outbound</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Title</label>
                                <select name="" class="form-control">
                                    <option value="1">Conversion</option>
                                    <option value="volvo">Cryptoswab</option>
                                    <option value="volvo">Cryptoswab - Back</option>
                                    <option value="saab">Sent</option>
                                    <option value="saab">Request</option>
                                    <option value="saab">Deposit</option>
                                    <option value="saab">Withdraw</option>
                                    <option value="saab">Fees</option>
                                    <option value="saab">Insurance Fee</option>
                                    <option value="mercedes">Insurance Fee - Refund</option>
                                    <option value="mercedes">Arbitration Pledge</option>
                                    <option value="mercedes">Arbitration Pledge - Refund</option>
                                    <option value="mercedes">Later</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="formrow-firstname-input">Currency</label>                
                                <select class="select2 form-control select2-multiple" multiple="multiple" data-placeholder="Choose ...">
                                    <option>USD</option>
                                    <option>GBP</option>
                                    <option>AUD</option>
                                    <option>CAD</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="formrow-firstname-input">Amount</label>
                                
                                <input type="text" class="pricerange">
                            </div>
                        </div>

                    </div>

                    <ul class="nav nav-tabs nav-tabs-custom mb-3 ecommerce-sortby-list">
                        <li class="nav-item">
                            <a class="nav-link disabled font-weight-medium pl-0" href="#" tabindex="-1"
                                aria-disabled="true">Sort by:</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Most currency</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Most user</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Most category</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Most title</a>
                        </li>

                    </ul>


                    <div class="table-responsive mb-4">
                        <div class="tableButtons1 mb-3"></div>
                        <table class="table datatable1 dt-responsive table-centered table-nowrap table-check mb-0">
                            <thead>
                                <tr>
                                    <th scope="col" style="width: 50px;">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="checkAll">
                                            <label class="custom-control-label" for="checkAll"></label>
                                        </div>
                                    </th>
                                    <th scope="col">Transaction id</th>
                                    <th scope="col">Date time</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Direction</th>
                                    <th scope="col">Currency</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Action</th>
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
                                    <td>#45678</td>
                                    <td>7 Nov</td>
                                    <td>Some Text</td>
                                    <td>Some Text</td>
                                    <td>Some Text</td>
                                    <td>Some Text</td>
                                    <td>Some Text</td>
                                    <td>Some Text</td>
                                    <td>
                                        <button class="btn btn-primary"> View</button>
                                    </td>
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

    <script>
        $(document).ready(function() {

            $(".pricerange").ionRangeSlider({
                skin: "round",
                type: "double",
                grid: true,
                min: 0,
                max: 2000,
                from: 500,
                to: 1500
            });
            $('input[type=radio][name=merchant_change]').change(function() {
                if (this.value == 1) {
                    $('.merchant_change_block').show();
                }
                else {
                    $('.merchant_change_block').hide();
                }
            });
        });
    </script>
@endsection
