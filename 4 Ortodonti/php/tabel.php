			<table id="bootstrap-data-table" class="table table-striped table-bordered">
	         <thead>
	                <tr>
	                	<th>No</th>
	                	<th>Tgl. Input</th>
	                    <th>Analisa/Pencetakan</th>
	                    <th>Alat Ortodonti Lepasan</th>
	                    <th>Alat Ortodonti Cekat</th>
	                    <th>Retainer</th>
	                    <th>Konsultasi</th>
	                    <th>Pasien Lama</th>
	                    <th>Pasien Baru</th>
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
	            		$query="SELECT * FROM ortodonti ORDER BY tgl ASC LIMIT 100";
	            		$excute=mysqli_query($link,$query);
	            		if (mysqli_num_rows($excute)>0) {
	            			while ($data=mysqli_fetch_assoc($excute)) {
	            				$total1=$data['ip1'];
			            		$total2=$data['ip2']+$data['ip3']+$data['ip4']+$data['ip5'];
			            		$total3=$data['ip6']+$data['ip7']+$data['ip8']+$data['ip9']+$data['ip10']+$data['ip11'];
			            		$total4=$data['ip12'];
			            		$total5=$data['ip13'];
			            		$total6=$data['ip14'];
			            		$total7=$data['ip15'];

			            		$total8+=$data['ip1'];
			            		$total9+=$data['ip2']+$data['ip3']+$data['ip4']+$data['ip5'];
			            		$total10+=$data['ip6']+$data['ip7']+$data['ip8']+$data['ip9']+$data['ip10']+$data['ip11'];
			            		$total11+=$data['ip12'];
			            		$total12+=$data['ip13'];
			            		$total13+=$data['ip14'];
			            		$total14+=$data['ip15'];
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
	            		<td><?php echo number_format($total8)." Pasien"; ?></td>
	            		<td><?php echo number_format($total9)." Pasien"; ?></td>
	            		<td><?php echo number_format($total10)." Pasien"; ?></td>
	            		<td><?php echo number_format($total11)." Pasien"; ?></td>
	            		<td><?php echo number_format($total12)." Pasien"; ?></td>
	            		<td><?php echo number_format($total13)." Pasien"; ?></td>
	            		<td><?php echo number_format($total14)." Pasien"; ?></td>
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
	                	<td colspan="14"><a href="<?php echo "Input.php";?>" class="btn btn-primary" title="Tambah Data" style="background-color: rgb(0, 143, 213);"><span class="glyphicon glyphicon-plus"></span> Tambah Data</a></td>
	                </tr>
	            </tbody>	

	            	<?php
	            		}
	            	?>
	        </table>