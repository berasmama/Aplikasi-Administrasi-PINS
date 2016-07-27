<div class="row">
<div class="col-lg-12">
<h1><?php echo $title ?></h1>
<h3><?php echo $this->session->flashdata('anggota_status'); ?></h3>
	<table class="table">
		<tr>
			<th>No.</th>
			<th>Foto</th>
			<th>NIP</th>
			<th>Nama</th>
			<th>Email</th>
			<th>TTL</th>
			<th>Alamat</th>
			<th>No. HP</th>
			<th>Action</th>
		</tr>
		<?php $no = 1;foreach($data as $row){ ?>
			<tr>
				<td><?php echo $no;$no++; ?></td>
				<td> <img src="<?php echo base_url().'assets/img/photo_profil/'.$row['foto'] ?>" class="img-rounded" width="100px" height="100px"> </td>
				<td><?php echo $row['nip'] ?></td>
				<td><?php echo $row['firstname'].' '.$row['lastname'] ?></td>
				<td><?php echo $row['email'] ?></td>
				<td><?php echo date('d F Y', strtotime($row['ttl'])) ?></td>
				<td><?php echo $row['alamat'] ?></td>
				<td><?php echo $row['no_hp'] ?></td>
				<td>
				<?php 
				$content = $this->uri->segment(2);
      			switch ($content) {
      				case 'anggota_baru':
				?>
				<a href="<?php echo base_url().'index.php/dashboard/anggota_terima/'.$row['nip'] ?>">
				<button class="btn btn-success"><i class="fa fa-check"></i> Terima</button></a>
				<a href="<?php echo base_url().'index.php/dashboard/anggota_hapus/'.$row['nip'] ?>">
				<button class="btn btn-danger"><i class="fa fa-close"></i> Tolak</button></a>
				<?php 
					break;
					case 'anggota_daftar': ?>
					<a href="<?php echo base_url().'index.php/dashboard/anggota_hapus/'.$row['nip'] ?>">
				<button class="btn btn-danger"><i class="fa fa-trash-o"></i> Hapus</button></a>
				<?php
					break;
				}
				?>
				</td>
			</tr>
		<?php } ?>
	</table>
</div>
</div>