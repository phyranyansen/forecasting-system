<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $title ?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url().'assets/bootstrap2/plugins/fontawesome-free/css/all.min.css';?>">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url().'assets/bootstrap2/plugins/icheck-bootstrap/icheck-bootstrap.min.css';?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url().'assets/bootstrap2/dist/css/adminlte.min.css';?>">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="<?= base_url();?>"><b>Forecasting</b> System <br> Alfarizqy Bakery</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Silahkan Login!</p>
      <center><?= $this->session->flashdata('pesan'); ?></center>
      <form action="<?= base_url('Welcome/login') ?>" method="post">
        <div class="input-group mb-3">
          <input type="username" name="username" class="form-control" placeholder="Username" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?= base_url().'assets/bootstrap2/plugins/jquery/jquery.min.js';?>"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url().'assets/bootstrap2/plugins/bootstrap/js/bootstrap.bundle.min.js';?>"></script>
<!-- AdminLTE App -->
<script src="<?= base_url().'assets/bootstrap2/dist/js/adminlte.min.js';?>"></script>
</body>
</html>
