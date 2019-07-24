<?php
	 $link = mysqli_connect('localhost','root','','db_rskgm_rekap');
        
        $TK1_1_UMUM=0;
        $TK1_1_BPJS=0;
        $TK1_1_GRATIS=0;
        
       
       	$TK1_2_UMUM=0;
        $TK1_2_BPJS=0;
        $TK1_2_GRATIS=0;

        $TK1_3_UMUM=0;
        $TK1_3_BPJS=0;
        $TK1_3_GRATIS=0;
        
        $TK1_4_UMUM=0;
        $TK1_4_BPJS=0;
        $TK1_4_GRATIS=0;

        $TK1_5_UMUM=0;
        $TK1_5_BPJS=0;
        $TK1_5_GRATIS=0;
        
        $TK1_6_UMUM=0;
        $TK1_6_BPJS=0;
        $TK1_6_GRATIS=0;

        $TK1_7_UMUM=0;
        $TK1_7_BPJS=0;
        $TK1_7_GRATIS=0;
        
        $TK1_8_UMUM=0;
        $TK1_8_BPJS=0;
        $TK1_8_GRATIS=0;

        $TK1_9_UMUM=0;
        $TK1_9_BPJS=0;
        $TK1_9_GRATIS=0;
        
        $TK1_10_UMUM=0;
        $TK1_10_BPJS=0;
        $TK1_10_GRATIS=0;

        $TK1_11_UMUM=0;
        $TK1_11_BPJS=0;
        $TK1_11_GRATIS=0;
        
        $TK1_12_UMUM=0;
        $TK1_12_BPJS=0;
        $TK1_12_GRATIS=0;

        $TK1_13_UMUM=0;
        $TK1_13_BPJS=0;
        $TK1_13_GRATIS=0;
        
        $TK1_14_UMUM=0;
        $TK1_14_BPJS=0;
        $TK1_14_GRATIS=0;

        $TK1_15_UMUM=0;
        $TK1_15_BPJS=0;
        $TK1_15_GRATIS=0;
        
        $TK1_16_UMUM=0;
        $TK1_16_BPJS=0;
        $TK1_16_GRATIS=0;

        $TK1_17_UMUM=0;
        $TK1_17_BPJS=0;
        $TK1_17_GRATIS=0;
        
        $TK1_18_UMUM=0;
        $TK1_18_BPJS=0;
        $TK1_18_GRATIS=0;

        $TK1_19_UMUM=0;
        $TK1_19_BPJS=0;
        $TK1_19_GRATIS=0;
        
        $TK1_20_UMUM=0;
        $TK1_20_BPJS=0;
        $TK1_20_GRATIS=0;

        $TK1_21_UMUM=0;
        $TK1_21_BPJS=0;
        $TK1_21_GRATIS=0;
        
        $TK1_22_UMUM=0;
        $TK1_22_BPJS=0;
        $TK1_22_GRATIS=0;

        $TK1_23_UMUM=0;
        $TK1_23_BPJS=0;
        $TK1_23_GRATIS=0;
        
        $TK1_24_UMUM=0;
        $TK1_24_BPJS=0;
        $TK1_24_GRATIS=0;

        $TK1_25_UMUM=0;
        $TK1_25_BPJS=0;
        $TK1_25_GRATIS=0;
        
        $TK1_26_UMUM=0;
        $TK1_26_BPJS=0;
        $TK1_26_GRATIS=0;

        $TK1_27_UMUM=0;
        $TK1_27_BPJS=0;
        $TK1_27_GRATIS=0;
        
        $TK1_28_UMUM=0;
        $TK1_28_BPJS=0;
        $TK1_28_GRATIS=0;

        $TK1_29_UMUM=0;
        $TK1_29_BPJS=0;
        $TK1_29_GRATIS=0;
        
        $TK1_30_UMUM=0;
        $TK1_30_BPJS=0;
        $TK1_30_GRATIS=0;

        $TK1_31_UMUM=0;
        $TK1_31_BPJS=0;
        $TK1_31_GRATIS=0;
        
        $TK1_32_UMUM=0;
        $TK1_32_BPJS=0;
        $TK1_32_GRATIS=0;




        $query1="SELECT DISTINCT ip1 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='Umum' ORDER BY tgl ASC";
        $query2="SELECT DISTINCT ip1 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='BPJS' ORDER BY tgl ASC";
        $query3="SELECT DISTINCT ip1 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='Gratis' ORDER BY tgl ASC";

        $query4="SELECT DISTINCT ip2 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='Umum' ORDER BY tgl ASC";
        $query5="SELECT DISTINCT ip2 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='BPJS' ORDER BY tgl ASC";
        $query6="SELECT DISTINCT ip2 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='Gratis' ORDER BY tgl ASC";
        
        $query7="SELECT DISTINCT ip3 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='Umum' ORDER BY tgl ASC";
        $query8="SELECT DISTINCT ip3 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='BPJS' ORDER BY tgl ASC";
        $query9="SELECT DISTINCT ip3 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='Gratis' ORDER BY tgl ASC";
        
        $query10="SELECT DISTINCT ip4 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='Umum' ORDER BY tgl ASC";
        $query11="SELECT DISTINCT ip4 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='BPJS' ORDER BY tgl ASC";
        $query12="SELECT DISTINCT ip4 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='Gratis' ORDER BY tgl ASC";
        
        $query13="SELECT DISTINCT ip5 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='Umum' ORDER BY tgl ASC";
        $query14="SELECT DISTINCT ip5 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='BPJS' ORDER BY tgl ASC";
        $query15="SELECT DISTINCT ip5 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='Gratis' ORDER BY tgl ASC";
        
        $query16="SELECT DISTINCT ip6 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='Umum' ORDER BY tgl ASC";
        $query17="SELECT DISTINCT ip6 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='BPJS' ORDER BY tgl ASC";
        $query18="SELECT DISTINCT ip6 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='Gratis' ORDER BY tgl ASC";
        
        $query19="SELECT DISTINCT ip7 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='Umum' ORDER BY tgl ASC";
        $query20="SELECT DISTINCT ip7 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='BPJS' ORDER BY tgl ASC";
        $query21="SELECT DISTINCT ip7 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='Gratis' ORDER BY tgl ASC";
        
        $query22="SELECT DISTINCT ip8 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='Umum' ORDER BY tgl ASC";
        $query23="SELECT DISTINCT ip8 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='BPJS' ORDER BY tgl ASC";
        $query24="SELECT DISTINCT ip8 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='Gratis' ORDER BY tgl ASC";

        $query25="SELECT DISTINCT ip9 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='Umum' ORDER BY tgl ASC";
        $query26="SELECT DISTINCT ip9 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='BPJS' ORDER BY tgl ASC";
        $query27="SELECT DISTINCT ip9 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='Gratis' ORDER BY tgl ASC";
        
        $query28="SELECT DISTINCT ip10 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='Umum' ORDER BY tgl ASC";
        $query29="SELECT DISTINCT ip10 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='BPJS' ORDER BY tgl ASC";
        $query30="SELECT DISTINCT ip10 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='Gratis' ORDER BY tgl ASC";
        
        $query31="SELECT DISTINCT ip11 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='Umum' ORDER BY tgl ASC";
        $query32="SELECT DISTINCT ip11 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='BPJS' ORDER BY tgl ASC";
        $query33="SELECT DISTINCT ip11 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='Gratis' ORDER BY tgl ASC";
        
        $query34="SELECT DISTINCT ip12 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='Umum' ORDER BY tgl ASC";
        $query35="SELECT DISTINCT ip12 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='BPJS' ORDER BY tgl ASC";
        $query36="SELECT DISTINCT ip12 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='Gratis' ORDER BY tgl ASC";
        
        $query37="SELECT DISTINCT ip13 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='Umum' ORDER BY tgl ASC";
        $query38="SELECT DISTINCT ip13 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='BPJS' ORDER BY tgl ASC";
        $query39="SELECT DISTINCT ip13 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='Gratis' ORDER BY tgl ASC";
        
        $query40="SELECT DISTINCT ip14 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='Umum' ORDER BY tgl ASC";
        $query41="SELECT DISTINCT ip14 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='BPJS' ORDER BY tgl ASC";
        $query42="SELECT DISTINCT ip14 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='Gratis' ORDER BY tgl ASC";
        
        $query43="SELECT DISTINCT ip15 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='Umum' ORDER BY tgl ASC";
        $query44="SELECT DISTINCT ip15 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='BPJS' ORDER BY tgl ASC";
        $query45="SELECT DISTINCT ip15 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='Gratis' ORDER BY tgl ASC";
        
        $query46="SELECT DISTINCT ip16 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='Umum' ORDER BY tgl ASC";
        $query47="SELECT DISTINCT ip16 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='BPJS' ORDER BY tgl ASC";
        $query48="SELECT DISTINCT ip16 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='Gratis' ORDER BY tgl ASC";


        $query49="SELECT DISTINCT ip17 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='Umum' ORDER BY tgl ASC";
        $query50="SELECT DISTINCT ip17 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='BPJS' ORDER BY tgl ASC";
        $query51="SELECT DISTINCT ip17 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='Gratis' ORDER BY tgl ASC";

        $query52="SELECT DISTINCT ip18 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='Umum' ORDER BY tgl ASC";
        $query53="SELECT DISTINCT ip18 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='BPJS' ORDER BY tgl ASC";
        $query54="SELECT DISTINCT ip18 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='Gratis' ORDER BY tgl ASC";
        
        $query55="SELECT DISTINCT ip19 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='Umum' ORDER BY tgl ASC";
        $query56="SELECT DISTINCT ip19 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='BPJS' ORDER BY tgl ASC";
        $query57="SELECT DISTINCT ip19 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='Gratis' ORDER BY tgl ASC";
        
        $query58="SELECT DISTINCT ip20 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='Umum' ORDER BY tgl ASC";
        $query59="SELECT DISTINCT ip20 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='BPJS' ORDER BY tgl ASC";
        $query60="SELECT DISTINCT ip20 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='Gratis' ORDER BY tgl ASC";
        
        $query61="SELECT DISTINCT ip21 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='Umum' ORDER BY tgl ASC";
        $query62="SELECT DISTINCT ip21 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='BPJS' ORDER BY tgl ASC";
        $query63="SELECT DISTINCT ip21 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='Gratis' ORDER BY tgl ASC";
        
        $query64="SELECT DISTINCT ip22 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='Umum' ORDER BY tgl ASC";
        $query65="SELECT DISTINCT ip22 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='BPJS' ORDER BY tgl ASC";
        $query66="SELECT DISTINCT ip22 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='Gratis' ORDER BY tgl ASC";
        
        $query67="SELECT DISTINCT ip23 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='Umum' ORDER BY tgl ASC";
        $query68="SELECT DISTINCT ip23 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='BPJS' ORDER BY tgl ASC";
        $query69="SELECT DISTINCT ip23 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='Gratis' ORDER BY tgl ASC";
        
        $query70="SELECT DISTINCT ip24 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='Umum' ORDER BY tgl ASC";
        $query71="SELECT DISTINCT ip24 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='BPJS' ORDER BY tgl ASC";
        $query72="SELECT DISTINCT ip24 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='Gratis' ORDER BY tgl ASC";

        $query73="SELECT DISTINCT ip25 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='Umum' ORDER BY tgl ASC";
        $query74="SELECT DISTINCT ip25 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='BPJS' ORDER BY tgl ASC";
        $query75="SELECT DISTINCT ip25 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='Gratis' ORDER BY tgl ASC";
        
        $query76="SELECT DISTINCT ip26 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='Umum' ORDER BY tgl ASC";
        $query77="SELECT DISTINCT ip26 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='BPJS' ORDER BY tgl ASC";
        $query78="SELECT DISTINCT ip26 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='Gratis' ORDER BY tgl ASC";
        
        $query79="SELECT DISTINCT ip27 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='Umum' ORDER BY tgl ASC";
        $query80="SELECT DISTINCT ip27 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='BPJS' ORDER BY tgl ASC";
        $query81="SELECT DISTINCT ip27 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='Gratis' ORDER BY tgl ASC";
        
        $query82="SELECT DISTINCT ip28 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='Umum' ORDER BY tgl ASC";
        $query83="SELECT DISTINCT ip28 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='BPJS' ORDER BY tgl ASC";
        $query84="SELECT DISTINCT ip28 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='Gratis' ORDER BY tgl ASC";
        
        $query85="SELECT DISTINCT ip29 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='Umum' ORDER BY tgl ASC";
        $query86="SELECT DISTINCT ip29 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='BPJS' ORDER BY tgl ASC";
        $query87="SELECT DISTINCT ip29 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='Gratis' ORDER BY tgl ASC";
        
        $query88="SELECT DISTINCT ip30 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='Umum' ORDER BY tgl ASC";
        $query89="SELECT DISTINCT ip30 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='BPJS' ORDER BY tgl ASC";
        $query90="SELECT DISTINCT ip30 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='Gratis' ORDER BY tgl ASC";
        
        $query91="SELECT DISTINCT ip31 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='Umum' ORDER BY tgl ASC";
        $query92="SELECT DISTINCT ip31 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='BPJS' ORDER BY tgl ASC";
        $query93="SELECT DISTINCT ip31 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='Gratis' ORDER BY tgl ASC";
        
        $query94="SELECT DISTINCT ip32 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='Umum' ORDER BY tgl ASC";
        $query95="SELECT DISTINCT ip32 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='BPJS' ORDER BY tgl ASC";
        $query96="SELECT DISTINCT ip32 from prostodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='Gratis' ORDER BY tgl ASC";
        
        
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

        $execute46=mysqli_query($link,$query46);
        $execute47=mysqli_query($link,$query47);
        $execute48=mysqli_query($link,$query48);

        $execute49=mysqli_query($link,$query49);
        $execute50=mysqli_query($link,$query50);
        $execute51=mysqli_query($link,$query51);

        $execute52=mysqli_query($link,$query52);
        $execute53=mysqli_query($link,$query53);
        $execute54=mysqli_query($link,$query54);

        $execute55=mysqli_query($link,$query55);
        $execute56=mysqli_query($link,$query56);
        $execute57=mysqli_query($link,$query57);

        $execute58=mysqli_query($link,$query58);
        $execute59=mysqli_query($link,$query59);
        $execute60=mysqli_query($link,$query60);

        $execute61=mysqli_query($link,$query61);
        $execute62=mysqli_query($link,$query62);
        $execute63=mysqli_query($link,$query63);

        $execute64=mysqli_query($link,$query64);
        $execute65=mysqli_query($link,$query65);
        $execute66=mysqli_query($link,$query66);



        $execute67=mysqli_query($link,$query67);
        $execute68=mysqli_query($link,$query68);
        $execute69=mysqli_query($link,$query69);

        $execute70=mysqli_query($link,$query70);
        $execute71=mysqli_query($link,$query71);
        $execute72=mysqli_query($link,$query72);

        $execute73=mysqli_query($link,$query73);
        $execute74=mysqli_query($link,$query74);
        $execute75=mysqli_query($link,$query75);

        $execute76=mysqli_query($link,$query76);
        $execute77=mysqli_query($link,$query77);
        $execute78=mysqli_query($link,$query78);

        $execute79=mysqli_query($link,$query79);
        $execute80=mysqli_query($link,$query80);
        $execute81=mysqli_query($link,$query81);

        $execute82=mysqli_query($link,$query82);
        $execute83=mysqli_query($link,$query83);
        $execute84=mysqli_query($link,$query84);

        $execute85=mysqli_query($link,$query85);
        $execute86=mysqli_query($link,$query86);
        $execute87=mysqli_query($link,$query87);

        $execute88=mysqli_query($link,$query88);
        $execute89=mysqli_query($link,$query89);
        $execute90=mysqli_query($link,$query90);

        $execute91=mysqli_query($link,$query91);
        $execute92=mysqli_query($link,$query92);
        $execute93=mysqli_query($link,$query93);

        $execute94=mysqli_query($link,$query94);
        $execute95=mysqli_query($link,$query95);
        $execute96=mysqli_query($link,$query96);

?>