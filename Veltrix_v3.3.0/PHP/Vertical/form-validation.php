<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Form Validation | Veltrix - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="public/images/favicon.ico">

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
                            <h4 class="font-size-18">Form Validation</h4>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Veltrix</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                <li class="breadcrumb-item active">Form Validation</li>
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

                                <h4 class="card-title">Validation type</h4>
                                <p class="card-title-desc">Parsley is a javascript form validation
                                    library. It helps you provide your users with feedback on their form
                                    submission before sending it to your server.</p>

                                <form class="custom-validation" action="#">
                                    <div class="form-group">
                                        <label>Required</label>
                                        <input type="text" class="form-control" required placeholder="Type something" />
                                    </div>

                                    <div class="form-group">
                                        <label>Equal To</label>
                                        <div>
                                            <input type="password" id="pass2" class="form-control" required placeholder="Password" />
                                        </div>
                                        <div class="mt-2">
                                            <input type="password" class="form-control" required data-parsley-equalto="#pass2" placeholder="Re-Type Password" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>E-Mail</label>
                                        <div>
                                            <input type="email" class="form-control" required parsley-type="email" placeholder="Enter a valid e-mail" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>URL</label>
                                        <div>
                                            <input parsley-type="url" type="url" class="form-control" required placeholder="URL" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Digits</label>
                                        <div>
                                            <input data-parsley-type="digits" type="text" class="form-control" required placeholder="Enter only digits" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Number</label>
                                        <div>
                                            <input data-parsley-type="number" type="text" class="form-control" required placeholder="Enter only numbers" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Alphanumeric</label>
                                        <div>
                                            <input data-parsley-type="alphanum" type="text" class="form-control" required placeholder="Enter alphanumeric value" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Textarea</label>
                                        <div>
                                            <textarea required class="form-control" rows="5"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group mb-0">
                                        <div>
                                            <button type="submit" class="btn btn-primary waves-effect waves-light mr-1">
                                                Submit
                                            </button>
                                            <button type="reset" class="btn btn-secondary waves-effect">
                                                Cancel
                                            </button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div> <!-- end col -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Range validation</h4>
                                <p class="card-title-desc">Parsley is a javascript form validation
                                    library. It helps you provide your users with feedback on their form
                                    submission before sending it to your server.</p>

                                <form class="custom-validation" action="#">

                                    <div class="form-group">
                                        <label>Min Length</label>
                                        <div>
                                            <input type="text" class="form-control" required data-parsley-minlength="6" placeholder="Min 6 chars." />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Max Length</label>
                                        <div>
                                            <input type="text" class="form-control" required data-parsley-maxlength="6" placeholder="Max 6 chars." />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Range Length</label>
                                        <div>
                                            <input type="text" class="form-control" required data-parsley-length="[5,10]" placeholder="Text between 5 - 10 chars length" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Min Value</label>
                                        <div>
                                            <input type="text" class="form-control" required data-parsley-min="6" placeholder="Min value is 6" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Max Value</label>
                                        <div>
                                            <input type="text" class="form-control" required data-parsley-max="6" placeholder="Max value is 6" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Range Value</label>
                                        <div>
                                            <input class="form-control" required type="text range" min="6" max="100" placeholder="Number between 6 - 100" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Regular Exp</label>
                                        <div>
                                            <input type="text" class="form-control" required data-parsley-pattern="#[A-Fa-f0-9]{6}" placeholder="Hex. Color" />
                                        </div>
                                    </div>

                                    <div class="form-group mb-0">
                                        <div>
                                            <button type="submit" class="btn btn-primary waves-effect waves-light mr-1">
                                                Submit
                                            </button>
                                            <button type="reset" class="btn btn-secondary waves-effect">
                                                Cancel
                                            </button>
                                        </div>
                                    </div>
                                </form>

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

<script src="public/libs/parsleyjs/parsley.min.js"></script>

<script src="public/js/pages/form-validation.init.js"></script>


<?php include "layouts/content-end.php"; ?>