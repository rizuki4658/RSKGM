<?php
		$link=mysqli_connect('localhost', 'root', '', 'db_rskgm_rekap');
	    $total1=0;
	    $total2=0;
	    $total3=0;
	    $total4=0;
	    $total5=0;
	    $total6=0;
	    $total7=0;
	    $total8=0;
	    $total9=0;
	    $total10=0;
	    $total11=0;
	    $tgl=date("d M Y");
	    $query1="SELECT * FROM periodonti ORDER BY tgl ASC LIMIT 100";
	    $query2="SELECT * FROM periodonti WHERE status='UMUM' ORDER BY tgl ASC LIMIT 100";
	    $query3="SELECT * FROM periodonti WHERE status='BPJS' ORDER BY tgl ASC LIMIT 100";
	    $query4="SELECT * FROM periodonti WHERE status='GRATIS' ORDER BY tgl ASC LIMIT 100";


	    $excute1=mysqli_query($link,$query1);
	    $excute2=mysqli_query($link,$query2);
	    $excute3=mysqli_query($link,$query3);
	    $excute4=mysqli_query($link,$query4);
	    if (mysqli_num_rows($excute1)>0) {
	    	while ($data1=mysqli_fetch_assoc($excute1)) {
	    		$total1+=$data1['ip1'];
			    $total2+=$data1['ip2'];
			    $total3+=$data1['ip3'];
			    $total4+=$data1['ip4'];
			    $total5+=$data1['ip5'];
			    $total6+=$data1['ip6'];
			    $total7+=$data1['ip7'];
			    $total8+=$data1['ip8'];
	    	}
	    	while ($data2=mysqli_fetch_assoc($excute2)) {
	    		$total9+=$data2['ip1']+$data2['ip2']+$data2['ip3']+$data2['ip4']+$data2['ip5']+$data2['ip6']+$data2['ip7']+$data2['ip8'];
	    	}
	    	while ($data3=mysqli_fetch_assoc($excute3)) {
	    		$total10+=$data3['ip1']+$data3['ip2']+$data3['ip3']+$data3['ip4']+$data3['ip5']+$data3['ip6']+$data3['ip7']+$data3['ip8'];
	    	}
	    	while ($data4=mysqli_fetch_assoc($excute4)) {
	    		$total11+=$data4['ip1']+$data4['ip2']+$data4['ip3']+$data4['ip4']+$data4['ip5']+$data4['ip6']+$data4['ip7']+$data4['ip8'];
	    	}
	    }
	?>