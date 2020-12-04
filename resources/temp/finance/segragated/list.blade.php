@extends('layouts.master')
@section('title') Segragated List @endsection
@section('css')

    <!-- plugin css -->
    <link href="{{ URL::asset('/assets/libs/select2/select2.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('/assets/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('/assets/libs/bootstrap-touchspin/bootstrap-touchspin.min.css') }}" rel="stylesheet">
    
    <link href="{{ URL::asset('/assets/libs/ion-rangeslider/ion-rangeslider.min.css') }}" rel="stylesheet" type="text/css" />
    <style>
        .datepicker.datepicker-dropdown.dropdown-menu{
            z-index: 99999 !important;
        }
    </style>
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('pageheading') List @endslot
        @slot('pagetitle') Segragated @endslot
        @slot('title') List @endslot
    @endcomponent
    
    <div class="row">
        <div class="col-md-12 mb-3">
            <button class="btn btn-primary" data-toggle="modal" data-target="#new_rep">New segragated report</button>
        </div>

        <div class="col-md-2">
            <div class="form-group">
                <label for="formrow-firstname-input">Type</label>  
                <br>
                <label><input type="radio" name="exampleRadios" value="option1"> Balances</label>
                <br>         
                <label><input type="radio" name="exampleRadios" id="exampleRadios1" value="option1"> Cryptoswab  </label>
            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" >
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
        <div class="col-md-4">
            <div class="form-group">
                <label for="formrow-firstname-input">Amount</label>
                
                <input type="text" id="pricerange">
            </div>
        </div>

    </div>

    <div class="row mt-2">
        <div class="col-lg-12">
            <ul class="nav nav-tabs nav-tabs-custom mb-3 ecommerce-sortby-list">
                <li class="nav-item">
                    <a class="nav-link disabled font-weight-medium pl-0" href="#" tabindex="-1"
                        aria-disabled="true">Sort by:</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Most balances</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Most cryptoswab</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Most user</a>
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
                            <th>User ID</th>
                            <th>Username</th>
                            <th>Balances</th>
                            <th>Cryptoswab</th>
                            <th>Currencies</th>
                            <th>Total in GBP</th>
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
                            <td>myusername</td>
                            <td>
                                $26.30
                            </td>
                            <td>127</td>
                            <td>USD, MY</td>
                            <td>5432</td>
                        </tr>

                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="6" class="text-right">Total</td>
                            <td>5456732</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    <!-- end row -->

    
    <div class="modal fade" id="new_rep" tabindex="-1" role="dialog" aria-labelledby="composemodalTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="composemodalTitle">New segragated report</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>

                        <div class="form-group">
                            <label for="formrow-firstname-input">Report date</label>
                            <input type="text" placeholder="07 Nov, 2020" class="form-control" id="formrow-firstname-input" data-provide="datepicker" data-date-format="dd M, yyyy">
                        </div>

                        <div class="form-group">
                            <label for="formrow-firstname-input">Actual bank account</label> 
                            <input type="text" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="formrow-firstname-input">Current grand total</label> 
                            <input data-toggle="touchspin" type="text" value="0">
                        </div>

                        <div class="form-group">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Back</button>
                            <button type="button" class="btn btn-primary">Generate</button>
                        </div>

                        <hr>

                        <div class="table-responsive custom-table mb-4">
                            <div class="tableButtons2 mb-3"></div>
                            <table class="table table-centered datatable2 dt-responsive nowrap table-card-list table-check"
                                style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">
                                <thead>
                                    <tr class="bg-transparent">
                                        <th>Delete</th>
                                        <th>Report</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>
                                            <button type="button" class="btn btn-danger btn-sm waves-effect waves-light">
                                                <span class="fas fa-trash"></span>
                                            </button>
                                        </td>

                                        <td>Adjustment report #676867 by albert</td>

                                        <td>
                                            
                                            <button type="button" class="btn btn-primary btn-sm waves-effect waves-light">Detail</button>

                                            <button type="button" class="btn btn-danger btn-sm waves-effect waves-light">Download</button>

                                            <button type="button" class="btn btn-success btn-sm waves-effect waves-light" data-toggle="modal" data-target="#complete_modal">Complete</button>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="complete_modal" tabindex="-1" role="dialog" aria-labelledby="composemodalTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="composemodalTitle">Upload bank statement</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>

                        <div class="form-group">
                            <input type="file" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Back</button>
                            <button type="button" class="btn btn-primary">Upload</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('script')
    
    <!-- plugins -->
    <script src="{{ URL::asset('/assets/libs/select2/select2.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/bootstrap-touchspin/bootstrap-touchspin.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>
    <!-- Ion Range Slider-->
    <script src="{{ URL::asset('/assets/libs/ion-rangeslider/ion-rangeSlider.min.js') }}"></script>
    <!-- init js -->
    <script src="{{ URL::asset('/assets/js/pages/product-filter-range.init.js') }}"></script>
    <!-- init js -->
    <script src="{{ URL::asset('/assets/js/pages/form-advanced.init.js') }}"></script>
@endsection