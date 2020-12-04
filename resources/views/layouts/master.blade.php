<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('layouts.title-meta')
    
    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Summernote css -->
    <link href="{{ URL::asset('/assets/libs/summernote/summernote.min.css') }}" rel="stylesheet" type="text/css" />

    @include('layouts.head')
</head>

@section('body')
    <body data-sidebar="dark">
@show
    <!-- Begin page -->
    <div id="layout-wrapper">
        @include('layouts.topbar')
        @include('layouts.sidebar')
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    @yield('content')
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
            @include('layouts.footer')
        </div>
        <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->

    <!-- Right Sidebar -->
    @include('layouts.right-sidebar')
    <!-- /Right-bar -->

    <!-- JAVASCRIPT -->
    @include('layouts.vendor-scripts')

    <!-- datatables-->
    <script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/jszip/jszip.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/pdfmake/pdfmake.min.js') }}"></script>

    
    <!-- summernote Js-->
    <script src="{{ URL::asset('/assets/libs/summernote/summernote.min.js') }}"></script>
    <!-- init js -->
    <script src="{{ URL::asset('/assets/js/pages/email-summernote.init.js') }}"></script>

    <script>

    $(document).ready(function () {

        var table1 = $('.datatable1').DataTable({
            lengthChange: true,
            buttons: ['excel', 'pdf', 'colvis'],
            "language": {
                "paginate": {
                    "previous": "<i class='mdi mdi-chevron-left'>",
                    "next": "<i class='mdi mdi-chevron-right'>"
                }
            },
            "drawCallback": function drawCallback() {
                $('.dataTables_paginate > .pagination').addClass('pagination-rounded');
            }
        });
        
        table1.buttons().container().appendTo('.tableButtons1');

        var table2 = $('.datatable2').DataTable({
            lengthChange: true,
            buttons: ['excel', 'pdf', 'colvis'],
            "language": {
                "paginate": {
                    "previous": "<i class='mdi mdi-chevron-left'>",
                    "next": "<i class='mdi mdi-chevron-right'>"
                }
            },
            "drawCallback": function drawCallback() {
                $('.dataTables_paginate > .pagination').addClass('pagination-rounded');
            }
        });

        table2.buttons().container().appendTo('.tableButtons2');

        var table3 = $('.datatable3').DataTable({
            lengthChange: true,
            buttons: ['excel', 'pdf', 'colvis'],
            "language": {
                "paginate": {
                    "previous": "<i class='mdi mdi-chevron-left'>",
                    "next": "<i class='mdi mdi-chevron-right'>"
                }
            },
            "drawCallback": function drawCallback() {
                $('.dataTables_paginate > .pagination').addClass('pagination-rounded');
            }
        });

        table3.buttons().container().appendTo('.tableButtons3');

        var table4 = $('.datatable4').DataTable({
            lengthChange: true,
            buttons: ['excel', 'pdf', 'colvis'],
            "language": {
                "paginate": {
                    "previous": "<i class='mdi mdi-chevron-left'>",
                    "next": "<i class='mdi mdi-chevron-right'>"
                }
            },
            "drawCallback": function drawCallback() {
                $('.dataTables_paginate > .pagination').addClass('pagination-rounded');
            }
        });

        table4.buttons().container().appendTo('.tableButtons4');       


        var datatable_scroll = $('.datatable_scroll').DataTable({
            lengthChange: true,
            "scrollX": true,
            buttons: ['excel', 'pdf', 'colvis'],
            "language": {
                "paginate": {
                    "previous": "<i class='mdi mdi-chevron-left'>",
                    "next": "<i class='mdi mdi-chevron-right'>"
                }
            },
            "drawCallback": function drawCallback() {
                $('.dataTables_paginate > .pagination').addClass('pagination-rounded');
            }
        });

        datatable_scroll.buttons().container().appendTo('.datatable_scroll_buttons');
    });

    </script>

</body>

</html>
