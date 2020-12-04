@extends('layouts.master-without-nav')
@section('title')
    @lang('translation.Coming_Soon')
@endsection

@section('content')
    <div class="my-5 pt-sm-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="home-wrapper">
                        <a href="index" class="mb-5 d-block auth-logo">
                            <img src="{{ URL::asset('/assets/images/logo-dark.png') }}" alt="" height="22"
                                class="logo logo-dark">
                            <img src="{{ URL::asset('/assets/images/logo-light.png') }}" alt="" height="22"
                                class="logo logo-light">
                        </a>

                        <div class="row justify-content-center mt-5">
                            <div class="col-lg-4 col-sm-5">
                                <div class="maintenance-img">
                                    <img src="{{ URL::asset('/assets/images/calendar.png') }}" alt="" class="img-fluid mx-auto d-block">
                                </div>
                            </div>
                        </div>

                        <h4 class="mt-5">Let's get started with Minible</h4>
                        <p class="text-muted">It will be as simple as Occidental in fact it will be Occidental.</p>

                        <div class="row justify-content-center mt-5">
                            <div class="col-lg-10">
                                <div class="card">
                                    <div class="card-body p-2">
                                        <div data-countdown="2021/12/31" class="counter-number"></div>
                                    </div>
                                </div>
                            </div> <!-- end col-->
                        </div> <!-- end row-->

                        <div class="row justify-content-center mt-4">
                            <div class="col-lg-6">
                                <div class="input-section pt-4">
                                    <div class="row">
                                        <div class="col">
                                            <div class="position-relative">
                                                <input type="email" class="form-control"
                                                    placeholder="Enter email address...">
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <button type="submit"
                                                class="btn btn-primary w-md waves-effect waves-light">Subscribe</button>
                                        </div>
                                    </div>
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
    <!-- Plugins js -->
    <script src="{{ URL::asset('/assets/libs/jquery-countdown/jquery-countdown.min.js') }}"></script>
    <!-- Countdown js -->
    <script src="{{ URL::asset('/assets/js/pages/coming-soon.init.js') }}"></script>
@endsection
