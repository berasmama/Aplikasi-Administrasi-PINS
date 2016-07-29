<div class="row">
<div class="col-lg-12">
	<h1>Daftar Unggahan</h1>
	<h3><?php echo $this->session->flashdata('upload_message'); ?></h3>
	<form class="form-inline" action="<?php echo base_url() ?>index.php/project/cari_upload" method="post">
  		<div class="form-group">
    		<label >ID Project</label>
    		<input type="text" class="form-control" name="id_project">
  		</div>
  		<div class="form-group">
  			<label>Jenis Project</label>
    		<select class="form-control" name="jenis_project">
    			<option></option>
				<?php foreach ($data2 as $row) { ?>
				<option value="<?php echo $row['jenis_project'] ?>"><?php echo $row['jenis_project'] ?></option>
				<?php } ?>
			</select>
  		</div>
  		<input type="submit" name="" value="Cari" class="btn btn-primary">
	</form>
	<table class="table">
		<tr>
			<th>No.</th>
			<th>ID Project</th>
			<th>Jenis Project</th>
			<th>Staff</th>
			<th>Waktu</th>
			<th>Action</th>
		</tr>
		<?php $i=1;foreach ($data as $row ) { ?>
			<tr>
			<td><?php echo $i; ?></td>
			<td><?php echo $row['id_project']; ?></td>
			<td><?php echo $row['jenis_project']; ?></td>
			<td><?php echo $row['nip']; ?></td>
			<td><?php echo $row['time']; ?></td>
			<td>
				<a href="<?php echo base_url().'index.php/project/detail_upload/'.$row['id_project'] ?>"><button class="btn btn-success">Lihat</button>
				<a href="<?php echo base_url().'index.php/project/delete_upload/'.$row['id_project'] ?>"><button class="btn btn-danger">Hapus</button></a>
			</td>
			</tr>
		<?php $i++;} ?>
	</table>
</div>
</div>