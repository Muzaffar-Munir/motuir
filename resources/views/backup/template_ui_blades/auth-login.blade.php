@extends('layouts.master-without-nav')
@section('title')
    @lang('translation.Login')
@endsection

@section('content')
    <div class="account-pages mt-5 mb-4 pt-sm-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <a href="index" class="mb-5 d-block auth-logo">
                            <img src="{{ URL::asset('/assets/images/logo-dark.png') }}" alt="" height="22"
                                class="logo logo-dark">
                            <img src="{{ URL::asset('/assets/images/logo-light.png') }}" alt="" height="22"
                                class="logo logo-light">
                        </a>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card">

                        <div class="card-body p-4">
                            <div class="text-center mt-2">
                                <h5 class="text-primary">Welcome Back !</h5>
                                <p class="text-muted">Sign in to continue to Drezon.</p>
                            </div>
                            <div class="p-2 mt-4">
                                <form action="index">

                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input type="text" class="form-control" id="username" placeholder="Enter username">
                                    </div>

                                    <div class="form-group">
                                        <div class="float-right">
                                            <a href="auth-recoverpw" class="text-muted">Forgot password?</a>
                                        </div>
                                        <label for="userpassword">Password</label>
                                        <input type="password" class="form-control" id="userpassword"
                                            placeholder="Enter password">
                                    </div>

                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="auth-remember-check">
                                        <label class="custom-control-label" for="auth-remember-check">Remember me</label>
                                    </div>

                                    <div class="mt-3 text-right">
                                        <button class="btn btn-primary btn-block waves-effect waves-light" type="submit"><i
                                                class="icon-xs icon mr-1" data-feather="log-in"></i> Log In</button>
                                    </div>
                                    <div class="mt-4 text-center">
                                        <p class="mb-0">Don't have an account ? <a href="auth-register"
                                                class="font-weight-medium text-primary"> Signup now </a> </p>
                                    </div>

                                    <div class="mt-4 text-center">
                                        <div class="signin-other-title">
                                            <h5 class="font-size-14 mb-3 title">OR</h5>
                                        </div>

                                        <p class="text-muted mb-3">Continue with social media</p>

                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item mr-3">
                                                <a href="javascript:void()"
                                                    class="social-list-item bg-soft-primary font-size-16 text-primary border-white">
                                                    <i class="uil-facebook-f"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item mr-3">
                                                <a href="javascript:void()"
                                                    class="social-list-item bg-soft-info font-size-16 text-info border-white">
                                                    <i class="uil-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item mr-3">
                                                <a href="javascript:void()"
                                                    class="social-list-item bg-soft-danger font-size-16 text-danger border-white">
                                                    <i class="uil-google"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="javascript:void()"
                                                    class="social-list-item bg-soft-purple font-size-16 text-purple border-white">
                                                    <i class="uil-linkedin-alt"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="mt-5 text-center">
                        <p>© 2020 Drezon. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</p>
                    </div>

                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
@endsection
