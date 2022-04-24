<?php
date_default_timezone_set("Asia/Dhaka");
include("class/adminBack.php");
session_start();
$admin_id = $_SESSION['id'];
// $admin_email = $_SESSION['admin_email'];
if (!$admin_id) {
    header("location: index.php");
}
if (isset($_GET['adminLogout'])) {
    $obj_adminBack = new adminBack();
    $obj_adminBack->adminLogout();
}

?>


<?php include "partials/template-top.php" ?>

<body>
    <!-- page-wrapper start -->
    <div class="page-wrapper default-version">

        <?php include "partials/sidebar.php" ?>

        <?php include "partials/navbar.php" ?>



        <div class="body-wrapper">
            <div class="bodywrapper__inner">


                <div class="row align-items-center mb-30">
                    <div class="col-lg-6 col-6">
                        <h6 class="page-title">Default Home</h6>
                        <nav aria-label="breadcrumb" class="d-inline-block ml-md-4">
                            <ol class="breadcrumb page-breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i></a></li>
                                <li class="breadcrumb-item">Home</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-6 col-6 text-end">
                        <a href="#" class="btn btn-sm bg--primary box--shadow1 text--small">New</a>
                        <a href="#" class="btn btn-sm bg--success box--shadow1 text--small">Filters</a>
                    </div>
                </div>

                <?php

                if ($views) {
                    if ("dashboard" == $views) {
                        include("views/dashboard-view.php");
                    } else if ("profile" == $views) {
                        include("views/profile-view.php");
                    } else if ("table" == $views) {
                        include("views/table-view.php");
                    } else if ("all-users" == $views) {
                        include("views/user/all-users-view.php");
                    } else if ("all-tickets" == $views) {
                        include("views/ticket/all-tickets-view.php");
                    } else if ("transaction-log" == $views) {
                        include("views/transaction/transaction-log-view.php");
                    } else if ("general-setting" == $views) {
                        include("views/general-setting-view.php");
                    } else if ("components" == $views) {
                        include("views/components-view.php");
                    } else if ("user-details" == $views) {
                        include("views/user/details-view.php");
                    } else if ("section-header" == $views) {
                        include("views/section-header-view.php");
                    }
                }

                ?>






            </div><!-- bodywrapper__inner end -->
        </div><!-- body-wrapper end -->
    </div>
    <!-- page-wrapper end -->


    <?php include "partials/template-bottom.php" ?>


    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>