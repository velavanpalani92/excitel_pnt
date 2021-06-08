<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
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

            <!-- Right Sidebar -->
            @include('sections.right')
            <!-- /Right-bar -->

            <!-- Right bar overlay-->
            <div class="rightbar-overlay"></div>


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

                                    <h4 class="page-title">ERP List</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 


                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row mb-2">
                                            <div class="col-sm-4">
                                                <button type="button" class="btn btn-danger waves-effect waves-light" data-toggle="modal" data-target="#custom-modal"><i class="mdi mdi-plus-circle mr-1"></i> Add New ERP</button>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="text-sm-right">
                                                    <button type="button" class="btn btn-success mb-2 mr-1"><i class="mdi mdi-cog"></i></button>
                                                    <button type="button" class="btn btn-light mb-2 mr-1">Import</button>
                                                    <button type="button" class="btn btn-light mb-2">Export</button>
                                                </div>
                                            </div><!-- end col-->
                                        </div>
                
                                        <livewire:erp-listing></livewire:erp-listing>

                                        <ul class="pagination pagination-rounded justify-content-end mb-0">
                                            <li class="page-item">
                                                <a class="page-link" href="javascript: void(0);" aria-label="Previous">
                                                    <span aria-hidden="true">«</span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                            </li>
                                            <li class="page-item active"><a class="page-link" href="javascript: void(0);">1</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript: void(0);">2</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript: void(0);">3</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript: void(0);">4</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript: void(0);">5</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="javascript: void(0);" aria-label="Next">
                                                    <span aria-hidden="true">»</span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </li>
                                        </ul>

                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->
                        
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

        <!-- Modal -->
        <div class="modal fade" id="custom-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-light">
                        <h4 class="modal-title" id="myCenterModalLabel">Add New ERP</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div >
                        <livewire:erp-add-form></livewire:erp-add-form>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal --> 

        
        <!-- Vendor js -->
        <script src={{ asset('assets/js/vendor.min.js') }}></script>

        <script src={{ asset('assets/libs/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js') }}></script>

        <!-- Init js-->
        <script src={{ asset('assets/js/pages/form-wizard.init.js') }}></script>

        <!-- App js -->
        <script src={{ asset('assets/js/app.min.js') }}></script>
        @livewireScripts    

    </body>
</html>