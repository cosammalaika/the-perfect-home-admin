
    <!doctype html>
    <html lang="en">
        <head>
            
            <meta charset="utf-8" />
            <title>Dashboard | The Perfect Home</title>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta content="The Perfect Home" name="description" />
            <meta content="Themesbrand" name="author" />
            <!-- App favicon -->
            <link rel="shortcut icon" href="assets/images/favicon.png">
            
            <!-- plugin css -->
            <link href="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    
            <!-- preloader css -->
            <link rel="stylesheet" href="assets/css/preloader.min.css" type="text/css" />
    
            <!-- Bootstrap Css -->
            <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
            <!-- Icons Css -->
            <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
            <!-- App Css-->
            <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    
        </head>
    
        <body data-layout="horizontal">
    
            <!-- Begin page -->
            <div id="layout-wrapper">
    
                @include('admin.includes.header')
        
                @include('admin.includes.navi')
                
                <div class="main-content">
    
                    <div class="page-content">
                        <div class="container-fluid">
    
                            <!-- start page title -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                        <h4 class="mb-sm-0 font-size-18">Dashboard</h4>
    
                                        <div class="page-title-right">
                                            <ol class="breadcrumb m-0">
                                                <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                                <li class="breadcrumb-item active">Dashboard</li>
                                            </ol>
                                        </div>
    
                                    </div>
                                </div>
                            </div>
                            <!-- end page title -->
                            
                            <div class="row">
                                <div class="col-xl-3 col-md-6">
                                    <!-- card -->
                                    <div class="card card-h-100">
                                        <!-- card body -->
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col-6">
                                                    <span class="text-muted mb-3 lh-1 d-block text-truncate">Number of Users</span>
                                                    <h4 class="mb-3">
                                                        $<span class="counter-value" data-target="865.2">0</span>k
                                                    </h4>
                                                </div>
            
                                                <div class="col-6">
                                                    <div id="mini-chart1" data-colors='["#F55422"]' class="apex-charts mb-2"></div>
                                                </div>
                                            </div>
                                            <div class="text-nowrap">
                                                <span class="badge bg-soft-success text-success">+$20.9k</span>
                                                <span class="ms-1 text-muted font-size-13">Since last week</span>
                                            </div>
                                        </div><!-- end card body -->
                                    </div><!-- end card -->
                                </div><!-- end col -->
            
                                <div class="col-xl-3 col-md-6">
                                    <!-- card -->
                                    <div class="card card-h-100">
                                        <!-- card body -->
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col-6">
                                                    <span class="text-muted mb-3 lh-1 d-block text-truncate">Number of Properties</span>
                                                    <h4 class="mb-3">
                                                        <span class="counter-value" data-target="6258">0</span>
                                                    </h4>
                                                </div>
                                                <div class="col-6">
                                                    <div id="mini-chart2" data-colors='["#F55422"]' class="apex-charts mb-2"></div>
                                                </div>
                                            </div>
                                            <div class="text-nowrap">
                                                <span class="badge bg-soft-danger text-danger">-29 Trades</span>
                                                <span class="ms-1 text-muted font-size-13">Since last week</span>
                                            </div>
                                        </div><!-- end card body -->
                                    </div><!-- end card -->
                                </div><!-- end col-->
            
                                <div class="col-xl-3 col-md-6">
                                    <!-- card -->
                                    <div class="card card-h-100">
                                        <!-- card body -->
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col-6">
                                                    <span class="text-muted mb-3 lh-1 d-block text-truncate">Number of Categories</span>
                                                    <h4 class="mb-3">
                                                        $<span class="counter-value" data-target="4.32">0</span>M
                                                    </h4>
                                                </div>
                                                <div class="col-6">
                                                    <div id="mini-chart3" data-colors='["#F55422"]' class="apex-charts mb-2"></div>
                                                </div>
                                            </div>
                                            <div class="text-nowrap">
                                                <span class="badge bg-soft-success text-success">+ $2.8k</span>
                                                <span class="ms-1 text-muted font-size-13">Since last week</span>
                                            </div>
                                        </div><!-- end card body -->
                                    </div><!-- end card -->
                                </div><!-- end col -->
            
                                <div class="col-xl-3 col-md-6">
                                    <!-- card -->
                                    <div class="card card-h-100">
                                        <!-- card body -->
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col-6">
                                                    <span class="text-muted mb-3 lh-1 d-block text-truncate">Number of Agents</span>
                                                    <h4 class="mb-3">
                                                        <span class="counter-value" data-target="12.57">0</span>%
                                                    </h4>
                                                </div>
                                                <div class="col-6">
                                                    <div id="mini-chart4" data-colors='["#F55422"]' class="apex-charts mb-2"></div>
                                                </div>
                                            </div>
                                            <div class="text-nowrap">
                                                <span class="badge bg-soft-success text-success">+2.95%</span>
                                                <span class="ms-1 text-muted font-size-13">Since last week</span>
                                            </div>
                                        </div><!-- end card body -->
                                    </div><!-- end card -->
                                </div><!-- end col -->    
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
            <script src="assets/libs/jquery/jquery.min.js"></script>
            <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="assets/libs/metismenu/metisMenu.min.js"></script>
            <script src="assets/libs/simplebar/simplebar.min.js"></script>
            <script src="assets/libs/node-waves/waves.min.js"></script>
            <script src="assets/libs/feather-icons/feather.min.js"></script>
            <!-- pace js -->
            <script src="assets/libs/pace-js/pace.min.js"></script>
    
            <!-- apexcharts -->
            <script src="assets/libs/apexcharts/apexcharts.min.js"></script>
    
            <!-- Plugins js-->
            <script src="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
            <script src="assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js"></script>
            <!-- dashboard init -->
            <script src="assets/js/pages/dashboard.init.js"></script>
    
            <script src="assets/js/app.js"></script>
    
        </body>
    
    </html>
    