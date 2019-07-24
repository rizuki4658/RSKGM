<?php require_once 'navbar_footer/php/session.php'; ?>
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
	
	<?php require 'navbar_footer/navbar.php'; ?>
	
	<hr style="border: 2px solid rgba(0, 143, 213, 1);">
	<div class="container">
		<center>
			<div class="box">
				<img src="img/icon/id-card.png" class="img-fluidss">
				<h4>PROFIL SAYA</h4>
				<form class="form" method="post" action="Login Daftar/Daftar/php/proses_edit.php">
					<div class="input-group">
					  <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Lengkap" aria-describedby="basic-addon1" minlength="6" style="text-transform: uppercase;" value="<?php echo $nama; ?>" required >
					</div>
					<div class="input-group">
					  <input type="email" id="email" name="email" class="form-control" placeholder="Email" value="<?php echo $email; ?>" required>
					</div>
					<div class="input-group">
					  <input type="password" id="password" name="password" class="form-control" placeholder="Password"  minlength="8" required>
					</div>
					<div class="input-group">
					  <input type="password" id="password2" name="password2" class="form-control" placeholder="Konfirmasi Password" oninput="check2(this);" onkeypress="check2(this)" required >
					</div>
					<div class="input-group">
					  <button type="submit" class="btn btn-outline-primary">Update</button>
					</div>
				</form>
			</div>	
		</center>
	</div>

	<?php require 'navbar_footer/footer.php'; ?>