<form action="<?php echo base_url() ?>index.php/dashboard/update_profile" method="post" enctype="multipart/form-data">
<div class="row">
	<h1>Edit Profile</h1>
<div class="col-lg-3 col-xs-12">
	<center><img src="<?php echo base_url().'assets/img/photo_profil/'.$foto; ?>" class="img-responsive"></center>
</div>
<div class="col-lg-9 col-xs-12">
	<div class="register-box-body col-md-12">   
	  <div class="col-md-6">
		  <div class="form-group has-feedback">
			<input type="text" name="firstname" class="form-control" placeholder="Nama Depan" value="<?php echo $firstname ?>">
			<span class="glyphicon glyphicon-user form-control-feedback"></span>
		  </div>
		  <div class="form-group has-feedback">
			<input type="text" name="lastname" class="form-control" placeholder="Nama Belakang" value="<?php echo $lastname ?>">
			<span class="glyphicon glyphicon-user form-control-feedback"></span>
		  </div>
		  <div class="form-group has-feedback">
			<input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo $email ?>">
			<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
		  </div>
		  <div class="form-group has-feedback">
			<input type="password" name="password_old" class="form-control" placeholder="Password Lama">
			<span class="glyphicon glyphicon-lock form-control-feedback"></span>
		  </div>
		  <div class="form-group has-feedback">
			<input type="password" name="password_new" class="form-control" placeholder="Password Baru">
			<span class="glyphicon glyphicon-log-in form-control-feedback"></span>
		  </div>
	  </div>
	  <div class="col-md-6">
		  <div class="form-group has-feedback">
			<input type="text" name="nip" class="form-control" placeholder="NIP" value="<?php echo $nip ?>">
			<span class="glyphicon glyphicon-tag form-control-feedback"></span>
		  </div>
		  <div class="form-group has-feedback">
			<input type="text" name="birthday" class="form-control" id="datepicker" placeholder="Tanggal Lahir" data-date-format="yyyy/mm/dd" value="<?php echo $ttl ?>">
			<span class="glyphicon glyphicon-calendar form-control-feedback"></span>
		  </div>
		  <div class="form-group has-feedback">
			<input type="textarea" name="address" class="form-control" placeholder="Alamat" value="<?php echo $alamat ?>">
			<span class="glyphicon glyphicon-home form-control-feedback"></span>
		  </div>
		  <div class="form-group has-feedback">
			<input type="number" name="contact" class="form-control" placeholder="Kontak" value="<?php echo $no_hp ?>">
			<span class="glyphicon glyphicon-phone form-control-feedback"></span>
		  </div>
		  <div class="form-group has-feedback">
			<input type="file" name="photo" class="form-control" style="">
			<span class="glyphicon glyphicon-camera form-control-feedback"></span>
		  </div>
	  </div>
      <div class="col-md-12">
        <button type="submit" class="btn btn-danger btn-block btn-flat">Ubah</button>
      </div>
</div>
</form>
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