@extends('layouts.master')
@section('title') @lang('translation.User_Grid') @endsection
@section('content')
    @component('components.breadcrumb')
        @slot('pagetitle') Contacts @endslot
        @slot('title') User Grid @endslot
    @endcomponent

    <div class="row">
        <div class="col-xl-3 col-sm-6">
            <div class="card text-center">
                <div class="card-body">
                    <div class="dropdown float-right">
                        <a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-toggle="dropdown"
                            aria-haspopup="true">
                            <i class="icon-sm" data-feather="more-horizontal"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#"><i class="uil uil-pen mr-1"></i> Edit</a>
                            <a class="dropdown-item" href="#"><i class="uil uil-user mr-1"></i> Profile</a>
                            <a class="dropdown-item" href="#"><i class="uil uil-comment-dots mr-1"></i> Chat</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-danger" href="#"><i class="uil uil-trash-alt mr-1"></i>Remove</a>
                        </div>
                    </div>
                    <div class="avatar-xs mr-3 float-left">
                        <a href="#">
                            <div class="avatar-title rounded-circle bg-soft-primary text-primary">
                                <i class="icon-xs" data-feather="zap"></i>
                            </div>
                        </a>
                    </div>
                    <div class="clearfix"></div>
                    <div class="mb-4">
                        <div class="avatar-md rounded-circle border border-soft-dark mx-auto">
                            <img src="{{ URL::asset('/assets/images/users/avatar-1.jpg')}}" alt="" class="rounded-circle img-thumbnail">
                        </div>
                    </div>
                    <h5 class="font-size-15 mb-1"><a href="#" class="text-dark">Donald Risher</a></h5>
                    <p class="text-muted mb-2">Full Stack Developer</p>

                    <div class="row mt-4">
                        <div class="col-6">
                            <h5 class="font-size-14 mb-2"><i class="text-success icon-xs icon mr-2"
                                    data-feather="check-circle"></i>Projects Done</h5>
                            <h6 class="text-muted">70%</h6>
                        </div>
                        <div class="col-6">
                            <h5 class="font-size-14 mb-2"><i class="text-success icon-xs icon mr-2"
                                    data-feather="message-square"></i>Messages</h5>
                            <h6 class="text-muted">220</h6>
                        </div>
                    </div>
                </div>
                <div class="card-body border-top py-3">
                    <a href="#" class="btn btn-outline-primary w-lg waves-effect waves-light">View Profile</a>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6">
            <div class="card text-center">
                <div class="card-body">
                    <div class="dropdown float-right">
                        <a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-toggle="dropdown"
                            aria-haspopup="true">
                            <i class="icon-sm" data-feather="more-horizontal"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#"><i class="uil uil-pen mr-1"></i> Edit</a>
                            <a class="dropdown-item" href="#"><i class="uil uil-user mr-1"></i> Profile</a>
                            <a class="dropdown-item" href="#"><i class="uil uil-comment-dots mr-1"></i> Chat</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-danger" href="#"><i class="uil uil-trash-alt mr-1"></i>Remove</a>
                        </div>
                    </div>
                    <div class="avatar-xs mr-3 float-left">
                        <a href="#">
                            <div class="avatar-title rounded-circle bg-soft-primary text-primary">
                                <i class="icon-xs" data-feather="zap"></i>
                            </div>
                        </a>
                    </div>
                    <div class="clearfix"></div>
                    <div class="mb-4">
                        <div class="avatar-md rounded-circle border border-soft-dark mx-auto">
                            <img src="{{ URL::asset('/assets/images/users/avatar-2.jpg')}}" alt="" class="rounded-circle img-thumbnail">
                        </div>
                    </div>
                    <h5 class="font-size-15 mb-1"><a href="#" class="text-dark">Helen Barron</a></h5>
                    <p class="text-muted mb-2">Web Designer</p>

                    <div class="row mt-4">
                        <div class="col-6">
                            <h5 class="font-size-14 mb-2"><i class="text-success icon-xs icon mr-2"
                                    data-feather="check-circle"></i>Projects Done</h5>
                            <h6 class="text-muted">65%</h6>
                        </div>
                        <div class="col-6">
                            <h5 class="font-size-14 mb-2"><i class="text-success icon-xs icon mr-2"
                                    data-feather="message-square"></i>Messages</h5>
                            <h6 class="text-muted">154</h6>
                        </div>
                    </div>
                </div>
                <div class="card-body border-top py-3">
                    <a href="#" class="btn btn-outline-primary w-lg waves-effect waves-light">View Profile</a>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6">
            <div class="card text-center">
                <div class="card-body">
                    <div class="dropdown float-right">
                        <a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-toggle="dropdown"
                            aria-haspopup="true">
                            <i class="icon-sm" data-feather="more-horizontal"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#"><i class="uil uil-pen mr-1"></i> Edit</a>
                            <a class="dropdown-item" href="#"><i class="uil uil-user mr-1"></i> Profile</a>
                            <a class="dropdown-item" href="#"><i class="uil uil-comment-dots mr-1"></i> Chat</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-danger" href="#"><i class="uil uil-trash-alt mr-1"></i>Remove</a>
                        </div>
                    </div>
                    <div class="avatar-xs mr-3 float-left">
                        <a href="#">
                            <div class="avatar-title rounded-circle bg-soft-primary text-primary">
                                <i class="icon-xs" data-feather="zap"></i>
                            </div>
                        </a>
                    </div>
                    <div class="clearfix"></div>
                    <div class="mb-4">
                        <div class="avatar-md rounded-circle border border-soft-dark mx-auto">
                            <img src="{{ URL::asset('/assets/images/users/avatar-3.jpg')}}" alt="" class="rounded-circle img-thumbnail">
                        </div>
                    </div>
                    <h5 class="font-size-15 mb-1"><a href="#" class="text-dark">Philip Theroux</a></h5>
                    <p class="text-muted mb-2">UI/UX Designer</p>

                    <div class="row mt-4">
                        <div class="col-6">
                            <h5 class="font-size-14 mb-2"><i class="text-success icon-xs icon mr-2"
                                    data-feather="check-circle"></i>Projects Done</h5>
                            <h6 class="text-muted">54%</h6>
                        </div>
                        <div class="col-6">
                            <h5 class="font-size-14 mb-2"><i class="text-success icon-xs icon mr-2"
                                    data-feather="message-square"></i>Messages</h5>
                            <h6 class="text-muted">85</h6>
                        </div>
                    </div>
                </div>
                <div class="card-body border-top py-3">
                    <a href="#" class="btn btn-outline-primary w-lg waves-effect waves-light">View Profile</a>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6">
            <div class="card text-center">
                <div class="card-body">
                    <div class="dropdown float-right">
                        <a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-toggle="dropdown"
                            aria-haspopup="true">
                            <i class="icon-sm" data-feather="more-horizontal"></i>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#"><i class="uil uil-pen mr-1"></i> Edit</a>
                            <a class="dropdown-item" href="#"><i class="uil uil-user mr-1"></i> Profile</a>
                            <a class="dropdown-item" href="#"><i class="uil uil-comment-dots mr-1"></i> Chat</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-danger" href="#"><i class="uil uil-trash-alt mr-1"></i>Remove</a>
                        </div>
                    </div>
                    <div class="avatar-xs mr-3 float-left">
                        <a href="#">
                            <div class="avatar-title rounded-circle bg-soft-primary text-primary">
                                <i class="icon-xs" data-feather="zap"></i>
                            </div>
                        </a>
                    </div>
                    <div class="clearfix"></div>
                    <div class="mb-4">
                        <div class="avatar-md rounded-circle border border-soft-dark mx-auto">
                            <img src="{{ URL::asset('/assets/images/users/avatar-4.jpg')}}" alt="" class="rounded-circle img-thumbnail">
                        </div>
                    </div>
                    <h5 class="font-size-15 mb-1"><a href="#" class="text-dark">Gerald Moyer</a></h5>
                    <p class="text-muted mb-2">Backend Developer</p>

                    <div class="row mt-4">
                        <div class="col-6">
                            <h5 class="font-size-14 mb-2"><i class="text-success icon-xs icon mr-2"
                                    data-feather="check-circle"></i>Projects Done</h5>
                            <h6 class="text-muted">50%</h6>
                        </div>
                        <div class="col-6">
                            <h5 class="font-size-14 mb-2"><i class="text-success icon-xs icon mr-2"
                                    data-feather="message-square"></i>Messages</h5>
                            <h6 class="text-muted">160</h6>
                        </div>
                    </div>
                </div>
                <div class="card-body border-top py-3">
                    <a href="#" class="btn btn-outline-primary w-lg waves-effect waves-light">View Profile</a>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6">
            <div class="card text-center">
                <div class="card-body">
                    <div class="dropdown float-right">
                        <a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-toggle="dropdown"
                            aria-haspopup="true">
                            <i class="icon-sm" data-feather="more-horizontal"></i>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#"><i class="uil uil-pen mr-1"></i> Edit</a>
                            <a class="dropdown-item" href="#"><i class="uil uil-user mr-1"></i> Profile</a>
                            <a class="dropdown-item" href="#"><i class="uil uil-comment-dots mr-1"></i> Chat</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-danger" href="#"><i class="uil uil-trash-alt mr-1"></i>Remove</a>
                        </div>
                    </div>
                    <div class="avatar-xs mr-3 float-left">
                        <a href="#">
                            <div class="avatar-title rounded-circle bg-soft-primary text-primary">
                                <i class="icon-xs" data-feather="zap"></i>
                            </div>
                        </a>
                    </div>
                    <div class="clearfix"></div>
                    <div class="mb-4">
                        <div class="avatar-md rounded-circle border border-soft-dark mx-auto">
                            <img src="{{ URL::asset('/assets/images/users/avatar-5.jpg')}}" alt="" class="rounded-circle img-thumbnail">
                        </div>
                    </div>
                    <h5 class="font-size-15 mb-1"><a href="#" class="text-dark">Sharon Carver</a></h5>
                    <p class="text-muted mb-2">Frontend Developer</p>

                    <div class="row mt-4">
                        <div class="col-6">
                            <h5 class="font-size-14 mb-2"><i class="text-success icon-xs icon mr-2"
                                    data-feather="check-circle"></i>Projects Done</h5>
                            <h6 class="text-muted">55%</h6>
                        </div>
                        <div class="col-6">
                            <h5 class="font-size-14 mb-2"><i class="text-success icon-xs icon mr-2"
                                    data-feather="message-square"></i>Messages</h5>
                            <h6 class="text-muted">95</h6>
                        </div>
                    </div>
                </div>
                <div class="card-body border-top py-3">
                    <a href="#" class="btn btn-outline-primary w-lg waves-effect waves-light">View Profile</a>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6">
            <div class="card text-center">
                <div class="card-body">
                    <div class="dropdown float-right">
                        <a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-toggle="dropdown"
                            aria-haspopup="true">
                            <i class="icon-sm" data-feather="more-horizontal"></i>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#"><i class="uil uil-pen mr-1"></i> Edit</a>
                            <a class="dropdown-item" href="#"><i class="uil uil-user mr-1"></i> Profile</a>
                            <a class="dropdown-item" href="#"><i class="uil uil-comment-dots mr-1"></i> Chat</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-danger" href="#"><i class="uil uil-trash-alt mr-1"></i>Remove</a>
                        </div>
                    </div>
                    <div class="avatar-xs mr-3 float-left">
                        <a href="#">
                            <div class="avatar-title rounded-circle bg-soft-primary text-primary">
                                <i class="icon-xs" data-feather="zap"></i>
                            </div>
                        </a>
                    </div>
                    <div class="clearfix"></div>
                    <div class="mb-4">
                        <div class="avatar-md rounded-circle border border-soft-dark mx-auto">
                            <img src="{{ URL::asset('/assets/images/users/avatar-6.jpg')}}" alt="" class="rounded-circle img-thumbnail">
                        </div>
                    </div>
                    <h5 class="font-size-15 mb-1"><a href="#" class="text-dark">Jody Tondreau</a></h5>
                    <p class="text-muted mb-2">PHP Developer</p>

                    <div class="row mt-4">
                        <div class="col-6">
                            <h5 class="font-size-14 mb-2"><i class="text-success icon-xs icon mr-2"
                                    data-feather="check-circle"></i>Projects Done</h5>
                            <h6 class="text-muted">62%</h6>
                        </div>
                        <div class="col-6">
                            <h5 class="font-size-14 mb-2"><i class="text-success icon-xs icon mr-2"
                                    data-feather="message-square"></i>Messages</h5>
                            <h6 class="text-muted">112</h6>
                        </div>
                    </div>
                </div>
                <div class="card-body border-top py-3">
                    <a href="#" class="btn btn-outline-primary w-lg waves-effect waves-light">View Profile</a>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6">
            <div class="card text-center">
                <div class="card-body">
                    <div class="dropdown float-right">
                        <a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-toggle="dropdown"
                            aria-haspopup="true">
                            <i class="icon-sm" data-feather="more-horizontal"></i>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#"><i class="uil uil-pen mr-1"></i> Edit</a>
                            <a class="dropdown-item" href="#"><i class="uil uil-user mr-1"></i> Profile</a>
                            <a class="dropdown-item" href="#"><i class="uil uil-comment-dots mr-1"></i> Chat</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-danger" href="#"><i class="uil uil-trash-alt mr-1"></i>Remove</a>
                        </div>
                    </div>
                    <div class="avatar-xs mr-3 float-left">
                        <a href="#">
                            <div class="avatar-title rounded-circle bg-soft-primary text-primary">
                                <i class="icon-xs" data-feather="zap"></i>
                            </div>
                        </a>
                    </div>
                    <div class="clearfix"></div>
                    <div class="mb-4">
                        <div class="avatar-md rounded-circle border border-soft-dark mx-auto">
                            <img src="{{ URL::asset('/assets/images/users/avatar-7.jpg')}}" alt="" class="rounded-circle img-thumbnail">
                        </div>
                    </div>
                    <h5 class="font-size-15 mb-1"><a href="#" class="text-dark">Dennis Goulet</a></h5>
                    <p class="text-muted mb-2">Graphic Designer</p>

                    <div class="row mt-4">
                        <div class="col-6">
                            <h5 class="font-size-14 mb-2"><i class="text-success icon-xs icon mr-2"
                                    data-feather="check-circle"></i>Projects Done</h5>
                            <h6 class="text-muted">85%</h6>
                        </div>
                        <div class="col-6">
                            <h5 class="font-size-14 mb-2"><i class="text-success icon-xs icon mr-2"
                                    data-feather="message-square"></i>Messages</h5>
                            <h6 class="text-muted">260</h6>
                        </div>
                    </div>
                </div>
                <div class="card-body border-top py-3">
                    <a href="#" class="btn btn-outline-primary w-lg waves-effect waves-light">View Profile</a>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6">
            <div class="card text-center">
                <div class="card-body">
                    <div class="dropdown float-right">
                        <a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-toggle="dropdown"
                            aria-haspopup="true">
                            <i class="icon-sm" data-feather="more-horizontal"></i>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#"><i class="uil uil-pen mr-1"></i> Edit</a>
                            <a class="dropdown-item" href="#"><i class="uil uil-user mr-1"></i> Profile</a>
                            <a class="dropdown-item" href="#"><i class="uil uil-comment-dots mr-1"></i> Chat</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-danger" href="#"><i class="uil uil-trash-alt mr-1"></i>Remove</a>
                        </div>
                    </div>
                    <div class="avatar-xs mr-3 float-left">
                        <a href="#">
                            <div class="avatar-title rounded-circle bg-soft-primary text-primary">
                                <i class="icon-xs" data-feather="zap"></i>
                            </div>
                        </a>
                    </div>
                    <div class="clearfix"></div>
                    <div class="mb-4">
                        <div class="avatar-md rounded-circle border border-soft-dark mx-auto">
                            <img src="{{ URL::asset('/assets/images/users/avatar-8.jpg')}}" alt="" class="rounded-circle img-thumbnail">
                        </div>
                    </div>
                    <h5 class="font-size-15 mb-1"><a href="#" class="text-dark">Cecelia Farrell</a></h5>
                    <p class="text-muted mb-2">Angular Developer</p>

                    <div class="row mt-4">
                        <div class="col-6">
                            <h5 class="font-size-14 mb-2"><i class="text-success icon-xs icon mr-2"
                                    data-feather="check-circle"></i>Projects Done</h5>
                            <h6 class="text-muted">75%</h6>
                        </div>
                        <div class="col-6">
                            <h5 class="font-size-14 mb-2"><i class="text-success icon-xs icon mr-2"
                                    data-feather="message-square"></i>Messages</h5>
                            <h6 class="text-muted">154</h6>
                        </div>
                    </div>
                </div>
                <div class="card-body border-top py-3">
                    <a href="#" class="btn btn-outline-primary w-lg waves-effect waves-light">View Profile</a>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

    <div class="row mt-3">
        <div class="col-xl-12">
            <div class="text-center mb-4 pb-3">
                <a href="javascript:void(0);" class="text-primary"><i
                        class="mdi mdi-loading mdi-spin font-size-20 align-middle mr-2"></i> Load more </a>
            </div>
        </div>
    </div>
    <!-- end row -->

@endsection
