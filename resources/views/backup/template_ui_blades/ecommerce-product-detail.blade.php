@extends('layouts.master')
@section('title') @lang('translation.Product_Detail') @endsection
@section('content')
    @component('components.breadcrumb')
        @slot('pagetitle') Ecommerce @endslot
        @slot('title') Product Detail @endslot
    @endcomponent
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body" id="productsdetails">
                    <div class="row">
                        <div class="col-xl-5">
                            <div class="product-detail">
                                <div class="row">
                                    <div class="col-3">
                                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                                            aria-orientation="vertical">
                                            <a class="nav-link active" id="product-1-tab" data-toggle="pill"
                                                href="#product-1" role="tab">
                                                <img src="{{ URL::asset('/assets/images/product/img-1.png') }}" alt=""
                                                    class="img-fluid mx-auto d-block tab-img rounded" />
                                            </a>
                                            <a class="nav-link" id="product-01-tab" data-toggle="pill" href="#product-01"
                                                role="tab">
                                                <img src="{{ URL::asset('/assets/images/product/img-01.png') }}" alt=""
                                                    class="img-fluid mx-auto d-block tab-img rounded" />
                                            </a>
                                            <a class="nav-link" id="product-2-tab" data-toggle="pill" href="#product-2"
                                                role="tab">
                                                <img src="{{ URL::asset('/assets/images/product/img-2.png') }}" alt=""
                                                    class="img-fluid mx-auto d-block tab-img rounded" />
                                            </a>
                                            <a class="nav-link" id="product-02-tab" data-toggle="pill" href="#product-02"
                                                role="tab">
                                                <img src="{{ URL::asset('/assets/images/product/img-02.png') }}" alt=""
                                                    class="img-fluid mx-auto d-block tab-img rounded" />
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-9">
                                        <div class="tab-content position-relative" id="v-pills-tabContent">
                                            <div class="product-wishlist">
                                                <a href="#">
                                                    <i class="icon-sm heart-icon" data-feather="heart"></i>
                                                </a>
                                            </div>
                                            <div class="tab-pane fade show active" id="product-1" role="tabpanel">
                                                <div class="product-img">
                                                    <img src="{{ URL::asset('/assets/images/product/img-1.png') }}" alt=""
                                                        class="img-fluid mx-auto d-block"
                                                        data-zoom="assets/images/product/img-1.png" />
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="product-01" role="tabpanel">
                                                <div class="product-img">
                                                    <img src="{{ URL::asset('/assets/images/product/img-01.png') }}" alt=""
                                                        class="img-fluid mx-auto d-block" />
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="product-2" role="tabpanel">
                                                <div class="product-img">
                                                    <img src="{{ URL::asset('/assets/images/product/img-2.png') }}" alt=""
                                                        class="img-fluid mx-auto d-block" />
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="product-02" role="tabpanel">
                                                <div class="product-img">
                                                    <img src="{{ URL::asset('/assets/images/product/img-02.png') }}" alt=""
                                                        class="img-fluid mx-auto d-block" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row text-center mt-2">
                                            <div class="col-sm-6">
                                                <button type="button"
                                                    class="btn btn-primary btn-block waves-effect waves-light mt-2 mr-1"><i
                                                        class="uil uil-shopping-cart-alt mr-2"></i> Add to cart</button>
                                            </div>
                                            <div class="col-sm-6">
                                                <button type="button"
                                                    class="btn btn-light btn-block waves-effect mt-2 waves-light"><i
                                                        class="uil uil-shopping-basket mr-2"></i>Buy now</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7">
                            <div class="mt-5 mt-xl-3 pl-xl-4">
                                <h4 class="mb-2">Boot Solo <span class="text-primary">Pro</span> (Black)</h4>
                                <p class="text-muted mb-4">Wireless over-ear headphone</p>

                                <h4 class="font-weight-bold">$ 24.00 - <s class="text-muted">$ 28.00</s></h4>

                                <ul class="list-inline text-warning font-size-18 mt-2 mb-4">
                                    <li class="list-inline-item mr-0"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item mr-0"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item mr-0"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item mr-0"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item mr-0"><i class="mdi mdi-star-half-full"></i></li>
                                    <li class="list-inline-item ml-2 font-size-14 text-dark">4.3 (540 Reviews)</li>
                                </ul>

                                <div class="my-4">
                                    <h5 class="font-size-15">Headphone Specification :</h5>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <ul class="list-unstyled product-desc-list text-muted">
                                                <li><i class="mdi mdi-radiobox-marked font-size-12 mr-1 align-middle"></i>
                                                    Noise Cancelling</li>
                                                <li><i class="mdi mdi-radiobox-marked font-size-12 mr-1 align-middle"></i>
                                                    Prefecr Sound</li>
                                                <li><i class="mdi mdi-radiobox-marked font-size-12 mr-1 align-middle"></i>
                                                    16-Hour Bettery Life</li>
                                                <li><i class="mdi mdi-radiobox-marked font-size-12 mr-1 align-middle"></i>
                                                    Premium Sound with Custom EQ</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <ul class="list-unstyled product-desc-list text-muted">
                                                <li><i class="mdi mdi-radiobox-marked font-size-12 mr-1 align-middle"></i>
                                                    High-Resolution Audio Compatible</li>
                                                <li><i class="mdi mdi-radiobox-marked font-size-12 mr-1 align-middle"></i>
                                                    Music & Call</li>
                                                <li><i class="mdi mdi-radiobox-marked font-size-12 mr-1 align-middle"></i>
                                                    Fabric Sport Cord</li>
                                                <li><i class="mdi mdi-radiobox-marked font-size-12 mr-1 align-middle"></i>
                                                    Magnetic Snap Lock</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row mt-3">
                                        <div class="col-lg-3">
                                            <h5 class="font-size-14 mb-3"><i
                                                    class="uil uil-palette font-size-20 text-primary align-middle mr-2"></i>
                                                Color Option :</h5>
                                            <ul class="list-inline mt-2 font-size-18">
                                                <li class="list-inline-item">
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Blue"><i
                                                            class="mdi mdi-radiobox-marked text-primary"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Green"><i
                                                            class="mdi mdi-radiobox-marked text-success"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Orange"><i
                                                            class="mdi mdi-radiobox-marked text-orange"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Dark"><i
                                                            class="mdi mdi-radiobox-marked text-dark"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Light Blue"><i
                                                            class="mdi mdi-radiobox-marked text-info"></i></a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="col-lg-3 col-md-6">
                                            <h5 class="font-size-14 mb-3"><i
                                                    class="uil uil-headphones font-size-20 text-primary align-middle mr-2"></i>
                                                Select Item :</h5>
                                            <div class="form-inline">
                                                <select class="custom-select w-md">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3" selected>3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-5 col-md-6">
                                            <h5 class="font-size-14 mb-3 mt-sm-0 mt-4"><i
                                                    class="uil uil-location-pin-alt font-size-20 text-primary align-middle mr-2"></i>
                                                Delivery location</h5>
                                            <div class="form-inline">
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control"
                                                        placeholder="Enter Delivery pincode " />
                                                    <div class="input-group-append">
                                                        <button class="btn btn-light" type="button">Check</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <h5 class="font-size-15 mt-4">Services :</h5>
                                    <div class="row mt-3">
                                        <div class="col-lg-3 col-md-4">
                                            <div class="media align-items-center mb-sm-0 mb-4">
                                                <img src="{{ URL::asset('/assets/images/e-truck.svg') }}" class="mr-3"
                                                    alt="">
                                                <div class="media-body">
                                                    <h5 class="my-0 font-size-15">Free Shipping</h5>
                                                    <p class="text-muetd mb-0">Ships Today</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4">
                                            <div class="media align-items-center mb-sm-0 mb-4">
                                                <img src="{{ URL::asset('/assets/images/e-price.svg') }}" class="mr-3"
                                                    alt="">
                                                <div class="media-body">
                                                    <h5 class="my-0 font-size-15">Easy Returns</h5>
                                                    <p class="text-muetd mb-0">Returns Parcel</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4">
                                            <div class="media align-items-center mb-sm-0 mb-4">
                                                <img src="{{ URL::asset('/assets/images/e-go-back.svg') }}" class="mr-3"
                                                    alt="">
                                                <div class="media-body">
                                                    <h5 class="my-0 font-size-15">Lowest Price</h5>
                                                    <p class="text-muetd mb-0">Guarantee</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="mt-4">
                        <h5 class="font-size-14 mb-3">Product description:</h5>
                        <div class="product-desc">
                            <ul class="nav nav-tabs nav-tabs-custom" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link" id="desc-tab" data-toggle="tab" href="#desc"
                                        role="tab">Description</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" id="specifi-tab" data-toggle="tab" href="#specifi"
                                        role="tab">Specifications</a>
                                </li>
                            </ul>
                            <div class="tab-content border border-top-0 p-4">
                                <div class="tab-pane fade" id="desc" role="tabpanel">
                                    <div class="row">
                                        <div class="col-sm-3 col-md-2">
                                            <div>
                                                <img src="{{ URL::asset('/assets/images/product/img-6.png') }}" alt=""
                                                    class="img-fluid mx-auto d-block" />
                                            </div>
                                        </div>
                                        <div class="col-sm-9 col-md-10">
                                            <div class="text-muted p-2">
                                                <p>If several languages coalesce, the grammar of the resulting language is
                                                    more simple and regular</p>
                                                <p>Everyone realizes why a new common language would be desirable, one could
                                                    refuse to pay expensive translators.</p>
                                                <p>It will be as simple as occidental in fact.</p>

                                                <div>
                                                    <ul class="list-unstyled product-desc-list text-muted">
                                                        <li><i class="mdi mdi-circle-medium mr-1 align-middle"></i> Sed ut
                                                            perspiciatis omnis iste</li>
                                                        <li><i class="mdi mdi-circle-medium mr-1 align-middle"></i> Neque
                                                            porro quisquam est</li>
                                                        <li><i class="mdi mdi-circle-medium mr-1 align-middle"></i> Quis
                                                            autem vel eum iure</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade show active" id="specifi" role="tabpanel">
                                    <div class="table-responsive">
                                        <table class="table table-nowrap mb-0">
                                            <tbody>
                                                <tr>
                                                    <th scope="row" style="width: 20%;">Category</th>
                                                    <td>Headphone</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Brand</th>
                                                    <td>Boot</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Color</th>
                                                    <td>Dark</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Quality</th>
                                                    <td>High</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Sound</th>
                                                    <td>Custom EQ</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Bettery</th>
                                                    <td>16 Hours</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Waterproof</th>
                                                    <td>Yes</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4">
                        <h5 class="font-size-14 mb-3">Reviews :</h5>
                        <div class="text-muted mb-3">
                            <span class="badge badge-success font-size-14 mr-1"><i class="mdi mdi-star"></i> 4.2</span> 234
                            Reviews
                        </div>
                        <div class="border p-4 rounded">
                            <div class="border-bottom pb-3">
                                <div class="media">
                                    <img src="{{ URL::asset('/assets/images/users/avatar-1.jpg') }}" alt=""
                                        class="img-fluid rounded-circle avatar-sm mr-3" />
                                    <div class="media-body">
                                        <p class="float-sm-right text-muted font-size-13">10 October, 2020</p>
                                        <h5 class="font-size-16 mb-1">Angela Leblanc</h5>
                                        <ul class="list-inline text-warning font-size-17 mb-1">
                                            <li class="list-inline-item mr-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mr-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mr-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mr-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mr-0"><i class="mdi mdi-star-half-full"></i></li>
                                        </ul>
                                        <p class="text-muted mb-2">It will be as simple as in fact, it will be Occidental.
                                            It will seem like simplified</p>
                                        <ul class="list-inline product-review-link mb-0">
                                            <li class="list-inline-item" data-toggle="tooltip" data-placement="top"
                                                title="Like">
                                                <a href="#"><i class="uil uil-thumbs-up"></i> <span
                                                        class="font-size-14 ml-1">5</span></a>
                                            </li>
                                            <li class="list-inline-item" data-toggle="tooltip" data-placement="top"
                                                title="Comment">
                                                <a href="#"><i class="uil uil-comment-alt-message"></i> <span
                                                        class="font-size-14 ml-1">2</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom py-3">
                                <div class="media">
                                    <img src="{{ URL::asset('/assets/images/users/avatar-2.jpg') }}" alt=""
                                        class="img-fluid rounded-circle avatar-sm mr-3" />
                                    <div class="media-body">
                                        <p class="float-sm-right text-muted font-size-13">15 October, 2020</p>
                                        <h5 class="font-size-16 mb-1">Curtis Williams</h5>
                                        <ul class="list-inline text-warning font-size-17 mb-1">
                                            <li class="list-inline-item mr-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mr-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mr-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mr-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mr-0"><i class="mdi mdi-star-half-full"></i></li>
                                        </ul>
                                        <p class="text-muted mb-2">Sed ut perspiciatis unde omnis iste natus error sit</p>
                                        <ul class="list-inline product-review-link mb-0">
                                            <li class="list-inline-item" data-toggle="tooltip" data-placement="top"
                                                title="Like">
                                                <a href="#"><i class="uil uil-thumbs-up"></i> <span
                                                        class="font-size-14 ml-1">10</span></a>
                                            </li>
                                            <li class="list-inline-item" data-toggle="tooltip" data-placement="top"
                                                title="Comment">
                                                <a href="#"><i class="uil uil-comment-alt-message"></i> <span
                                                        class="font-size-14 ml-1">3</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-3">
                                <div class="media">
                                    <img src="{{ URL::asset('/assets/images/users/avatar-3.jpg') }}" alt=""
                                        class="img-fluid rounded-circle avatar-sm mr-3" />
                                    <div class="media-body">
                                        <p class="float-sm-right text-muted font-size-13">16 October, 2020</p>
                                        <h5 class="font-size-16 mb-1">Kelley Grove</h5>
                                        <ul class="list-inline text-warning font-size-17 mb-1">
                                            <li class="list-inline-item mr-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mr-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mr-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mr-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mr-0"><i class="mdi mdi-star-half-full"></i></li>
                                        </ul>
                                        <p class="text-muted mb-2">Neque porro quisquam est, qui dolorem ipsum quia dolor
                                            sit amet</p>
                                        <ul class="list-inline product-review-link mb-0">
                                            <li class="list-inline-item" data-toggle="tooltip" data-placement="top"
                                                title="Like">
                                                <a href="#"><i class="uil uil-thumbs-up"></i> <span
                                                        class="font-size-14 ml-1">2</span></a>
                                            </li>
                                            <li class="list-inline-item" data-toggle="tooltip" data-placement="top"
                                                title="Comment">
                                                <a href="#"><i class="uil uil-comment-alt-message"></i> <span
                                                        class="font-size-14 ml-1">0</span></a>
                                            </li>
                                        </ul>
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
