<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Flot | Veltrix - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="public/images/favicon.ico">



    <?php include 'layouts/headerStyle.php'; ?>

    <?php include 'layouts/master.php';
    echo setLayout(); ?>

    <!-- Begin page -->
    <div id="layout-wrapper">
        <?php include 'layouts/topbar.php'; ?>

        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <div class="page-title-box">
                                <h4 class="font-size-18">Flot Chart</h4>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Veltrix</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Charts</a></li>
                                    <li class="breadcrumb-item active">Flot Chart</li>
                                </ol>
                            </div>
                        </div>


                        <?php include 'layouts/settingButton.php'; ?>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="card-title mb-4">Multiple Statistics</h4>

                                    <div class="row justify-content-center">
                                        <div class="col-sm-4">
                                            <div class="text-center">
                                                <h5 class="mb-0 font-size-20">362411</h5>
                                                <p class="text-muted">Activated</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="text-center">
                                                <h5 class="mb-0 font-size-20">8489</h5>
                                                <p class="text-muted">Pending</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="text-center">
                                                <h5 class="mb-0 font-size-20">985412</h5>
                                                <p class="text-muted">Deactivated</p>
                                            </div>
                                        </div>
                                    </div>


                                    <div id="website-stats" class="flot-charts flot-charts-height"></div>

                                </div>
                            </div>
                        </div> <!-- end col -->

                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="card-title mb-4">Realtime Statistics</h4>

                                    <div class="row justify-content-center">
                                        <div class="col-sm-4">
                                            <div class="text-center">
                                                <h5 class="mb-0 font-size-20">365214</h5>
                                                <p class="text-muted">Activated</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="text-center">
                                                <h5 class="mb-0 font-size-20">6521</h5>
                                                <p class="text-muted">Pending</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="text-center">
                                                <h5 class="mb-0 font-size-20">44587</h5>
                                                <p class="text-muted">Deactivated</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="flotRealTime" class="flot-charts flot-charts-height"></div>

                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->


                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="card-title mb-4">Donut Pie</h4>

                                    <div class="row justify-content-center">
                                        <div class="col-sm-4">
                                            <div class="text-center">
                                                <h5 class="mb-0 font-size-20">5484</h5>
                                                <p class="text-muted">Activated</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="text-center">
                                                <h5 class="mb-0 font-size-20">964984</h5>
                                                <p class="text-muted">Pending</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="text-center">
                                                <h5 class="mb-0 font-size-20">98498</h5>
                                                <p class="text-muted">Deactivated</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="donut-chart">
                                        <div id="donut-chart-container" class="flot-charts flot-charts-height">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div> <!-- end col -->

                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="card-title mb-4">Pie Chart</h4>

                                    <div class="row justify-content-center">
                                        <div class="col-sm-4">
                                            <div class="text-center">
                                                <h5 class="mb-0 font-size-20">86541</h5>
                                                <p class="text-muted">Activated</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="text-center">
                                                <h5 class="mb-0 font-size-20">2541</h5>
                                                <p class="text-muted">Pending</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="text-center">
                                                <h5 class="mb-0 font-size-20">102030</h5>
                                                <p class="text-muted">Deactivated</p>
                                            </div>
                                        </div>
                                    </div>


                                    <div id="pie-chart">
                                        <div id="pie-chart-container" class="flot-charts flot-charts-height">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->



                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->


            <?php include 'layouts/footer.php'; ?>
        </div>

        <?php include 'layouts/rightbar.php'; ?>
        <?php include 'layouts/footerScript.php'; ?>

        <!-- flot plugins -->
        <script src="public/libs/flot-charts/jquery.flot.js"></script>
        <script src="public/libs/flot-charts/jquery.flot.time.js"></script>
        <script src="public/libs/jquery.flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
        <script src="public/libs/flot-charts/jquery.flot.resize.js"></script>
        <script src="public/libs/flot-charts/jquery.flot.pie.js"></script>
        <script src="public/libs/flot-charts/jquery.flot.selection.js"></script>
        <script src="public/libs/flot-charts/jquery.flot.stack.js"></script>
        <script src="public/libs/flot.curvedLines/curvedLines.js"></script>
        <script src="public/libs/flot-charts/jquery.flot.crosshair.js"></script>

        <!-- flot init -->
        <script src="public/js/pages/flot.init.js"></script>

        <?php include 'layouts/content-end.php'; ?>