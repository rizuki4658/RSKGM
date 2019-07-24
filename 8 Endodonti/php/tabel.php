			<table id="bootstrap-data-table" class="table table-striped table-bordered">
	         <thead>
	                <tr>
	                	<th>No</th>
	                	<th>Tgl. Input</th>
	                    <th>Tambahan Amalgam</th>
	                    <th>Tambalan Composite</th>
	                    <th>Tambalan GIC</th>
	                    <th>Tambalan Sementara</th>
	                    <th>Devitalisasi</th>
	                    <th>Trepanasi</th>
	                    <th>Pengisian kamar Pulpa</th>
	                    <th>Perawatan Endodotik/Saluran akar</th>
	                    <th>Anasthesi lokal pada tindakan konservasi</th>
	                    <th>Kontrol</th>
	                    <th>One Visit Endodontic</th>
	                    <th>Bleaching</th>
	                    <th>Inlay/Onlay/Uplay</th>
	                    <th>Dowel/Pasak</th>
	                    <th>Acrilyc Jacket</th>
	                    <th>Porcelain</th>
	                    <th>Crown and Bridge</th>
	                    <th>Lain-lain</th>
	                    <th>Pasien Lama</th>
	                    <th>Pasien Baru</th>
	                    <th>Status Pasien</th>
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
	            		$total27=0;
	            		$total28=0;
	            		$total29=0;
	            		$total30=0;
	            		$total31=0;
	            		$total32=0;
	            		$total33=0;
	            		$total34=0;
	            		$total35=0;
	            		$total36=0;
	            		$total37=0;
	            		$total38=0;
	            		$total39=0;
	            		$total40=0;
	            		$query="SELECT * FROM endodonti ORDER BY tgl ASC LIMIT 100";
	            		$excute=mysqli_query($link,$query);
	            		if (mysqli_num_rows($excute)>0) {
	            			while ($data=mysqli_fetch_assoc($excute)) {
	            				$total1=$data['ip1']+$data['ip2']+$data['ip3']+$data['ip4'];
			            		$total2=$data['ip5']+$data['ip6']+$data['ip7']+$data['ip8'];
			            		$total3=$data['ip9']+$data['ip10']+$data['ip11'];
			            		$total4=$data['ip12']+$data['ip13'];
			            		$total5=$data['ip14'];
			            		$total6=$data['ip15'];
			            		$total7=$data['ip16'];
			            		$total8=$data['ip17']+$data['ip18']+$data['ip19']+$data['ip20'];
			            		$total9=$data['ip21'];
			            		$total10=$data['ip22'];
			            		$total11=$data['ip23']+$data['ip24'];
			            		$total12=$data['ip25']+$data['ip26'];
			            		$total13=$data['ip27']+$data['ip28'];
			            		$total14=$data['ip29']+$data['ip30']+$data['ip31'];
			            		$total15=$data['ip32'];
			            		$total16=$data['ip33']+$data['ip34'];
			            		$total17=$data['ip35']+$data['ip36'];
			            		$total18=$data['ip37'];
			            		$total19=$data['ip38'];
	            				$total20=$data['ip39'];

	            				$total21+=$data['ip1']+$data['ip2']+$data['ip3']+$data['ip4'];
			            		$total22+=$data['ip5']+$data['ip6']+$data['ip7']+$data['ip8'];
			            		$total23+=$data['ip9']+$data['ip10']+$data['ip11'];
			            		$total24+=$data['ip12']+$data['ip13'];
			            		$total25+=$data['ip14'];
			            		$total26+=$data['ip15'];
			            		$total27+=$data['ip16'];
			            		$total28+=$data['ip17']+$data['ip18']+$data['ip19']+$data['ip20'];
			            		$total29+=$data['ip21'];
			            		$total30+=$data['ip22'];
			            		$total31+=$data['ip23']+$data['ip24'];
			            		$total32+=$data['ip25']+$data['ip26'];
			            		$total33+=$data['ip27']+$data['ip28'];
			            		$total34+=$data['ip29']+$data['ip30']+$data['ip31'];
			            		$total35+=$data['ip32'];
			            		$total36+=$data['ip33']+$data['ip34'];
			            		$total37+=$data['ip35']+$data['ip36'];
			            		$total38+=$data['ip37'];
			            		$total39+=$data['ip38'];
	            				$total40+=$data['ip39'];

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
	            		<td><?php echo number_format($total14)." Pasien"; ?></td>
	            		<td><?php echo number_format($total15)." Pasien"; ?></td>
	            		<td><?php echo number_format($total16)." Pasien"; ?></td>
	            		<td><?php echo number_format($total17)." Pasien"; ?></td>
	            		<td><?php echo number_format($total18)." Pasien"; ?></td>
	            		<td><?php echo number_format($total19)." Pasien"; ?></td>
	            		<td><?php echo number_format($total20)." Pasien"; ?></td>
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
	            		<td><?php echo number_format($total21)." Pasien"; ?></td>
	            		<td><?php echo number_format($total22)." Pasien"; ?></td>
	            		<td><?php echo number_format($total23)." Pasien"; ?></td>
	            		<td><?php echo number_format($total24)." Pasien"; ?></td>
	            		<td><?php echo number_format($total25)." Pasien"; ?></td>
	            		<td><?php echo number_format($total26)." Pasien"; ?></td>
	            		<td><?php echo number_format($total27)." Pasien"; ?></td>
	            		<td><?php echo number_format($total28)." Pasien"; ?></td>
	            		<td><?php echo number_format($total29)." Pasien"; ?></td>
	            		<td><?php echo number_format($total30)." Pasien"; ?></td>
	            		<td><?php echo number_format($total31)." Pasien"; ?></td>
	            		<td><?php echo number_format($total32)." Pasien"; ?></td>
	            		<td><?php echo number_format($total33)." Pasien"; ?></td>
	            		<td><?php echo number_format($total34)." Pasien"; ?></td>
	            		<td><?php echo number_format($total35)." Pasien"; ?></td>
	            		<td><?php echo number_format($total36)." Pasien"; ?></td>
	            		<td><?php echo number_format($total37)." Pasien"; ?></td>
	            		<td><?php echo number_format($total38)." Pasien"; ?></td>
	            		<td><?php echo number_format($total39)." Pasien"; ?></td>
	            		<td><?php echo number_format($total40)." Pasien"; ?></td>
	            		<td colspan="2">
	            			<a href="Input.php" class="btn btn-primary" title="Tambah Data" style="background-color: rgb(0, 143, 213);"><span class="glyphicon glyphicon-plus"></span> Tambah Data</a>
	            		</td>
	            	</tr>
	            </tfoot>


	            	<?php
	            		}else{ ?>

	            <tbody>
	            	<tr>
	                	<td colspan="24"><a href="<?php echo "Input.php";?>" class="btn btn-primary" title="Tambah Data" style="background-color: rgb(0, 143, 213);"><span class="glyphicon glyphicon-plus"></span> Tambah Data</a></td>
	                </tr>
	            </tbody>	

	            	<?php
	            		}
	            	?>
	        </table>