@extends('layouts.master')
@section('title') Invitations @endsection
@section('css')
    <!-- bootstrap-datepicker css -->
    <link href="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet">
    <style>
        table.table tr th {
            border: 1px solid #eee !important;
        }
    </style>
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('pageheading') Invitations @endslot
        @slot('pagetitle') Home @endslot
        @slot('title') Invitations @endslot
    @endcomponent
    
    <div class="row">
        <div class="col-md-2">
            <div class="form-group">
                <label for="formrow-firstname-input">From</label>
                <input type="text" placeholder="07 Nov, 2020" class="form-control" id="formrow-firstname-input" data-provide="datepicker" data-date-format="dd M, yyyy">
            </div>
        </div>
        <div class="col-md-2 no_padding">
            <div class="form-group">
                <label for="formrow-firstname-input">To</label>
                <input type="text" placeholder="07 Nov, 2030" class="form-control" id="formrow-firstname-input" data-provide="datepicker" data-date-format="dd M, yyyy">
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <label for="formrow-firstname-input">Status</label>
                
                <select class="form-control">
                    <option>Select</option>
                    <option>Pending</option>
                    <option>Pass</option>
                    <option>Suspicious</option>
                    <option>Paid</option>
                </select>
            </div>
        </div>
        <div class="col-md-2 no_padding">
            <div class="form-group">
                <label for="formrow-firstname-input">Transaction Volumes</label>
                
                <select class="form-control">
                    <option>Select</option>
                    <option>0 – 100 GBP</option>
                    <option>100 – 500 GBP</option>
                    <option>More than 500 GBP</option>
                </select>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <label for="formrow-firstname-input">Referrer Domain</label>
                <input type="text" placeholder="Referrer Domain" class="form-control" id="formrow-firstname-input" >
            </div>
        </div>
        <div class="col-md-2 no_padding">
            <div class="form-group">
                <label for="formrow-firstname-input">Referrer URL</label>
                <input type="text" placeholder="Referrer URL" class="form-control" id="formrow-firstname-input" >
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="formrow-firstname-input">Platform</label>
                
                <select class="form-control">
                    <option>Select</option>
                    <option>Email</option>
                    <option>Web</option>
                    <option>Whatsapp</option>
                    <option>App</option>
                    <option>Other</option>
                </select>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="formrow-firstname-input">Sign Up</label>
                
                <select class="form-control">
                    <option>Select</option>
                    <option>Web</option>
                    <option>App</option>
                    <option>Mobile</option>
                    <option>Other</option>
                </select>
            </div>
        </div>
        <div class="col-md-3 pl-0">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group mb-0 text-center">
                        <label for="formrow-firstname-input">Invitee</label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group mb-1">
                        <input type="text" placeholder="User ID or Username" class="form-control" id="formrow-firstname-input" >
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group mb-1">
                        <input type="text" placeholder="IP Address" class="form-control" id="formrow-firstname-input" >
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group mb-1">   
                        <input type="text" placeholder="Device IMEI" class="form-control" id="formrow-firstname-input" >
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 no_padding">
            <div class="row">
                <div class="col-md-12">  
                    <div class="form-group text-center mb-0">                  
                        <label for="formrow-firstname-input">Invited</label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group mb-1">
                        <input type="text" placeholder="IP Address" class="form-control" id="formrow-firstname-input" >
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">  
                        <input type="text" placeholder="Device IMEI" class="form-control" id="formrow-firstname-input" >
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>

    <div class="row">
        <div class="col-lg-12">

            <div class="table-responsive custom-table mb-4">
                <div class="datatable_scroll_buttons mb-3"></div>
                <table class="table datatable_scroll table-centered nowrap table-check table-card-list"
                    style="border-collapse: collapse !important; border-spacing: 0 8px; width: 100%;">
                    <thead>
                        <tr class="bg-white">
                            <th rowspan="2">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="checkAll">
                                    <label class="custom-control-label" for="checkAll"></label>
                                </div>
                            </th>
                            <th rowspan="2">Date</th>
                            <th rowspan="2">ID</th>
                            <th class="text-center" colspan="3">Invitee</th>
                            <th class="text-center" colspan="3">Invited</th>
                            <th rowspan="2">Status</th>
                            <th rowspan="2">Volumes</th>
                            <th class="text-center" colspan="3">Referer</th>
                            <th rowspan="2">Sign up</th>
                            <th rowspan="2">Footprint</th>
                            <th rowspan="2">Install</th>
                            <th rowspan="2">Action</th>
                        </tr>

                        <tr>
                            <th>Username</th>
                            <th>IP</th>
                            <th>Device</th>

                            <th>Username</th>
                            <th>IP</th>
                            <th>Device</th>
                            
                            <th>Domain</th>
                            <th>Complete URL</th>
                            <th>Platform</th>

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

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0112</a> </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>
                                <div class="badge badge-soft-success font-size-12">Paid</div>
                            </td>
                            <td>
                                $26.30
                            </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>Sign up</td>
                            <td>Footprint</td>
                            <td>
                                <div>
                                    <button class="btn btn-light btn-sm w-xs">Pdf <i
                                            class="uil uil-download-alt ml-2"></i></button>
                                </div>
                            </td>

                            <td>
                                <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
                            </td>
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

    <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0112</a> </td>
    <td>myusername</td>
    <td>127.0.0.1</td>
    <td>Apple</td>
    <td>myusername</td>
    <td>127.0.0.1</td>
    <td>Apple</td>
    <td>
        <div class="badge badge-soft-success font-size-12">Paid</div>
    </td>
    <td>
        $26.30
    </td>
    <td>myusername</td>
    <td>127.0.0.1</td>
    <td>Apple</td>
    <td>Sign up</td>
    <td>Footprint</td>
    <td>
        <div>
            <button class="btn btn-light btn-sm w-xs">Pdf <i
                    class="uil uil-download-alt ml-2"></i></button>
        </div>
    </td>

    <td>
        <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
    </td>
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

    <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0112</a> </td>
    <td>myusername</td>
    <td>127.0.0.1</td>
    <td>Apple</td>
    <td>myusername</td>
    <td>127.0.0.1</td>
    <td>Apple</td>
    <td>
        <div class="badge badge-soft-success font-size-12">Paid</div>
    </td>
    <td>
        $26.30
    </td>
    <td>myusername</td>
    <td>127.0.0.1</td>
    <td>Apple</td>
    <td>Sign up</td>
    <td>Footprint</td>
    <td>
        <div>
            <button class="btn btn-light btn-sm w-xs">Pdf <i
                    class="uil uil-download-alt ml-2"></i></button>
        </div>
    </td>

    <td>
        <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
    </td>
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

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0112</a> </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>
                                <div class="badge badge-soft-success font-size-12">Paid</div>
                            </td>
                            <td>
                                $26.30
                            </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>Sign up</td>
                            <td>Footprint</td>
                            <td>
                                <div>
                                    <button class="btn btn-light btn-sm w-xs">Pdf <i
                                            class="uil uil-download-alt ml-2"></i></button>
                                </div>
                            </td>

                            <td>
                                <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
                            </td>
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

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0112</a> </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>
                                <div class="badge badge-soft-success font-size-12">Paid</div>
                            </td>
                            <td>
                                $26.30
                            </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>Sign up</td>
                            <td>Footprint</td>
                            <td>
                                <div>
                                    <button class="btn btn-light btn-sm w-xs">Pdf <i
                                            class="uil uil-download-alt ml-2"></i></button>
                                </div>
                            </td>

                            <td>
                                <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
                            </td>
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

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0112</a> </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>
                                <div class="badge badge-soft-success font-size-12">Paid</div>
                            </td>
                            <td>
                                $26.30
                            </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>Sign up</td>
                            <td>Footprint</td>
                            <td>
                                <div>
                                    <button class="btn btn-light btn-sm w-xs">Pdf <i
                                            class="uil uil-download-alt ml-2"></i></button>
                                </div>
                            </td>

                            <td>
                                <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
                            </td>
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

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0112</a> </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>
                                <div class="badge badge-soft-success font-size-12">Paid</div>
                            </td>
                            <td>
                                $26.30
                            </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>Sign up</td>
                            <td>Footprint</td>
                            <td>
                                <div>
                                    <button class="btn btn-light btn-sm w-xs">Pdf <i
                                            class="uil uil-download-alt ml-2"></i></button>
                                </div>
                            </td>

                            <td>
                                <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
                            </td>
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

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0112</a> </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>
                                <div class="badge badge-soft-success font-size-12">Paid</div>
                            </td>
                            <td>
                                $26.30
                            </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>Sign up</td>
                            <td>Footprint</td>
                            <td>
                                <div>
                                    <button class="btn btn-light btn-sm w-xs">Pdf <i
                                            class="uil uil-download-alt ml-2"></i></button>
                                </div>
                            </td>

                            <td>
                                <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
                            </td>
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

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0112</a> </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>
                                <div class="badge badge-soft-success font-size-12">Paid</div>
                            </td>
                            <td>
                                $26.30
                            </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>Sign up</td>
                            <td>Footprint</td>
                            <td>
                                <div>
                                    <button class="btn btn-light btn-sm w-xs">Pdf <i
                                            class="uil uil-download-alt ml-2"></i></button>
                                </div>
                            </td>

                            <td>
                                <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
                            </td>
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

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0112</a> </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>
                                <div class="badge badge-soft-success font-size-12">Paid</div>
                            </td>
                            <td>
                                $26.30
                            </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>Sign up</td>
                            <td>Footprint</td>
                            <td>
                                <div>
                                    <button class="btn btn-light btn-sm w-xs">Pdf <i
                                            class="uil uil-download-alt ml-2"></i></button>
                                </div>
                            </td>

                            <td>
                                <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
                            </td>
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

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0112</a> </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>
                                <div class="badge badge-soft-success font-size-12">Paid</div>
                            </td>
                            <td>
                                $26.30
                            </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>Sign up</td>
                            <td>Footprint</td>
                            <td>
                                <div>
                                    <button class="btn btn-light btn-sm w-xs">Pdf <i
                                            class="uil uil-download-alt ml-2"></i></button>
                                </div>
                            </td>

                            <td>
                                <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
                            </td>
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

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0112</a> </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>
                                <div class="badge badge-soft-success font-size-12">Paid</div>
                            </td>
                            <td>
                                $26.30
                            </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>Sign up</td>
                            <td>Footprint</td>
                            <td>
                                <div>
                                    <button class="btn btn-light btn-sm w-xs">Pdf <i
                                            class="uil uil-download-alt ml-2"></i></button>
                                </div>
                            </td>

                            <td>
                                <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
                            </td>
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

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0112</a> </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>
                                <div class="badge badge-soft-success font-size-12">Paid</div>
                            </td>
                            <td>
                                $26.30
                            </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>Sign up</td>
                            <td>Footprint</td>
                            <td>
                                <div>
                                    <button class="btn btn-light btn-sm w-xs">Pdf <i
                                            class="uil uil-download-alt ml-2"></i></button>
                                </div>
                            </td>

                            <td>
                                <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
                            </td>
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

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0112</a> </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>
                                <div class="badge badge-soft-success font-size-12">Paid</div>
                            </td>
                            <td>
                                $26.30
                            </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>Sign up</td>
                            <td>Footprint</td>
                            <td>
                                <div>
                                    <button class="btn btn-light btn-sm w-xs">Pdf <i
                                            class="uil uil-download-alt ml-2"></i></button>
                                </div>
                            </td>

                            <td>
                                <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
                            </td>
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

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0112</a> </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>
                                <div class="badge badge-soft-success font-size-12">Paid</div>
                            </td>
                            <td>
                                $26.30
                            </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>Sign up</td>
                            <td>Footprint</td>
                            <td>
                                <div>
                                    <button class="btn btn-light btn-sm w-xs">Pdf <i
                                            class="uil uil-download-alt ml-2"></i></button>
                                </div>
                            </td>

                            <td>
                                <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
                            </td>
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

    <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0112</a> </td>
    <td>myusername</td>
    <td>127.0.0.1</td>
    <td>Apple</td>
    <td>myusername</td>
    <td>127.0.0.1</td>
    <td>Apple</td>
    <td>
        <div class="badge badge-soft-success font-size-12">Paid</div>
    </td>
    <td>
        $26.30
    </td>
    <td>myusername</td>
    <td>127.0.0.1</td>
    <td>Apple</td>
    <td>Sign up</td>
    <td>Footprint</td>
    <td>
        <div>
            <button class="btn btn-light btn-sm w-xs">Pdf <i
                    class="uil uil-download-alt ml-2"></i></button>
        </div>
    </td>

    <td>
        <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
    </td>
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

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0112</a> </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>
                                <div class="badge badge-soft-success font-size-12">Paid</div>
                            </td>
                            <td>
                                $26.30
                            </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>Sign up</td>
                            <td>Footprint</td>
                            <td>
                                <div>
                                    <button class="btn btn-light btn-sm w-xs">Pdf <i
                                            class="uil uil-download-alt ml-2"></i></button>
                                </div>
                            </td>

                            <td>
                                <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
                            </td>
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

    <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0112</a> </td>
    <td>myusername</td>
    <td>127.0.0.1</td>
    <td>Apple</td>
    <td>myusername</td>
    <td>127.0.0.1</td>
    <td>Apple</td>
    <td>
        <div class="badge badge-soft-success font-size-12">Paid</div>
    </td>
    <td>
        $26.30
    </td>
    <td>myusername</td>
    <td>127.0.0.1</td>
    <td>Apple</td>
    <td>Sign up</td>
    <td>Footprint</td>
    <td>
        <div>
            <button class="btn btn-light btn-sm w-xs">Pdf <i
                    class="uil uil-download-alt ml-2"></i></button>
        </div>
    </td>

    <td>
        <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
    </td>
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

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0112</a> </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>
                                <div class="badge badge-soft-success font-size-12">Paid</div>
                            </td>
                            <td>
                                $26.30
                            </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>Sign up</td>
                            <td>Footprint</td>
                            <td>
                                <div>
                                    <button class="btn btn-light btn-sm w-xs">Pdf <i
                                            class="uil uil-download-alt ml-2"></i></button>
                                </div>
                            </td>

                            <td>
                                <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
                            </td>
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

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0112</a> </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>
                                <div class="badge badge-soft-success font-size-12">Paid</div>
                            </td>
                            <td>
                                $26.30
                            </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>Sign up</td>
                            <td>Footprint</td>
                            <td>
                                <div>
                                    <button class="btn btn-light btn-sm w-xs">Pdf <i
                                            class="uil uil-download-alt ml-2"></i></button>
                                </div>
                            </td>

                            <td>
                                <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
                            </td>
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

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0112</a> </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>
                                <div class="badge badge-soft-success font-size-12">Paid</div>
                            </td>
                            <td>
                                $26.30
                            </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>Sign up</td>
                            <td>Footprint</td>
                            <td>
                                <div>
                                    <button class="btn btn-light btn-sm w-xs">Pdf <i
                                            class="uil uil-download-alt ml-2"></i></button>
                                </div>
                            </td>

                            <td>
                                <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
                            </td>
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

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0112</a> </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>
                                <div class="badge badge-soft-success font-size-12">Paid</div>
                            </td>
                            <td>
                                $26.30
                            </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>Sign up</td>
                            <td>Footprint</td>
                            <td>
                                <div>
                                    <button class="btn btn-light btn-sm w-xs">Pdf <i
                                            class="uil uil-download-alt ml-2"></i></button>
                                </div>
                            </td>

                            <td>
                                <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
                            </td>
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

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0112</a> </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>
                                <div class="badge badge-soft-success font-size-12">Paid</div>
                            </td>
                            <td>
                                $26.30
                            </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>Sign up</td>
                            <td>Footprint</td>
                            <td>
                                <div>
                                    <button class="btn btn-light btn-sm w-xs">Pdf <i
                                            class="uil uil-download-alt ml-2"></i></button>
                                </div>
                            </td>

                            <td>
                                <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
                            </td>
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

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0112</a> </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>
                                <div class="badge badge-soft-success font-size-12">Paid</div>
                            </td>
                            <td>
                                $26.30
                            </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>Sign up</td>
                            <td>Footprint</td>
                            <td>
                                <div>
                                    <button class="btn btn-light btn-sm w-xs">Pdf <i
                                            class="uil uil-download-alt ml-2"></i></button>
                                </div>
                            </td>

                            <td>
                                <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
                            </td>
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

    <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0112</a> </td>
    <td>myusername</td>
    <td>127.0.0.1</td>
    <td>Apple</td>
    <td>myusername</td>
    <td>127.0.0.1</td>
    <td>Apple</td>
    <td>
        <div class="badge badge-soft-success font-size-12">Paid</div>
    </td>
    <td>
        $26.30
    </td>
    <td>myusername</td>
    <td>127.0.0.1</td>
    <td>Apple</td>
    <td>Sign up</td>
    <td>Footprint</td>
    <td>
        <div>
            <button class="btn btn-light btn-sm w-xs">Pdf <i
                    class="uil uil-download-alt ml-2"></i></button>
        </div>
    </td>

    <td>
        <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
    </td>
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

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0112</a> </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>
                                <div class="badge badge-soft-success font-size-12">Paid</div>
                            </td>
                            <td>
                                $26.30
                            </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>Sign up</td>
                            <td>Footprint</td>
                            <td>
                                <div>
                                    <button class="btn btn-light btn-sm w-xs">Pdf <i
                                            class="uil uil-download-alt ml-2"></i></button>
                                </div>
                            </td>

                            <td>
                                <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
                            </td>
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

    <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0112</a> </td>
    <td>myusername</td>
    <td>127.0.0.1</td>
    <td>Apple</td>
    <td>myusername</td>
    <td>127.0.0.1</td>
    <td>Apple</td>
    <td>
        <div class="badge badge-soft-success font-size-12">Paid</div>
    </td>
    <td>
        $26.30
    </td>
    <td>myusername</td>
    <td>127.0.0.1</td>
    <td>Apple</td>
    <td>Sign up</td>
    <td>Footprint</td>
    <td>
        <div>
            <button class="btn btn-light btn-sm w-xs">Pdf <i
                    class="uil uil-download-alt ml-2"></i></button>
        </div>
    </td>

    <td>
        <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
    </td>
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

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0112</a> </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>
                                <div class="badge badge-soft-success font-size-12">Paid</div>
                            </td>
                            <td>
                                $26.30
                            </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>Sign up</td>
                            <td>Footprint</td>
                            <td>
                                <div>
                                    <button class="btn btn-light btn-sm w-xs">Pdf <i
                                            class="uil uil-download-alt ml-2"></i></button>
                                </div>
                            </td>

                            <td>
                                <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
                            </td>
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

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0112</a> </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>
                                <div class="badge badge-soft-success font-size-12">Paid</div>
                            </td>
                            <td>
                                $26.30
                            </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>Sign up</td>
                            <td>Footprint</td>
                            <td>
                                <div>
                                    <button class="btn btn-light btn-sm w-xs">Pdf <i
                                            class="uil uil-download-alt ml-2"></i></button>
                                </div>
                            </td>

                            <td>
                                <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
                            </td>
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

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0112</a> </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>
                                <div class="badge badge-soft-success font-size-12">Paid</div>
                            </td>
                            <td>
                                $26.30
                            </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>Sign up</td>
                            <td>Footprint</td>
                            <td>
                                <div>
                                    <button class="btn btn-light btn-sm w-xs">Pdf <i
                                            class="uil uil-download-alt ml-2"></i></button>
                                </div>
                            </td>

                            <td>
                                <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
                            </td>
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

    <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0112</a> </td>
    <td>myusername</td>
    <td>127.0.0.1</td>
    <td>Apple</td>
    <td>myusername</td>
    <td>127.0.0.1</td>
    <td>Apple</td>
    <td>
        <div class="badge badge-soft-success font-size-12">Paid</div>
    </td>
    <td>
        $26.30
    </td>
    <td>myusername</td>
    <td>127.0.0.1</td>
    <td>Apple</td>
    <td>Sign up</td>
    <td>Footprint</td>
    <td>
        <div>
            <button class="btn btn-light btn-sm w-xs">Pdf <i
                    class="uil uil-download-alt ml-2"></i></button>
        </div>
    </td>

    <td>
        <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
    </td>
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

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0112</a> </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>
                                <div class="badge badge-soft-success font-size-12">Paid</div>
                            </td>
                            <td>
                                $26.30
                            </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>Sign up</td>
                            <td>Footprint</td>
                            <td>
                                <div>
                                    <button class="btn btn-light btn-sm w-xs">Pdf <i
                                            class="uil uil-download-alt ml-2"></i></button>
                                </div>
                            </td>

                            <td>
                                <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
                            </td>
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

    <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0112</a> </td>
    <td>myusername</td>
    <td>127.0.0.1</td>
    <td>Apple</td>
    <td>myusername</td>
    <td>127.0.0.1</td>
    <td>Apple</td>
    <td>
        <div class="badge badge-soft-success font-size-12">Paid</div>
    </td>
    <td>
        $26.30
    </td>
    <td>myusername</td>
    <td>127.0.0.1</td>
    <td>Apple</td>
    <td>Sign up</td>
    <td>Footprint</td>
    <td>
        <div>
            <button class="btn btn-light btn-sm w-xs">Pdf <i
                    class="uil uil-download-alt ml-2"></i></button>
        </div>
    </td>

    <td>
        <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
    </td>
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

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0112</a> </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>
                                <div class="badge badge-soft-success font-size-12">Paid</div>
                            </td>
                            <td>
                                $26.30
                            </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>Sign up</td>
                            <td>Footprint</td>
                            <td>
                                <div>
                                    <button class="btn btn-light btn-sm w-xs">Pdf <i
                                            class="uil uil-download-alt ml-2"></i></button>
                                </div>
                            </td>

                            <td>
                                <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
                            </td>
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

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0112</a> </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>
                                <div class="badge badge-soft-success font-size-12">Paid</div>
                            </td>
                            <td>
                                $26.30
                            </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>Sign up</td>
                            <td>Footprint</td>
                            <td>
                                <div>
                                    <button class="btn btn-light btn-sm w-xs">Pdf <i
                                            class="uil uil-download-alt ml-2"></i></button>
                                </div>
                            </td>

                            <td>
                                <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
                            </td>
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

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0112</a> </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>
                                <div class="badge badge-soft-success font-size-12">Paid</div>
                            </td>
                            <td>
                                $26.30
                            </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>Sign up</td>
                            <td>Footprint</td>
                            <td>
                                <div>
                                    <button class="btn btn-light btn-sm w-xs">Pdf <i
                                            class="uil uil-download-alt ml-2"></i></button>
                                </div>
                            </td>

                            <td>
                                <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
                            </td>
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

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0112</a> </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>
                                <div class="badge badge-soft-success font-size-12">Paid</div>
                            </td>
                            <td>
                                $26.30
                            </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>Sign up</td>
                            <td>Footprint</td>
                            <td>
                                <div>
                                    <button class="btn btn-light btn-sm w-xs">Pdf <i
                                            class="uil uil-download-alt ml-2"></i></button>
                                </div>
                            </td>

                            <td>
                                <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
                            </td>
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

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0112</a> </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>
                                <div class="badge badge-soft-success font-size-12">Paid</div>
                            </td>
                            <td>
                                $26.30
                            </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>Sign up</td>
                            <td>Footprint</td>
                            <td>
                                <div>
                                    <button class="btn btn-light btn-sm w-xs">Pdf <i
                                            class="uil uil-download-alt ml-2"></i></button>
                                </div>
                            </td>

                            <td>
                                <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
                            </td>
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

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0112</a> </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>
                                <div class="badge badge-soft-success font-size-12">Paid</div>
                            </td>
                            <td>
                                $26.30
                            </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>Sign up</td>
                            <td>Footprint</td>
                            <td>
                                <div>
                                    <button class="btn btn-light btn-sm w-xs">Pdf <i
                                            class="uil uil-download-alt ml-2"></i></button>
                                </div>
                            </td>

                            <td>
                                <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
                            </td>
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

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0112</a> </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>
                                <div class="badge badge-soft-success font-size-12">Paid</div>
                            </td>
                            <td>
                                $26.30
                            </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>Sign up</td>
                            <td>Footprint</td>
                            <td>
                                <div>
                                    <button class="btn btn-light btn-sm w-xs">Pdf <i
                                            class="uil uil-download-alt ml-2"></i></button>
                                </div>
                            </td>

                            <td>
                                <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
                            </td>
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

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0112</a> </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>
                                <div class="badge badge-soft-success font-size-12">Paid</div>
                            </td>
                            <td>
                                $26.30
                            </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>Sign up</td>
                            <td>Footprint</td>
                            <td>
                                <div>
                                    <button class="btn btn-light btn-sm w-xs">Pdf <i
                                            class="uil uil-download-alt ml-2"></i></button>
                                </div>
                            </td>

                            <td>
                                <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
                            </td>
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

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0112</a> </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>
                                <div class="badge badge-soft-success font-size-12">Paid</div>
                            </td>
                            <td>
                                $26.30
                            </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>Sign up</td>
                            <td>Footprint</td>
                            <td>
                                <div>
                                    <button class="btn btn-light btn-sm w-xs">Pdf <i
                                            class="uil uil-download-alt ml-2"></i></button>
                                </div>
                            </td>

                            <td>
                                <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
                            </td>
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

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0112</a> </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>
                                <div class="badge badge-soft-success font-size-12">Paid</div>
                            </td>
                            <td>
                                $26.30
                            </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>Sign up</td>
                            <td>Footprint</td>
                            <td>
                                <div>
                                    <button class="btn btn-light btn-sm w-xs">Pdf <i
                                            class="uil uil-download-alt ml-2"></i></button>
                                </div>
                            </td>

                            <td>
                                <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
                            </td>
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

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0112</a> </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>
                                <div class="badge badge-soft-success font-size-12">Paid</div>
                            </td>
                            <td>
                                $26.30
                            </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>Sign up</td>
                            <td>Footprint</td>
                            <td>
                                <div>
                                    <button class="btn btn-light btn-sm w-xs">Pdf <i
                                            class="uil uil-download-alt ml-2"></i></button>
                                </div>
                            </td>

                            <td>
                                <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
                            </td>
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

    <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0112</a> </td>
    <td>myusername</td>
    <td>127.0.0.1</td>
    <td>Apple</td>
    <td>myusername</td>
    <td>127.0.0.1</td>
    <td>Apple</td>
    <td>
        <div class="badge badge-soft-success font-size-12">Paid</div>
    </td>
    <td>
        $26.30
    </td>
    <td>myusername</td>
    <td>127.0.0.1</td>
    <td>Apple</td>
    <td>Sign up</td>
    <td>Footprint</td>
    <td>
        <div>
            <button class="btn btn-light btn-sm w-xs">Pdf <i
                    class="uil uil-download-alt ml-2"></i></button>
        </div>
    </td>

    <td>
        <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
    </td>
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

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0112</a> </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>
                                <div class="badge badge-soft-success font-size-12">Paid</div>
                            </td>
                            <td>
                                $26.30
                            </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>Sign up</td>
                            <td>Footprint</td>
                            <td>
                                <div>
                                    <button class="btn btn-light btn-sm w-xs">Pdf <i
                                            class="uil uil-download-alt ml-2"></i></button>
                                </div>
                            </td>

                            <td>
                                <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
                            </td>
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

    <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0112</a> </td>
    <td>myusername</td>
    <td>127.0.0.1</td>
    <td>Apple</td>
    <td>myusername</td>
    <td>127.0.0.1</td>
    <td>Apple</td>
    <td>
        <div class="badge badge-soft-success font-size-12">Paid</div>
    </td>
    <td>
        $26.30
    </td>
    <td>myusername</td>
    <td>127.0.0.1</td>
    <td>Apple</td>
    <td>Sign up</td>
    <td>Footprint</td>
    <td>
        <div>
            <button class="btn btn-light btn-sm w-xs">Pdf <i
                    class="uil uil-download-alt ml-2"></i></button>
        </div>
    </td>

    <td>
        <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
    </td>
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

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0112</a> </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>
                                <div class="badge badge-soft-success font-size-12">Paid</div>
                            </td>
                            <td>
                                $26.30
                            </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>Sign up</td>
                            <td>Footprint</td>
                            <td>
                                <div>
                                    <button class="btn btn-light btn-sm w-xs">Pdf <i
                                            class="uil uil-download-alt ml-2"></i></button>
                                </div>
                            </td>

                            <td>
                                <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
                            </td>
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

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0112</a> </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>
                                <div class="badge badge-soft-success font-size-12">Paid</div>
                            </td>
                            <td>
                                $26.30
                            </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>Sign up</td>
                            <td>Footprint</td>
                            <td>
                                <div>
                                    <button class="btn btn-light btn-sm w-xs">Pdf <i
                                            class="uil uil-download-alt ml-2"></i></button>
                                </div>
                            </td>

                            <td>
                                <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
                            </td>
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

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0112</a> </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>
                                <div class="badge badge-soft-success font-size-12">Paid</div>
                            </td>
                            <td>
                                $26.30
                            </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>Sign up</td>
                            <td>Footprint</td>
                            <td>
                                <div>
                                    <button class="btn btn-light btn-sm w-xs">Pdf <i
                                            class="uil uil-download-alt ml-2"></i></button>
                                </div>
                            </td>

                            <td>
                                <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
                            </td>
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

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0112</a> </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>
                                <div class="badge badge-soft-success font-size-12">Paid</div>
                            </td>
                            <td>
                                $26.30
                            </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>Sign up</td>
                            <td>Footprint</td>
                            <td>
                                <div>
                                    <button class="btn btn-light btn-sm w-xs">Pdf <i
                                            class="uil uil-download-alt ml-2"></i></button>
                                </div>
                            </td>

                            <td>
                                <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
                            </td>
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

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0112</a> </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>
                                <div class="badge badge-soft-success font-size-12">Paid</div>
                            </td>
                            <td>
                                $26.30
                            </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>Sign up</td>
                            <td>Footprint</td>
                            <td>
                                <div>
                                    <button class="btn btn-light btn-sm w-xs">Pdf <i
                                            class="uil uil-download-alt ml-2"></i></button>
                                </div>
                            </td>

                            <td>
                                <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
                            </td>
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

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0112</a> </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>
                                <div class="badge badge-soft-success font-size-12">Paid</div>
                            </td>
                            <td>
                                $26.30
                            </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>Sign up</td>
                            <td>Footprint</td>
                            <td>
                                <div>
                                    <button class="btn btn-light btn-sm w-xs">Pdf <i
                                            class="uil uil-download-alt ml-2"></i></button>
                                </div>
                            </td>

                            <td>
                                <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
                            </td>
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

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0112</a> </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>
                                <div class="badge badge-soft-success font-size-12">Paid</div>
                            </td>
                            <td>
                                $26.30
                            </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>Sign up</td>
                            <td>Footprint</td>
                            <td>
                                <div>
                                    <button class="btn btn-light btn-sm w-xs">Pdf <i
                                            class="uil uil-download-alt ml-2"></i></button>
                                </div>
                            </td>

                            <td>
                                <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
                            </td>
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

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0112</a> </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>
                                <div class="badge badge-soft-success font-size-12">Paid</div>
                            </td>
                            <td>
                                $26.30
                            </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>Sign up</td>
                            <td>Footprint</td>
                            <td>
                                <div>
                                    <button class="btn btn-light btn-sm w-xs">Pdf <i
                                            class="uil uil-download-alt ml-2"></i></button>
                                </div>
                            </td>

                            <td>
                                <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
                            </td>
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

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0112</a> </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>
                                <div class="badge badge-soft-success font-size-12">Paid</div>
                            </td>
                            <td>
                                $26.30
                            </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>Sign up</td>
                            <td>Footprint</td>
                            <td>
                                <div>
                                    <button class="btn btn-light btn-sm w-xs">Pdf <i
                                            class="uil uil-download-alt ml-2"></i></button>
                                </div>
                            </td>

                            <td>
                                <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
                            </td>
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

    <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0112</a> </td>
    <td>myusername</td>
    <td>127.0.0.1</td>
    <td>Apple</td>
    <td>myusername</td>
    <td>127.0.0.1</td>
    <td>Apple</td>
    <td>
        <div class="badge badge-soft-success font-size-12">Paid</div>
    </td>
    <td>
        $26.30
    </td>
    <td>myusername</td>
    <td>127.0.0.1</td>
    <td>Apple</td>
    <td>Sign up</td>
    <td>Footprint</td>
    <td>
        <div>
            <button class="btn btn-light btn-sm w-xs">Pdf <i
                    class="uil uil-download-alt ml-2"></i></button>
        </div>
    </td>

    <td>
        <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
    </td>
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

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0112</a> </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>
                                <div class="badge badge-soft-success font-size-12">Paid</div>
                            </td>
                            <td>
                                $26.30
                            </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>Sign up</td>
                            <td>Footprint</td>
                            <td>
                                <div>
                                    <button class="btn btn-light btn-sm w-xs">Pdf <i
                                            class="uil uil-download-alt ml-2"></i></button>
                                </div>
                            </td>

                            <td>
                                <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
                            </td>
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

    <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0112</a> </td>
    <td>myusername</td>
    <td>127.0.0.1</td>
    <td>Apple</td>
    <td>myusername</td>
    <td>127.0.0.1</td>
    <td>Apple</td>
    <td>
        <div class="badge badge-soft-success font-size-12">Paid</div>
    </td>
    <td>
        $26.30
    </td>
    <td>myusername</td>
    <td>127.0.0.1</td>
    <td>Apple</td>
    <td>Sign up</td>
    <td>Footprint</td>
    <td>
        <div>
            <button class="btn btn-light btn-sm w-xs">Pdf <i
                    class="uil uil-download-alt ml-2"></i></button>
        </div>
    </td>

    <td>
        <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
    </td>
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

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0112</a> </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>
                                <div class="badge badge-soft-success font-size-12">Paid</div>
                            </td>
                            <td>
                                $26.30
                            </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>Sign up</td>
                            <td>Footprint</td>
                            <td>
                                <div>
                                    <button class="btn btn-light btn-sm w-xs">Pdf <i
                                            class="uil uil-download-alt ml-2"></i></button>
                                </div>
                            </td>

                            <td>
                                <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
                            </td>
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

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0112</a> </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>
                                <div class="badge badge-soft-success font-size-12">Paid</div>
                            </td>
                            <td>
                                $26.30
                            </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>Sign up</td>
                            <td>Footprint</td>
                            <td>
                                <div>
                                    <button class="btn btn-light btn-sm w-xs">Pdf <i
                                            class="uil uil-download-alt ml-2"></i></button>
                                </div>
                            </td>

                            <td>
                                <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
                            </td>
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

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0112</a> </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>
                                <div class="badge badge-soft-success font-size-12">Paid</div>
                            </td>
                            <td>
                                $26.30
                            </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>Sign up</td>
                            <td>Footprint</td>
                            <td>
                                <div>
                                    <button class="btn btn-light btn-sm w-xs">Pdf <i
                                            class="uil uil-download-alt ml-2"></i></button>
                                </div>
                            </td>

                            <td>
                                <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
                            </td>
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

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0112</a> </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>
                                <div class="badge badge-soft-success font-size-12">Paid</div>
                            </td>
                            <td>
                                $26.30
                            </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>Sign up</td>
                            <td>Footprint</td>
                            <td>
                                <div>
                                    <button class="btn btn-light btn-sm w-xs">Pdf <i
                                            class="uil uil-download-alt ml-2"></i></button>
                                </div>
                            </td>

                            <td>
                                <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
                            </td>
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

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0112</a> </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>
                                <div class="badge badge-soft-success font-size-12">Paid</div>
                            </td>
                            <td>
                                $26.30
                            </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>Sign up</td>
                            <td>Footprint</td>
                            <td>
                                <div>
                                    <button class="btn btn-light btn-sm w-xs">Pdf <i
                                            class="uil uil-download-alt ml-2"></i></button>
                                </div>
                            </td>

                            <td>
                                <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
                            </td>
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

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0112</a> </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>
                                <div class="badge badge-soft-success font-size-12">Paid</div>
                            </td>
                            <td>
                                $26.30
                            </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>Sign up</td>
                            <td>Footprint</td>
                            <td>
                                <div>
                                    <button class="btn btn-light btn-sm w-xs">Pdf <i
                                            class="uil uil-download-alt ml-2"></i></button>
                                </div>
                            </td>

                            <td>
                                <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
                            </td>
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

    <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0112</a> </td>
    <td>myusername</td>
    <td>127.0.0.1</td>
    <td>Apple</td>
    <td>myusername</td>
    <td>127.0.0.1</td>
    <td>Apple</td>
    <td>
        <div class="badge badge-soft-success font-size-12">Paid</div>
    </td>
    <td>
        $26.30
    </td>
    <td>myusername</td>
    <td>127.0.0.1</td>
    <td>Apple</td>
    <td>Sign up</td>
    <td>Footprint</td>
    <td>
        <div>
            <button class="btn btn-light btn-sm w-xs">Pdf <i
                    class="uil uil-download-alt ml-2"></i></button>
        </div>
    </td>

    <td>
        <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
    </td>
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

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0112</a> </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>
                                <div class="badge badge-soft-success font-size-12">Paid</div>
                            </td>
                            <td>
                                $26.30
                            </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>Sign up</td>
                            <td>Footprint</td>
                            <td>
                                <div>
                                    <button class="btn btn-light btn-sm w-xs">Pdf <i
                                            class="uil uil-download-alt ml-2"></i></button>
                                </div>
                            </td>

                            <td>
                                <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
                            </td>
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

    <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0112</a> </td>
    <td>myusername</td>
    <td>127.0.0.1</td>
    <td>Apple</td>
    <td>myusername</td>
    <td>127.0.0.1</td>
    <td>Apple</td>
    <td>
        <div class="badge badge-soft-success font-size-12">Paid</div>
    </td>
    <td>
        $26.30
    </td>
    <td>myusername</td>
    <td>127.0.0.1</td>
    <td>Apple</td>
    <td>Sign up</td>
    <td>Footprint</td>
    <td>
        <div>
            <button class="btn btn-light btn-sm w-xs">Pdf <i
                    class="uil uil-download-alt ml-2"></i></button>
        </div>
    </td>

    <td>
        <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
    </td>
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

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0112</a> </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>
                                <div class="badge badge-soft-success font-size-12">Paid</div>
                            </td>
                            <td>
                                $26.30
                            </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>Sign up</td>
                            <td>Footprint</td>
                            <td>
                                <div>
                                    <button class="btn btn-light btn-sm w-xs">Pdf <i
                                            class="uil uil-download-alt ml-2"></i></button>
                                </div>
                            </td>

                            <td>
                                <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
                            </td>
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

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0112</a> </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>
                                <div class="badge badge-soft-success font-size-12">Paid</div>
                            </td>
                            <td>
                                $26.30
                            </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>Sign up</td>
                            <td>Footprint</td>
                            <td>
                                <div>
                                    <button class="btn btn-light btn-sm w-xs">Pdf <i
                                            class="uil uil-download-alt ml-2"></i></button>
                                </div>
                            </td>

                            <td>
                                <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
                            </td>
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

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0112</a> </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>
                                <div class="badge badge-soft-success font-size-12">Paid</div>
                            </td>
                            <td>
                                $26.30
                            </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>Sign up</td>
                            <td>Footprint</td>
                            <td>
                                <div>
                                    <button class="btn btn-light btn-sm w-xs">Pdf <i
                                            class="uil uil-download-alt ml-2"></i></button>
                                </div>
                            </td>

                            <td>
                                <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
                            </td>
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

    <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0112</a> </td>
    <td>myusername</td>
    <td>127.0.0.1</td>
    <td>Apple</td>
    <td>myusername</td>
    <td>127.0.0.1</td>
    <td>Apple</td>
    <td>
        <div class="badge badge-soft-success font-size-12">Paid</div>
    </td>
    <td>
        $26.30
    </td>
    <td>myusername</td>
    <td>127.0.0.1</td>
    <td>Apple</td>
    <td>Sign up</td>
    <td>Footprint</td>
    <td>
        <div>
            <button class="btn btn-light btn-sm w-xs">Pdf <i
                    class="uil uil-download-alt ml-2"></i></button>
        </div>
    </td>

    <td>
        <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
    </td>
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

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0112</a> </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>
                                <div class="badge badge-soft-success font-size-12">Paid</div>
                            </td>
                            <td>
                                $26.30
                            </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>Sign up</td>
                            <td>Footprint</td>
                            <td>
                                <div>
                                    <button class="btn btn-light btn-sm w-xs">Pdf <i
                                            class="uil uil-download-alt ml-2"></i></button>
                                </div>
                            </td>

                            <td>
                                <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
                            </td>
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

    <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0112</a> </td>
    <td>myusername</td>
    <td>127.0.0.1</td>
    <td>Apple</td>
    <td>myusername</td>
    <td>127.0.0.1</td>
    <td>Apple</td>
    <td>
        <div class="badge badge-soft-success font-size-12">Paid</div>
    </td>
    <td>
        $26.30
    </td>
    <td>myusername</td>
    <td>127.0.0.1</td>
    <td>Apple</td>
    <td>Sign up</td>
    <td>Footprint</td>
    <td>
        <div>
            <button class="btn btn-light btn-sm w-xs">Pdf <i
                    class="uil uil-download-alt ml-2"></i></button>
        </div>
    </td>

    <td>
        <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
    </td>
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

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0112</a> </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>
                                <div class="badge badge-soft-success font-size-12">Paid</div>
                            </td>
                            <td>
                                $26.30
                            </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>Sign up</td>
                            <td>Footprint</td>
                            <td>
                                <div>
                                    <button class="btn btn-light btn-sm w-xs">Pdf <i
                                            class="uil uil-download-alt ml-2"></i></button>
                                </div>
                            </td>

                            <td>
                                <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
                            </td>
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

    <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0112</a> </td>
    <td>myusername</td>
    <td>127.0.0.1</td>
    <td>Apple</td>
    <td>myusername</td>
    <td>127.0.0.1</td>
    <td>Apple</td>
    <td>
        <div class="badge badge-soft-success font-size-12">Paid</div>
    </td>
    <td>
        $26.30
    </td>
    <td>myusername</td>
    <td>127.0.0.1</td>
    <td>Apple</td>
    <td>Sign up</td>
    <td>Footprint</td>
    <td>
        <div>
            <button class="btn btn-light btn-sm w-xs">Pdf <i
                    class="uil uil-download-alt ml-2"></i></button>
        </div>
    </td>

    <td>
        <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
    </td>
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

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0112</a> </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>
                                <div class="badge badge-soft-success font-size-12">Paid</div>
                            </td>
                            <td>
                                $26.30
                            </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>Sign up</td>
                            <td>Footprint</td>
                            <td>
                                <div>
                                    <button class="btn btn-light btn-sm w-xs">Pdf <i
                                            class="uil uil-download-alt ml-2"></i></button>
                                </div>
                            </td>

                            <td>
                                <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
                            </td>
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

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0112</a> </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>
                                <div class="badge badge-soft-success font-size-12">Paid</div>
                            </td>
                            <td>
                                $26.30
                            </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>Sign up</td>
                            <td>Footprint</td>
                            <td>
                                <div>
                                    <button class="btn btn-light btn-sm w-xs">Pdf <i
                                            class="uil uil-download-alt ml-2"></i></button>
                                </div>
                            </td>

                            <td>
                                <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
                            </td>
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

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0112</a> </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>
                                <div class="badge badge-soft-success font-size-12">Paid</div>
                            </td>
                            <td>
                                $26.30
                            </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>Sign up</td>
                            <td>Footprint</td>
                            <td>
                                <div>
                                    <button class="btn btn-light btn-sm w-xs">Pdf <i
                                            class="uil uil-download-alt ml-2"></i></button>
                                </div>
                            </td>

                            <td>
                                <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
                            </td>
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

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0112</a> </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>
                                <div class="badge badge-soft-success font-size-12">Paid</div>
                            </td>
                            <td>
                                $26.30
                            </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>Sign up</td>
                            <td>Footprint</td>
                            <td>
                                <div>
                                    <button class="btn btn-light btn-sm w-xs">Pdf <i
                                            class="uil uil-download-alt ml-2"></i></button>
                                </div>
                            </td>

                            <td>
                                <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
                            </td>
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

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0112</a> </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>
                                <div class="badge badge-soft-success font-size-12">Paid</div>
                            </td>
                            <td>
                                $26.30
                            </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>Sign up</td>
                            <td>Footprint</td>
                            <td>
                                <div>
                                    <button class="btn btn-light btn-sm w-xs">Pdf <i
                                            class="uil uil-download-alt ml-2"></i></button>
                                </div>
                            </td>

                            <td>
                                <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
                            </td>
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

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0112</a> </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>
                                <div class="badge badge-soft-success font-size-12">Paid</div>
                            </td>
                            <td>
                                $26.30
                            </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>Sign up</td>
                            <td>Footprint</td>
                            <td>
                                <div>
                                    <button class="btn btn-light btn-sm w-xs">Pdf <i
                                            class="uil uil-download-alt ml-2"></i></button>
                                </div>
                            </td>

                            <td>
                                <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
                            </td>
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

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0112</a> </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>
                                <div class="badge badge-soft-success font-size-12">Paid</div>
                            </td>
                            <td>
                                $26.30
                            </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>Sign up</td>
                            <td>Footprint</td>
                            <td>
                                <div>
                                    <button class="btn btn-light btn-sm w-xs">Pdf <i
                                            class="uil uil-download-alt ml-2"></i></button>
                                </div>
                            </td>

                            <td>
                                <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
                            </td>
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

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0112</a> </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>
                                <div class="badge badge-soft-success font-size-12">Paid</div>
                            </td>
                            <td>
                                $26.30
                            </td>
                            <td>myusername</td>
                            <td>127.0.0.1</td>
                            <td>Apple</td>
                            <td>Sign up</td>
                            <td>Footprint</td>
                            <td>
                                <div>
                                    <button class="btn btn-light btn-sm w-xs">Pdf <i
                                            class="uil uil-download-alt ml-2"></i></button>
                                </div>
                            </td>

                            <td>
                                <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
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
    <!-- init js -->
    <script src="{{ URL::asset('/assets/js/pages/form-advanced.init.js') }}"></script>



@endsection