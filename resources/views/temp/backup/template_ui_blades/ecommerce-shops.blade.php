@extends('layouts.master')
@section('title') @lang('translation.Shops') @endsection
@section('content')
    @component('components.breadcrumb')
        @slot('pagetitle') Ecommerce @endslot
        @slot('title') Shops @endslot
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
                    <div class="col-xl-4 border-right">
                        <div class="text-center p-sm-4 pt-4">
                            <div class="avatar-md mx-auto border border-soft-primary p-1 rounded-circle mb-3">
                                <span class="avatar-title rounded-circle bg-soft-primary text-primary h3">
                                    <i class="uil uil-shop"></i>
                                </span>
                            </div>
                            <h5 class="text-truncate font-size-15 mb-0">Standard Sales</h5>
                        </div>
                    </div>
                    <div class="col-xl-8">
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
                    <div class="col-xl-4 border-right">
                        <div class="text-center p-sm-4 pt-4">
                            <div class="avatar-md mx-auto border border-soft-success p-1 rounded-circle mb-3">
                                <span class="avatar-title rounded-circle bg-soft-success text-success h3">
                                    <i class="uil uil-store-alt"></i>
                                </span>
                            </div>
                            <h5 class="text-truncate font-size-15 mb-0">Morrie Mages</h5>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="p-4 text-center text-xl-left">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div>
                                        <p class="text-muted mb-2 text-truncate"><i class="uil uil-headphones mr-1"></i>
                                            Products</p>
                                        <h5 class="mb-0">142</h5>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div>
                                        <p class="text-muted mb-2 text-truncate"><i class="uil uil-wallet mr-1"></i> Wallet
                                            Balance</p>
                                        <h5 class="mb-0">$18,425</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="text-muted mt-3 pt-3 border-top">
                                <p class="my-0 text-truncate"><i class="uil uil-map-marker mr-1 font-size-16"></i> 2706
                                    Davis Street Dalton, GA 30720</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-sm-6">
            <div class="card">
                <div class="row align-items-center no-gutters">
                    <div class="col-xl-4 border-right">
                        <div class="text-center p-sm-4 pt-4">
                            <div class="avatar-md mx-auto border border-soft-warning p-1 rounded-circle mb-3">
                                <span class="avatar-title rounded-circle bg-soft-warning text-warning h3">
                                    <i class="uil uil-shop"></i>
                                </span>
                            </div>
                            <h5 class="text-truncate font-size-15 mb-0">Brendle's</h5>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="p-4 text-center text-xl-left">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div>
                                        <p class="text-muted mb-2 text-truncate"><i class="uil uil-headphones mr-1"></i>
                                            Products</p>
                                        <h5 class="mb-0">80</h5>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div>
                                        <p class="text-muted mb-2 text-truncate"><i class="uil uil-wallet mr-1"></i> Wallet
                                            Balance</p>
                                        <h5 class="mb-0">$10,200</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="text-muted mt-3 pt-3 border-top">
                                <p class="my-0 text-truncate"><i class="uil uil-map-marker mr-1 font-size-16"></i> 389 Lynn
                                    Ogden Lane Texas City, TX 77592</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-sm-6">
            <div class="card">
                <div class="row align-items-center no-gutters">
                    <div class="col-xl-4 border-right">
                        <div class="text-center p-sm-4 pt-4">
                            <div class="avatar-md mx-auto border border-soft-danger p-1 rounded-circle mb-3">
                                <span class="avatar-title rounded-circle bg-soft-danger text-danger h3">
                                    <i class="uil uil-store-alt"></i>
                                </span>
                            </div>
                            <h5 class="text-truncate font-size-15 mb-0">Sportmart</h5>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="p-4 text-center text-xl-left">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div>
                                        <p class="text-muted mb-2 text-truncate"><i class="uil uil-headphones mr-1"></i>
                                            Products</p>
                                        <h5 class="mb-0">130</h5>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div>
                                        <p class="text-muted mb-2 text-truncate"><i class="uil uil-wallet mr-1"></i> Wallet
                                            Balance</p>
                                        <h5 class="mb-0">$25,350</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="text-muted mt-3 pt-3 border-top">
                                <p class="my-0 text-truncate"><i class="uil uil-map-marker mr-1 font-size-16"></i> 444 Luke
                                    Lane Tulsa, OK 74120</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-sm-6">
            <div class="card">
                <div class="row align-items-center no-gutters">
                    <div class="col-xl-4 border-right">
                        <div class="text-center p-sm-4 pt-4">
                            <div class="avatar-md mx-auto border border-soft-info p-1 rounded-circle mb-3">
                                <span class="avatar-title rounded-circle bg-soft-info text-info h3">
                                    <i class="uil uil-shop"></i>
                                </span>
                            </div>
                            <h5 class="text-truncate font-size-15 mb-0">Micro Design</h5>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="p-4 text-center text-xl-left">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div>
                                        <p class="text-muted mb-2 text-truncate"><i class="uil uil-headphones mr-1"></i>
                                            Products</p>
                                        <h5 class="mb-0">124</h5>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div>
                                        <p class="text-muted mb-2 text-truncate"><i class="uil uil-wallet mr-1"></i> Wallet
                                            Balance</p>
                                        <h5 class="mb-0">$15,120</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="text-muted mt-3 pt-3 border-top">
                                <p class="my-0 text-truncate"><i class="uil uil-map-marker mr-1 font-size-16"></i> 2155
                                    Fannie Street Boston, MA 02110</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-sm-6">
            <div class="card">
                <div class="row align-items-center no-gutters">
                    <div class="col-xl-4 border-right">
                        <div class="text-center p-sm-4 pt-4">
                            <div class="avatar-md mx-auto border border-soft-dark p-1 rounded-circle mb-3">
                                <span class="avatar-title rounded-circle bg-soft-dark text-dark h3">
                                    <i class="uil uil-store-alt"></i>
                                </span>
                            </div>
                            <h5 class="text-truncate font-size-15 mb-0">Tech Hifi</h5>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="p-4 text-center text-xl-left">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div>
                                        <p class="text-muted mb-2 text-truncate"><i class="uil uil-headphones mr-1"></i>
                                            Products</p>
                                        <h5 class="mb-0">145</h5>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div>
                                        <p class="text-muted mb-2 text-truncate"><i class="uil uil-wallet mr-1"></i> Wallet
                                            Balance</p>
                                        <h5 class="mb-0">$20,500</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="text-muted mt-3 pt-3 border-top">
                                <p class="my-0 text-truncate"><i class="uil uil-map-marker mr-1 font-size-16"></i> 2608 New
                                    Street Portland, OR 97209</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-sm-6">
            <div class="card">
                <div class="row align-items-center no-gutters">
                    <div class="col-xl-4 border-right">
                        <div class="text-center p-sm-4 pt-4">
                            <div class="avatar-md mx-auto border border-soft-success p-1 rounded-circle mb-3">
                                <span class="avatar-title rounded-circle bg-soft-success text-success h3">
                                    <i class="uil uil-shop"></i>
                                </span>
                            </div>
                            <h5 class="text-truncate font-size-15 mb-0">Lafayette</h5>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="p-4 text-center text-xl-left">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div>
                                        <p class="text-muted mb-2 text-truncate"><i class="uil uil-headphones mr-1"></i>
                                            Products</p>
                                        <h5 class="mb-0">156</h5>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div>
                                        <p class="text-muted mb-2 text-truncate"><i class="uil uil-wallet mr-1"></i> Wallet
                                            Balance</p>
                                        <h5 class="mb-0">$24,780</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="text-muted mt-3 pt-3 border-top">
                                <p class="my-0 text-truncate"><i class="uil uil-map-marker mr-1 font-size-16"></i> 2446 Jail
                                    Drive Gardena, CA 90247</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-sm-6">
            <div class="card">
                <div class="row align-items-center no-gutters">
                    <div class="col-xl-4 border-right">
                        <div class="text-center p-sm-4 pt-4">
                            <div class="avatar-md mx-auto border border-soft-orange p-1 rounded-circle mb-3">
                                <span class="avatar-title rounded-circle bg-soft-orange text-orange h3">
                                    <i class="uil uil-store-alt"></i>
                                </span>
                            </div>
                            <h5 class="text-truncate font-size-15 mb-0">Morrie Mages</h5>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="p-4 text-center text-xl-left">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div>
                                        <p class="text-muted mb-2 text-truncate"><i class="uil uil-headphones mr-1"></i>
                                            Products</p>
                                        <h5 class="mb-0">138</h5>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div>
                                        <p class="text-muted mb-2 text-truncate"><i class="uil uil-wallet mr-1"></i> Wallet
                                            Balance</p>
                                        <h5 class="mb-0">$19,400</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="text-muted mt-3 pt-3 border-top">
                                <p class="my-0 text-truncate"><i class="uil uil-map-marker mr-1 font-size-16"></i> 4676
                                    Lincoln Street Camden, NJ 08102</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-sm-6">
            <div class="card">
                <div class="row align-items-center no-gutters">
                    <div class="col-xl-4 border-right">
                        <div class="text-center p-sm-4 pt-4">
                            <div class="avatar-md mx-auto border border-soft-info p-1 rounded-circle mb-3">
                                <span class="avatar-title rounded-circle bg-soft-info text-info h3">
                                    <i class="uil uil-shop"></i>
                                </span>
                            </div>
                            <h5 class="text-truncate font-size-15 mb-0">Brendle's</h5>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="p-4 text-center text-xl-left">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div>
                                        <p class="text-muted mb-2 text-truncate"><i class="uil uil-headphones mr-1"></i>
                                            Products</p>
                                        <h5 class="mb-0">140</h5>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div>
                                        <p class="text-muted mb-2 text-truncate"><i class="uil uil-wallet mr-1"></i> Wallet
                                            Balance</p>
                                        <h5 class="mb-0">$18,210</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="text-muted mt-3 pt-3 border-top">
                                <p class="my-0 text-truncate"><i class="uil uil-map-marker mr-1 font-size-16"></i> 639
                                    Ethels Lane Avon Park, FL 33825</p>
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
