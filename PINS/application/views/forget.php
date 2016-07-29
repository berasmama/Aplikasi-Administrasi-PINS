<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Administrasi PINS</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datepicker/datepicker3.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/iCheck/square/red.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
  <img src="<?php echo base_url(); ?>assets/img/product-logo.png" height="100px">
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Forget Password</p>
    <p style="color:red;text-align:center"><?php echo $this->session->flashdata('error'); ?></p>
    <form action="<?php echo base_url() ?>index.php/login/do_forget" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="NIP" name="nip">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
      <input type="text" name="birthday" class="form-control" id="datepicker" placeholder="Tanggal Lahir" data-date-format="yyyy-mm-dd" required>
      <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <input type="submit" class="btn btn-danger btn-block btn-flat" value="Kirim" name="submit">
        </div>
        <!-- /.col -->
      </div>
    </form>
	<div class="">
  <a href="<?php echo base_url() ?>index.php/login/" class="text-center">Login</a><br>
    	<a href="<?php echo base_url() ?>index.php/login/register" class="text-center">Daftar baru</a>
	</div>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<script src="<?php echo base_url(); ?>assets/plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url(); ?>assets/plugins/iCheck/icheck.min.js"></script>
<!-- bootstrap datepicker -->
<script src="<?php echo base_url(); ?>assets/plugins/datepicker/bootstrap-datepicker.js"></script>
<script>
  $('#datepicker').datepicker({
      autoclose: true
  });
  $('.datepicker').datepicker({
    format: 'yyyy/mm/dd',
    startDate: '-3d'
  });
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-red',
      radioClass: 'iradio_square-red',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
