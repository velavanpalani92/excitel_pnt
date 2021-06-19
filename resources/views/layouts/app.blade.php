<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Excitel') }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href={{ asset('assets/images/favicon.png') }} >

        <link href={{ asset('assets/libs/flatpickr/flatpickr.min.css') }} rel="stylesheet" type="text/css" />
        <link href={{ asset('assets/libs/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') }} rel="stylesheet" type="text/css" />
        <link href={{ asset('assets/libs/clockpicker/bootstrap-clockpicker.min.css') }} rel="stylesheet" type="text/css" />
        <link href={{ asset('assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }} rel="stylesheet" type="text/css" />
        <link href={{ asset('assets/libs/selectize/css/selectize.bootstrap3.css') }} rel="stylesheet" type="text/css" />
	    <!-- App css -->
	    <link href={{ asset('assets/css/bootstrap-purple.min.css') }} rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
	    <link href={{ asset('assets/css/app-purple.min.css') }} rel="stylesheet" type="text/css" id="app-default-stylesheet" />
        <link href={{ asset('assets/libs/bootstrap-select/css/bootstrap-select.min.css') }} rel="stylesheet" type="text/css" />
	    <link href={{ asset('assets/css/bootstrap-purple-dark.min.css') }} rel="stylesheet" type="text/css" id="bs-dark-stylesheet" disabled />
	    <link href={{ asset('assets/css/app-purple-dark.min.css') }} rel="stylesheet" type="text/css" id="app-dark-stylesheet"  disabled />

	    <!-- icons -->
	    <link href={{ asset('assets/css/icons.min.css') }} rel="stylesheet" type="text/css" />
        @livewireStyles
    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->
            @include('sections.topnav')
            <!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->
            @include('sections.left')
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            {{ $slot }}

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

            <!-- Footer Start -->
            @include('sections.footer')
            <!-- end Footer -->


        </div>
        <!-- END wrapper -->

        <!-- Right Sidebar -->
            @include('sections.right')
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src={{ asset('assets/js/vendor.min.js') }}></script>

        <!-- Third Party js-->
        <script src={{ asset('assets/libs/apexcharts/apexcharts.min.js') }}></script>

        <script src={{ asset('assets/js/pages/form-pickers.init.js') }}></script>
        <!-- CRM Dashboard init js-->
        <script src={{ asset('assets/js/pages/crm-dashboard.init.js') }}></script>

        <!-- App js -->
        <script src={{ asset('assets/js/app.min.js') }}></script>

        <script src={{ asset('assets/js/pages/form-validation.init.js') }}"../"></script>

        @livewireScripts
    </body>
</html>
