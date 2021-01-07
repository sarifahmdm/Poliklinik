<?php

  include 'build/head.php';
  include 'connection.php';
?>
<html>
<body class="hold-transition login-page">
<div class="login-box">
<div class="login-logo">
  <a href=#><b>Poliklinik</b> Unila</a>
</div>
<!-- /.login-logo -->
<div class="login-box-body">
  <p class="login-box-msg">Log in</p>

  <form action="proses_login.php" method="post">
    <div class="form-group has-feedback">
      <input type="text" name="username" maxlength= "15" class="form-control" placeholder="Username">
      <span class="glyphicon  form-control-feedback"></span>
    </div>
    <div class="form-group has-feedback">
      <input type="password" name="password" maxlength="10" class="form-control" placeholder="Password">
      <span class="glyphicon glyphicon-lock form-control-feedback"></span>
    </div>
    <div class="row">
      <div class="col-xs-6">
        <div class="checkbox icheck">
          <label>
            Remember Me &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="checkbox">
          </label>
        </div>
      </div>
      <!-- /.col -->
      <div class="col-xs-6">
        <button type="submit" class="btn btn-primary pull-right">Log In</button>
      </div>
      <!-- /.col -->
    </div>
  </form>

</div>
<!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="../../plugins/iCheck/icheck.min.js"></script>
<script>
$(function () {
  $('input').iCheck({
    checkboxClass: 'icheckbox_square-blue',
    radioClass: 'iradio_square-blue',
    increaseArea: '20%' /* optional */
  });
});
</script>
</body>
</html>
