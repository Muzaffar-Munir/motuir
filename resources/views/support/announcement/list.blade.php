@extends('layouts.master')
@section('title') Announcements @endsection
@section('css')
    <!-- bootstrap-datepicker css -->
    <link href="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet">
    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
    <style>
        .table th {
            border: 1px solid #eee !important;
        }
    </style>
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('pageheading') Announcements List @endslot
        @slot('pagetitle') Announcements @endslot
        @slot('title') List @endslot
    @endcomponent
    
    <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                <label for="formrow-firstname-input">Publish</label>
                
                <select class="form-control">
                    <option>Select</option>
                    <option>All</option>
                    <option>Published</option>
                    <option>Scheduled</option>
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
        
    </div>
    <br>

    <div class="row">
        <div class="col-lg-12">

            
        <div class="table-responsive custom-table mb-4">
                <div class="tableButtons1 mb-3"></div>
                <table class="table table-centered datatable1 nowrap table-card-list table-check"
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
                            <th>No</th>
                            <th>Status</th>
                            <th>Date</th>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Purpose</th>
                            <th>Department</th>
                            <th>By</th>
                            <th style="width: 120px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="ordercheck1">
                                    <label class="custom-control-label" for="ordercheck1"></label>
                                </div>
                            </td>

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">Z0112</a> </td>
                            <td>
                                <div class="badge badge-soft-warning font-size-12">Scheduled</div>
                            </td>
                            <td>
                                12 October, 2020
                            </td>
                            <td>Marcel Thomas</td>
                            <td>
                                Content
                            </td>
                            <td>
                                Some
                            </td>
                            <td>
                                Some
                            </td>
                            <td>
                                Some
                            </td>

                            <td>
                                <a href="javascript:void(0);" class="text-primary" data-toggle="tooltip"
                                    data-placement="top" title="Edit"><i class="uil uil-pen font-size-18"></i> Edit</a>
                                <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip"
                                    data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i> Cancel</a>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="ordercheck1">
                                    <label class="custom-control-label" for="ordercheck1"></label>
                                </div>
                            </td>

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">Z0112</a> </td>
                            <td>
                                <div class="badge badge-soft-warning font-size-12">Scheduled</div>
                            </td>
                            <td>
                                12 October, 2020
                            </td>
                            <td>Marcel Thomas</td>
                            <td>
                                Content
                            </td>
                            <td>
                                Some
                            </td>
                            <td>
                                Some
                            </td>
                            <td>
                                Some
                            </td>

                            <td>
                                <a href="javascript:void(0);" class="text-primary" data-toggle="tooltip"
                                    data-placement="top" title="Edit"><i class="uil uil-pen font-size-18"></i> Edit</a>
                                <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip"
                                    data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i> Cancel</a>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="ordercheck1">
                                    <label class="custom-control-label" for="ordercheck1"></label>
                                </div>
                            </td>

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">Z0112</a> </td>
                            <td>
                                <div class="badge badge-soft-warning font-size-12">Scheduled</div>
                            </td>
                            <td>
                                12 October, 2020
                            </td>
                            <td>Marcel Thomas</td>
                            <td>
                                Content
                            </td>
                            <td>
                                Some
                            </td>
                            <td>
                                Some
                            </td>
                            <td>
                                Some
                            </td>

                            <td>
                                <a href="javascript:void(0);" class="text-primary" data-toggle="tooltip"
                                    data-placement="top" title="Edit"><i class="uil uil-pen font-size-18"></i> Edit</a>
                                <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip"
                                    data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i> Cancel</a>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="ordercheck1">
                                    <label class="custom-control-label" for="ordercheck1"></label>
                                </div>
                            </td>

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">Z0112</a> </td>
                            <td>
                                <div class="badge badge-soft-success font-size-12">Published</div>
                            </td>
                            <td>
                                12 October, 2020
                            </td>
                            <td>Marcel Thomas</td>
                            <td>
                                Content
                            </td>
                            <td>
                                Some
                            </td>
                            <td>
                                Some
                            </td>
                            <td>
                                Some
                            </td>

                            <td>
                                
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="ordercheck1">
                                    <label class="custom-control-label" for="ordercheck1"></label>
                                </div>
                            </td>

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">Z0112</a> </td>
                            <td>
                                <div class="badge badge-soft-success font-size-12">Published</div>
                            </td>
                            <td>
                                12 October, 2020
                            </td>
                            <td>Marcel Thomas</td>
                            <td>
                                Content
                            </td>
                            <td>
                                Some
                            </td>
                            <td>
                                Some
                            </td>
                            <td>
                                Some
                            </td>

                            <td>
                                
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="ordercheck1">
                                    <label class="custom-control-label" for="ordercheck1"></label>
                                </div>
                            </td>

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">Z0112</a> </td>
                            <td>
                                <div class="badge badge-soft-success font-size-12">Published</div>
                            </td>
                            <td>
                                12 October, 2020
                            </td>
                            <td>Marcel Thomas</td>
                            <td>
                                Content
                            </td>
                            <td>
                                Some
                            </td>
                            <td>
                                Some
                            </td>
                            <td>
                                Some
                            </td>

                            <td>
                                
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="ordercheck1">
                                    <label class="custom-control-label" for="ordercheck1"></label>
                                </div>
                            </td>

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">Z0112</a> </td>
                            <td>
                                <div class="badge badge-soft-success font-size-12">Published</div>
                            </td>
                            <td>
                                12 October, 2020
                            </td>
                            <td>Marcel Thomas</td>
                            <td>
                                Content
                            </td>
                            <td>
                                Some
                            </td>
                            <td>
                                Some
                            </td>
                            <td>
                                Some
                            </td>

                            <td>
                                
                            </td>
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
    <!-- init js -->
    <script src="{{ URL::asset('/assets/js/pages/form-advanced.init.js') }}"></script>
@endsection