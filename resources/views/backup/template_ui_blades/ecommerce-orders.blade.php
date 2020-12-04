@extends('layouts.master')
@section('title') @lang('translation.Orders') @endsection
@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('pagetitle') Ecommerce @endslot
        @slot('title') Orders @endslot
    @endcomponent

    <div class="row">
        <div class="col-lg-12">
            <div>
                <div class="float-right">
                    <form class="form-inline mb-3">
                        <label class="my-1 mr-2" for="order-selectinput">Orders</label>
                        <select class="custom-select my-1" id="order-selectinput">
                            <option selected>All</option>
                            <option value="1">Active</option>
                            <option value="2">Unpaid</option>
                        </select>
                    </form>

                </div>
                <button type="button" class="btn btn-success waves-effect waves-light mb-3"><i
                        class="mdi mdi-plus mr-1"></i> Add New Order</button>
            </div>
            <div class="table-responsive custom-table mb-4">
                <table class="table table-centered datatable dt-responsive nowrap table-card-list table-check"
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
                            <th>Order ID</th>
                            <th>Date</th>
                            <th>Billing Name</th>
                            <th>Total</th>
                            <th>Profit</th>
                            <th>Payment Status</th>
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

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0112</a> </td>
                            <td>
                                12 October, 2020
                            </td>
                            <td>Marcel Thomas</td>

                            <td>
                                $24
                            </td>
                            <td>
                                $5<span class="badge badge-soft-danger ml-2">30%</span>
                            </td>
                            <td>
                                <div class="badge badge-soft-success font-size-12">Paid</div>
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
                                    <input type="checkbox" class="custom-control-input" id="ordercheck2">
                                    <label class="custom-control-label" for="ordercheck2"></label>
                                </div>
                            </td>

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0111</a> </td>
                            <td>
                                11 October, 2020
                            </td>
                            <td>Carol May</td>

                            <td>
                                $30
                            </td>
                            <td>
                                $6<span class="badge badge-soft-danger ml-2">32%</span>
                            </td>
                            <td>
                                <div class="badge badge-soft-warning font-size-12">Pending</div>
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
                                    <input type="checkbox" class="custom-control-input" id="ordercheck3">
                                    <label class="custom-control-label" for="ordercheck3"></label>
                                </div>
                            </td>

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0110</a> </td>
                            <td>
                                10 October, 2020
                            </td>
                            <td>Jorge Villela</td>

                            <td>
                                $18
                            </td>
                            <td>
                                $2<span class="badge badge-soft-danger ml-2">10%</span>
                            </td>
                            <td>
                                <div class="badge badge-soft-success font-size-12">Paid</div>
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
                                    <input type="checkbox" class="custom-control-input" id="ordercheck4">
                                    <label class="custom-control-label" for="ordercheck4"></label>
                                </div>
                            </td>

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0109</a> </td>
                            <td>
                                09 October, 2020
                            </td>
                            <td>Jerry West</td>

                            <td>
                                $22
                            </td>
                            <td>
                                $4<span class="badge badge-soft-danger ml-2">15%</span>
                            </td>
                            <td>
                                <div class="badge badge-soft-success font-size-12">Paid</div>
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
                                    <input type="checkbox" class="custom-control-input" id="ordercheck5">
                                    <label class="custom-control-label" for="ordercheck5"></label>
                                </div>
                            </td>

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0108</a> </td>
                            <td>
                                08 October, 2020
                            </td>
                            <td>Barry Scruggs</td>

                            <td>
                                $26
                            </td>
                            <td>
                                $5<span class="badge badge-soft-danger ml-2">18%</span>
                            </td>
                            <td>
                                <div class="badge badge-soft-warning font-size-12">Pending</div>
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
                                    <input type="checkbox" class="custom-control-input" id="ordercheck6">
                                    <label class="custom-control-label" for="ordercheck6"></label>
                                </div>
                            </td>

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0107</a> </td>
                            <td>
                                07 October, 2020
                            </td>
                            <td>Lula Green</td>

                            <td>
                                $24
                            </td>
                            <td>
                                $3<span class="badge badge-soft-danger ml-2">12%</span>
                            </td>
                            <td>
                                <div class="badge badge-soft-success font-size-12">Paid</div>
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
                                    <input type="checkbox" class="custom-control-input" id="ordercheck7">
                                    <label class="custom-control-label" for="ordercheck7"></label>
                                </div>
                            </td>

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0106</a> </td>
                            <td>
                                06 October, 2020
                            </td>
                            <td>James Chung</td>

                            <td>
                                $32
                            </td>
                            <td>
                                $4<span class="badge badge-soft-danger ml-2">20%</span>
                            </td>
                            <td>
                                <div class="badge badge-soft-success font-size-12">Paid</div>
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
                                    <input type="checkbox" class="custom-control-input" id="ordercheck8">
                                    <label class="custom-control-label" for="ordercheck8"></label>
                                </div>
                            </td>

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0105</a> </td>
                            <td>
                                05 October, 2020
                            </td>
                            <td>Charles Lindsay</td>

                            <td>
                                $15
                            </td>
                            <td>
                                $8<span class="badge badge-soft-danger ml-2">36%</span>
                            </td>
                            <td>
                                <div class="badge badge-soft-warning font-size-12">Pending</div>
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
                                    <input type="checkbox" class="custom-control-input" id="ordercheck9">
                                    <label class="custom-control-label" for="ordercheck9"></label>
                                </div>
                            </td>

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0104</a> </td>
                            <td>
                                04 October, 2020
                            </td>
                            <td>Nilda Taylor</td>

                            <td>
                                $24
                            </td>
                            <td>
                                $2<span class="badge badge-soft-danger ml-2">10%</span>
                            </td>
                            <td>
                                <div class="badge badge-soft-success font-size-12">Paid</div>
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
                                    <input type="checkbox" class="custom-control-input" id="ordercheck10">
                                    <label class="custom-control-label" for="ordercheck10"></label>
                                </div>
                            </td>

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0103</a> </td>
                            <td>
                                03 October, 2020
                            </td>
                            <td>Charles Auxier</td>

                            <td>
                                $20
                            </td>
                            <td>
                                $1<span class="badge badge-soft-danger ml-2">5%</span>
                            </td>
                            <td>
                                <div class="badge badge-soft-success font-size-12">Paid</div>
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
                                    <input type="checkbox" class="custom-control-input" id="ordercheck11">
                                    <label class="custom-control-label" for="ordercheck11"></label>
                                </div>
                            </td>

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0102</a> </td>
                            <td>
                                02 October, 2020
                            </td>
                            <td>John Herrera</td>

                            <td>
                                $18
                            </td>
                            <td>
                                $5<span class="badge badge-soft-danger ml-2">30%</span>
                            </td>
                            <td>
                                <div class="badge badge-soft-success font-size-12">Paid</div>
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
                                    <input type="checkbox" class="custom-control-input" id="ordercheck12">
                                    <label class="custom-control-label" for="ordercheck12"></label>
                                </div>
                            </td>

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0101</a> </td>
                            <td>
                                01 October, 2020
                            </td>
                            <td>Tracy Jacobs</td>

                            <td>
                                $16
                            </td>
                            <td>
                                $4<span class="badge badge-soft-danger ml-2">10%</span>
                            </td>
                            <td>
                                <div class="badge badge-soft-success font-size-12">Paid</div>
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
            <!-- end table -->
        </div>
    </div>
    <!-- end row -->

@endsection
@section('script')
    <!-- datatables-->
    <script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
    <!-- init js -->
    <script src="{{ URL::asset('/assets/js/pages/ecommerce-datatables.init.js') }}"></script>
@endsection
