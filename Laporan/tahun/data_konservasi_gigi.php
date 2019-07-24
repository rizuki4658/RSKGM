<?php
	 $link = mysqli_connect('localhost','root','','db_rskgm_rekap');
        
        $TK2_1_UMUM=0;
        $TK2_1_BPJS=0;
        $TK2_1_GRATIS=0;
        
       
       	$TK2_2_UMUM=0;
        $TK2_2_BPJS=0;
        $TK2_2_GRATIS=0;

        $TK2_3_UMUM=0;
        $TK2_3_BPJS=0;
        $TK2_3_GRATIS=0;
        
        $TK2_4_UMUM=0;
        $TK2_4_BPJS=0;
        $TK2_4_GRATIS=0;

        $TK2_5_UMUM=0;
        $TK2_5_BPJS=0;
        $TK2_5_GRATIS=0;
        
        $TK2_6_UMUM=0;
        $TK2_6_BPJS=0;
        $TK2_6_GRATIS=0;

        $TK2_7_UMUM=0;
        $TK2_7_BPJS=0;
        $TK2_7_GRATIS=0;
        
        $TK2_8_UMUM=0;
        $TK2_8_BPJS=0;
        $TK2_8_GRATIS=0;

        $TK2_9_UMUM=0;
        $TK2_9_BPJS=0;
        $TK2_9_GRATIS=0;
        
        $TK2_10_UMUM=0;
        $TK2_10_BPJS=0;
        $TK2_10_GRATIS=0;

        $TK2_11_UMUM=0;
        $TK2_11_BPJS=0;
        $TK2_11_GRATIS=0;
        
        $TK2_12_UMUM=0;
        $TK2_12_BPJS=0;
        $TK2_12_GRATIS=0;

        $TK2_13_UMUM=0;
        $TK2_13_BPJS=0;
        $TK2_13_GRATIS=0;
        
        $TK2_14_UMUM=0;
        $TK2_14_BPJS=0;
        $TK2_14_GRATIS=0;

        $TK2_15_UMUM=0;
        $TK2_15_BPJS=0;
        $TK2_15_GRATIS=0;
        


        $query1="SELECT DISTINCT ip1 from konservasi_gigi WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='UMUM' ORDER BY tgl ASC";
        $query2="SELECT DISTINCT ip1 from konservasi_gigi WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='BPJS' ORDER BY tgl ASC";
        $query3="SELECT DISTINCT ip1 from konservasi_gigi WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='GRATIS' ORDER BY tgl ASC";

        $query4="SELECT DISTINCT ip2 from konservasi_gigi WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='Umum' ORDER BY tgl ASC";
        $query5="SELECT DISTINCT ip2 from konservasi_gigi WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='BPJS' ORDER BY tgl ASC";
        $query6="SELECT DISTINCT ip2 from konservasi_gigi WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='Gratis' ORDER BY tgl ASC";
        
        $query7="SELECT DISTINCT ip3 from konservasi_gigi WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='UMUM' ORDER BY tgl ASC";
        $query8="SELECT DISTINCT ip3 from konservasi_gigi WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='BPJS' ORDER BY tgl ASC";
        $query9="SELECT DISTINCT ip3 from konservasi_gigi WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='GRATIS' ORDER BY tgl ASC";
        
        $query10="SELECT DISTINCT ip4 from konservasi_gigi WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='UMUM' ORDER BY tgl ASC";
        $query11="SELECT DISTINCT ip4 from konservasi_gigi WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='BPJS' ORDER BY tgl ASC";
        $query12="SELECT DISTINCT ip4 from konservasi_gigi WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='GRATIS' ORDER BY tgl ASC";
        
        $query13="SELECT DISTINCT ip5 from konservasi_gigi WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='UMUM' ORDER BY tgl ASC";
        $query14="SELECT DISTINCT ip5 from konservasi_gigi WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='BPJS' ORDER BY tgl ASC";
        $query15="SELECT DISTINCT ip5 from konservasi_gigi WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='GRATIS' ORDER BY tgl ASC";
        
        $query16="SELECT DISTINCT ip6 from konservasi_gigi WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='UMUM' ORDER BY tgl ASC";
        $query17="SELECT DISTINCT ip6 from konservasi_gigi WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='BPJS' ORDER BY tgl ASC";
        $query18="SELECT DISTINCT ip6 from konservasi_gigi WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='GRATIS' ORDER BY tgl ASC";
        
        $query19="SELECT DISTINCT ip7 from konservasi_gigi WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='UMUM' ORDER BY tgl ASC";
        $query20="SELECT DISTINCT ip7 from konservasi_gigi WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='BPJS' ORDER BY tgl ASC";
        $query21="SELECT DISTINCT ip7 from konservasi_gigi WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='GRATIS' ORDER BY tgl ASC";
        
        $query22="SELECT DISTINCT ip8 from konservasi_gigi WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='UMUM' ORDER BY tgl ASC";
        $query23="SELECT DISTINCT ip8 from konservasi_gigi WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='BPJS' ORDER BY tgl ASC";
        $query24="SELECT DISTINCT ip8 from konservasi_gigi WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='GRATIS' ORDER BY tgl ASC";

        $query25="SELECT DISTINCT ip9 from konservasi_gigi WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='UMUM' ORDER BY tgl ASC";
        $query26="SELECT DISTINCT ip9 from konservasi_gigi WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='BPJS' ORDER BY tgl ASC";
        $query27="SELECT DISTINCT ip9 from konservasi_gigi WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='GRATIS' ORDER BY tgl ASC";
        
        $query28="SELECT DISTINCT ip10 from konservasi_gigi WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='UMUM' ORDER BY tgl ASC";
        $query29="SELECT DISTINCT ip10 from konservasi_gigi WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='BPJS' ORDER BY tgl ASC";
        $query30="SELECT DISTINCT ip10 from konservasi_gigi WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='GRATIS' ORDER BY tgl ASC";
        
        $query31="SELECT DISTINCT ip11 from konservasi_gigi WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='UMUM' ORDER BY tgl ASC";
        $query32="SELECT DISTINCT ip11 from konservasi_gigi WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='BPJS' ORDER BY tgl ASC";
        $query33="SELECT DISTINCT ip11 from konservasi_gigi WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='GRATIS' ORDER BY tgl ASC";
        
        $query34="SELECT DISTINCT ip12 from konservasi_gigi WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='UMUM' ORDER BY tgl ASC";
        $query35="SELECT DISTINCT ip12 from konservasi_gigi WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='BPJS' ORDER BY tgl ASC";
        $query36="SELECT DISTINCT ip12 from konservasi_gigi WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='GRATIS' ORDER BY tgl ASC";
        
        $query37="SELECT DISTINCT ip13 from konservasi_gigi WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='UMUM' ORDER BY tgl ASC";
        $query38="SELECT DISTINCT ip13 from konservasi_gigi WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='BPJS' ORDER BY tgl ASC";
        $query39="SELECT DISTINCT ip13 from konservasi_gigi WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='GRATIS' ORDER BY tgl ASC";
        
        $query40="SELECT DISTINCT ip14 from konservasi_gigi WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='UMUM' ORDER BY tgl ASC";
        $query41="SELECT DISTINCT ip14 from konservasi_gigi WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='BPJS' ORDER BY tgl ASC";
        $query42="SELECT DISTINCT ip14 from konservasi_gigi WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='GRATIS' ORDER BY tgl ASC";
        
        $query43="SELECT DISTINCT ip15 from konservasi_gigi WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='UMUM' ORDER BY tgl ASC";
        $query44="SELECT DISTINCT ip15 from konservasi_gigi WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='BPJS' ORDER BY tgl ASC";
        $query45="SELECT DISTINCT ip15 from konservasi_gigi WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='GRATIS' ORDER BY tgl ASC";
        
        $link = mysqli_connect('localhost','root','','db_rskgm_rekap');
        $execute1=mysqli_query($link,$query1);
        $execute2=mysqli_query($link,$query2);
        $execute3=mysqli_query($link,$query3);

        $execute4=mysqli_query($link,$query4);
        $execute5=mysqli_query($link,$query5);
        $execute6=mysqli_query($link,$query6);

        $execute7=mysqli_query($link,$query7);
        $execute8=mysqli_query($link,$query8);
        $execute9=mysqli_query($link,$query9);

        $execute10=mysqli_query($link,$query10);
        $execute11=mysqli_query($link,$query11);
        $execute12=mysqli_query($link,$query12);

        $execute13=mysqli_query($link,$query13);
        $execute14=mysqli_query($link,$query14);
        $execute15=mysqli_query($link,$query15);

        $execute16=mysqli_query($link,$query16);
        $execute17=mysqli_query($link,$query17);
        $execute18=mysqli_query($link,$query18);

        $execute19=mysqli_query($link,$query19);
        $execute20=mysqli_query($link,$query20);
        $execute21=mysqli_query($link,$query21);

        $execute22=mysqli_query($link,$query22);
        $execute23=mysqli_query($link,$query23);
        $execute24=mysqli_query($link,$query24);

        $execute25=mysqli_query($link,$query25);
        $execute26=mysqli_query($link,$query26);
        $execute27=mysqli_query($link,$query27);

        $execute28=mysqli_query($link,$query28);
        $execute29=mysqli_query($link,$query29);
        $execute30=mysqli_query($link,$query30);

        $execute31=mysqli_query($link,$query31);
        $execute32=mysqli_query($link,$query32);
        $execute33=mysqli_query($link,$query33);


        $execute34=mysqli_query($link,$query34);
        $execute35=mysqli_query($link,$query35);
        $execute36=mysqli_query($link,$query36);

        $execute37=mysqli_query($link,$query37);
        $execute38=mysqli_query($link,$query38);
        $execute39=mysqli_query($link,$query39);

        $execute40=mysqli_query($link,$query40);
        $execute41=mysqli_query($link,$query41);
        $execute42=mysqli_query($link,$query42);

        $execute43=mysqli_query($link,$query43);
        $execute44=mysqli_query($link,$query44);
        $execute45=mysqli_query($link,$query45);
?>