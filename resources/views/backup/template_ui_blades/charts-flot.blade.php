@extends('layouts.master')
@section('title') @lang('translation.Flot') @endsection
@section('content')
    @component('components.breadcrumb')
        @slot('pagetitle') Charts @endslot
        @slot('title') Flot charts @endslot
    @endcomponent

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title mb-4">Multiple Statistics</h4>

                    <div id="website-stats" class="flot-charts flot-charts-height"></div>

                </div>
            </div>
        </div> <!-- end col -->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Realtime Statistics</h4>

                    <div id="flotRealTime" class="flot-charts flot-charts-height"></div>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->


    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title mb-4">Donut Pie</h4>

                    <div id="donut-chart">
                        <div id="donut-chart-container" class="flot-charts flot-charts-height">
                        </div>
                    </div>

                </div>
            </div>
        </div> <!-- end col -->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title mb-4">Pie Chart</h4>

                    <div id="pie-chart">
                        <div id="pie-chart-container" class="flot-charts flot-charts-height">
                        </div>
                    </div>

                </div>
            </div>
        </div> <!-- end col -->
    </div>
    <!-- end row -->

@endsection
@section('script')
    <!-- flot-charts -->
    <script src="{{ URL::asset('/assets/libs/flot-charts/flot-charts.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/flot-curvedlines/flot-curvedlines.min.js') }}"></script>
    <!-- init js -->
    <script src="{{ URL::asset('/assets/js/pages/flot.init.js') }}"></script>
@endsection
