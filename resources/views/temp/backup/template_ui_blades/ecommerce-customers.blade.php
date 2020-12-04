@extends('layouts.master')
@section('title') @lang('translation.Customers') @endsection
@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('pagetitle') Ecommerce @endslot
        @slot('title') Customers @endslot
    @endcomponent

    <div class="row">
        <div class="col-lg-12">
            <div>
                <div>
                    <button type="button" class="btn btn-success waves-effect waves-light mb-3"><i
                            class="mdi mdi-plus mr-1"></i> Add customers</button>
                </div>

                <div class="table-responsive custom-table mb-4">
                    <table class="table table-centered datatable dt-responsive nowrap table-check table-card-list"
                        style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">
                        <thead>
                            <tr class="bg-transparent">
                                <th style="width: 20px;">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="checkAll">
                                        <label class="custom-control-label" for="checkAll"></label>
                                    </div>
                                </th>
                                <th style="width: 120px;">Customer ID</th>
                                <th>Customer</th>
                                <th>Email / Phone</th>
                                <th>Location</th>
                                <th>Join Date</th>
                                <th>Status</th>
                                <th style="width: 120px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customercheck1">
                                        <label class="custom-control-label" for="customercheck1"></label>
                                    </div>
                                </td>

                                <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0112</a> </td>
                                <td>
                                    <img src="{{ URL::asset('/assets/images/users/avatar-2.jpg') }}" alt=""
                                        class="avatar-xs rounded-circle mr-2">
                                    <span>William Shipp</span>
                                </td>
                                <td>
                                    <p class="mb-1">WilliamShipp@jourrapide.com</p>
                                    <p class="mb-0">803-604-6759</p>
                                </td>

                                <td>Harter Street Lima, OH 45801</td>

                                <td>
                                    12 Oct, 2020
                                </td>
                                <td>
                                    <div class="badge badge-soft-success font-size-12">Active</div>
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
                                        <input type="checkbox" class="custom-control-input" id="customercheck2">
                                        <label class="custom-control-label" for="customercheck2"></label>
                                    </div>
                                </td>

                                <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0111</a> </td>
                                <td>
                                    <div class="avatar-xs d-inline-block mr-2">
                                        <span class="avatar-title rounded-circle bg-light text-body">
                                            J
                                        </span>
                                    </div>
                                    <span>Joe Hardy</span>
                                </td>
                                <td>
                                    <p class="mb-1">JoeHardy@dayrep.com</p>
                                    <p class="mb-0">509-455-1290</p>
                                </td>

                                <td>Frederick Street El Paso, TX 79922</td>

                                <td>
                                    11 Oct, 2020
                                </td>
                                <td>
                                    <div class="badge badge-soft-success font-size-12">Active</div>
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
                                        <input type="checkbox" class="custom-control-input" id="customercheck3">
                                        <label class="custom-control-label" for="customercheck3"></label>
                                    </div>
                                </td>

                                <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0110</a> </td>
                                <td>
                                    <img src="{{ URL::asset('/assets/images/users/avatar-3.jpg') }}" alt=""
                                        class="avatar-xs rounded-circle mr-2">
                                    <span>Thomas Hankins</span>
                                </td>
                                <td>
                                    <p class="mb-1">ThomasHankins@dayrep.com</p>
                                    <p class="mb-0">410-236-6583</p>
                                </td>

                                <td>Quarry Drive Ariton, AL 36311</td>

                                <td>
                                    10 Oct, 2020
                                </td>
                                <td>
                                    <div class="badge badge-soft-success font-size-12">Active</div>
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
                                        <input type="checkbox" class="custom-control-input" id="customercheck4">
                                        <label class="custom-control-label" for="customercheck4"></label>
                                    </div>
                                </td>

                                <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0109</a> </td>
                                <td>
                                    <img src="{{ URL::asset('/assets/images/users/avatar-4.jpg') }}" alt=""
                                        class="avatar-xs rounded-circle mr-2">
                                    <span>Mary Frazier</span>
                                </td>
                                <td>
                                    <p class="mb-1">MaryFrazier@armyspy.com</p>
                                    <p class="mb-0">262-752-8060</p>
                                </td>

                                <td>Watson Street Pleasantville, NJ 08232</td>

                                <td>
                                    09 Oct, 2020
                                </td>
                                <td>
                                    <div class="badge badge-soft-danger font-size-12">Deactive</div>
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
                                        <input type="checkbox" class="custom-control-input" id="customercheck5">
                                        <label class="custom-control-label" for="customercheck5"></label>
                                    </div>
                                </td>

                                <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0108</a> </td>
                                <td>
                                    <div class="avatar-xs d-inline-block mr-2">
                                        <span class="avatar-title rounded-circle bg-light text-body">
                                            S
                                        </span>
                                    </div>
                                    <span>Sam Perry</span>
                                </td>
                                <td>
                                    <p class="mb-1">SamPerry@rhyta.com</p>
                                    <p class="mb-0">812-775-1427</p>
                                </td>

                                <td>Willow Oaks Lane Lafayette, LA 70501</td>

                                <td>
                                    08 Oct, 2020
                                </td>
                                <td>
                                    <div class="badge badge-soft-success font-size-12">Active</div>
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
                                        <input type="checkbox" class="custom-control-input" id="customercheck6">
                                        <label class="custom-control-label" for="customercheck6"></label>
                                    </div>
                                </td>

                                <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0107</a> </td>
                                <td>
                                    <img src="{{ URL::asset('/assets/images/users/avatar-5.jpg') }}" alt=""
                                        class="avatar-xs rounded-circle mr-2">
                                    <span>Muriel Myers</span>
                                </td>
                                <td>
                                    <p class="mb-1">MurielMyers@rhyta.com</p>
                                    <p class="mb-0">412-517-0033</p>
                                </td>

                                <td>Leisure Lane Goleta, CA 93117</td>

                                <td>
                                    07 Oct, 2020
                                </td>
                                <td>
                                    <div class="badge badge-soft-danger font-size-12">Deactive</div>
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
                                        <input type="checkbox" class="custom-control-input" id="customercheck7">
                                        <label class="custom-control-label" for="customercheck7"></label>
                                    </div>
                                </td>

                                <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0106</a> </td>
                                <td>
                                    <div class="avatar-xs d-inline-block mr-2">
                                        <span class="avatar-title rounded-circle bg-light text-body">
                                            J
                                        </span>
                                    </div>
                                    <span>Jessie Jacobs</span>
                                </td>
                                <td>
                                    <p class="mb-1">JessieJacobs@teleworm.us</p>
                                    <p class="mb-0">561-350-6087</p>
                                </td>

                                <td>Aviation Way Los Angeles, CA 90071</td>

                                <td>
                                    06 Oct, 2020
                                </td>
                                <td>
                                    <div class="badge badge-soft-success font-size-12">Active</div>
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
                                        <input type="checkbox" class="custom-control-input" id="customercheck8">
                                        <label class="custom-control-label" for="customercheck8"></label>
                                    </div>
                                </td>

                                <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0105</a> </td>
                                <td>
                                    <img src="{{ URL::asset('/assets/images/users/avatar-6.jpg') }}" alt=""
                                        class="avatar-xs rounded-circle mr-2">
                                    <span>Edward King</span>
                                </td>
                                <td>
                                    <p class="mb-1">EdwardKing@teleworm.us</p>
                                    <p class="mb-0">413-717-8335</p>
                                </td>

                                <td>Chapel Street Katy, TX 77494</td>

                                <td>
                                    05 Oct, 2020
                                </td>
                                <td>
                                    <div class="badge badge-soft-success font-size-12">Active</div>
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
                                        <input type="checkbox" class="custom-control-input" id="customercheck9">
                                        <label class="custom-control-label" for="customercheck9"></label>
                                    </div>
                                </td>

                                <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0104</a> </td>
                                <td>
                                    <img src="{{ URL::asset('/assets/images/users/avatar-7.jpg') }}" alt=""
                                        class="avatar-xs rounded-circle mr-2">
                                    <span>Stacy Webster</span>
                                </td>
                                <td>
                                    <p class="mb-1">StacyWebster@armyspy.com</p>
                                    <p class="mb-0">208-806-5287</p>
                                </td>

                                <td>Virgil Street Tallahassee, FL 32311</td>

                                <td>
                                    04 Oct, 2020
                                </td>
                                <td>
                                    <div class="badge badge-soft-danger font-size-12">Deactive</div>
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
                                        <input type="checkbox" class="custom-control-input" id="customercheck10">
                                        <label class="custom-control-label" for="customercheck10"></label>
                                    </div>
                                </td>

                                <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0103</a> </td>
                                <td>
                                    <div class="avatar-xs d-inline-block mr-2">
                                        <span class="avatar-title rounded-circle bg-light text-body">
                                            A
                                        </span>
                                    </div>
                                    <span>Amy McDonald</span>
                                </td>
                                <td>
                                    <p class="mb-1">AmyMcDonald@jourrapide.com</p>
                                    <p class="mb-0">330-929-6694</p>
                                </td>

                                <td>Bubby Drive Austin, TX 78704</td>

                                <td>
                                    03 Oct, 2020
                                </td>
                                <td>
                                    <div class="badge badge-soft-success font-size-12">Active</div>
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
                                        <input type="checkbox" class="custom-control-input" id="customercheck11">
                                        <label class="custom-control-label" for="customercheck11"></label>
                                    </div>
                                </td>

                                <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0102</a> </td>
                                <td>
                                    <div class="avatar-xs d-inline-block mr-2">
                                        <span class="avatar-title rounded-circle bg-light text-body">
                                            T
                                        </span>
                                    </div>
                                    <span>Terry Brown</span>
                                </td>
                                <td>
                                    <p class="mb-1">TerryBrown@dayrep.com</p>
                                    <p class="mb-0">618-595-9331</p>
                                </td>

                                <td>Maple Street Los Angeles, CA 90017</td>

                                <td>
                                    02 Oct, 2020
                                </td>
                                <td>
                                    <div class="badge badge-soft-success font-size-12">Active</div>
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
                                        <input type="checkbox" class="custom-control-input" id="customercheck12">
                                        <label class="custom-control-label" for="customercheck12"></label>
                                    </div>
                                </td>

                                <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#DZ0101</a> </td>
                                <td>
                                    <img src="{{ URL::asset('/assets/images/users/avatar-8.jpg') }}" alt=""
                                        class="avatar-xs rounded-circle mr-2">
                                    <span>Crissy Holland</span>
                                </td>
                                <td>
                                    <p class="mb-1">CrissyHolland@armyspy.com</p>
                                    <p class="mb-0">937-622-7058</p>
                                </td>

                                <td>Retreat Avenue Sedgwick, ME 04676</td>

                                <td>
                                    01 Oct, 2020
                                </td>
                                <td>
                                    <div class="badge badge-soft-danger font-size-12">Deactive</div>
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
    </div>
    <!-- end row -->

@endsection
@section('script')
    <!-- Ion Range Slider-->
    <script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
    <!-- init js -->
    <script src="{{ URL::asset('/assets/js/pages/ecommerce-datatables.init.js') }}"></script>
@endsection
