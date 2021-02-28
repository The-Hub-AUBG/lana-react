<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Carousel | Veltrix - Responsive Bootstrap 4 Admin Dashboard</title>
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
                                <h4 class="font-size-18">Carousel</h4>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Veltrix</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">UI Elements</a></li>
                                    <li class="breadcrumb-item active">Carousel</li>
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

                                    <h4 class="card-title">Slides only</h4>
                                    <p class="card-title-desc">Here’s a carousel with slides only.
                                        Note the presence of the <code>.d-block</code>
                                        and <code>.img-fluid</code> on carousel images
                                        to prevent browser default image alignment.</p>

                                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel"
                                        data-interval="3000">
                                        <div class="carousel-inner" role="listbox">
                                            <div class="carousel-item active">
                                                <img class="d-block img-fluid" src="public/images/small/img-1.jpg"
                                                    alt="First slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block img-fluid" src="public/images/small/img-2.jpg"
                                                    alt="Second slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block img-fluid" src="public/images/small/img-3.jpg"
                                                    alt="Third slide">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end col -->

                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="card-title">With controls</h4>
                                    <p class="card-title-desc">Adding in the previous and next controls:</p>

                                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner" role="listbox">
                                            <div class="carousel-item active">
                                                <img class="d-block img-fluid" src="public/images/small/img-4.jpg"
                                                    alt="First slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block img-fluid" src="public/images/small/img-5.jpg"
                                                    alt="Second slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block img-fluid" src="public/images/small/img-6.jpg"
                                                    alt="Third slide">
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                            data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                            data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->


                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="card-title">With indicators</h4>
                                    <p class="card-title-desc">You can also add the indicators to the
                                        carousel, alongside the controls, too.</p>

                                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="#carouselExampleIndicators" data-slide-to="0"
                                                class="active"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                        </ol>
                                        <div class="carousel-inner" role="listbox">
                                            <div class="carousel-item active">
                                                <img class="d-block img-fluid" src="public/images/small/img-3.jpg"
                                                    alt="First slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block img-fluid" src="public/images/small/img-2.jpg"
                                                    alt="Second slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block img-fluid" src="public/images/small/img-1.jpg"
                                                    alt="Third slide">
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                            data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                            data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end col -->

                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="card-title">With captions</h4>
                                    <p class="card-title-desc">Add captions to your slides easily with the
                                        <code>.carousel-caption</code> element within any <code>.carousel-item</code>.
                                    </p>

                                    <div id="carouselExampleCaption" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner" role="listbox">
                                            <div class="carousel-item active">
                                                <img src="public/images/small/img-7.jpg" alt="..."
                                                    class="d-block img-fluid">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5>First slide label</h5>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="public/images/small/img-5.jpg" alt="..."
                                                    class="d-block img-fluid">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5>Second slide label</h5>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="public/images/small/img-4.jpg" alt="..."
                                                    class="d-block img-fluid">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5>Third slide label</h5>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleCaption" role="button"
                                            data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleCaption" role="button"
                                            data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="card-title">Crossfade</h4>
                                    <p class="card-title-desc">Add <code>.carousel-fade</code> to your carousel to
                                        animate slides with a fade transition instead of a slide.</p>
                                    <div id="carouselExampleFade" class="carousel slide carousel-fade"
                                        data-ride="carousel">

                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img class="d-block img-fluid" src="public/images/small/img-1.jpg"
                                                    alt="First slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block img-fluid" src="public/images/small/img-2.jpg"
                                                    alt="Second slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block img-fluid" src="public/images/small/img-3.jpg"
                                                    alt="Third slide">
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleFade" role="button"
                                            data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleFade" role="button"
                                            data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- container-fluid -->
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