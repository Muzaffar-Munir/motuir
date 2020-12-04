@extends('layouts.master')
@section('title') Terminated Users @endsection
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
        @slot('pageheading') Terminated Users @endslot
        @slot('pagetitle') Merchant @endslot
        @slot('title') Terminated Users @endslot
    @endcomponent
   


    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="formrow-firstname-input">New Users</label>
                                
                                <div class="row">
                                    <div class="col-md-2 pr-0 pt-2"><label><input type="radio" name="exampleRadios" value="option1"></label></div>
                                    <div class="col-md-5 pl-0"><input type="text" placeholder="07 Nov, 2020" class="form-control" id="formrow-firstname-input" data-provide="datepicker" data-date-format="dd M, yyyy"></div>
                                    <div class="col-md-5 pl-0"><input type="text" placeholder="07 Nov, 2030" class="form-control" id="formrow-firstname-input" data-provide="datepicker" data-date-format="dd M, yyyy"></div>
                                </div>
                                    
                                <br>
                                <label class="label"><input type="radio" name="exampleRadios" value="option1"> &nbsp; This Month</label>
                                <br>         
                                <label class="label"><input type="radio" name="exampleRadios" value="option1"> &nbsp; This Week  </label>
                            </div>
                        </div>
                        <div class="col-md-2 ">
                            <div class="form-group">
                                <label for="formrow-firstname-input">Cash Station</label>  
                                <br>
                                <label><input type="radio" name="exampleRadios" value="option1"> Yes</label>
                                <br>         
                                <label><input type="radio" name="exampleRadios" id="exampleRadios1" value="option1"> No  </label>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="formrow-firstname-input">Merchant</label>  
                                <br>
                                <label><input type="radio" name="merchant_change" class="merchant_change" value="1" checked> Yes</label>
                                <br>         
                                <label><input type="radio" name="merchant_change" class="merchant_change" value="0"> No  </label>
                            </div>
                        </div>
                        <div class="col-md-2 merchant_change_block">
                            <div class="form-group">
                                <label for="formrow-firstname-input">Multiple Stores</label>  
                                <br>
                                <label><input type="checkbox" name="exampleRadios" value="option1"> High Risk Users</label>   
                                <label><input type="checkbox" name="exampleRadios" id="exampleRadios1" value="option1"> Reported Users  </label>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="form-group">
                                <label for="formrow-firstname-input">In watch</label>  
                                <br>
                                <label><input type="radio" name="exampleRadios" value="option1"> Yes</label>
                                <br>         
                                <label><input type="radio" name="exampleRadios" id="exampleRadios1" value="option1"> No  </label>
                            </div>
                        </div>
                        <div class="col-md-1">
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
                                <label for="formrow-firstname-input">User API</label>  
                                <br>
                                <label><input type="radio" name="exampleRadios" value="option1"> Yes</label>
                                <br>         
                                <label><input type="radio" name="exampleRadios" id="exampleRadios1" value="option1"> No  </label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="formrow-firstname-input">Status</label>
                                
                                <select class="form-control">
                                    <option>Select</option>
                                    <option>Active</option>
                                    <option>Limited</option>
                                    <option>Locked</option>
                                    <option>Terminated</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="formrow-firstname-input">Rating</label>                
                                <select class="form-control">
                                    <option>Select</option>
                                    <option>All</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="formrow-firstname-input">Level</label>                
                                <select class="form-control">
                                    <option>Select</option>
                                    <option>All</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="formrow-firstname-input">Country</label>                
                                <select class="form-control">
                                    <option>Select</option>
                                    <option>All</option>
                                </select>
                            </div>
                        </div>

                        
                        <div class="col-md-2">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group mb-0 text-center">
                                        <label for="formrow-firstname-input">Device</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-1">
                                        <input type="text" placeholder="IMEI" class="form-control" id="formrow-firstname-input" >
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-1">
                                        <select class="form-control">
                                            <option>Type</option>
                                            <option>Android</option>
                                            <option>IOS</option>
                                            <option>Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">   
                                        <select class="form-control">
                                            <option>Model</option>
                                            <option>All</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="formrow-firstname-input">Balance</label>
                                
                                <input type="text" class="pricerange">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="formrow-firstname-input">Limit</label>
                                
                                <input type="text" class="pricerange">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="formrow-firstname-input">Volumes</label>
                                
                                <input type="text" class="pricerange">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="formrow-firstname-input">Transactions</label>
                                
                                <input type="text" class="pricerange">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="formrow-firstname-input">Fees</label>
                                
                                <input type="text" class="pricerange">
                            </div>
                        </div>

                    </div>

                    <!-- end row -->
                    
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="nav nav-tabs nav-tabs-custom mb-3 ecommerce-sortby-list">
                                <li class="nav-item">
                                    <a class="nav-link disabled font-weight-medium pl-0" href="#" tabindex="-1"
                                        aria-disabled="true">Sort by:</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">Later</a>
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
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Country</th>
                                    <th scope="col">Level</th>
                                    <th scope="col">Rating</th>
                                    <th scope="col">Created</th>
                                    <th scope="col">Last login</th>
                                    <th scope="col">Active IMEI</th>
                                    <th scope="col">Currencies</th>
                                    <th scope="col">Emoneys</th>
                                    <th scope="col">Balance</th>
                                    <th scope="col">Swab</th>
                                    <th scope="col">Exchanger</th>
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
                                    <td>#4567</td>
                                    <td>
                                        <img src="{{ URL::asset('/assets/images/users/avatar-1.jpg') }}" alt=""
                                            class="avatar-xs rounded-circle mr-2">
                                        <a href="#" class="text-body">Donald Risher</a>
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
                                    <td>Something</td>
                                    <td>Something</td>
                                    <td>Something</td>
                                    <td>
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item">
                                                <a href="javascript:void(0);" class="px-2 text-primary"
                                                    data-toggle="tooltip" data-placement="top" title="View"><i
                                                        class="uil uil-eye font-size-18"></i> View</a>
                                            </li>
                                        </ul>
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
