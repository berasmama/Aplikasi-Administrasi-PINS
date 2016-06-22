<div class="row">
<div class="col-lg-12">
<h1><?php echo $title ?></h1>
	<table class="table">
		<tr>
			<th>No.</th>
			<th>ID</th>
			<th>Nama</th>
			<th>Tanggal</th>
			<th>Status</th>
			<th>Action</th>
		</tr>
		<?php $no = 1;foreach($data as $row){ ?>
			<tr>
				<td><?php echo $no; $no ++; ?></td>
				<td><?php echo $row['id_project']; ?></td>
				<td><?php echo $row['nama_project']; ?></td>
				<td><?php echo $row['tanggal']; ?></td>
				<td><?php if($row['status'] == 0){
					echo "<i class='fa fa-clock-o'></i> Terkirim";
				}else if($row['status'] == 1){
					echo "<i class='fa fa-times'></i> Revisi";
				}else{
					echo "<i class='fa fa-check'></i> Selesai";
				} ?></td>
				<td>
				<a href="<?php echo base_url()."index.php/project/review_probis/".$row['id_project']?>"><button class="btn btn-success">Lihat</button></a>
				<a href="<?php echo base_url()."index.php/project/review_probis/".$row['id_project']."/print"?>"><button class="btn btn-primary">Unduh</button></a>
				<a href="<?php echo base_url()."index.php/project/update_probis/".$row['id_project']?>"><button class="btn btn-warning">Ubah</button></a>
				<a href="<?php echo base_url()."index.php/project/delete/".$row['id_project']?>"><button class="btn btn-danger">Hapus</button></a>
				</td>
			</tr>
		<?php } ?>
	</table>
</div>
</div>