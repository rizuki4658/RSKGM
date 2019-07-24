<?php
	$email=$_GET['id'];
	$status=$_GET['edit'];
	$link=mysqli_connect('localhost', 'root', '', 'db_rskgm_rekap');
	$query="SELECT * FROM pengguna WHERE email='$email' LIMIT 1";
	$execute=mysqli_query($link,$query);
	if (mysqli_num_rows($execute)>0) { 
		$query2="UPDATE pengguna SET status='$status' WHERE email='$email'";
		$execute2=mysqli_query($link,$query2);
		if (!$execute) {
			header('Location: ../Data_Pengguna.php');
		}else{

			header('Location: ../Data_Pengguna.php');
		}
	}else{
		header('Location: ../Data_Pengguna.php');
	}
?>