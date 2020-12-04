@extends('layouts.master')
@section('title') Tickets - {{$title}} @endsection
@section('css')
<!-- Summernote css -->
<link href="{{ URL::asset('/assets/libs/summernote/summernote.min.css') }}" rel="stylesheet" type="text/css" />
<style>
    .no_hover:hover {
        background: transparent !important;
    }

    .email_dropdown {
        line-height: 20px;
    }

    .notes {
        font-size: 1.2em;
        cursor: pointer;
    }
</style>
@endsection
@section('content')
@component('components.breadcrumb')
@slot('pageheading') Tickets @endslot
@slot('pagetitle') Tickets @endslot
@slot('title') {{$title}} @endslot
@endcomponent

<div class="row">
    <div class="col-12">

        <!-- Left sidebar -->
        @include('support.tickets.partials.sidebar',
        [
        'data' => 'data'
        ])
        <!-- End Left sidebar -->


        <!-- Right Sidebar -->
        <div class="email-rightbar mb-3">

            <div class="card ">
                <ul class="message-list">
                    <li class="no_hover mt-3 mb-2">
                        <div id="checkAll" class="col-mail col-mail-1">
                            <div class="checkbox-wrapper-mail">
                                <input type="checkbox" id="checkAllID">
                                <label for="checkAllID" class="toggle"></label>
                            </div>
                            Check All &nbsp;&nbsp;&nbsp;
                            @include('support.tickets.partials.action_button',
                            [
                            'data' => 'data'
                            ])
                        </div>

                    </li>

                    <li>
                        <div class="col-mail col-mail-1">
                            <div class="checkbox-wrapper-mail">
                                <input type="checkbox" id="chk19">
                                <label for="chk19" class="toggle"></label>
                            </div>
                            <a href="{{route('support.tickets.read')}}" class="title">Peter, me (3)</a>
                        </div>
                        <div class="col-mail col-mail-2">
                            <a href="{{route('support.tickets.read')}}" class="subject">Hello – <span class="teaser">Trip home from Colombo has been
                                    arranged, then Jenna will come get me from Stockholm. :)</span>
                            </a>
                            <div class="date" style="padding-left: 25px;"> <span data-toggle="modal" data-target="#notes" data-toggle="tooltip" data-placement="top" title="Note" style="padding-right:40px" class="star-toggle fas fa-sticky-note text-warning notes"></span> Mar 6</div>

                        </div>
                    </li>

                    <li>
                        <div class="col-mail col-mail-1">
                            <div class="checkbox-wrapper-mail">
                                <input type="checkbox" id="chk20">
                                <label for="chk20" class="toggle"></label>
                            </div>
                            <a href="#" class="title">me, Susanna (7)</a>
                        </div>
                        <div class="col-mail col-mail-2">
                            <a href="#" class="subject"><span class="badge-warning badge mr-2">Freelance</span>Since you
                                asked... and i'm
                                inconceivably bored at the train station –
                                <span class="teaser">Alright thanks. I'll have to re-book that somehow, i'll get back to
                                    you.</span>
                            </a>
                            <div class="date" style="padding-left: 25px;"> <span data-toggle="modal" data-target="#notes" data-toggle="tooltip" data-placement="top" title="Note" style="padding-right:40px" class="star-toggle fas fa-sticky-note text-warning notes"></span> Mar 6</div>
                        </div>
                    </li>

                    <li>
                        <div class="col-mail col-mail-1">
                            <div class="checkbox-wrapper-mail">
                                <input type="checkbox" id="chk6">
                                <label for="chk6" class="toggle"></label>
                            </div>
                            <a href="#" class="title">Web Support Dennis</a>
                        </div>
                        <div class="col-mail col-mail-2">
                            <a href="#" class="subject">Re: New mail settings –
                                <span class="teaser">Will you answer him asap?</span>
                            </a>
                            <div class="date" style="padding-left: 25px;"> <span data-toggle="modal" data-target="#notes" data-toggle="tooltip" data-placement="top" title="Note" style="padding-right:40px" class="star-toggle fas fa-sticky-note text-warning notes"></span> Mar 6</div>
                        </div>
                    </li>
                    <li>
                        <div class="col-mail col-mail-1">
                            <div class="checkbox-wrapper-mail">
                                <input type="checkbox" id="chk7">
                                <label for="chk7" class="toggle"></label>
                            </div>
                            <a href="#" class="title">me, Peter (2)</a>
                        </div>
                        <div class="col-mail col-mail-2">
                            <a href="#" class="subject"><span class="badge-info badge mr-2">Support</span>Off on
                                Thursday -
                                <span class="teaser">Eff that place, you might as well stay here with us instead! Sent
                                    from my iPhone 4 4 mar 2014 at 5:55 pm</span>
                            </a>
                            <div class="date">Mar 4</div>
                        </div>
                    </li>
                    <li>
                        <div class="col-mail col-mail-1">
                            <div class="checkbox-wrapper-mail">
                                <input type="checkbox" id="chk8">
                                <label for="chk8" class="toggle"></label>
                            </div>
                            <a href="#" class="title">Medium</a>
                        </div>
                        <div class="col-mail col-mail-2">
                            <a href="#" class="subject"><span class="badge-primary badge mr-2">Social</span>This Week's
                                Top Stories –
                                <span class="teaser">Our top pick for you on Medium this week The Man Who Destroyed
                                    America’s Ego</span>
                            </a>
                            <div class="date">Feb 28</div>
                        </div>
                    </li>
                    <li>
                        <div class="col-mail col-mail-1">
                            <div class="checkbox-wrapper-mail">
                                <input type="checkbox" id="chk9">
                                <label for="chk9" class="toggle"></label>
                            </div>
                            <a href="#" class="title">Death to Stock</a>
                        </div>
                        <div class="col-mail col-mail-2">
                            <a href="#" class="subject">Montly High-Res Photos –
                                <span class="teaser">To create this month's pack, we hosted a party with local musician
                                    Jared Mahone here in Columbus, Ohio.</span>
                            </a>
                            <div class="date">Feb 28</div>
                        </div>
                    </li>

                    <li class="unread">
                        <div class="col-mail col-mail-1">
                            <div class="checkbox-wrapper-mail">
                                <input type="checkbox" id="chk3">
                                <label for="chk3" class="toggle"></label>
                            </div>
                            <a href="#" class="title">Randy, me (5)</a>
                        </div>
                        <div class="col-mail col-mail-2">
                            <a href="#" class="subject"><span class="badge-success badge mr-2">Family</span>Last pic
                                over my village –
                                <span class="teaser">Yeah i'd like that! Do you remember the video you showed me of your
                                    train ride between Colombo and Kandy? The one with the mountain view? I would love
                                    to see that one again!</span>
                            </a>
                            <div class="date">5:01 am</div>
                        </div>
                    </li>
                    <li>
                        <div class="col-mail col-mail-1">
                            <div class="checkbox-wrapper-mail">
                                <input type="checkbox" id="chk4">
                                <label for="chk4" class="toggle"></label>
                            </div>
                            <a href="#" class="title">Andrew Zimmer</a>
                        </div>
                        <div class="col-mail col-mail-2">
                            <a href="#" class="subject">Mochila Beta: Subscription Confirmed
                                – <span class="teaser">You've been confirmed! Welcome to the ruling class of the inbox.
                                    For your records, here is a copy of the information you submitted to us...</span>
                            </a>
                            <div class="date">Mar 8</div>
                        </div>
                    </li>
                    <li>
                        <div class="col-mail col-mail-1">
                            <div class="checkbox-wrapper-mail">
                                <input type="checkbox" id="chk5">
                                <label for="chk5" class="toggle"></label>
                            </div>
                            <a href="#" class="title">Infinity HR</a>
                        </div>
                        <div class="col-mail col-mail-2">
                            <a href="#" class="subject">Sveriges Hetaste sommarjobb –
                                <span class="teaser">Hej Nicklas Sandell! Vi vill bjuda in dig till "First tour 2014",
                                    ett rekryteringsevent som erbjuder jobb på 16 semesterorter iSverige.</span>
                            </a>
                            <div class="date">Mar 8</div>
                        </div>
                    </li>
                    <li>
                        <div class="col-mail col-mail-1">
                            <div class="checkbox-wrapper-mail">
                                <input type="checkbox" id="chk10">
                                <label for="chk10" class="toggle"></label>
                            </div>
                            <a href="#" class="title">Revibe</a>
                        </div>
                        <div class="col-mail col-mail-2">
                            <a href="#" class="subject"><span class="badge-danger badge mr-2">Friends</span>Weekend on
                                Revibe –
                                <span class="teaser">Today's Friday and we thought maybe you want some music inspiration
                                    for the weekend. Here are some trending tracks and playlists we think you should
                                    give a listen!</span>
                            </a>
                            <div class="date">Feb 27</div>
                        </div>
                    </li>
                    <li>
                        <div class="col-mail col-mail-1">
                            <div class="checkbox-wrapper-mail">
                                <input type="checkbox" id="chk11">
                                <label for="chk11" class="toggle"></label>
                            </div>
                            <a href="#" class="title">Erik, me (5)</a>
                        </div>
                        <div class="col-mail col-mail-2">
                            <a href="#" class="subject">Regarding our meeting –
                                <span class="teaser">That's great, see you on Thursday!</span>
                            </a>
                            <div class="date">Feb 24</div>
                        </div>
                    </li>
                    <li>
                        <div class="col-mail col-mail-1">
                            <div class="checkbox-wrapper-mail">
                                <input type="checkbox" id="chk12">
                                <label for="chk12" class="toggle"></label>
                            </div>
                            <a href="#" class="title">KanbanFlow</a>
                        </div>
                        <div class="col-mail col-mail-2">
                            <a href="#" class="subject"><span class="badge-primary badge mr-2">Social</span>Task
                                assigned: Clone ARP's website
                                – <span class="teaser">You have been assigned a task by Alex@Work on the board
                                    Web.</span>
                            </a>
                            <div class="date">Feb 24</div>
                        </div>
                    </li>
                    <li>
                        <div class="col-mail col-mail-1">
                            <div class="checkbox-wrapper-mail">
                                <input type="checkbox" id="chk13">
                                <label for="chk13" class="toggle"></label>
                            </div>
                            <a href="#" class="title">Tobias Berggren</a>
                        </div>
                        <div class="col-mail col-mail-2">
                            <a href="#" class="subject">Let's go fishing! –
                                <span class="teaser">Hey, You wanna join me and Fred at the lake tomorrow? It'll be
                                    awesome.</span>
                            </a>
                            <div class="date">Feb 23</div>
                        </div>
                    </li>
                    <li>
                        <div class="col-mail col-mail-1">
                            <div class="checkbox-wrapper-mail">
                                <input type="checkbox" id="chk14">
                                <label for="chk14" class="toggle"></label>
                            </div>
                            <a href="#" class="title">Charukaw, me (7)</a>
                        </div>
                        <div class="col-mail col-mail-2">
                            <a href="#" class="subject">Hey man – <span class="teaser">Nah man sorry i don't. Should i
                                    get it?</span>
                            </a>
                            <div class="date">Feb 23</div>
                        </div>
                    </li>
                    <li class="unread">
                        <div class="col-mail col-mail-1">
                            <div class="checkbox-wrapper-mail">
                                <input type="checkbox" id="chk15">
                                <label for="chk15" class="toggle"></label>
                            </div>
                            <a href="#" class="title">me, Peter (5)</a>
                        </div>
                        <div class="col-mail col-mail-2">
                            <a href="#" class="subject"><span class="badge-info badge mr-2">Support</span>Home again! –
                                <span class="teaser">That's just perfect! See you tomorrow.</span>
                            </a>
                            <div class="date">Feb 21</div>
                        </div>
                    </li>
                    <li>
                        <div class="col-mail col-mail-1">
                            <div class="checkbox-wrapper-mail">
                                <input type="checkbox" id="chk16">
                                <label for="chk16" class="toggle"></label>
                            </div>
                            <a href="#" class="title">Stack Exchange</a>
                        </div>
                        <div class="col-mail col-mail-2">
                            <a href="#" class="subject">1 new items in your Stackexchange inbox
                                – <span class="teaser">The following items were added to your Stack Exchange global
                                    inbox since you last checked it.</span>
                            </a>
                            <div class="date">Feb 21</div>
                        </div>
                    </li>
                    <li>
                        <div class="col-mail col-mail-1">
                            <div class="checkbox-wrapper-mail">
                                <input type="checkbox" id="chk17">
                                <label for="chk17" class="toggle"></label>
                            </div>
                            <a href="#" class="title">Google Drive Team</a>
                        </div>
                        <div class="col-mail col-mail-2">
                            <a href="#" class="subject">You can now use your storage in Google
                                Drive – <span class="teaser">Hey Nicklas Sandell! Thank you for purchasing extra storage
                                    space in Google Drive.</span>
                            </a>
                            <div class="date">Feb 20</div>
                        </div>
                    </li>
                    <li>
                        <div class="col-mail col-mail-1">
                            <div class="checkbox-wrapper-mail">
                                <input type="checkbox" id="chk18">
                                <label for="chk18" class="toggle"></label>
                            </div>
                            <a href="#" class="title">me, Susanna (11)</a>
                        </div>
                        <div class="col-mail col-mail-2">
                            <a href="#" class="subject">Train/Bus – <span class="teaser">Yes ok, great! I'm not stuck in
                                    Stockholm anymore, we're making progress.</span>
                            </a>
                            <div class="date">Feb 19</div>
                        </div>
                    </li>

                </ul>

            </div> <!-- card -->

            <div class="row">
                <div class="col-7">
                    Showing 1 - 20 of 1,524
                </div>
                <div class="col-5">
                    <div class="btn-group float-right">
                        <button type="button" class="btn btn-sm btn-success waves-effect"><i class="fa fa-chevron-left"></i></button>
                        <button type="button" class="btn btn-sm btn-success waves-effect"><i class="fa fa-chevron-right"></i></button>
                    </div>
                </div>
            </div>
        </div> <!-- end Col-9 -->
    </div>
</div><!-- End row -->

@include('support.tickets.partials.note_modal',
[
'data' => 'any data'
])

@include('support.tickets.partials.new_ticket_modal',
[
'data' => 'any data'
])

@include('support.tickets.partials.add_note_modal',
[
'data' => 'any data'
])


@endsection
@section('script')
<!-- summernote Js-->
<script src="{{ URL::asset('/assets/libs/summernote/summernote.min.js') }}"></script>
<!-- init js -->
<script src="{{ URL::asset('/assets/js/pages/email-summernote.init.js') }}"></script>

<script>
    $(document).ready(function() {

        $("#checkAll").click(function() {

            console.log(1);

            if ($('#checkAllID').prop('checked')) {

                $('input:checkbox').prop('checked', true);

            } else {

                $('input:checkbox').prop('checked', false);
            }

        });

    });

    // ticket_sidebar

    var url = window.location.href;

    //console.log(url);

    $('.ticket_sidebar').removeClass('active');

    $("[href='" + url + "']").addClass('active');
    $(document).ready(function() {
        $('.summernote').on('summernote.change', function(we, contents, $editable) {
            console.log(contents);
            $('.description').val(contents);
        });

    });
</script>
@endsection
