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
                    @lang('translation.UI_Components')
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

            <div class="dropdown dropdown-mega d-none d-lg-block">
                <button type="button" class="btn header-item waves-effect" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                    @lang('translation.Mega_menu')
                    <i class="mdi mdi-chevron-down"></i> 
                </button>
                <div class="dropdown-menu p-2 dropdown-megamenu">
                    <div class="row">
                        <div class="col-xl-2 col-md-4">
                            <h5 class="font-size-14 mx-4 mt-2">@lang('translation.Product')</h5>
                            <a class="dropdown-item" href="#"></i>@lang('translation.Headphones')</a>
                            <a class="dropdown-item" href="#"></i>@lang('translation.Mobiles')</a>
                            <a class="dropdown-item" href="#"></i>@lang('translation.Mobile_Covers')</a>
                            <a class="dropdown-item" href="#"></i>@lang('translation.Charging')</a>
                            <a class="dropdown-item" href="#"></i>@lang('translation.Power_Bank')</a>
                            <a class="dropdown-item" href="#"></i>@lang('translation.T.V')</a>
                        </div>
                        <div class="col-xl-2 col-md-4">
                            <h5 class="font-size-14 ml-4 mt-2">@lang('translation.Brand')</h5>
                            <a class="dropdown-item" href="#"></i>@lang('translation.Apple')</a>
                            <a class="dropdown-item" href="#"></i>@lang('translation.Sony')</a>
                            <a class="dropdown-item" href="#"></i>@lang('translation.Samsung')</a>
                            <a class="dropdown-item" href="#"></i>@lang('translation.LG')</a>
                            <a class="dropdown-item" href="#"></i>@lang('translation.Oppo')</a>
                            <a class="dropdown-item" href="#"></i>@lang('translation.Gionee')</a>
                        </div>
                        <div class="col-xl-2 col-md-4">
                            <h5 class="font-size-14 ml-4 mt-2">@lang('translation.Product_Detail')</h5>
                            <p class="dropdown-item my-0">@lang('translation.Product_Reviews')</p>
                            <p class="dropdown-item my-0">@lang('translation.Multiple_Colors')</p>
                            <p class="dropdown-item my-0">@lang('translation.Free_Shipping')</p>
                            <p class="dropdown-item my-0">@lang('translation.Easy_Returns')</p>
                            <p class="dropdown-item my-0">@lang('translation.Lowest_Price')</p>
                            <p class="dropdown-item my-0">@lang('translation.Payment_Methods')</p>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="py-lg-2 pl-lg-2">
                                <img src="{{ URL::asset('/assets/images/menu-product-1.jpg') }}" alt="" class="img-fluid mx-auto rounded shadow">
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="py-lg-2 pr-lg-2">
                                <img src="{{ URL::asset('/assets/images/menu-product-2.jpg') }}" alt="" class="img-fluid mx-auto rounded shadow">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="dropdown d-none d-lg-block">
                <button type="button" class="btn header-item waves-effect" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                    @lang('translation.Shop')
                    <i class="mdi mdi-chevron-down"></i> 
                </button>
                <div class="dropdown-menu dropdown-menu-sm">
                    <a class="dropdown-item" href="#"></i>@lang('translation.Login')</a>
                    <a class="dropdown-item" href="#"></i>@lang('translation.Card')</a>
                    <a class="dropdown-item" href="#"></i>@lang('translation.Product_Single')</a>
                    <a class="dropdown-item" href="#"></i>@lang('translation.Checkout')</a>
                    <a class="dropdown-item" href="#"></i>@lang('translation.Register')</a>
                </div>
            </div>
        </div>

        <div class="d-flex">

            <div class="dropdown d-inline-block d-lg-none ml-2">
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="uil-search"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                    aria-labelledby="page-header-search-dropdown">

                    <form class="p-3">
                        <div class="form-group m-0">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="@lang('translation.Search')"
                                    aria-label="Recipient's username">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit"><i
                                            class="mdi mdi-magnify"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="dropdown d-inline-block language-switch">
                <button type="button" class="btn header-item waves-effect" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    @switch(Session::get('lang'))
                        @case('ru')
                        <img src="{{ URL::asset('assets/images/flags/russia.jpg') }}" alt="Header Language" height="16">
                        @break
                        @case('it')
                        <img src="{{ URL::asset('assets/images/flags/italy.jpg') }}" alt="Header Language" height="16">
                        @break
                        @case('de')
                        <img src="{{ URL::asset('assets/images/flags/germany.jpg') }}" alt="Header Language" height="16">
                        @break
                        @case('es')
                        <img src="{{ URL::asset('assets/images/flags/spain.jpg') }}" alt="Header Language" height="16">
                        @break
                        @default
                        <img src="{{ URL::asset('assets/images/flags/us.jpg') }}" alt="Header Language" height="16">
                    @endswitch
                </button>
                <div class="dropdown-menu dropdown-menu-right">

                    <!-- item-->
                    <a href="{{ url('index/en') }}" class="dropdown-item notify-item">
                        <img src="{{ URL::asset('assets/images/flags/us.jpg') }}" alt="user-image" class="mr-1"
                            height="12"> <span class="align-middle">English</span>
                    </a>

                    <!-- item-->
                    <a href="{{ url('index/es') }}" class="dropdown-item notify-item">
                        <img src="{{ URL::asset('assets/images/flags/spain.jpg') }}" alt="user-image" class="mr-1"
                            height="12"> <span class="align-middle">Spanish</span>
                    </a>

                    <!-- item-->
                    <a href="{{ url('index/de') }}" class="dropdown-item notify-item">
                        <img src="{{ URL::asset('assets/images/flags/germany.jpg') }}" alt="user-image" class="mr-1"
                            height="12"> <span class="align-middle">German</span>
                    </a>

                    <!-- item-->
                    <a href="{{ url('index/it') }}" class="dropdown-item notify-item">
                        <img src="{{ URL::asset('assets/images/flags/italy.jpg') }}" alt="user-image" class="mr-1"
                            height="12"> <span class="align-middle">Italian</span>
                    </a>

                    <!-- item-->
                    <a href="{{ url('index/ru') }}" class="dropdown-item notify-item">
                        <img src="{{ URL::asset('assets/images/flags/russia.jpg') }}" alt="user-image" class="mr-1"
                            height="12"> <span class="align-middle">Russian</span>
                    </a>
                </div>
            </div>

            <div class="dropdown d-none d-lg-inline-block">
                <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="icon-sm" data-feather="grid"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <div class="px-lg-2">
                        <div class="row no-gutters">
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="{{ URL::asset('/assets/images/brands/github.png') }}" alt="Github">
                                    <span>GitHub</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="{{ URL::asset('/assets/images/brands/bitbucket.png') }}" alt="bitbucket">
                                    <span>Bitbucket</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="{{ URL::asset('/assets/images/brands/dribbble.png') }}" alt="dribbble">
                                    <span>Dribbble</span>
                                </a>
                            </div>
                        </div>

                        <div class="row no-gutters">
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="{{ URL::asset('/assets/images/brands/dropbox.png') }}" alt="dropbox">
                                    <span>Dropbox</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="{{ URL::asset('/assets/images/brands/mail_chimp.png') }}"
                                        alt="mail_chimp">
                                    <span>Mail Chimp</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="{{ URL::asset('/assets/images/brands/slack.png') }}" alt="slack">
                                    <span>Slack</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

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
                            <div class="col-auto">
                                <a href="#!" class="small">@lang('translation.Mark_read')</a>
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
                        <a class="btn btn-sm btn-link font-size-14 btn-block text-center" href="javascript:void(0)">
                            <i class="uil-arrow-circle-right mr-1"></i> @lang('translation.View_More')
                        </a>
                    </div>
                </div>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                    <i class="icon-sm" data-feather="settings"></i>
                </button>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user"
                        src="{{ URL::asset('/assets/images/users/avatar-4.jpg') }}" alt="Header Avatar">
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <!-- item-->
                    <a class="dropdown-item" href="#"><i
                            class="uil uil-user-circle font-size-16 align-middle text-muted mr-1"></i> <span
                            class="align-middle">@lang('translation.View_Profile')</span></a>
                    <a class="dropdown-item" href="#"><i
                            class="uil uil-wallet font-size-16 align-middle mr-1 text-muted"></i> <span
                            class="align-middle">@lang('translation.My_Wallet')</span></a>
                    <a class="dropdown-item d-block" href="#"><i
                            class="uil uil-cog font-size-16 align-middle mr-1 text-muted"></i> <span
                            class="align-middle">@lang('translation.Settings')</span> <span
                            class="badge badge-soft-success badge-pill mt-1 ml-2">03</span></a>
                    <a class="dropdown-item" href="#"><i
                            class="uil uil-lock-alt font-size-16 align-middle mr-1 text-muted"></i> <span
                            class="align-middle">@lang('translation.Lock_screen')</span></a>
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
