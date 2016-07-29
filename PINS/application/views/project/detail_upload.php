<div class="row">
<div class="col-lg-12">
	<h1>Detail Dokumen Unggahan</h1>
	<h3><?php echo $this->session->flashdata('upload_message'); ?></h3>
	<?php foreach ($data as $row ) { ?>
		<div class="col-lg-4 col-xs-4">
		<a href="<?php echo base_url().'assets/img/upload_project/'.$row['foto'] ?>" target="_blank">
		<img src="<?php echo base_url().'assets/img/upload_project/'.$row['foto'] ?>" class="img-responsive img-rounded">
		</a>
		</div>
	<?php } ?>
</div>
</div>