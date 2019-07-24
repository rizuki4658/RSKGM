<?php require '../components/header.php'; ?>

<?php
	$ip1=$_POST['input1'];
	$ip2=$_POST['input2'];
	$ip3=$_POST['input3'];
	$ip4=$_POST['input4'];
	$ip5=$_POST['input5'];
	$ip6=$_POST['input6'];
	$ip7=$_POST['input7'];
	$ip8=$_POST['input8'];
	$tgl=$_POST['input9'];
	$status=$_POST['status'];
	$link=mysqli_connect('localhost', 'root', '', 'db_rskgm_rekap');
	$query="INSERT INTO periodonti(id,ip1,ip2,ip3,ip4,ip5,ip6,ip7,ip8,status,tgl) VALUES('','$ip1','$ip2','$ip3','$ip4','$ip5','$ip6','$ip7','$ip8','$status','$tgl')";
	$execute=mysqli_query($link,$query);
	if (!$execute) {?>

	<?php require '../components/modal_s_gagal.php'; ?>

<?php		
	}else{ ?>

	<?php require '../components/modal_s_sukses.php'; ?>

<?php
	}
?>



<?php require '../components/footer.php'; ?>