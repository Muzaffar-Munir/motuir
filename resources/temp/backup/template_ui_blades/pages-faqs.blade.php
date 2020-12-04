@extends('layouts.master')
@section('title') @lang('translation.FAQs') @endsection
@section('content')
    @component('components.breadcrumb')
        @slot('pagetitle') Utility @endslot
        @slot('title') FAQS @endslot
    @endcomponent

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row justify-content-center mt-4">
                        <div class="col-lg-5">
                            <div class="text-center">
                                <h3>How can we help you?</h3>
                                <p class="text-muted">If several languages coalesce, the grammar of the resulting language
                                    is more simple and regular than that of the individual</p>

                                <div>
                                    <button type="button" class="btn btn-primary mt-2 mr-2 waves-effect waves-light">Email
                                        Us</button>
                                    <button type="button" class="btn btn-success mt-2 waves-effect waves-light">Send us a
                                        tweet</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-xl-8">
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

                        <div class="col-xl-4">
                            <img src="assets/images/faqs-img.png" alt="" class="img-fluid w-50 d-block mx-auto mt-4">

                            <div class="text-center mt-4">
                                <h4>Have any questions?</h4>
                                <p class="text-muted mb-5">Quis autem vel eum iure qui molestiae consequatur.</p>

                                <form>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="exampleInputText"
                                                    aria-describedby="namelHelp" placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <input type="email" class="form-control" id="exampleInputEmail1"
                                                    aria-describedby="emailHelp" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <select class="form-control" id="exampleFormControlSelect1">
                                                    <option>Your issues</option>
                                                    <option>Issues 1</option>
                                                    <option>Issues 2</option>
                                                    <option>Issues 3</option>
                                                    <option>Issues 4</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="exampleInputText"
                                                    aria-describedby="namelHelp" placeholder="Subject">
                                            </div>
                                            <div class="form-group app-label">
                                                <textarea name="comments" id="comments" rows="4" class="form-control"
                                                    placeholder="How can i help you?"></textarea>
                                            </div>
                                            <a href="#" type="submit" class="btn btn-primary btn-block">Submit <i
                                                    class="uil uil-message ml-1"></i></a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

@endsection
