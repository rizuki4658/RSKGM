<?php require '../components/header.php'; ?>

<?php
	$id=$_POST['id'];
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
	$ip16=$_POST['input16'];
	$ip17=$_POST['input17'];
	$ip18=$_POST['input18'];
	$ip19=$_POST['input19'];
	$ip20=$_POST['input20'];
	$ip21=$_POST['input21'];
	$ip22=$_POST['input22'];
	$ip23=$_POST['input23'];
	$ip24=$_POST['input24'];
	$ip25=$_POST['input25'];
	$ip26=$_POST['input26'];
	$ip27=$_POST['input27'];
	$ip28=$_POST['input28'];
	$ip29=$_POST['input29'];
	$ip30=$_POST['input30'];
	$ip31=$_POST['input31'];
	$ip32=$_POST['input32'];
	$ip33=$_POST['input33'];
	$ip34=$_POST['input34'];
	$ip35=$_POST['input35'];
	$ip36=$_POST['input36'];
	$ip37=$_POST['input37'];
	$ip38=$_POST['input38'];
	$ip39=$_POST['input39'];
	$tgl=$_POST['tgl'];
	$status=$_POST['status'];
	$link=mysqli_connect('localhost', 'root', '', 'db_rskgm_rekap');
	$query="UPDATE endodonti SET ip1='$ip1',ip2='$ip2',ip3='$ip3',ip4='$ip4',ip5='$ip5',ip6='$ip6',ip7='$ip7',ip8='$ip8',ip9='$ip9',ip10='$ip10',ip11='$ip11',ip12='$ip12',ip13='$ip13',ip14='$ip14',ip15='$ip15',ip16='$ip16',ip17='$ip17',ip18='$ip18',ip19='$ip19',ip20='$ip20',ip21='$ip21',ip22='$ip22',ip23='$ip23',ip24='$ip24',ip25='$ip25',ip26='$ip26',ip27='$ip27',ip28='$ip28',ip29='$ip29',ip30='$ip30',ip31='$ip31',ip32='$ip32',ip33='$ip33',ip34='$ip34',ip35='$ip35',ip36='$ip36',ip37='$ip37',ip38='$ip38',ip39='$ip39',status='$status',tgl='$tgl' WHERE id='$id'";
	$execute=mysqli_query($link,$query);
	if (!$execute) {?>

	<?php require '../components/modal_e_gagal.php'; ?>

<?php		
	}else{ ?>

	<?php require '../components/modal_e_sukses.php'; ?>

<?php
	}
?>



<?php require '../components/footer.php'; ?>