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
	$ip9=$_POST['input9'];
	$ip10=$_POST['input10'];
	$ip11=$_POST['input11'];
	$ip12=$_POST['input12'];
	$ip13=$_POST['input13'];
	$ip14=$_POST['input14'];
	$ip15=$_POST['input15'];
	$status=$_POST['status'];
	$tgl=$_POST['tgl'];
	$link=mysqli_connect('localhost', 'root', '', 'db_rskgm_rekap');
	$query="INSERT INTO ortodonti(id,ip1,ip2,ip3,ip4,ip5,ip6,ip7,ip8,ip9,ip10,ip11,ip12,ip13,ip14,ip15,status,tgl) VALUES('','$ip1','$ip2','$ip3','$ip4','$ip5','$ip6','$ip7','$ip8','$ip9','$ip10','$ip11','$ip12','$ip13','$ip14','$ip15','$status','$tgl')";
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