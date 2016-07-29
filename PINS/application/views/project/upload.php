<div class="row">
<div class="col-lg-12">
<h1>Unggah Dokumen</h1>
<div class="login-box-body">
    <p class="login-box-msg"><?php echo $this->session->flashdata('upload_message'); ?></p>
    <form action="<?php echo base_url() ?>index.php/project/do_upload" method="post" enctype="multipart/form-data">
      <div class="form-group">
      <label>ID Project</label>
      <input type="text" name="id_project" class="form-control" required>
      </div>
      <div class="form-group">
      <label>Jenis Project</label>
      <select class="form-control" name="jenis_project">
      <?php foreach ($jenis_project as $row) {
      	?>
      	<option value="<?php echo $row['jenis_project'] ?>"><?php echo $row['jenis_project'] ?></option>
      	<?php  } ?>
      </select>
      </div>
      <div class="form-group has-feedback">
      <label>Dokumen</label>
      <input type="file" name="photo[]" class="form-control" multiple>
      <span class="glyphicon glyphicon-camera form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <input type="submit" class="btn btn-danger btn-block btn-flat" value="Unggah" name="submit">
        </div>
        <!-- /.col -->
      </div>
    </form>
  </div>
</div>
</div>