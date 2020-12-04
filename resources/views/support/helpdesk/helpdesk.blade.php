@extends('layouts.master')
@section('title') Helpdesk @endsection
@section('css')
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('pageheading') Helpdesk @endslot
        @slot('pagetitle') Home @endslot
        @slot('title') Helpdesk @endslot
    @endcomponent
    

    <div class="row">        
        <div class="col-xl-2 col-md-2">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h5 class="mb-1 font-size-18 font-weight-semibold">12234</h5>
                            <p class="text-muted font-size-13 mb-0">Today Messages</p>
                        </div>
                    </div> 
                    <!-- end row-->
                </div>
            </div>
        </div>       
        <div class="col-xl-2 col-md-2">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h5 class="mb-1 font-size-18 font-weight-semibold">12312</h5>
                            <p class="text-muted font-size-13 mb-0">Past 7 Days</p>
                        </div>
                    </div> 
                    <!-- end row-->
                </div>
            </div>
        </div>  
        <div class="col-xl-2 col-md-2">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h5 class="mb-1 font-size-18 font-weight-semibold">126</h5>
                            <p class="text-muted font-size-13 mb-0">Past 30 Days</p>
                        </div>
                    </div> 
                    <!-- end row-->
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-3">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h5 class="mb-1 font-size-18 font-weight-semibold">56789</h5>
                            <p class="text-muted font-size-13 mb-0">Total Users</p>
                        </div>
                    </div> 
                    <!-- end row-->
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-3">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h5 class="mb-1 font-size-18 font-weight-semibold">56789</h5>
                            <p class="text-muted font-size-13 mb-0">Total Messages</p>
                        </div>
                    </div> 
                    <!-- end row-->
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body col-md-6" style="margin: 0 auto;">
                    <input type="text" placeholder="Search Message... to filter messages by a user type U:username" class="form-control form-lg">
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#Mods" role="tab">
                                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                <span class="d-none d-sm-block">Mods</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#Stats" role="tab">
                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                <span class="d-none d-sm-block">Stats</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#Reported" role="tab">
                                <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                                <span class="d-none d-sm-block">Reported</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#Kicked" role="tab">
                                <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                                <span class="d-none d-sm-block">Kicked</span>
                            </a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content p-3 text-muted">
                        <div class="tab-pane active" id="Mods" role="tabpanel">
                            <div class="tableButtons1 mb-3"></div>
                            <table class="datatable1 table dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>Username</th>
                                        <th>Since</th>
                                        <th>Today Message</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>61</td>
                                        <td>
                                            <button type="button" class="btn btn-danger waves-effect waves-light">Revoke</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>61</td>
                                        <td>
                                            <button type="button" class="btn btn-danger waves-effect waves-light">Revoke</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>61</td>
                                        <td>
                                            <button type="button" class="btn btn-danger waves-effect waves-light">Revoke</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        
                        <div class="tab-pane" id="Stats" role="tabpanel">
                            <div class="tableButtons2 mb-3"></div>
                            <table class="datatable2 table dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>New User</th>
                                        <th>Most Active</th>
                                        <th>Most Mention</th>
                                        <th>Most Topic</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>61</td>
                                        <td>System Architect</td>
                                    </tr>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>61</td>
                                        <td>System Architect</td>
                                    </tr>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>61</td>
                                        <td>System Architect</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        
                        <div class="tab-pane" id="Reported" role="tabpanel">
                            <div class="tableButtons3 mb-3"></div>
                            <table class="datatable3 table dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>Username</th>
                                        <th>Created</th>
                                        <th>Case</th>
                                        <th>By</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>System Architect</td>
                                        <td>61</td>
                                        <td>
                                            <button type="button" class="btn btn-danger waves-effect waves-light">Kickout</button>
                                            <button type="button" class="btn btn-warning waves-effect waves-light">Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>61</td>
                                        <td>
                                            <button type="button" class="btn btn-danger waves-effect waves-light">Kickout</button>
                                            <button type="button" class="btn btn-warning waves-effect waves-light">Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>61</td>
                                        <td>61</td>
                                        <td>
                                            <button type="button" class="btn btn-danger waves-effect waves-light">Kickout</button>
                                            <button type="button" class="btn btn-warning waves-effect waves-light">Delete</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        
                        <div class="tab-pane" id="Kicked" role="tabpanel">
                            <div class="tableButtons4 mb-3"></div>
                            <table class="datatable4 table dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>Username</th>
                                        <th>Created</th>
                                        <th>Kicked Date</th>
                                        <th>Reason</th>
                                        <th>By</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>System Architect</td>
                                        <td>Reason</td>
                                        <td>61</td>
                                        <td>
                                            <button type="button" class="btn btn-success waves-effect waves-light">Restore</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Reason</td>
                                        <td>61</td>
                                        <td>
                                            <button type="button" class="btn btn-success waves-effect waves-light">Restore</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>61</td>
                                        <td>Reason</td>
                                        <td>61</td>
                                        <td>
                                            <button type="button" class="btn btn-success waves-effect waves-light">Restore</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

@endsection
@section('script')



@endsection