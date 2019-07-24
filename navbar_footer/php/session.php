<?php
$layanan="";
$laporan="";
$data_user="";
$OP="";
$nama="UNKNOWN";
session_start();
if(!isset($_SESSION['ses_user']) || !isset($_SESSION['ses_pass']) || !isset($_SESSION['ses_status'])){ //cek apakah user sudah login
	$layanan="style='display: none;'";
	$laporan="style='display: none;'"; 
	$data_user="style='display: none;'";
	$OP="";
	header('Location: login.php?STS=OUT');        
}else {
    $link=mysqli_connect("localhost","root","","db_rskgm_rekap");
    $email=$_SESSION['ses_user'];
    $password=$_SESSION['ses_pass'];
    $status=$_SESSION['ses_status'];
	$data_user="";
	$datapengguna="";

    $login=mysqli_query($link,"SELECT * FROM pengguna WHERE email = '$email' AND password='$password'");
    while ($data=mysqli_fetch_assoc($login)) {
	    if ($data['status']=="PASS") {
		    $layanan="";
			$laporan="";
			$data_user="";
			$OP="style='display: none;'";
			$nama=$data['nama'];
			$datapengguna="";  	
	    }else{
	    	$layanan="style='display: none;'";
			$laporan="style='display: none;'";
			$OP="style='display: none;'";
			$datapengguna="style='display: none;'";
			$nama=$data['nama'];
	    }
    }
}
?>