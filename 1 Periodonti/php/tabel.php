			<table id="bootstrap-data-table" class="table table-striped table-bordered">
	         <thead>
	                <tr>
	                	<th>No</th>
	                	<th>Tgl. Input</th>
	                    <th>Macro Scalling</th>
	                    <th>Root Planning</th>
	                    <th>Kuretase Giginva</th>
	                    <th>Oclusal adjustment</th>
	                    <th>Splinting</th>
	                    <th>Kontrol</th>
	                    <th>Pasien Lama</th>
	                    <th>Pasien Baru</th>
	                  	<th>Jumlah</th>
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
	            		$query="SELECT * FROM periodonti ORDER BY tgl ASC LIMIT 100";
	            		$excute=mysqli_query($link,$query);
	            		if (mysqli_num_rows($excute)>0) {
	            			while ($data=mysqli_fetch_assoc($excute)) {
	            				$total1=$data['ip1'];
			            		$total2=$data['ip2'];
			            		$total3=$data['ip3'];
			            		$total4=$data['ip4'];
			            		$total5=$data['ip5'];
			            		$total6=$data['ip6'];
			            		$total7=$data['ip7'];
			            		$total8=$data['ip8'];

			            		$total9+=$data['ip1'];
			            		$total10+=$data['ip2'];
			            		$total11+=$data['ip3'];
			            		$total12+=$data['ip4'];
			            		$total13+=$data['ip5'];
			            		$total14+=$data['ip6'];
			            		$total15+=$data['ip7'];
			            		$total16+=$data['ip8'];


	            			?>

	            	<tr>
	            		<td class="first"><?php echo $no++; ?></td>
	            		<td><?php echo date("d-M-y",strtotime($data['tgl'])); ?></td>
	            		<td><?php echo number_format($data['ip1'])." Pasien"; ?></td>
	            		<td><?php echo number_format($data['ip2'])." Pasien"; ?></td>
	            		<td><?php echo number_format($data['ip3'])." Pasien"; ?></td>
	            		<td><?php echo number_format($data['ip4'])." Pasien"; ?></td>
	            		<td><?php echo number_format($data['ip5'])." Pasien"; ?></td>
	            		<td><?php echo number_format($data['ip6'])." Pasien"; ?></td>
	            		<td><?php echo number_format($data['ip7'])." Pasien"; ?></td>
	            		<td><?php echo number_format($data['ip8'])." Pasien"; ?></td>
	            		<td><?php echo number_format(($data['ip1']+$data['ip2']+$data['ip3']+$data['ip4']+$data['ip5']+$data['ip6']+$data['ip7']+$data['ip8']))." Pasien"; ?></td>
	            		<td><?php echo $data['status']; ?></td>
	            		<td class="last">
	            			<a href="<?php echo "Edit.php?id=$data[id]";?>" class="btn btn-edit" title="Edit Data"><span class="glyphicon glyphicon-edit"></span></a>
	            			<a href="<?php echo "php/proses_hapus.php?id=$data[id]";?>" class="btn btn-hapus" title="Hapus Data"  onclick="return confirm('Hapus data rekap ?')"><span class="glyphicon glyphicon-trash"></span></a>
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
	            		<td><?php echo $total9." Pasien"; ?></td>
	            		<td><?php echo $total10." Pasien"; ?></td>
	            		<td><?php echo $total11." Pasien"; ?></td>
	            		<td><?php echo $total12." Pasien"; ?></td>
	            		<td><?php echo $total13." Pasien"; ?></td>
	            		<td><?php echo $total14." Pasien"; ?></td>
	            		<td><?php echo $total15." Pasien"; ?></td>
	            		<td><?php echo $total16." Pasien"; ?></td>
	            		<td><?php echo number_format(($total1+$total2+$total3+$total4+$total5+$total6+$total7+$total8))." Pasien"; ?></td>
	            		<td colspan="2" class="last"><a href="<?php echo "Input.php";?>" class="btn btn-tambah" title="Edit Data"><span class="glyphicon glyphicon-plus"></span> Tambah Data</a></td>
	            	</tr>
	            </tfoot>


	            	<?php
	            		}else{ ?>

	            <tbody>
	            	<tr>
	                	<td colspan="13"><a href="<?php echo "Input.php";?>" class="btn btn-primary" title="Tambah Data" style="background-color: rgb(0, 143, 213);"><span class="glyphicon glyphicon-plus"></span> Tambah Data</a></td>
	                </tr>
	            </tbody>	

	            	<?php
	            		}
	            	?>
	        </table>