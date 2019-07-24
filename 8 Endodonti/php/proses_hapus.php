<?php require '../components/header.php'; ?>

<?php
	$id=$_GET['id'];
	$link=mysqli_connect('localhost', 'root', '', 'db_rskgm_rekap');
	$query="DELETE FROM endodonti WHERE id='$id'";
	$execute=mysqli_query($link,$query);
	if (!$execute) {?>

	<?php require '../components/modal_h_gagal.php'; ?>

<?php		
	}else{ ?>

	<?php require '../components/modal_h_sukses.php'; ?>

<?php
	}
?>



<?php require '../components/footer.php'; ?>