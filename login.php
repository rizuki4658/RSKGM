<!DOCTYPE html>
<html>
<head>
	<title>RSKGM | Login</title>
	<link rel="stylesheet" href="bootstrap-3.3.7/dist/css/bootstrap.css">
    <link rel="stylesheet" href="assets/Login/login.css">
    <link href='img/bandung.png' rel='shortcut icon'>
    <style type="text/css">
    	#loginnya{
    		display: none;
    	}
    </style>
</head>
<body>
	
	<?php require 'navbar_footer/navbar_login.php'; ?>
	
	<hr style="border: 2px solid rgba(0, 143, 213, 1);">
	<br>
	<br>
	<div class="container" id="loginnya">
		<center>
			<div class="box">
				<h4 style="text-transform: uppercase;">Sistem Informasi Rekapitulasi Kegiatan</h4>
				<img src="img/icon/lock.png" class="img-fluidss">
				<h4>Login user</h4>
				<form class="form" method="post" action="Login Daftar/Login/proses_login.php?STS=IN">
					<div class="input-group">
					  <input type="email" id="email" name="email" class="form-control" placeholder="Email" aria-describedby="basic-addon1" required>
					</div>
					<div class="input-group">
					  <input type="password" id="password" name="password" class="form-control" placeholder="Password" aria-describedby="basic-addon1" required minlength="8">
					</div>
					<div class="input-group">
					  <button type="submit" class="btn btn-outline-primary">Login</button>
					</div>
				</form>

			<ul style="list-style: none;">
				<li>Belum memiliki akun ?, Klik di<a href="daftar.php">sini </a>untuk daftar.</li>
			</ul>
			</div>	
		</center>
	</div>


	<?php require 'navbar_footer/footer.php'; ?>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#loginnya').fadeIn(1500);
		});
	</script>	