@extends('layouts.master')
@section('title') Privilege List @endsection
@section('css')

@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('pagetitle') Admin @endslot
        @slot('title') Privilege List @endslot
    @endcomponent

    <div class="row">
        <div class="col-md-12">
        
            
            <div class="card">
                <div class="card-body">

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs nav-tabs-custom" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#home1" role="tab">
                                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                <span class="d-none d-sm-block">User</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#profile1" role="tab">
                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                <span class="d-none d-sm-block">Admin</span>
                            </a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content p-3 text-muted">
                        <div class="tab-pane active" id="home1" role="tabpanel">
                            <div class="tableButtons1 mb-3"></div>
                            
                            <table class="datatable1 table dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Mobile</th>
                                        <th>Address</th>
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
                        <div class="tab-pane" id="profile1" role="tabpanel">

                            <div class="tableButtons2 mb-3"></div>
                        
                            <table class="datatable2 table dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Mobile</th>
                                        <th>Address</th>
                                        <th>By</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Nixon</td>
                                        <td>Architect</td>
                                        <td> Architect</td>
                                        <td>Reason</td>
                                        <td>612234</td>
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