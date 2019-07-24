			<table id="bootstrap-data-table" class="table table-striped table-bordered">
	         <thead>
	                <tr>
	                	<th>No</th>
	                	<th>Nama Lengkap</th>
	                    <th>Email</th>
	                    <th>Konfirmasi | Hapus</th>
	                </tr>
	            </thead>
	            <tbody>
	            	<?php
	            		$link=mysqli_connect('localhost', 'root', '', 'db_rskgm_rekap');
	            		$no=1;
	            		$query="SELECT * FROM pengguna ORDER BY nama ASC LIMIT 100";
	            		$excute=mysqli_query($link,$query);
	            		if (mysqli_num_rows($excute)>0) {
	            			while ($data=mysqli_fetch_assoc($excute)) {

	            			?>

	            	<tr>
	            		<td class="first"><?php echo $no++; ?></td>
	            		<td><?php echo $data['nama']; ?></td>
	            		<td><?php echo $data['email']; ?></td>
	            		<td class="last">
	            			<center>
	            			<?php 
	            				if($data['status']=='BLOCK'){ 
	            			?>
	            					<a href="<?php echo "php/Edit.php?id=$data[email]&edit=PASS";?>" class="btn btn-success" title="Konfirmasi">KONFIRMASI</a>
	            					<a href="<?php echo "php/proses_hapus.php?id=$data[email]";?>" class="btn btn-danger" title="Hapus Data" onclick="return confirm('Hapus data pengguna ?')">HAPUS</a>
	            			<?php
	            				}else{
	            			?>
	            			
	            				<a href="<?php echo "php/Edit.php?id=$data[email]&edit=BLOCK";?>" class="btn btn-warning" title="Blokir">BLOKIR</a>
	            				<a href="<?php echo "php/proses_hapus.php?id=$data[email]";?>" class="btn btn-danger" title="Hapus Data"  onclick="return confirm('Hapus data pengguna ?')">HAPUS</a>
	            			
	            	<?php		
	            			}
	            		}
	            	?>
	            			</center>
	            		</td>
	            	</tr>
	            	
	            	<?php
	            	}
	            	?>


	            </tbody>
	        </table>