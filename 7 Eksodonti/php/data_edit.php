<?php
	$link=mysqli_connect('localhost', 'root', '', 'db_rskgm_rekap');
	$id=$_GET['id'];
	$query="SELECT * FROM eksodonti WHERE id='$id' LIMIT 1";
	$excute=mysqli_query($link,$query);
	if (mysqli_num_rows($excute)>0) {
		while ($data=mysqli_fetch_assoc($excute)) {
?>
				<input type="hidden" name="id" value="<?php echo $data['id']; ?>">
				<table class="table">
					<tr>
						<th><label>1. Pencabutan Gigi tetap</label></th>
						<td>:</td>
						<td>
							<input type="number" name="input1" class="form-control" min="0" value="<?php echo $data['ip1']; ?>">
							<small>Pasien</small>
						</td>
					</tr>
				</table>

				<table class="table">
					<tr>
						<th><label>2. Pencabutan Gigi tetap dengan topikal</label></th>
						<td>:</td>
						<td>
							<input type="number" name="input2" class="form-control" min="0" value="<?php echo $data['ip2']; ?>">
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
								<input type="number" name="input3" class="form-control" min="0" value="<?php echo $data['ip3']; ?>">
								<small>Pasien</small>
							</td>
						</tr>
						<tr>
							<td><label>b. Post trauma</label></td>
							<td>:</td>
							<td>
								<input type="number" name="input4" class="form-control" min="0" value="<?php echo $data['ip4']; ?>">
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
							<input type="number" name="input5" class="form-control" min="0" value="<?php echo $data['ip5']; ?>">
							<small>Pasien</small>
						</td>
					</tr>
				</table>

				<table class="table">
					<tr>
						<th><label>5. Hecting 1-3 jahitan</label></th>
						<td>:</td>
						<td>
							<input type="number" name="input6" class="form-control" min="0" value="<?php echo $data['ip6']; ?>">
							<small>Pasien</small>
						</td>
					</tr>
				</table>

				<table class="table">
					<thead>
						<tr>
							<th><label>6. </label></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><label>a. Penanggulangan dry socket</label></td>
							<td>:</td>
							<td>
								<input type="number" name="input7" class="form-control" min="0" value="<?php echo $data['ip7']; ?>">
								<small>Pasien</small>
							</td>
						</tr>
						<tr>
							<td><label>b. Curet dry socket</label></td>
							<td>:</td>
							<td>
								<input type="number" name="input8" class="form-control" min="0" value="<?php echo $data['ip8']; ?>">
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
							<input type="number" name="input9" class="form-control" min="0" value="<?php echo $data['ip9']; ?>">
							<small>Pasien</small>
						</td>
					</tr>
				</table>

				<table class="table">
					<tr>
						<th><label>8. Open Bor</label></th>
						<td>:</td>
						<td>
							<input type="number" name="input10" class="form-control" min="0" value="<?php echo $data['ip10']; ?>">
							<small>Pasien</small>
						</td>
					</tr>
				</table>

				<table class="table">
					<tr>
						<th><label>9. OKlusal Adjustment</label></th>
						<td>:</td>
						<td>
							<input type="number" name="input11" class="form-control" min="0" value="<?php echo $data['ip11']; ?>">
							<small>Pasien</small>
						</td>
					</tr>
				</table>

				<table class="table">
					<tr>
						<th><label>10. Penanganan Pendarahan</label></th>
						<td>:</td>
						<td>
							<input type="number" name="input12" class="form-control" min="0" value="<?php echo $data['ip12']; ?>">
							<small>Pasien</small>
						</td>
					</tr>
				</table>




				<table class="table">
					<tr>
						<th><label>11. Pencabutan Gigi dengan Flap</label></th>
						<td>:</td>
						<td>
							<input type="number" name="input13" class="form-control" min="0" value="<?php echo $data['ip13']; ?>">
							<small>Pasien</small>
						</td>
					</tr>
				</table>

				<table class="table">
					<tr>
						<th><label>12. Pemberian Resep</label></th>
						<td>:</td>
						<td>
							<input type="number" name="input14" class="form-control" min="0" value="<?php echo $data['ip14']; ?>">
							<small>Pasien</small>
						</td>
					</tr>
				</table>

				<table class="table">
					<tr>
						<th><label>13. Arsen</label></th>
						<td>:</td>
						<td>
							<input type="number" name="input15" class="form-control" min="0" value="<?php echo $data['ip15']; ?>">
							<small>Pasien</small>
						</td>
					</tr>
				</table>

				<table class="table">
					<tr>
						<th><label>Pasien Baru</label></th>
						<td>:</td>
						<td>
							<input type="number" name="input16" class="form-control" min="0" value="<?php echo $data['ip16']; ?>">
							<small>Pasien</small>
						</td>
					</tr>
				</table>

				

				<table class="table">
					<tr>
						<th><label>Pasien Lama</label></th>
						<td>:</td>
						<td>
							<input type="number" name="input17" class="form-control" min="0" value="<?php echo $data['ip17']; ?>">
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
								<option><?php echo $data['status']; ?></option>
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
							<input type="date" name="tgl" class="form-control" value="<?php echo $data['tgl']; ?>" required>
						</td>
					</tr>
				</table>

<?php
	}
}
?>