<?php require_once '../navbar_footer/php/session_level.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>RSKGM | Prostodonti</title>
	<link rel="stylesheet" href="../bootstrap-3.3.7/dist/css/bootstrap.css">
    <script src="../bootstrap-3.3.7/dist/js/bootstrap.js"></script>
    <script src="../jquery-3.3.1.js"></script>
    <link rel="stylesheet" href="css/input_edit.css">
    <link href='../img/bandung.png' rel='shortcut icon'>
    <link rel="stylesheet" href="../tambahan/style.css">

</head>
<body>
	<?php require '../navbar_footer/navbar_prostodonti.php'; ?>

	
	<div class="container-fluid bg">
		<img src="../img/dental/Doc.png" class="img-fluid">
		<h4 style="color: white; text-transform: uppercase; margin-bottom: 0; display: inline;">
			<a href="Prostodonti.php" class="links">KLINIK PROSTODONTI</a>
		</h4>
		<img src="../img/dental/New Project (1).png" class="img-fluids">
	</div>
	<br>
	
	<div class="container">
	    <h4 class="mb-3">Tambah Data Prostodonti </h4>
	    <br>
	    <div class="box">
			<form class="form form-inline" method="post" action="php/proses_simpan.php">
				<table class="table">
					<thead>
						<tr>
							<th>1. Acrilyc</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><label>a. Geligi tiruan sebagian dengan 1 gigi</label></td>
							<td>:</td>
							<td>
								<input type="number" name="input1" class="form-control" min="0" value="0">
								<small>Pasien</small>
							</td>
						</tr>
						<tr>
							<td><label>b. Penambahan 1 gigi berikutnya</label></td>
							<td>:</td>
							<td>
								<input type="number" name="input2" class="form-control" min="0" value="0">
								<small>Pasien</small>
							</td>
						</tr>
						<tr>
							<td><label>c. Geligi tiruan penuh Rahang Atas dan Rahang Bawah</label></td>
							<td>:</td>
							<td>
								<input type="number" name="input3" class="form-control" min="0" value="0">
								<small>Pasien</small>
							</td>
						</tr>
						<tr>
							<td><label>d. Geligi tiruan penuh Rahang Atas atau Rahang Bawah</label></td>
							<td>:</td>
							<td>
								<input type="number" name="input4" class="form-control" min="0" value="0">
								<small>Pasien</small>
							</td>
						</tr>
						<tr>
							<td><label>e. Mahkota sementara</label></td>
							<td>:</td>
							<td>
								<input type="number" name="input5" class="form-control" min="0" value="0">
								<small>Pasien</small>
							</td>
						</tr>
						<tr>
							<td><label>f. Jaket</label></td>
							<td>:</td>
							<td>
								<input type="number" name="input6" class="form-control" min="0" value="0">
								<small>Pasien</small>
							</td>
						</tr>
						<tr>
							<td><label>g. Jacket + Backing Logam</label></td>
							<td>:</td>
							<td>
								<input type="number" name="input7" class="form-control" min="0" value="0">
								<small>Pasien</small>
							</td>
						</tr>
						<tr>
							<td><label>h. Relining full denture</label></td>
							<td>:</td>
							<td>
								<input type="number" name="input8" class="form-control" min="0" value="0">
								<small>Pasien</small>
							</td>							
						</tr>
						<tr>
							<td><label>i. Rebasing</label></td>
							<td>:</td>
							<td>
								<input type="number" name="input9" class="form-control" min="0" value="0">
								<small>Pasien</small>
							</td>
						</tr>
					</tbody>
				</table>
				
				<br>
				
				<table class="table">
					<thead>
						<tr>
							<th><label>2. Kerangka Logam dan Dental</label></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><label>a. Geligi tiruan sebagian dengan 1 gigi</label></td>
							<td>:</td>
							<td>
								<input type="number" name="input10" class="form-control" min="0" value="0">
								<small>Pasien</small>
							</td>
						</tr>
						<tr>
							<td><label>b. Penambahan 1 gigi berikutnya</label></td>
							<td>:</td>
							<td>
								<input type="number" name="input11" class="form-control" min="0" value="0">
								<small>Pasien</small>
							</td>
						</tr>
						<tr>
							<td><label>c. Geligi tiruan penuh Rahang Atas dan Rahang Bawah</label></td>
							<td>:</td>
							<td>
								<input type="number" name="input12" class="form-control" min="0" value="0">
								<small>Pasien</small>
							</td>
						</tr>
						<tr>
							<td><label>d. Geligi tiruan penuh Rahang Atas atau Rahang Bawah</label></td>
							<td>:</td>
							<td>
								<input type="number" name="input13" class="form-control" min="0" value="0">
								<small>Pasien</small>
							</td>
						</tr>
					</tbody>
				</table>

				<br>

				<table class="table">
					<thead>
						<tr>
							<th><label>3. Porcelain</label></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><label>a. Jacket metal porcelain</label></td>
							<td>:</td>
							<td>
								<input type="number" name="input14" class="form-control" min="0" value="0">
								<small>Pasien</small>
							</td>
						</tr>
						<tr>
							<td><label>b. Jacket all porcelain</label></td>
							<td>:</td>
							<td>
								<input type="number" name="input15" class="form-control" min="0" value="0">
								<small>Pasien</small>
							</td>
						</tr>
					</tbody>
				</table>

				<br>

				<table class="table">
					<thead>
						<tr>
							<th><label>4. Valplast denture</label></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><label>a. Prothesa sebagian dengan 1 gigi</label></td>
							<td>:</td>
							<td>
								<input type="number" name="input16" class="form-control" min="0" value="0">
								<small>Pasien</small>
							</td>
						</tr>
						<tr>
							<td><label>b. Penambahan 1 gigi acrylic</label></td>
							<td>:</td>
							<td>
								<input type="number" name="input17" class="form-control" min="0" value="0">
								<small>Pasien</small>
							</td>
						</tr>
					</tbody>
				</table>

				<br>

				<table class="table">
					<thead>
						<tr>
							<th><label>5. Crown & Bridge</label></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><label>a. Acrylic</label></td>
							<td>:</td>
							<td>
								<input type="number" name="input18" class="form-control" min="0" value="0">
								<small>Pasien</small>
							</td>
						</tr>
						<tr>
							<td><label>b. Porcelain</label></td>
							<td>:</td>
							<td>
								<input type="number" name="input19" class="form-control" min="0" value="0">
								<small>Pasien</small>
							</td>
						</tr>
						<tr>
							<td><label>c. Pin Crown Metal</label></td>
							<td>:</td>
							<td>
								<input type="number" name="input20" class="form-control" min="0" value="0">
								<small>Pasien</small>
							</td>
						</tr>
						<tr>
							<td><label>d. Full Crown Metal</label></td>
							<td>:</td>
							<td>
								<input type="number" name="input21" class="form-control" min="0" value="0">
								<small>Pasien</small>
							</td>
						</tr>
						<tr>
							<td><label>e. Cementing Crown & Bridge lepas</label></td>
							<td>:</td>
							<td>
								<input type="number" name="input22" class="form-control" min="0" value="0">
								<small>Pasien</small>
							</td>
						</tr>
					</tbody>
				</table>
				
				<br>

				<table class="table">
					<thead>
						<tr>
							<th><label>6. Dowel/Pasak</label></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><label>a. Cor</label></td>
							<td>:</td>
							<td>
								<input type="number" name="input23" class="form-control" min="0" value="0">
								<small>Pasien</small>
							</td>
						</tr>
						<tr>
							<td><label>b. Pasak Siap Pakai</label></td>
							<td>:</td>
							<td>
								<input type="number" name="input24" class="form-control" min="0" value="0">
								<small>Pasien</small>
							</td>
						</tr>
						<tr>
							<td><label>c. Pasak Serat</label></td>
							<td>:</td>
							<td>
								<input type="number" name="input25" class="form-control" min="0" value="0">
								<small>Pasien</small>
							</td>
						</tr>
					</tbody>
				</table>


				<table class="table">
					<tr>
						<th><label>7. Reparasi</label></th>
						<td>:</td>
						<td>
							<input type="number" name="input26" class="form-control" min="0" value="0">
							<small>Pasien</small>
						</td>
					</tr>
				</table>
				
				

				<table class="table">
					<tr>
						<th><label>8. Bongkar prothesa tukang gigi</label></th>
						<td>:</td>
						<td>
							<input type="number" name="input27" class="form-control" min="0" value="0">
							<small>Pasien</small>
						</td>
					</tr>
				</table>

				

				<table class="table">
					<tr>
						<th><label>9. Night guard</label></th>
						<td>:</td>
						<td>
							<input type="number" name="input28" class="form-control" min="0" value="0">
							<small>Pasien</small>
						</td>
					</tr>
				</table>

				

				<table class="table">
					<tr>
						<th><label>10. Splint Oklusal</label></th>
						<td>:</td>
						<td>
							<input type="number" name="input29" class="form-control" min="0" value="0">
							<small>Pasien</small>
						</td>
					</tr>
				</table>

				

				<table class="table">
					<tr>
						<th><label>11. Splint Oklusal</label></th>
						<td>:</td>
						<td>
							<input type="number" name="input30" class="form-control" min="0" value="0">
							<small>Pasien</small>
						</td>
					</tr>
				</table>

				

				<table class="table">
					<tr>
						<th><label>Pasien Baru</label></th>
						<td>:</td>
						<td>
							<input type="number" name="input31" class="form-control" min="0" value="0">
							<small>Pasien</small>
						</td>
					</tr>
				</table>

				

				<table class="table">
					<tr>
						<th><label>Pasien Lama</label></th>
						<td>:</td>
						<td>
							<input type="number" name="input32" class="form-control" min="0" value="0">
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