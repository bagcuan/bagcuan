<html lang="en">

<head>
	<title>Sistem Personel</title>
	<script type="text/javascript" src="<?php echo base_url(); ?>/public/js/bootstrap.bundle.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>/public/js/jquery-3.6.0.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>/public/js/jquery.dataTables.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>/public/js/dataTables.bootstrap4.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>/public/js/dataTables.bootstrap4.js"></script>
	
	<script type="text/javascript" src="<?php echo base_url(); ?>/public/fontawesome/js/all.min.js"></script>



	<link href="<?php echo base_url(); ?>/public/css/bootstrap.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>/public/style/style.css" rel="stylesheet">


</head>

<body>
	<nav class="navbar navbar-aqua bg-aqua">
		<div class="">
			<button class="btn btn-secondary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">MENU <i class="fa-solid fa-bars"></i></button>
		</div>
		<h3>SISPERS (SISTEM INFORMASI PERSONEL)</h3>
	</nav>


	<div class="offcanvas offcanvas-start" data-bs-backdrop="#545b62" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
		<div class="offcanvas-header">
			<h5 class="offcanvas-title " id="offcanvasScrollingLabel">SISPERS</h5>
			<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
		</div>

		<div class="btn-group dropend">
			<button class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
				ADMIN
			</button>
			<ul class="dropdown-menu">
				<li><a class="dropdown-item" href="#">LIST ADMIN</a></li>
				<li><a class="dropdown-item" href="#">TAMBAH ADMIN</a></li>
			</ul>
		</div>
		<br>

		<div class="btn-group dropend">
			<button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
				ANGGOTA
			</button>
			<ul class="dropdown-menu">
				<li><a class="dropdown-item" href="#">LIST ANGGOTA</a></li>
				<li><a class="dropdown-item" href="#">TAMBAH ANGGOTA</a></li>
			</ul>
		</div>
		<br>
		<div class="btn-group ">
			<button type="button" class="btn btn-secondary " data-bs-toggle="dropdown" aria-expanded="false">
				KELUAR
			</button>
		</div>
	</div>


	<?php 
		$this->renderSection('isi');
	?>
	<div class="card-footer small text-muted"><span>Copyright <?php echo "BAGRENMIN ", DATE("Y")  ?></span></div>

	</div>



</body>


</html>