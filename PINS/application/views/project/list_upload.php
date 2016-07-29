<div class="row">
<div class="col-lg-12">
	<h1>Daftar Unggahan</h1>
	<h3><?php echo $this->session->flashdata('upload_message'); ?></h3>
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