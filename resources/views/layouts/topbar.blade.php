<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="index" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ URL::asset('/assets/images/logo-dark-sm.png') }}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ URL::asset('/assets/images/logo-dark.png') }}" alt="" height="18">
                    </span>
                </a>

                <a href="index" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ URL::asset('/assets/images/logo-light-sm.png') }}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ URL::asset('/assets/images/logo-light.png') }}" alt="" height="18">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>

            <div class="dropdown d-none d-lg-block ml-2">
                <button type="button" class="btn header-item waves-effect" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                    Quick Task
                    <i class="mdi mdi-chevron-down"></i> 
                </button>
                <div class="dropdown-menu dropdown-menu-xl p-2">
                    <div class="row">
                        <div class="col-md-6">
                            <a class="dropdown-item" href="ui-alerts"></i>@lang('translation.Alerts')</a>
                            <a class="dropdown-item" href="ui-buttons">@lang('translation.Buttons')</a>
                            <a class="dropdown-item" href="ui-cards">@lang('translation.Cards')</a>
                            <a class="dropdown-item" href="ui-dropdowns">@lang('translation.Dropdowns')</a>
                            <a class="dropdown-item" href="ui-lightbox">@lang('translation.Lightbox')</a>
                            <a class="dropdown-item" href="ui-modals">@lang('translation.Modals')</a>
                            <a class="dropdown-item" href="ui-rangeslider">@lang('translation.Range_Slider')</a>
                        </div>
                        <div class="col-md-6">
                            <a class="dropdown-item" href="ui-progressbars"></i>@lang('translation.Progress_Bars')</a>
                            <a class="dropdown-item" href="ui-sweet-alert">@lang('translation.Sweet_Alert')</a>
                            <a class="dropdown-item" href="ui-tabs-accordions">@lang('translation.Tabs_Accordions')</a>
                            <a class="dropdown-item" href="ui-typography">@lang('translation.Typography')</a>
                            <a class="dropdown-item" href="ui-general">@lang('translation.General')</a>
                            <a class="dropdown-item" href="ui-rating">@lang('translation.Rating')</a>
                            <a class="dropdown-item" href="ui-notifications">@lang('translation.Notifications')</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="ml-2">
                <button type="button" data-toggle="modal" data-target="#Knowlegde" class="btn header-item waves-effect" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                    Knowlegde base
                </button>
            </div>

            <div class="ml-2">
                <button type="button" data-toggle="modal" data-target="#report_submit" class="btn header-item waves-effect" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                    Submit daily report
                </button>
            </div>

        </div>

        <div class="d-flex">

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon waves-effect"
                    id="page-header-notifications-dropdown" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <i class="icon-sm" data-feather="bell"></i>
                    <span class="noti-dot bg-danger"></span>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                    aria-labelledby="page-header-notifications-dropdown">
                    <div class="p-3">
                        <div class="row align-items-center">
                            <div class="col">
                                <h5 class="m-0 font-size-15">@lang('translation.Notifications') </h5>
                            </div>
                        </div>
                    </div>
                    <div data-simplebar style="max-height: 230px;">
                        <a href="" class="text-reset notification-item">
                            <div class="media">
                                <div class="avatar-xs mr-3">
                                    <span class="avatar-title bg-primary rounded-circle font-size-16">
                                        <i class="uil-shopping-basket"></i>
                                    </span>
                                </div>
                                <div class="media-body">
                                    <h6 class="mt-0 mb-1">@lang('translation.order_placed')</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1">@lang('translation.languages_grammar')</p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i>@lang('translation.3_min_ago')</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="" class="text-reset notification-item">
                            <div class="media">
                                <img src="{{ URL::asset('/assets/images/users/avatar-3.jpg') }}"
                                    class="mr-3 rounded-circle avatar-xs" alt="user-pic">
                                <div class="media-body">
                                    <h6 class="mt-0 mb-1">@lang('translation.James_Lemire')</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1">@lang('translation.simplified_English')</p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i>@lang('translation.1_hours_ago')</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="" class="text-reset notification-item">
                            <div class="media">
                                <div class="avatar-xs mr-3">
                                    <span class="avatar-title bg-success rounded-circle font-size-16">
                                        <i class="uil-truck"></i>
                                    </span>
                                </div>
                                <div class="media-body">
                                    <h6 class="mt-0 mb-1">@lang('translation.item_shipped')</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1">@lang('translation.languages_grammar')</p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> @lang('translation.3_min_ago')</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="" class="text-reset notification-item">
                            <div class="media">
                                <img src="{{ URL::asset('/assets/images/users/avatar-4.jpg') }}"
                                    class="mr-3 rounded-circle avatar-xs" alt="user-pic">
                                <div class="media-body">
                                    <h6 class="mt-0 mb-1">@lang('translation.Salena_Layfield')</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1">@lang('translation.skeptical_occidental')</p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> @lang('translation.1_hours_ago')</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="p-2 border-top">
                        <a class="btn btn-sm btn-link font-size-14 btn-block text-center" href="{{route('notifications')}}">
                            <i class="uil-arrow-circle-right mr-1"></i> View all
                        </a>
                    </div>
                </div>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user"
                        src="{{ URL::asset('/assets/images/users/avatar-4.jpg') }}" alt="Header Avatar">
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <!-- item-->
                    <a class="dropdown-item" href="{{route('profile')}}"><i
                            class="uil uil-user-circle font-size-16 align-middle text-muted mr-1"></i> <span
                            class="align-middle">Edit Profile</span></a>
                    <a class="dropdown-item" href="javascript:void();"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                            class="uil uil-sign-out-alt font-size-16 align-middle mr-1 text-muted"></i> <span
                            class="align-middle">@lang('translation.Sign_out')</span></a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>

        </div>
    </div>
</header>




<!-- Modal -->
<div class="modal fade" id="Knowlegde" tabindex="-1" role="dialog" aria-labelledby="composemodalTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 90%;" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row justify-content-center mt-4">
                                    <div class="col-md-6 col-md-offset-3">
                                        <div class="text-center">
                                            <div>
                                                
                                                <input type="text" placeholder="Search..." class="form-control form-lg">

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                
                                <div class="row mt-5">
                                    <div class="col-xl-12">
                                        <div class="media align-items-center mb-3">
                                            <div class="mr-3">
                                                <div class="avatar-xs">
                                                    <div class="avatar-title rounded-circle font-size-20">
                                                        <i class="uil uil-question-circle"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media-body overflow-hidden">
                                                <h5 class="font-size-16 mb-0">General Questions</h5>
                                            </div>
                                        </div>
                                        <div id="faqs-accordion" class="custom-accordion mt-5 mt-xl-0">
                                            <div class="card border mb-2 shadow-none">
                                                <a href="#faqs-gen-ques-collapse1" class="text-dark" data-toggle="collapse"
                                                    aria-expanded="true" aria-controls="faqs-gen-ques-collapse1">
                                                    <div class="bg-light p-3">
                                                        <i class="mdi mdi-chevron-up accor-down-icon float-right icon font-size-16"></i>
                                                        <h5 class="font-size-15 mb-0"><i
                                                                class="mdi mdi-numeric-1-circle-outline mr-1"></i> What is Lorem Ipsum ?
                                                        </h5>

                                                    </div>
                                                </a>
                                                <div id="faqs-gen-ques-collapse1" class="collapse show" data-parent="#faqs-accordion">
                                                    <div class="p-3">
                                                        <p class="text-muted mb-0">Donec pede justo fringilla vel aliquet nec vulputate
                                                            eget arcu. In enim justo rhoncus ut imperdiet a venenatis vitae justo nullam
                                                            dictum felis eu pede mollis pretium enim ipsam voluptatem quia voluptas sit
                                                            aspernatur aut odit aut fugit sed quia consequuntur magni dolores eos qui
                                                            ratione voluptatem sequi nesciunt.</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card border mb-2 shadow-none">
                                                <a href="#faqs-gen-ques-collapse2" class="text-dark" data-toggle="collapse"
                                                    aria-expanded="true" aria-controls="faqs-gen-ques-collapse2">
                                                    <div class="bg-light p-3">
                                                        <i class="mdi mdi-chevron-up accor-down-icon float-right icon font-size-16"></i>
                                                        <h5 class="font-size-15 mb-0"><i
                                                                class="mdi mdi-numeric-2-circle-outline mr-1"></i> Why do we use it ?
                                                        </h5>

                                                    </div>
                                                </a>
                                                <div id="faqs-gen-ques-collapse2" class="collapse" data-parent="#faqs-accordion">
                                                    <div class="p-3">
                                                        <p class="text-muted mb-0">Donec pede justo fringilla vel aliquet nec vulputate
                                                            eget arcu. In enim justo rhoncus ut imperdiet a venenatis vitae justo nullam
                                                            dictum felis eu pede mollis pretium enim ipsam voluptatem quia voluptas sit
                                                            aspernatur aut odit aut fugit sed quia consequuntur magni dolores eos qui
                                                            ratione voluptatem sequi nesciunt.</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card border mb-3 shadow-none">
                                                <a href="#faqs-gen-ques-collapse3" class="text-dark" data-toggle="collapse"
                                                    aria-expanded="true" aria-controls="faqs-gen-ques-collapse3">
                                                    <div class="bg-light p-3">
                                                        <i class="mdi mdi-chevron-up accor-down-icon float-right icon font-size-16"></i>
                                                        <h5 class="font-size-15 mb-0"><i
                                                                class="mdi mdi-numeric-3-circle-outline mr-1"></i> Where does it come
                                                            from ?</h5>

                                                    </div>
                                                </a>
                                                <div id="faqs-gen-ques-collapse3" class="collapse" data-parent="#faqs-accordion">
                                                    <div class="p-3">
                                                        <p class="text-muted mb-0">Donec pede justo fringilla vel aliquet nec vulputate
                                                            eget arcu. In enim justo rhoncus ut imperdiet a venenatis vitae justo nullam
                                                            dictum felis eu pede mollis pretium enim ipsam voluptatem quia voluptas sit
                                                            aspernatur aut odit aut fugit sed quia consequuntur magni dolores eos qui
                                                            ratione voluptatem sequi nesciunt.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="media align-items-center mt-4 pt-2 mb-3">
                                            <div class="mr-3">
                                                <div class="avatar-xs">
                                                    <div class="avatar-title rounded-circle font-size-20">
                                                        <i class="uil uil-keyhole-circle"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media-body overflow-hidden">
                                                <h5 class="font-size-16 mb-0">Privacy Policy Questions</h5>
                                            </div>
                                        </div>
                                        <div id="faqs-accordion1" class="custom-accordion mt-5 mt-xl-0">
                                            <div class="card border mb-2 shadow-none">
                                                <a href="#faqs-gen-ques-collapse4" class="text-dark" data-toggle="collapse"
                                                    aria-expanded="true" aria-controls="faqs-gen-ques-collapse4">
                                                    <div class="bg-light p-3">
                                                        <i class="mdi mdi-chevron-up accor-down-icon float-right icon font-size-16"></i>
                                                        <h5 class="font-size-15 mb-0"><i
                                                                class="mdi mdi-numeric-1-circle-outline mr-1"></i> Where can I get some
                                                            ?</h5>

                                                    </div>
                                                </a>
                                                <div id="faqs-gen-ques-collapse4" class="collapse" data-parent="#faqs-accordion1">
                                                    <div class="p-3">
                                                        <p class="text-muted mb-0">Donec pede justo fringilla vel aliquet nec vulputate
                                                            eget arcu. In enim justo rhoncus ut imperdiet a venenatis vitae justo nullam
                                                            dictum felis eu pede mollis pretium enim ipsam voluptatem quia voluptas sit
                                                            aspernatur aut odit aut fugit sed quia consequuntur magni dolores eos qui
                                                            ratione voluptatem sequi nesciunt.</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card border mb-2 shadow-none">
                                                <a href="#faqs-gen-ques-collapse5" class="text-dark" data-toggle="collapse"
                                                    aria-expanded="true" aria-controls="faqs-gen-ques-collapse5">
                                                    <div class="bg-light p-3">
                                                        <i class="mdi mdi-chevron-up accor-down-icon float-right icon font-size-16"></i>
                                                        <h5 class="font-size-15 mb-0"><i
                                                                class="mdi mdi-numeric-2-circle-outline mr-1"></i> Why do we use it ?
                                                        </h5>

                                                    </div>
                                                </a>
                                                <div id="faqs-gen-ques-collapse5" class="collapse" data-parent="#faqs-accordion1">
                                                    <div class="p-3">
                                                        <p class="text-muted mb-0">Donec pede justo fringilla vel aliquet nec vulputate
                                                            eget arcu. In enim justo rhoncus ut imperdiet a venenatis vitae justo nullam
                                                            dictum felis eu pede mollis pretium enim ipsam voluptatem quia voluptas sit
                                                            aspernatur aut odit aut fugit sed quia consequuntur magni dolores eos qui
                                                            ratione voluptatem sequi nesciunt.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="media align-items-center mt-4 pt-2 mb-3">
                                            <div class="mr-3">
                                                <div class="avatar-xs">
                                                    <div class="avatar-title rounded-circle font-size-20">
                                                        <i class="uil uil-usd-circle"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media-body overflow-hidden">
                                                <h5 class="font-size-16 mb-0">Pricing & Plans</h5>
                                            </div>
                                        </div>
                                        <div id="faqs-accordion3" class="custom-accordion mt-5 mt-xl-0">
                                            <div class="card border mb-2 shadow-none">
                                                <a href="#faqs-gen-ques-collapse6" class="text-dark" data-toggle="collapse"
                                                    aria-expanded="true" aria-controls="faqs-gen-ques-collapse6">
                                                    <div class="bg-light p-3">
                                                        <i class="mdi mdi-chevron-up accor-down-icon float-right icon font-size-16"></i>
                                                        <h5 class="font-size-15 mb-0"><i
                                                                class="mdi mdi-numeric-1-circle-outline mr-1"></i> Where does it come
                                                            from ?</h5>

                                                    </div>
                                                </a>
                                                <div id="faqs-gen-ques-collapse6" class="collapse" data-parent="#faqs-accordion3">
                                                    <div class="p-3">
                                                        <p class="text-muted mb-0">Donec pede justo fringilla vel aliquet nec vulputate
                                                            eget arcu. In enim justo rhoncus ut imperdiet a venenatis vitae justo nullam
                                                            dictum felis eu pede mollis pretium enim ipsam voluptatem quia voluptas sit
                                                            aspernatur aut odit aut fugit sed quia consequuntur magni dolores eos qui
                                                            ratione voluptatem sequi nesciunt.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card border mb-2 shadow-none">
                                                <a href="#faqs-gen-ques-collapse7" class="text-dark" data-toggle="collapse"
                                                    aria-expanded="true" aria-controls="faqs-gen-ques-collapse7">
                                                    <div class="bg-light p-3">
                                                        <i class="mdi mdi-chevron-up accor-down-icon float-right icon font-size-16"></i>
                                                        <h5 class="font-size-15 mb-0"><i
                                                                class="mdi mdi-numeric-1-circle-outline mr-1"></i> Why do we use it ?
                                                        </h5>

                                                    </div>
                                                </a>
                                                <div id="faqs-gen-ques-collapse7" class="collapse" data-parent="#faqs-accordion3">
                                                    <div class="p-3">
                                                        <p class="text-muted mb-0">Donec pede justo fringilla vel aliquet nec vulputate
                                                            eget arcu. In enim justo rhoncus ut imperdiet a venenatis vitae justo nullam
                                                            dictum felis eu pede mollis pretium enim ipsam voluptatem quia voluptas sit
                                                            aspernatur aut odit aut fugit sed quia consequuntur magni dolores eos qui
                                                            ratione voluptatem sequi nesciunt.</p>
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
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="report_submit" tabindex="-1" role="dialog" aria-labelledby="composemodalTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="composemodalTitle">Submit your daily report</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            Your report is an assessment of your performance and contributions.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        
                    </div>
                    <div class="col-lg-12">
                        <div class="row justify-content-center mt-4">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <h4>Date Time: 07 Nov, 2020</h4>
                                    <h4>Department: Finance</h4>
                                    <h4>Name: Mr. Users</h4>
                                </div>
                                <div class="summernote">
                                    <h6>Hello Summer note</h6>
                                    <ul>
                                        <li>
                                            Select a text to reveal the toolbar.
                                        </li>
                                        <li>
                                            Edit rich document on-the-fly, so elastic!
                                        </li>
                                    </ul>
                                    <p>
                                        End of air-mode area
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</div>