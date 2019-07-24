<?php require '../components/header.php'; ?>
<?php
	$nama=$_POST['nama'];
	$email=$_POST['email2'];
	$password=$_POST['password2'];
	$status='BLOCK';
	$link=mysqli_connect('localhost', 'root', '', 'db_rskgm_rekap');
	$query="SELECT * FROM pengguna WHERE email='$email' LIMIT 1";
	$execute=mysqli_query($link,$query);
	if (mysqli_num_rows($execute)>0) { ?>
		<?php require '../components/modal_s_gagal.php'; ?>
<?php
	}else{
		$query2="INSERT INTO pengguna VALUES('$nama','$email','$password','$status')";
		$execute2=mysqli_query($link,$query2);
		if (!$execute) { ?>
			<?php require '../components/modal_s_gagal.php'; ?>
<?php
		}else{
?>
			<?php require '../components/modal_s_sukses.php'; ?>
<?php
		}
?>
		
<?php 
	} 
?>

<?php require '../components/footer.php'; ?>