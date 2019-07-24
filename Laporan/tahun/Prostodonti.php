<?php
    require 'data_prostodonti.php';
$this->Ln(10);
$this->SetFont('Times','',10);       
$this->SetX(20);
        $this->Cell(35,0,"KLINIK PROSTODONTI",0,0,'C');
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
        $this->Cell(67,5,"Acrilyc",1,0,'L');
        $this->Cell(13,5,"",1,0,'L');
        $this->Cell(13,5,"",1,0,'L');
        $this->Cell(17,5,"",1,0,'L');
        $this->Cell(20,5,"",1,0,'L');
        $this->Ln();
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->SetFont('Times','',8);
        $this->Cell(67,5," a. Geligi tiruan sebagian dengan 1 gigi",1,0,'L');
        
        if (mysqli_num_rows($execute1) > 0) {
            while ($data1=mysqli_fetch_assoc($execute1)) {
                $TK1_1_UMUM+=$data1['ip1'];
            }

                $this->Cell(13,5, number_format($TK1_1_UMUM),1,0,'C');
        }else{
            $this->Cell(13,5, $TK1_1_UMUM,1,0,'C');
        }
        if (mysqli_num_rows($execute2) > 0) {
            while ($data2=mysqli_fetch_assoc($execute2)) {
                $TK1_1_BPJS+=$data2['ip1'];
            }
                $this->Cell(13,5, number_format($TK1_1_BPJS),1,0,'C');
        }else{
            $this->Cell(13,5, $TK1_1_BPJS,1,0,'C');
        }
        if (mysqli_num_rows($execute3) > 0) {
            while ($data3=mysqli_fetch_assoc($execute3)) {
                $TK1_1_GRATIS+=$data3['ip1'];
            }
            
                $this->Cell(17,5, number_format($TK1_1_GRATIS),1,0,'C');
        }else{
            $this->Cell(17,5, $TK1_1_GRATIS,1,0,'C');
        }
        $this->Cell(20,5, number_format($TK1_1_GRATIS+$TK1_1_UMUM+$TK1_1_BPJS),1,0,'C');




//////////////////////////////////////////////////////////////////////////////////////
        $this->Ln();
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->SetFont('Times','',8);
        $this->Cell(67,5," b. Penambahan 1 gigi berikutnya",1,0,'L');
        
        if (mysqli_num_rows($execute1) > 0) {
            while ($data4=mysqli_fetch_assoc($execute4)) {
                $TK1_2_UMUM+=$data4['ip2'];
            }
                $this->Cell(13,5, number_format($TK1_2_UMUM),1,0,'C');
        }else{
            $this->Cell(13,5, $TK1_2_UMUM,1,0,'C');
        }
        if (mysqli_num_rows($execute2) > 0) {
            while ($data5=mysqli_fetch_assoc($execute5)) {
                $TK1_2_BPJS+=$data5['ip2'];
            }
                $this->Cell(13,5, number_format($TK1_2_BPJS),1,0,'C');
        }else{
            $this->Cell(13,5, $TK1_2_BPJS,1,0,'C');
        }
        if (mysqli_num_rows($execute3) > 0) {
            while ($data6=mysqli_fetch_assoc($execute6)) {
                $TK1_2_GRATIS+=$data6['ip2'];
            }
                $this->Cell(17,5, number_format($TK1_2_GRATIS),1,0,'C');
        }else{
            $this->Cell(17,5, $TK1_2_GRATIS,1,0,'C');
        }
        $this->Cell(20,5, number_format($TK1_2_GRATIS+$TK1_2_UMUM+$TK1_2_BPJS),1,0,'C');



//////////////////////////////////////////////////////////////////////////////////////
        $this->Ln();
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->SetFont('Times','',8);
        $this->Cell(67,5," c. Geligi tiruan penuh Rahang Atas dan Rahang Bawah",1,0,'L');
        
        if (mysqli_num_rows($execute7) > 0) {
            while ($data7=mysqli_fetch_assoc($execute7)) {
                $TK1_3_UMUM+=$data7['ip3'];
            }
                $this->Cell(13,5, number_format($TK1_3_UMUM),1,0,'C');
        }else{
            $this->Cell(13,5, $TK1_3_UMUM,1,0,'C');
        }
        if (mysqli_num_rows($execute8) > 0) {
            while ($data8=mysqli_fetch_assoc($execute8)) {
                $TK1_3_BPJS+=$data8['ip3'];
            }
                $this->Cell(13,5, number_format($TK1_3_BPJS),1,0,'C');
        }else{
            $this->Cell(13,5, $TK1_3_BPJS,1,0,'C');
        }
        if (mysqli_num_rows($execute9) > 0) {
            while ($data9=mysqli_fetch_assoc($execute9)) {
                $TK1_3_GRATIS+=$data9['ip3'];
            }
                $this->Cell(17,5, number_format($TK1_3_GRATIS),1,0,'C');
        }else{
            $this->Cell(17,5, $TK1_3_GRATIS,1,0,'C');
        }
        $this->Cell(20,5, number_format($TK1_3_GRATIS+$TK1_3_UMUM+$TK1_3_BPJS),1,0,'C');




//////////////////////////////////////////////////////////////////////////////////////
        $this->Ln();
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->SetFont('Times','',8);
        $this->Cell(67,5," d. Geligi tiruan penuh Rahang Atas atau Rahang Bawah",1,0,'L');
        
        if (mysqli_num_rows($execute10) > 0) {
            while ($data10=mysqli_fetch_assoc($execute10)) {
                $TK1_4_UMUM+=$data10['ip4'];
            }
                $this->Cell(13,5, number_format($TK1_4_UMUM),1,0,'C');
        }else{
            $this->Cell(13,5, $TK1_4_UMUM,1,0,'C');
        }
        if (mysqli_num_rows($execute11) > 0) {
            while ($data11=mysqli_fetch_assoc($execute11)) {
                $TK1_4_BPJS+=$data11['ip4'];
            }
                $this->Cell(13,5, number_format($TK1_4_BPJS),1,0,'C');
        }else{
            $this->Cell(13,5, $TK1_4_BPJS,1,0,'C');
        }
        if (mysqli_num_rows($execute12) > 0) {
            while ($data12=mysqli_fetch_assoc($execute12)) {
                $TK1_4_GRATIS+=$data12['ip4'];
            }
                $this->Cell(17,5, number_format($TK1_4_GRATIS),1,0,'C');
        }else{
            $this->Cell(17,5, $TK1_4_GRATIS,1,0,'C');
        }
        $this->Cell(20,5, number_format($TK1_4_GRATIS+$TK1_4_UMUM+$TK1_4_BPJS),1,0,'C');




//////////////////////////////////////////////////////////////////////////////////////
        $this->Ln();
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->SetFont('Times','',8);
        $this->Cell(67,5," e. Mahkota Sementara",1,0,'L');
        
        if (mysqli_num_rows($execute13) > 0) {
            while ($data13=mysqli_fetch_assoc($execute13)) {
                $TK1_5_UMUM+=$data13['ip5'];
            }
                $this->Cell(13,5, number_format($TK1_5_UMUM),1,0,'C');
        }else{
            $this->Cell(13,5, $TK1_5_UMUM,1,0,'C');
        }
        if (mysqli_num_rows($execute14) > 0) {
            while ($data14=mysqli_fetch_assoc($execute14)) {
                $TK1_5_BPJS+=$data14['ip5'];
            }
                $this->Cell(13,5, number_format($TK1_5_BPJS),1,0,'C');
        }else{
            $this->Cell(13,5, $TK1_5_BPJS,1,0,'C');
        }
        if (mysqli_num_rows($execute15) > 0) {
            while ($data15=mysqli_fetch_assoc($execute15)) {
                $TK1_5_GRATIS+=$data15['ip5'];
            }
                $this->Cell(17,5, number_format($TK1_5_GRATIS),1,0,'C');
        }else{
            $this->Cell(17,5, $TK1_5_GRATIS,1,0,'C');
        }
        $this->Cell(20,5, number_format($TK1_5_GRATIS+$TK1_5_UMUM+$TK1_5_BPJS),1,0,'C');



//////////////////////////////////////////////////////////////////////////////////////
        $this->Ln();
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->SetFont('Times','',8);
        $this->Cell(67,5," f. Jaket",1,0,'L');
        
        if (mysqli_num_rows($execute16) > 0) {
            while ($data16=mysqli_fetch_assoc($execute16)) {
                $TK1_6_UMUM+=$data16['ip6'];
            }
                $this->Cell(13,5, number_format($TK1_6_UMUM),1,0,'C');
        }else{
            $this->Cell(13,5, $TK1_6_UMUM,1,0,'C');
        }
        if (mysqli_num_rows($execute17) > 0) {
            while ($data17=mysqli_fetch_assoc($execute17)) {
                $TK1_6_BPJS+=$data17['ip6'];
            }
                $this->Cell(13,5, number_format($TK1_6_BPJS),1,0,'C');
        }else{
            $this->Cell(13,5, $TK1_6_BPJS,0,'C');
        }
        if (mysqli_num_rows($execute18) > 0) {
            while ($data18=mysqli_fetch_assoc($execute18)) {
                $TK1_6_GRATIS+=$data18['ip6'];
            }
                $this->Cell(17,5, number_format($TK1_6_GRATIS),1,0,'C');
        }else{
            $this->Cell(17,5, $TK1_6_GRATIS,1,0,'C');
        }
        $this->Cell(20,5, number_format($TK1_6_GRATIS+$TK1_6_UMUM+$TK1_6_BPJS),1,0,'C');




//////////////////////////////////////////////////////////////////////////////////////
        $this->Ln();
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->SetFont('Times','',8);
        $this->Cell(67,5," g. Jacket + Backing logam",1,0,'L');
        
        if (mysqli_num_rows($execute19) > 0) {
            while ($data19=mysqli_fetch_assoc($execute19)) {
                $TK1_7_UMUM+=$data19['ip7'];
            }
                $this->Cell(13,5, number_format($TK1_7_UMUM),1,0,'C');
        }else{
            $this->Cell(13,5, $TK1_7_UMUM,1,0,'C');
        }
        if (mysqli_num_rows($execute20) > 0) {
            while ($data20=mysqli_fetch_assoc($execute20)) {
                $TK1_7_BPJS+=$data20['ip7'];
            }
                $this->Cell(13,5, number_format($TK1_7_BPJS),1,0,'C');
        }else{
            $this->Cell(13,5, $TK1_4_BPJS,1,0,'C');
        }
        if (mysqli_num_rows($execute21) > 0) {
            while ($data21=mysqli_fetch_assoc($execute21)) {
                $TK1_7_GRATIS+=$data21['ip7'];
            }
                $this->Cell(17,5, number_format($TK1_7_GRATIS),1,0,'C');
        }else{
            $this->Cell(17,5, $TK1_7_GRATIS,1,0,'C');
        }
        $this->Cell(20,5, number_format($TK1_7_GRATIS+$TK1_7_UMUM+$TK1_7_BPJS),1,0,'C');



//////////////////////////////////////////////////////////////////////////////////////
        $this->Ln();
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->SetFont('Times','',8);
        $this->Cell(67,5," h. Relining full denture",1,0,'L');
        
        if (mysqli_num_rows($execute22) > 0) {
            while ($data22=mysqli_fetch_assoc($execute22)) {
                $TK1_8_UMUM+=$data22['ip8'];
            }
                $this->Cell(13,5, number_format($TK1_8_UMUM),1,0,'C');
        }else{
            $this->Cell(13,5, $TK1_8_UMUM,1,0,'C');
        }
        if (mysqli_num_rows($execute23) > 0) {
            while ($data23=mysqli_fetch_assoc($execute23)) {
                $TK1_8_BPJS+=$data23['ip8'];
            }
                $this->Cell(13,5, number_format($TK1_8_BPJS),1,0,'C');
        }else{
            $this->Cell(13,5, $TK1_8_BPJS,0,'C');
        }
        if (mysqli_num_rows($execute24) > 0) {
            while ($data24=mysqli_fetch_assoc($execute24)) {
                $TK1_8_GRATIS+=$data24['ip8'];
            }
                $this->Cell(17,5, number_format($TK1_8_GRATIS),1,0,'C');
        }else{
            $this->Cell(17,5, $TK1_8_GRATIS,1,0,'C');
        }
        $this->Cell(20,5, number_format($TK1_8_GRATIS+$TK1_8_UMUM+$TK1_8_BPJS),1,0,'C');




//////////////////////////////////////////////////////////////////////////////////////
        $this->Ln();
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->SetFont('Times','',8);
        $this->Cell(67,5," i. Rebasing",1,0,'L');
        
        if (mysqli_num_rows($execute25) > 0) {
            while ($data25=mysqli_fetch_assoc($execute25)) {
                $TK1_9_UMUM+=$data25['ip9'];
            }
                $this->Cell(13,5, number_format($TK1_9_UMUM),1,0,'C');
        }else{
            $this->Cell(13,5, $TK1_9_UMUM,1,0,'C');
        }
        if (mysqli_num_rows($execute26) > 0) {
            while ($data26=mysqli_fetch_assoc($execute26)) {
                $TK1_9_BPJS+=$data26['ip9'];
            }
                $this->Cell(13,5, number_format($TK1_9_BPJS),1,0,'C');
        }else{
            $this->Cell(13,5, $TK1_9_BPJS,1,0,'C');
        }
        if (mysqli_num_rows($execute27) > 0) {
            while ($data27=mysqli_fetch_assoc($execute27)) {
                $TK1_9_GRATIS+=$data27['ip9'];
            }
                $this->Cell(17,5, number_format($TK1_9_GRATIS),1,0,'C');
        }else{
            $this->Cell(17,5, $TK1_9_GRATIS,1,0,'C');
        }
        $this->Cell(20,5, number_format($TK1_9_GRATIS+$TK1_9_UMUM+$TK1_9_BPJS),1,0,'C');



///////////////////////////////////////////////////////////////////
        $this->Ln();
        $this->SetX(30);
        $this->Cell(10,5,"2",1,0,'C');
        $this->Cell(67,5,"Kerangka Logam (Frame Denture)",1,0,'L');
        $this->Cell(13,5,"",1,0,'L');
        $this->Cell(13,5,"",1,0,'L');
        $this->Cell(17,5,"",1,0,'L');
        $this->Cell(20,5,"",1,0,'L');
        $this->Ln();
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->SetFont('Times','',8);
        $this->Cell(67,5," a. Geligi tiruan sebagian dengan 1 gigi",1,0,'L');
        
        if (mysqli_num_rows($execute28) > 0) {
            while ($data28=mysqli_fetch_assoc($execute28)) {
                $TK1_10_UMUM+=$data28['ip10'];
            }
                $this->Cell(13,5, number_format($TK1_10_UMUM),1,0,'C');
        }else{
            $this->Cell(13,5, $TK1_10_UMUM,1,0,'C');
        }
        if (mysqli_num_rows($execute29) > 0) {
            while ($data29=mysqli_fetch_assoc($execute29)) {
                $TK1_10_BPJS+=$data29['ip10'];
            }
                $this->Cell(13,5, number_format($TK1_10_BPJS),1,0,'C');
        }else{
            $this->Cell(13,5, $TK1_10_BPJS,1,0,'C');
        }
        if (mysqli_num_rows($execute30) > 0) {
            while ($data30=mysqli_fetch_assoc($execute30)) {
                $TK1_10_GRATIS+=$data3['ip10'];
            }
                $this->Cell(17,5, number_format($TK1_10_GRATIS),1,0,'C');
        }else{
            $this->Cell(17,5, $TK1_10_GRATIS,1,0,'C');
        }
        $this->Cell(20,5, number_format($TK1_10_GRATIS+$TK1_10_UMUM+$TK1_10_BPJS),1,0,'C');




//////////////////////////////////////////////////////////////////////////////////////
        $this->Ln();
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->SetFont('Times','',8);
        $this->Cell(67,5," b. Penambahan 1 gigi berikutnya",1,0,'L');
        
        if (mysqli_num_rows($execute31) > 0) {
            while ($data31=mysqli_fetch_assoc($execute31)) {
                $TK1_11_UMUM+=$data31['ip11'];
            }
                $this->Cell(13,5, number_format($TK1_11_UMUM),1,0,'C');
        }else{
            $this->Cell(13,5, $TK1_11_UMUM,1,0,'C');
        }
        if (mysqli_num_rows($execute32) > 0) {
            while ($data32=mysqli_fetch_assoc($execute32)) {
                $TK1_11_BPJS+=$data32['ip11'];
            }
                $this->Cell(13,5, number_format($TK1_11_BPJS),1,0,'C');
        }else{
            $this->Cell(13,5, $TK1_11_BPJS,1,0,'C');
        }
        if (mysqli_num_rows($execute33) > 0) {
            while ($data33=mysqli_fetch_assoc($execute33)) {
                $TK1_11_GRATIS+=$data33['ip11'];
            }
                $this->Cell(17,5, number_format($TK1_11_GRATIS),1,0,'C');
        }else{
            $this->Cell(17,5, $TK1_11_GRATIS,1,0,'C');
        }
        $this->Cell(20,5, number_format($TK1_11_GRATIS+$TK1_11_UMUM+$TK1_11_BPJS),1,0,'C');



//////////////////////////////////////////////////////////////////////////////////////
        $this->Ln();
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->SetFont('Times','',8);
        $this->Cell(67,5," c. Geligi tiruan penuh Rahang Atas dan Rahang Bawah",1,0,'L');
        
        if (mysqli_num_rows($execute34) > 0) {
            while ($data34=mysqli_fetch_assoc($execute34)) {
                $TK1_12_UMUM+=$data34['ip12'];
            }
                $this->Cell(13,5, number_format($TK1_12_UMUM),1,0,'C');
        }else{
            $this->Cell(13,5, $TK1_12_UMUM,1,0,'C');
        }
        if (mysqli_num_rows($execute35) > 0) {
            while ($data35=mysqli_fetch_assoc($execute35)) {
                $TK1_12_BPJS+=$data35['ip12'];
            }
                $this->Cell(13,5, number_format($TK1_12_BPJS),1,0,'C');
        }else{
            $this->Cell(13,5, $TK1_12_BPJS,1,0,'C');
        }
        if (mysqli_num_rows($execute36) > 0) {
            while ($data36=mysqli_fetch_assoc($execute36)) {
                $TK1_12_GRATIS+=$data36['ip12'];
            }
                $this->Cell(17,5, number_format($TK1_12_GRATIS),1,0,'C');
        }else{
            $this->Cell(17,5, $TK1_12_GRATIS,1,0,'C');
        }
        $this->Cell(20,5, number_format($TK1_12_GRATIS+$TK1_12_UMUM+$TK1_12_BPJS),1,0,'C');




//////////////////////////////////////////////////////////////////////////////////////
        $this->Ln();
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->SetFont('Times','',8);
        $this->Cell(67,5," d. Geligi tiruan penuh Rahang Atas atau Rahang Bawah",1,0,'L');
        
        if (mysqli_num_rows($execute37) > 0) {
            while ($data37=mysqli_fetch_assoc($execute37)) {
                $TK1_13_UMUM+=$data37['ip13'];
            }
                $this->Cell(13,5, number_format($TK1_13_UMUM),1,0,'C');
        }else{
            $this->Cell(13,5, $TK1_13_UMUM,1,0,'C');
        }
        if (mysqli_num_rows($execute38) > 0) {
            while ($data38=mysqli_fetch_assoc($execute38)) {
                $TK1_13_BPJS+=$data38['ip13'];
            }
                $this->Cell(13,5, number_format($TK1_13_BPJS),1,0,'C');
        }else{
            $this->Cell(13,5, $TK1_13_BPJS,1,0,'C');
        }
        if (mysqli_num_rows($execute39) > 0) {
            while ($data39=mysqli_fetch_assoc($execute39)) {
                $TK1_13_GRATIS+=$data39['ip13'];
            }
                $this->Cell(17,5, number_format($TK1_13_GRATIS),1,0,'C');
        }else{
            $this->Cell(17,5, $TK1_13_GRATIS,1,0,'C');
        }
        $this->Cell(20,5, number_format($TK1_13_GRATIS+$TK1_13_UMUM+$TK1_13_BPJS),1,0,'C');






///////////////////////////////////////////////////////////////////
        $this->Ln();
        $this->SetX(30);
        $this->Cell(10,5,"3",1,0,'C');
        $this->Cell(67,5,"Porcelain",1,0,'L');
        $this->Cell(13,5,"",1,0,'L');
        $this->Cell(13,5,"",1,0,'L');
        $this->Cell(17,5,"",1,0,'L');
        $this->Cell(20,5,"",1,0,'L');
        $this->Ln();
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->SetFont('Times','',8);
        $this->Cell(67,5," a. Jacket metal porcelain",1,0,'L');
        
        if (mysqli_num_rows($execute40) > 0) {
            while ($data40=mysqli_fetch_assoc($execute40)) {
                $TK1_14_UMUM+=$data40['ip14'];
            }
                $this->Cell(13,5, number_format($TK1_14_UMUM),1,0,'C');
        }else{
            $this->Cell(13,5, $TK1_14_UMUM,1,0,'C');
        }
        if (mysqli_num_rows($execute41) > 0) {
            while ($data41=mysqli_fetch_assoc($execute41)) {
                $TK1_14_BPJS+=$data41['ip14'];
            }
                $this->Cell(13,5, number_format($TK1_14_BPJS),1,0,'C');
        }else{
            $this->Cell(13,5, $TK1_14_BPJS,1,0,'C');
        }
        if (mysqli_num_rows($execute42) > 0) {
            while ($data42=mysqli_fetch_assoc($execute42)) {
                $TK1_14_GRATIS+=$data42['ip14'];
            }
                $this->Cell(17,5, number_format($TK1_14_GRATIS),1,0,'C');
        }else{
            $this->Cell(17,5, $TK1_14_GRATIS,1,0,'C');
        }
        $this->Cell(20,5, number_format($TK1_14_GRATIS+$TK1_14_UMUM+$TK1_14_BPJS),1,0,'C');




//////////////////////////////////////////////////////////////////////////////////////
        $this->Ln();
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->SetFont('Times','',8);
        $this->Cell(67,5," b. Jacket all porcelain",1,0,'L');
        
        if (mysqli_num_rows($execute43) > 0) {
            while ($data43=mysqli_fetch_assoc($execute43)) {
                $TK1_15_UMUM+=$data43['ip15'];
            }
                $this->Cell(13,5, number_format($TK1_15_UMUM),1,0,'C');
        }else{
            $this->Cell(13,5, $TK1_11_UMUM,1,0,'C');
        }
        if (mysqli_num_rows($execute44) > 0) {
            while ($data44=mysqli_fetch_assoc($execute44)) {
                $TK1_15_BPJS+=$data44['ip15'];
            }
                $this->Cell(13,5, number_format($TK1_15_BPJS),1,0,'C');
        }else{
            $this->Cell(13,5, $TK1_15_BPJS,1,0,'C');
        }
        if (mysqli_num_rows($execute45) > 0) {
            while ($data45=mysqli_fetch_assoc($execute45)) {
                $TK1_15_GRATIS+=$data45['ip15'];
            }
                $this->Cell(17,5, number_format($TK1_15_GRATIS),1,0,'C');
        }else{
            $this->Cell(17,5, $TK1_15_GRATIS,1,0,'C');
        }
        $this->Cell(20,5, number_format($TK1_15_GRATIS+$TK1_15_UMUM+$TK1_15_BPJS),1,0,'C');




///////////////////////////////////////////////////////////////////
        $this->Ln();
        $this->SetX(30);
        $this->Cell(10,5,"4",1,0,'C');
        $this->Cell(67,5,"Valplast denture",1,0,'L');
        $this->Cell(13,5,"",1,0,'L');
        $this->Cell(13,5,"",1,0,'L');
        $this->Cell(17,5,"",1,0,'L');
        $this->Cell(20,5,"",1,0,'L');
        $this->Ln();
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->SetFont('Times','',8);
        $this->Cell(67,5," a. Prothesa sebagian dengan 1 gigi",1,0,'L');
        
        if (mysqli_num_rows($execute46) > 0) {
            while ($data46=mysqli_fetch_assoc($execute46)) {
                $TK1_16_UMUM+=$data46['ip16'];
            }
                $this->Cell(13,5, number_format($TK1_16_UMUM),1,0,'C');
        }else{
            $this->Cell(13,5, $TK1_16_UMUM,1,0,'C');
        }
        if (mysqli_num_rows($execute47) > 0) {
            while ($data47=mysqli_fetch_assoc($execute47)) {
                $TK1_16_BPJS+=$data47['ip16'];
            }
                $this->Cell(13,5, number_format($TK1_16_BPJS),1,0,'C');
        }else{
            $this->Cell(13,5, $TK1_16_BPJS,1,0,'C');
        }
        if (mysqli_num_rows($execute48) > 0) {
            while ($data48=mysqli_fetch_assoc($execute48)) {
                $TK1_16_GRATIS+=$data48['ip16'];
            }
                $this->Cell(17,5, number_format($TK1_16_GRATIS),1,0,'C');
        }else{
            $this->Cell(17,5, $TK1_16_GRATIS,1,0,'C');
        }
        $this->Cell(20,5, number_format($TK1_16_GRATIS+$TK1_16_UMUM+$TK1_16_BPJS),1,0,'C');




//////////////////////////////////////////////////////////////////////////////////////
        $this->Ln();
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->SetFont('Times','',8);
        $this->Cell(67,5," b. Penambahan 1 gigi acrylic",1,0,'L');
        
        if (mysqli_num_rows($execute49) > 0) {
            while ($data49=mysqli_fetch_assoc($execute49)) {
                $TK1_17_UMUM+=$data49['ip17'];
            }
                $this->Cell(13,5, number_format($TK1_17_UMUM),1,0,'C');
        }else{
            $this->Cell(13,5, $TK1_17_UMUM,1,0,'C');
        }
        if (mysqli_num_rows($execute50) > 0) {
            while ($data50=mysqli_fetch_assoc($execute50)) {
                $TK1_17_BPJS+=$data50['ip17'];
            }
                $this->Cell(13,5, number_format($TK1_17_BPJS),1,0,'C');
        }else{
            $this->Cell(13,5, $TK1_17_BPJS,1,0,'C');
        }
        if (mysqli_num_rows($execute51) > 0) {
            while ($data51=mysqli_fetch_assoc($execute51)) {
                $TK1_17_GRATIS+=$data51['ip17'];
            }
                $this->Cell(17,5, number_format($TK1_17_GRATIS),1,0,'C');
        }else{
            $this->Cell(17,5, $TK1_17_GRATIS,1,0,'C');
        }
        $this->Cell(20,5, number_format($TK1_17_GRATIS+$TK1_17_UMUM+$TK1_17_BPJS),1,0,'C');



///////////////////////////////////////////////////////////        
        $this->Ln();
        $this->SetX(30);
        $this->Cell(10,5,"5",1,0,'C');
        $this->Cell(67,5,"Crown & Bridge",1,0,'L');
        $this->Cell(13,5,"",1,0,'L');
        $this->Cell(13,5,"",1,0,'L');
        $this->Cell(17,5,"",1,0,'L');
        $this->Cell(20,5,"",1,0,'L');
        $this->Ln();
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->SetFont('Times','',8);
        $this->Cell(67,5," a. Acrylic",1,0,'L');
        
        if (mysqli_num_rows($execute52) > 0) {
            while ($data52=mysqli_fetch_assoc($execute52)) {
                $TK1_18_UMUM+=$data52['ip18'];
            }
                $this->Cell(13,5, number_format($TK1_18_UMUM),1,0,'C');
        }else{
            $this->Cell(13,5, $TK1_18_UMUM,1,0,'C');
        }
        if (mysqli_num_rows($execute53) > 0) {
            while ($data53=mysqli_fetch_assoc($execute53)) {
                $TK1_18_BPJS+=$data53['ip18'];
            }
                $this->Cell(13,5, number_format($TK1_18_BPJS),1,0,'C');
        }else{
            $this->Cell(13,5, $TK1_18_BPJS,1,0,'C');
        }
        if (mysqli_num_rows($execute54) > 0) {
            while ($data54=mysqli_fetch_assoc($execute54)) {
                $TK1_18_GRATIS+=$data54['ip18'];
            }
                $this->Cell(17,5, number_format($TK1_18_GRATIS),1,0,'C');
        }else{
            $this->Cell(17,5, $TK1_18_GRATIS,1,0,'C');
        }
        $this->Cell(20,5, number_format($TK1_18_GRATIS+$TK1_18_UMUM+$TK1_18_BPJS),1,0,'C');




//////////////////////////////////////////////////////////////////////////////////////
        $this->Ln();
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->SetFont('Times','',8);
        $this->Cell(67,5," b. Porcelain",1,0,'L');
        
        if (mysqli_num_rows($execute55) > 0) {
            while ($data55=mysqli_fetch_assoc($execute55)) {
                $TK1_19_UMUM+=$data55['ip19'];
            }
                $this->Cell(13,5, number_format($TK1_19_UMUM),1,0,'C');
        }else{
            $this->Cell(13,5, $TK1_19_UMUM,1,0,'C');
        }
        if (mysqli_num_rows($execute56) > 0) {
            while ($data56=mysqli_fetch_assoc($execute56)) {
                $TK1_19_BPJS+=$data56['ip19'];
            }
                $this->Cell(13,5, number_format($TK1_19_BPJS),1,0,'C');
        }else{
            $this->Cell(13,5, $TK1_19_BPJS,1,0,'C');
        }
        if (mysqli_num_rows($execute57) > 0) {
            while ($data57=mysqli_fetch_assoc($execute57)) {
                $TK1_19_GRATIS+=$data57['ip19'];
            }
                $this->Cell(17,5, number_format($TK1_19_GRATIS),1,0,'C');
        }else{
            $this->Cell(17,5, $TK1_19_GRATIS,1,0,'C');
        }
        $this->Cell(20,5, number_format($TK1_19_GRATIS+$TK1_19_UMUM+$TK1_19_BPJS),1,0,'C');



//////////////////////////////////////////////////////////////////////////////////////
        $this->Ln();
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->SetFont('Times','',8);
        $this->Cell(67,5," c. Pin crown acrylic",1,0,'L');
        
        if (mysqli_num_rows($execute58) > 0) {
            while ($data58=mysqli_fetch_assoc($execute58)) {
                $TK1_20_UMUM+=$data58['ip20'];
            }
                $this->Cell(13,5, number_format($TK1_20_UMUM),1,0,'C');
        }else{
            $this->Cell(13,5, $TK1_20_UMUM,1,0,'C');
        }
        if (mysqli_num_rows($execute59) > 0) {
            while ($data59=mysqli_fetch_assoc($execute59)) {
                $TK1_20_BPJS+=$data59['ip20'];
            }
                $this->Cell(13,5, number_format($TK1_20_BPJS),1,0,'C');
        }else{
            $this->Cell(13,5, $TK1_20_BPJS,1,0,'C');
        }
        if (mysqli_num_rows($execute60) > 0) {
            while ($data60=mysqli_fetch_assoc($execute60)) {
                $TK1_20_GRATIS+=$data60['ip20'];
            }
                $this->Cell(17,5, number_format($TK1_20_GRATIS),1,0,'C');
        }else{
            $this->Cell(17,5, $TK1_20_GRATIS,1,0,'C');
        }
        $this->Cell(20,5, number_format($TK1_20_GRATIS+$TK1_20_UMUM+$TK1_20_BPJS),1,0,'C');




//////////////////////////////////////////////////////////////////////////////////////
        $this->Ln();
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->SetFont('Times','',8);
        $this->Cell(67,5," d. Full crown metal",1,0,'L');
        
        if (mysqli_num_rows($execute61) > 0) {
            while ($data61=mysqli_fetch_assoc($execute61)) {
                $TK1_21_UMUM+=$data61['ip21'];
            }
                $this->Cell(13,5, number_format($TK1_21_UMUM),1,0,'C');
        }else{
            $this->Cell(13,5, $TK1_21_UMUM,1,0,'C');
        }
        if (mysqli_num_rows($execute62) > 0) {
            while ($data62=mysqli_fetch_assoc($execute62)) {
                $TK1_21_BPJS+=$data62['ip21'];
            }
                $this->Cell(13,5, number_format($TK1_21_BPJS),1,0,'C');
        }else{
            $this->Cell(13,5, $TK1_21_BPJS,1,0,'C');
        }
        if (mysqli_num_rows($execute63) > 0) {
            while ($data63=mysqli_fetch_assoc($execute63)) {
                $TK1_21_GRATIS+=$data63['ip21'];
            }
                $this->Cell(17,5, number_format($TK1_21_GRATIS),1,0,'C');
        }else{
            $this->Cell(17,5, $TK1_21_GRATIS,1,0,'C');
        }
        $this->Cell(20,5, number_format($TK1_21_GRATIS+$TK1_21_UMUM+$TK1_21_BPJS),1,0,'C');




//////////////////////////////////////////////////////////////////////////////////////
        $this->Ln();
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->SetFont('Times','',8);
        $this->Cell(67,5," e. Cementing Crown & Bridge lepas",1,0,'L');
        
        if (mysqli_num_rows($execute64) > 0) {
            while ($data64=mysqli_fetch_assoc($execute64)) {
                $TK1_22_UMUM+=$data64['ip22'];
            }
                $this->Cell(13,5, number_format($TK1_22_UMUM),1,0,'C');
        }else{
            $this->Cell(13,5, $TK1_22_UMUM,1,0,'C');
        }
        if (mysqli_num_rows($execute65) > 0) {
            while ($data65=mysqli_fetch_assoc($execute65)) {
                $TK1_22_BPJS+=$data65['ip22'];
            }
                $this->Cell(13,5, number_format($TK1_22_BPJS),1,0,'C');
        }else{
            $this->Cell(13,5, $TK1_22_BPJS,1,0,'C');
        }
        if (mysqli_num_rows($execute66) > 0) {
            while ($data66=mysqli_fetch_assoc($execute66)) {
                $TK1_22_GRATIS+=$data66['ip22'];
            }
                $this->Cell(17,5, number_format($TK1_22_GRATIS),1,0,'C');
        }else{
            $this->Cell(17,5, $TK1_22_GRATIS,1,0,'C');
        }
        $this->Cell(20,5, number_format($TK1_5_GRATIS+$TK1_5_UMUM+$TK1_5_BPJS),1,0,'C');



///////////////////////////////////////////////////////////        
        $this->Ln();
        $this->SetX(30);
        $this->Cell(10,5,"6",1,0,'C');
        $this->Cell(67,5,"Dowel/Pasak",1,0,'L');
        $this->Cell(13,5,"",1,0,'L');
        $this->Cell(13,5,"",1,0,'L');
        $this->Cell(17,5,"",1,0,'L');
        $this->Cell(20,5,"",1,0,'L');
        $this->Ln();
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->SetFont('Times','',8);
        $this->Cell(67,5," a. Cor",1,0,'L');
        
        if (mysqli_num_rows($execute67) > 0) {
            while ($data67=mysqli_fetch_assoc($execute67)) {
                $TK1_23_UMUM+=$data67['ip23'];
            }
                $this->Cell(13,5, number_format($TK1_23_UMUM),1,0,'C');
        }else{
            $this->Cell(13,5, $TK1_23_UMUM,1,0,'C');
        }
        if (mysqli_num_rows($execute68) > 0) {
            while ($data68=mysqli_fetch_assoc($execute68)) {
                $TK1_23_BPJS+=$data68['ip23'];
            }
                $this->Cell(13,5, number_format($TK1_23_BPJS),1,0,'C');
        }else{
            $this->Cell(13,5, $TK1_23_BPJS,1,0,'C');
        }
        if (mysqli_num_rows($execute69) > 0) {
            while ($data69=mysqli_fetch_assoc($execute69)) {
                $TK1_23_GRATIS+=$data69['ip23'];
            }
                $this->Cell(17,5, number_format($TK1_23_GRATIS),1,0,'C');
        }else{
            $this->Cell(17,5, $TK1_23_GRATIS,1,0,'C');
        }
        $this->Cell(20,5, number_format($TK1_23_GRATIS+$TK1_23_UMUM+$TK1_23_BPJS),1,0,'C');




//////////////////////////////////////////////////////////////////////////////////////
        $this->Ln();
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->SetFont('Times','',8);
        $this->Cell(67,5," b. Porcelain",1,0,'L');
        
        if (mysqli_num_rows($execute70) > 0) {
            while ($data70=mysqli_fetch_assoc($execute70)) {
                $TK1_24_UMUM+=$data70['ip24'];
            }
                $this->Cell(13,5, number_format($TK1_24_UMUM),1,0,'C');
        }else{
            $this->Cell(13,5, $TK1_24_UMUM,1,0,'C');
        }
        if (mysqli_num_rows($execute71) > 0) {
            while ($data71=mysqli_fetch_assoc($execute71)) {
                $TK1_24_BPJS+=$data71['ip24'];
            }
                $this->Cell(13,5, number_format($TK1_24_BPJS),1,0,'C');
        }else{
            $this->Cell(13,5, $TK1_24_BPJS,1,0,'C');
        }
        if (mysqli_num_rows($execute72) > 0) {
            while ($data72=mysqli_fetch_assoc($execute72)) {
                $TK1_24_GRATIS+=$data72['ip24'];
            }
                $this->Cell(17,5, number_format($TK1_24_GRATIS),1,0,'C');
        }else{
            $this->Cell(17,5, $TK1_24_GRATIS,1,0,'C');
        }
        $this->Cell(20,5, number_format($TK1_24_GRATIS+$TK1_24_UMUM+$TK1_24_BPJS),1,0,'C');



//////////////////////////////////////////////////////////////////////////////////////
        $this->Ln();
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->SetFont('Times','',8);
        $this->Cell(67,5," c. Pin crown acrylic",1,0,'L');
        
        if (mysqli_num_rows($execute73) > 0) {
            while ($data73=mysqli_fetch_assoc($execute73)) {
                $TK1_25_UMUM+=$data73['ip25'];
            }
                $this->Cell(13,5, number_format($TK1_25_UMUM),1,0,'C');
        }else{
            $this->Cell(13,5, $TK1_25_UMUM,1,0,'C');
        }
        if (mysqli_num_rows($execute74) > 0) {
            while ($data74=mysqli_fetch_assoc($execute74)) {
                $TK1_25_BPJS+=$data74['ip25'];
            }
                $this->Cell(13,5, number_format($TK1_25_BPJS),1,0,'C');
        }else{
            $this->Cell(13,5, $TK1_25_BPJS,1,0,'C');
        }
        if (mysqli_num_rows($execute75) > 0) {
            while ($data75=mysqli_fetch_assoc($execute75)) {
                $TK1_25_GRATIS+=$data75['ip25'];
            }
                $this->Cell(17,5, number_format($TK1_25_GRATIS),1,0,'C');
        }else{
            $this->Cell(17,5, $TK1_25_GRATIS,1,0,'C');
        }
        $this->Cell(20,5, number_format($TK1_25_GRATIS+$TK1_25_UMUM+$TK1_25_BPJS),1,0,'C');





///////////////////////////////////////////////////////////
        $this->Ln(10);
        $this->SetFont('Times','',10);       
        $this->SetX(20);
        $this->Cell(35,0,"KLINIK PROSTODONTI",0,0,'C');
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
        $this->Ln();
        $this->SetFont('Times','',8);
        $this->SetX(30);
        $this->Cell(10,5,"7",1,0,'C');
        $this->Cell(67,5,"Reparasi (patah/ retak/ lepas/penambahan clamer)",1,0,'L');
        if (mysqli_num_rows($execute76) > 0) {
            while ($data76=mysqli_fetch_assoc($execute76)) {
                $TK1_26_UMUM+=$data76['ip26'];
            }
                $this->Cell(13,5, number_format($TK1_26_UMUM),1,0,'C');
        }else{
            $this->Cell(13,5, $TK1_26_UMUM,1,0,'C');
        }
        if (mysqli_num_rows($execute77) > 0) {
            while ($data77=mysqli_fetch_assoc($execute77)) {
                $TK1_26_BPJS+=$data77['ip26'];
            }
                $this->Cell(13,5, number_format($TK1_26_BPJS),1,0,'C');
        }else{
            $this->Cell(13,5, $TK1_26_BPJS,1,0,'C');
        }
        if (mysqli_num_rows($execute78) > 0) {
            while ($data78=mysqli_fetch_assoc($execute78)) {
                $TK1_26_GRATIS+=$data78['ip26'];
            }
                $this->Cell(17,5, number_format($TK1_26_GRATIS),1,0,'C');
        }else{
            $this->Cell(17,5, $TK1_26_GRATIS,1,0,'C');
        }
        $this->Cell(20,5, number_format($TK1_26_GRATIS+$TK1_26_UMUM+$TK1_26_BPJS),1,0,'C');




///////////////////////////////////////////////////////////        
        $this->Ln();
        $this->SetX(30);
        $this->Cell(10,5,"8",1,0,'C');
        $this->Cell(67,5,"Bongkar prothesa tukang gigi",1,0,'L');
        if (mysqli_num_rows($execute79) > 0) {
            while ($data79=mysqli_fetch_assoc($execute79)) {
                $TK1_27_UMUM+=$data79['ip27'];
            }
                $this->Cell(13,5, number_format($TK1_27_UMUM),1,0,'C');
        }else{
            $this->Cell(13,5, $TK1_27_UMUM,1,0,'C');
        }
        if (mysqli_num_rows($execute80) > 0) {
            while ($data80=mysqli_fetch_assoc($execute80)) {
                $TK1_27_BPJS+=$data80['ip27'];
            }
                $this->Cell(13,5, number_format($TK1_27_BPJS),1,0,'C');
        }else{
            $this->Cell(13,5, $TK1_27_BPJS,1,0,'C');
        }
        if (mysqli_num_rows($execute81) > 0) {
            while ($data81=mysqli_fetch_assoc($execute81)) {
                $TK1_27_GRATIS+=$data81['ip27'];
            }
                $this->Cell(17,5, number_format($TK1_27_GRATIS),1,0,'C');
        }else{
            $this->Cell(17,5, $TK1_27_GRATIS,1,0,'C');
        }
        $this->Cell(20,5, number_format($TK1_27_GRATIS+$TK1_27_UMUM+$TK1_27_BPJS),1,0,'C');



///////////////////////////////////////////////////////////        
        $this->Ln();
        $this->SetX(30);
        $this->Cell(10,5,"9",1,0,'C');
        $this->Cell(67,5,"Night guard",1,0,'L');
        if (mysqli_num_rows($execute82) > 0) {
            while ($data82=mysqli_fetch_assoc($execute82)) {
                $TK1_28_UMUM+=$data82['ip28'];
            }
                $this->Cell(13,5, number_format($TK1_28_UMUM),1,0,'C');
        }else{
            $this->Cell(13,5, $TK1_28_UMUM,1,0,'C');
        }
        if (mysqli_num_rows($execute83) > 0) {
            while ($data83=mysqli_fetch_assoc($execute83)) {
                $TK1_28_BPJS+=$data83['ip28'];
            }
                $this->Cell(13,5, number_format($TK1_28_BPJS),1,0,'C');
        }else{
            $this->Cell(13,5, $TK1_28_BPJS,1,0,'C');
        }
        if (mysqli_num_rows($execute84) > 0) {
            while ($data84=mysqli_fetch_assoc($execute84)) {
                $TK1_28_GRATIS+=$data84['ip28'];
            }
                $this->Cell(17,5, number_format($TK1_28_GRATIS),1,0,'C');
        }else{
            $this->Cell(17,5, $TK1_28_GRATIS,1,0,'C');
        }
        $this->Cell(20,5, number_format($TK1_28_GRATIS+$TK1_28_UMUM+$TK1_28_BPJS),1,0,'C');



///////////////////////////////////////////////////////////        
        $this->Ln();
        $this->SetX(30);
        $this->Cell(10,5,"10",1,0,'C');
        $this->Cell(67,5,"Splint Oklusal",1,0,'L');
        if (mysqli_num_rows($execute85) > 0) {
            while ($data85=mysqli_fetch_assoc($execute85)) {
                $TK1_29_UMUM+=$data85['ip29'];
            }
                $this->Cell(13,5, number_format($TK1_29_UMUM),1,0,'C');
        }else{
            $this->Cell(13,5, $TK1_29_UMUM,1,0,'C');
        }
        if (mysqli_num_rows($execute86) > 0) {
            while ($data86=mysqli_fetch_assoc($execute86)) {
                $TK1_29_BPJS+=$data86['ip29'];
            }
                $this->Cell(13,5, number_format($TK1_29_BPJS),1,0,'C');
        }else{
            $this->Cell(13,5, $TK1_29_BPJS,1,0,'C');
        }
        if (mysqli_num_rows($execute87) > 0) {
            while ($data87=mysqli_fetch_assoc($execute87)) {
                $TK1_29_GRATIS+=$data87['ip29'];
            }
                $this->Cell(17,5, number_format($TK1_29_GRATIS),1,0,'C');
        }else{
            $this->Cell(17,5, $TK1_29_GRATIS,1,0,'C');
        }
        $this->Cell(20,5, number_format($TK1_29_GRATIS+$TK1_29_UMUM+$TK1_29_BPJS),1,0,'C');


///////////////////////////////////////////////////////////        
        $this->Ln();
        $this->SetX(30);
        $this->Cell(10,5,"11",1,0,'C');
        $this->Cell(67,5,"Kontrol",1,0,'L');
        if (mysqli_num_rows($execute88) > 0) {
            while ($data88=mysqli_fetch_assoc($execute88)) {
                $TK1_30_UMUM+=$data88['ip30'];
            }
                $this->Cell(13,5, number_format($TK1_30_UMUM),1,0,'C');
        }else{
            $this->Cell(13,5, $TK1_30_UMUM,1,0,'C');
        }
        if (mysqli_num_rows($execute89) > 0) {
            while ($data89=mysqli_fetch_assoc($execute89)) {
                $TK1_30_BPJS+=$data89['ip30'];
            }
                $this->Cell(13,5, number_format($TK1_30_BPJS),1,0,'C');
        }else{
            $this->Cell(13,5, $TK1_30_BPJS,1,0,'C');
        }
        if (mysqli_num_rows($execute90) > 0) {
            while ($data90=mysqli_fetch_assoc($execute90)) {
                $TK1_30_GRATIS+=$data90['ip30'];
            }
                $this->Cell(17,5, number_format($TK1_30_GRATIS),1,0,'C');
        }else{
            $this->Cell(17,5, $TK1_30_GRATIS,1,0,'C');
        }
        $this->Cell(20,5, number_format($TK1_30_GRATIS+$TK1_30_UMUM+$TK1_30_BPJS),1,0,'C');


$this->Ln();
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->Cell(67,5,"",1,0,'L');
        $this->Cell(13,5,"",1,0,'C');
        $this->Cell(13,5,"",1,0,'C');
        $this->Cell(17,5,"",1,0,'C');
        $this->Cell(20,5,"",1,0,'C');






///////////////////////////////////////////////////////////        
        $this->Ln();
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->Cell(67,5,"Pasien Baru",1,0,'L');
        if (mysqli_num_rows($execute91) > 0) {
            while ($data91=mysqli_fetch_assoc($execute91)) {
                $TK1_31_UMUM+=$data91['ip31'];
            }
                $this->Cell(13,5, number_format($TK1_31_UMUM),1,0,'C');
        }else{
            $this->Cell(13,5, $TK1_31_UMUM,1,0,'C');
        }
        if (mysqli_num_rows($execute92) > 0) {
            while ($data92=mysqli_fetch_assoc($execute92)) {
                $TK1_31_BPJS+=$data92['ip31'];
            }
                $this->Cell(13,5, number_format($TK1_31_BPJS),1,0,'C');
        }else{
            $this->Cell(13,5, $TK1_31_BPJS,1,0,'C');
        }
        if (mysqli_num_rows($execute93) > 0) {
            while ($data93=mysqli_fetch_assoc($execute93)) {
                $TK1_31_GRATIS+=$data93['ip31'];
            }
                $this->Cell(17,5, number_format($TK1_31_GRATIS),1,0,'C');
        }else{
            $this->Cell(17,5, $TK1_31_GRATIS,1,0,'C');
        }
        $this->Cell(20,5, number_format($TK1_31_GRATIS+$TK1_31_UMUM+$TK1_31_BPJS),1,0,'C');


///////////////////////////////////////////////////////////        
        $this->Ln();
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->Cell(67,5,"Pasien Lama",1,0,'L');
        if (mysqli_num_rows($execute94) > 0) {
            while ($data94=mysqli_fetch_assoc($execute94)) {
                $TK1_32_UMUM+=$data94['ip32'];
            }
                $this->Cell(13,5, number_format($TK1_32_UMUM),1,0,'C');
        }else{
            $this->Cell(13,5, $TK1_32_UMUM,1,0,'C');
        }
        if (mysqli_num_rows($execute95) > 0) {
            while ($data95=mysqli_fetch_assoc($execute95)) {
                $TK1_32_BPJS+=$data95['ip32'];
            }
                $this->Cell(13,5, number_format($TK1_32_BPJS),1,0,'C');
        }else{
            $this->Cell(13,5, $TK1_32_BPJS,1,0,'C');
        }
        if (mysqli_num_rows($execute96) > 0) {
            while ($data96=mysqli_fetch_assoc($execute96)) {
                $TK1_32_GRATIS+=$data96['ip32'];
            }
                $this->Cell(17,5, number_format($TK1_32_GRATIS),1,0,'C');
        }else{
            $this->Cell(17,5, $TK1_32_GRATIS,1,0,'C');
        }
        $this->Cell(20,5, number_format($TK1_32_GRATIS+$TK1_32_UMUM+$TK1_32_BPJS),1,0,'C');

/////////////////////////////////////////////////////////
        $this->Ln();
        $this->SetFont('Times','B',10);
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'L');
        $this->Cell(67,5,"Jumlah Kunjungan",1,0,'C');
        $this->Cell(13,5, number_format($TK1_31_UMUM+$TK1_32_UMUM),1,0,'C');
        $this->Cell(13,5, number_format($TK1_31_BPJS+$TK1_32_BPJS),1,0,'C');
        $this->Cell(17,5, number_format($TK1_31_GRATIS+$TK1_32_GRATIS),1,0,'C');
        $this->Cell(20,5, number_format(($TK1_31_UMUM+$TK1_31_BPJS+$TK1_31_GRATIS)+($TK1_32_UMUM+$TK1_32_BPJS+$TK1_32_GRATIS)),1,0,'C');
?>