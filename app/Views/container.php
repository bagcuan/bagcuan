<html lang="en">

<head>
	<title>Sistem Personel</title>
	<script type="text/javascript" src="<?php echo base_url(); ?>/public/js/bootstrap.bundle.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>/public/js/jquery-3.6.0.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>/public/js/jquery.dataTables.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>/public/js/dataTables.bootstrap4.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>/public/js/dataTables.bootstrap4.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>/public/fontawesome/css/all.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>/public/fontawesome/js/all.min.js"></script>



	<link href="<?php echo base_url(); ?>/public/css/bootstrap.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>/public/style/style.css" rel="stylesheet">


</head>

<body>
	<nav class="navbar navbar-secondary bg-secondary">
		<div class="container-fluid">
			<button class="btn btn-secondary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">MENU <i class="fa-solid fa-bars"></i></button>
			<h3>SISPERS (SISTEM INFORMASI PERSONEL)</h3>

			<form class=" d-flex" role="search">
				<input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
				<button class="btn btn-light" type="button">
					<i class="fas fa-search"></i>
				</button>

			</form>
		</div>
	</nav>


	<div class="offcanvas offcanvas-start" data-bs-backdrop="#545b62" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
		<div class="offcanvas-header">
			<h5 class="offcanvas-title " id="offcanvasScrollingLabel">SISPERS</h5>
			<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
		</div>
		<div class="dropdown ">
			<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown">
				PERSONEL
			</button>
			<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				<li><a class="dropdown-item" href="#">LIST ANGGOTA</a></li>
			</ul>
		</div>
	</div>
</body>


<style type="text/css">
	.offcanvasScrolling {
		width: 90px !important;
		background-color: #545b62;
		min-height: calc(100vh - 56px);
	}
</style>

</html>