@extends('layouts.master')
@section('title') @lang('translation.Products') @endsection
@section('css')
    <!-- ION Slider -->
    <link href="{{ URL::asset('/assets/libs/ion-rangeslider/ion-rangeslider.min.css') }}" rel="stylesheet"
        type="text/css" />
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('pagetitle') Ecommerce @endslot
        @slot('title') Products @endslot
    @endcomponent
   

    <div class="row">
        <div class="col-xl-3 col-lg-4">
            <div class="card">
                <div class="card-header bg-transparent border-bottom">
                    <h5 class="mb-0">Filters</h5>
                </div>

                <div class="p-4">
                    <h5 class="font-size-14 mb-3">Categories</h5>
                    <div class="custom-accordion">
                        <a class="text-body font-weight-semibold pb-2 d-block" data-toggle="collapse"
                            href="#headphones-collapse" role="button" aria-expanded="false"
                            aria-controls="headphones-collapse">
                            <i class="mdi mdi-chevron-up accor-down-icon text-primary mr-1"></i> Headphones
                        </a>
                        <div class="collapse show" id="headphones-collapse">
                            <div class="card p-2 border shadow-none">
                                <ul class="list-unstyled categories-list mb-0">
                                    <li><a href="#"><i class="mdi mdi-circle-medium mr-1"></i> Audio-Technica</a></li>
                                    <li><a href="#"><i class="mdi mdi-circle-medium mr-1"></i> Sennheiser</a></li>
                                    <li><a href="#"><i class="mdi mdi-circle-medium mr-1"></i> Sony</a></li>
                                    <li class="active"><a href="#"><i class="mdi mdi-circle-medium mr-1"></i> Boot</a></li>
                                    <li><a href="#"><i class="mdi mdi-circle-medium mr-1"></i> JBL</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="custom-accordion">
                        <a class="text-body font-weight-semibold pb-2 d-block collapsed" data-toggle="collapse"
                            href="#phones-collapse" role="button" aria-expanded="false" aria-controls="phones-collapse">
                            <i class="mdi mdi-chevron-up accor-down-icon text-primary mr-1"></i> Phones
                        </a>
                        <div class="collapse" id="phones-collapse">
                            <div class="card p-2 border shadow-none">
                                <ul class="list-unstyled categories-list mb-0">
                                    <li><a href="#"><i class="mdi mdi-circle-medium mr-1"></i> iPhone</a></li>
                                    <li><a href="#"><i class="mdi mdi-circle-medium mr-1"></i> Samsung</a></li>
                                    <li><a href="#"><i class="mdi mdi-circle-medium mr-1"></i> Sony</a></li>
                                    <li><a href="#"><i class="mdi mdi-circle-medium mr-1"></i> Xolo</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="custom-accordion">
                        <a class="text-body font-weight-semibold pb-2 d-block collapsed" data-toggle="collapse"
                            href="#accessories-collapse" role="button" aria-expanded="false"
                            aria-controls="accessories-collapse">
                            <i class="mdi mdi-chevron-up accor-down-icon text-primary mr-1"></i> Accessories
                        </a>
                        <div class="collapse" id="accessories-collapse">
                            <div class="card p-2 border shadow-none">
                                <ul class="list-unstyled categories-list mb-0">
                                    <li><a href="#"><i class="mdi mdi-circle-medium mr-1"></i> Earphone</a></li>
                                    <li><a href="#"><i class="mdi mdi-circle-medium mr-1"></i> Mobile Cover</a></li>
                                    <li><a href="#"><i class="mdi mdi-circle-medium mr-1"></i> Charger</a></li>
                                    <li><a href="#"><i class="mdi mdi-circle-medium mr-1"></i> Battery</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="p-4 border-top">
                    <div>
                        <h5 class="font-size-14 mb-4">Price</h5>

                        <input type="text" id="pricerange">
                    </div>
                </div>

                <div class="custom-accordion">
                    <div class="p-4 border-top">
                        <div>
                            <h5 class="font-size-14 mb-0"><a href="#filtersizes-collapse" class="text-dark d-block"
                                    data-toggle="collapse">Items <i
                                        class="mdi mdi-chevron-up float-right accor-down-icon"></i></a></h5>

                            <div class="collapse show" id="filtersizes-collapse">
                                <div class="mt-4">
                                    <div class="media align-items-center">
                                        <div class="media-body">
                                            <h5 class="font-size-15 mb-0">Select items</h5>
                                        </div>
                                        <div class="w-xs">
                                            <select class="custom-select">
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
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="p-4 border-top">
                        <div>
                            <h5 class="font-size-14 mb-0"><a href="#filterprodductcolor-collapse" class="text-dark d-block"
                                    data-toggle="collapse">Colors <i
                                        class="mdi mdi-chevron-up float-right accor-down-icon"></i></a></h5>

                            <div class="collapse show" id="filterprodductcolor-collapse">
                                <div class="mt-4">
                                    <div class="custom-control custom-checkbox mt-2">
                                        <input type="checkbox" class="custom-control-input" id="productcolorCheck1">
                                        <label class="custom-control-label" for="productcolorCheck1"><i
                                                class="mdi mdi-circle text-dark mx-1"></i> Black</label>
                                    </div>
                                    <div class="custom-control custom-checkbox mt-2">
                                        <input type="checkbox" class="custom-control-input" id="productcolorCheck2">
                                        <label class="custom-control-label" for="productcolorCheck2"><i
                                                class="mdi mdi-circle text-light mx-1"></i> White</label>
                                    </div>
                                    <div class="custom-control custom-checkbox mt-2">
                                        <input type="checkbox" class="custom-control-input" id="productcolorCheck3">
                                        <label class="custom-control-label" for="productcolorCheck3"><i
                                                class="mdi mdi-circle text-secondary mx-1"></i> Gray</label>
                                    </div>
                                    <div class="custom-control custom-checkbox mt-2">
                                        <input type="checkbox" class="custom-control-input" id="productcolorCheck4">
                                        <label class="custom-control-label" for="productcolorCheck4"><i
                                                class="mdi mdi-circle text-primary mx-1"></i> Blue</label>
                                    </div>
                                    <div class="custom-control custom-checkbox mt-2">
                                        <input type="checkbox" class="custom-control-input" id="productcolorCheck5">
                                        <label class="custom-control-label" for="productcolorCheck5"><i
                                                class="mdi mdi-circle text-success mx-1"></i> green</label>
                                    </div>
                                    <div class="custom-control custom-checkbox mt-2">
                                        <input type="checkbox" class="custom-control-input" id="productcolorCheck6">
                                        <label class="custom-control-label" for="productcolorCheck6"><i
                                                class="mdi mdi-circle text-danger mx-1"></i> Red</label>
                                    </div>
                                    <div class="custom-control custom-checkbox mt-2">
                                        <input type="checkbox" class="custom-control-input" id="productcolorCheck7">
                                        <label class="custom-control-label" for="productcolorCheck7"><i
                                                class="mdi mdi-circle text-warning mx-1"></i> Yellow</label>
                                    </div>
                                    <div class="custom-control custom-checkbox mt-2">
                                        <input type="checkbox" class="custom-control-input" id="productcolorCheck8">
                                        <label class="custom-control-label" for="productcolorCheck8"><i
                                                class="mdi mdi-circle text-purple mx-1"></i> Purple</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="p-4 border-top">
                        <div>
                            <h5 class="font-size-14 mb-0"><a href="#filterproduct-discount-collapse"
                                    class="text-dark d-block" data-toggle="collapse">Discount <i
                                        class="mdi mdi-chevron-up float-right accor-down-icon"></i></a></h5>

                            <div class="collapse show" id="filterproduct-discount-collapse">
                                <div class="mt-4">
                                    <div class="custom-control custom-radio mt-2">
                                        <input type="radio" id="productdiscountRadio1" name="productdiscountRadio"
                                            class="custom-control-input">
                                        <label class="custom-control-label" for="productdiscountRadio1">50% or more</label>
                                    </div>
                                    <div class="custom-control custom-radio mt-2">
                                        <input type="radio" id="productdiscountRadio2" name="productdiscountRadio"
                                            class="custom-control-input">
                                        <label class="custom-control-label" for="productdiscountRadio2">40% or more</label>
                                    </div>
                                    <div class="custom-control custom-radio mt-2">
                                        <input type="radio" id="productdiscountRadio3" name="productdiscountRadio"
                                            class="custom-control-input">
                                        <label class="custom-control-label" for="productdiscountRadio3">30% or more</label>
                                    </div>
                                    <div class="custom-control custom-radio mt-2">
                                        <input type="radio" id="productdiscountRadio4" name="productdiscountRadio"
                                            class="custom-control-input">
                                        <label class="custom-control-label" for="productdiscountRadio4">20% or more</label>
                                    </div>
                                    <div class="custom-control custom-radio mt-2">
                                        <input type="radio" id="productdiscountRadio5" name="productdiscountRadio"
                                            class="custom-control-input">
                                        <label class="custom-control-label" for="productdiscountRadio5">10% or more</label>
                                    </div>
                                    <div class="custom-control custom-radio mt-2">
                                        <input type="radio" id="productdiscountRadio6" name="productdiscountRadio"
                                            class="custom-control-input">
                                        <label class="custom-control-label" for="productdiscountRadio6">Less than
                                            10%</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="p-4 border-top">
                        <div>
                            <h5 class="font-size-14 mb-0"><a href="#filterproduct-color-collapse"
                                    class="collapsed text-dark d-block" data-toggle="collapse">Customer Rating <i
                                        class="mdi mdi-chevron-up float-right accor-down-icon"></i></a></h5>

                            <div class="collapse" id="filterproduct-color-collapse">
                                <div class="mt-4">
                                    <div class="custom-control custom-radio mt-2">
                                        <input type="radio" id="productratingRadio1" name="productratingRadio1"
                                            class="custom-control-input">
                                        <label class="custom-control-label" for="productratingRadio1">4 <i
                                                class="mdi mdi-star text-warning"></i> & Above</label>
                                    </div>
                                    <div class="custom-control custom-radio mt-2">
                                        <input type="radio" id="productratingRadio2" name="productratingRadio1"
                                            class="custom-control-input">
                                        <label class="custom-control-label" for="productratingRadio2">3 <i
                                                class="mdi mdi-star text-warning"></i> & Above</label>
                                    </div>
                                    <div class="custom-control custom-radio mt-2">
                                        <input type="radio" id="productratingRadio3" name="productratingRadio1"
                                            class="custom-control-input">
                                        <label class="custom-control-label" for="productratingRadio3">2 <i
                                                class="mdi mdi-star text-warning"></i> & Above</label>
                                    </div>
                                    <div class="custom-control custom-radio mt-2">
                                        <input type="radio" id="productratingRadio4" name="productratingRadio1"
                                            class="custom-control-input">
                                        <label class="custom-control-label" for="productratingRadio4">1 <i
                                                class="mdi mdi-star text-warning"></i></label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </div>

        <div class="col-xl-9 col-lg-8">
            <div class="card">
                <div class="card-body">
                    <div>
                        <div class="row">
                            <div class="col-md-6">
                                <div>
                                    <h5>Showing result for "Headphone"</h5>
                                    <ol class="breadcrumb p-0 bg-transparent mb-2">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Footwear</a></li>
                                        <li class="breadcrumb-item active">Headphone</li>
                                    </ol>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-inline float-md-right">
                                    <div class="search-box ml-2">
                                        <div class="position-relative">
                                            <input type="text" class="form-control bg-light border-light rounded"
                                                placeholder="Search...">
                                            <i class="mdi mdi-magnify search-icon"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>


                        <ul class="nav nav-tabs nav-tabs-custom mt-3 mb-2 ecommerce-sortby-list">
                            <li class="nav-item">
                                <a class="nav-link disabled font-weight-medium" href="#" tabindex="-1"
                                    aria-disabled="true">Sort by:</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Popularity</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Newest</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Discount</a>
                            </li>

                        </ul>

                        <div class="row Allproduct">
                           <!-- Append productlist here.. -->
                        </div>
                        <!-- end row -->

                        <div class="row mt-4">
                            <div class="col-sm-6">
                                <div>
                                    <p class="mb-sm-0">Page 2 of 84</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="float-sm-right">
                                    <ul class="pagination pagination-rounded mb-sm-0">
                                        <li class="page-item disabled">
                                            <a href="#" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
                                        </li>
                                        <li class="page-item">
                                            <a href="#" class="page-link">1</a>
                                        </li>
                                        <li class="page-item active">
                                            <a href="#" class="page-link">2</a>
                                        </li>
                                        <li class="page-item">
                                            <a href="#" class="page-link">3</a>
                                        </li>
                                        <li class="page-item">
                                            <a href="#" class="page-link">4</a>
                                        </li>
                                        <li class="page-item">
                                            <a href="#" class="page-link">5</a>
                                        </li>
                                        <li class="page-item">
                                            <a href="#" class="page-link"><i class="mdi mdi-chevron-right"></i></a>
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
    <!-- end row -->

@endsection
@section('script')
    <!-- Ion Range Slider-->
    <script src="{{ URL::asset('/assets/libs/ion-rangeslider/ion-rangeSlider.min.js') }}"></script>
    <!-- init js -->
    <script src="{{ URL::asset('/assets/js/pages/product-filter-range.init.js') }}"></script>
    <script>
        $(document).ready(function() {
            $.ajax({
                // console.log("{{ URL::asset('/assets/json/product/product.php') }}");
                type: "get",
                url: "{{ URL::asset('/assets/json/product/product.php') }}",
                dataType: "json",
                success: function(data) {
                    console.log(data);
                    var dataHtml='';
                    var result=$.parseJSON(data);
                    $.each(result.productList, function(key, value) {
                        
                        dataHtml+="<div class='col-xl-4 col-sm-6'>"+
                                        "<div class='product-box' id='"+value.id+"'}>"+
                                            "<div class='product-img pt-4 px-4'>"+
                                                "<div class='product-ribbon badge badge-primary'>New</div>"+
                                                "<div class='product-wishlist'>"+
                                                    "<a href='#'>"+
                                                        "<svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-heart icon-sm heart-icon'><path d='M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z'></path></svg>"+
                                                    "</a>"+
                                                "</div>"+
                                                "<a href='{{ URL('/') }}" + "/ecommerce-product-detail'>"+
                                                    "<img src='"+value.img+"' alt='' class='img-fluid mx-auto p-img'>"+
                                                    "<img src='"+value.hoverimg+"' alt='' class='img-fluid mx-auto p-h-img'>"+
                                                "</a>"+
                                                "<ul class='list-unstyled mb-0 text-muted product-color'>"+
                                                    "<li>"+
                                                    "<i class='mdi mdi-circle text-dark'></i>"+
                                                    "</li>"+
                                                    "<li>"+
                                                    "<i class='mdi mdi-circle text-info'></i>"+
                                                    "</li>"+
                                                    "<li>"+
                                                    "<i class='mdi mdi-circle text-primary'></i>"+
                                                    "</li>"+
                                                "</ul>"+
                                            "</div>"+
                                            "<div class='page-content p-4'>"+
                                                "<h5 class='mb-1'><a href='#' class='text-dark'>"+value.name+"</a></h5>"+
                                                "<p class='text-muted font-size-15'>"+value.brand+"</p>"+
                                                "<h5 class='mb-1 font-weight-semibold'>"+value.oldprice+
                                                    "<s class='text-muted font-size-16'> "+value.newprice+"</s>"+
                                                    "<span class='text-orange font-weight-normal font-size-15 ml-1'>Get upto "+value.discount+" Off</span>"+
                                                "</h5>"+
                                            "</div>"+
                                        "</div>"+
                                    "</div>";
                        
                    });
                    $('.Allproduct').append(dataHtml);
                }
            });
        });
    </script>
@endsection
