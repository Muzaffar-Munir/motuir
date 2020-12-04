@extends('layouts.master')
@section('title') List @endsection
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
        @slot('pageheading') List @endslot
        @slot('pagetitle') Merchant @endslot
        @slot('title') List @endslot
    @endcomponent
   


    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">

                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="formrow-firstname-input">Certificate</label>
                                
                                <select class="form-control">
                                    <option>Select</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="formrow-firstname-input">Merchant ID</label>                
                                <select class="form-control">
                                    <option>Select</option>
                                    <option>All</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="formrow-firstname-input">Merchant Name</label>                
                                <select class="form-control">
                                    <option>Select</option>
                                    <option>All</option>
                                </select>
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
                        
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="formrow-firstname-input">Multiple Stores</label>  
                                <br>
                                <label><input type="radio" name="exampleRadios" value="option1"> Yes</label>
                                <br>         
                                <label><input type="radio" name="exampleRadios" id="exampleRadios1" value="option1"> No  </label>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="formrow-firstname-input">Arbitration</label>  
                                <br>
                                <label><input type="radio" name="exampleRadios" value="option1"> Yes</label>
                                <br>         
                                <label><input type="radio" name="exampleRadios" id="exampleRadios1" value="option1"> No  </label>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="form-group">
                                <label for="formrow-firstname-input">Subscription</label>  
                                <br>
                                <label><input type="radio" name="exampleRadios" value="option1"> Yes</label>
                                <br>         
                                <label><input type="radio" name="exampleRadios" id="exampleRadios1" value="option1"> No  </label>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="formrow-firstname-input">Limit</label>
                                
                                <input type="text" class="pricerange">
                            </div>
                        </div>

                    </div>

                    <!-- end row -->
                    
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <ul class="nav nav-tabs nav-tabs-custom mb-3 ecommerce-sortby-list">
                                <li class="nav-item">
                                    <a class="nav-link disabled font-weight-medium pl-0" href="#" tabindex="-1"
                                        aria-disabled="true">Sort by:</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">Newest</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Most volumes</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Most transaction</a>
                                </li>
                            </ul>
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
                                    <th scope="col">Merchant ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Limit</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Certificate</th>
                                    <th scope="col">Created</th>
                                    <th scope="col">Multiple Stores</th>
                                    <th scope="col">Arbitration</th>
                                    <th scope="col">Subscription</th>
                                    <th scope="col">Balances</th>
                                    <th scope="col">Notes</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">
                                        <a href="{{route('users.user.details')}}" style="color: inherit;">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="contacusercheck1">
                                                <label class="custom-control-label" for="contacusercheck1"></label>
                                            </div>
                                        </a>
                                    </th>
                                    <td><a href="{{route('users.user.details')}}" style="color: inherit;">#4567</a></td>
                                    <td>
                                        <a href="{{route('users.user.details')}}" class="text-body">Donald Risher</a>
                                    </td>
                                    <td><a href="{{route('users.user.details')}}" style="color: inherit;">
                                        <span class="badge badge-success">Active</span></a>
                                    </td>
                                    <td><a href="{{route('users.user.details')}}" style="color: inherit;">2345</a></td>
                                    <td><a href="{{route('users.user.details')}}" style="color: inherit;">New York</a></td>
                                    <td><a href="{{route('users.user.details')}}" style="color: inherit;">Yes</a></td>
                                    <td><a href="{{route('users.user.details')}}" style="color: inherit;">27 Nov</a></td>
                                    <td><a href="{{route('users.user.details')}}" style="color: inherit;"><span class="badge badge-success">Yes</span></a></td>
                                    <td><a href="{{route('users.user.details')}}" style="color: inherit;"><span class="badge badge-danger">No</span></a></td>
                                    <td><a href="{{route('users.user.details')}}" style="color: inherit;">3456</a></td>
                                    <td> <span class="badge badge-success">Yes</span></td>
                                    <td> <span class="badge badge-danger">No</span></td>
                                    <td>
                                        <button class="btn btn-primary">View</button>
                                        <button class="btn btn-success">Add Note</button>
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
