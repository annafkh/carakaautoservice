<?php
include "../config/cek_pel.php";
date_default_timezone_set('Asia/Jakarta');
error_reporting(0);
session_start();

$session = $_SESSION['username_pel'];

$db = mysql_query("SELECT * FROM pelanggan WHERE username_pel = '$session'");
$data = mysql_fetch_array($db);
?>

<!doctype html>
<html class="no-js" lang="">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Caraka Auto Service</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
	<link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/lib/datatable/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/profil.css">

	<link rel="shortcut icon" type="image/x-icon" href="../images/logo.PNG">

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

	<!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>

<body>
	<!-- Right Panel -->

	<div id="right-panel" class="right-panel">

		<!-- Header-->
		<header id="header" class="header">
			<div class="top-left">
				<div class="navbar-header">
				</div>
			</div>
		</header><!-- /header -->
		<!-- Header-->
		<div class="container">
			<div class="main-body">
				<div class="row">
					<div class="col-lg-4">
						<div class="card">
							<div class="card-body">
								<div class="d-flex flex-column align-items-center text-center">
									<img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
									<div class="mt-3">
										<h4><?= $data['username_pel']; ?></h4>
										<p class="text-secondary mb-1">Full Stack Developer</p>
										<p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p>
										<a href="../config/logout_pel.php" class="btn btn-info btn-lg">
											<span class="glyphicon glyphicon-log-out"></span> Log out</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-8">
						<div class="card">
							<div class="card-body">
								<form action="./../proses_update.php" method="post">
									<div class="row mb-3">
										<div class="col-sm-3">
											<h6 class="mb-0">Full Name</h6>
										</div>
										<div class="col-sm-9 text-secondary">
											<input type="number" name="id_pelanggan" value="<?= $data['id_pelanggan'] ?>" hidden readonly>
											<input type="text" class="form-control" name="nama" value=<?= $data['nama']; ?>>
										</div>
									</div>
									<div class="row mb-3">
										<div class="col-sm-3">
											<h6 class="mb-0">Username</h6>
										</div>
										<div class="col-sm-9 text-secondary">
											<input type="text" class="form-control" name="username_pel" value=<?= $data['username_pel']; ?>>
										</div>
									</div>
									<div class="row mb-3">
										<div class="col-sm-3">
											<h6 class="mb-0">Phone
											</h6>
										</div>
										<div class="col-sm-9 text-secondary">
											<input type="text" class="form-control" name="hp" value=<?= $data['hp']; ?>>
										</div>
									</div>
									<div class="row mb-3">
										<div class="col-sm-3">
											<h6 class="mb-0">Password</h6>
										</div>
										<div class="col-sm-9 text-secondary">
											<input type="password" id="text-input" name="password" class="form-control" placeholder="*****">
										</div>
									</div>
									<div class="row mb-3">
										<div class="col-sm-3">
											<h6 class="mb-0">Address</h6>
										</div>
										<div class="col-sm-9 text-secondary">
											<textarea name="alamat" class="form-control" cols="50" rows="5"><?= $data['alamat']; ?></textarea>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-3"></div>
										<div class="col-sm-9 text-secondary">
											<input type="submit" class="btn btn-primary px-4" value="Save Changes">
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>



			<!--
      ========================================================
                                  FOOTER
      ========================================================
      -->






			<div class="clearfix"></div>
		</div><!-- /#right-panel -->

		<!-- Right Panel -->

		<!-- Scripts -->
		<script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
		<script src="assets/js/main.js"></script>


		<script src="assets/js/lib/data-table/datatables.min.js"></script>
		<script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
		<script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
		<script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
		<script src="assets/js/lib/data-table/jszip.min.js"></script>
		<script src="assets/js/lib/data-table/vfs_fonts.js"></script>
		<script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
		<script src="assets/js/lib/data-table/buttons.print.min.js"></script>
		<script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
		<script src="assets/js/init/datatables-init.js"></script>


		<script type="text/javascript">
			$(document).ready(function() {
				$('#bootstrap-data-table-export').DataTable();
			});
		</script>


</body>

</html>