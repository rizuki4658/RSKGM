<?php
	$link=mysqli_connect('localhost', 'root', '', 'db_rskgm_rekap');
	$id=$_GET['id'];
	$query="SELECT * FROM periodonti WHERE id='$id' LIMIT 1";
	$excute=mysqli_query($link,$query);
	if (mysqli_num_rows($excute)>0) {
		while ($data=mysqli_fetch_assoc($excute)) {
?>
				<input type="hidden" name="id" value="<?php echo $data['id']; ?>">
				<tr>
					<td class="kol1"><label for="input1">Macro Sacalling</label></td>
					<td class="titik">:</td>
					<td><input type="number" name="input1" id="input1" min="0" value="<?php echo $data['ip1']; ?>" class="form-control" required></td>
					<td class="last"><small>Pasien</small></td>
				</tr>
				<tr>
					<td><label for="input2">Root Planing</label></td>
					<td class="titik">:</td>
					<td><input type="number" name="input2" id="input2" min="0" value="<?php echo $data['ip2']; ?>" class="form-control" required></td>
					<td><small>Pasien</small></td>
				</tr>
				<tr>
					<td><label for="input3">Kuretase Gingiva</label></td>
					<td class="titik">:</td>
					<td class="input"><input type="number" name="input3" id="input3" min="0" value="<?php echo $data['ip3']; ?>" class="form-control" required></td>
					<td><small>Pasien</small></td>
				</tr>
				<tr>
					<td><label for="input4">Splinting</label></td>
					<td class="titik">:</td>
					<td><input type="number" name="input4" id="input4" min="0" value="<?php echo $data['ip4']; ?>" class="form-control" required></td>
					<td><small>Pasien</small></td>
				</tr>
				<tr>
					<td><label for="input5">Oclusal Adjustment</label></td>
					<td class="titik">:</td>
					<td><input type="number" name="input5" id="input5" min="0" value="<?php echo $data['ip5']; ?>" class="form-control" required></td>
					<td><small>Pasien</small></td>
				</tr>
				<tr>
					<td><label for="input6">Kontrol</label></td>
					<td class="titik">:</td>
					<td><input type="number" name="input6" id="input6" min="0" value="<?php echo $data['ip6']; ?>" class="form-control" required></td>
					<td><small>Pasien</small></td>
				</tr>
				<tr>
					<td><label for="input7">Pasien Baru</label></td>
					<td class="titik">:</td>
					<td><input type="number" name="input7" id="input7" min="0" value="<?php echo $data['ip7']; ?>"  class="form-control" required></td>
					<td><small>Pasien</small></td>
				</tr>
				<tr>
					<td><label for="input8">Pasien Lama</label></td>
					<td class="titik">:</td>
					<td><input type="number" name="input8" id="input8" min="0" value="<?php echo $data['ip8']; ?>" class="form-control" required></td>
					<td><small>Pasien</small></td>
				</tr>
				<tr>
					<td><label for="input9">Tanggal</label></td>
					<td class="titik">:</td>
					<td><input type="date" name="input9" id="input9" value="<?php echo $data['tgl']; ?>" class="form-control" required></td>
					<td><small>Pasien</small></td>
				</tr>
				<tr>
					<td><label for="status">Status Pasien</label></td>
					<td class="titik">:</td>
					<td>
						<select name="status" id="status" class="form-control" required>
							<option selected><?php echo $data['status']; ?></option>
							<option>UMUM</option>
							<option>BPJS</option>
							<option>GRATIS</option>
						</select>
					</td>
					<td><small>BPJS/Umum/Gratis</small></td>
				</tr>

<?php
	}
}
?>