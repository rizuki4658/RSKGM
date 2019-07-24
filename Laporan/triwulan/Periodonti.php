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
        $TP_1_UMUM=0;
        $TP_1_BPJS=0;
        $TP_1_GRATIS=0;
        $query1="SELECT DISTINCT ip1 from periodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='UMUM' ORDER BY tgl ASC";
        $query2="SELECT DISTINCT ip1 from periodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='BPJS' ORDER BY tgl ASC";
        $query3="SELECT DISTINCT ip1 from periodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='GRATIS' ORDER BY tgl ASC";
        $hasil1=mysqli_query($link,$query1);
        $hasil2=mysqli_query($link,$query2);
        $hasil3=mysqli_query($link,$query3);
        if (mysqli_num_rows($hasil1) > 0) {
            while ($macro1=mysqli_fetch_assoc($hasil1)) {
                $TP_1_UMUM+=$macro1['ip1'];
            }
                $this->Cell(20,5, number_format($TP_1_UMUM),1,0,'C');
        }else{
            $this->Cell(20,5, $TP_1_UMUM,1,0,'C');
        }
        if (mysqli_num_rows($hasil2) > 0) {
            while ($macro2=mysqli_fetch_assoc($hasil2)) {
                $TP_1_BPJS+=$macro2['ip1'];
            }
                $this->Cell(20,5, number_format($TP_1_BPJS),1,0,'C');
        }else{
            $this->Cell(20,5, $TP_1_BPJS,1,0,'C');
        }
        if (mysqli_num_rows($hasil3) > 0) {
            while ($macro3=mysqli_fetch_assoc($hasil3)) {
                $TP_1_GRATIS+=$macro3['ip1'];
            }
                $this->Cell(20,5, number_format($TP_1_GRATIS),1,0,'C');
        }else{
            $this->Cell(20,5, $TP_1_GRATIS,1,0,'C');
        }
        $this->Cell(20,5, number_format($TP_1_GRATIS+$TP_1_UMUM+$TP_1_BPJS),1,0,'C');
        

        $this->Ln();
        $this->SetX(30);
        $this->Cell(10,5,"2",1,0,'C');
        $this->Cell(50,5,"Root Planning",1,0,'L');

        $TP_2_UMUM=0;
        $TP_2_BPJS=0;
        $TP_2_GRATIS=0;
        $query4="SELECT DISTINCT ip2 from periodonti WHERE tgl >= '$tgl1' AND tgl <= '$tgl2' AND status='UMUM' ORDER BY tgl ASC";
        $query5="SELECT DISTINCT ip2 from periodonti WHERE tgl >= '$tgl1' AND tgl <= '$tgl2' AND status='BPJS' ORDER BY tgl ASC";
        $query6="SELECT DISTINCT ip2 from periodonti WHERE tgl >= '$tgl1' AND tgl <= '$tgl2' AND status='GRATIS' ORDER BY tgl ASC";
        $hasil4=mysqli_query($link,$query4);
        $hasil5=mysqli_query($link,$query5);
        $hasil6=mysqli_query($link,$query6);
        if (mysqli_num_rows($hasil4) > 0) {
            while ($roo1=mysqli_fetch_assoc($hasil4)) {
                $TP_2_UMUM+=$roo1['ip2'];
            }
                $this->Cell(20,5, number_format($TP_2_UMUM),1,0,'C');
        }else{
            $this->Cell(20,5, $TP_2_UMUM,1,0,'C');
        }
        if (mysqli_num_rows($hasil5) > 0) {
            while ($roo2=mysqli_fetch_assoc($hasil5)) {
                $TP_2_BPJS+=$roo2['ip2'];
            }
                $this->Cell(20,5, number_format($TP_2_BPJS),1,0,'C');
        }else{
            $this->Cell(20,5, $TP_1_BPJS,1,0,'C');
        }
        if (mysqli_num_rows($hasil6) > 0) {
            while ($roo3=mysqli_fetch_assoc($hasil6)) {
                $TP_2_GRATIS+=$roo3['ip2'];
            }
                $this->Cell(20,5, number_format($TP_2_GRATIS),1,0,'C');
        }else{
            $this->Cell(20,5, $TP_2_GRATIS,1,0,'C');
        }
        $this->Cell(20,5, number_format($TP_2_GRATIS+$TP_2_UMUM+$TP_2_BPJS),1,0,'C');




        $this->Ln();
        $this->SetX(30);
        $this->Cell(10,5,"3",1,0,'C');
        $this->Cell(50,5,"Kurtase Gingiva",1,0,'L');

        $TP_3_UMUM=0;
        $TP_3_BPJS=0;
        $TP_3_GRATIS=0;
        $query1="SELECT DISTINCT ip3 from periodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='UMUM' ORDER BY tgl ASC";
        $query2="SELECT DISTINCT ip3 from periodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='BPJS' ORDER BY tgl ASC";
        $query3="SELECT DISTINCT ip3 from periodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='GRATIS' ORDER BY tgl ASC";
        $hasil1=mysqli_query($link,$query1);
        $hasil2=mysqli_query($link,$query2);
        $hasil3=mysqli_query($link,$query3);
        if (mysqli_num_rows($hasil1) > 0) {
            while ($root1=mysqli_fetch_assoc($hasil1)) {
                $TP_3_UMUM+=$root1['ip3'];
            }

                $this->Cell(20,5, number_format($TP_3_UMUM),1,0,'C');
        }else{
            $this->Cell(20,5, $TP_3_UMUM,1,0,'C');
        }
        if (mysqli_num_rows($hasil2) > 0) {
            while ($root2=mysqli_fetch_assoc($hasil2)) {
                $TP_3_BPJS+=$root2['ip3'];
            }

                $this->Cell(20,5, number_format($TP_3_BPJS),1,0,'C');
        }else{
            $this->Cell(20,5, $TP_3_BPJS,1,0,'C');
        }
        if (mysqli_num_rows($hasil3) > 0) {
            while ($root3=mysqli_fetch_assoc($hasil3)) {
                $TP_3_GRATIS+=$root3['ip3'];
            }

                $this->Cell(20,5, number_format($TP_3_GRATIS),1,0,'C');
        }else{
            $this->Cell(20,5, $TP_3_GRATIS,1,0,'C');
        }
        $this->Cell(20,5, number_format($TP_3_GRATIS+$TP_3_UMUM+$TP_3_BPJS),1,0,'C');


        $this->Ln();
        $this->SetX(30);
        $this->Cell(10,5,"4",1,0,'C');
        $this->Cell(50,5,"Splinting",1,0,'L');

        $TP_4_UMUM=0;
        $TP_4_BPJS=0;
        $TP_4_GRATIS=0;
        $query1="SELECT DISTINCT ip4 from periodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='UMUM' ORDER BY tgl ASC";
        $query2="SELECT DISTINCT ip4 from periodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='BPJS' ORDER BY tgl ASC";
        $query3="SELECT DISTINCT ip4 from periodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='GRATIS' ORDER BY tgl ASC";
        $hasil1=mysqli_query($link,$query1);
        $hasil2=mysqli_query($link,$query2);
        $hasil3=mysqli_query($link,$query3);
        if (mysqli_num_rows($hasil1) > 0) {
            while ($roots1=mysqli_fetch_assoc($hasil1)) {
                $TP_4_UMUM+=$roots1['ip4'];
            }

                $this->Cell(20,5, number_format($TP_4_UMUM),1,0,'C');
        }else{
            $this->Cell(20,5, $TP_4_UMUM,1,0,'C');
        }
        if (mysqli_num_rows($hasil2) > 0) {
            while ($roots2=mysqli_fetch_assoc($hasil2)) {
                $TP_4_BPJS+=$roots2['ip4'];
            }
                $this->Cell(20,5, number_format($TP_4_BPJS),1,0,'C');
        }else{
            $this->Cell(20,5, $TP_4_BPJS,1,0,'C');
        }
        if (mysqli_num_rows($hasil3) > 0) {
            while ($roots3=mysqli_fetch_assoc($hasil3)) {
                $TP_4_GRATIS+=$roots3['ip4'];
            }
                $this->Cell(20,5, number_format($TP_4_GRATIS),1,0,'C');
        }else{
            $this->Cell(20,5, $TP_4_GRATIS,1,0,'C');
        }
        $this->Cell(20,5, number_format($TP_4_GRATIS+$TP_4_UMUM+$TP_4_BPJS),1,0,'C');


        $this->Ln();
        $this->SetX(30);
        $this->Cell(10,5,"5",1,0,'C');
        $this->Cell(50,5,"Oclusal adjustment",1,0,'L');


        $TP_5_UMUM=0;
        $TP_5_BPJS=0;
        $TP_5_GRATIS=0;
        $query1="SELECT DISTINCT ip5 from periodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='UMUM'  ORDER BY tgl ASC";
        $query2="SELECT DISTINCT ip5 from periodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='BPJS'  ORDER BY tgl ASC";
        $query3="SELECT DISTINCT ip5 from periodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='GRATIS' ORDER BY tgl ASC";
        $hasil1=mysqli_query($link,$query1);
        $hasil2=mysqli_query($link,$query2);
        $hasil3=mysqli_query($link,$query3);
        if (mysqli_num_rows($hasil1) > 0) {
            while ($rool1=mysqli_fetch_assoc($hasil1)) {
                $TP_5_UMUM+=$rool1['ip5'];
            }
                $this->Cell(20,5, number_format($TP_5_UMUM),1,0,'C');
        }else{
            $this->Cell(20,5, $TP_5_UMUM,1,0,'C');
        }
        if (mysqli_num_rows($hasil2) > 0) {
            while ($rool2=mysqli_fetch_assoc($hasil2)) {
                $TP_5_BPJS+=$rool2['ip5'];
            }
                $this->Cell(20,5, number_format($TP_5_BPJS),1,0,'C');
        }else{
            $this->Cell(20,5, $TP_5_BPJS,1,0,'C');
        }
        if (mysqli_num_rows($hasil3) > 0) {
            while ($rool3=mysqli_fetch_assoc($hasil3)) {
                $TP_5_GRATIS+=$rool3['ip5'];
            }
                $this->Cell(20,5, number_format($TP_5_GRATIS),1,0,'C');
        }else{
            $this->Cell(20,5, $TP_5_GRATIS,1,0,'C');
        }
        $this->Cell(20,5, number_format($TP_5_GRATIS+$TP_5_UMUM+$TP_5_BPJS),1,0,'C');


        $this->Ln();
        $this->SetX(30);
        $this->Cell(10,5,"6",1,0,'C');
        $this->Cell(50,5,"Kontrol",1,0,'L');


        $TP_6_UMUM=0;
        $TP_6_BPJS=0;
        $TP_6_GRATIS=0;
        $query1="SELECT DISTINCT ip6 from periodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='UMUM'  ORDER BY tgl ASC";
        $query2="SELECT DISTINCT ip6 from periodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='BPJS'  ORDER BY tgl ASC";
        $query3="SELECT DISTINCT ip6 from periodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='GRATIS' ORDER BY tgl ASC";
        $hasil1=mysqli_query($link,$query1);
        $hasil2=mysqli_query($link,$query2);
        $hasil3=mysqli_query($link,$query3);
        if (mysqli_num_rows($hasil1) > 0) {
            while ($roo1=mysqli_fetch_assoc($hasil1)) {
                $TP_6_UMUM+=$roo1['ip6'];
            }
                $this->Cell(20,5, number_format($TP_6_UMUM),1,0,'C');
        }else{
            $this->Cell(20,5, $TP_6_UMUM,1,0,'C');
        }
        if (mysqli_num_rows($hasil2) > 0) {
            while ($roo2=mysqli_fetch_assoc($hasil2)) {
                $TP_6_BPJS+=$roo2['ip6'];
            }
                $this->Cell(20,5, number_format($TP_6_BPJS),1,0,'C');
        }else{
            $this->Cell(20,5, $TP_6_BPJS,1,0,'C');
        }
        if (mysqli_num_rows($hasil3) > 0) {
            while ($roo2=mysqli_fetch_assoc($hasil3)) {
                $TP_6_GRATIS+=$roo2['ip6'];
            }
                $this->Cell(20,5, number_format($TP_6_GRATIS),1,0,'C');
        }else{
            $this->Cell(20,5, $TP_6_GRATIS,1,0,'C');
        }
        $this->Cell(20,5, number_format($TP_6_GRATIS+$TP_6_UMUM+$TP_6_BPJS),1,0,'C');

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

        $TP_7_UMUM=0;
        $TP_7_BPJS=0;
        $TP_7_GRATIS=0;
        $query1="SELECT DISTINCT ip7 from periodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='UMUM'  ORDER BY tgl ASC";
        $query2="SELECT DISTINCT ip7 from periodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='BPJS'  ORDER BY tgl ASC";
        $query3="SELECT DISTINCT ip7 from periodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='GRATIS' ORDER BY tgl ASC";
        $hasil1=mysqli_query($link,$query1);
        $hasil2=mysqli_query($link,$query2);
        $hasil3=mysqli_query($link,$query3);
        if (mysqli_num_rows($hasil1) > 0) {
            while ($dt1=mysqli_fetch_assoc($hasil1)) {
                $TP_7_UMUM+=$dt1['ip7'];
            }
                $this->Cell(20,5, number_format($TP_7_UMUM),1,0,'C');
        }else{
            $this->Cell(20,5, $TP_7_UMUM,1,0,'C');
        }
        if (mysqli_num_rows($hasil2) > 0) {
            while ($dt2=mysqli_fetch_assoc($hasil2)) {
                $TP_7_BPJS+=$dt2['ip7'];
            }
                $this->Cell(20,5, number_format($TP_7_BPJS),1,0,'C');
        }else{
            $this->Cell(20,5, $TP_7_BPJS,1,0,'C');
        }
        if (mysqli_num_rows($hasil3) > 0) {
            while ($dt3=mysqli_fetch_assoc($hasil3)) {
                $TP_7_GRATIS+=$dt3['ip7'];
            }
            
                $this->Cell(20,5, number_format($TP_7_GRATIS),1,0,'C');
        }else{
            $this->Cell(20,5, $TP_7_GRATIS,1,0,'C');
        }
        $this->Cell(20,5, number_format($TP_7_GRATIS+$TP_7_UMUM+$TP_7_BPJS),1,0,'C');


        $this->Ln();
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'L');
        $this->Cell(50,5,"Pasien Lama",1,0,'L');

        $TP_8_UMUM=0;
        $TP_8_BPJS=0;
        $TP_8_GRATIS=0;
        $query1="SELECT DISTINCT ip8 from periodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='UMUM'  ORDER BY tgl ASC";
        $query2="SELECT DISTINCT ip8 from periodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='BPJS'  ORDER BY tgl ASC";
        $query3="SELECT DISTINCT ip8 from periodonti WHERE tgl >= '$tgl1'AND tgl <= '$tgl2' AND status='GRATIS' ORDER BY tgl ASC";
        $hasil1=mysqli_query($link,$query1);
        $hasil2=mysqli_query($link,$query2);
        $hasil3=mysqli_query($link,$query3);
        if (mysqli_num_rows($hasil1) > 0) {
            while ($dt4=mysqli_fetch_assoc($hasil1)) {
                $TP_8_UMUM+=$dt4['ip8'];
            }
                $this->Cell(20,5, number_format($TP_8_UMUM),1,0,'C');
        }else{
            $this->Cell(20,5, $TP_8_UMUM,1,0,'C');
        }
        if (mysqli_num_rows($hasil2) > 0) {
            while ($dt5=mysqli_fetch_assoc($hasil2)) {
                $TP_8_BPJS+=$dt5['ip8'];
            }
                $this->Cell(20,5, number_format($TP_8_BPJS),1,0,'C');
        }else{
            $this->Cell(20,5, $TP_8_BPJS,1,0,'C');
        }
        if (mysqli_num_rows($hasil3) > 0) {
            while ($dt6=mysqli_fetch_assoc($hasil3)) {
                $TP_8_GRATIS+=$dt6['ip8'];
            }
                $this->Cell(20,5, number_format($TP_8_GRATIS),1,0,'C');
        }else{
            $this->Cell(20,5, $TP_8_GRATIS,1,0,'C');
        }
        $this->Cell(20,5, number_format($TP_8_GRATIS+$TP_8_UMUM+$TP_8_BPJS),1,0,'C');

        $this->Ln();
        $this->SetFont('Times','B',10);
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'L');
        $this->Cell(50,5,"Jumlah Kunjungan",1,0,'C');
        $this->Cell(20,5, number_format($TP_7_UMUM+$TP_8_UMUM),1,0,'C');
        $this->Cell(20,5, number_format($TP_7_BPJS+$TP_8_BPJS),1,0,'C');
        $this->Cell(20,5, number_format($TP_7_GRATIS+$TP_8_GRATIS),1,0,'C');
        $this->Cell(20,5, number_format(($TP_7_UMUM+$TP_7_BPJS+$TP_7_GRATIS)+($TP_8_UMUM+$TP_8_BPJS+$TP_8_GRATIS)),1,0,'C');
?>