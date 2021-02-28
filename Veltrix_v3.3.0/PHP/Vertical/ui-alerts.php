<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Alerts | Veltrix - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="public/images/favicon.ico">

    <?php include 'layouts/headerStyle.php'; ?>

</head>

<?php include 'layouts/master.php'; echo setLayout();?>

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
                                <h4 class="font-size-18">Alerts</h4>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Veltrix</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">UI Elements</a></li>
                                    <li class="breadcrumb-item active">Alerts</li>
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

                                    <h4 class="card-title">Examples</h4>
                                    <p class="card-title-desc">Alerts are available for any length of
                                        text, as well as an optional dismiss button. For proper styling, use one
                                        of the four <strong>required</strong> contextual classes (e.g., <code
                                            class="highlighter-rouge">.alert-success</code>). For inline
                                        dismissal, use the alerts jQuery plugin.</p>

                                    <div class="">
                                        <div class="alert alert-success" role="alert">
                                            <strong>Well done!</strong> You successfully read this important alert
                                            message.
                                        </div>
                                        <div class="alert alert-info" role="alert">
                                            <strong>Heads up!</strong> This alert needs your attention, but it's not
                                            super important.
                                        </div>
                                        <div class="alert alert-warning" role="alert">
                                            <strong>Warning!</strong> Better check yourself, you're not looking too
                                            good.
                                        </div>
                                        <div class="alert alert-danger mb-0" role="alert">
                                            <strong>Oh snap!</strong> Change a few things up and try submitting again.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="card-title">Link color</h4>
                                    <p class="card-title-desc">Use the <code
                                            class="highlighter-rouge">.alert-link</code> utility class to
                                        quickly provide matching colored links within any alert.</p>

                                    <div class="">
                                        <div class="alert alert-success" role="alert">
                                            <strong>Well done!</strong> You successfully read <a href="#"
                                                class="alert-link">this important alert message</a>.
                                        </div>
                                        <div class="alert alert-info" role="alert">
                                            <strong>Heads up!</strong> This <a href="#" class="alert-link">alert needs
                                                your attention</a>, but it's not super important.
                                        </div>
                                        <div class="alert alert-warning" role="alert">
                                            <strong>Warning!</strong> Better check yourself, you're <a href="#"
                                                class="alert-link">not looking too good</a>.
                                        </div>
                                        <div class="alert alert-danger mb-0" role="alert">
                                            <strong>Oh snap!</strong> <a href="#" class="alert-link">Change a few things
                                                up</a> and try submitting again.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="card-title">Dismissing</h4>
                                    <p class="card-title-desc">You can see this in action with a live demo:</p>

                                    <div class="">
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            <strong>Well done!</strong> You successfully read this important alert
                                            message.
                                        </div>
                                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            <strong>Heads up!</strong> This alert needs your attention, but it's not
                                            super important.
                                        </div>
                                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            <strong>Warning!</strong> Better check yourself, you're not looking too
                                            good.
                                        </div>
                                        <div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            <strong>Oh snap!</strong> Change a few things up and try submitting again.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="card-title">Additional content</h4>
                                    <p class="card-title-desc">Alerts can also contain additional HTML elements like
                                        headings and paragraphs.</p>

                                    <div class="">
                                        <div class="alert alert-success mb-0" role="alert">
                                            <h4 class="alert-heading font-18">Well done!</h4>
                                            <p>Aww yeah, you successfully read this important alert message. This
                                                example text is going to run a bit longer so that you can see how
                                                spacing within an alert works with this kind of content.</p>
                                            <p class="mb-0">Whenever you need to, be sure to use margin utilities to
                                                keep things nice and tidy.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="card-title">Examples</h4>
                                    <p class="card-title-desc ">Alerts are available for any length of
                                        text, as well as an optional dismiss button. For proper styling, use one
                                        of the four <strong>required</strong> contextual classes (e.g., <code
                                            class="highlighter-rouge">.alert-success .bg-**</code>). For inline
                                        dismissal, use the alerts jQuery plugin.</p>

                                    <div class="">
                                        <div class="alert alert-success bg-success text-white border-0" role="alert">
                                            <strong>Well done!</strong> You successfully read this important alert
                                            message.
                                        </div>
                                        <div class="alert alert-info bg-info text-white border-0" role="alert">
                                            <strong>Heads up!</strong> This alert needs your attention, but it's not
                                            super important.
                                        </div>
                                        <div class="alert alert-warning bg-warning text-white border-0" role="alert">
                                            <strong>Warning!</strong> Better check yourself, you're not looking too
                                            good.
                                        </div>
                                        <div class="alert alert-danger bg-danger text-white mb-0 border-0" role="alert">
                                            <strong>Oh snap!</strong> Change a few things up and try submitting again.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
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
    <?php include "layouts/content-end.php"; ?>