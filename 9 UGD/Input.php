<?php require_once '../navbar_footer/php/session_level.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>RSKGM | UGD</title>
	<link rel="stylesheet" href="../bootstrap-3.3.7/dist/css/bootstrap.css">
    <script src="../bootstrap-3.3.7/dist/js/bootstrap.js"></script>
    <script src="../jquery-3.3.1.js"></script>
    <link rel="stylesheet" href="css/input_edit.css">
    <link href='../img/bandung.png' rel='shortcut icon'>
    <link rel="stylesheet" href="../tambahan/style.css">

</head>
<body>
	<?php require '../navbar_footer/navbar_ugd.php'; ?>

	
	<div class="container-fluid bg">
		<img src="../img/dental/Doc.png" class="img-fluid">
		<h4 style="color: white; text-transform: uppercase; margin-bottom: 0; display: inline;">
			<a href="UGD.php" class="links">UNIT GAWAT DARURAT</a>
		</h4>
		<img src="../img/dental/New Project (1).png" class="img-fluids">
	</div>
	<br>
	
	<div class="container">
	    <h4 class="mb-3">Tambah Data UGD</h4>
	    <br>
	    <div class="box">
			<form class="form form-inline" method="post" action="php/proses_simpan.php">
				<table class="table">
					<tr>
						<th><label>1. Pemeriksaan darurat medik gigi dan mulut</label></th>
						<td>:</td>
						<td>
							<input type="number" name="input1" class="form-control" min="0" value="0">
							<small>Pasien</small>
						</td>
					</tr>
				</table>

				<table class="table">
					<tr>
						<th><label>2. One Day Care (observasi lebih dari 6 jam)</label></th>
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
							<th><label>3. Debridement orafacial</label></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><label>a. Ringan</label></td>
							<td>:</td>
							<td>
								<input type="number" name="input3" class="form-control" min="0" value="0">
								<small>Pasien</small>
							</td>
						</tr>
						<tr>
							<td><label>b. Sedang</label></td>
							<td>:</td>
							<td>
								<input type="number" name="input4" class="form-control" min="0" value="0">
								<small>Pasien</small>
							</td>
						</tr>
						<tr>
							<td><label>c. Berat</label></td>
							<td>:</td>
							<td>
								<input type="number" name="input5" class="form-control" min="0" value="0">
								<small>Pasien</small>
							</td>
						</tr>
					</tbody>
				</table>

				<table class="table">
					<thead>
						<tr>
							<th><label>4. Hechting</label></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><label>a. Pendarahan Post Ekstraksi</label></td>
							<td>:</td>
							<td>
								<input type="number" name="input6" class="form-control" min="0" value="0">
								<small>Pasien</small>
							</td>
						</tr>
						<tr>
							<td><label>b. Hechting >3 jahitan</label></td>
							<td>:</td>
							<td>
								<input type="number" name="input7" class="form-control" min="0" value="0">
								<small>Pasien</small>
							</td>
						</tr>
						<tr>
							<td><label>c. Hechting >3 jahitan + Cuttis</label></td>
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
						<th><label>5. Ekstraksi Post Trauma</label></th>
						<td>:</td>
						<td>
							<input type="number" name="input9" class="form-control" min="0" value="0">
							<small>Pasien</small>
						</td>
					</tr>
				</table>

				<table class="table">
					<tr>
						<th><label>6. Alveolektomi (Dento Alveolar)</label></th>
						<td>:</td>
						<td>
							<input type="number" name="input10" class="form-control" min="0" value="0">
							<small>Pasien</small>
						</td>
					</tr>
				</table>


				<table class="table">
					<tr>
						<th><label>7. Open Bor</label></th>
						<td>:</td>
						<td>
							<input type="number" name="input11" class="form-control" min="0" value="0">
							<small>Pasien</small>
						</td>
					</tr>
				</table>

				<table class="table">
					<tr>
						<th><label>8. Incisi Abses dan drainage</label></th>
						<td>:</td>
						<td>
							<input type="number" name="input12" class="form-control" min="0" value="0">
							<small>Pasien</small>
						</td>
					</tr>
				</table>

				<table class="table">
					<tr>
						<th><label>9. Curret dry socket</label></th>
						<td>:</td>
						<td>
							<input type="number" name="input13" class="form-control" min="0" value="0">
							<small>Pasien</small>
						</td>
					</tr>
				</table>

				<table class="table">
					<tr>
						<th><label>10. Reposisi dislokasi rahang</label></th>
						<td>:</td>
						<td>
							<input type="number" name="input14" class="form-control" min="0" value="0">
							<small>Pasien</small>
						</td>
					</tr>
				</table>


				<table class="table">
					<tr>
						<th><label>11. Devitalisasi</label></th>
						<td>:</td>
						<td>
							<input type="number" name="input15" class="form-control" min="0" value="0">
							<small>Pasien</small>
						</td>
					</tr>
				</table>

				<table class="table">
					<tr>
						<th><label>12. Trepanasi</label></th>
						<td>:</td>
						<td>
							<input type="number" name="input16" class="form-control" min="0" value="0">
							<small>Pasien</small>
						</td>
					</tr>
				</table>

				<table class="table">
					<tr>
						<th><label>13. Rotattion of medication</label></th>
						<td>:</td>
						<td>
							<input type="number" name="input17" class="form-control" min="0" value="0">
							<small>Pasien</small>
						</td>
					</tr>
				</table>
				
				<table class="table">
					<tr>
						<th><label>14. Menerima Rujukan</label></th>
						<td>:</td>
						<td>
							<input type="number" name="input18" class="form-control" min="0" value="0">
							<small>Pasien</small>
						</td>
					</tr>
				</table>

				<table class="table">
					<tr>
						<th><label>15. Merujuk</label></th>
						<td>:</td>
						<td>
							<input type="number" name="input19" class="form-control" min="0" value="0">
							<small>Pasien</small>
						</td>
					</tr>
				</table>

				<table class="table">
					<tr>
						<th><label>16. Konsultasi</label></th>
						<td>:</td>
						<td>
							<input type="number" name="input20" class="form-control" min="0" value="0">
							<small>Pasien</small>
						</td>
					</tr>
				</table>

				<table class="table">
					<tr>
						<th><label>17. Pemberian Resep</label></th>
						<td>:</td>
						<td>
							<input type="number" name="input21" class="form-control" min="0" value="0">
							<small>Pasien</small>
						</td>
					</tr>
				</table>

				<table class="table">
					<tr>
						<th><label>Pasien Baru</label></th>
						<td>:</td>
						<td>
							<input type="number" name="input22" class="form-control" min="0" value="0">
							<small>Pasien</small>
						</td>
					</tr>
				</table>

				

				<table class="table">
					<tr>
						<th><label>Pasien Lama</label></th>
						<td>:</td>
						<td>
							<input type="number" name="input23" class="form-control" min="0" value="0">
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