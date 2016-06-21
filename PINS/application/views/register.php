	<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Registration Page</title>
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
<body class="hold-transition register-page">
<div class="register-box" style="margin-top:25px;">
  <div class="register-logo">
    <img src="<?php echo base_url(); ?>assets/images/product-logo.png" height="100px">
  </div>
<div class="row">
  <div class="register-box-body col-md-12">
    <p class="login-box-msg"><b>Daftar keanggotaan baru</b></p>
	
    <form action="../../index.html" method="post">
	  <div class="col-md-6">
		  <div class="form-group has-feedback">
			<input type="text" name="username" class="form-control" placeholder="Username">
			<span class="glyphicon glyphicon-user form-control-feedback"></span>
		  </div>
		  <div class="form-group has-feedback">
			<input type="text" name="firstname" class="form-control" placeholder="Nama Depan">
			<span class="glyphicon glyphicon-user form-control-feedback"></span>
		  </div>
		  <div class="form-group has-feedback">
			<input type="text" name="lastname" class="form-control" placeholder="Nama Belakang">
			<span class="glyphicon glyphicon-user form-control-feedback"></span>
		  </div>
		  <div class="form-group has-feedback">
			<input type="email" name="email" class="form-control" placeholder="Email">
			<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
		  </div>
		  <div class="form-group has-feedback">
			<input type="password" name="password" class="form-control" placeholder="Password">
			<span class="glyphicon glyphicon-lock form-control-feedback"></span>
		  </div>
		  <div class="form-group has-feedback">
			<input type="password" name="repassword" class="form-control" placeholder="Ulangi password">
			<span class="glyphicon glyphicon-log-in form-control-feedback"></span>
		  </div>
	  </div>
	  <div class="col-md-6">
		  <div class="form-group has-feedback">
			<input type="text" name="nip" class="form-control" placeholder="NIP">
			<span class="glyphicon glyphicon-tag form-control-feedback"></span>
		  </div>
		  <div class="form-group has-feedback">
			<input type="text" name="birthday" class="form-control" id="datepicker" placeholder="Tanggal Lahir">
			<span class="glyphicon glyphicon-calendar form-control-feedback"></span>
		  </div>
		  <div class="form-group has-feedback">
			<input type="textarea" name="address" class="form-control" placeholder="Alamat">
			<span class="glyphicon glyphicon-home form-control-feedback"></span>
		  </div>
		  <div class="form-group has-feedback">
			<input type="textarea" name="contact" class="form-control" placeholder="Kontak">
			<span class="glyphicon glyphicon-phone form-control-feedback"></span>
		  </div>
		  <div class="form-group has-feedback">
			<input type="file" name="photo" class="form-control" style="height:80px;">
			<span class="glyphicon glyphicon-camera form-control-feedback"></span>
		  </div>
	  </div>
      <div class="col-md-12">
        <button type="submit" class="btn btn-danger btn-block btn-flat">Daftar</button>
      </div>
      <div class="col-md-12" style="text-align:right;">
        <div class="checkbox icheck">
          <label>
             <input type="checkbox"> Saya setuju dengan <a href="#">ketentuan</a> yang berlaku.
          </label>
        </div>
      </div>
      <!-- /.col -->
      <!-- /.col -->
	  <div class="col-md-12" style="text-align:right;">
		Jika sudah menjadi anggota, klik <a href="login.html" class="text-center">disini</a>
	  </div>
    </form>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->
</div>
<!-- jQuery 2.2.0 -->
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
