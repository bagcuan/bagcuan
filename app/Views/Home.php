<?php
	$this->extend('container');

	$this->section('isi');
?>
<div class="card text-center">

	<div class="card-header"> <i class="fas fa-chart-area"></i>JUMLAH ANGGOTA</div>
	<div class="p-2 flex-shrink-1">
		<form class=" d-flex" role="search">
			<input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
			<button class="btn btn-light" type="button">
				<i class="fas fa-search"></i>
			</button>
		</form>




		<div class="card mb-3">
			<div class="card-header">
				<a><i class="fas fa-plus"></i> TAMBAH DATA</a>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
						<thead>
							<tr>
								<th>NRP</th>
								<th>NAMA</th>
								<th>PANGKAT</th>
								<th>JABATAN</th>
								<th>AKSI</th>
							</tr>
						</thead>
						<tbody>
							<?php
								foreach($data_anggota as $k) :
							?>
							
							<tr>
								<td><?php echo $k['nrp']; ?></td>
								<td><?php echo $k['nama']; ?></td>
								<td><?php echo $k['pangkat']; ?></td>
								<td><?php echo $k['jabatan']; ?></td>
								<td><a href="">lihat</a></td>
							</tr>
								<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
	$this->endSection();
?>