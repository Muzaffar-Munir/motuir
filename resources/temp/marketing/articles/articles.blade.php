@extends('layouts.master')
@section('title') Medium Articles @endsection
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
        @slot('pageheading') Medium Articles @endslot
        @slot('pagetitle') Marketing @endslot
        @slot('title') Medium Articles @endslot
    @endcomponent
   


    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">

                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#navtabs-home" role="tab">
                                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                <span class="d-none d-sm-block">List</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#navtabs-messages" role="tab">
                                <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                                <span class="d-none d-sm-block">History</span>
                            </a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content p-3 text-muted">

                        <div class="tab-pane active" id="navtabs-home" role="tabpanel">
                            
                            <div class="row">
                                <div class="col-md-3 mt-2">
                                    <div class="form-group">
                                        <br>
                                        <button class="btn btn-primary">Add new</button>

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
                                            <th scope="col">Date</th>
                                            <th scope="col">ID</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Description </th>
                                            <th scope="col">Goal</th>
                                            <th scope="col">Budget</th>
                                            <th scope="col">Author</th>
                                            <th scope="col">Assigned admin</th>
                                            <th scope="col">Parameter</th>
                                            <th scope="col">Indicator</th>
                                            <th scope="col">Budget break down</th>
                                            <th scope="col">Notes</th>
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
                                            <td>7 Nov</td>
                                            <td>#45678</td>
                                            <td>Some Text</td>
                                            <td>Some Text</td>
                                            <td>Some Text</td>
                                            <td>
                                                <span class="badge badge-success">Done</span>
                                            </td>
                                            <td>Some Text</td>
                                            <td>Some Text</td>
                                            <td>Some Text</td>
                                            <td>Some Text</td>
                                            <td>Some Text</td>
                                            <td>Some Text</td>
                                            <td>
                                                <button class="btn btn-primary">View</button>
                                                <button class="btn btn-success">Add note</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        
                        </div>

                        <div class="tab-pane" id="navtabs-messages" role="tabpanel">
                            
                            <div class="row">
                                <div class="col-md-3 mt-2">
                                    <div class="form-group">
                                        <br>
                                        <button class="btn btn-primary">Add new</button>

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
                                            <th scope="col">Date</th>
                                            <th scope="col">ID</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Description </th>
                                            <th scope="col">Purpose</th>
                                            <th scope="col">Scheduled</th>
                                            <th scope="col">By</th>
                                            <th scope="col">Expected result</th>
                                            <th scope="col">Parameter</th>
                                            <th scope="col">Indicator</th>
                                            <th scope="col">Achivement details</th>
                                            <th scope="col">Notes</th>
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
                                            <td>7 Nov</td>
                                            <td>#45678</td>
                                            <td>Some Text</td>
                                            <td>Some Text</td>
                                            <td>Some Text</td>
                                            <td>
                                                <span class="badge badge-success">Done</span>
                                            </td>
                                            <td>Some Text</td>
                                            <td>Some Text</td>
                                            <td>Some Text</td>
                                            <td>Some Text</td>
                                            <td>Some Text</td>
                                            <td>Some Text</td>
                                            <td>
                                                <button class="btn btn-primary">View</button>
                                                <!-- <button class="btn btn-success">Add notes</button> -->
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        
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
