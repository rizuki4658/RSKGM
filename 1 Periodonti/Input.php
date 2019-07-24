<?php require_once '../navbar_footer/php/session_level.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>RSKGM | Periodonti</title>
	<link rel="stylesheet" href="../bootstrap-3.3.7/dist/css/bootstrap.css">
    <link rel="stylesheet" href="css/input_edit.css">
    <link href='../img/bandung.png' rel='shortcut icon'>
    <link rel="stylesheet" href="../tambahan/style.css">

</head>
<body>
	<?php require '../navbar_footer/navbar_periodonti.php'; ?>

	
	<div class="container-fluid bg">
		<img src="../img/dental/Doc.png" class="img-fluid">
		<h4 class="judul_klinik">
			<a href="Periodonti.php" class="links">KLINIK PERIODONTI</a>
		</h4>
		<img src="../img/dental/New Project (1).png" class="img-fluids">
	</div>
	<br>
	
	<div class="container">
	    <h4 class="mb-3">Tambah Data Periodonti </h4>
	    <br>
		<center>
			<table class="table">
				<form method="post" action="php/proses_simpan.php">
				<tr>
					<td class="kol1"><label for="input1">Macro Sacalling</label></td>
					<td class="titik">:</td>
					<td><input type="number" name="input1" id="input1" min="0" class="form-control" required></td>
					<td class="last"><small>Pasien</small></td>
				</tr>
				<tr>
					<td><label for="input2">Root Planing</label></td>
					<td class="titik">:</td>
					<td><input type="number" name="input2" id="input2" min="0" class="form-control" required></td>
					<td><small>Pasien</small></td>
				</tr>
				<tr>
					<td><label for="input3">Kuretase Gingiva</label></td>
					<td class="titik">:</td>
					<td class="input"><input type="number" name="input3" id="input3" min="0" class="form-control" required></td>
					<td><small>Pasien</small></td>
				</tr>
				<tr>
					<td><label for="input4">Splinting</label></td>
					<td class="titik">:</td>
					<td><input type="number" name="input4" id="input4" min="0" class="form-control" required></td>
					<td><small>Pasien</small></td>
				</tr>
				<tr>
					<td><label for="input5">Oclusal Adjustment</label></td>
					<td class="titik">:</td>
					<td><input type="number" name="input5" id="input5" min="0" class="form-control" required></td>
					<td><small>Pasien</small></td>
				</tr>
				<tr>
					<td><label for="input6">Kontrol</label></td>
					<td class="titik">:</td>
					<td><input type="number" name="input6" id="input6" min="0" class="form-control" required></td>
					<td><small>Pasien</small></td>
				</tr>
				<tr>
					<td><label for="input7">Pasien Baru</label></td>
					<td class="titik">:</td>
					<td><input type="number" name="input7" id="input7"min="0"  class="form-control" required></td>
					<td><small>Pasien</small></td>
				</tr>
				<tr>
					<td><label for="input8">Pasien Lama</label></td>
					<td class="titik">:</td>
					<td><input type="number" name="input8" id="input8" min="0" class="form-control" required></td>
					<td><small>Pasien</small></td>
				</tr>
				<tr>
					<td><label for="input9">Tanggal</label></td>
					<td class="titik">:</td>
					<td><input type="date" name="input9" id="input9" class="form-control" required></td>
					<td><small>Pasien</small></td>
				</tr>
				<tr>
					<td><label for="status">Status Pasien</label></td>
					<td class="titik">:</td>
					<td>
						<select name="status" id="status" class="form-control" required>
							<option></option>
							<option>UMUM</option>
							<option>BPJS</option>
							<option>GRATIS</option>
						</select>
					</td>
					<td><small>BPJS/Umum/Gratis</small></td>
				</tr>
				<tr>
					<td colspan="4">
						<button type="submit" class="btn btn-outline-primary">SIMPAN</button>
						<button type="reset" class="btn btn-outline-primary">RESET</button>
					</td>
				</tr>
				</form>
			</table>
		</center>
	</div>

	<?php require '../navbar_footer/footer_level.php'; ?>

