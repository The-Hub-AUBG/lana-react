<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Chartist | Veltrix - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="public/images/favicon.ico">

    <link href="public/libs/chartist/chartist.min.css" rel="stylesheet">

    <?php include 'layouts/headerStyle.php'; ?>

</head>

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
                            <h4 class="font-size-18">Chartist Chart</h4>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Veltrix</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                <li class="breadcrumb-item active">Chartist Chart</li>
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

                                <h4 class="card-title mb-4">Overlapping bars on mobile</h4>

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

                                <div id="overlapping-bars" class="ct-chart ct-golden-section" dir="ltr"></div>

                            </div>
                        </div>
                    </div> <!-- end col -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title mb-4">Stacked bar chart</h4>

                                <div class="row justify-content-center">
                                    <div class="col-sm-4">
                                        <div class="text-center">
                                            <h5 class="mb-0 font-size-20">5241</h5>
                                            <p class="text-muted">Activated</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="text-center">
                                            <h5 class="mb-0 font-size-20">65411</h5>
                                            <p class="text-muted">Pending</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="text-center">
                                            <h5 class="mb-0 font-size-20">51654</h5>
                                            <p class="text-muted">Deactivated</p>
                                        </div>
                                    </div>
                                </div>

                                <div id="stacked-bar-chart" class="ct-chart ct-golden-section" dir="ltr"></div>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title mb-4">Animating a Donut with Svg.animate</h4>

                                <div class="row justify-content-center">
                                    <div class="col-sm-4">
                                        <div class="text-center">
                                            <h5 class="mb-0 font-size-20">748949</h5>
                                            <p class="text-muted">Activated</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="text-center">
                                            <h5 class="mb-0 font-size-20">5181</h5>
                                            <p class="text-muted">Pending</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="text-center">
                                            <h5 class="mb-0 font-size-20">101025</h5>
                                            <p class="text-muted">Deactivated</p>
                                        </div>
                                    </div>
                                </div>


                                <div id="animating-donut" class="ct-chart ct-golden-section" dir="ltr"></div>

                            </div>
                        </div>
                    </div> <!-- end col -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title mb-4">Simple pie chart</h4>

                                <div class="row justify-content-center">
                                    <div class="col-sm-4">
                                        <div class="text-center">
                                            <h5 class="mb-0 font-size-20">48484</h5>
                                            <p class="text-muted">Activated</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="text-center">
                                            <h5 class="mb-0 font-size-20">48652</h5>
                                            <p class="text-muted">Pending</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="text-center">
                                            <h5 class="mb-0 font-size-20">85412</h5>
                                            <p class="text-muted">Deactivated</p>
                                        </div>
                                    </div>
                                </div>


                                <div id="simple-pie" class="ct-chart ct-golden-section simple-pie-chart-chartist" dir="ltr"></div>

                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title mb-4">Advanced Smil Animations</h4>


                                <div class="row justify-content-center">
                                    <div class="col-sm-4">
                                        <div class="text-center">
                                            <h5 class="mb-0 font-size-20">45410</h5>
                                            <p class="text-muted">Activated</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="text-center">
                                            <h5 class="mb-0 font-size-20">4442</h5>
                                            <p class="text-muted">Pending</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="text-center">
                                            <h5 class="mb-0 font-size-20">3201</h5>
                                            <p class="text-muted">Deactivated</p>
                                        </div>
                                    </div>
                                </div>


                                <div id="smil-animations" class="ct-chart ct-golden-section" dir="ltr"></div>

                            </div>
                        </div>
                    </div> <!-- end col -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title mb-4">Simple line chart</h4>

                                <div class="row justify-content-center">
                                    <div class="col-sm-4">
                                        <div class="text-center">
                                            <h5 class="mb-0 font-size-20">44242</h5>
                                            <p class="text-muted">Activated</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="text-center">
                                            <h5 class="mb-0 font-size-20">75221</h5>
                                            <p class="text-muted">Pending</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="text-center">
                                            <h5 class="mb-0 font-size-20">65212</h5>
                                            <p class="text-muted">Deactivated</p>
                                        </div>
                                    </div>
                                </div>

                                <div id="simple-line-chart" class="ct-chart ct-golden-section" dir="ltr"></div>

                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title mb-4">Line Scatter Diagram</h4>

                                <div class="row justify-content-center">
                                    <div class="col-sm-4">
                                        <div class="text-center">
                                            <h5 class="mb-0 font-size-20">5677</h5>
                                            <p class="text-muted">Activated</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="text-center">
                                            <h5 class="mb-0 font-size-20">5542</h5>
                                            <p class="text-muted">Pending</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="text-center">
                                            <h5 class="mb-0 font-size-20">12422</h5>
                                            <p class="text-muted">Deactivated</p>
                                        </div>
                                    </div>
                                </div>

                                <div id="scatter-diagram" class="ct-chart ct-golden-section" dir="ltr"></div>

                            </div>
                        </div>
                    </div> <!-- end col -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title mb-4">Line chart with area</h4>

                                <div class="row justify-content-center">
                                    <div class="col-sm-4">
                                        <div class="text-center">
                                            <h5 class="mb-0 font-size-20">4234</h5>
                                            <p class="text-muted">Activated</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="text-center">
                                            <h5 class="mb-0 font-size-20">64521</h5>
                                            <p class="text-muted">Pending</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="text-center">
                                            <h5 class="mb-0 font-size-20">94521</h5>
                                            <p class="text-muted">Deactivated</p>
                                        </div>
                                    </div>
                                </div>

                                <div id="chart-with-area" class="ct-chart ct-golden-section" dir="ltr"></div>

                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->



            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->



        <?php include 'layouts/footer.php'; ?>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<?php include 'layouts/rightbar.php'; ?>

<?php include 'layouts/footerScript.php'; ?>

<!-- Plugin Js-->
<script src="public/libs/chartist/chartist.min.js"></script>
<script src="public/libs/chartist-plugin-tooltips/chartist-plugin-tooltip.min.js"></script>
<!-- demo js-->
<script src="public/js/pages/chartist.init.js"></script>


<?php include "layouts/content-end.php"; ?>