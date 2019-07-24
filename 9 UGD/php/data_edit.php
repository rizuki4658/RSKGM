<?php
	$link=mysqli_connect('localhost', 'root', '', 'db_rskgm_rekap');
	$id=$_GET['id'];
	$query="SELECT * FROM ugd WHERE id='$id' LIMIT 1";
	$excute=mysqli_query($link,$query);
	if (mysqli_num_rows($excute)>0) {
		while ($data=mysqli_fetch_assoc($excute)) {
?>
				<input type="hidden" name="id" value="<?php echo $data['id']; ?>">
				<table class="table">
					<tr>
						<th><label>1. Pemeriksaan darurat medik gigi dan mulut</label></th>
						<td>:</td>
						<td>
							<input type="number" name="input1" class="form-control" min="0" value="<?php echo $data['ip1']; ?>">
							<small>Pasien</small>
						</td>
					</tr>
				</table>

				<table class="table">
					<tr>
						<th><label>2. One Day Care (observasi lebih dari 6 jam)</label></th>
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
							<th><label>3. Debridement orafacial</label></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><label>a. Ringan</label></td>
							<td>:</td>
							<td>
								<input type="number" name="input3" class="form-control" min="0" value="<?php echo $data['ip3']; ?>">
								<small>Pasien</small>
							</td>
						</tr>
						<tr>
							<td><label>b. Sedang</label></td>
							<td>:</td>
							<td>
								<input type="number" name="input4" class="form-control" min="0" value="<?php echo $data['ip4']; ?>">
								<small>Pasien</small>
							</td>
						</tr>
						<tr>
							<td><label>c. Berat</label></td>
							<td>:</td>
							<td>
								<input type="number" name="input5" class="form-control" min="0" value="<?php echo $data['ip5']; ?>">
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
								<input type="number" name="input6" class="form-control" min="0" value="<?php echo $data['ip6']; ?>">
								<small>Pasien</small>
							</td>
						</tr>
						<tr>
							<td><label>b. Hechting 1-3 jahitan</label></td>
							<td>:</td>
							<td>
								<input type="number" name="input7" class="form-control" min="0" value="<?php echo $data['ip7']; ?>">
								<small>Pasien</small>
							</td>
						</tr>
						<tr>
							<td><label>c. Hechting >3 jahitan + Cuttis</label></td>
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
						<th><label>5. Ekstraksi Post Trauma</label></th>
						<td>:</td>
						<td>
							<input type="number" name="input9" class="form-control" min="0" value="<?php echo $data['ip9']; ?>">
							<small>Pasien</small>
						</td>
					</tr>
				</table>

				<table class="table">
					<tr>
						<th><label>6. Alveolektomi (Dento Alveolar)</label></th>
						<td>:</td>
						<td>
							<input type="number" name="input10" class="form-control" min="0" value="<?php echo $data['ip10']; ?>">
							<small>Pasien</small>
						</td>
					</tr>
				</table>


				<table class="table">
					<tr>
						<th><label>7. Open Bor</label></th>
						<td>:</td>
						<td>
							<input type="number" name="input11" class="form-control" min="0" value="<?php echo $data['ip11']; ?>">
							<small>Pasien</small>
						</td>
					</tr>
				</table>

				<table class="table">
					<tr>
						<th><label>8. Incisi Abses dan drainage</label></th>
						<td>:</td>
						<td>
							<input type="number" name="input12" class="form-control" min="0" value="<?php echo $data['ip12']; ?>">
							<small>Pasien</small>
						</td>
					</tr>
				</table>

				<table class="table">
					<tr>
						<th><label>9. Curret dry socket</label></th>
						<td>:</td>
						<td>
							<input type="number" name="input13" class="form-control" min="0" value="<?php echo $data['ip13']; ?>">
							<small>Pasien</small>
						</td>
					</tr>
				</table>

				<table class="table">
					<tr>
						<th><label>10. Reposisi dislokasi rahang</label></th>
						<td>:</td>
						<td>
							<input type="number" name="input14" class="form-control" min="0" value="<?php echo $data['ip14']; ?>">
							<small>Pasien</small>
						</td>
					</tr>
				</table>


				<table class="table">
					<tr>
						<th><label>11. Devitalisasi</label></th>
						<td>:</td>
						<td>
							<input type="number" name="input15" class="form-control" min="0" value="<?php echo $data['ip15']; ?>">
							<small>Pasien</small>
						</td>
					</tr>
				</table>

				<table class="table">
					<tr>
						<th><label>12. Trepanasi</label></th>
						<td>:</td>
						<td>
							<input type="number" name="input16" class="form-control" min="0" value="<?php echo $data['ip16']; ?>">
							<small>Pasien</small>
						</td>
					</tr>
				</table>

				<table class="table">
					<tr>
						<th><label>13. Rotattion of medication</label></th>
						<td>:</td>
						<td>
							<input type="number" name="input17" class="form-control" min="0" value="<?php echo $data['ip17']; ?>">
							<small>Pasien</small>
						</td>
					</tr>
				</table>
				
				<table class="table">
					<tr>
						<th><label>14. Menerima Rujukan</label></th>
						<td>:</td>
						<td>
							<input type="number" name="input18" class="form-control" min="0" value="<?php echo $data['ip18']; ?>">
							<small>Pasien</small>
						</td>
					</tr>
				</table>

				<table class="table">
					<tr>
						<th><label>15. Merujuk</label></th>
						<td>:</td>
						<td>
							<input type="number" name="input19" class="form-control" min="0" value="<?php echo $data['ip19']; ?>">
							<small>Pasien</small>
						</td>
					</tr>
				</table>

				<table class="table">
					<tr>
						<th><label>16. Konsultasi</label></th>
						<td>:</td>
						<td>
							<input type="number" name="input20" class="form-control" min="0" value="<?php echo $data['ip20']; ?>">
							<small>Pasien</small>
						</td>
					</tr>
				</table>

				<table class="table">
					<tr>
						<th><label>17. Pemberian Resep</label></th>
						<td>:</td>
						<td>
							<input type="number" name="input21" class="form-control" min="0" value="<?php echo $data['ip21']; ?>">
							<small>Pasien</small>
						</td>
					</tr>
				</table>

				<table class="table">
					<tr>
						<th><label>Pasien Baru</label></th>
						<td>:</td>
						<td>
							<input type="number" name="input22" class="form-control" min="0" value="<?php echo $data['ip22']; ?>">
							<small>Pasien</small>
						</td>
					</tr>
				</table>

				

				<table class="table">
					<tr>
						<th><label>Pasien Lama</label></th>
						<td>:</td>
						<td>
							<input type="number" name="input23" class="form-control" min="0" value="<?php echo $data['ip23']; ?>">
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