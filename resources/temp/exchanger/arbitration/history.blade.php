@extends('layouts.master')
@section('title') Arbitrate History @endsection
@section('css')
    <!-- bootstrap-datepicker css -->
    <link href="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet">
    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('pageheading') Arbitrate History @endslot
        @slot('pagetitle') Exchanger @endslot
        @slot('title') Arbitrate History @endslot
    @endcomponent
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#navtabs-home" role="tab">
                                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                <span class="d-none d-sm-block">Unsolved</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#navtabs-profile" role="tab">
                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                <span class="d-none d-sm-block">Solved</span>
                            </a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content p-3 text-muted">
                        <div class="tab-pane active" id="navtabs-home" role="tabpanel">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="formrow-firstname-input">Direction</label>
                                        
                                        <select class="form-control">
                                            <option>Select</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="formrow-firstname-input">From</label>
                                        <input type="text" placeholder="07 Nov, 2020" class="form-control" id="formrow-firstname-input" data-provide="datepicker" data-date-format="dd M, yyyy">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="formrow-firstname-input">To</label>
                                        <input type="text" placeholder="07 Nov, 2030" class="form-control" id="formrow-firstname-input" data-provide="datepicker" data-date-format="dd M, yyyy">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group ">
                                        <label for="formrow-firstname-input">Initiator</label>
                                        <input type="text" class="form-control" id="formrow-firstname-input" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="formrow-firstname-input">Defender</label>
                                        <input type="text" class="form-control" id="formrow-firstname-input" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="formrow-firstname-input">Section</label>                
                                        <select class="form-control">
                                            <option>Select</option>
                                            <option>Select</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="formrow-firstname-input">Emoney/Platform</label>                
                                        <select class="form-control">
                                            <option>Select</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="formrow-firstname-input">Case</label>                
                                        <select class="form-control">
                                            <option>Select</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="formrow-firstname-input">Status</label>                
                                        <select class="form-control">
                                            <option>Select</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">

                                    <div class="table-responsive custom-table mb-4">
                                        <div class="datatable_scroll_buttons mb-3"></div>
                                        <table class="table table-centered datatable_scroll nowrap table-check table-card-list" style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">
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
                                                    <th>Initiator</th>
                                                    <th>Defender</th>
                                                    <th>Section</th>
                                                    <th>Platform</th>
                                                    <th>Case</th>
                                                    <th>Amount</th>
                                                    <th>Pledge</th>
                                                    <th>Status</th>
                                                    <th>In favor</th>
                                                    <th>Notes</th>
                                                    <th style="width: 120px;">Action</th>
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
                                                    <td>Connie Franco</td>
                                                    <td>Connie Franco</td>
                                                    <td>Connie Franco</td>
                                                    <td>Connie Franco</td>
                                                    <td>Connie Franco</td>

                                                    <td>
                                                        $26.30
                                                    </td>
                                                    <td>Connie Franco</td>
                                                    <td>
                                                        <div class="badge badge-soft-success font-size-12">Closed</div>
                                                    </td>
                                                    <td>Connie Franco</td>
                                                    <td>Connie Franco</td>

                                                    <td>
                                                        <a href="{{route('exchanger.arbitration.view')}}" class="px-3 btn btn-primary">View</a>
                                                    </td>
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="navtabs-profile" role="tabpanel">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="formrow-firstname-input">Direction</label>
                                        
                                        <select class="form-control">
                                            <option>Select</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="formrow-firstname-input">From</label>
                                        <input type="text" placeholder="07 Nov, 2020" class="form-control" id="formrow-firstname-input" data-provide="datepicker" data-date-format="dd M, yyyy">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="formrow-firstname-input">To</label>
                                        <input type="text" placeholder="07 Nov, 2030" class="form-control" id="formrow-firstname-input" data-provide="datepicker" data-date-format="dd M, yyyy">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group ">
                                        <label for="formrow-firstname-input">Initiator</label>
                                        <input type="text" class="form-control" id="formrow-firstname-input" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="formrow-firstname-input">Defender</label>
                                        <input type="text" class="form-control" id="formrow-firstname-input" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="formrow-firstname-input">Section</label>                
                                        <select class="form-control">
                                            <option>Select</option>
                                            <option>Select</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="formrow-firstname-input">Emoney/Platform</label>                
                                        <select class="form-control">
                                            <option>Select</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="formrow-firstname-input">Case</label>                
                                        <select class="form-control">
                                            <option>Select</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="formrow-firstname-input">Status</label>                
                                        <select class="form-control">
                                            <option>Select</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">

                                    <div class="table-responsive custom-table mb-4">
                                        <div class="tableButtons2 mb-3"></div>  
                                        <table class="table table-centered datatable2 dt-responsive nowrap table-check table-card-list" style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">
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
                                                    <th>Initiator</th>
                                                    <th>Defender</th>
                                                    <th>Section</th>
                                                    <th>Platform</th>
                                                    <th>Case</th>
                                                    <th>Amount</th>
                                                    <th>Pledge</th>
                                                    <th>Status</th>
                                                    <th>In favor</th>
                                                    <th>Notes</th>
                                                    <th style="width: 120px;">Action</th>
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
                                                    <td>Connie Franco</td>
                                                    <td>Connie Franco</td>
                                                    <td>Connie Franco</td>
                                                    <td>Connie Franco</td>
                                                    <td>Connie Franco</td>

                                                    <td>
                                                        $26.30
                                                    </td>
                                                    <td>Connie Franco</td>
                                                    <td>
                                                        <div class="badge badge-soft-success font-size-12">Closed</div>
                                                    </td>
                                                    <td>Connie Franco</td>
                                                    <td>Connie Franco</td>

                                                    <td>
                                                        <a href="{{route('exchanger.arbitration.view')}}" class="px-3 btn btn-primary">View</a>
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
    <script src="{{ URL::asset('/assets/js/pages/datatables.init.js') }}"></script>  
@endsection
