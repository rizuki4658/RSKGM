<?php
	$link=mysqli_connect('localhost', 'root', '', 'db_rskgm_rekap');
	$id=$_GET['id'];
	$query="SELECT * FROM endodonti WHERE id='$id' LIMIT 1";
	$excute=mysqli_query($link,$query);
	if (mysqli_num_rows($excute)>0) {
		while ($data=mysqli_fetch_assoc($excute)) {
?>
				<input type="hidden" name="id" value="<?php echo $data['id']; ?>">
				<table class="table">
					<thead>
						<tr>
							<th>1. Tambahan Amalgam</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><label>a. 1 Permukaan</label></td>
							<td>:</td>
							<td>
								<input type="number" name="input1" class="form-control" min="0" value="<?php echo $data['ip1']; ?>">
								<small>Pasien</small>
							</td>
						</tr>
						<tr>
							<td><label>b. Lebih dari 1 Permukaan</label></td>
							<td>:</td>
							<td>
								<input type="number" name="input2" class="form-control" min="0" value="<?php echo $data['ip2']; ?>">
								<small>Pasien</small>
							</td>
						</tr>
						<tr>
							<td><label>c. Poles Amalgam</label></td>
							<td>:</td>
							<td>
								<input type="number" name="input3" class="form-control" min="0" value="<?php echo $data['ip3']; ?>">
								<small>Pasien</small>
							</td>
						</tr>
						<tr>
							<td><label>d. Kompleks</label></td>
							<td>:</td>
							<td>
								<input type="number" name="input4" class="form-control" min="0" value="<?php echo $data['ip4']; ?>">
								<small>Pasien</small>
							</td>
						</tr>
					</tbody>
				</table>
				
				<br>
				
				<table class="table">
					<thead>
						<tr>
							<th><label>2. Tambalan Composite</label></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><label>a. 1 Permukaan</label></td>
							<td>:</td>
							<td>
								<input type="number" name="input5" class="form-control" min="0" value="<?php echo $data['ip5']; ?>">
								<small>Pasien</small>
							</td>
						</tr>
						<tr>
							<td><label>b. Lebih dari 1 Permukaan</label></td>
							<td>:</td>
							<td>
								<input type="number" name="input6" class="form-control" min="0" value="<?php echo $data['ip6']; ?>">
								<small>Pasien</small>
							</td>
						</tr>
						<tr>
							<td><label>c. Penambahan Pin</label></td>
							<td>:</td>
							<td>
								<input type="number" name="input7" class="form-control" min="0" value="<?php echo $data['ip7']; ?>">
								<small>Pasien</small>
							</td>
						</tr>
						<tr>
							<td><label>d. Kompleks</label></td>
							<td>:</td>
							<td>
								<input type="number" name="input8" class="form-control" min="0" value="<?php echo $data['ip8']; ?>">
								<small>Pasien</small>
							</td>
						</tr>
					</tbody>
				</table>

				<br>

				<table class="table">
					<thead>
						<tr>
							<th><label>3. Tambalan GIC</label></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><label>a. 1 Permukaan</label></td>
							<td>:</td>
							<td>
								<input type="number" name="input9" class="form-control" min="0" value="<?php echo $data['ip9']; ?>">
								<small>Pasien</small>
							</td>
						</tr>
						<tr>
							<td><label>b. Lebih dari 1 Permukaan</label></td>
							<td>:</td>
							<td>
								<input type="number" name="input10" class="form-control" min="0" value="<?php echo $data['ip10']; ?>">
								<small>Pasien</small>
							</td>
						</tr>
						<tr>
							<td><label>c. Kompleks</label></td>
							<td>:</td>
							<td>
								<input type="number" name="input11" class="form-control" min="0" value="<?php echo $data['ip11']; ?>">
								<small>Pasien</small>
							</td>
						</tr>
					</tbody>
				</table>

				<br>

				<table class="table">
					<thead>
						<tr>
							<th><label>4. Tambalan Sementara</label></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><label>a. Rotate Of Medication</label></td>
							<td>:</td>
							<td>
								<input type="number" name="input12" class="form-control" min="0" value="<?php echo $data['ip12']; ?>">
								<small>Pasien</small>
							</td>
						</tr>
						<tr>
							<td><label>b. Direct/Indirect Pulp Capping</label></td>
							<td>:</td>
							<td>
								<input type="number" name="input13" class="form-control" min="0" value="<?php echo $data['ip13']; ?>">
								<small>Pasien</small>
							</td>
						</tr>
					</tbody>
				</table>

				<br>

				<table class="table">
					<tr>
						<th><label>5. Devitalisasi</label></th>
						<td>:</td>
						<td><input type="number" class="form-control" name="input14" value=""<?php echo $data['ip14']; ?>""></td>
					</tr>
				</table>
				
				<br>

				<table class="table">
					<tr>
						<th><label>6. Trepanasi</label></th>
						<td>:</td>
						<td><input type="number" class="form-control" name="input15" value=""<?php echo $data['ip15']; ?>""></td>
					</tr>
				</table>


				<table class="table">
					<tr>
						<th><label>7. Pengisian kamar Pulpa</label></th>
						<td>:</td>
						<td>
							<input type="number" name="input16" class="form-control" min="0" value="<?php echo $data['ip16']; ?>">
							<small>Pasien</small>
						</td>
					</tr>
				</table>
				
				

				<table class="table">
					<thead>
						<tr>
							<th><label>8. Perawatan Endodotik/Saluran akar </label></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><label>a. Reaming/Filling</label></td>
							<td>:</td>
							<td>
								<input type="number" name="input17" class="form-control" min="0" value="<?php echo $data['ip17']; ?>">
								<small>Pasien</small>
							</td>
						</tr>
						<tr>
							<td><label>b. Protation Of Medication</label></td>
							<td>:</td>
							<td>
								<input type="number" name="input18" class="form-control" min="0" value="<?php echo $data['ip18']; ?>">
								<small>Pasien</small>
							</td>
						</tr>
						<tr>
							<td><label>c. Pengisian saluran Akar (Simple)</label></td>
							<td>:</td>
							<td>
								<input type="number" name="input19" class="form-control" min="0" value="<?php echo $data['ip19']; ?>">
								<small>Pasien</small>
							</td>
						</tr>
						<tr>
							<td><label>d. Pengisian Saluran Akar(Rumit)</label></td>
							<td>:</td>
							<td>
								<input type="number" name="input20" class="form-control" min="0" value="<?php echo $data['ip20']; ?>">
								<small>Pasien</small>
							</td>
						</tr>
					</tbody>
				</table>

				

				<table class="table">
					<tr>
						<th><label>9. Anasthesi lokal pada tindakan konservasi</label></th>
						<td>:</td>
						<td>
							<input type="number" name="input21" class="form-control" min="0" value="<?php echo $data['ip21']; ?>">
							<small>Pasien</small>
						</td>
					</tr>
				</table>

				

				<table class="table">
					<tr>
						<th><label>10. Kontrol</label></th>
						<td>:</td>
						<td>
							<input type="number" name="input22" class="form-control" min="0" value="<?php echo $data['ip22']; ?>">
							<small>Pasien</small>
						</td>
					</tr>
				</table>

				

				<table class="table">
					<thead>
						<tr>
							<th><label>11. One Visit Endodontic</label></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><label>a. Akar Tunggal</label></td>
							<td>:</td>
							<td>
								<input type="number" name="input23" class="form-control" min="0" value="<?php echo $data['ip23']; ?>">
								<small>Pasien</small>
							</td>
						</tr>
						<tr>
							<td><label>b. Akar Jamak</label></td>
							<td>:</td>
							<td>
								<input type="number" name="input24" class="form-control" min="0" value="<?php echo $data['ip24']; ?>">
								<small>Pasien</small>
							</td>
						</tr>
					</tbody>
				</table>

				<table class="table">
					<thead>
						<tr>
							<th><label>12. One Visit Endodontic</label></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><label>a. Intra Coronal</label></td>
							<td>:</td>
							<td>
								<input type="number" name="input25" class="form-control" min="0" value="<?php echo $data['ip25']; ?>">
								<small>Pasien</small>
							</td>
						</tr>
						<tr>
							<td><label>b. Ekstra Coronal</label></td>
							<td>:</td>
							<td>
								<input type="number" name="input26" class="form-control" min="0" value="<?php echo $data['ip26']; ?>">
								<small>Pasien</small>
							</td>
						</tr>
					</tbody>
				</table>

				<table class="table">
					<thead>
						<tr>
							<th><label>13. Inlay/Onlay/Uplay</label></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><label>a. Logam</label></td>
							<td>:</td>
							<td>
								<input type="number" name="input27" class="form-control" min="0" value="<?php echo $data['ip27']; ?>">
								<small>Pasien</small>
							</td>
						</tr>
						<tr>
							<td><label>b. Porslen</label></td>
							<td>:</td>
							<td>
								<input type="number" name="input28" class="form-control" min="0" value="<?php echo $data['ip28']; ?>">
								<small>Pasien</small>
							</td>
						</tr>
					</tbody>
				</table>

				<table class="table">
					<thead>
						<tr>
							<th><label>14. Dowel/Pasak</label></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><label>a. Cor</label></td>
							<td>:</td>
							<td>
								<input type="number" name="input29" class="form-control" min="0" value="<?php echo $data['ip29']; ?>">
								<small>Pasien</small>
							</td>
						</tr>
						<tr>
							<td><label>b. Pasak Siap Pakai</label></td>
							<td>:</td>
							<td>
								<input type="number" name="input30" class="form-control" min="0" value="<?php echo $data['ip30']; ?>">
								<small>Pasien</small>
							</td>
						</tr>
						<tr>
							<td><label>c. Pasak Serat</label></td>
							<td>:</td>
							<td>
								<input type="number" name="input31" class="form-control" min="0" value="<?php echo $data['ip31']; ?>">
								<small>Pasien</small>
							</td>
						</tr>
					</tbody>
				</table>

				<table class="table">
					<tr>
						<th><label>15. Acrilyc Jacket</label></th>
						<td>:</td>
						<td>
							<input type="number" name="input32" class="form-control" min="0" value="<?php echo $data['ip32']; ?>">
							<small>Pasien</small>
						</td>
					</tr>
				</table>

				<table class="table">
					<thead>
						<tr>
							<th><label>16. Porcelain</label></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><label>a. Jacket Metal Porcelain</label></td>
							<td>:</td>
							<td>
								<input type="number" name="input33" class="form-control" min="0" value="<?php echo $data['ip33']; ?>">
								<small>Pasien</small>
							</td>
						</tr>
						<tr>
							<td><label>b. Jacket All Porcelain</label></td>
							<td>:</td>
							<td>
								<input type="number" name="input34" class="form-control" min="0" value="<?php echo $data['ip34']; ?>">
								<small>Pasien</small>
							</td>
						</tr>
					</tbody>
				</table>

				<table class="table">
					<thead>
						<tr>
							<th><label>17. Crown and Bridge</label></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><label>a. Cementing CB Lepasan(GI) </label></td>
							<td>:</td>
							<td>
								<input type="number" name="input35" class="form-control" min="0" value="<?php echo $data['ip35']; ?>">
								<small>Pasien</small>
							</td>
						</tr>
						<tr>
							<td><label>b. Cementing CB Lepasan(Resin)</label></td>
							<td>:</td>
							<td>
								<input type="number" name="input36" class="form-control" min="0" value="<?php echo $data['ip36']; ?>">
								<small>Pasien</small>
							</td>
						</tr>
					</tbody>
				</table>



				<table class="table">
					<tr>
						<th><label>18. Lain-Lain</label></th>
						<td>:</td>
						<td>
							<input type="number" name="input37" class="form-control" min="0" value="<?php echo $data['ip37']; ?>">
							<small>Pasien</small>
						</td>
					</tr>
				</table>

				<table class="table">
					<tr>
						<th><label>Pasien Baru</label></th>
						<td>:</td>
						<td>
							<input type="number" name="input38" class="form-control" min="0" value="<?php echo $data['ip38']; ?>">
							<small>Pasien</small>
						</td>
					</tr>
				</table>

				<table class="table">
					<tr>
						<th><label>Pasien Lama</label></th>
						<td>:</td>
						<td>
							<input type="number" name="input39" class="form-control" min="0" value="<?php echo $data['ip39']; ?>">
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