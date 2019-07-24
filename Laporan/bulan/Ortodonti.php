<?php
    require 'data_ortodonti.php';
$this->Ln(10);
$this->SetFont('Times','',10);       
$this->SetX(20);
        $this->Cell(35,0,"KLINIK ORTODONTI",0,0,'C');
        $this->Ln(5);
        $this->SetX(30);
        $this->Cell(35,0,"Tabel Rekapitulasi",0,0,'L');
        
        $this->Ln(2);
        $this->SetX(30);
        $this->Cell(10,5,"No",1,0,'C');
        $this->Cell(67,5,"Uraian",1,0,'C');
        $this->Cell(13,5,"Umum",1,0,'C');
        $this->Cell(13,5,"BPJS",1,0,'C');
        $this->Cell(17,5,"Gratis",1,0,'C');
        $this->Cell(20,5,"Jumlah",1,0,'C');

///////////////////////////////////////////////////////////        
        $this->Ln();
        $this->SetX(30);
        $this->Cell(10,5,"1",1,0,'C');
        $this->Cell(67,5," Analisa/Pencetakan",1,0,'L');
        $this->SetFont('Times','',8);
        if (mysqli_num_rows($execute1) > 0) {
            while ($data1=mysqli_fetch_assoc($execute1)) {
                $TK3_1_UMUM+=$data1['ip1'];
                $this->Cell(13,5, number_format($TK3_1_UMUM),1,0,'C');
            }
        }else{
            $this->Cell(13,5, $TK3_1_UMUM,1,0,'C');
        }
        if (mysqli_num_rows($execute2) > 0) {
            while ($data2=mysqli_fetch_assoc($execute2)) {
                $TK3_1_BPJS+=$data2['ip1'];
                $this->Cell(13,5, number_format($TK3_1_BPJS),1,0,'C');
            }
        }else{
            $this->Cell(13,5, $TK3_1_BPJS,1,0,'C');
        }
        if (mysqli_num_rows($execute3) > 0) {
            while ($data3=mysqli_fetch_assoc($execute3)) {
                $TK3_1_GRATIS+=$data3['ip1'];
                $this->Cell(17,5, number_format($TK3_1_GRATIS),1,0,'C');
            }
        }else{
            $this->Cell(17,5, $TK3_1_GRATIS,1,0,'C');
        }
        $this->Cell(20,5, number_format($TK3_1_GRATIS+$TK3_1_UMUM+$TK3_1_BPJS),1,0,'C');




//////////////////////////////////////////////////////////////////////////////////////
        $this->Ln();
        $this->SetFont('Times','',10);
        $this->SetX(30);
        $this->Cell(10,5,"2",1,0,'C');
        $this->Cell(67,5," Alat Ortodonti Lepasan",1,0,'L');
        $this->Cell(13,5, "",1,0,'C');
        $this->Cell(13,5, "",1,0,'C');
        $this->Cell(17,5, "",1,0,'C');
        $this->Cell(20,5, "",1,0,'C');

        $this->Ln();
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->SetFont('Times','',8);
        $this->Cell(67,5," a. Satu rahang",1,0,'L');
        
        if (mysqli_num_rows($execute1) > 0) {
            while ($data4=mysqli_fetch_assoc($execute4)) {
                $TK3_2_UMUM+=$data4['ip2'];
                $this->Cell(13,5, number_format($TK3_2_UMUM),1,0,'C');
            }
        }else{
            $this->Cell(13,5, $TK3_2_UMUM,1,0,'C');
        }
        if (mysqli_num_rows($execute2) > 0) {
            while ($data5=mysqli_fetch_assoc($execute5)) {
                $TK3_2_BPJS+=$data5['ip2'];
                $this->Cell(13,5, number_format($TK3_2_BPJS),1,0,'C');
            }
        }else{
            $this->Cell(13,5, $TK3_2_BPJS,1,0,'C');
        }
        if (mysqli_num_rows($execute3) > 0) {
            while ($data6=mysqli_fetch_assoc($execute6)) {
                $TK3_2_GRATIS+=$data6['ip2'];
                $this->Cell(17,5, number_format($TK3_2_GRATIS),1,0,'C');
            }
        }else{
            $this->Cell(17,5, $TK3_2_GRATIS,1,0,'C');
        }
        $this->Cell(20,5, number_format($TK3_2_GRATIS+$TK3_2_UMUM+$TK3_2_BPJS),1,0,'C');

        $this->Ln();
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->SetFont('Times','',8);
        $this->Cell(67,5," b. Dua Rahang",1,0,'L');
        
        if (mysqli_num_rows($execute7) > 0) {
            while ($data7=mysqli_fetch_assoc($execute7)) {
                $TK3_3_UMUM+=$data7['ip3'];
                $this->Cell(13,5, number_format($TK3_3_UMUM),1,0,'C');
            }
        }else{
            $this->Cell(13,5, $TK3_3_UMUM,1,0,'C');
        }
        if (mysqli_num_rows($execute8) > 0) {
            while ($data8=mysqli_fetch_assoc($execute8)) {
                $TK3_3_BPJS+=$data8['ip3'];
                $this->Cell(13,5, number_format($TK3_3_BPJS),1,0,'C');
            }
        }else{
            $this->Cell(13,5, $TK3_3_BPJS,1,0,'C');
        }
        if (mysqli_num_rows($execute9) > 0) {
            while ($data9=mysqli_fetch_assoc($execute9)) {
                $TK3_3_GRATIS+=$data9['ip3'];
                $this->Cell(17,5, number_format($TK3_3_GRATIS),1,0,'C');
            }
        }else{
            $this->Cell(17,5, $TK3_3_GRATIS,1,0,'C');
        }
        $this->Cell(20,5, number_format($TK3_3_GRATIS+$TK3_3_UMUM+$TK3_3_BPJS),1,0,'C');

     
        $this->Ln();
        $this->SetFont('Times','',8);
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->SetFont('Times','',8);
        $this->Cell(67,5," c. Kontrol/Aktivir",1,0,'L');
        
        if (mysqli_num_rows($execute10) > 0) {
            while ($data10=mysqli_fetch_assoc($execute10)) {
                $TK3_4_UMUM+=$data10['ip4'];
                $this->Cell(13,5, number_format($TK3_4_UMUM),1,0,'C');
            }
        }else{
            $this->Cell(13,5, $TK3_4_UMUM,1,0,'C');
        }
        if (mysqli_num_rows($execute11) > 0) {
            while ($data11=mysqli_fetch_assoc($execute11)) {
                $TK3_4_BPJS+=$data11['ip4'];
                $this->Cell(13,5, number_format($TK3_4_BPJS),1,0,'C');
            }
        }else{
            $this->Cell(13,5, $TK3_4_BPJS,1,0,'C');
        }
        if (mysqli_num_rows($execute12) > 0) {
            while ($data12=mysqli_fetch_assoc($execute12)) {
                $TK3_4_GRATIS+=$data12['ip4'];
                $this->Cell(17,5, number_format($TK3_4_GRATIS),1,0,'C');
            }
        }else{
            $this->Cell(17,5, $TK3_4_GRATIS,1,0,'C');
        }
        $this->Cell(20,5, number_format($TK3_4_GRATIS+$TK3_4_UMUM+$TK3_4_BPJS),1,0,'C');


        $this->Ln();
        $this->SetFont('Times','',8);
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->SetFont('Times','',8);
        $this->Cell(67,5," d. Reparasi",1,0,'L');
        
        if (mysqli_num_rows($execute13) > 0) {
            while ($data13=mysqli_fetch_assoc($execute13)) {
                $TK3_5_UMUM+=$data13['ip5'];
                $this->Cell(13,5, number_format($TK3_5_UMUM),1,0,'C');
            }
        }else{
            $this->Cell(13,5, $TK3_5_UMUM,1,0,'C');
        }
        if (mysqli_num_rows($execute14) > 0) {
            while ($data14=mysqli_fetch_assoc($execute14)) {
                $TK3_5_BPJS+=$data14['ip5'];
                $this->Cell(13,5, number_format($TK3_5_BPJS),1,0,'C');
            }
        }else{
            $this->Cell(13,5, $TK3_5_BPJS,1,0,'C');
        }
        if (mysqli_num_rows($execute15) > 0) {
            while ($data15=mysqli_fetch_assoc($execute15)) {
                $TK3_5_GRATIS+=$data15['ip5'];
                $this->Cell(17,5, number_format($TK3_5_GRATIS),1,0,'C');
            }
        }else{
            $this->Cell(17,5, $TK3_5_GRATIS,1,0,'C');
        }
        $this->Cell(20,5, number_format($TK3_5_GRATIS+$TK3_5_UMUM+$TK3_5_BPJS),1,0,'C');



//////////////////////////////////////////////////////////////////////////////////////
        $this->Ln();
        $this->SetFont('Times','',10);
        $this->SetX(30);
        $this->Cell(10,5,"3",1,0,'C');
        $this->Cell(67,5," Alat Ortodonti Cekat",1,0,'L');
        $this->Cell(13,5, "",1,0,'C');
        $this->Cell(13,5, "",1,0,'C');
        $this->Cell(17,5, "",1,0,'C');
        $this->Cell(20,5, "",1,0,'C');
        
        $this->Ln();
        $this->SetFont('Times','',8);
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->SetFont('Times','',8);
        $this->Cell(67,5," a. Satu rahang",1,0,'L');
        
        if (mysqli_num_rows($execute16) > 0) {
            while ($data16=mysqli_fetch_assoc($execute16)) {
                $TK3_6_UMUM+=$data16['ip6'];
                $this->Cell(13,5, number_format($TK3_6_UMUM),1,0,'C');
            }
        }else{
            $this->Cell(13,5, $TK3_6_UMUM,1,0,'C');
        }
        if (mysqli_num_rows($execute17) > 0) {
            while ($data17=mysqli_fetch_assoc($execute17)) {
                $TK3_6_BPJS+=$data17['ip6'];
                $this->Cell(13,5, number_format($TK3_6_BPJS),1,0,'C');
            }
        }else{
            $this->Cell(13,5, $TK3_6_BPJS,1,0,'C');
        }
        if (mysqli_num_rows($execute18) > 0) {
            while ($data18=mysqli_fetch_assoc($execute18)) {
                $TK3_6_GRATIS+=$data18['ip6'];
                $this->Cell(17,5, number_format($TK3_6_GRATIS),1,0,'C');
            }
        }else{
            $this->Cell(17,5, $TK3_6_GRATIS,1,0,'C');
        }
        $this->Cell(20,5, number_format($TK3_6_GRATIS+$TK3_6_UMUM+$TK3_6_BPJS),1,0,'C');


        $this->Ln();
        $this->SetFont('Times','',8);
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->SetFont('Times','',8);
        $this->Cell(67,5," b. Dua rahang",1,0,'L');
        
        if (mysqli_num_rows($execute19) > 0) {
            while ($data19=mysqli_fetch_assoc($execute19)) {
                $TK3_7_UMUM+=$data19['ip7'];
                $this->Cell(13,5, number_format($TK3_7_UMUM),1,0,'C');
            }
        }else{
            $this->Cell(13,5, $TK3_7_UMUM,1,0,'C');
        }
        if (mysqli_num_rows($execute20) > 0) {
            while ($data20=mysqli_fetch_assoc($execute20)) {
                $TK3_7_BPJS+=$data20['ip7'];
                $this->Cell(13,5, number_format($TK3_7_BPJS),1,0,'C');
            }
        }else{
            $this->Cell(13,5, $TK3_7_BPJS,1,0,'C');
        }
        if (mysqli_num_rows($execute21) > 0) {
            while ($data21=mysqli_fetch_assoc($execute21)) {
                $TK3_7_GRATIS+=$data21['ip7'];
                $this->Cell(17,5, number_format($TK3_7_GRATIS),1,0,'C');
            }
        }else{
            $this->Cell(17,5, $TK3_7_GRATIS,1,0,'C');
        }
        $this->Cell(20,5, number_format($TK3_7_GRATIS+$TK3_7_UMUM+$TK3_7_BPJS),1,0,'C');

        $this->Ln();
        $this->SetFont('Times','',8);
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->SetFont('Times','',8);
        $this->Cell(67,5," c. Kontrol/Aktivir",1,0,'L');
        
        if (mysqli_num_rows($execute22) > 0) {
            while ($data22=mysqli_fetch_assoc($execute22)) {
                $TK3_8_UMUM+=$data22['ip8'];
                $this->Cell(13,5, number_format($TK3_8_UMUM),1,0,'C');
            }
        }else{
            $this->Cell(13,5, $TK3_8_UMUM,1,0,'C');
        }
        if (mysqli_num_rows($execute23) > 0) {
            while ($data23=mysqli_fetch_assoc($execute23)) {
                $TK3_8_BPJS+=$data23['ip8'];
                $this->Cell(13,5, number_format($TK3_8_BPJS),1,0,'C');
            }
        }else{
            $this->Cell(13,5, $TK3_8_BPJS,1,0,'C');
        }
        if (mysqli_num_rows($execute24) > 0) {
            while ($data24=mysqli_fetch_assoc($execute24)) {
                $TK3_8_GRATIS+=$data24['ip8'];
                $this->Cell(17,5, number_format($TK3_8_GRATIS),1,0,'C');
            }
        }else{
            $this->Cell(17,5, $TK3_8_GRATIS,1,0,'C');
        }
        $this->Cell(20,5, number_format($TK3_8_GRATIS+$TK3_8_UMUM+$TK3_8_BPJS),1,0,'C');


        $this->Ln();
        $this->SetFont('Times','',8);
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->SetFont('Times','',8);
        $this->Cell(67,5," d. Penggantian bracket/tube/band rusak atau hilang",1,0,'L');
        
        if (mysqli_num_rows($execute25) > 0) {
            while ($data25=mysqli_fetch_assoc($execute25)) {
                $TK3_9_UMUM+=$data25['ip9'];
                $this->Cell(13,5, number_format($TK3_9_UMUM),1,0,'C');
            }
        }else{
            $this->Cell(13,5, $TK3_9_UMUM,1,0,'C');
        }
        if (mysqli_num_rows($execute26) > 0) {
            while ($data26=mysqli_fetch_assoc($execute26)) {
                $TK3_9_BPJS+=$data26['ip9'];
                $this->Cell(13,5, number_format($TK3_9_BPJS),1,0,'C');
            }
        }else{
            $this->Cell(13,5, $TK3_9_BPJS,1,0,'C');
        }
        if (mysqli_num_rows($execute27) > 0) {
            while ($data27=mysqli_fetch_assoc($execute27)) {
                $TK3_9_GRATIS+=$data27['ip9'];
                $this->Cell(17,5, number_format($TK3_9_GRATIS),1,0,'C');
            }
        }else{
            $this->Cell(17,5, $TK3_9_GRATIS,1,0,'C');
        }
        $this->Cell(20,5, number_format($TK3_9_GRATIS+$TK3_9_UMUM+$TK3_9_BPJS),1,0,'C');

        $this->Ln();
        $this->SetFont('Times','',8);
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->Cell(67,5," e.Pemasangan bracket yang lepas",1,0,'L');
         if (mysqli_num_rows($execute28) > 0) {
            while ($data28=mysqli_fetch_assoc($execute28)) {
                $TK3_10_UMUM+=$data28['ip10'];
                $this->Cell(13,5, number_format($TK3_10_UMUM),1,0,'C');
            }
        }else{
            $this->Cell(13,5, $TK3_10_UMUM,1,0,'C');
        }
        if (mysqli_num_rows($execute29) > 0) {
            while ($data29=mysqli_fetch_assoc($execute29)) {
                $TK3_10_BPJS+=$data29['ip10'];
                $this->Cell(13,5, number_format($TK3_10_BPJS),1,0,'C');
            }
        }else{
            $this->Cell(13,5, $TK3_10_BPJS,1,0,'C');
        }
        if (mysqli_num_rows($execute30) > 0) {
            while ($data30=mysqli_fetch_assoc($execute30)) {
                $TK3_10_GRATIS+=$data30['ip10'];
                $this->Cell(17,5, number_format($TK3_10_GRATIS),1,0,'C');
            }
        }else{
            $this->Cell(17,5, $TK3_10_GRATIS,1,0,'C');
        }
        $this->Cell(20,5, number_format($TK3_10_GRATIS+$TK3_10_UMUM+$TK3_10_BPJS),1,0,'C');



//////////////////////////////////////////////////////////////////////////////////////
        $this->Ln();
        $this->SetX(30);
        $this->SetFont('Times','',8);
        $this->Cell(10,5,"",1,0,'C');
        $this->Cell(67,5," f. Intraoral Elastics",1,0,'L');
         if (mysqli_num_rows($execute31) > 0) {
            while ($data31=mysqli_fetch_assoc($execute31)) {
                $TK3_11_UMUM+=$data31['ip11'];
                $this->Cell(13,5, number_format($TK3_11_UMUM),1,0,'C');
            }
        }else{
            $this->Cell(13,5, $TK3_11_UMUM,1,0,'C');
        }
        if (mysqli_num_rows($execute32) > 0) {
            while ($data32=mysqli_fetch_assoc($execute32)) {
                $TK3_11_BPJS+=$data32['ip11'];
                $this->Cell(13,5, number_format($TK3_11_BPJS),1,0,'C');
            }
        }else{
            $this->Cell(13,5, $TK3_11_BPJS,1,0,'C');
        }
        if (mysqli_num_rows($execute33) > 0) {
            while ($data33=mysqli_fetch_assoc($execute33)) {
                $TK3_11_GRATIS+=$data33['ip11'];
                $this->Cell(17,5, number_format($TK3_11_GRATIS),1,0,'C');
            }
        }else{
            $this->Cell(17,5, $TK3_11_GRATIS,1,0,'C');
        }
        $this->Cell(20,5, number_format($TK3_11_GRATIS+$TK3_11_UMUM+$TK3_11_BPJS),1,0,'C');


//////////////////////////////////////////////////////////////////////////////////////
        $this->Ln();
        $this->SetFont('Times','',10);
        $this->SetX(30);
        $this->Cell(10,5,"4",1,0,'C');
        $this->Cell(67,5," Retainer",1,0,'L');
        $this->SetFont('Times','',8);
         if (mysqli_num_rows($execute34) > 0) {
            while ($data34=mysqli_fetch_assoc($execute34)) {
                $TK3_12_UMUM+=$data34['ip12'];
                $this->Cell(13,5, number_format($TK3_12_UMUM),1,0,'C');
            }
        }else{
            $this->Cell(13,5, $TK3_12_UMUM,1,0,'C');
        }
        if (mysqli_num_rows($execute35) > 0) {
            while ($data35=mysqli_fetch_assoc($execute35)) {
                $TK3_12_BPJS+=$data35['ip12'];
                $this->Cell(13,5, number_format($TK3_12_BPJS),1,0,'C');
            }
        }else{
            $this->Cell(13,5, $TK3_12_BPJS,1,0,'C');
        }
        if (mysqli_num_rows($execute36) > 0) {
            while ($data36=mysqli_fetch_assoc($execute36)) {
                $TK3_12_GRATIS+=$data36['ip12'];
                $this->Cell(17,5, number_format($TK3_12_GRATIS),1,0,'C');
            }
        }else{
            $this->Cell(17,5, $TK3_12_GRATIS,1,0,'C');
        }
        $this->Cell(20,5, number_format($TK3_12_GRATIS+$TK3_12_UMUM+$TK3_12_BPJS),1,0,'C');

//////////////////////////////////////////////////////////////////////////////////////
        $this->Ln();
        $this->SetFont('Times','',10);
        $this->SetX(30);
        $this->Cell(10,5,"5",1,0,'C');
        $this->Cell(67,5," Konsultasi",1,0,'L');
         if (mysqli_num_rows($execute37) > 0) {
            while ($data37=mysqli_fetch_assoc($execute37)) {
                $TK3_13_UMUM+=$data37['ip13'];
                $this->Cell(13,5, number_format($TK3_13_UMUM),1,0,'C');
            }
        }else{
            $this->Cell(13,5, $TK3_13_UMUM,1,0,'C');
        }
        if (mysqli_num_rows($execute38) > 0) {
            while ($data38=mysqli_fetch_assoc($execute38)) {
                $TK3_13_BPJS+=$data38['ip13'];
                $this->Cell(13,5, number_format($TK3_13_BPJS),1,0,'C');
            }
        }else{
            $this->Cell(13,5, $TK3_13_BPJS,1,0,'C');
        }
        if (mysqli_num_rows($execute39) > 0) {
            while ($data39=mysqli_fetch_assoc($execute39)) {
                $TK3_13_GRATIS+=$data39['ip13'];
                $this->Cell(17,5, number_format($TK3_13_GRATIS),1,0,'C');
            }
        }else{
            $this->Cell(17,5, $TK3_13_GRATIS,1,0,'C');
        }
        $this->Cell(20,5, number_format($TK3_13_GRATIS+$TK3_13_UMUM+$TK3_13_BPJS),1,0,'C');


        $this->Ln();
        $this->SetFont('Times','',10);
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->Cell(67,5," ",1,0,'L');
        $this->Cell(13,5," ",1,0,'L');
        $this->Cell(13,5," ",1,0,'L');
        $this->Cell(17,5," ",1,0,'L');
        $this->Cell(20,5," ",1,0,'L');



///////////////////////////////////////////////////////////        
        $this->Ln();
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->Cell(67,5,"Pasien Baru",1,0,'L');
        if (mysqli_num_rows($execute40) > 0) {
            while ($data40=mysqli_fetch_assoc($execute40)) {
                $TK3_14_UMUM+=$data40['ip14'];
                $this->Cell(13,5, number_format($TK3_14_UMUM),1,0,'C');
            }
        }else{
            $this->Cell(13,5, $TK3_14_UMUM,1,0,'C');
        }
        if (mysqli_num_rows($execute41) > 0) {
            while ($data41=mysqli_fetch_assoc($execute41)) {
                $TK3_14_BPJS+=$data41['ip14'];
                $this->Cell(13,5, number_format($TK3_14_BPJS),1,0,'C');
            }
        }else{
            $this->Cell(13,5, $TK3_14_BPJS,1,0,'C');
        }
        if (mysqli_num_rows($execute42) > 0) {
            while ($data42=mysqli_fetch_assoc($execute42)) {
                $TK3_14_GRATIS+=$data42['ip14'];
                $this->Cell(17,5, number_format($TK3_14_GRATIS),1,0,'C');
            }
        }else{
            $this->Cell(17,5, $TK3_14_GRATIS,1,0,'C');
        }
        $this->Cell(20,5, number_format($TK3_14_GRATIS+$TK3_14_UMUM+$TK3_14_BPJS),1,0,'C');


///////////////////////////////////////////////////////////        
        $this->Ln();
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->Cell(67,5,"Pasien Lama",1,0,'L');
        if (mysqli_num_rows($execute43) > 0) {
            while ($data43=mysqli_fetch_assoc($execute43)) {
                $TK3_15_UMUM+=$data43['ip15'];
                $this->Cell(13,5, number_format($TK3_15_UMUM),1,0,'C');
            }
        }else{
            $this->Cell(13,5, $TK3_15_UMUM,1,0,'C');
        }
        if (mysqli_num_rows($execute44) > 0) {
            while ($data44=mysqli_fetch_assoc($execute44)) {
                $TK3_15_BPJS+=$data44['ip15'];
                $this->Cell(13,5, number_format($TK3_15_BPJS),1,0,'C');
            }
        }else{
            $this->Cell(13,5, $TK3_15_BPJS,1,0,'C');
        }
        if (mysqli_num_rows($execute45) > 0) {
            while ($data45=mysqli_fetch_assoc($execute45)) {
                $TK3_15_GRATIS+=$data45['ip15'];
                $this->Cell(17,5, number_format($TK3_15_GRATIS),1,0,'C');
            }
        }else{
            $this->Cell(17,5, $TK3_15_GRATIS,1,0,'C');
        }
        $this->Cell(20,5, number_format($TK3_15_GRATIS+$TK3_15_UMUM+$TK3_15_BPJS),1,0,'C');

/////////////////////////////////////////////////////////
        $this->Ln();
        $this->SetFont('Times','B',10);
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'L');
        $this->Cell(67,5,"Jumlah Kunjungan",1,0,'C');
        $this->Cell(13,5, number_format($TK3_14_UMUM+$TK3_15_UMUM),1,0,'C');
        $this->Cell(13,5, number_format($TK3_14_BPJS+$TK3_15_BPJS),1,0,'C');
        $this->Cell(17,5, number_format($TK3_14_GRATIS+$TK3_15_GRATIS),1,0,'C');
        $this->Cell(20,5, number_format(($TK3_14_UMUM+$TK3_14_BPJS+$TK3_14_GRATIS)+($TK3_15_UMUM+$TK3_15_BPJS+$TK3_15_GRATIS)),1,0,'C');
?>