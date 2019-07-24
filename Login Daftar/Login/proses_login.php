<?php
session_start(); 
$link=mysqli_connect('localhost','root','','db_rskgm_rekap');

$v_user    = $_POST['email']; 
$v_pass    = $_POST['password']; 
$OP        = $_GET['STS'];

if($OP=="IN"){ //kondisi apakah login
    $query="SELECT * FROM pengguna WHERE email='$v_user' AND password='$v_pass'";
    $cek    = mysqli_query($link,$query);
   
    if(mysqli_num_rows($cek)==1){ //jika berhasil akan bernilai 1
        while ($data=mysqli_fetch_assoc($cek)) {
        $_SESSION['ses_user']=$data['email']; 
        $_SESSION['ses_pass']= $data['password'];
        $_SESSION['ses_status']= $data['status'];
        header("location:../../index.php?STS=IN");
        }   
    }else{ ?>
       <?php require_once 'components/header.php'; ?>
       <?php require_once 'components/modal_s_gagal.php'; ?>
       <?php require_once 'components/footer.php'; ?>
<?php
   	}
}elseif($OP=="OUT"){ 
	unset($_SESSION['ses_user']);
    unset($_SESSION['ses_pass']);
    header("location:../../login.php");
}
?>