<!DOCTYPE html>
<html>
<head>
	<title>RSKGM | Daftar</title>
	<link rel="stylesheet" href="bootstrap-3.3.7/dist/css/bootstrap.css">
    <script src="bootstrap-3.3.7/dist/js/bootstrap.js"></script>
    <script src="jquery-3.3.1.js"></script>
    <link rel="stylesheet" href="assets/Daftar/daftar.css">
    <link href='img/bandung.png' rel='shortcut icon'>
</head>
<body>
	
	<?php require 'navbar_footer/navbar_login.php'; ?>
	
	<hr style="border: 2px solid rgba(0, 143, 213, 1);">
	<div class="container">
		<center>
			<div class="box">
				<img src="img/icon/lock (1).png" class="img-fluidss">
				<h4>Daftar user</h4>
				<form class="form" method="post" action="Login Daftar/Daftar/php/proses_daftar.php">
					<div class="input-group">
					  <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Lengkap" aria-describedby="basic-addon1" required minlength="6">
					</div>
					<div class="input-group">
					  <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
					</div>
					<div class="input-group">
					  <input type="email2" id="email2" name="email2" class="form-control" placeholder="Konfirmasi Email" oninput="check1(this);" onkeypress="check1(this)" required>
					</div>
					<div class="input-group">
					  <input type="password" id="password" name="password" class="form-control" placeholder="Password"  required minlength="8">
					</div>
					<div class="input-group">
					  <input type="password" id="password2" name="password2" class="form-control" placeholder="Konfirmasi Password" oninput="check2(this);" onkeypress="check2(this)" required >
					</div>
					<div class="input-group">
					  <button type="submit" class="btn btn-outline-primary">Daftar</button>
					</div>
				</form>

			<ul style="list-style: none;">
				<li>Sudah memiliki akun ?, Klik di<a href="login.php">sini </a>untuk login.</li>
			</ul>
			</div>	
		</center>
	</div>

	<?php require 'navbar_footer/footer.php'; ?>