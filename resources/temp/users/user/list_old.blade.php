@extends('layouts.master')
@section('title') User List @endsection
@section('css')
    <!-- ION Slider -->
    <link href="{{ URL::asset('/assets/libs/ion-rangeslider/ion-rangeslider.min.css') }}" rel="stylesheet" type="text/css" />
    <style>
        .center {
            background: #fff;
            border: 1px solid #eee;
            overflow: hidden;
            margin-bottom: 15px;
        }

        .profile {
            float: left;
            text-align: left;
        }
        .profile .image {
            position: relative;
            width: 70px;
            height: 70px;
            margin: 38px auto 0 auto;
        }
        .profile .image img {
            display: block;
            border-radius: 50%;
            background: #F5E8DF;
        }
        
        .profile .name {
            font-size: 15px;
            font-weight: 600;
            margin-top: 20px;
        }
        .profile .job {
            font-size: 13px;
            line-height: 15px;
        }

        .stats {
            float: left;
            padding: 0 !important;
        }
        .stats .box {
            box-sizing: border-box;
            width: 100%;
            height: auto;
            background: #e3f6fd;
            text-align: left;
            padding: 10px 0 0 0;
            -webkit-transition: all .4s ease-in-out;
            transition: all .4s ease-in-out;
        }
        .stats span {
            display: block;
        }
        .stats .value {
            font-size: 13px;
            font-weight: 600;
            padding: 5px 0 5px 10px;
        }
        .stats .parameter {
            font-size: 12px;
            padding: 0 0 10px 10px;
        }

    </style>
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('pageheading') User List @endslot
        @slot('pagetitle') Users @endslot
        @slot('title') User List @endslot
    @endcomponent
   

    <div class="row">
        <div class="col-xl-3 col-lg-4">
            <div class="card">
                <div class="card-header bg-transparent border-bottom">
                    <h5 class="mb-0">Filters</h5>
                </div>

                <div class="p-4">
                    <div class="custom-accordion">
                        <a class="text-body font-weight-semibold pb-2 d-block " href="#" role="button">
                            <i class="mdi mdi-account-check-outline"></i> New Users
                        </a>
                    </div>
                    <div class="custom-accordion">
                        <a class="text-body font-weight-semibold pb-2 d-block " href="#" role="button">
                            <i class="mdi mdi-account"></i> New KYC
                        </a>
                    </div>
                    <div class="custom-accordion">
                        <a class="text-body font-weight-semibold pb-2 d-block " href="#" role="button">
                            <i class="mdi mdi-account-arrow-left"></i> High Risk Users
                        </a>
                    </div>
                    <div class="custom-accordion">
                        <a class="text-body font-weight-semibold pb-2 d-block " href="#" role="button">
                            <i class="mdi mdi-account-child"></i> Reported Users
                        </a>
                    </div>
                    <div class="custom-accordion">
                        <a class="text-body font-weight-semibold pb-2 d-block " href="#" role="button">
                            <i class="mdi mdi-account-circle-outline"></i> Limited List 
                        </a>
                    </div>
                    <div class="custom-accordion">
                        <a class="text-body font-weight-semibold pb-2 d-block " href="#" role="button">
                            <i class="mdi mdi-account-convert"></i> Locked List 
                        </a>
                    </div>
                    <div class="custom-accordion">
                        <a class="text-body font-weight-semibold pb-2 d-block " href="#" role="button">
                            <i class="mdi mdi-account-details"></i> Terminated List 
                        </a>
                    </div>
                </div>

                <div class="custom-accordion">

                    <div class="p-4 border-top">
                        <div>
                            <h5 class="font-size-14 mb-0"><a href="#filterproduct-color-collapse"
                                    class="text-dark d-block" data-toggle="collapse" aria-expanded="true">Rating <i
                                        class="mdi mdi-chevron-up float-right accor-down-icon"></i></a></h5>

                            <div class="collapse show" id="filterproduct-color-collapse">
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
                                <div class="form-inline">
                                    <label>Show: &nbsp;</label>
                                    <select class="form-control form-control-sm">

                                        <option value="value">18</option>
                                        <option value="value">36</option>
                                        <option value="value">72</option>
                                        <option value="value">144</option>

                                    </select>
                                
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
                                <a class="nav-link active" href="#">Ratings</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Balance</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Cash Station</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Exchange</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Transaction</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Level</a>
                            </li>

                        </ul>

                        <!-- <div class="row Allproduct">

                        </div> -->
                        <!-- Append productlist here.. -->

                        <div class="row">
                            <div class='col-xl-4 col-sm-6'>
                                <a href="{{route('users.user.details')}}" style="color: inherit;">
                                    <div class="center">                                
                                        <div class="profile col-md-6">
                                            <div class="image">
                                                <img src="http://127.0.0.1:8000/assets/images/users/avatar-4.jpg" width="70" height="70" alt="Jessica Potter">
                                            </div>
                                            
                                            <div class="name pb-2">Mr. Sum Potter</div>
                                            <!-- <div class="job">Writer</div> -->
                                            <br>
                                            <div class="job">Merachant: <label class="badge badge-danger">No</label></div>

                                            <div class="job">API: <label class="badge badge-success">API</label></div>

                                            
                                        </div>
                                        
                                        <div class="stats col-md-6">
                                            <div class="box">
                                                <span class="value">Bermuda Triangle</span>
                                                <span class="parameter">Location</span>

                                                <span class="value">1387</span>
                                                <span class="parameter">Balance</span>
                                                
                                                <span class="value">
                                                    <label class="badge badge-success">Yes</label>
                                                </span>
                                                <span class="parameter">Exchanger</span>
                                                
                                                <span class="value">Apple, IOS</span>
                                                <span class="parameter">Certificate</span>

                                                <ul class="list-inline text-warning font-size-18" style="margin: 0; padding:0 0 10px 10px;">
                                                    <li class="list-inline-item mr-0"><i class="mdi mdi-star"></i></li>
                                                    <li class="list-inline-item mr-0"><i class="mdi mdi-star"></i></li>
                                                    <li class="list-inline-item mr-0"><i class="mdi mdi-star"></i></li>
                                                    <li class="list-inline-item mr-0"><i class="mdi mdi-star"></i></li>
                                                    <li class="list-inline-item mr-0"><i class="mdi mdi-star-half-full"></i></li>
                                                    <li class="list-inline-item font-size-12 text-dark">4.3 (540 Reviews)</li>
                                            </ul>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
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
    <!-- init js -->
    <script src="{{ URL::asset('/assets/js/pages/range-sliders.init.js') }}"></script>
    <script>
        $(document).ready(function() {


            $("#volume").ionRangeSlider({
                skin: "round",
                type: "double",
                grid: true,
                min: 0,
                max: 2000,
                from: 500,
                to: 1500
            });


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
                                                    "<img src='http://127.0.0.1:8000/"+value.img+"' alt='' class='img-fluid mx-auto p-img'>"+
                                                    "<img src='http://127.0.0.1:8000/"+value.hoverimg+"' alt='' class='img-fluid mx-auto p-h-img'>"+
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
