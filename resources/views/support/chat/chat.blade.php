@extends('layouts.master')
@section('title') Chat @endsection

@section('content')
    @component('components.breadcrumb')
        @slot('pageheading') Chat @endslot
        @slot('pagetitle') Home @endslot
        @slot('title') Chat @endslot
    @endcomponent
    
    <div class="d-lg-flex mb-4">
        <div class="chat-leftsidebar card">
            <div class="p-3 px-4">
                <div class="media">
                    <div class="align-self-center mr-3">
                        <img src="{{ URL::asset('/assets/images/users/avatar-4.jpg') }}" class="avatar-sm rounded-circle"
                            alt="">
                    </div>
                    <div class="media-body">
                        <h5 class="font-size-16 mt-0 mb-1"><a href="#" class="text-dark">Marcus <i
                                    class="mdi mdi-circle text-success align-middle font-size-10 ml-1"></i></a></h5>
                        <p class="text-muted mb-0">Available</p>
                    </div>

                    <div>
                        <div class="dropdown chat-noti-dropdown">
                            <button class="btn dropdown-toggle py-0" type="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="uil uil-ellipsis-h"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#" onclick="document.getElementById('selectedFile').click();">Change Avater</a>
                                <input type="file" id="selectedFile" style="display: none;" />
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="p-3">
                <div class="search-box chat-search-box">
                    <div class="position-relative">
                        <input type="text" class="form-control bg-light border-light rounded" placeholder="Search...">
                        <i class="uil uil-search search-icon"></i>
                    </div>
                </div>
            </div> -->

            <div class="pb-3">
                <div data-simplebar style="max-height: 520px;">
                    <div class="p-4 border-top">
                        <div>
                            <div class="float-right">
                                <a href="" class="text-primary"><i class="mdi mdi-plus"></i> New Group</a>
                            </div>
                            <h5 class="font-size-16 mb-3"><i class="uil uil-users-alt mr-1"></i> Groups</h5>

                            <ul class="list-unstyled chat-list group-list">
                                <li>
                                    <a href="#">
                                        <div class="media align-items-center">
                                            <div class="avatar-xs mr-3">
                                                <span class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                    G
                                                </span>
                                            </div>

                                            <div class="media-body">
                                                <h5 class="font-size-14 mb-0">General</h5>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="active">
                                    <a href="#">
                                        <div class="media align-items-center">
                                            <div class="avatar-xs mr-3">
                                                <span class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                    <i class="uil uil-edit-alt"></i>
                                                </span>
                                            </div>

                                            <div class="media-body">
                                                <h5 class="font-size-14 mb-0">Designers</h5>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="media align-items-center">
                                            <div class="avatar-xs mr-3">
                                                <span class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                    <i class="uil uil-users-alt"></i>
                                                </span>
                                            </div>

                                            <div class="media-body">
                                                <h5 class="font-size-14 mb-0">Meeting</h5>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="media align-items-center">
                                            <div class="avatar-xs mr-3">
                                                <span class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                    <i class="uil uil-file-edit-alt"></i>
                                                </span>
                                            </div>

                                            <div class="media-body">
                                                <h5 class="font-size-14 mb-0">Reporting</h5>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="p-4 border-top">
                        <div>
                            <div class="float-right">
                                <a href="" class="text-primary"><i class="mdi mdi-plus"></i> New Contact</a>
                            </div>
                            <h5 class="font-size-16 mb-3"><i class="uil uil-user mr-1"></i> Contacts</h5>

                            <ul class="list-unstyled chat-list">
                                <li>
                                    <a href="#">
                                        <div class="media">

                                            <div class="user-img online align-self-center mr-3">
                                                <img src="{{ URL::asset('/assets/images/users/avatar-2.jpg') }}"
                                                    class="rounded-circle avatar-xs" alt="">
                                                <span class="user-status"></span>
                                            </div>

                                            <div class="media-body overflow-hidden">
                                                <h5 class="text-truncate font-size-14 mb-1">James Clark</h5>
                                                <p class="text-truncate mb-0">Hey! there I'm available</p>
                                            </div>
                                            <div class="font-size-11">02 min</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="unread">
                                    <a href="#">
                                        <div class="media">
                                            <div class="user-img online align-self-center mr-3">
                                                <div class="avatar-xs align-self-center">
                                                    <span class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                        G
                                                    </span>
                                                </div>
                                                <span class="user-status"></span>
                                            </div>

                                            <div class="media-body overflow-hidden">
                                                <h5 class="text-truncate font-size-14 mb-1">Galen Rizo</h5>
                                                <p class="text-truncate mb-0">I've finished it! See you so</p>
                                            </div>
                                            <div class="font-size-11">10 min</div>
                                            <div class="unread-message">
                                                <span class="badge badge-danger badge-pill">01</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="media">
                                            <div class="user-img away align-self-center mr-3">
                                                <img src="{{ URL::asset('/assets/images/users/avatar-3.jpg') }}"
                                                    class="rounded-circle avatar-xs" alt="">
                                                <span class="user-status"></span>
                                            </div>

                                            <div class="media-body overflow-hidden">
                                                <h5 class="text-truncate font-size-14 mb-1">Helen Pitts</h5>
                                                <p class="text-truncate mb-0">This theme is awesome!</p>
                                            </div>
                                            <div class="font-size-11">22 min</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="media">

                                            <div class="user-img align-self-center mr-3">
                                                <img src="{{ URL::asset('/assets/images/users/avatar-4.jpg') }}"
                                                    class="rounded-circle avatar-xs" alt="">
                                                <span class="user-status"></span>
                                            </div>

                                            <div class="media-body overflow-hidden">
                                                <h5 class="text-truncate font-size-14 mb-1">Annie Holder</h5>
                                                <p class="text-truncate mb-0">Nice to meet you</p>
                                            </div>
                                            <div class="font-size-11">01 Hr</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="media">

                                            <div class="user-img online align-self-center mr-3">
                                                <div class="avatar-xs align-self-center">
                                                    <span class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                        V
                                                    </span>
                                                </div>
                                                <span class="user-status"></span>
                                            </div>

                                            <div class="media-body overflow-hidden">
                                                <h5 class="text-truncate font-size-14 mb-1">Vernon Smith</h5>
                                                <p class="text-truncate mb-0">Wow that's great</p>
                                            </div>
                                            <div class="font-size-11">04 Hrs</div>
                                        </div>
                                    </a>
                                </li>


                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- end chat-leftsidebar -->

        <div class="w-100 user-chat mt-4 mt-sm-0 ml-lg-1">
            <div class="card">
                <div class="chat-conversation">
                    <div class="p-3 px-lg-4 border-bottom">
                        <div class="row">
                            <div class="col-xl-4 col-7">
                                <div class="media align-items-center">
                                    <div class="avatar mr-3 d-sm-block d-none">
                                        <div class="avatar-title bg-soft-primary rounded text-primary h2">D</div>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="font-size-16 mb-1 text-truncate"><a href="#"
                                                class="text-dark">Designers</a></h5>
                                        <p class="text-muted text-truncate mb-0"><i class="uil uil-users-alt mr-1"></i> 12
                                            Members</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8 col-5">
                                <ul class="list-inline user-chat-nav text-right mb-0">
                                    <li class="list-inline-item">
                                        <div class="dropdown">
                                            <button class="btn nav-btn dropdown-toggle" type="button" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                <i class="uil uil-search"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-md p-2">
                                                <form class="p-2">
                                                    <div>
                                                        <input type="text" class="form-control rounded"
                                                            placeholder="Search...">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="list-inline-item">
                                        <div class="dropdown">
                                            <button class="btn nav-btn dropdown-toggle" type="button" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                <i class="uil uil-ellipsis-h"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#">Manage</a>
                                                <a class="dropdown-item" href="#">Muted</a>
                                                <a class="dropdown-item" href="#">Leave</a>
                                                <a class="dropdown-item" href="#">Add Member</a>
                                                <a class="dropdown-item" href="#">Remove Member</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div data-simplebar style="max-height: 520px;">
                            <ul class="conversation-list p-0">
                                <li class="chat-day-title">
                                    <div class="title">Today</div>
                                </li>
                                <li class="clearfix">
                                    <div class="media">
                                        <img src="{{ URL::asset('/assets/images/users/avatar-2.jpg') }}"
                                            class="avatar-xs rounded-circle align-self-end" alt="...">
                                        <div class="media-body">
                                            <div class="conversation-text">
                                                <div class="ctext-wrap">
                                                    <a href="#" class="user-name">James Clark</a></h6>
                                                    <p>Good morning everyone !</p>
                                                </div>
                                                <div class="msg-seen">
                                                    <p class="text-muted font-size-12 mb-0 t mt-1"><i
                                                            class="mdi mdi-clock-outline"></i> 09:01AM <i
                                                            class="mdi mdi-check-all text-success ml-1"></i></p>
                                                </div>
                                                <a href="#" class="chat-share-icon"><i
                                                        class="mdi mdi-reply font-size-20 ml-2"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="clearfix odd">
                                    <div class="media">
                                        <div class="media-body">
                                            <div class="conversation-text">
                                                <div class="ctext-wrap">
                                                    <p>Good morning everyone !</p>
                                                </div>
                                                <div class="msg-seen">
                                                    <p class="text-muted font-size-12 mb-0 t mt-1"><i
                                                            class="mdi mdi-clock-outline"></i> 09:02AM <i
                                                            class="mdi mdi-check-all text-success ml-1"></i></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <div class="media">
                                        <img src="{{ URL::asset('/assets/images/users/avatar-1.jpg') }}"
                                            class="avatar-xs rounded-circle align-self-end" alt="...">
                                        <div class="media-body">
                                            <div class="conversation-text">
                                                <div class="ctext-wrap">
                                                    <a href="#" class="user-name">Marie White</a></h6>
                                                    <p>Hello!</p>
                                                </div>
                                                <div class="msg-seen">
                                                    <p class="text-muted font-size-12 mb-0 t mt-1"><i
                                                            class="mdi mdi-clock-outline"></i> 09:02AM <i
                                                            class="mdi mdi-check-all text-success ml-1"></i></p>
                                                </div>
                                                <a href="#" class="chat-share-icon"><i
                                                        class="mdi mdi-reply font-size-20 ml-2"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <div class="media">
                                        <img src="{{ URL::asset('/assets/images/users/avatar-3.jpg') }}"
                                            class="avatar-xs rounded-circle align-self-end" alt="...">
                                        <div class="media-body">
                                            <div class="conversation-text">
                                                <div class="ctext-wrap">
                                                    <a href="#" class="user-name">Helen Pitts</a></h6>
                                                    <p>What about our next meeting?</p>
                                                </div>
                                                <div class="msg-seen">
                                                    <p class="text-muted font-size-12 mb-0 t mt-1"><i
                                                            class="mdi mdi-clock-outline"></i> 09:03AM <i
                                                            class="mdi mdi-check-all text-success ml-1"></i></p>
                                                </div>
                                                <a href="#" class="chat-share-icon"><i
                                                        class="mdi mdi-reply font-size-20 ml-2"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <div class="media">
                                        <img src="{{ URL::asset('/assets/images/users/avatar-4.jpg') }}"
                                            class="avatar-xs rounded-circle align-self-end" alt="...">
                                        <div class="media-body">
                                            <div class="conversation-text">
                                                <div class="ctext-wrap">
                                                    <a href="#" class="user-name">Kimber Rivera</a></h6>
                                                    <p>Next meeting tomorrow 10.00AM</p>
                                                </div>
                                                <div class="msg-seen">
                                                    <p class="text-muted font-size-12 mb-0 t mt-1"><i
                                                            class="mdi mdi-clock-outline"></i> 09:04AM <i
                                                            class="mdi mdi-check-all text-success ml-1"></i></p>
                                                </div>
                                                <a href="#" class="chat-share-icon"><i
                                                        class="mdi mdi-reply font-size-20 ml-2"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="clearfix odd">
                                    <div class="media">
                                        <div class="media-body">
                                            <div class="conversation-text">
                                                <div class="ctext-wrap">
                                                    <p>Wow that's great</p>
                                                </div>
                                                <div class="msg-seen">
                                                    <p class="text-muted font-size-12 mb-0 t mt-1"><i
                                                            class="mdi mdi-clock-outline"></i> 09:05AM <i
                                                            class="mdi mdi-check-all text-success ml-1"></i></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <div class="media">
                                        <img src="{{ URL::asset('/assets/images/users/avatar-3.jpg') }}"
                                            class="avatar-xs rounded-circle align-self-end" alt="...">
                                        <div class="media-body">
                                            <div class="conversation-text">
                                                <div class="ctext-wrap">
                                                    <a href="#" class="user-name">Rodney Perry</a></h6>
                                                    <p>img-1.jpg & img-2.jpg images for a New Projects</p>
                                                    <div class="mt-2">
                                                        <a href="#">
                                                            <img src="{{ URL::asset('/assets/images/small/img-1.jpg') }}"
                                                                alt="" class="rounded img-fluid">
                                                        </a>
                                                        <a href="#">
                                                            <img src="{{ URL::asset('/assets/images/small/img-2.jpg') }}"
                                                                alt="" class="rounded img-fluid">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="msg-seen">
                                                    <p class="text-muted font-size-12 mb-0 t mt-1"><i
                                                            class="mdi mdi-clock-outline"></i> 09:06AM <i
                                                            class="mdi mdi-check-all text-success ml-1"></i></p>
                                                </div>
                                                <a href="#" class="chat-share-icon"><i
                                                        class="mdi mdi-reply font-size-20 ml-2"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="clearfix odd">
                                    <div class="media">
                                        <div class="media-body">
                                            <div class="conversation-text">
                                                <div class="ctext-wrap">
                                                    <p>It looks very nice.</p>
                                                </div>
                                                <div class="msg-seen">
                                                    <p class="text-muted font-size-12 mb-0 t mt-1"><i
                                                            class="mdi mdi-clock-outline"></i> 09:06AM <i
                                                            class="mdi mdi-check-all text-success ml-1"></i></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <div class="media">
                                        <img src="{{ URL::asset('/assets/images/users/avatar-4.jpg') }}"
                                            class="avatar-xs rounded-circle align-self-end" alt="...">
                                        <div class="media-body">
                                            <div class="conversation-text">
                                                <div class="ctext-wrap">
                                                    <a href="#" class="user-name">Kimber Rivera</a></h6>
                                                    <p>Thank you. 😊</p>
                                                </div>
                                                <div class="msg-seen">
                                                    <p class="text-muted font-size-12 mb-0 t mt-1"><i
                                                            class="mdi mdi-clock-outline"></i> 09:07AM <i
                                                            class="mdi mdi-check-all text-success ml-1"></i></p>
                                                </div>
                                                <a href="#" class="chat-share-icon"><i
                                                        class="mdi mdi-reply font-size-20 ml-2"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="row align-items-center pt-2 chat-input-box">
                            <div class="col-xl-10 col-md-8 col-8 chat-inputbar">
                                <input type="text" class="form-control chat-input" placeholder="Type Message...">
                                <ul class="list-inline mb-0 chat-icon">
                                    <li class="list-inline-item mr-2"><a href="#" class="text-secondary"
                                            data-toggle="tooltip" data-placement="top" title="Emoji"><i class="icon-xs"
                                                data-feather="smile"></i></a></li>
                                    <li class="list-inline-item mr-2"><a href="#" class="text-secondary"
                                            data-toggle="tooltip" data-placement="top" title="File"><i class="icon-xs"
                                                data-feather="paperclip"></i></a></li>
                                    <li class="list-inline-item mr-2"><a href="#" class="text-secondary"
                                            data-toggle="tooltip" data-placement="top" title="Camera"><i class="icon-xs"
                                                data-feather="camera"></i></a></li>
                                </ul>
                            </div>
                            <div class="col-xl-2 col-md-4 col-4">
                                <button type="submit" class="btn btn-block btn-primary"><span
                                        class="d-sm-inline-block d-none">Send</span>
                                    <i class="uil uil-message ml-sm-1 ml-0"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End d-lg-flex  -->

@endsection
