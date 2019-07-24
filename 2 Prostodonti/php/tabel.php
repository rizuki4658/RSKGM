			<table id="bootstrap-data-table" class="table table-striped table-bordered">
	         <thead>
	                <tr>
	                	<th rowspan="1">No</th>
	                	<th>Tgl. Input</th>
	                    <th>Acrylic</th>
	                    <th>Kerangka Logam</th>
	                    <th>Porcelain</th>
	                    <th>Valplast denture</th>
	                    <th>Crown & Bridge</th>
	                    <th>Dowel/ Pasak</th>
	                    <th>Reparasi</th>
	                    <th>Bongkar prothesa</th>
	                    <th>Night Guard</th>
	                    <th>Splint Oklusal</th>
	                    <th>Kontrol</th>
	                    <th>Pasien Baru</th>
	                    <th>Pasien Lama</th>
	                    <th>Status</th>
	                    <th>Edit | Hapus</th>
	                </tr>
	            </thead>
	            <tbody>
	            	<?php
	            		$link=mysqli_connect('localhost', 'root', '', 'db_rskgm_rekap');
	            		$no=1;
	            		$total1=0;
	            		$total2=0;
	            		$total3=0;
	            		$total4=0;
	            		$total5=0;
	            		$total6=0;
	            		$total7=0;
	            		$total8=0;
	            		$total9=0;
	            		$total10=0;
	            		$total11=0;
	            		$total12=0;
	            		$total13=0;


	            		$total14=0;
	            		$total15=0;
	            		$total16=0;
	            		$total17=0;
	            		$total18=0;
	            		$total19=0;
	            		$total20=0;
	            		$total21=0;
	            		$total22=0;
	            		$total23=0;
	            		$total24=0;
	            		$total25=0;
	            		$total26=0;
	            		$query="SELECT * FROM prostodonti ORDER BY tgl ASC LIMIT 100";
	            		$excute=mysqli_query($link,$query);
	            		if (mysqli_num_rows($excute)>0) {
	            			while ($data=mysqli_fetch_assoc($excute)) {
	            				$total1=$data['ip1']+$data['ip2']+$data['ip3']+$data['ip4']+$data['ip5']+$data['ip6']+$data['ip7']+$data['ip8']+$data['ip9'];
	            				$total2=$data['ip10']+$data['ip11']+$data['ip12']+$data['ip13'];
	            				$total3=$data['ip14']+$data['ip15'];
	            				$total4=$data['ip16']+$data['ip17'];
	            				$total5=$data['ip18']+$data['ip19']+$data['ip20']+$data['ip21']+$data['ip22'];
	            				$total6=$data['ip23']+$data['ip24']+$data['ip25'];
	            				$total7=$data['ip26'];
	            				$total8=$data['ip27'];
	            				$total9=$data['ip28'];
	            				$total10=$data['ip29'];
	            				$total11=$data['ip30'];
	            				$total12=$data['ip31'];
	            				$total13=$data['ip32'];

	            				$total14+=$data['ip1']+$data['ip2']+$data['ip3']+$data['ip4']+$data['ip5']+$data['ip6']+$data['ip7']+$data['ip8']+$data['ip9'];
			            		$total15+=$data['ip10']+$data['ip11']+$data['ip12']+$data['ip13'];
			            		$total16+=$data['ip14']+$data['ip15'];
			            		$total17+=$data['ip16']+$data['ip17'];
			            		$total18+=$data['ip18']+$data['ip19']+$data['ip20']+$data['ip21']+$data['ip22'];
			            		$total19+=$data['ip23']+$data['ip24']+$data['ip25'];
			            		$total20+=$data['ip26'];
			            		$total21+=$data['ip27'];
			            		$total22+=$data['ip28'];
			            		$total23+=$data['ip29'];
			            		$total24+=$data['ip30'];
			            		$total25+=$data['ip31'];
			            		$total26+=$data['ip32'];
	            			?>

	            	<tr>
	            		<td class="first"><?php echo $no++; ?></td>
	            		<td><?php echo date("d-M-y",strtotime($data['tgl'])); ?></td>
	            		<td><?php echo number_format($total1)." Pasien"; ?></td>
	            		<td><?php echo number_format($total2)." Pasien"; ?></td>
	            		<td><?php echo number_format($total3)." Pasien"; ?></td>
	            		<td><?php echo number_format($total4)." Pasien"; ?></td>
	            		<td><?php echo number_format($total5)." Pasien"; ?></td>
	            		<td><?php echo number_format($total6)." Pasien"; ?></td>
	            		<td><?php echo number_format($total7)." Pasien"; ?></td>
	            		<td><?php echo number_format($total8)." Pasien"; ?></td>
	            		<td><?php echo number_format($total9)." Pasien"; ?></td>
	            		<td><?php echo number_format($total10)." Pasien"; ?></td>
	            		<td><?php echo number_format($total11)." Pasien"; ?></td>
	            		<td><?php echo number_format($total12)." Pasien"; ?></td>
	            		<td><?php echo number_format($total13)." Pasien"; ?></td>
	            		<td><?php echo $data['status']; ?></td>
	            		<td class="last">
	            			<a href="<?php echo "Edit.php?id=$data[id]";?>" class="btn btn-edit" title="Edit Data"><span class="glyphicon glyphicon-edit"></span></a>
	            			<a href="<?php echo "php/proses_hapus.php?id=$data[id]";?>" class="btn btn-hapus" title="Hapus Data" onclick="return confirm('Hapus data rekap ?')"><span class="glyphicon glyphicon-trash"></span></a>
	            		</td>
	            	</tr>
	            	
	            	<?php		
	            			}
	            	?>
	            </tbody>
	            <tfoot>
	            	<tr>
	            		<td></td>
	            		<td>Total</td>
	            		<td><?php echo number_format($total14)." Pasien"; ?></td>
	            		<td><?php echo number_format($total15)." Pasien"; ?></td>
	            		<td><?php echo number_format($total16)." Pasien"; ?></td>
	            		<td><?php echo number_format($total17)." Pasien"; ?></td>
	            		<td><?php echo number_format($total18)." Pasien"; ?></td>
	            		<td><?php echo number_format($total19)." Pasien"; ?></td>
	            		<td><?php echo number_format($total20)." Pasien"; ?></td>
	            		<td><?php echo number_format($total21)." Pasien"; ?></td>
	            		<td><?php echo number_format($total22)." Pasien"; ?></td>
	            		<td><?php echo number_format($total23)." Pasien"; ?></td>
	            		<td><?php echo number_format($total24)." Pasien"; ?></td>
	            		<td><?php echo number_format($total25)." Pasien"; ?></td>
	            		<td><?php echo number_format($total26)." Pasien"; ?></td>
	            		<td><?php echo $data['status']; ?></td>
	            		<td class="last">
	            			<a href="<?php echo "Input.php";?>" class="btn btn-primary" title="Tambah Data" style="background-color: rgb(0, 143, 213);"><span class="glyphicon glyphicon-plus"></span> Tambah Data</a>
	            		</td>
	            	</tr>
	            </tfoot>
	            	<?php
	            		}else{ ?>

	            <tbody>
	            	<tr>
	                	<td colspan="17"><a href="<?php echo "Input.php";?>" class="btn btn-primary" title="Tambah Data" style="background-color: rgb(0, 143, 213);"><span class="glyphicon glyphicon-plus"></span> Tambah Data</a></td>
	                </tr>
	            </tbody>	

	            	<?php
	            		}
	            	?>
	        </table>