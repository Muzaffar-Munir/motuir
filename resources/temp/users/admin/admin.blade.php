@extends('layouts.master')
@section('title') Admin List @endsection
@section('content')
    @component('components.breadcrumb')
        @slot('pagetitle') Admin @endslot
        @slot('title') Admin List @endslot
    @endcomponent

    <div class="row mb-2">
        <div class="col-md-6">
            <div class="mb-3">
                <a href="javascript:void(0);" class="btn btn-success waves-effect waves-light"><i
                        class="mdi mdi-plus mr-2"></i> Add New</a>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-inline float-md-right mb-3">
                <div class="search-box ml-2">
                    <div class="position-relative">
                        <input type="text" class="form-control rounded" placeholder="Search...">
                        <i class="mdi mdi-magnify search-icon"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-xl-4 col-sm-6">
            <div class="card">
                <div class="row align-items-center no-gutters">
                    <div class="col-xl-5 border-right">
                        <div class="text-center p-sm-4 pt-4">
                            <div class="avatar-md mx-auto border border-soft-primary p-1 rounded-circle mb-3">
                                <span class="avatar-title rounded-circle bg-soft-primary text-primary h3">
                                    <img class="rounded-circle" src="http://127.0.0.1:8000/assets/images/users/avatar-4.jpg" width="70" height="70" alt="Jessica Potter">
                                </span>
                            </div>
                            <h5 class="text-truncate font-size-13 mb-0">Miss Porter Carts</h5>
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class="p-4 text-center text-xl-left">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-sm-0 mb-3">
                                        <p class="text-muted mb-2 text-truncate"><i class="uil uil-headphones mr-1"></i>
                                            Products</p>
                                        <h5 class="mb-0">120</h5>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div>
                                        <p class="text-muted mb-2 text-truncate"><i class="uil uil-wallet mr-1"></i> Wallet
                                            Balance</p>
                                        <h5 class="mb-0">$15,600</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="text-muted mt-3 pt-3 border-top">
                                <p class="my-0 text-truncate"><i class="uil uil-map-marker mr-1 font-size-16"></i> 2759
                                    Griffin Street Phoenix, AZ 85012</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-sm-6">
            <div class="card">
                <div class="row align-items-center no-gutters">
                    <div class="col-xl-5 border-right">
                        <div class="text-center p-sm-4 pt-4">
                            <div class="avatar-md mx-auto border border-soft-primary p-1 rounded-circle mb-3">
                                <span class="avatar-title rounded-circle bg-soft-primary text-primary h3">
                                    <img class="rounded-circle" src="http://127.0.0.1:8000/assets/images/users/avatar-4.jpg" width="70" height="70" alt="Jessica Potter">
                                </span>
                            </div>
                            <h5 class="text-truncate font-size-13 mb-0">Miss Porter Carts</h5>
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class="p-4 text-center text-xl-left">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-sm-0 mb-3">
                                        <p class="text-muted mb-2 text-truncate"><i class="uil uil-headphones mr-1"></i>
                                            Products</p>
                                        <h5 class="mb-0">120</h5>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div>
                                        <p class="text-muted mb-2 text-truncate"><i class="uil uil-wallet mr-1"></i> Wallet
                                            Balance</p>
                                        <h5 class="mb-0">$15,600</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="text-muted mt-3 pt-3 border-top">
                                <p class="my-0 text-truncate"><i class="uil uil-map-marker mr-1 font-size-16"></i> 2759
                                    Griffin Street Phoenix, AZ 85012</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-sm-6">
            <div class="card">
                <div class="row align-items-center no-gutters">
                    <div class="col-xl-5 border-right">
                        <div class="text-center p-sm-4 pt-4">
                            <div class="avatar-md mx-auto border border-soft-primary p-1 rounded-circle mb-3">
                                <span class="avatar-title rounded-circle bg-soft-primary text-primary h3">
                                    <img class="rounded-circle" src="http://127.0.0.1:8000/assets/images/users/avatar-4.jpg" width="70" height="70" alt="Jessica Potter">
                                </span>
                            </div>
                            <h5 class="text-truncate font-size-13 mb-0">Miss Porter Carts</h5>
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class="p-4 text-center text-xl-left">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-sm-0 mb-3">
                                        <p class="text-muted mb-2 text-truncate"><i class="uil uil-headphones mr-1"></i>
                                            Products</p>
                                        <h5 class="mb-0">120</h5>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div>
                                        <p class="text-muted mb-2 text-truncate"><i class="uil uil-wallet mr-1"></i> Wallet
                                            Balance</p>
                                        <h5 class="mb-0">$15,600</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="text-muted mt-3 pt-3 border-top">
                                <p class="my-0 text-truncate"><i class="uil uil-map-marker mr-1 font-size-16"></i> 2759
                                    Griffin Street Phoenix, AZ 85012</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-sm-6">
            <div class="card">
                <div class="row align-items-center no-gutters">
                    <div class="col-xl-5 border-right">
                        <div class="text-center p-sm-4 pt-4">
                            <div class="avatar-md mx-auto border border-soft-primary p-1 rounded-circle mb-3">
                                <span class="avatar-title rounded-circle bg-soft-primary text-primary h3">
                                    <img class="rounded-circle" src="http://127.0.0.1:8000/assets/images/users/avatar-4.jpg" width="70" height="70" alt="Jessica Potter">
                                </span>
                            </div>
                            <h5 class="text-truncate font-size-13 mb-0">Miss Porter Carts</h5>
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class="p-4 text-center text-xl-left">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-sm-0 mb-3">
                                        <p class="text-muted mb-2 text-truncate"><i class="uil uil-headphones mr-1"></i>
                                            Products</p>
                                        <h5 class="mb-0">120</h5>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div>
                                        <p class="text-muted mb-2 text-truncate"><i class="uil uil-wallet mr-1"></i> Wallet
                                            Balance</p>
                                        <h5 class="mb-0">$15,600</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="text-muted mt-3 pt-3 border-top">
                                <p class="my-0 text-truncate"><i class="uil uil-map-marker mr-1 font-size-16"></i> 2759
                                    Griffin Street Phoenix, AZ 85012</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-sm-6">
            <div class="card">
                <div class="row align-items-center no-gutters">
                    <div class="col-xl-5 border-right">
                        <div class="text-center p-sm-4 pt-4">
                            <div class="avatar-md mx-auto border border-soft-primary p-1 rounded-circle mb-3">
                                <span class="avatar-title rounded-circle bg-soft-primary text-primary h3">
                                    <img class="rounded-circle" src="http://127.0.0.1:8000/assets/images/users/avatar-4.jpg" width="70" height="70" alt="Jessica Potter">
                                </span>
                            </div>
                            <h5 class="text-truncate font-size-13 mb-0">Miss Porter Carts</h5>
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class="p-4 text-center text-xl-left">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-sm-0 mb-3">
                                        <p class="text-muted mb-2 text-truncate"><i class="uil uil-headphones mr-1"></i>
                                            Products</p>
                                        <h5 class="mb-0">120</h5>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div>
                                        <p class="text-muted mb-2 text-truncate"><i class="uil uil-wallet mr-1"></i> Wallet
                                            Balance</p>
                                        <h5 class="mb-0">$15,600</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="text-muted mt-3 pt-3 border-top">
                                <p class="my-0 text-truncate"><i class="uil uil-map-marker mr-1 font-size-16"></i> 2759
                                    Griffin Street Phoenix, AZ 85012</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-sm-6">
            <div class="card">
                <div class="row align-items-center no-gutters">
                    <div class="col-xl-5 border-right">
                        <div class="text-center p-sm-4 pt-4">
                            <div class="avatar-md mx-auto border border-soft-primary p-1 rounded-circle mb-3">
                                <span class="avatar-title rounded-circle bg-soft-primary text-primary h3">
                                    <img class="rounded-circle" src="http://127.0.0.1:8000/assets/images/users/avatar-4.jpg" width="70" height="70" alt="Jessica Potter">
                                </span>
                            </div>
                            <h5 class="text-truncate font-size-13 mb-0">Miss Porter Carts</h5>
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class="p-4 text-center text-xl-left">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-sm-0 mb-3">
                                        <p class="text-muted mb-2 text-truncate"><i class="uil uil-headphones mr-1"></i>
                                            Products</p>
                                        <h5 class="mb-0">120</h5>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div>
                                        <p class="text-muted mb-2 text-truncate"><i class="uil uil-wallet mr-1"></i> Wallet
                                            Balance</p>
                                        <h5 class="mb-0">$15,600</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="text-muted mt-3 pt-3 border-top">
                                <p class="my-0 text-truncate"><i class="uil uil-map-marker mr-1 font-size-16"></i> 2759
                                    Griffin Street Phoenix, AZ 85012</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-sm-6">
            <div class="card">
                <div class="row align-items-center no-gutters">
                    <div class="col-xl-5 border-right">
                        <div class="text-center p-sm-4 pt-4">
                            <div class="avatar-md mx-auto border border-soft-primary p-1 rounded-circle mb-3">
                                <span class="avatar-title rounded-circle bg-soft-primary text-primary h3">
                                    <img class="rounded-circle" src="http://127.0.0.1:8000/assets/images/users/avatar-4.jpg" width="70" height="70" alt="Jessica Potter">
                                </span>
                            </div>
                            <h5 class="text-truncate font-size-13 mb-0">Miss Porter Carts</h5>
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class="p-4 text-center text-xl-left">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-sm-0 mb-3">
                                        <p class="text-muted mb-2 text-truncate"><i class="uil uil-headphones mr-1"></i>
                                            Products</p>
                                        <h5 class="mb-0">120</h5>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div>
                                        <p class="text-muted mb-2 text-truncate"><i class="uil uil-wallet mr-1"></i> Wallet
                                            Balance</p>
                                        <h5 class="mb-0">$15,600</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="text-muted mt-3 pt-3 border-top">
                                <p class="my-0 text-truncate"><i class="uil uil-map-marker mr-1 font-size-16"></i> 2759
                                    Griffin Street Phoenix, AZ 85012</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-sm-6">
            <div class="card">
                <div class="row align-items-center no-gutters">
                    <div class="col-xl-5 border-right">
                        <div class="text-center p-sm-4 pt-4">
                            <div class="avatar-md mx-auto border border-soft-primary p-1 rounded-circle mb-3">
                                <span class="avatar-title rounded-circle bg-soft-primary text-primary h3">
                                    <img class="rounded-circle" src="http://127.0.0.1:8000/assets/images/users/avatar-4.jpg" width="70" height="70" alt="Jessica Potter">
                                </span>
                            </div>
                            <h5 class="text-truncate font-size-13 mb-0">Miss Porter Carts</h5>
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class="p-4 text-center text-xl-left">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-sm-0 mb-3">
                                        <p class="text-muted mb-2 text-truncate"><i class="uil uil-headphones mr-1"></i>
                                            Products</p>
                                        <h5 class="mb-0">120</h5>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div>
                                        <p class="text-muted mb-2 text-truncate"><i class="uil uil-wallet mr-1"></i> Wallet
                                            Balance</p>
                                        <h5 class="mb-0">$15,600</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="text-muted mt-3 pt-3 border-top">
                                <p class="my-0 text-truncate"><i class="uil uil-map-marker mr-1 font-size-16"></i> 2759
                                    Griffin Street Phoenix, AZ 85012</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-sm-6">
            <div class="card">
                <div class="row align-items-center no-gutters">
                    <div class="col-xl-5 border-right">
                        <div class="text-center p-sm-4 pt-4">
                            <div class="avatar-md mx-auto border border-soft-primary p-1 rounded-circle mb-3">
                                <span class="avatar-title rounded-circle bg-soft-primary text-primary h3">
                                    <img class="rounded-circle" src="http://127.0.0.1:8000/assets/images/users/avatar-4.jpg" width="70" height="70" alt="Jessica Potter">
                                </span>
                            </div>
                            <h5 class="text-truncate font-size-13 mb-0">Miss Porter Carts</h5>
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class="p-4 text-center text-xl-left">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-sm-0 mb-3">
                                        <p class="text-muted mb-2 text-truncate"><i class="uil uil-headphones mr-1"></i>
                                            Products</p>
                                        <h5 class="mb-0">120</h5>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div>
                                        <p class="text-muted mb-2 text-truncate"><i class="uil uil-wallet mr-1"></i> Wallet
                                            Balance</p>
                                        <h5 class="mb-0">$15,600</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="text-muted mt-3 pt-3 border-top">
                                <p class="my-0 text-truncate"><i class="uil uil-map-marker mr-1 font-size-16"></i> 2759
                                    Griffin Street Phoenix, AZ 85012</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-xl-12">
            <div class="text-center my-3">
                <a href="javascript:void(0);" class="text-primary"><i
                        class="mdi mdi-loading mdi-spin font-size-20 align-middle mr-2"></i> Load more </a>
            </div>
        </div>
    </div>
    <!-- end row -->

@endsection
