@extends('layouts.master')
@section('title') Email - Read @endsection
@section('css')
    <!-- Summernote css -->
    <link href="{{ URL::asset('/assets/libs/summernote/summernote.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('pageheading') Email @endslot
        @slot('pagetitle') Email @endslot
        @slot('title') Read @endslot
    @endcomponent

    <div class="row">
        <div class="col-12">
            
            <!-- Left sidebar -->
            @include('support.email.partials.sidebar',
            [
                'data' => 'data'
            ])
            <!-- End Left sidebar -->

            <!-- Right Sidebar -->
            <div class="email-rightbar mb-3">

                <div class="card">
                    <!-- toolbar -->

                    @include('support.email.partials.toolbar',
                    [
                        'data' => 'data'
                    ])

                    <!-- toolbar -->

                    <div class="card-body">
                        <div class="media mb-4">
                            <img class="d-flex mr-3 rounded-circle avatar-sm"
                                src="{{ URL::asset('/assets/images/users/avatar-2.jpg') }}" alt="Generic placeholder image">
                            <div class="media-body">
                                <h5 class="font-size-14 my-1">Humberto D. Champion</h5>
                                <small class="text-muted">support@domain.com</small>
                            </div>
                        </div>

                        <h4 class="mt-0 font-size-16">This Week's Top Stories</h4>

                        <p>Dear Lorem Ipsum,</p>
                        <p>Praesent dui ex, dapibus eget mauris ut, finibus vestibulum enim. Quisque arcu leo, facilisis in
                            fringilla id, luctus in tortor. Nunc vestibulum est quis orci varius viverra. Curabitur dictum
                            volutpat massa vulputate molestie. In at felis ac velit maximus convallis.
                        </p>
                        <p>Sed elementum turpis eu lorem interdum, sed porttitor eros commodo. Nam eu venenatis tortor, id
                            lacinia diam. Sed aliquam in dui et porta. Sed bibendum orci non tincidunt ultrices. Vivamus
                            fringilla, mi lacinia dapibus condimentum, ipsum urna lacinia lacus, vel tincidunt mi nibh sit
                            amet lorem.</p>
                        <p>Sincerly,</p>
                        <hr />

                        <div class="row">
                            <div class="col-xl-2 col-6">
                                <div class="card border shadow-none">
                                    <img class="card-img-top img-fluid"
                                        src="{{ URL::asset('/assets/images/small/img-3.jpg') }}" alt="Card image cap">
                                    <div class="py-2 text-center">
                                        <a href="" class="font-weight-medium">Download</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-6">
                                <div class="card border shadow-none">
                                    <img class="card-img-top img-fluid"
                                        src="{{ URL::asset('/assets/images/small/img-4.jpg') }}" alt="Card image cap">
                                    <div class="py-2 text-center">
                                        <a href="" class="font-weight-medium">Download</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button type="button" class="btn btn-secondary waves-effect waves-light" data-toggle="modal" data-target="#composemodal">
                            <i class="mdi mdi-reply"></i> Reply
                        </button>
                    </div>

                </div>
            </div>
            <!-- card -->

        </div>
        <!-- end Col-9 -->

    </div>
    <!-- end row -->

    @include('support.email.partials.create_folder_modal',
    [
        'data' => 'data'
    ])

    @include('support.email.partials.new_email_modal',
    [
        'data' => 'data'
    ])

    @include('support.email.partials.settings_modal',
    [
        'data' => 'data'
    ])


@endsection
@section('script')
    <!-- summernote Js-->
    <script src="{{ URL::asset('/assets/libs/summernote/summernote.min.js') }}"></script>
    <!-- init js -->
    <script src="{{ URL::asset('/assets/js/pages/email-summernote.init.js') }}"></script>
    
    <script>
        $(document).ready(function(){

            $("#checkAll").click(function(){

                if($('#checkAllID').prop('checked')){
                    
                    $('input:checkbox').prop('checked', true);

                }else{

                    $('input:checkbox').prop('checked', false);
                }

            });

            $(".responder_button").click(function(){

                if($('.responder_button').prop('checked')){
                    
                    $('.responder_textarea').attr('disabled', false);

                }else{

                    $('.responder_textarea').attr('disabled', true);
                }

            });
            

        // ticket_sidebar

        var url = window.location.href;

		//console.log(url);

		$('.ticket_sidebar').removeClass('active');

		$("[href='" + url + "']").addClass('active');

        });
    </script>
@endsection
