<header id="page-topbar" style="background-image: url(assets/images/hori-nav-bg.png)">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="index" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="assets/images/logo-dark-sm.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo-dark.png" alt="" height="18">
                    </span>
                </a>

                <a href="index" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="assets/images/logo-light-sm.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo-light.png" alt="" height="18">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 d-lg-none header-item waves-effect waves-light"
                data-toggle="collapse" data-target="#topnav-menu-content">
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

            <div class="dropdown d-none d-lg-inline-block ml-1">
                <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="icon-sm" data-feather="grid"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <div class="px-lg-2">
                        <div class="row no-gutters">
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="assets/images/brands/github.png" alt="Github">
                                    <span>GitHub</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="assets/images/brands/bitbucket.png" alt="bitbucket">
                                    <span>Bitbucket</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="assets/images/brands/dribbble.png" alt="dribbble">
                                    <span>Dribbble</span>
                                </a>
                            </div>
                        </div>

                        <div class="row no-gutters">
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="assets/images/brands/dropbox.png" alt="dropbox">
                                    <span>Dropbox</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="assets/images/brands/mail_chimp.png" alt="mail_chimp">
                                    <span>Mail Chimp</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="assets/images/brands/slack.png" alt="slack">
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
                                <h5 class="m-0 font-size-15"> @lang('translation.Notifications') </h5>
                            </div>
                            <div class="col-auto">
                                <a href="#!" class="small"> @lang('translation.Mark_read')</a>
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
                                        <p class="mb-0"><i
                                                class="mdi mdi-clock-outline"></i>@lang('translation.3_min_ago')</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="" class="text-reset notification-item">
                            <div class="media">
                                <img src="assets/images/users/avatar-3.jpg" class="mr-3 rounded-circle avatar-xs"
                                    alt="user-pic">
                                <div class="media-body">
                                    <h6 class="mt-0 mb-1">@lang('translation.James_Lemire')</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1">@lang('translation.simplified_English')</p>
                                        <p class="mb-0"><i
                                                class="mdi mdi-clock-outline"></i>@lang('translation.1_hours_ago')</p>
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
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i>
                                            @lang('translation.3_min_ago')</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="" class="text-reset notification-item">
                            <div class="media">
                                <img src="assets/images/users/avatar-4.jpg" class="mr-3 rounded-circle avatar-xs"
                                    alt="user-pic">
                                <div class="media-body">
                                    <h6 class="mt-0 mb-1">@lang('translation.Salena_Layfield')</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1">@lang('translation.skeptical_occidental')</p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i>
                                            @lang('translation.1_hours_ago')</p>
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
                    <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-4.jpg"
                        alt="Header Avatar">
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <!-- item-->
                    <a class="dropdown-item" href="#">
                        <i class="uil uil-user-circle font-size-16 align-middle text-muted mr-1"></i>
                        <span class="align-middle">@lang('translation.View_Profile')</span></a>
                    <a class="dropdown-item" href="#">
                        <i class="uil uil-wallet font-size-16 align-middle mr-1 text-muted"></i>
                        <span class="align-middle">@lang('translation.My_Wallet')</span></a>
                    <a class="dropdown-item d-block" href="#">
                        <i class="uil uil-cog font-size-16 align-middle mr-1 text-muted"></i>
                        <span class="align-middle">@lang('translation.Settings')</span>
                        <span class="badge badge-soft-success badge-pill mt-1 ml-2">03</span></a>
                    <a class="dropdown-item" href="#">
                        <i class="uil uil-lock-alt font-size-16 align-middle mr-1 text-muted"></i>
                        <span class="align-middle">@lang('translation.Lock_screen')</span></a>
                    <a class="dropdown-item" href="javascript:void();"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="uil uil-sign-out-alt font-size-16 align-middle mr-1 text-muted"></i>
                        <span class="align-middle">@lang('translation.Sign_out')</span></a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="topnav">

            <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

                <div class="collapse navbar-collapse" id="topnav-menu-content">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-pages" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon nav-icon" data-feather="home"></i>
                                @lang('translation.Dashboard') <div class="arrow-down"></div>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="topnav-pages">
                                <a href="index" class="dropdown-item">@lang('translation.Ecommerce')</a>
                                <a href="dashboard-saas" class="dropdown-item">@lang('translation.Saas')</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-uielement" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon nav-icon" data-feather="gift"></i>
                                @lang('translation.UI_Elements') <div class="arrow-down"></div>
                            </a>

                            <div class="dropdown-menu mega-dropdown-menu px-2 dropdown-mega-menu-xl"
                                aria-labelledby="topnav-uielement">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div>
                                            <a href="ui-alerts" class="dropdown-item">@lang('translation.Alerts')</a>
                                            <a href="ui-buttons" class="dropdown-item">@lang('translation.Buttons')</a>
                                            <a href="ui-cards" class="dropdown-item">@lang('translation.Cards')</a>
                                            <a href="ui-carousel"
                                                class="dropdown-item">@lang('translation.Carousel')</a>
                                            <a href="ui-dropdowns"
                                                class="dropdown-item">@lang('translation.Dropdowns')</a>
                                            <a href="ui-grid" class="dropdown-item">@lang('translation.Grid')</a>
                                            <a href="ui-images" class="dropdown-item">@lang('translation.Images')</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div>
                                            <a href="ui-lightbox"
                                                class="dropdown-item">@lang('translation.Lightbox')</a>
                                            <a href="ui-modals" class="dropdown-item">@lang('translation.Modals')</a>
                                            <a href="ui-rangeslider"
                                                class="dropdown-item">@lang('translation.Range_Slider')</a>
                                            <a href="ui-session-timeout"
                                                class="dropdown-item">@lang('translation.Session_Timeout')</a>
                                            <a href="ui-progressbars"
                                                class="dropdown-item">@lang('translation.Progress_Bars')</a>
                                            <a href="ui-sweet-alert"
                                                class="dropdown-item">@lang('translation.Sweet_Alert')</a>
                                            <a href="ui-tabs-accordions"
                                                class="dropdown-item">@lang('translation.Tabs_Accordions')</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div>
                                            <a href="ui-typography"
                                                class="dropdown-item">@lang('translation.Typography')</a>
                                            <a href="ui-video" class="dropdown-item">@lang('translation.Video')</a>
                                            <a href="ui-general" class="dropdown-item">@lang('translation.General')</a>
                                            <a href="ui-colors" class="dropdown-item">@lang('translation.Colors')</a>
                                            <a href="ui-rating" class="dropdown-item">@lang('translation.Rating')</a>
                                            <a href="ui-notifications"
                                                class="dropdown-item">@lang('translation.Notifications')</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-pages" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon nav-icon" data-feather="grid"></i>
                                @lang('translation.Apps') <div class="arrow-down"></div>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="topnav-pages">

                                <a href="calendar" class="dropdown-item">@lang('translation.Calendar')</a>
                                <a href="chat" class="dropdown-item">@lang('translation.Chat')</a>
                                <div class="dropdown">
                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-email"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        @lang('translation.Email') <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-email">
                                        <a href="email-inbox" class="dropdown-item">@lang('translation.Inbox')</a>
                                        <a href="email-read" class="dropdown-item">@lang('translation.Read_Email')</a>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-ecommerce"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        @lang('translation.Ecommerce') <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-ecommerce">
                                        <a href="ecommerce-products"
                                            class="dropdown-item">@lang('translation.Products')</a>
                                        <a href="ecommerce-product-detail"
                                            class="dropdown-item">@lang('translation.Product_Detail')</a>
                                        <a href="ecommerce-orders" class="dropdown-item">@lang('translation.Orders')</a>
                                        <a href="ecommerce-customers"
                                            class="dropdown-item">@lang('translation.Customers')</a>
                                        <a href="ecommerce-cart" class="dropdown-item">@lang('translation.Cart')</a>
                                        <a href="ecommerce-checkout"
                                            class="dropdown-item">@lang('translation.Checkout')</a>
                                        <a href="ecommerce-shops" class="dropdown-item">@lang('translation.Shops')</a>
                                        <a href="ecommerce-add-product"
                                            class="dropdown-item">@lang('translation.Add_Product')</a>
                                    </div>
                                </div>

                                <div class="dropdown">
                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-invoice"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        @lang('translation.Invoices') <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-invoice">
                                        <a href="invoices-list"
                                            class="dropdown-item">@lang('translation.Invoice_List')</a>
                                        <a href="invoices-detail"
                                            class="dropdown-item">@lang('translation.Invoice_Detail')</a>
                                    </div>
                                </div>

                                <div class="dropdown">
                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-contact"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        @lang('translation.Contacts') <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-contact">
                                        <a href="contacts-grid" class="dropdown-item">@lang('translation.User_Grid')</a>
                                        <a href="contacts-list" class="dropdown-item">@lang('translation.User_List')</a>
                                        <a href="contacts-profile"
                                            class="dropdown-item">@lang('translation.Profile')</a>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-components" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon nav-icon" data-feather="server"></i>
                                @lang('translation.Components') <div class="arrow-down"></div>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="topnav-components">
                                <div class="dropdown">
                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-form"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        @lang('translation.Forms') <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-form">
                                        <a href="form-elements"
                                            class="dropdown-item">@lang('translation.Basic_Elements')</a>
                                        <a href="form-validation"
                                            class="dropdown-item">@lang('translation.Validation')</a>
                                        <a href="form-advanced"
                                            class="dropdown-item">@lang('translation.Advanced_Plugins')</a>
                                        <a href="form-editors" class="dropdown-item">@lang('translation.Editors')</a>
                                        <a href="form-uploads" class="dropdown-item">@lang('translation.File_Upload')</a>
                                        <a href="form-xeditable"
                                            class="dropdown-item">@lang('translation.Xeditable')</a>
                                        <a href="form-repeater" class="dropdown-item">@lang('translation.Repeater')</a>
                                        <a href="form-wizard" class="dropdown-item">@lang('translation.Wizard')</a>
                                        <a href="form-mask" class="dropdown-item">@lang('translation.Mask')</a>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-table"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        @lang('translation.Tables') <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-table">
                                        <a href="tables-basic"
                                            class="dropdown-item">@lang('translation.Bootstrap_Basic')</a>
                                        <a href="tables-datatable"
                                            class="dropdown-item">@lang('translation.Datatables')</a>
                                        <a href="tables-responsive"
                                            class="dropdown-item">@lang('translation.Responsive')</a>
                                        <a href="tables-editable"
                                            class="dropdown-item">@lang('translation.Editable')</a>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-charts"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        @lang('translation.Charts') <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-charts">
                                        <a href="charts-apex" class="dropdown-item">@lang('translation.Apex')</a>
                                        <a href="charts-chartjs" class="dropdown-item">@lang('translation.Chartjs')</a>
                                        <a href="charts-flot" class="dropdown-item">@lang('translation.Flot')</a>
                                        <a href="charts-knob" class="dropdown-item">@lang('translation.Jquery_Knob')</a>
                                        <a href="charts-sparkline"
                                            class="dropdown-item">@lang('translation.Sparkline')</a>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-icons"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        @lang('translation.Icons') <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-icons">
                                        <a href="icons-unicons" class="dropdown-item">Unicons</a>
                                        <a href="icons-feathericons" class="dropdown-item">Feather icons</a>
                                        <a href="icons-boxicons" class="dropdown-item">Boxicons</a>
                                        <a href="icons-materialdesign" class="dropdown-item">Material Design</a>
                                        <a href="icons-dripicons" class="dropdown-item">Dripicons</a>
                                        <a href="icons-fontawesome" class="dropdown-item">Font awesome</a>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-map"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        @lang('translation.Maps') <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-map">
                                        <a href="maps-google" class="dropdown-item">@lang('translation.Google')</a>
                                        <a href="maps-vector" class="dropdown-item">@lang('translation.Vector')</a>
                                        <a href="maps-leaflet" class="dropdown-item">@lang('translation.Leaflet')</a>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-more" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon nav-icon" data-feather="file"></i>
                                @lang('translation.Extra_pages') <div class="arrow-down"></div>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="topnav-more">

                                <div class="dropdown">
                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-auth"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        @lang('translation.Authentication') <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-auth">
                                        <a href="auth-login" class="dropdown-item">@lang('translation.Login')</a>
                                        <a href="auth-register" class="dropdown-item">@lang('translation.Register')</a>
                                        <a href="auth-recoverpw"
                                            class="dropdown-item">@lang('translation.Recover_Password')</a>
                                        <a href="auth-lock-screen"
                                            class="dropdown-item">@lang('translation.Lock_Screen')</a>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-utility"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        @lang('translation.Utility') <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-utility">
                                        <a href="pages-starter"
                                            class="dropdown-item">@lang('translation.Starter_Page')</a>
                                        <a href="pages-maintenance"
                                            class="dropdown-item">@lang('translation.Maintenance')</a>
                                        <a href="pages-comingsoon"
                                            class="dropdown-item">@lang('translation.Coming_Soon')</a>
                                        <a href="pages-timeline" class="dropdown-item">@lang('translation.Timeline')</a>
                                        <a href="pages-faqs" class="dropdown-item">@lang('translation.FAQs')</a>
                                        <a href="pages-pricing" class="dropdown-item">@lang('translation.Pricing')</a>
                                        <a href="pages-404" class="dropdown-item">@lang('translation.Error_404')</a>
                                        <a href="pages-500" class="dropdown-item">@lang('translation.Error_500')</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-layout" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon nav-icon" data-feather="layout"></i>
                                @lang('translation.Layouts') <div class="arrow-down"></div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="topnav-layout">
                                <a href="layouts-horizontal" class="dropdown-item">@lang('translation.Horizontal')</a>
                                <a href="index" class="dropdown-item">@lang('translation.Vertical')</a>
                                <a href="layouts-light-sidebar" class="dropdown-item">@lang('translation.Light_Sidebar')</a>
                                <a href="layouts-compact-sidebar" class="dropdown-item">@lang('translation.Compact_Sidebar')</a>
                                <a href="layouts-icon-sidebar" class="dropdown-item">@lang('translation.Icon_Sidebar')</a>
                                <a href="layouts-boxed" class="dropdown-item">@lang('translation.Boxed_Width')</a>
                                <a href="layouts-preloader" class="dropdown-item">@lang('translation.Preloader')</a>
                                <a href="layouts-colored-sidebar" class="dropdown-item">@lang('translation.Colored_Sidebar')</a>
                                <a href="layouts-scrollable" class="dropdown-item">@lang('translation.Scrollable')</a>
                            </div>
                        </li>

                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>
