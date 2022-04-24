<?php include("partials/template-top.php") ?>

<!-- page-wrapper start -->
<div class="page-wrapper default-version">
  <div class="form-area bg_img  d-flex flex-wrap align-items-center justify-content-center min-vh-100" data-background="assets/images/bg/1.jpg">
    <div class="form-wrapper text-center mx-auto">
      <h4 class="logo-text mb-15">Registration to <strong>Thesoftking</strong></h4>
      <p>Sign up to thesoftking dashboard</p>
      <form class="cmn-form mt-30">
        <div class="form-group">
          <label for="name">Full name</label>
          <input type="text" class="form-control b-radius--capsule" id="name" placeholder="Name">
          <i class="las la-user input-icon"></i>
        </div>

        <div class="form-group">
          <label for="name">Email address</label>
          <input type="email" class="form-control b-radius--capsule" id="email" placeholder="example@gmail.com">
          <i class="las la-user input-icon"></i>
        </div>

        <div class="form-group">
          <label for="pass">Password</label>
          <input type="password" class="form-control b-radius--capsule" id="pass" placeholder="...........">
          <i class="las la-lock input-icon"></i>
        </div>

        <div class="form-group">
          <label for="cPass">Confirm password</label>
          <input type="password" class="form-control b-radius--capsule" id="cPass" placeholder="...........">
          <i class="las la-lock input-icon"></i>
        </div>
        <div class="form-group d-flex justify-content-between align-items-center">
          <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="customSwitch1">
            <label class="custom-control-label" for="customSwitch1">Agree to thesoftking</label>
          </div>
          <a href="#0" class="text-muted text--small"><i class="las la-lock"></i>Forgot password?</a>
        </div>
        <div class="form-group">
          <button type="submit" class="submit-btn mt-25 b-radius--capsule">Registration <i class="las la-sign-in-alt"></i></button>
        </div>
        <p class="text-center">Already have an account? <a href="login.html">sign in now</a></p>
      </form>
    </div>
  </div><!-- login-area end -->
</div>
<!-- page-wrapper end -->

<?php include("partials/template-top.php") ?>