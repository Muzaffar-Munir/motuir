@extends('layouts.master-without-nav')
@section('title')
    @lang('translation.Error_404')
@endsection

@section('content')
    <div class="account-pages mt-5 mb-4 pt-sm-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center mb-5">
                        <h1 class="error-font font-weight-semibold">4<i class="fas fa-ghost text-primary px-3 mover-animation"></i>4</h1>
                        <h4 class="text-uppercase mt-4">Oops!... page not found</h4>
                        <div class="mt-5 text-center">
                            <a class="btn btn-primary waves-effect waves-light" href="index">Back to Dashboard</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-8 col-xl-6">
                    <div class="mt-5">
                        <img src="{{ URL::asset('/assets/images/error-img.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
