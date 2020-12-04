@extends('layouts.master')
@section('title') @lang('translation.Cart') @endsection
@section('css')
    <!-- bootstrap-touchspin -->
    <link href="{{ URL::asset('/assets/libs/bootstrap-touchspin/bootstrap-touchspin.min.css') }}" rel="stylesheet"
        type="text/css" />
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('pagetitle') Ecommerce @endslot
        @slot('title') Cart @endslot
    @endcomponent

    <div class="row">
        <div class="col-xl-9">
            <div class="card border shadow-none">
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table table-centered mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">Product</th>
                                    <th scope="col">Brand</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="media align-items-center">
                                            <img src="{{ URL::asset('/assets/images/product/img-01.png')}}" alt="" class="avatar-md mr-3">
                                            <div class="media-body">
                                                <h5 class="text-truncate font-size-16 mt-0 mb-1"><a
                                                        href="ecommerce-product-detail" class="text-dark">Boot Solo (Pro)</a></h5>
                                                <p class="mb-0">Color : <span class="font-weight-medium">Red</span></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Boot</td>
                                    <td>$24.60</td>
                                    <td>
                                        <div style="width: 110px;" class="product-cart-touchspin">
                                            <input data-toggle="touchspin" type="text" value="01">
                                        </div>
                                    </td>
                                    <td class="font-weight-semibold">$24.60</td>
                                    <td>
                                        <a href="#" class="text-muted" data-toggle="tooltip" data-placement="top"
                                            title="Remove">
                                            <i class="mdi mdi-close font-size-16"></i>
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="media align-items-center">
                                            <img src="{{ URL::asset('/assets/images/product/img-2.png')}}" alt="" class="avatar-md mr-3">
                                            <div class="media-body">
                                                <h5 class="text-truncate font-size-16 mt-0 mb-1"><a
                                                        href="ecommerce-product-detail" class="text-dark">Boot-Xe Max (Pro)</a></h5>
                                                <p class="mb-0">Color : <span class="font-weight-medium">Green</span></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Sony</td>
                                    <td>$20.40</td>
                                    <td>
                                        <div style="width: 110px;" class="product-cart-touchspin">
                                            <input data-toggle="touchspin" type="text" value="02">
                                        </div>
                                    </td>
                                    <td class="font-weight-semibold">$40.80</td>
                                    <td>
                                        <a href="#" class="text-muted" data-toggle="tooltip" data-placement="top"
                                            title="Remove">
                                            <i class="mdi mdi-close font-size-16"></i>
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="media align-items-center">
                                            <img src="{{ URL::asset('/assets/images/product/img-03.png')}}" alt="" class="avatar-md mr-3">
                                            <div class="media-body">
                                                <h5 class="text-truncate font-size-16 mt-0 mb-1"><a
                                                        href="ecommerce-product-detail" class="text-dark">Boot Solo Pro</a></h5>
                                                <p class="mb-0">Color : <span class="font-weight-medium">Purple</span></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Apple</td>
                                    <td>$15.10</td>
                                    <td>
                                        <div style="width: 110px;" class="product-cart-touchspin">
                                            <input data-toggle="touchspin" type="text" value="02">
                                        </div>
                                    </td>
                                    <td class="font-weight-semibold">$30.20</td>
                                    <td>
                                        <a href="#" class="text-muted" data-toggle="tooltip" data-placement="top"
                                            title="Remove">
                                            <i class="mdi mdi-close font-size-16"></i>
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="media align-items-center">
                                            <img src="{{ URL::asset('/assets/images/product/img-4.png')}}" alt="" class="avatar-md mr-3">
                                            <div class="media-body">
                                                <h5 class="text-truncate font-size-16 mt-0 mb-1"><a
                                                        href="ecommerce-product-detail" class="text-dark">Boot s5 (Max)</a></h5>
                                                <p class="mb-0">Color : <span class="font-weight-medium">Yallow</span></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Sennheiser</td>
                                    <td>$12.20</td>
                                    <td>
                                        <div style="width: 110px;" class="product-cart-touchspin">
                                            <input data-toggle="touchspin" type="text" value="03">
                                        </div>
                                    </td>
                                    <td class="font-weight-semibold">$36.60</td>
                                    <td>
                                        <a href="#" class="text-muted" data-toggle="tooltip" data-placement="top"
                                            title="Remove">
                                            <i class="mdi mdi-close font-size-16"></i>
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="media align-items-center">
                                            <img src="{{ URL::asset('/assets/images/product/img-05.png')}}" alt="" class="avatar-md mr-3">
                                            <div class="media-body">
                                                <h5 class="text-truncate font-size-16 mt-0 mb-1"><a
                                                        href="ecommerce-product-detail" class="text-dark">Boot-v4 Solo Max</a></h5>
                                                <p class="mb-0">Color : <span class="font-weight-medium">Light-Green</span></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Audio Technica</td>
                                    <td>$24.60</td>
                                    <td>
                                        <div style="width: 110px;" class="product-cart-touchspin">
                                            <input data-toggle="touchspin" type="text" value="01">
                                        </div>
                                    </td>
                                    <td class="font-weight-semibold">$24.60</td>
                                    <td>
                                        <a href="#" class="text-muted" data-toggle="tooltip" data-placement="top"
                                            title="Remove">
                                            <i class="mdi mdi-close font-size-16"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- end card -->

            <div class="row mt-4">
                <div class="col-sm-6">
                    <a href="ecommerce-products" class="btn btn-link text-muted">
                        <i class="uil uil-arrow-left mr-1"></i> Continue Shopping </a>
                </div> <!-- end col -->
                <div class="col-sm-6">
                    <div class="text-sm-right mt-2 mt-sm-0">
                        <a href="ecommerce-checkout" class="btn btn-success">
                            <i class="uil uil-shopping-cart-alt mr-1"></i> Checkout </a>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row-->
        </div>

        <div class="col-xl-3">
            <div class="mt-5 mt-lg-0">
                <div class="card bg-primary">
                    <div class="card-body pt-1">
                        <i class="bx bxl-visa text-white float-right display-3"></i>
                        <i class="icon text-white mt-4" data-feather="triangle"></i>
                        <div class="mt-4 pt-4">
                            <h6 class="text-white-50 mb-1">Card Number</h6>
                            <ul class="list-inline text-white font-size-15">
                                <li class="list-inline-item">****</li>
                                <li class="list-inline-item">****</li>
                                <li class="list-inline-item">****</li>
                                <li class="list-inline-item">4567</li>
                            </ul>
                        </div>
                        <div class="mt-4">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item mr-4">
                                    <h6 class="text-white-50">Expiration</h6>
                                    <h5 class="text-white mb-0 font-size-15">01/2021</h5>
                                </li>
                                <li class="list-inline-item mr-4">
                                    <h6 class="text-white-50">CCV</h6>
                                    <h5 class="text-white mb-0 font-size-15">251</h5>
                                </li>
                                <li class="list-inline-item">
                                    <h6 class="text-white-50">Card Holder Name</h6>
                                    <h5 class="text-white mb-0 font-size-15">Louise Elliott</h5>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <i class="bx bxl-visa visa-bg-icon"></i>
                </div>
                <div class="card border shadow-none">
                    <div class="card-header bg-transparent border-bottom py-3 px-4">
                        <h5 class="font-size-15 mb-0">Order Summary <span class="float-right">#DZ0124</span></h5>
                    </div>
                    <div class="card-body p-4">
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <tbody>
                                    <tr>
                                        <td>Sub Total :</td>
                                        <td class="text-right">$ 156.80</td>
                                    </tr>
                                    <tr>
                                        <td>Discount : </td>
                                        <td class="text-right">- $ 42.80</td>
                                    </tr>
                                    <tr>
                                        <td>Shipping Charge :</td>
                                        <td class="text-right">$ 18</td>
                                    </tr>
                                    <tr>
                                        <td>Estimated Tax : </td>
                                        <td class="text-right">$ 14</td>
                                    </tr>
                                    <tr class="bg-light">
                                        <th>Total :</th>
                                        <td class="text-right">
                                            <span class="font-weight-bold">
                                                $ 146
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- end table-responsive -->

                        <h6 class="text-muted font-weight-medium font-size-15 mt-4">Accepted Payment Methods</h6>
                        <ul class="list-inline mb-0 mt-3">
                            <li class="list-inline-item mb-sm-0 mb-2 mr-3">
                                <a href="#">
                                    <img src="{{ URL::asset('/assets/images/p-card/img-1.png')}}" alt="" class="img-fluid">
                                </a>
                            </li>
                            <li class="list-inline-item mb-sm-0 mb-2 mr-3">
                                <a href="#">
                                    <img src="{{ URL::asset('/assets/images/p-card/img-2.png')}}" alt="" class="img-fluid">
                                </a>
                            </li>
                            <li class="list-inline-item mb-sm-0 mb-2 mr-3">
                                <a href="#">
                                    <img src="{{ URL::asset('/assets/images/p-card/img-3.png')}}" alt="" class="img-fluid">
                                </a>
                            </li>
                            <li class="list-inline-item mb-sm-0 mb-2 mr-3">
                                <a href="#">
                                    <img src="{{ URL::asset('/assets/images/p-card/img-4.png')}}" alt="" class="img-fluid">
                                </a>
                            </li>
                            <li class="list-inline-item mb-sm-0 mb-2">
                                <a href="#">
                                    <img src="{{ URL::asset('/assets/images/p-card/img-5.png')}}" alt="" class="img-fluid">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

@endsection
@section('script')
    <!-- Ion Range Slider-->
    <script src="{{ URL::asset('/assets/libs/bootstrap-touchspin/bootstrap-touchspin.min.js') }}"></script>
    <!-- init js -->
    <script src="{{ URL::asset('/assets/js/pages/ecommerce-cart.init.js') }}"></script>
@endsection
