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
	    $total12=0;
	    $total13=0;
	    $total14=0;
	    $total15=0;
	    $total16=0;
	    $total17=0;
	    $total18=0;

	    $total19=0;
	    $total20=0;
	    $total21=0;
	    
	    $tgl=date("d M Y");
	    $query1="SELECT * FROM endodonti ORDER BY tgl ASC LIMIT 100";
	    $query2="SELECT * FROM endodonti WHERE status='Umum' ORDER BY tgl ASC LIMIT 100";
	    $query3="SELECT * FROM endodonti WHERE status='BPJS' ORDER BY tgl ASC LIMIT 100";
	    $query4="SELECT * FROM endodonti WHERE status='Gratis' ORDER BY tgl ASC LIMIT 100";


	    $excute1=mysqli_query($link,$query1);
	    $excute2=mysqli_query($link,$query2);
	    $excute3=mysqli_query($link,$query3);
	    $excute4=mysqli_query($link,$query4);
	    if (mysqli_num_rows($excute1)>0) {
	    	while ($data1=mysqli_fetch_assoc($excute1)) {
	    		$total1+=$data1['ip1']+$data1['ip2']+$data1['ip3']+$data1['ip4'];
			    $total2+=$data1['ip5']+$data1['ip6']+$data1['ip7']+$data1['ip8'];
			    $total3+=$data1['ip9']+$data1['ip10']+$data1['ip11'];
	            $total4+=$data1['ip12']+$data1['ip13'];
	            $total5+=$data1['ip14'];
	            $total6+=$data1['ip15'];
	            $total7+=$data1['ip16'];
	            $total8+=$data1['ip17']+$data1['ip18']+$data1['ip19']+$data1['ip20'];
	            $total9+=$data1['ip21'];
	            $total10+=$data1['ip22'];
	            $total11+=$data1['ip23']+$data1['ip24'];
	            $total12+=$data1['ip25']+$data1['ip26'];
	            $total13+=$data1['ip27']+$data1['ip28'];
	            $total14+=$data1['ip29']+$data1['ip30']+$data1['ip31'];
	            $total15+=$data1['ip32'];
	            $total16+=$data1['ip33']+$data1['ip34'];
	            $total17+=$data1['ip35']+$data1['ip36'];
	            $total18+=$data1['ip37'];
	    	}
	    	while ($data2=mysqli_fetch_assoc($excute2)) {
	    		$total19+=$data2['ip1']+$data2['ip2']+$data2['ip3']+$data2['ip4']+$data2['ip5']+$data2['ip6']+$data2['ip7']+$data2['ip8']+$data2['ip9']+$data2['ip10']+$data2['ip11']+$data2['ip12']+$data2['ip13']+$data2['ip14']+$data2['ip15']+$data2['ip16']+$data2['ip17']+$data2['ip18']+$data2['ip19']+$data2['ip20']+$data2['ip21']+$data2['ip22']+$data2['ip23']+$data2['ip24']+$data2['ip25']+$data2['ip26']+$data2['ip27']+$data2['ip28']+$data2['ip29']+$data2['ip30']+$data2['ip31']+$data2['ip32']+$data2['ip33']+$data2['ip34']+$data2['ip35']+$data2['ip36']+$data2['ip37'];
	   		}
	    	while ($data3=mysqli_fetch_assoc($excute3)) {
	    		$total20+=$data3['ip1']+$data3['ip2']+$data3['ip3']+$data3['ip4']+$data3['ip5']+$data3['ip6']+$data3['ip7']+$data3['ip8']+$data3['ip9']+$data3['ip10']+$data3['ip11']+$data3['ip12']+$data3['ip13']+$data3['ip14']+$data3['ip15']+$data3['ip16']+$data3['ip17']+$data3['ip18']+$data3['ip19']+$data3['ip20']+$data3['ip21']+$data3['ip22']+$data3['ip23']+$data3['ip24']+$data3['ip25']+$data3['ip26']+$data3['ip27']+$data3['ip28']+$data3['ip29']+$data3['ip30']+$data3['ip31']+$data3['ip32']+$data3['ip33']+$data3['ip34']+$data3['ip35']+$data3['ip36']+$data3['ip37'];
	    	}
	    	while ($data4=mysqli_fetch_assoc($excute4)) {
	    		$total21+=$data4['ip1']+$data4['ip2']+$data4['ip3']+$data4['ip4']+$data4['ip5']+$data4['ip6']+$data4['ip7']+$data4['ip8']+$data4['ip9']+$data4['ip10']+$data4['ip11']+$data4['ip12']+$data4['ip13']+$data4['ip14']+$data4['ip15']+$data4['ip16']+$data4['ip17']+$data4['ip18']+$data4['ip19']+$data4['ip20']+$data4['ip21']+$data4['ip22']+$data4['ip23']+$data4['ip24']+$data4['ip25']+$data4['ip26']+$data4['ip27']+$data4['ip28']+$data4['ip29']+$data4['ip30']+$data4['ip31']+$data4['ip32']+$data4['ip33']+$data4['ip34']+$data4['ip35']+$data4['ip36']+$data4['ip37'];
	    	}
	    }
	?>