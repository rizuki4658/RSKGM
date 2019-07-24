<?php require_once 'navbar_footer/php/session.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>RSKGM | Beranda</title>
	<link rel="stylesheet" href="bootstrap-3.3.7/dist/css/bootstrap.css">
    <script src="bootstrap-3.3.7/dist/js/bootstrap.js"></script>
    <script src="jquery-3.3.1.js"></script>
    <link rel="stylesheet" href="assets/Index/css/css Index.css">
    <link href='img/bandung.png' rel='shortcut icon'>
    <style type="text/css">
		.dropdown-submenu {
		    position: relative;
		}

		.dropdown-submenu .dropdown-menu {
		    top: 0;
		    left: 100%;
		    margin-top: -1px;
		}
    </style>
</head>
<body>
	
	<?php require 'navbar_footer/navbar.php'; ?>
	
	<div class="container-fluid bg">
		<center>
			<img src="img/bandung.png" class="img-fluid" id="gambar_bandung">
			<h4 class="judul_satu">Sistem Informasi Rekapitulasi Kunjungan</h4>
			<h3 class="judul_dua">Rumah sakit khusus gigi dan mulut</h3>
			<h3 class="judul_tiga">Kota bandung</h3>
		</center>
	</div>

	<br>

	<div class="container" id="container">
		<h3>ALUR SISTEM : </h3>
		<center>
			<img src="img/New Project.png" class="img-fluidss" alt="Alur Sistem" id="gambar_alur">
		</center>
		Gambar di atas menjelaskan alur sistem informasi rekapitulasi kegiatan secara sederhana. Wajar apabila terjadi perbedaan pada saat proses penginputan. Penjelasan pada gambar di tujukan untuk user yang baru pertama kali melakukan input, agar terhindar dari keselahan penginputan.
	</div>

	<?php require 'navbar_footer/footer.php'; ?>
	