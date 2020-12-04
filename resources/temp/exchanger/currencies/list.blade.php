@extends('layouts.master')
@section('title') Currencies - List @endsection
@section('css')
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('/assets/libs/summernote/summernote.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('pageheading') List @endslot
        @slot('pagetitle') Currencies @endslot
        @slot('title') List @endslot
    @endcomponent
    
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">                
                <button class="btn btn-primary" data-toggle="modal" data-target="#new_pair">Add new pair</button>

                <button class="btn btn-primary" data-toggle="modal" data-target="#new_currency">Create new currency</button>

                <button class="btn btn-primary" data-toggle="modal" data-target="#draft_list">Draft List</button>                
            </div>
            <br>
        </div>
        

        <div class="col-md-2 ">
            <div class="form-group">
                <label for="formrow-firstname-input">Empty pairs</label>  
                <br>
                <label><input type="radio" name="exampleRadios" value="option1"> Yes</label>
                <br>         
                <label><input type="radio" name="exampleRadios" id="exampleRadios1" value="option1"> No  </label>
            </div>
        </div>

        <div class="col-md-2">
            <div class="form-group">
                <label for="formrow-firstname-input">Availability</label>  
                <br>
                <label><input type="radio" name="exampleRadios" value="option1"> Yes</label>
                <br>         
                <label><input type="radio" name="exampleRadios" id="exampleRadios1" value="option1"> No  </label>
            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">
                <label for="formrow-firstname-input">Currency</label>                
                <select class="form-control">
                    <option>Select</option>
                </select>
            </div>
        </div>
        <div class="col-md-3 no_padding">
            <div class="form-group">
                <label for="formrow-firstname-input">Emoney</label>                
                <select class="form-control">
                    <option>Select</option>
                </select>
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
                    <a class="nav-link" href="#">Volumes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Most Emoney</a>
                </li>
            </ul>

            
            <!-- <div class="col-md-12 pb-3 pl-0">
                <div class="dt-buttons btn-group flex-wrap">
                    <button class="btn btn-secondary buttons-excel buttons-html5" tabindex="0" aria-controls="datatable-buttons" type="button"><span>Excel</span></button> 
                    <button class="btn btn-secondary buttons-pdf buttons-html5" tabindex="0" aria-controls="datatable-buttons" type="button"><span>PDF</span></button> 
                    <div class="btn-group"><button class="btn btn-secondary buttons-collection dropdown-toggle buttons-colvis" tabindex="0" aria-controls="datatable-buttons" type="button" aria-haspopup="true" aria-expanded="false"><span>Column visibility</span></button></div>
                </div>
            </div> -->

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
                            <th>Code</th>
                            <th>Name</th>
                            <th>Contries</th>
                            <th>Emoneys</th>
                            <th>Category</th>
                            <th>Availability</th>
                            <th>Maximum</th>
                            <th>Minimum</th>
                            <th>Minimum Insurance</th>
                            <th>Empty Pairs</th>
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
                                Name
                            </td>

                            <td>Contries</td>

                            <td>Emoneys</td>
                            <td>Category</td>
                            <td><label class="badge badge-danger">No</label></td>
                            <td>1233</td>
                            <td>12222</td>
                            <td>232123</td>
                            <td><label class="badge badge-danger">No</label></td>

                            <td>
                                <button type="button" class="btn btn-success btn-sm waves-effect waves-light">Publish</button>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="invoicecheck1">
                                    <label class="custom-control-label" for="invoicecheck1"></label>
                                </div>
                            </td>

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0112</a> </td>
                            
                            <td>
                                Name
                            </td>

                            <td>Contries</td>

                            <td>Emoneys</td>
                            <td>Category</td>
                            <td><label class="badge badge-success">Yes</label></td>
                            <td>1233</td>
                            <td>12222</td>
                            <td>232123</td>
                            <td><label class="badge badge-danger">No</label></td>

                            <td>
                                <!-- <button type="button" class="btn btn-danger btn-sm waves-effect waves-light">Publish</button> -->
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- end row -->

    
    <!-- Modal -->
    <div class="modal fade" id="draft_list" tabindex="-1" role="dialog" aria-labelledby="composemodalTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="composemodalTitle">Draft List</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <table class="table mb-0">

                            <thead>
                                <tr>
                                    <th>All Drafts</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td> <a href="#">All the draft 1</a> </td>
                                </tr>
                                <tr>
                                    <td> <a href="#">All the draft 1</a> </td>
                                </tr>
                                <tr>
                                    <td> <a href="#">All the draft 1</a> </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    
    <div class="modal fade" id="new_pair" tabindex="-1" role="dialog" aria-labelledby="composemodalTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <h4>New exchange pair:</h4>
                    <br>
                    <form class="row">
                        <div class="form-group col-md-6">
                            <label for="formrow-firstname-input">Assigned user: </label> &nbsp;
                            <select class="form-control">
                                <option style="background-image:url('https://themesbrand.com/drezon/layouts/vertical/assets/images/users/avatar-4.jpg');"> US - USD</option>
                                <option>Select</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="formrow-firstname-input">Emoney: </label> &nbsp;
                            <select class="form-control">
                                <option>Select</option>
                                <option>Select</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="formrow-firstname-input">Direction: </label> &nbsp;
                            <select class="form-control direction_onchange">
                                <option value="1">Deposit</option>
                                <option value="2">Withdraw</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6 give_bal">
                            <label for="formrow-firstname-input ">Give balance/ emoney: </label> &nbsp;
                            <input class="form-control" type="text">
                        </div>
                        <div class="form-group col-md-6 get_bal" style="display: none;">
                            <label for="formrow-firstname-input">Get balance/ emoney: </label> &nbsp;
                            <input class="form-control" type="text">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="formrow-firstname-input">Note: </label> &nbsp;
                            <textarea class="form-control" type="text"></textarea>
                        </div>
                        <div class="form-group col-md-12">    
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Back</button> 
                            <button type="button" class="btn btn-primary">Save to draft</button> 
                            <button type="button" class="btn btn-success">Create</button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="new_currency" tabindex="-1" role="dialog" aria-labelledby="composemodalTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <br>
                    <h4>Create new currency:</h4>
                    <br>
                    <form class="row">
                        <div class="form-group col-md-6">
                            <label for="formrow-firstname-input">Currency code: </label> &nbsp;
                            <select class="form-control">
                                <option>Select</option>
                                <option>Select</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <br>
                            <button type="button" class="mt-2 btn btn-success">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <!-- init js -->
    <script src="{{ URL::asset('/assets/js/pages/form-advanced.init.js') }}"></script>
        <!-- datatables-->
        <script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
    <!-- init js -->
    <script src="{{ URL::asset('/assets/js/pages/ecommerce-datatables.init.js') }}"></script>
    <!-- init js -->
    <script src="{{ URL::asset('/assets/js/pages/form-advanced.init.js') }}"></script>
    <!-- summernote Js-->
    <script src="{{ URL::asset('/assets/libs/summernote/summernote.min.js') }}"></script>
    <!-- init js -->
    <script src="{{ URL::asset('/assets/js/pages/email-summernote.init.js') }}"></script>

    <script>
        $(document).ready(function(){

            $(".direction_onchange").on('change', function(){
                
                if($(this).val() == 1){
                    
                    $('.give_bal').show();
                    $('.get_bal').hide();

                }else{                    
                    
                    $('.give_bal').hide();
                    $('.get_bal').show();
                }

            });

        });

        // ticket_sidebar

        var url = window.location.href;

		//console.log(url);

		$('.ticket_sidebar').removeClass('active');

		$("[href='" + url + "']").addClass('active');

    </script>
@endsection