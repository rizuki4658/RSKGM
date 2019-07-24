			<table id="bootstrap-data-table" class="table table-striped table-bordered">
	         <thead>
	                <tr>
	                	<th>No</th>
	                	<th>Tgl. Input</th>
	                    <th>Pencabutan Gigi tetap</th>
	                    <th>Pencabutan Gigi tetap dengan topikal</th>
	                    <th>Pencabutan Gigi Tetap</th>
	                    <th>Pencabutan Gigi anak anastesi topikal</th>
	                    <th>Hecting 1-3 jahitan</th>
	                    <th>Dry Socket</th>
	                    <th>Kontrol Post Pencabutan Gigi</th>
	                    <th>Open Bor</th>
	                    <th>OKlusal Adjustment</th>
	                    <th>Penanganan Pendarahan</th>
	                    <th>Pencabutan Gigi dengan Flap</th>
	                    <th>Pemberian Resep</th>
	                    <th>Arsen</th>
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
	            		$query="SELECT * FROM eksodonti ORDER BY tgl ASC LIMIT 100";
	            		$excute=mysqli_query($link,$query);
	            		if (mysqli_num_rows($excute)>0) {
	            			while ($data=mysqli_fetch_assoc($excute)) {
	            				$total1=$data['ip1'];
			            		$total2=$data['ip2'];
			            		$total3=$data['ip3']+$data['ip4'];
			            		$total4=$data['ip5'];
			            		$total5=$data['ip6'];
			            		$total6=$data['ip7']+$data['ip8'];
			            		$total7=$data['ip9'];
			            		$total8=$data['ip10'];
			            		$total9=$data['ip11'];
			            		$total10=$data['ip12'];
			            		$total11=$data['ip13'];
			            		$total12=$data['ip14'];
			            		$total13=$data['ip15'];
			            		$total14=$data['ip16'];
			            		$total15=$data['ip17'];

			            		$total16+=$data['ip1'];
			            		$total17+=$data['ip2'];
			            		$total18+=$data['ip3']+$data['ip4'];
			            		$total19+=$data['ip5'];
			            		$total20+=$data['ip6'];
			            		$total21+=$data['ip7']+$data['ip8'];
			            		$total22+=$data['ip9'];
			            		$total23+=$data['ip10'];
			            		$total24+=$data['ip11'];
			            		$total25+=$data['ip12'];
			            		$total26+=$data['ip13'];
			            		$total27+=$data['ip14'];
			            		$total28+=$data['ip15'];
			            		$total29+=$data['ip16'];
			            		$total30+=$data['ip17'];
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
	            		<td><?php echo number_format($total27)." Pasien"; ?></td>
	            		<td><?php echo number_format($total28)." Pasien"; ?></td>
	            		<td><?php echo number_format($total29)." Pasien"; ?></td>
	            		<td><?php echo number_format($total30)." Pasien"; ?></td>
	            		<td colspan="2">
	            			<a href="Input.php" class="btn btn-primary" title="Tambah Data" style="background-color: rgb(0, 143, 213);"><span class="glyphicon glyphicon-plus"></span> Tambah Data</a>
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