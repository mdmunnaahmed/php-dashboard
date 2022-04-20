<?php
include("class/adminBack.php");

$admin_obj = new adminBack();
if (isset($_POST['submit-btn'])) {
    $msg = $admin_obj->adminLogin($_POST);
}
session_start();
if (isset($_SESSION['id'])) {
    header("location: dashboard.php");
}
?>

<?php include "partials/template-top.php" ?>


<!-- page-wrapper start -->
<div class="page-wrapper default-version">
    <div class="form-area bg_img d-flex align-items-center justify-content-center">
        <div class="form-wrapper">
            <h4 class="logo-text mb-15">Welcome to <strong class="text--primary">Fancy World</strong></h4>

            <form action="" method="POST" class="cmn-form mt-30">
                <div class="form-group">
                    <label for="admin_email">Username</label>
                    <input type="text" name="admin_email" class="form-control b-radius--capsule" id="admin_email" value="admin" placeholder="Enter your username">
                    <i class="las la-user input-icon"></i>
                </div>
                <div class="form-group">
                    <label for="admin_pass">Password</label>
                    <input type="password" name="admin_pass" class="form-control b-radius--capsule" id="admin_pass" value="admin" placeholder="Enter your password">
                    <i class="las la-lock input-icon"></i>
                </div>
                <div class="form-group d-flex justify-content-between align-items-center">
                    <a href="#0" class="text-muted text--small"><i class="las la-lock"></i>Forgot password?</a>
                </div>
                <div class="form-group">
                    <button type="submit" name="submit-btn" class="submit-btn mt-25 b-radius--capsule">Login <i class="las la-sign-in-alt"></i></button>
                </div>
            </form>
        </div>
    </div><!-- login-area end -->
</div>
<!-- page-wrapper end -->


<?php include "partials/template-bottom.php" ?>

<link rel="stylesheet" href="https://script.viserlab.com/laramin/assets/global/css/iziToast.min.css">
<script src="https://script.viserlab.com/laramin/assets/global/js/iziToast.min.js"></script>

<?php if (isset($msg)) { ?>
    <script>
        "use strict";
        iziToast.warning({
            message: "<?php echo $msg ?>",
            position: "topRight"
        });
    </script>
<?php } ?>