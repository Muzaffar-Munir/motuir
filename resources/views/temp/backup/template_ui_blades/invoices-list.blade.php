@extends('layouts.master')
@section('title') @lang('translation.Invoice_List') @endsection
@section('css')
    <!-- bootstrap-datepicker css -->
    <link href="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet">
    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('pagetitle') Invoices @endslot
        @slot('title') Invoice List @endslot
    @endcomponent

    <div class="row">
        <div class="col-md-4">
            <div>
                <button type="button" class="btn btn-success waves-effect waves-light mb-3"><i
                        class="mdi mdi-plus mr-1"></i> Add Invoice</button>
            </div>
        </div>
        <div class="col-md-8">
            <div class="float-right">
                <div class="form-inline mb-3">
                    <div class="input-daterange input-group" data-provide="datepicker" data-date-format="dd M, yyyy"
                        data-date-autoclose="true">
                        <input type="text" class="form-control text-left" placeholder="From" name="From" />
                        <input type="text" class="form-control text-left" placeholder="To" name="To" />
                        <div class="input-group-append">
                            <button type="button" class="btn btn-primary"><i class="mdi mdi-filter-variant"></i></button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">

            <div class="table-responsive custom-table mb-4">
                <table class="table table-centered datatable dt-responsive nowrap table-check table-card-list"
                    style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">
                    <thead>
                        <tr class="bg-transparent">
                            <th style="width: 24px;">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="checkAll">
                                    <label class="custom-control-label" for="checkAll"></label>
                                </div>
                            </th>
                            <th>Invoice ID</th>
                            <th>Date</th>
                            <th>Billing Name</th>
                            <th>Amount</th>
                            <th>Status</th>
                            <th>Download Pdf</th>
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

                            <td>
                                $26.30
                            </td>
                            <td>
                                <div class="badge badge-soft-success font-size-12">Paid</div>
                            </td>
                            <td>
                                <div>
                                    <button class="btn btn-light btn-sm w-xs">Pdf <i
                                            class="uil uil-download-alt ml-2"></i></button>
                                </div>
                            </td>

                            <td>
                                <a href="javascript:void(0);" class="px-3 text-primary" data-toggle="tooltip"
                                    data-placement="top" title="Edit"><i class="uil uil-pen font-size-18"></i></a>
                                <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip"
                                    data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="invoicecheck2">
                                    <label class="custom-control-label" for="invoicecheck2"></label>
                                </div>
                            </td>

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0111</a> </td>
                            <td>
                                11 Oct, 2020
                            </td>
                            <td>Paul Reynolds</td>

                            <td>
                                $24.20
                            </td>
                            <td>
                                <div class="badge badge-soft-success font-size-12">Paid</div>
                            </td>
                            <td>
                                <div>
                                    <button class="btn btn-light btn-sm w-xs">Pdf <i
                                            class="uil uil-download-alt ml-2"></i></button>
                                </div>
                            </td>

                            <td>
                                <a href="javascript:void(0);" class="px-3 text-primary" data-toggle="tooltip"
                                    data-placement="top" title="Edit"><i class="uil uil-pen font-size-18"></i></a>
                                <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip"
                                    data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="invoicecheck3">
                                    <label class="custom-control-label" for="invoicecheck3"></label>
                                </div>
                            </td>

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0110</a> </td>
                            <td>
                                10 Oct, 2020
                            </td>
                            <td>Ronald Patterson</td>

                            <td>
                                $20.20
                            </td>
                            <td>
                                <div class="badge badge-soft-warning font-size-12">Pending</div>
                            </td>
                            <td>
                                <div>
                                    <button class="btn btn-light btn-sm w-xs">Pdf <i
                                            class="uil uil-download-alt ml-2"></i></button>
                                </div>
                            </td>

                            <td>
                                <a href="javascript:void(0);" class="px-3 text-primary" data-toggle="tooltip"
                                    data-placement="top" title="Edit"><i class="uil uil-pen font-size-18"></i></a>
                                <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip"
                                    data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="invoicecheck4">
                                    <label class="custom-control-label" for="invoicecheck4"></label>
                                </div>
                            </td>

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0109</a> </td>
                            <td>
                                09 Oct, 2020
                            </td>
                            <td>Adella Perez</td>

                            <td>
                                $16.80
                            </td>
                            <td>
                                <div class="badge badge-soft-success font-size-12">Paid</div>
                            </td>
                            <td>
                                <div>
                                    <button class="btn btn-light btn-sm w-xs">Pdf <i
                                            class="uil uil-download-alt ml-2"></i></button>
                                </div>
                            </td>

                            <td>
                                <a href="javascript:void(0);" class="px-3 text-primary" data-toggle="tooltip"
                                    data-placement="top" title="Edit"><i class="uil uil-pen font-size-18"></i></a>
                                <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip"
                                    data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="invoicecheck5">
                                    <label class="custom-control-label" for="invoicecheck5"></label>
                                </div>
                            </td>

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0108</a> </td>
                            <td>
                                08 Oct, 2020
                            </td>
                            <td>Theresa Mayers</td>

                            <td>
                                $22.00
                            </td>
                            <td>
                                <div class="badge badge-soft-success font-size-12">Paid</div>
                            </td>
                            <td>
                                <div>
                                    <button class="btn btn-light btn-sm w-xs">Pdf <i
                                            class="uil uil-download-alt ml-2"></i></button>
                                </div>
                            </td>

                            <td>
                                <a href="javascript:void(0);" class="px-3 text-primary" data-toggle="tooltip"
                                    data-placement="top" title="Edit"><i class="uil uil-pen font-size-18"></i></a>
                                <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip"
                                    data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="invoicecheck6">
                                    <label class="custom-control-label" for="invoicecheck6"></label>
                                </div>
                            </td>

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0107</a> </td>
                            <td>
                                07 Oct, 2020
                            </td>
                            <td>Michael Wallace</td>

                            <td>
                                $15.60
                            </td>
                            <td>
                                <div class="badge badge-soft-success font-size-12">Paid</div>
                            </td>
                            <td>
                                <div>
                                    <button class="btn btn-light btn-sm w-xs">Pdf <i
                                            class="uil uil-download-alt ml-2"></i></button>
                                </div>
                            </td>

                            <td>
                                <a href="javascript:void(0);" class="px-3 text-primary" data-toggle="tooltip"
                                    data-placement="top" title="Edit"><i class="uil uil-pen font-size-18"></i></a>
                                <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip"
                                    data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="invoicecheck7">
                                    <label class="custom-control-label" for="invoicecheck7"></label>
                                </div>
                            </td>

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0106</a> </td>
                            <td>
                                06 Oct, 2020
                            </td>
                            <td>Oliver Gonzales</td>

                            <td>
                                $26.50
                            </td>
                            <td>
                                <div class="badge badge-soft-warning font-size-12">Pending</div>
                            </td>
                            <td>
                                <div>
                                    <button class="btn btn-light btn-sm w-xs">Pdf <i
                                            class="uil uil-download-alt ml-2"></i></button>
                                </div>
                            </td>

                            <td>
                                <a href="javascript:void(0);" class="px-3 text-primary" data-toggle="tooltip"
                                    data-placement="top" title="Edit"><i class="uil uil-pen font-size-18"></i></a>
                                <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip"
                                    data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="invoicecheck8">
                                    <label class="custom-control-label" for="invoicecheck8"></label>
                                </div>
                            </td>

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0105</a> </td>
                            <td>
                                05 Oct, 2020
                            </td>
                            <td>David Burke</td>

                            <td>
                                $24.20
                            </td>
                            <td>
                                <div class="badge badge-soft-success font-size-12">Paid</div>
                            </td>
                            <td>
                                <div>
                                    <button class="btn btn-light btn-sm w-xs">Pdf <i
                                            class="uil uil-download-alt ml-2"></i></button>
                                </div>
                            </td>

                            <td>
                                <a href="javascript:void(0);" class="px-3 text-primary" data-toggle="tooltip"
                                    data-placement="top" title="Edit"><i class="uil uil-pen font-size-18"></i></a>
                                <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip"
                                    data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="invoicecheck9">
                                    <label class="custom-control-label" for="invoicecheck9"></label>
                                </div>
                            </td>

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0104</a> </td>
                            <td>
                                04 Oct, 2020
                            </td>
                            <td>Willie Verner</td>

                            <td>
                                $21.30
                            </td>
                            <td>
                                <div class="badge badge-soft-warning font-size-12">Pending</div>
                            </td>
                            <td>
                                <div>
                                    <button class="btn btn-light btn-sm w-xs">Pdf <i
                                            class="uil uil-download-alt ml-2"></i></button>
                                </div>
                            </td>

                            <td>
                                <a href="javascript:void(0);" class="px-3 text-primary" data-toggle="tooltip"
                                    data-placement="top" title="Edit"><i class="uil uil-pen font-size-18"></i></a>
                                <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip"
                                    data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="invoicecheck10">
                                    <label class="custom-control-label" for="invoicecheck10"></label>
                                </div>
                            </td>

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0103</a> </td>
                            <td>
                                03 Oct, 2020
                            </td>
                            <td>Felix Perry</td>

                            <td>
                                $22.60
                            </td>
                            <td>
                                <div class="badge badge-soft-success font-size-12">Paid</div>
                            </td>
                            <td>
                                <div>
                                    <button class="btn btn-light btn-sm w-xs">Pdf <i
                                            class="uil uil-download-alt ml-2"></i></button>
                                </div>
                            </td>

                            <td>
                                <a href="javascript:void(0);" class="px-3 text-primary" data-toggle="tooltip"
                                    data-placement="top" title="Edit"><i class="uil uil-pen font-size-18"></i></a>
                                <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip"
                                    data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="invoicecheck11">
                                    <label class="custom-control-label" for="invoicecheck11"></label>
                                </div>
                            </td>

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0102</a> </td>
                            <td>
                                02 Oct, 2020
                            </td>
                            <td>Virgil Kelley</td>

                            <td>
                                $18.20
                            </td>
                            <td>
                                <div class="badge badge-soft-success font-size-12">Paid</div>
                            </td>
                            <td>
                                <div>
                                    <button class="btn btn-light btn-sm w-xs">Pdf <i
                                            class="uil uil-download-alt ml-2"></i></button>
                                </div>
                            </td>

                            <td>
                                <a href="javascript:void(0);" class="px-3 text-primary" data-toggle="tooltip"
                                    data-placement="top" title="Edit"><i class="uil uil-pen font-size-18"></i></a>
                                <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip"
                                    data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="invoicecheck12">
                                    <label class="custom-control-label" for="invoicecheck12"></label>
                                </div>
                            </td>

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0101</a> </td>
                            <td>
                                01 Oct, 2020
                            </td>
                            <td>Matthew Lawler</td>

                            <td>
                                $15.80
                            </td>
                            <td>
                                <div class="badge badge-soft-warning font-size-12">Pending</div>
                            </td>
                            <td>
                                <div>
                                    <button class="btn btn-light btn-sm w-xs">Pdf <i
                                            class="uil uil-download-alt ml-2"></i></button>
                                </div>
                            </td>

                            <td>
                                <a href="javascript:void(0);" class="px-3 text-primary" data-toggle="tooltip"
                                    data-placement="top" title="Edit"><i class="uil uil-pen font-size-18"></i></a>
                                <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip"
                                    data-placement="top" title="Delete"><i class="uil uil-trash font-size-18"></i></a>
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
@endsection
