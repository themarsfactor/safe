<?php
session_start();
if (isset($_SESSION['username'])) {
  //admin logged in already
  //therefore do not show login page
  header('Location: admin.php');
  exit();
}
include  "includes/head.inc.php";

?>

<body id="login">
  <?php
  require "process/forms.php";
  ?>
  <div class="login-card">
    <div class="text-center intro"> <img src="images/me.jpg" width="160"> </div>
    <form method="POST">
      <div class="mt-4 text-center">
        <h4>Log In.</h4> <span>Login with your admin credentials</span>
        <div class="mt-3 inputbox">
          <input type="text" class="form-control" name="username" placeholder="Username"> <i class="fa fa-user"></i>
        </div>
        <div class="inputbox">
          <input type="password" class="form-control" name="password" placeholder="Password"> <i class="fa fa-lock"></i>
        </div>
      </div>
      <div class="d-flex justify-content-between">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
          <label class="form-check-label" for="flexCheckDefault"> Keep me Logged in </label>
        </div>
        <div> <a href="#" class="forgot">Forgot Password?</a> </div>
      </div>
      <div class="mt-2"> <button class="btn btn-primary btn-block" name="login_admin">Log In</button> </div>
    </form>
  </div>

  <script src="js/jquery-3.5.1.slim.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/scripts.js"></script>
</body>

</html>