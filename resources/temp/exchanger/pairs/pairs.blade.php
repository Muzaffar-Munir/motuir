@extends('layouts.master')
@section('title') Pairs @endsection
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
        @slot('pageheading') Pairs @endslot
        @slot('pagetitle') Exchanger @endslot
        @slot('title') Pairs @endslot
    @endcomponent
    
    <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                <label for="formrow-firstname-input">All Currency</label>                
                <select class="select2 form-control select2-multiple" multiple="multiple" data-placeholder="Choose ...">
                    <option>USD</option>
                    <option>GBP</option>
                    <option>AUD</option>
                    <option>CAD</option>
                </select>
            </div>
        </div>
        <div class="col-md-3 no_padding">
            <div class="form-group">
                <label for="formrow-firstname-input">Status</label>
                
                <select class="form-control">
                    <option>Select</option>
                    <option>All</option>
                    <option>Active</option>
                    <option>Inprogress</option>
                    <option>Completed</option>
                    <option>Cancelled</option>
                </select>
            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">
                <label for="formrow-firstname-input">E-money</label>                
                <select class="form-control">
                    <option>Select</option>
                    <option>All</option>
                </select>
            </div>
        </div>
        <div class="col-md-3 no_padding">
            <div class="form-group">
                <label for="formrow-firstname-input">Direction</label>
                
                <select class="form-control">
                    <option>Select</option>
                </select>
            </div>
        </div>

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
        <div class="col-md-2 pr-0">
            <div class="form-group">
                <label for="formrow-firstname-input">Cateogry</label>                
                <select class="form-control">
                    <option>Select</option>
                </select>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <label for="formrow-firstname-input">Stage</label>                
                <select class="form-control">
                    <option>Select</option>
                </select>
            </div>
        </div>
        <div class="col-md-2 no_padding">
            <div class="form-group">
                <label for="formrow-firstname-input">Rates</label>                
                <select class="form-control">
                    <option>Select</option>
                </select>
            </div>
        </div>
        

        <div class="col-md-2">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group mb-0 text-center">
                        <label for="formrow-firstname-input">Publisher</label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group mb-1">
                        <input type="text" placeholder="Username" class="form-control" id="formrow-firstname-input" >
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group mb-1">
                        <select class="form-control">
                            <option>Ratings</option>
                            <option>All</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">   
                        <select class="form-control">
                            <option>Certificate Level</option>
                            <option>All</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-2 ">
            <div class="form-group">
                <label for="formrow-firstname-input">Postponed</label>  
                <br>
                <label><input type="radio" name="exampleRadios" value="option1"> Yes</label>
                <br>         
                <label><input type="radio" name="exampleRadios" id="exampleRadios1" value="option1"> No  </label>
            </div>
        </div>
        <div class="col-md-2 ">
            <div class="form-group">
                <label for="formrow-firstname-input">Reported</label>  
                <br>
                <label><input type="radio" name="exampleRadios" value="option1"> Yes</label>
                <br>         
                <label><input type="radio" name="exampleRadios" id="exampleRadios1" value="option1"> No  </label>
            </div>
        </div>
        <div class="col-md-2 ">
            <div class="form-group">
                <label for="formrow-firstname-input">In Arbitration</label>  
                <br>
                <label><input type="radio" name="exampleRadios" value="option1"> Yes</label>
                <br>         
                <label><input type="radio" name="exampleRadios" id="exampleRadios1" value="option1"> No  </label>
            </div>
        </div>
        
        <div class="col-md-2">
            <div class="form-group">
                <label for="formrow-firstname-input">Price</label>
                
                <input type="text" id="pricerange">
            </div>
        </div>

        <div class="col-md-2">
            <div class="form-group">
                <label for="formrow-firstname-input">Volume</label>
                
                <input type="text" id="volume">
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
                                
                                <button type="button" class="btn btn-danger btn-sm waves-effect waves-light" data-toggle="modal" data-target="#composemodal">Postpone  </button>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- end row -->

    
    <div class="modal fade" id="composemodal" tabindex="-1" role="dialog" aria-labelledby="composemodalTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="composemodalTitle">Why you postpone the exchange?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>

                        <!-- <div class="form-group">
                            <label for="formrow-firstname-input">Why you postpone the exchange?</label> 
                            <input type="text" class="form-control">
                        </div> -->

                        <div class="form-group">
                            <label for="formrow-firstname-input">Case</label>                
                            <select class="form-control">
                                <option>Select</option>
                                <option>Select</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="formrow-firstname-input">Additional Note</label>  
                            <textarea class="form-control"> </textarea>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Back</button>
                    <button type="button" class="btn btn-primary">Postpone</button>
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