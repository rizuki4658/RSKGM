<?php require_once 'navbar_footer/php/session.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>RSKGM | Galeri</title>
	<link rel="stylesheet" href="bootstrap-3.3.7/dist/css/bootstrap.css">
    <link rel="stylesheet" href="assets/Galeri/galeri.css">
    <link href='img/bandung.png' rel='shortcut icon'>
    <style type="text/css">
    	#tabel_foto,.galerinya{
    		display: none;
    	}

    </style>
</head>
<body>
	
	<?php require 'navbar_footer/navbar.php'; ?>
	
	<div class="container-fluid bg">
			<h4 style="color: white; text-transform: uppercase; margin-bottom: 0;">| Galeri</h4>
	</div>
	

	<div class="container"  id="tabel_foto">
		<h3>| Foto : </h3>
		<table class="table table-bordered">
			<tr>
				<td class="gambar">
					<a href="#" data-toggle="modal" data-target="#modalGaleri6" id="ID6">
						<img src="img/Ruangan/G6.jpg" class="img-fluidss">
					</a>
				</td>
				<td class="gambar">
					<a href="#" data-toggle="modal" data-target="#modalGaleri5" id="ID5">
						<img src="img/Ruangan/G5.jpg" class="img-fluidss">
					</a>
				</td>
				<td class="gambar">
					<a href="#" data-toggle="modal" data-target="#modalGaleri4" id="ID4">
						<img src="img/Ruangan/G4.jpg" class="img-fluidss">
					</a>
				</td>
			</tr>
			<tr>
				<td class="gambar">
					<a href="#" data-toggle="modal" data-target="#modalGaleri3" id="ID3">
						<img src="img/Ruangan/G3.jpg" class="img-fluidss">
					</a>
				</td><td class="gambar">
					<a href="#" data-toggle="modal" data-target="#modalGaleri2" id="ID2">
						<img src="img/Ruangan/G2.jpg" class="img-fluidss">
					</a>
				</td>
				<td class="gambar">
					<a href="#" data-toggle="modal" data-target="#modalGaleri1" id="ID1">
						<img src="img/Ruangan/G1.jpg" class="img-fluidss">
					</a>
				</td>
			</tr>
		</table>

		<h3>| Video : </h3>
		<table class="table">
			<tr>
				<td>
					<video controls class="video-fluids">
						<source src="img/V1.mp4" type="video/mp4">	
					</video>			
				</td>
			</tr>
		</table>
	</div>
	<?php require_once 'galeri/modal_tampil.php'; ?>
	<?php require 'navbar_footer/footer.php'; ?>
	<script type="text/javascript">
		$('document').ready(function(){
			$('#tabel_foto').fadeIn(1500);
			$('.img-fluidss').click(function(){
				$('.galerinya').fadeIn(2000);
			});
		});
	</script>