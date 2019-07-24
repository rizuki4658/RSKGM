<?php require_once '../navbar_footer/php/session_level.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>RSKGM | Eksodonti</title>
	<link rel="stylesheet" href="../bootstrap-3.3.7/dist/css/bootstrap.css">
    <script src="../bootstrap-3.3.7/dist/js/bootstrap.js"></script>
    <script src="../jquery-3.3.1.js"></script>
    <link rel="stylesheet" href="css/input_edit.css">
    <link href='../img/bandung.png' rel='shortcut icon'>
    <link rel="stylesheet" href="../tambahan/style.css">

</head>
<body>
	<?php require '../navbar_footer/navbar_eksodonti.php'; ?>

	
	<div class="container-fluid bg">
		<img src="../img/dental/Doc.png" class="img-fluid">
		<h4 style="color: white; text-transform: uppercase; margin-bottom: 0; display: inline;">
			<a href="Eksodonti.php" class="links">KLINIK EKSODONTI</a>
		</h4>
		<img src="../img/dental/New Project (1).png" class="img-fluids">
	</div>
	<br>
	
	<div class="container">
	    <h4 class="mb-3">Tambah Data Eksodonti </h4>
	    <br>
	    <div class="box">
			<form class="form form-inline" method="Post" action="php/proses_simpan.php">
				<table class="table">
					<tr>
						<th><label>1. Pencabutan Gigi tetap</label></th>
						<td>:</td>
						<td>
							<input type="number" name="input1" class="form-control" min="0" value="0">
							<small>Pasien</small>
						</td>
					</tr>
				</table>

				<table class="table">
					<tr>
						<th><label>2. Pencabutan Gigi tetap dengan topikal</label></th>
						<td>:</td>
						<td>
							<input type="number" name="input2" class="form-control" min="0" value="0">
							<small>Pasien</small>
						</td>
					</tr>
				</table>

				<table class="table">
					<thead>
						<tr>
							<th><label>3. Pencabutan Gigi Tetap</label></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><label>a. dengan Curetase</label></td>
							<td>:</td>
							<td>
								<input type="number" name="input3" class="form-control" min="0" value="0">
								<small>Pasien</small>
							</td>
						</tr>
						<tr>
							<td><label>b. Post trauma</label></td>
							<td>:</td>
							<td>
								<input type="number" name="input4" class="form-control" min="0" value="0">
								<small>Pasien</small>
							</td>
						</tr>
					</tbody>
				</table>

				<table class="table">
					<tr>
						<th><label>4. Pencabutan Gigi anak anastesi topikal</label></th>
						<td>:</td>
						<td>
							<input type="number" name="input5" class="form-control" min="0" value="0">
							<small>Pasien</small>
						</td>
					</tr>
				</table>

				<table class="table">
					<tr>
						<th><label>5. Hecting 1-3 jahitan</label></th>
						<td>:</td>
						<td>
							<input type="number" name="input6" class="form-control" min="0" value="0">
							<small>Pasien</small>
						</td>
					</tr>
				</table>

				<table class="table">
					<thead>
						<tr>
							<th><label>6.</label></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><label>a. Penanggulangan dry socket</label></td>
							<td>:</td>
							<td>
								<input type="number" name="input7" class="form-control" min="0" value="0">
								<small>Pasien</small>
							</td>
						</tr>
						<tr>
							<td><label>b. Curet dry socket</label></td>
							<td>:</td>
							<td>
								<input type="number" name="input8" class="form-control" min="0" value="0">
								<small>Pasien</small>
							</td>
						</tr>
					</tbody>
				</table>


				<table class="table">
					<tr>
						<th><label>7. Kontrol Post Pencabutan Gigi</label></th>
						<td>:</td>
						<td>
							<input type="number" name="input9" class="form-control" min="0" value="0">
							<small>Pasien</small>
						</td>
					</tr>
				</table>

				<table class="table">
					<tr>
						<th><label>8. Open Bor</label></th>
						<td>:</td>
						<td>
							<input type="number" name="input10" class="form-control" min="0" value="0">
							<small>Pasien</small>
						</td>
					</tr>
				</table>

				<table class="table">
					<tr>
						<th><label>9. OKlusal Adjustment</label></th>
						<td>:</td>
						<td>
							<input type="number" name="input11" class="form-control" min="0" value="0">
							<small>Pasien</small>
						</td>
					</tr>
				</table>

				<table class="table">
					<tr>
						<th><label>10. Penanganan Pendarahan</label></th>
						<td>:</td>
						<td>
							<input type="number" name="input12" class="form-control" min="0" value="0">
							<small>Pasien</small>
						</td>
					</tr>
				</table>




				<table class="table">
					<tr>
						<th><label>11. Pencabutan Gigi dengan Flap</label></th>
						<td>:</td>
						<td>
							<input type="number" name="input13" class="form-control" min="0" value="0">
							<small>Pasien</small>
						</td>
					</tr>
				</table>

				<table class="table">
					<tr>
						<th><label>12. Pemberian Resep</label></th>
						<td>:</td>
						<td>
							<input type="number" name="input14" class="form-control" min="0" value="0">
							<small>Pasien</small>
						</td>
					</tr>
				</table>

				<table class="table">
					<tr>
						<th><label>13. Arsen</label></th>
						<td>:</td>
						<td>
							<input type="number" name="input15" class="form-control" min="0" value="0">
							<small>Pasien</small>
						</td>
					</tr>
				</table>

				<table class="table">
					<tr>
						<th><label>Pasien Baru</label></th>
						<td>:</td>
						<td>
							<input type="number" name="input16" class="form-control" min="0" value="0">
							<small>Pasien</small>
						</td>
					</tr>
				</table>

				

				<table class="table">
					<tr>
						<th><label>Pasien Lama</label></th>
						<td>:</td>
						<td>
							<input type="number" name="input17" class="form-control" min="0" value="0">
							<small>Pasien</small>
						</td>
					</tr>
				</table>

				<table class="table">
					<tr>
						<th><label>Status Pasien</label></th>
						<td>:</td>
						<td>
							<select name="status" class="form-control" required>
								<option></option>
								<option>BPJS</option>
								<option>Umum</option>
								<option>Gratis</option>
							</select>
							<small>BPJS/Umum/Gratis</small>
						</td>
					</tr>
					<tr>
						<th><label>Tgl. Input</label></th>
						<td>:</td>
						<td>
							<input type="date" name="tgl" class="form-control" required>
						</td>
					</tr>
				</table>

				<button type="submit" class="btn btn-outline-primary">SIMPAN</button>
				<button type="reset" class="btn btn-outline-primary">RESET</button>
			</form>
		</div>
	</div>

	<?php require '../navbar_footer/footer_level.php'; ?>