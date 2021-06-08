<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Strikeweb" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href={{ asset('assets/images/favicon.ico') }}>

	    <!-- App css -->
	    <link href={{ asset('assets/css/bootstrap-purple.min.css') }} rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
	    <link href={{ asset('assets/css/app-purple.min.css') }} rel="stylesheet" type="text/css" id="app-default-stylesheet" />

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

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Dashboard</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <!-- Dashboard Start-->

                            @include('sections.dashboard')

                        <!-- Dashboard End-->
                        
                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                @include('sections.footer')
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


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
        <script src="https://apexcharts.com/samples/assets/ohlc.js"></script>


        <!-- CRM Dashboard init js-->
        <script src={{ asset('assets/js/pages/crm-dashboard.init.js') }}></script>

        <!-- App js -->
        <script src={{ asset('assets/js/app.min.js') }}></script>
        @livewireScripts    
    </body>
</html>