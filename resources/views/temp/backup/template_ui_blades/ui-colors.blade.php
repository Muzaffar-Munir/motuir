@extends('layouts.master')
@section('title') @lang('translation.Colors') @endsection
@section('content')
    @component('components.breadcrumb')
        @slot('pagetitle') UI Elements @endslot
        @slot('title') Colors @endslot
    @endcomponent

    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="text-center">
                        <div class="mt-4">
                            <div class="avatar-md color-box bg-primary rounded-circle mx-auto"></div>
                        </div>
                        <div class="mt-4 pt-3">
                            <h5 class="mb-3">Primary</h5>
                            <p class="mb-2">Hex : #2a4fd7</p>
                            <p>RGB : rgb(42, 79, 215)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="text-center">
                        <div class="mt-4">
                            <div class="avatar-md color-box bg-success rounded-circle mx-auto"></div>
                        </div>
                        <div class="mt-4 pt-3">
                            <h5 class="mb-3">Success</h5>
                            <p class="mb-2">Hex : #34c38f</p>
                            <p>RGB : rgb(52, 195, 143)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="text-center">
                        <div class="mt-4">
                            <div class="avatar-md color-box bg-orange rounded-circle mx-auto"></div>
                        </div>
                        <div class="mt-4 pt-3">
                            <h5 class="mb-3">Orange</h5>
                            <p class="mb-2">Hex : #fa7f56</p>
                            <p>RGB : rgb(250, 127, 86)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="text-center">
                        <div class="mt-4">
                            <div class="avatar-md color-box bg-info rounded-circle mx-auto"></div>
                        </div>
                        <div class="mt-4 pt-3">
                            <h5 class="mb-3">Info</h5>
                            <p class="mb-2">Hex : #35d1df</p>
                            <p>RGB : rgb(53, 209, 223)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="text-center">
                        <div class="mt-4">
                            <div class="avatar-md color-box bg-warning rounded-circle mx-auto"></div>
                        </div>
                        <div class="mt-4 pt-3">
                            <h5 class="mb-3">Warning</h5>
                            <p class="mb-2">Hex : #e4a73e</p>
                            <p>RGB : rgb(228, 167, 62)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="text-center">
                        <div class="mt-4">
                            <div class="avatar-md color-box bg-danger rounded-circle mx-auto"></div>
                        </div>
                        <div class="mt-4 pt-3">
                            <h5 class="mb-3">Danger</h5>
                            <p class="mb-2">Hex : #fa3452</p>
                            <p>RGB : rgb(250, 52, 82)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="text-center">
                        <div class="mt-4">
                            <div class="avatar-md color-box bg-purple rounded-circle mx-auto"></div>
                        </div>
                        <div class="mt-4 pt-3">
                            <h5 class="mb-3">Purple</h5>
                            <p class="mb-2">Hex : #6f42c1</p>
                            <p>RGB : rgb(111, 66, 193)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="text-center">
                        <div class="mt-4">
                            <div class="avatar-md color-box bg-light rounded-circle mx-auto"></div>
                        </div>
                        <div class="mt-4 pt-3">
                            <h5 class="mb-3">Light</h5>
                            <p class="mb-2">Hex : #f5f6f8</p>
                            <p>RGB : rgb(245, 246, 248)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="text-center">
                        <div class="mt-4">
                            <div class="avatar-md color-box bg-secondary rounded-circle mx-auto"></div>
                        </div>
                        <div class="mt-4 pt-3">
                            <h5 class="mb-3">Secondary</h5>
                            <p class="mb-2">Hex : #74788d</p>
                            <p>RGB : rgb(116, 120, 141)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="text-center">
                        <div class="mt-4">
                            <div class="avatar-md color-box bg-dark rounded-circle mx-auto"></div>
                        </div>
                        <div class="mt-4 pt-3">
                            <h5 class="mb-3">Dark</h5>
                            <p class="mb-2">Hex : #343a40</p>
                            <p>RGB : rgb(52, 58, 64)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
@endsection
