@extends('layouts.master')
@section('title') Users Inbox @endsection
@section('css')
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('pageheading') Users Inbox @endslot
        @slot('pagetitle') Home @endslot
        @slot('title') Users Inbox @endslot
    @endcomponent
    
    <div class="row">
        <div class="col-lg-12">
            <div>
                <div class="float-left">
                <div class="tableButtons1 mb-3"></div>
                </div>
                <div class="float-right">
                    <form class="form-inline mb-3">
                        <select class="custom-select my-1" id="order-selectinput">
                            <option selected>All</option>
                            <option value="1">Active</option>
                            <option value="2">Suspended</option>
                        </select>
                    </form>

                </div>
                
            </div>
            <div class="table-responsive custom-table mb-4">
                <table class="table table-centered datatable1 dt-responsive nowrap table-card-list table-check"
                    style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">
                    <thead>
                        <tr class="bg-transparent">
                            <th style="width: 20px;">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" name="check" class="custom-control-input" id="checkAll"
                                        table-target="datatable-order" value="1">
                                    <label class="custom-control-label" for="checkAll"></label>
                                </div>
                            </th>
                            <th>User ID</th>
                            <th>Username</th>
                            <th>Created</th>
                            <th>Status</th>
                            <th>Balances</th>
                            <th>Device</th>
                            <th>IP</th>
                            <th>Last Trade</th>
                            <th>Listing</th>
                            <th>Rating</th>
                            <th>Entry</th>
                            <th>Total Trade</th>
                            <!-- <th style="width: 120px;">Action</th> -->
                        </tr>
                    </thead>
                    <tbody>

                        <tr class='clickable-row' data-href='{{route('support.users.inbox.read')}}' style="cursor: pointer;">                            
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="ordercheck1">
                                    <label class="custom-control-label" for="ordercheck1"></label>
                                </div>
                            </td>

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">DZ0112</a> </td>
                            
                            <td>Marcel Thomas</td>

                            <td>
                                24 March
                            </td>
                            <td>
                                <span class="badge badge-soft-danger ml-2">Pending</span>
                            </td>
                            <td>
                                $ 2345
                            </td>
                            
                            <td>Android 10.0</td>                            
                            <td>192.168.0.0.1</td>                            
                            <td>5 March</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Some</td>
                            <td>$ 56789</td>
                        </tr>

                        <tr data-href='{{route('support.users.inbox.read')}}' style="cursor: pointer;">
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="ordercheck2">
                                    <label class="custom-control-label" for="ordercheck2"></label>
                                </div>
                            </td>

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">DZ0112</a> </td>
                            
                            <td>Marcel Thomas</td>

                            <td>
                                24 March
                            </td>
                            <td>
                                <span class="badge badge-soft-danger ml-2">Pending</span>
                            </td>
                            <td>
                                $ 2345
                            </td>
                            
                            <td>Android 10.0</td>                            
                            <td>192.168.0.0.1</td>                            
                            <td>5 March</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Some</td>
                            <td>$ 56789</td>

                        </tr>

                        <tr data-href='{{route('support.users.inbox.read')}}' style="cursor: pointer;">
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="ordercheck3">
                                    <label class="custom-control-label" for="ordercheck3"></label>
                                </div>
                            </td>

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">DZ0112</a> </td>
                            
                            <td>Marcel Thomas</td>

                            <td>
                                24 March
                            </td>
                            <td>
                                <span class="badge badge-soft-danger ml-2">Pending</span>
                            </td>
                            <td>
                                $ 2345
                            </td>
                            
                            <td>Android 10.0</td>                            
                            <td>192.168.0.0.1</td>                            
                            <td>5 March</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Some</td>
                            <td>$ 56789</td>

                        </tr>

                        <tr data-href='{{route('support.users.inbox.read')}}' style="cursor: pointer;">
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="ordercheck4">
                                    <label class="custom-control-label" for="ordercheck4"></label>
                                </div>
                            </td>

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">DZ0112</a> </td>
                            
                            <td>Marcel Thomas</td>

                            <td>
                                24 March
                            </td>
                            <td>
                                <span class="badge badge-soft-danger ml-2">Pending</span>
                            </td>
                            <td>
                                $ 2345
                            </td>
                            
                            <td>Android 10.0</td>                            
                            <td>192.168.0.0.1</td>                            
                            <td>5 March</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Some</td>
                            <td>$ 56789</td>

                        </tr>

                        <tr data-href='{{route('support.users.inbox.read')}}' style="cursor: pointer;">
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="ordercheck5">
                                    <label class="custom-control-label" for="ordercheck5"></label>
                                </div>
                            </td>

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">DZ0112</a> </td>
                            
                            <td>Marcel Thomas</td>

                            <td>
                                24 March
                            </td>
                            <td>
                                <span class="badge badge-soft-danger ml-2">Pending</span>
                            </td>
                            <td>
                                $ 2345
                            </td>
                            
                            <td>Android 10.0</td>                            
                            <td>192.168.0.0.1</td>                            
                            <td>5 March</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Some</td>
                            <td>$ 56789</td>

                        </tr>

                        <tr data-href='{{route('support.users.inbox.read')}}' style="cursor: pointer;">
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="ordercheck6">
                                    <label class="custom-control-label" for="ordercheck6"></label>
                                </div>
                            </td>

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">DZ0112</a> </td>
                            
                            <td>Marcel Thomas</td>

                            <td>
                                24 March
                            </td>
                            <td>
                                <span class="badge badge-soft-danger ml-2">Pending</span>
                            </td>
                            <td>
                                $ 2345
                            </td>
                            
                            <td>Android 10.0</td>                            
                            <td>192.168.0.0.1</td>                            
                            <td>5 March</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Some</td>
                            <td>$ 56789</td>

                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- end table -->
        </div>
    </div>
    <!-- end row -->

@endsection
@section('script')

    <script>
        jQuery(document).ready(function($) {
            $(".clickable-row").click(function() {
                window.location = $(this).data("href");
            });
        });
    </script>
@endsection