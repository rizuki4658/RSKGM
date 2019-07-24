<?php
	$link = mysqli_connect('localhost','root','','db_rskgm_rekap');        
    
    $total1Umum=0;
    $total2Umum=0;
    $total3Umum=0;
    $total4Umum=0;
    $total5Umum=0;
    $total6Umum=0;
    $total7Umum=0;
    $total8Umum=0;
    $total9Umum=0;
    $total10Umum=0;
    $total11Umum=0;
    $total12Umum=0;
    $total13Umum=0;
    $total14Umum=0;
    $total15Umum=0;
    $total16Umum=0;
    $total17Umum=0;
    $total18Umum=0;
    $total19Umum=0;
    $total20Umum=0;
    $total21Umum=0;
    $total22Umum=0;
    $total23Umum=0;
    $total24Umum=0;

    $total1BPJS=0;
    $total3BPJS=0;
    $total2BPJS=0;
    $total4BPJS=0;
    $total5BPJS=0;
    $total6BPJS=0;
    $total7BPJS=0;
    $total8BPJS=0;
    $total9BPJS=0;
    $total10BPJS=0;
    $total11BPJS=0;
    $total12BPJS=0;
    $total13BPJS=0;
    $total14BPJS=0;
    $total15BPJS=0;
    $total16BPJS=0;
    $total17BPJS=0;
    $total18BPJS=0;
    $total19BPJS=0;
    $total20BPJS=0;
    $total21BPJS=0;
    $total22BPJS=0;
    $total23BPJS=0;
    $total24BPJS=0;

    $total1Gratis=0;
    $total2Gratis=0;
    $total3Gratis=0;
    $total4Gratis=0;
    $total5Gratis=0;
    $total6Gratis=0;
    $total7Gratis=0;
    $total8Gratis=0;
    $total9Gratis=0;
    $total10Gratis=0;
    $total11Gratis=0;
    $total12Gratis=0;
    $total13Gratis=0;
    $total14Gratis=0;
    $total15Gratis=0;
    $total16Gratis=0;
    $total17Gratis=0;
    $total18Gratis=0;
    $total19Gratis=0;
    $total20Gratis=0;
    $total21Gratis=0;
    $total22Gratis=0;
    $total23Gratis=0;
    $total24Gratis=0;
    
    $pedodo1="SELECT * from pedodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='Umum' ORDER BY tgl ASC";
    $pedodo2="SELECT * from pedodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='BPJS' ORDER BY tgl ASC";
    $pedodo3="SELECT * from pedodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='Gratis' ORDER BY tgl ASC";
    $EXpedodo1=mysqli_query($link,$pedodo1);
    $EXpedodo2=mysqli_query($link,$pedodo2);
    $EXpedodo3=mysqli_query($link,$pedodo3);
    
    if (mysqli_num_rows($EXpedodo1)>0) {
        while ($data=mysqli_fetch_assoc($EXpedodo1)) {
            $total1Umum+=$data['ip1'];
            $total2Umum+=$data['ip2'];
            $total3Umum+=$data['ip3'];
            $total4Umum+=$data['ip4'];
            $total5Umum+=$data['ip5'];
            $total6Umum+=$data['ip6'];
            $total7Umum+=$data['ip7'];
            $total8Umum+=$data['ip8'];
            $total9Umum+=$data['ip9'];
            $total10Umum+=$data['ip10'];
            $total11Umum+=$data['ip11'];
            $total12Umum+=$data['ip12'];
            $total13Umum+=$data['ip13'];
            $total14Umum+=$data['ip14'];
            $total15Umum+=$data['ip15'];
            $total16Umum+=$data['ip16'];
            $total17Umum+=$data['ip17'];
            $total18Umum+=$data['ip18'];
            $total19Umum+=$data['ip19'];
            $total20Umum+=$data['ip20'];
            $total21Umum+=$data['ip21'];
            $total22Umum+=$data['ip22'];
            $total23Umum+=$data['ip23'];
            $total24Umum+=$data['ip24'];
        }
    }

    if (mysqli_num_rows($EXpedodo2)>0) {
        while ($data=mysqli_fetch_assoc($EXpedodo2)) {
            $total1BPJS+=$data['ip1'];
            $total2BPJS+=$data['ip2'];
            $total3BPJS+=$data['ip3'];
            $total4BPJS+=$data['ip4'];
            $total5BPJS+=$data['ip5'];
            $total6BPJS+=$data['ip6'];
            $total7BPJS+=$data['ip7'];
            $total8BPJS+=$data['ip8'];
            $total9BPJS+=$data['ip9'];
            $total10BPJS+=$data['ip10'];
            $total11BPJS+=$data['ip11'];
            $total12BPJS+=$data['ip12'];
            $total13BPJS+=$data['ip13'];
            $total14BPJS+=$data['ip14'];
            $total15BPJS+=$data['ip15'];
            $total16BPJS+=$data['ip16'];
            $total17BPJS+=$data['ip17'];
            $total18BPJS+=$data['ip18'];
            $total19BPJS+=$data['ip19'];
            $total20BPJS+=$data['ip20'];
            $total21BPJS+=$data['ip21'];
            $total22BPJS+=$data['ip22'];
            $total23BPJS+=$data['ip23'];
            $total24BPJS+=$data['ip24'];
        }
    }

    if (mysqli_num_rows($EXpedodo2)>0) {
        while ($data=mysqli_fetch_assoc($EXpedodo2)) {
            $total1Gratis+=$data['ip1'];
            $total2Gratis+=$data['ip2'];
            $total3Gratis+=$data['ip3'];
            $total4Gratis+=$data['ip4'];
            $total5Gratis+=$data['ip5'];
            $total6Gratis+=$data['ip6'];
            $total7Gratis+=$data['ip7'];
            $total8Gratis+=$data['ip8'];
            $total9Gratis+=$data['ip9'];
            $total10Gratis+=$data['ip10'];
            $total11Gratis+=$data['ip11'];
            $total12Gratis+=$data['ip12'];
            $total13Gratis+=$data['ip13'];
            $total14Gratis+=$data['ip14'];
            $total15Gratis+=$data['ip15'];
            $total16Gratis+=$data['ip16'];
            $total17Gratis+=$data['ip17'];
            $total18Gratis+=$data['ip18'];
            $total19Gratis+=$data['ip19'];
            $total20Gratis+=$data['ip20'];
            $total21Gratis+=$data['ip21'];
            $total22Gratis+=$data['ip22'];
            $total23Gratis+=$data['ip23'];
            $total24Gratis+=$data['ip24'];
        }
    }
?>