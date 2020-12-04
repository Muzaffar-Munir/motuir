@extends('layouts.master')
@section('title') @lang('translation.Timeline') @endsection
@section('content')
    @component('components.breadcrumb')
        @slot('pagetitle') Utility @endslot
        @slot('title') Timeline @endslot
    @endcomponent

    <div class="row justify-content-center">
        <div class="col-xl-10">
            <div class="timeline">
                <div class="timeline-item timeline-left">
                    <div class="timeline-block">
                        <div class="time-show-btn mt-0">
                            <a href="#" class="btn btn-blue w-lg btn-primary">Timeline</a>
                        </div>
                    </div>
                </div>
                <!-- End timeline-item -->

                <div class="timeline-item timeline-left timeline-primary">
                    <div class="timeline-block">
                        <div class="timeline-box card">
                            <div class="avatar-sm timeline-info-icon shadow mt-n4">
                                <div class="avatar-title rounded bg-primary text-white">
                                    <i class="icon-sm" data-feather="file"></i>
                                </div>
                            </div>
                            <div class="text-right text-lg-left px-4">
                                <span class="badge badge-lg d-inline-block badge-outline-primary"><i class='bx bx-calendar-alt mr-1'></i>10 Oct, 2020</span>
                            </div>
                            <div class="card-body pt-2">
                                <div class="timeline-icon">
                                    <div class="timeline-circle"></div>
                                </div>
                                <h5 class="font-size-17 mb-3">Create new landing page</h5>
                                <p class="text-muted mb-4">Itaque earum rerum hic tenetur a sapiente delectus ut aut reiciendis voluptatibus maiores as consequatur doloribus.</p>
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item ml-2 mr-0 mb-2">
                                        <img src="{{ URL::asset('/assets/images/small/img-1.jpg') }}" alt="" class="avatar-md img-fluid w-auto rounded shadow-lg">
                                    </li>
                                    <li class="list-inline-item ml-2 mr-0 mb-2">
                                        <img src="{{ URL::asset('/assets/images/small/img-3.jpg') }}" alt="" class="avatar-md img-fluid w-auto rounded shadow-lg">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End timeline-item -->

                <div class="timeline-item timeline-success">
                    <div class="timeline-block">
                        <div class="timeline-box card">
                            <div class="avatar-sm timeline-info-icon shadow mt-n4">
                                <div class="avatar-title rounded bg-success text-white">
                                    <i class="icon-sm" data-feather="user"></i>
                                </div>
                            </div>
                            <div class="text-right px-4">
                                <span class="badge badge-lg d-inline-block badge-outline-success"><i class='bx bx-calendar-alt mr-1'></i>12 Oct, 2020</span>
                            </div>
                            <div class="card-body pt-2">
                                <div class="timeline-icon">
                                    <div class="timeline-circle"></div>
                                </div>
                                <h5 class="font-size-17 mb-3">Best work performance by employee</h5>
                                <p class="text-muted mb-3">Itaque earum rerum hic tenetur a sapiente delectus ut aut reiciendis voluptatibus maiores as consequatur doloribus.</p>
                                <p class="text-muted mb-0"><i class="mdi mdi-circle-medium mr-1"></i>Itaque earum rerum hic tenetur sapiente that delectus.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End timeline-item -->

                <div class="timeline-item timeline-left timeline-orange">
                    <div class="timeline-block">
                        <div class="timeline-box card">
                            <div class="avatar-sm timeline-info-icon shadow mt-n4">
                                <div class="avatar-title rounded bg-orange text-white">
                                    <i class="icon-sm" data-feather="mic"></i>
                                </div>
                            </div>
                            <div class="text-right text-lg-left px-4">
                                <span class="badge badge-lg d-inline-block badge-outline-orange"><i class='bx bx-calendar-alt mr-1'></i>15 Oct, 2020</span>
                            </div>
                            <div class="card-body pt-2">
                                <div class="timeline-icon">
                                    <div class="timeline-circle"></div>
                                </div>
                                <h5 class="font-size-17 mb-3">Event conferences meetings</h5>
                                <p class="text-muted mb-4">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque totam rem aperiam laudantium.</p>
                                <h6 class="font-size-15 mb-3">Meetings Team</h6>
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item mr-1">
                                        <img src="{{ URL::asset('/assets/images/users/avatar-1.jpg') }}" alt="" class="avatar-xs img-fluid rounded-circle shadow-lg">
                                    </li>
                                    <li class="list-inline-item mr-1">
                                        <img src="{{ URL::asset('/assets/images/users/avatar-2.jpg') }}" alt="" class="avatar-xs img-fluid rounded-circle shadow-lg">
                                    </li>
                                    <li class="list-inline-item mr-1">
                                        <img src="{{ URL::asset('/assets/images/users/avatar-3.jpg') }}" alt="" class="avatar-xs img-fluid rounded-circle shadow-lg">
                                    </li>
                                    <li class="list-inline-item mr-1">
                                        <img src="{{ URL::asset('/assets/images/users/avatar-5.jpg') }}" alt="" class="avatar-xs img-fluid rounded-circle shadow-lg">
                                    </li>
                                    <li class="list-inline-item">
                                        <img src="{{ URL::asset('/assets/images/users/avatar-4.jpg') }}" alt="" class="avatar-xs img-fluid rounded-circle shadow-lg">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End timeline-item -->

                <div class="timeline-item timeline-info">
                    <div class="timeline-block">
                        <div class="timeline-box card">
                            <div class="avatar-sm timeline-info-icon shadow mt-n4">
                                <div class="avatar-title rounded bg-info text-white">
                                    <i class="icon-sm" data-feather="layout"></i>
                                </div>
                            </div>
                            <div class="text-right px-4">
                                <span class="badge badge-lg d-inline-block badge-outline-info"><i class='bx bx-calendar-alt mr-1'></i>18 Oct, 2020</span>
                            </div>
                            <div class="card-body pt-2">
                                <div class="timeline-icon">
                                    <div class="timeline-circle"></div>
                                </div>
                                <h5 class="font-size-17 mb-3">Admin template layout design</h5>
                                <p class="text-muted mb-3">Itaque earum rerum hic tenetur a sapiente delectus ut aut reiciendis voluptatibus maiores as consequatur doloribus.</p>
                                <h6 class="font-size-15 mb-3">Layout list</h6>
                                <ul class="list-inline mb-0 h4 text-muted">
                                    <li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Columns layout">
                                        <i class="uil uil-columns"></i>    
                                    </li>
                                    <li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Grid layout">
                                        <i class="uil uil-grid"></i>
                                    </li>
                                    <li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Rtl layout">
                                        <i class="uil uil-web-grid"></i>
                                    </li>
                                    <li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Topbar layout">
                                        <i class="uil uil-web-grid-alt"></i>
                                    </li>
                                    <li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Simple layout">
                                        <i class="uil uil-web-section-alt"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End timeline-item -->

                <div class="timeline-item timeline-left timeline-purple">
                    <div class="timeline-block">
                        <div class="timeline-box card">
                            <div class="avatar-sm timeline-info-icon shadow mt-n4">
                                <div class="avatar-title rounded bg-purple text-white">
                                    <i class="icon-sm" data-feather="grid"></i>
                                </div>
                            </div>
                            <div class="text-right text-lg-left px-4">
                                <span class="badge badge-lg d-inline-block badge-outline-purple"><i class='bx bx-calendar-alt mr-1'></i>20 Oct, 2020</span>
                            </div>
                            <div class="card-body pt-2">
                                <div class="timeline-icon">
                                    <div class="timeline-circle"></div>
                                </div>
                                <h5 class="font-size-17 mb-3">Our team well create project</h5>
                                <p class="text-muted mb-0">Itaque earum rerum hic tenetur a sapiente delectus ut aut reiciendis voluptatibus maiores as consequatur doloribus.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End timeline-item -->
            </div>
        </div>
    </div>
    
@endsection
