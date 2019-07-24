<?php require_once '../navbar_footer/php/session_level.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>RSKGM | Oral Surgery/Bedah Mulut</title>
	<link rel="stylesheet" href="../bootstrap-3.3.7/dist/css/bootstrap.css">
    <script src="../bootstrap-3.3.7/dist/js/bootstrap.js"></script>
    <script src="../jquery-3.3.1.js"></script>
    <link rel="stylesheet" href="css/input_edit.css">
    <link href='../img/bandung.png' rel='shortcut icon'>
    <link rel="stylesheet" href="../tambahan/style.css">

</head>
<body>
	<?php require '../navbar_footer/navbar_oral_sugery.php'; ?>

	
	<div class="container-fluid bg">
		<img src="../img/dental/Doc.png" class="img-fluid">
		<h4 style="color: white; text-transform: uppercase; margin-bottom: 0; display: inline;">
			<a href="Oral Surgery.php" class="links">KLINIK ORAL SURGERY</a>
		</h4>
		<img src="../img/dental/New Project (1).png" class="img-fluids">
	</div>
	<br>
	
	<div class="container">
	    <h4 class="mb-3">Tambah Data Oral Surgery </h4>
	    <br>
	    <div class="box">
			<form class="form form-inline" method="post" action="php/proses_simpan.php">
				<table class="table">
					<tr>
						<th><label>1. Pencabutan Gigi tetap post trauma</label></th>
						<td>:</td>
						<td>
							<input type="number" name="input1" class="form-control" min="0" value="0">
							<small>Pasien</small>
						</td>
					</tr>
				</table>

				<table class="table">
					<tr>
						<th><label>2. Pencabutan Gigi tetap dengan komplikasi</label></th>
						<td>:</td>
						<td>
							<input type="number" name="input2" class="form-control" min="0" value="0">
							<small>Pasien</small>
						</td>
					</tr>
				</table>

				<table class="table">
					<tr>
						<th><label>3. Insisi Abses dan drainage</label></th>
						<td>:</td>
						<td>
							<input type="number" name="input3" class="form-control" min="0" value="0">
							<small>Pasien</small>
						</td>
					</tr>
				</table>

				<table class="table">
					<tr>
						<th><label>4. Ekstraksi fragmen fraktur gigi dg flap</label></th>
						<td>:</td>
						<td>
							<input type="number" name="input4" class="form-control" min="0" value="0">
							<small>Pasien</small>
						</td>
					</tr>
				</table>

				<table class="table">
					<tr>
						<th><label>5. Alveolectomy</label></th>
						<td>:</td>
						<td>
							<input type="number" name="input5" class="form-control" min="0" value="0">
							<small>Pasien</small>
						</td>
					</tr>
				</table>

				<table class="table">
					<tr>
						<th><label>6. Upperculectomy</label></th>
						<td>:</td>
						<td>
							<input type="number" name="input6" class="form-control" min="0" value="0">
							<small>Pasien</small>
						</td>
					</tr>
				</table>


				<table class="table">
					<tr>
						<th><label>7. Extirpasi Muccocele</label></th>
						<td>:</td>
						<td>
							<input type="number" name="input7" class="form-control" min="0" value="0">
							<small>Pasien</small>
						</td>
					</tr>
				</table>

				<table class="table">
					<tr>
						<th><label>8. Odontectomy Tingkat I</label></th>
						<td>:</td>
						<td>
							<input type="number" name="input8" class="form-control" min="0" value="0">
							<small>Pasien</small>
						</td>
					</tr>
				</table>

				<table class="table">
					<tr>
						<th><label>9. Odontectomy Tingkat II</label></th>
						<td>:</td>
						<td>
							<input type="number" name="input9" class="form-control" min="0" value="0">
							<small>Pasien</small>
						</td>
					</tr>
				</table>

				<table class="table">
					<tr>
						<th><label>10. Odontectomy Tingkat III</label></th>
						<td>:</td>
						<td>
							<input type="number" name="input10" class="form-control" min="0" value="0">
							<small>Pasien</small>
						</td>
					</tr>
				</table>




				<table class="table">
					<thead>
						<tr>
							<th><label>11. Hechting</label></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><label>a. Hechting 1-3 jahitan</label></td>
							<td>:</td>
							<td>
								<input type="number" name="input11" class="form-control" min="0" value="0">
								<small>Pasien</small>
							</td>
						</tr>
						<tr>
							<td><label>b. Hechting >3 jahitan</label></td>
							<td>:</td>
							<td>
								<input type="number" name="input12" class="form-control" min="0" value="0">
								<small>Pasien</small>
							</td>
						</tr>
					</tbody>
				</table>

				<table class="table">
					<tr>
						<th><label>12. Curret dry socket</label></th>
						<td>:</td>
						<td>
							<input type="number" name="input13" class="form-control" min="0" value="0">
							<small>Pasien</small>
						</td>
					</tr>
				</table>

				<table class="table">
					<tr>
						<th><label>13. Konsultasi</label></th>
						<td>:</td>
						<td>
							<input type="number" name="input14" class="form-control" min="0" value="0">
							<small>Pasien</small>
						</td>
					</tr>
				</table>
				
				<table class="table">
					<tr>
						<th><label>14. Pasang / Ganti Drain</label></th>
						<td>:</td>
						<td>
							<input type="number" name="input15" class="form-control" min="0" value="0">
							<small>Pasien</small>
						</td>
					</tr>
				</table>

				<table class="table">
					<tr>
						<th><label>15. Kontrol</label></th>
						<td>:</td>
						<td>
							<input type="number" name="input16" class="form-control" min="0" value="0">
							<small>Pasien</small>
						</td>
					</tr>
				</table>

				<table class="table">
					<tr>
						<th><label>16. Buka Jahitan</label></th>
						<td>:</td>
						<td>
							<input type="number" name="input17" class="form-control" min="0" value="0">
							<small>Pasien</small>
						</td>
					</tr>
				</table>

				<table class="table">
					<tr>
						<th><label>17. Ganti Balutan</label></th>
						<td>:</td>
						<td>
							<input type="number" name="input18" class="form-control" min="0" value="0">
							<small>Pasien</small>
						</td>
					</tr>
				</table>

				<table class="table">
					<tr>
						<th><label>Pasien Baru</label></th>
						<td>:</td>
						<td>
							<input type="number" name="input19" class="form-control" min="0" value="0">
							<small>Pasien</small>
						</td>
					</tr>
				</table>

				

				<table class="table">
					<tr>
						<th><label>Pasien Lama</label></th>
						<td>:</td>
						<td>
							<input type="number" name="input20" class="form-control" min="0" value="0">
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