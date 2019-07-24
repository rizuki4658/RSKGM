<?php require '../components/header.php'; ?>
<?php
	$nama=$_POST['nama'];
	$email=$_POST['email'];
	$password=$_POST['password2'];
	$link=mysqli_connect('localhost', 'root', '', 'db_rskgm_rekap');
	$query="SELECT * FROM pengguna WHERE email='$email' LIMIT 1";
	$execute=mysqli_query($link,$query);
	if (mysqli_num_rows($execute)>0) { 
		$query2="UPDATE pengguna SET nama='$nama',password='$password' WHERE email='$email'";
		$execute2=mysqli_query($link,$query2);
		if (!$execute) { ?>
			<?php require '../components/modal_e_gagal.php'; ?>
<?php
		}else{
?>
			<?php require '../components/modal_e_sukses.php'; ?>
<?php
		}
	}else{
?>
	
	<?php require '../components/modal_e_gagal.php'; ?>	
<?php 
	} 
?>

<?php require '../components/footer.php'; ?>