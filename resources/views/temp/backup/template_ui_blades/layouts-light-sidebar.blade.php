@extends('layouts.master')
@section('title') @lang('translation.Light_Sidebar') @endsection
@section('body')
    <body>
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('pagetitle') Layouts @endslot
        @slot('title') Light Sidebar @endslot
    @endcomponent
    <div class="row">
        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="float-right">
                        <div class="dropdown">
                            <a class="btn-link text-muted dropdown-toggle arrow-none" href="#" role="button" id="dropdownMenuLink-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-sm" data-feather="more-horizontal"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink-2">
                                <a class="dropdown-item" href="#"><i class="icon-xs icon mr-2" data-feather="refresh-cw"></i> Refresh</a>
                                <a class="dropdown-item" href="#"><i class="icon-xs icon mr-2" data-feather="edit"></i> Edit</a>
                                <a class="dropdown-item" href="#"><i class="icon-xs icon mr-2" data-feather="activity"></i> Action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="#"><i class="icon-xs icon mr-2" data-feather="trash-2"></i> Delete</a>
                            </div>
                        </div>
                    </div>
                    <div class="media align-items-center">
                        <div class="avatar-sm mr-3">
                            <div class="avatar-title rounded bg-soft-primary text-primary">
                                <i class="icon-sm" data-feather="credit-card"></i>
                            </div>
                        </div>
                        <div class="media-body">
                            <h5 class="mb-0 text-primary font-size-15">Payments</h5>
                        </div>
                    </div>
                    <div class="row align-items-end mt-3">
                        <div class="col-6">
                            <h6 class="text-muted mb-2">This Year</h6>
                            <h4 class="mb-0">$25,650</h4>
                        </div>
                        <!-- end col-->
                        <div class="col-6">
                            <div>
                                <div class="apex-charts" id="sparkline-chart-1"></div>
                            </div>
                        </div>
                        <!-- end col-->
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="float-right">
                        <div class="dropdown">
                            <a class="btn-link text-muted dropdown-toggle arrow-none" href="#" role="button" id="dropdownMenuLink-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-sm" data-feather="more-horizontal"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink-2">
                                <a class="dropdown-item" href="#"><i class="icon-xs icon mr-2" data-feather="refresh-cw"></i> Refresh</a>
                                <a class="dropdown-item" href="#"><i class="icon-xs icon mr-2" data-feather="edit"></i> Edit</a>
                                <a class="dropdown-item" href="#"><i class="icon-xs icon mr-2" data-feather="activity"></i> Action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="#"><i class="icon-xs icon mr-2" data-feather="trash-2"></i> Delete</a>
                            </div>
                        </div>
                    </div>
                    <div class="media align-items-center">
                        <div class="avatar-sm mr-3">
                            <div class="avatar-title rounded bg-soft-primary text-primary">
                                <i class="icon-sm" data-feather="database"></i>
                            </div>
                        </div>
                        <div class="media-body">
                            <h5 class="mb-0 text-primary font-size-15">Revenue</h5>
                        </div>
                    </div>
                    <div class="row align-items-end mt-3">
                        <div class="col-6">
                            <h6 class="text-muted mb-2">+38% Last Month</h6>
                            <h5 class="mb-0 font-size-20">$5,820</h5>
                        </div>
                        <!-- end col-->
                        <div class="col-6">
                            <div>
                                <div class="apex-charts" id="sparkline-chart-2"></div>
                            </div>
                        </div>
                        <!-- end col-->
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="float-right">
                        <div class="dropdown">
                            <a class="btn-link text-muted dropdown-toggle arrow-none" href="#" role="button" id="dropdownMenuLink-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-sm" data-feather="more-horizontal"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink-2">
                                <a class="dropdown-item" href="#"><i class="icon-xs icon mr-2" data-feather="refresh-cw"></i> Refresh</a>
                                <a class="dropdown-item" href="#"><i class="icon-xs icon mr-2" data-feather="edit"></i> Edit</a>
                                <a class="dropdown-item" href="#"><i class="icon-xs icon mr-2" data-feather="activity"></i> Action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="#"><i class="icon-xs icon mr-2" data-feather="trash-2"></i> Delete</a>
                            </div>
                        </div>
                    </div>
                    <div class="media align-items-center">
                        <div class="avatar-sm mr-3">
                            <div class="avatar-title rounded bg-soft-primary text-primary">
                                <i class="icon-sm" data-feather="shopping-cart"></i>
                            </div>
                        </div>
                        <div class="media-body">
                            <h5 class="mb-0 text-primary font-size-15">Total Orders</h5>
                        </div>
                    </div>
                    <div class="row align-items-end mt-3">
                        <div class="col-6">
                            <h6 class="text-muted mb-2">Weekly Sales</h6>
                            <h5 class="mb-0 font-size-20">50.6k</h5>
                        </div>
                        <!-- end col-->
                        <div class="col-6">
                            <div>
                                <div class="apex-charts" id="sparkline-chart-3"></div>
                            </div>
                        </div>
                        <!-- end col-->
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="float-right">
                        <div class="dropdown">
                            <a class="btn-link text-muted dropdown-toggle arrow-none" href="#" role="button" id="dropdownMenuLink-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-sm" data-feather="more-horizontal"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink-2">
                                <a class="dropdown-item" href="#"><i class="icon-xs icon mr-2" data-feather="refresh-cw"></i> Refresh</a>
                                <a class="dropdown-item" href="#"><i class="icon-xs icon mr-2" data-feather="edit"></i> Edit</a>
                                <a class="dropdown-item" href="#"><i class="icon-xs icon mr-2" data-feather="activity"></i> Action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="#"><i class="icon-xs icon mr-2" data-feather="trash-2"></i> Delete</a>
                            </div>
                        </div>
                    </div>
                    <div class="media align-items-center">
                        <div class="avatar-sm mr-3">
                            <div class="avatar-title rounded bg-soft-primary text-primary">
                                <i class="icon-sm" data-feather="archive"></i>
                            </div>
                        </div>
                        <div class="media-body">
                            <h5 class="mb-0 text-primary font-size-15">Product's Views</h5>
                        </div>
                    </div>
                    <div class="row align-items-end mt-3">
                        <div class="col-6">
                            <h6 class="text-muted mb-2">This Month</h6>
                            <h5 class="mb-0 font-size-20">200k</h5>
                        </div>
                        <!-- end col-->
                        <div class="col-6">
                            <div>
                                <div class="apex-charts" id="sparkline-chart-4"></div>
                            </div>
                        </div>
                        <!-- end col-->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-8">
            <div class="card">
                <div class="card-body">
                    <div class="float-right">
                        <div class="dropdown">
                            <a class="btn-link text-muted dropdown-toggle arrow-none" href="#" role="button" id="dropdownMenuLink-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-sm" data-feather="more-horizontal"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink-2">
                                <a class="dropdown-item" href="#"><i class="icon-xs icon mr-2" data-feather="refresh-cw"></i> Refresh</a>
                                <a class="dropdown-item" href="#"><i class="icon-xs icon mr-2" data-feather="edit"></i> Edit</a>
                                <a class="dropdown-item" href="#"><i class="icon-xs icon mr-2" data-feather="activity"></i> Action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="#"><i class="icon-xs icon mr-2" data-feather="trash-2"></i> Delete</a>
                            </div>
                        </div>
                    </div>
                    <h4 class="card-title mb-4">Activity Report</h4>
                    <div class="pb-3 mb-4">
                        <a href="#" class="btn float-right btn-soft-primary">Generate Report</a>
                        <h5 class="">$36,00,000 <span class="font-size-15 ml-1">All time</span></h5>
                    </div>
                    <div>
                        <div class="apex-charts" id="column-chart-1"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="float-right">
                        <div class="dropdown">
                            <a class="btn-link text-muted dropdown-toggle arrow-none" href="#" role="button" id="dropdownMenuLink-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-sm" data-feather="more-horizontal"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink-2">
                                <a class="dropdown-item" href="#"><i class="icon-xs icon mr-2" data-feather="refresh-cw"></i> Refresh</a>
                                <a class="dropdown-item" href="#"><i class="icon-xs icon mr-2" data-feather="edit"></i> Edit</a>
                                <a class="dropdown-item" href="#"><i class="icon-xs icon mr-2" data-feather="activity"></i> Action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="#"><i class="icon-xs icon mr-2" data-feather="trash-2"></i> Delete</a>
                            </div>
                        </div>
                    </div>
                    <h4 class="card-title mb-2">Company Expenses</h4>
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="text-center mb-4">
                                <h3 class="mb-1">$3,320.00</h3>
                                <p class="text-muted">Last Month</p>
                            </div>
                            <div>
                                <div class="apex-charts" id="pie-chart-1"></div>
                            </div>
                        </div>

                        <div class="col-md-5 ml-auto">
                            <div class="media my-4 py-1">
                                <i class="bx bx-radio-circle-marked font-size-24 text-primary align-middle mr-2"></i>
                                <div class="media-body">
                                    <h5 class="mb-1">$1,820.00</h5>
                                    <p class="text-muted mb-0">Rent & Lease</p>
                                </div>
                            </div>
                            <div class="media my-4 py-1">
                                <i class="bx bx-radio-circle-marked font-size-24 text-success align-middle mr-2"></i>
                                <div class="media-body">
                                    <h5 class="mb-1">$340.00</h5>
                                    <p class="text-muted mb-0">Travel</p>
                                </div>
                            </div>
                            <div class="media my-4 py-1">
                                <i class="bx bx-radio-circle-marked font-size-24 text-warning align-middle mr-2"></i>
                                <div class="media-body">
                                    <h5 class="mb-1">$80.00</h5>
                                    <p class="text-muted mb-0">Food & Drink</p>
                                </div>
                            </div>
                            <div class="media my-4 py-1">
                                <i class="bx bx-radio-circle-marked font-size-24 text-info align-middle mr-2"></i>
                                <div class="media-body">
                                    <h5 class="mb-1">$900.00</h5>
                                    <p class="text-muted mb-0">Maintenancent</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="float-right">
                        <div class="dropdown">
                            <a class="dropdown-toggle btn btn-light" href="#" id="dropdownMenuButton5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="text-muted">Last 6 Month<i class="mdi mdi-chevron-down ml-1"></i></span>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton5">
                                <a class="dropdown-item" href="#">Last 6 Month</a>
                                <a class="dropdown-item" href="#">Last 2 Year</a>
                                <a class="dropdown-item" href="#">Last 5 Year</a>
                            </div>
                        </div>
                    </div>
                    <h4 class="card-title pt-md-2 mb-4">Monthly Sales</h4>
                    <div>
                        <div class="apex-charts" id="pie-chart-2"></div>
                    </div>
                    <div class="row p-md-2">
                        <div class="col-6">
                            <div class="media mt-4">
                                <i class="mdi mdi-circle font-size-14 text-primary mr-2"></i>
                                <div class="media-body">
                                    <p class="text-muted mb-2">Steaming</p>
                                    <h5 class="font-weight-semibold font-size-16 mb-0">$16,500.00 (80%)</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="media mt-4">
                                <i class="mdi mdi-circle font-size-14 text-warning mr-2"></i>
                                <div class="media-body">
                                    <p class="text-muted mb-2">Physical</p>
                                    <h5 class="font-weight-semibold font-size-16 mb-0">$12,800.00 (55%)</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="float-right">
                        <div class="dropdown">
                            <a class="dropdown-toggle btn btn-light" href="#" id="dropdownMenuButton5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="text-muted">Last Month<i class="mdi mdi-chevron-down ml-1"></i></span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton5">
                                <a class="dropdown-item" href="#">This Month</a>
                                <a class="dropdown-item" href="#">Last Month</a>
                                <a class="dropdown-item" href="#">Last Year</a>
                            </div>
                        </div>
                    </div>
                    <h4 class="card-title mb-4 pt-md-2">Views By Categories</h4>
                    <div>
                        <div class="apex-charts" id="column-chart-2"></div>
                    </div>
                    <div class="row p-md-2">
                        <div class="col-6">
                            <div class="media mt-4">
                                <i class="mdi mdi-circle font-size-14 text-primary mr-2"></i>
                                <div class="media-body">
                                    <p class="text-muted mb-2">This Month</p>
                                    <h5 class="font-weight-semibold font-size-16 mb-0">80% Viwes</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="media mt-4">
                                <i class="mdi mdi-circle font-size-14 text-warning mr-2"></i>
                                <div class="media-body">
                                    <p class="text-muted mb-2">Last Month</p>
                                    <h5 class="font-weight-semibold font-size-16 mb-0">68% Viwes</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="float-right">
                        <div class="dropdown">
                            <a class="dropdown-toggle btn btn-light" href="#" id="dropdownMenuButton5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="text-muted">Last Week<i class="mdi mdi-chevron-down ml-1"></i></span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton5">
                                <a class="dropdown-item" href="#">Last Week</a>
                                <a class="dropdown-item" href="#">Last Month</a>
                                <a class="dropdown-item" href="#">Last Year</a>
                            </div>
                        </div>
                    </div>
                    <h4 class="card-title mb-4 pt-md-2">Growth</h4>
                    <div>
                        <div class="apex-charts" id="sparkline-chart-5"></div>
                    </div>
                    <div class="row p-md-2">
                        <div class="col-6">
                            <div class="media mt-4">
                                <i class="mdi mdi-circle font-size-14 text-primary mr-2"></i>
                                <div class="media-body">
                                    <p class="text-muted mb-2">This Week</p>
                                    <h5 class="font-weight-semibold font-size-16 mb-0">75% Growth</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="media mt-4">
                                <i class="mdi mdi-circle font-size-14 text-warning mr-2"></i>
                                <div class="media-body">
                                    <p class="text-muted mb-2">Last Week</p>
                                    <h5 class="font-weight-semibold font-size-16 mb-0">60% Growth</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-7">
            <div class="card">
                <div class="card-body">
                    <div class="float-right">
                        <div class="dropdown">
                            <a class="btn-link text-muted dropdown-toggle arrow-none" href="#" role="button" id="dropdownMenuLink-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-sm" data-feather="more-horizontal"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink-2">
                                <a class="dropdown-item" href="#"><i class="icon-xs icon mr-2" data-feather="refresh-cw"></i> Refresh</a>
                                <a class="dropdown-item" href="#"><i class="icon-xs icon mr-2" data-feather="edit"></i> Edit</a>
                                <a class="dropdown-item" href="#"><i class="icon-xs icon mr-2" data-feather="activity"></i> Action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="#"><i class="icon-xs icon mr-2" data-feather="trash-2"></i> Delete</a>
                            </div>
                        </div>
                    </div>
                    <h4 class="card-title mb-1">Recent Buyers</h4>
                    <p class="text-muted font-size-14 mb-4">More than 250+ Product</p>
                    <div class="table-responsive">
                        <table class="table table-centered table-nowrap mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">Product</th>
                                    <th scope="col">Customers</th>
                                    <th scope="col">Categories</th>
                                    <th scope="col">Popularity</th>
                                    <th scope="col">Price</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="media align-items-center">
                                            <img src="assets/images/product/product-x/pro-1.png" alt="" class="imf-fluid avatar mr-3" />
                                            <div class="media-body">
                                                <h6 class="font-size-15 mb-1">Headphone</h6>
                                                <p class="text-muted font-size-13 mb-0">Sales By: Maria Box</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Arnold Martinez</td>
                                    <td><span class="py-1 px-2 bg-soft-primary text-primary font-weight-medium font-size-13 rounded">Headphone</span></td>
                                    <td>
                                        <div class="progress" style="height: 6px;">
                                            <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td>$160.00</td>
                                    <td class="text-right">
                                        <a href="#" class="btn btn-sm btn-soft-primary">View More </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="media align-items-center">
                                            <img src="assets/images/product/product-x/pro-2.png" alt="" class="imf-fluid avatar mr-3" />
                                            <div class="media-body">
                                                <h6 class="font-size-15 mb-1">Apple watch</h6>
                                                <p class="text-muted font-size-13 mb-0">Sales By: Marsha Milne</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Blanche Schroeder</td>
                                    <td><span class="py-1 px-2 bg-soft-primary text-primary font-weight-medium font-size-13 rounded">Apple watch</span></td>
                                    <td>
                                        <div class="progress" style="height: 6px;">
                                            <div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td>$250.00</td>
                                    <td class="text-right">
                                        <a href="#" class="btn btn-sm btn-soft-primary">View More </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="media align-items-center">
                                            <img src="assets/images/product/product-x/pro-3.png" alt="" class="imf-fluid avatar mr-3" />
                                            <div class="media-body">
                                                <h6 class="font-size-15 mb-1">T-shirt</h6>
                                                <p class="text-muted font-size-13 mb-0">Sales By: Calvin Mead</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>David Murphy</td>
                                    <td><span class="py-1 px-2 bg-soft-primary text-primary font-weight-medium font-size-13 rounded">T-shirt</span></td>
                                    <td>
                                        <div class="progress" style="height: 6px;">
                                            <div class="progress-bar" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td>$60.00</td>
                                    <td class="text-right">
                                        <a href="#" class="btn btn-sm btn-soft-primary">View More </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="media align-items-center">
                                            <img src="assets/images/product/product-x/pro-4.png" alt="" class="imf-fluid avatar mr-3" />
                                            <div class="media-body">
                                                <h6 class="font-size-15 mb-1">iPhone 7s</h6>
                                                <p class="text-muted font-size-13 mb-0">Sales By: Joseph Kane</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Richard Smith</td>
                                    <td><span class="py-1 px-2 bg-soft-primary text-primary font-weight-medium font-size-13 rounded">iPhone 7s</span></td>
                                    <td>
                                        <div class="progress" style="height: 6px;">
                                            <div class="progress-bar" role="progressbar" style="width: 95%;" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td>$650.00</td>
                                    <td class="text-right">
                                        <a href="#" class="btn btn-sm btn-soft-primary">View More </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-5">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-5">
                            <h4 class="card-title mb-1">Work By Day</h4>
                        </div>
                        <div class="col-md-7">
                            <ul class="list-inline text-md-right mb-4 pb-2">
                                <li class="list-inline-item mr-3"><i class="mdi mdi-circle font-size-14 text-success mr-2"></i>Completed</li>
                                <li class="list-inline-item"><i class="mdi mdi-circle font-size-14 text-danger mr-2"></i>Incompleted</li>
                            </ul>
                        </div>
                    </div>

                    <div class="row align-items-center mb-sm-4 mb-0">
                        <div class="col-md-6">
                            <div>
                                <div class="apex-charts" id="column-chart-3"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card bg-light rounded shadow-none">
                                <div class="card-body">
                                    <h3 class="mb-1 font-weight-semibold">80%</h3>
                                    <p class="text-muted">
                                        Completed <span class="text-success ml-2"><i class="icon-xs icon mr-2" data-feather="trending-up"></i>8.5%</span>
                                    </p>
                                    <p class="text-muted mb-0">Nemo enim ipsam voluptatem quia voluptas sit aspernatur.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div>
                                <div class="apex-charts" id="column-chart-4"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card bg-light rounded shadow-none">
                                <div class="card-body">
                                    <h3 class="mb-1 font-weight-semibold">20%</h3>
                                    <p class="text-muted">
                                        Incompleted <span class="text-danger ml-2"><i class="icon-xs icon mr-2" data-feather="trending-down"></i>3.2%</span>
                                    </p>
                                    <p class="text-muted mb-0">Quis autem a eum iure reprehenderit voluptate velit consequatur.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <!-- apexcharts -->
    <script src="{{ URL::asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/pages/dashboard-saas.init.js') }}"></script>
@endsection