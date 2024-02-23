
    <!doctype html>
    <html lang="en">
        <head>
            
            <meta charset="utf-8" />
            <title>@yield('title', 'Dashboard') | The Perfect Home</title>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta content="The Perfect Home" name="description" />
            <meta content="Themesbrand" name="author" />
            <!-- App favicon -->
           <!-- favicon -->
            <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}">

            <!-- plugin css -->
            <link href="{{ asset('assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet" type="text/css" />

            <!-- preloader css -->
            <link rel="stylesheet" href="{{ asset('assets/css/preloader.min.css') }}" type="text/css" />

            <!-- Bootstrap Css -->
            <link href="{{ asset('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
            <!-- Icons Css -->
            <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
            <!-- App Css-->
            <link href="{{ asset('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

        </head>
    
        <body data-layout="horizontal">
    
            <!-- Begin page -->
            <div id="layout-wrapper">
    
                @include('admin.includes.header')
        
                @include('admin.includes.navi')
                
                <div class="main-content">
    
                    <div class="page-content">
                        <div class="container-fluid">
                            <div class="row">
                                @yield('content')
                            </div><!-- end row-->
    
                        </div> <!-- container-fluid -->
                    </div>
                    <!-- End Page-content -->
    
                    
                    @include('admin.includes.footer')
                </div>
                <!-- end main content-->
    
            </div>
            <!-- END layout-wrapper -->
    
            <!-- Right bar overlay-->
            <div class="rightbar-overlay"></div>
    
            <!-- JAVASCRIPT -->
            <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
            <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
            <script src="{{ asset('assets/libs/metismenu/metisMenu.min.js') }}"></script>
            <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
            <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>
            <script src="{{ asset('assets/libs/feather-icons/feather.min.js') }}"></script>
            <!-- pace js -->
            <script src="{{ asset('assets/libs/pace-js/pace.min.js') }}"></script>
            
            <!-- apexcharts -->
            <script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>
            
            <!-- Plugins js-->
            <script src="{{ asset('assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
            <script src="{{ asset('assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js') }}"></script>
            <!-- dashboard init -->
            <script src="{{ asset('assets/js/pages/dashboard.init.js') }}"></script>
            
            <script src="{{ asset('assets/js/app.js') }}"></script>
            
        </body>
    
    </html>
    