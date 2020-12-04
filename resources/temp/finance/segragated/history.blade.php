@extends('layouts.master')
@section('title') Report history @endsection
@section('css')

@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('pageheading') Report history @endslot
        @slot('pagetitle') Segragate @endslot
        @slot('title') Report history @endslot
    @endcomponent

        <div class="row mt-3">
            <div class="col-md-2">
            @include('finance.partials.summary',
            [
                'title' => 'Total Users',
                'value' => '234',
                'icon' => 'users',
                'color' => 'alert',

            ])
            </div>
            <div class="col-md-3">
            @include('finance.partials.summary',
            [
                'title' => 'Total Balanaces',
                'value' => '1234123',
                'icon' => 'bar-chart-2',
                'color' => 'primary',

            ])
            </div>
            <div class="col-md-2">
            @include('finance.partials.summary',
            [
                'title' => 'Total Crypto',
                'value' => '9876533',
                'icon' => 'pie-chart',
                'color' => 'danger',

            ])
            </div>
            <div class="col-md-2">
            @include('finance.partials.summary',
            [
                'title' => 'Grand Total',
                'value' => '886234',
                'icon' => 'trending-up',
                'color' => 'success',

            ])
            </div>
            <div class="col-md-3">
                @include('finance.partials.summary',
                [
                    'title' => 'Actual Bank Account',
                    'value' => '886234',
                    'icon' => 'trending-down',
                    'color' => 'alert',

                ])
            </div>
        </div>

    <div class="row">
        <div class="col-lg-12">

            <div class="table-responsive custom-table mb-4">
                <div class="tableButtons1 mb-3"></div>
                <table class="table table-centered datatable1 dt-responsive nowrap table-check table-card-list"
                    style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">
                    <thead>
                        <tr class="bg-transparent">
                            <th style="width: 24px;">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="checkAll">
                                    <label class="custom-control-label" for="checkAll"></label>
                                </div>
                            </th>
                            <th>Report ID</th>
                            <th>Date</th>
                            <th>Adjustment</th>
                            <th>Amount</th>
                            <th>By</th>
                            <th>Bank statement</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="invoicecheck1">
                                    <label class="custom-control-label" for="invoicecheck1"></label>
                                </div>
                            </td>
                            <td>#er567u</td>
                            <td>
                                12 Oct, 2020
                            </td>
                            <td>$678</td>
                            <td>$678</td>
                            <td>Connie Franco</td>
                            <td><span class="badge badge-success">Yes</span></td>
                            <td>
                                <button class="btn btn-primary">Details</button>
                                <button class="btn btn-warning">Download</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- end row -->

@endsection
@section('script')

@endsection
