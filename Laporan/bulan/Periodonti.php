<?php
$this->SetX(20);
        $this->Cell(35,0,"KLINIK PERIODONTI",0,0,'C');
        $this->Ln(5);
        $this->SetX(30);
        $this->Cell(35,0,"Tabel Rekapitulasi",0,0,'L');
        
        $this->Ln(2);
        $this->SetX(30);
        $this->Cell(10,5,"No",1,0,'C');
        $this->Cell(50,5,"Uraian",1,0,'C');
        $this->Cell(20,5,"Umum",1,0,'C');
        $this->Cell(20,5,"BPJS",1,0,'C');
        $this->Cell(20,5,"Gratis",1,0,'C');
        $this->Cell(20,5,"Jumlah",1,0,'C');
        
        

        $this->Ln();
        $this->SetX(30);
        $this->Cell(10,5,"1",1,0,'C');
        $this->Cell(50,5,"Macro Scalling",1,0,'L');
        $link = mysqli_connect('localhost','root','','db_rskgm_rekap');
        $T_1_UMUM=0;
        $T_1_BPJS=0;
        $T_1_GRATIS=0;
        $query1="SELECT DISTINCT ip1 from periodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='UMUM' ORDER BY tgl ASC";
        $query2="SELECT DISTINCT ip1 from periodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='BPJS' ORDER BY tgl ASC";
        $query3="SELECT DISTINCT ip1 from periodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='GRATIS' ORDER BY tgl ASC";
        $hasil1=mysqli_query($link,$query1);
        $hasil2=mysqli_query($link,$query2);
        $hasil3=mysqli_query($link,$query3);
        if (mysqli_num_rows($hasil1) > 0) {
            while ($macro1=mysqli_fetch_assoc($hasil1)) {
                $T_1_UMUM+=$macro1['ip1'];
                $this->Cell(20,5, number_format($T_1_UMUM),1,0,'C');
            }
        }else{
            $this->Cell(20,5, $T_1_UMUM,1,0,'C');
        }
        if (mysqli_num_rows($hasil2) > 0) {
            while ($macro2=mysqli_fetch_assoc($hasil2)) {
                $T_1_BPJS+=$macro2['ip1'];
                $this->Cell(20,5, number_format($T_1_BPJS),1,0,'C');
            }
        }else{
            $this->Cell(20,5, $T_1_BPJS,1,0,'C');
        }
        if (mysqli_num_rows($hasil3) > 0) {
            while ($macro3=mysqli_fetch_assoc($hasil3)) {
                $T_1_GRATIS+=$macro3['ip1'];
                $this->Cell(20,5, number_format($T_1_GRATIS),1,0,'C');
            }
        }else{
            $this->Cell(20,5, $T_1_GRATIS,1,0,'C');
        }
        $this->Cell(20,5, number_format($T_1_GRATIS+$T_1_UMUM+$T_1_BPJS),1,0,'C');
        


        $this->Ln();
        $this->SetX(30);
        $this->Cell(10,5,"2",1,0,'C');
        $this->Cell(50,5,"Root Planning",1,0,'L');

        $T_2_UMUM=0;
        $T_2_BPJS=0;
        $T_2_GRATIS=0;
        $query1="SELECT DISTINCT ip2 from periodonti WHERE tgl >= '$tgl1' AND tgl <= '$tgl2' AND status='UMUM' ORDER BY tgl ASC";
        $query2="SELECT DISTINCT ip2 from periodonti WHERE tgl >= '$tgl1' AND tgl <= '$tgl2' AND status='BPJS' ORDER BY tgl ASC";
        $query3="SELECT DISTINCT ip2 from periodonti WHERE tgl >= '$tgl1' AND tgl <= '$tgl2' AND status='GRATIS' ORDER BY tgl ASC";
        $hasil1=mysqli_query($link,$query1);
        $hasil2=mysqli_query($link,$query2);
        $hasil3=mysqli_query($link,$query3);
        if (mysqli_num_rows($hasil1) > 0) {
            while ($roo1=mysqli_fetch_assoc($hasil1)) {
                $T_2_UMUM+=$roo1['ip2'];
                $this->Cell(20,5, number_format($T_2_UMUM),1,0,'C');
            }
        }else{
            $this->Cell(20,5, $T_2_UMUM,1,0,'C');
        }
        if (mysqli_num_rows($hasil2) > 0) {
            while ($roo2=mysqli_fetch_assoc($hasil2)) {
                $T_2_BPJS+=$roo2['ip2'];
                $this->Cell(20,5, number_format($T_2_BPJS),1,0,'C');
            }
        }else{
            $this->Cell(20,5, $T_1_BPJS,1,0,'C');
        }
        if (mysqli_num_rows($hasil3) > 0) {
            while ($roo2=mysqli_fetch_assoc($hasil3)) {
                $T_2_GRATIS+=$roo2['ip2'];
                $this->Cell(20,5, number_format($T_2_GRATIS),1,0,'C');
            }
        }else{
            $this->Cell(20,5, $T_2_GRATIS,1,0,'C');
        }
        $this->Cell(20,5, number_format($T_2_GRATIS+$T_2_UMUM+$T_2_BPJS),1,0,'C');






        $this->Ln();
        $this->SetX(30);
        $this->Cell(10,5,"3",1,0,'C');
        $this->Cell(50,5,"Kurtase Gingiva",1,0,'L');

        $T_3_UMUM=0;
        $T_3_BPJS=0;
        $T_3_GRATIS=0;
        $query1="SELECT DISTINCT ip3 from periodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='UMUM' ORDER BY tgl ASC";
        $query2="SELECT DISTINCT ip3 from periodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='BPJS' ORDER BY tgl ASC";
        $query3="SELECT DISTINCT ip3 from periodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='GRATIS' ORDER BY tgl ASC";
        $hasil1=mysqli_query($link,$query1);
        $hasil2=mysqli_query($link,$query2);
        $hasil3=mysqli_query($link,$query3);
        if (mysqli_num_rows($hasil1) > 0) {
            while ($roo1=mysqli_fetch_assoc($hasil1)) {
                $T_3_UMUM+=$roo1['ip3'];
                $this->Cell(20,5, number_format($T_3_UMUM),1,0,'C');
            }
        }else{
            $this->Cell(20,5, $T_3_UMUM,1,0,'C');
        }
        if (mysqli_num_rows($hasil2) > 0) {
            while ($roo2=mysqli_fetch_assoc($hasil2)) {
                $T_3_BPJS+=$roo2['ip3'];
                $this->Cell(20,5, number_format($T_3_BPJS),1,0,'C');
            }
        }else{
            $this->Cell(20,5, $T_3_BPJS,1,0,'C');
        }
        if (mysqli_num_rows($hasil3) > 0) {
            while ($roo2=mysqli_fetch_assoc($hasil3)) {
                $T_3_GRATIS+=$roo2['ip3'];
                $this->Cell(20,5, number_format($T_3_GRATIS),1,0,'C');
            }
        }else{
            $this->Cell(20,5, $T_3_GRATIS,1,0,'C');
        }
        $this->Cell(20,5, number_format($T_3_GRATIS+$T_3_UMUM+$T_3_BPJS),1,0,'C');



        $this->Ln();
        $this->SetX(30);
        $this->Cell(10,5,"4",1,0,'C');
        $this->Cell(50,5,"Splinting",1,0,'L');

        $T_4_UMUM=0;
        $T_4_BPJS=0;
        $T_4_GRATIS=0;
        $query1="SELECT DISTINCT ip4 from periodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='UMUM' ORDER BY tgl ASC";
        $query2="SELECT DISTINCT ip4 from periodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='BPJS' ORDER BY tgl ASC";
        $query3="SELECT DISTINCT ip4 from periodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='GRATIS' ORDER BY tgl ASC";
        $hasil1=mysqli_query($link,$query1);
        $hasil2=mysqli_query($link,$query2);
        $hasil3=mysqli_query($link,$query3);
        if (mysqli_num_rows($hasil1) > 0) {
            while ($roo1=mysqli_fetch_assoc($hasil1)) {
                $T_4_UMUM+=$roo1['ip4'];
                $this->Cell(20,5, number_format($T_4_UMUM),1,0,'C');
            }
        }else{
            $this->Cell(20,5, $T_4_UMUM,1,0,'C');
        }
        if (mysqli_num_rows($hasil2) > 0) {
            while ($roo2=mysqli_fetch_assoc($hasil2)) {
                $T_4_BPJS+=$roo2['ip4'];
                $this->Cell(20,5, number_format($T_4_BPJS),1,0,'C');
            }
        }else{
            $this->Cell(20,5, $T_3_BPJS,1,0,'C');
        }
        if (mysqli_num_rows($hasil3) > 0) {
            while ($roo2=mysqli_fetch_assoc($hasil3)) {
                $T_4_GRATIS+=$roo2['ip4'];
                $this->Cell(20,5, number_format($T_4_GRATIS),1,0,'C');
            }
        }else{
            $this->Cell(20,5, $T_4_GRATIS,1,0,'C');
        }
        $this->Cell(20,5, number_format($T_4_GRATIS+$T_4_UMUM+$T_4_BPJS),1,0,'C');



        $this->Ln();
        $this->SetX(30);
        $this->Cell(10,5,"5",1,0,'C');
        $this->Cell(50,5,"Oclusal adjustment",1,0,'L');


        $T_5_UMUM=0;
        $T_5_BPJS=0;
        $T_5_GRATIS=0;
        $query1="SELECT DISTINCT ip5 from periodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='UMUM'  ORDER BY tgl ASC";
        $query2="SELECT DISTINCT ip5 from periodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='BPJS'  ORDER BY tgl ASC";
        $query3="SELECT DISTINCT ip5 from periodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='GRATIS' ORDER BY tgl ASC";
        $hasil1=mysqli_query($link,$query1);
        $hasil2=mysqli_query($link,$query2);
        $hasil3=mysqli_query($link,$query3);
        if (mysqli_num_rows($hasil1) > 0) {
            while ($roo1=mysqli_fetch_assoc($hasil1)) {
                $T_5_UMUM+=$roo1['ip5'];
                $this->Cell(20,5, number_format($T_5_UMUM),1,0,'C');
            }
        }else{
            $this->Cell(20,5, $T_5_UMUM,1,0,'C');
        }
        if (mysqli_num_rows($hasil2) > 0) {
            while ($roo2=mysqli_fetch_assoc($hasil2)) {
                $T_5_BPJS+=$roo2['ip5'];
                $this->Cell(20,5, number_format($T_5_BPJS),1,0,'C');
            }
        }else{
            $this->Cell(20,5, $T_5_BPJS,1,0,'C');
        }
        if (mysqli_num_rows($hasil3) > 0) {
            while ($roo2=mysqli_fetch_assoc($hasil3)) {
                $T_5_GRATIS+=$roo2['ip5'];
                $this->Cell(20,5, number_format($T_5_GRATIS),1,0,'C');
            }
        }else{
            $this->Cell(20,5, $T_5_GRATIS,1,0,'C');
        }
        $this->Cell(20,5, number_format($T_5_GRATIS+$T_5_UMUM+$T_5_BPJS),1,0,'C');


        $this->Ln();
        $this->SetX(30);
        $this->Cell(10,5,"6",1,0,'C');
        $this->Cell(50,5,"Kontrol",1,0,'L');


        $T_6_UMUM=0;
        $T_6_BPJS=0;
        $T_6_GRATIS=0;
        $query1="SELECT DISTINCT ip6 from periodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='UMUM'  ORDER BY tgl ASC";
        $query2="SELECT DISTINCT ip6 from periodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='BPJS'  ORDER BY tgl ASC";
        $query3="SELECT DISTINCT ip6 from periodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='GRATIS' ORDER BY tgl ASC";
        $hasil1=mysqli_query($link,$query1);
        $hasil2=mysqli_query($link,$query2);
        $hasil3=mysqli_query($link,$query3);
        if (mysqli_num_rows($hasil1) > 0) {
            while ($roo1=mysqli_fetch_assoc($hasil1)) {
                $T_6_UMUM+=$roo1['ip6'];
                $this->Cell(20,5, number_format($T_6_UMUM),1,0,'C');
            }
        }else{
            $this->Cell(20,5, $T_6_UMUM,1,0,'C');
        }
        if (mysqli_num_rows($hasil2) > 0) {
            while ($roo2=mysqli_fetch_assoc($hasil2)) {
                $T_6_BPJS+=$roo2['ip6'];
                $this->Cell(20,5, number_format($T_6_BPJS),1,0,'C');
            }
        }else{
            $this->Cell(20,5, $T_6_BPJS,1,0,'C');
        }
        if (mysqli_num_rows($hasil3) > 0) {
            while ($roo2=mysqli_fetch_assoc($hasil3)) {
                $T_6_GRATIS+=$roo2['ip6'];
                $this->Cell(20,5, number_format($T_6_GRATIS),1,0,'C');
            }
        }else{
            $this->Cell(20,5, $T_6_GRATIS,1,0,'C');
        }
        $this->Cell(20,5, number_format($T_6_GRATIS+$T_6_UMUM+$T_6_BPJS),1,0,'C');

        $this->Ln();
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'L');
        $this->Cell(50,5,"",1,0,'L');
        $this->Cell(20,5,"",1,0,'L');
        $this->Cell(20,5,"",1,0,'L');
        $this->Cell(20,5,"",1,0,'L');
        $this->Cell(20,5,"",1,0,'L');

        $this->Ln();
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'L');
        $this->Cell(50,5,"",1,0,'L');
        $this->Cell(20,5,"",1,0,'L');
        $this->Cell(20,5,"",1,0,'L');
        $this->Cell(20,5,"",1,0,'L');
        $this->Cell(20,5,"",1,0,'L');

        $this->Ln();
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'L');
        $this->Cell(50,5,"Pasien Baru",1,0,'L');

        $T_7_UMUM=0;
        $T_7_BPJS=0;
        $T_7_GRATIS=0;
        $query1="SELECT DISTINCT ip7 from periodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='UMUM'  ORDER BY tgl ASC";
        $query2="SELECT DISTINCT ip7 from periodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='BPJS'  ORDER BY tgl ASC";
        $query3="SELECT DISTINCT ip7 from periodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='GRATIS' ORDER BY tgl ASC";
        $hasil1=mysqli_query($link,$query1);
        $hasil2=mysqli_query($link,$query2);
        $hasil3=mysqli_query($link,$query3);
        if (mysqli_num_rows($hasil1) > 0) {
            while ($roo1=mysqli_fetch_assoc($hasil1)) {
                $T_7_UMUM+=$roo1['ip7'];
                $this->Cell(20,5, number_format($T_7_UMUM),1,0,'C');
            }
        }else{
            $this->Cell(20,5, $T_7_UMUM,1,0,'C');
        }
        if (mysqli_num_rows($hasil2) > 0) {
            while ($roo2=mysqli_fetch_assoc($hasil2)) {
                $T_7_BPJS+=$roo2['ip7'];
                $this->Cell(20,5, number_format($T_7_BPJS),1,0,'C');
            }
        }else{
            $this->Cell(20,5, $T_7_BPJS,1,0,'C');
        }
        if (mysqli_num_rows($hasil3) > 0) {
            while ($roo2=mysqli_fetch_assoc($hasil3)) {
                $T_7_GRATIS+=$roo2['ip7'];
                $this->Cell(20,5, number_format($T_7_GRATIS),1,0,'C');
            }
        }else{
            $this->Cell(20,5, $T_7_GRATIS,1,0,'C');
        }
        $this->Cell(20,5, number_format($T_7_GRATIS+$T_7_UMUM+$T_7_BPJS),1,0,'C');


        $this->Ln();
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'L');
        $this->Cell(50,5,"Pasien Lama",1,0,'L');

        $T_8_UMUM=0;
        $T_8_BPJS=0;
        $T_8_GRATIS=0;
        $query1="SELECT DISTINCT ip8 from periodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='UMUM'  ORDER BY tgl ASC";
        $query2="SELECT DISTINCT ip8 from periodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='BPJS'  ORDER BY tgl ASC";
        $query3="SELECT DISTINCT ip8 from periodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='GRATIS' ORDER BY tgl ASC";
        $hasil1=mysqli_query($link,$query1);
        $hasil2=mysqli_query($link,$query2);
        $hasil3=mysqli_query($link,$query3);
        if (mysqli_num_rows($hasil1) > 0) {
            while ($roo1=mysqli_fetch_assoc($hasil1)) {
                $T_8_UMUM+=$roo1['ip8'];
                $this->Cell(20,5, number_format($T_8_UMUM),1,0,'C');
            }
        }else{
            $this->Cell(20,5, $T_8_UMUM,1,0,'C');
        }
        if (mysqli_num_rows($hasil2) > 0) {
            while ($roo2=mysqli_fetch_assoc($hasil2)) {
                $T_8_BPJS+=$roo2['ip8'];
                $this->Cell(20,5, number_format($T_8_BPJS),1,0,'C');
            }
        }else{
            $this->Cell(20,5, $T_8_BPJS,1,0,'C');
        }
        if (mysqli_num_rows($hasil3) > 0) {
            while ($roo2=mysqli_fetch_assoc($hasil3)) {
                $T_8_GRATIS+=$roo2['ip8'];
                $this->Cell(20,5, number_format($T_8_GRATIS),1,0,'C');
            }
        }else{
            $this->Cell(20,5, $T_8_GRATIS,1,0,'C');
        }
        $this->Cell(20,5, number_format($T_8_GRATIS+$T_8_UMUM+$T_8_BPJS),1,0,'C');

        $this->Ln();
        $this->SetFont('Times','B',10);
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'L');
        $this->Cell(50,5,"Jumlah Kunjungan",1,0,'C');
        $this->Cell(20,5, number_format($T_7_UMUM+$T_8_UMUM),1,0,'C');
        $this->Cell(20,5, number_format($T_7_BPJS+$T_8_BPJS),1,0,'C');
        $this->Cell(20,5, number_format($T_7_GRATIS+$T_8_GRATIS),1,0,'C');
        $this->Cell(20,5, number_format(($T_7_UMUM+$T_7_BPJS+$T_7_GRATIS)+($T_8_UMUM+$T_8_BPJS+$T_8_GRATIS)),1,0,'C');

?>