@extends('layouts.master')
@section('title') @lang('translation.Pricing') @endsection
@section('content')
    @component('components.breadcrumb')
        @slot('pagetitle') Utility @endslot
        @slot('title') Pricing @endslot
    @endcomponent

    <div class="row justify-content-center">
        <div class="col-lg-5">
            <div class="text-center mb-5">
                <h4>Choose the best plan!</h4>
                <p class="text-muted mb-4">Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis
                    voluptatibus maiores alias consequatur aut doloribus asperiores repellat.</p>

            </div>
        </div>
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card pricing-box">
                <div class="card-body p-4">
                    <div class="mt-2">
                        <h5 class="font-size-19 mb-0">Starter</h5>
                    </div>
                    <div class="py-4">
                        <i class="mdi mdi-airballoon float-right h1 text-primary"></i>
                        <h1 class="font-weight-semibold mb-0"><sup><small>$</small></sup> 19 <span
                                class="font-size-15 text-muted">/ Month</span></h1>
                    </div>
                    <p class="text-muted">Itaque earum rerum hic tenetur a sapiente delectus ut aut reiciendis.</p>
                    <div class="plan-features my-4">
                        <p><i class="icon-xxs text-primary icon mr-2" data-feather="check-circle"></i> Free Live Support</p>
                        <p><i class="icon-xxs text-primary icon mr-2" data-feather="check-circle"></i> Unlimited User</p>
                        <p><i class="icon-xxs text-primary icon mr-2" data-feather="check-circle"></i> No Domain</p>
                        <p><i class="icon-xxs text-primary icon mr-2" data-feather="check-circle"></i> No Time Tracking</p>
                        <p><i class="icon-xxs text-primary icon mr-2" data-feather="check-circle"></i> Free Setup</p>
                    </div>
                    <div class="plan-btn pt-1 my-2">
                        <a href="#" class="btn btn-primary waves-effect waves-light">Choose Plan</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card pricing-box">
                <div class="card-body p-4">
                    <div class="mt-2">
                        <h5 class="font-size-19 mb-0">Professional</h5>
                    </div>
                    <div class="py-4">
                        <i class="mdi mdi-telegram float-right h1 text-primary"></i>
                        <h1 class="font-weight-semibold mb-0"><sup><small>$</small></sup> 39 <span
                                class="font-size-15 text-muted">/ Month</span></h1>
                    </div>
                    <p class="text-muted">Itaque earum rerum hic tenetur a sapiente delectus ut aut reiciendis.</p>
                    <div class="plan-features my-4">
                        <p><i class="icon-xxs text-primary icon mr-2" data-feather="check-circle"></i> Free Live Support</p>
                        <p><i class="icon-xxs text-primary icon mr-2" data-feather="check-circle"></i> Unlimited User</p>
                        <p><i class="icon-xxs text-primary icon mr-2" data-feather="check-circle"></i> No Domain</p>
                        <p><i class="icon-xxs text-primary icon mr-2" data-feather="check-circle"></i> No Time Tracking</p>
                        <p><i class="icon-xxs text-primary icon mr-2" data-feather="check-circle"></i> Free Setup</p>
                    </div>
                    <div class="plan-btn pt-1 my-2">
                        <a href="#" class="btn btn-primary waves-effect waves-light">Choose Plan</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card pricing-box">
                <div class="card-body p-4">
                    <div class="mt-2">
                        <h5 class="font-size-19 mb-0">Enterprise</h5>
                    </div>
                    <div class="py-4">
                        <i class="mdi mdi-helicopter float-right h1 text-primary"></i>
                        <h1 class="font-weight-semibold mb-0"><sup><small>$</small></sup> 79 <span
                                class="font-size-15 text-muted">/ Month</span></h1>
                    </div>
                    <p class="text-muted">Itaque earum rerum hic tenetur a sapiente delectus ut aut reiciendis.</p>
                    <div class="plan-features my-4">
                        <p><i class="icon-xxs text-primary icon mr-2" data-feather="check-circle"></i> Free Live Support</p>
                        <p><i class="icon-xxs text-primary icon mr-2" data-feather="check-circle"></i> Unlimited User</p>
                        <p><i class="icon-xxs text-primary icon mr-2" data-feather="check-circle"></i> No Domain</p>
                        <p><i class="icon-xxs text-primary icon mr-2" data-feather="check-circle"></i> No Time Tracking</p>
                        <p><i class="icon-xxs text-primary icon mr-2" data-feather="check-circle"></i> Free Setup</p>
                    </div>
                    <div class="plan-btn pt-1 my-2">
                        <a href="#" class="btn btn-primary waves-effect waves-light">Choose Plan</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card pricing-box">
                <div class="card-body p-4">
                    <div class="mt-2">
                        <h5 class="font-size-19 mb-0">Unlimited</h5>
                    </div>
                    <div class="py-4">
                        <i class="mdi mdi-airplane-takeoff float-right h1 text-primary"></i>
                        <h1 class="font-weight-semibold mb-0"><sup><small>$</small></sup> 99 <span
                                class="font-size-15 text-muted">/ Month</span></h1>
                    </div>
                    <p class="text-muted">Itaque earum rerum hic tenetur a sapiente delectus ut aut reiciendis.</p>
                    <div class="plan-features my-4">
                        <p><i class="icon-xxs text-primary icon mr-2" data-feather="check-circle"></i> Free Live Support</p>
                        <p><i class="icon-xxs text-primary icon mr-2" data-feather="check-circle"></i> Unlimited User</p>
                        <p><i class="icon-xxs text-primary icon mr-2" data-feather="check-circle"></i> No Domain</p>
                        <p><i class="icon-xxs text-primary icon mr-2" data-feather="check-circle"></i> No Time Tracking</p>
                        <p><i class="icon-xxs text-primary icon mr-2" data-feather="check-circle"></i> Free Setup</p>
                    </div>
                    <div class="plan-btn pt-1 my-2">
                        <a href="#" class="btn btn-primary waves-effect waves-light">Choose Plan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
