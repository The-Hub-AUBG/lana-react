<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Editable Table | Veltrix - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="public/images/favicon.ico">

    <!-- DataTables -->
    <link href="public/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="public/libs/datatables.net-autoFill-bs4/css/autoFill.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />
    <link href="public/libs/datatables.net-keytable-bs4/css/keyTable.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="public/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />


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
                                <h4 class="font-size-18">Editable Table</h4>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Veltrix</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                    <li class="breadcrumb-item active">Editable Table</li>
                                </ol>
                            </div>
                        </div>


                        <?php include 'layouts/settingButton.php'; ?>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="card-title mb-4">Datatable Editable</h4>

                                    <div class="table-responsive">
                                        <table class="table table-editable">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Age (AutoFill)</th>
                                                    <th>Qty (AutoFill and Editable)</th>
                                                    <th>Cost (Editable)</th>
                                                </tr>
                                            </thead>
                                            <tr>
                                                <td>1</td>
                                                <td data-original-value="11">11</td>
                                                <td data-original-value="1"><a href="#" data-type="text" data-pk="1"
                                                        class="editable" data-url="" data-title="Edit Quantity">1</a>
                                                </td>
                                                <td data-original-value="1.99"><a href="#" data-type="text" data-pk="1"
                                                        class="editable" data-url="" data-title="Edit Quantity">1.99</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td data-original-value="22">22</td>
                                                <td data-original-value="2"><a href="#" data-type="text" data-pk="2"
                                                        class="editable" data-url="" data-title="Edit Quantity">2</a>
                                                </td>
                                                <td data-original-value="2.99"><a href="#" data-type="text" data-pk="1"
                                                        class="editable" data-url="" data-title="Edit Quantity">2.99</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td data-original-value="33">33</td>
                                                <td data-original-value="3"><a href="#" data-type="text" data-pk="3"
                                                        class="editable" data-url="" data-title="Edit Quantity">3</a>
                                                </td>
                                                <td data-original-value="3.99"><a href="#" data-type="text" data-pk="1"
                                                        class="editable" data-url="" data-title="Edit Quantity">3.99</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td data-original-value="44">44</td>
                                                <td data-original-value="4"><a href="#" data-type="text" data-pk="4"
                                                        class="editable" data-url="" data-title="Edit Quantity">4</a>
                                                </td>
                                                <td data-original-value="4.99"><a href="#" data-type="text" data-pk="1"
                                                        class="editable" data-url="" data-title="Edit Quantity">4.99</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td data-original-value="55">55</td>
                                                <td data-original-value="5"><a href="#" data-type="text" data-pk="5"
                                                        class="editable" data-url="" data-title="Edit Quantity">5</a>
                                                </td>
                                                <td data-original-value="5.99"><a href="#" data-type="text" data-pk="1"
                                                        class="editable" data-url="" data-title="Edit Quantity">5.99</a>
                                                </td>
                                            </tr>
                                        </table>
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
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->
    <?php include 'layouts/rightbar.php'; ?>

    <?php include 'layouts/footerScript.php'; ?>

    <!-- Required datatable js -->
    <script src="public/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="public/libs//datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>

    <script src="public/libs/datatables.net-autoFill/js/dataTables.autoFill.min.js"></script>
    <script src="public/libs/datatables.net-autoFill-bs4/js/autoFill.bootstrap4.min.js"></script>

    <script src="public/libs/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>

    <!-- Responsive examples -->
    <script src="public/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>

    <script src="public/libs/bootstrap-editable/js/index.js"></script>

    <script src="public/js/pages/table-editable.init.js"></script>


    <?php include "layouts/content-end.php"; ?>