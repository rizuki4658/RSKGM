<?php
	$link	= mysqli_connect('localhost', 'root', '', 'db_rskgm_rekap');
	
	$tgl1=date("Y-m-d");
    $tgl2=date("Y-m-d");
    $metode=$_POST['metode'];
    $tahun=$_POST['tahun'];
    $nama_bulan="";
    	if ($metode == 1) {
    		$metode = "BPJS";
    	}else{
    		$metode = "UMUM";
    	}


        if ($_POST['bulan']==1) {
            $tgl1=$tahun."-01-01";
            $tgl2=$tahun."-01-31";
            $nama_bulan="Januari ". $tahun;
        }elseif ($_POST['bulan']==2) {
            $tgl1=$tahun."-02-01";
            $tgl2=$tahun."-02-28";
            $nama_bulan="Februari ". $tahun;
        }elseif ($_POST['bulan']==3) {
            $tgl1=$tahun."-01-01";
            $tgl2=$tahun."-03-31";
            $nama_bulan="Maret ". $tahun;
        }elseif ($_POST['bulan']==4) {
            $tgl1=$tahun."-04-01";
            $tgl2=$tahun."-04-30";
            $nama_bulan="April ". $tahun;
        }elseif ($_POST['bulan']==5) {
            $tgl1=$tahun."-05-01";
            $tgl2=$tahun."-05-31";
            $nama_bulan="Mei ". $tahun;
        }elseif ($_POST['bulan']==6) {
            $tgl1=$tahun."-06-01";
            $tgl2=$tahun."-06-30";
            $nama_bulan="Juni ". $tahun;
        }elseif ($_POST['bulan']==7) {
            $tgl1=$tahun."-07-01";
            $tgl2=$tahun."-07-31";
            $nama_bulan="Juli ". $tahun;
        }elseif ($_POST['bulan']==8) {
            $tgl1=$tahun."-08-01";
            $tgl2=$tahun."-08-31";
            $nama_bulan="Agustus ". $tahun;
        }elseif ($_POST['bulan']==9) {
            $tgl1=$tahun."-09-01";
            $tgl2=$tahun."-09-30";
            $nama_bulan="September ". $tahun;
        }elseif ($_POST['bulan']==10) {
            $tgl1=$tahun."-10-01";
            $tgl2=$tahun."-10-31";
            $nama_bulan="Oktober ". $tahun;
        }elseif ($_POST['bulan']==11) {
            $tgl1=$tahun."-11-01";
            $tgl2=$tahun."-11-30";
            $nama_bulan="November ". $tahun;
        }elseif ($_POST['bulan']==12) {
            $tgl1=$tahun."-12-01";
            $tgl2=$tahun."-12-31";
            $nama_bulan="Desember ". $tahun;
        }

	$query_periodonti	="SELECT * FROM periodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status LIKE '%$metode%'";
	$query_prostodonti	="SELECT * FROM prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status LIKE '%$metode%'";;
	$query_konservasi	="SELECT * FROM konservasi_gigi WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status LIKE '%$metode%'";;
	$query_ortodonti	="SELECT * FROM ortodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status LIKE '%$metode%'";;
	$query_pedodonti	="SELECT * FROM pedodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status LIKE '%$metode%'";;
	$query_oral			="SELECT * FROM oral_surgery WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status LIKE '%$metode%'";;
	$query_eksodonti	="SELECT * FROM eksodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status LIKE '%$metode%'";;
	$query_endodonti	="SELECT * FROM endodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status LIKE '%$metode%'";;
	$query_ugd			="SELECT * FROM ugd WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status LIKE '%$metode%'";;

	$execute_periodonti		=mysqli_query($link, $query_periodonti);
	$execute_prostodonti	=mysqli_query($link, $query_prostodonti);
	$execute_konservasi		=mysqli_query($link, $query_konservasi);
	$execute_ortodonti		=mysqli_query($link, $query_ortodonti);
	$execute_pedodonti		=mysqli_query($link, $query_pedodonti);
	$execute_oral			=mysqli_query($link, $query_oral);
	$execute_eksodonti		=mysqli_query($link, $query_eksodonti);
	$execute_endodonti		=mysqli_query($link, $query_eksodonti);
	$execute_ugd			=mysqli_query($link, $query_ugd);

	$result_periodonti	="";
	$result_prostodonti	="";
	$result_konservasi	="";
	$result_orotodonti	="";
	$result_pedodonti	="";
	$result_oral		="";
	$result_eksodonti	="";
	$result_endodonti	="";
	$result_ugd			="";

	$total1=0;
	$total2=0;
	$total3=0;
	$total4=0;
	$total5=0;
	$total6=0;
	$total7=0;
	$total8=0;
	$total9=0;

	while ($result_periodonti = mysqli_fetch_assoc($execute_periodonti)) {
		$total1 += $result_periodonti['ip7'] + $result_periodonti['ip8'];

	}

	while ($result_prostodonti = mysqli_fetch_assoc($execute_prostodonti)) {
		$total2 += $result_prostodonti['ip31'] + $result_prostodonti['ip32'];

	}

	while ($result_konservasi = mysqli_fetch_assoc($execute_konservasi)) {
		$total3 += $result_konservasi['ip14'] + $result_konservasi['ip15'];

	}

	while ($result_orotodonti = mysqli_fetch_assoc($execute_ortodonti)) {
		$total4 += $result_orotodonti['ip14'] + $result_orotodonti['ip15'];

	}


	while ($result_pedodonti = mysqli_fetch_assoc($execute_pedodonti)) {
		$total5 += $result_pedodonti['ip23'] + $result_pedodonti['ip24'];

	}


	while ($result_oral = mysqli_fetch_assoc($execute_oral)) {
		$total6 += $result_oral['ip19'] + $result_oral['ip20'];

	}

	while ($result_eksodonti = mysqli_fetch_assoc($execute_eksodonti)) {
		$total7 += $result_eksodonti['ip16'] + $result_eksodonti['ip17'];

	}

	while ($result_endodonti = mysqli_fetch_assoc($execute_endodonti)) {
		$total8 += $result_endodonti['ip38'] + $result_endodonti['ip39'];

	}

	while ($result_ugd = mysqli_fetch_assoc($execute_ugd)) {
		$total9 += $result_ugd['ip22'] + $result_ugd['ip23'];

	}
?>