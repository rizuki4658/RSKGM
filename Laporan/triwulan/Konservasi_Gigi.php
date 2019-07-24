<?php
    require 'data_konservasi_gigi.php';
$this->Ln(10);
$this->SetFont('Times','',10);       
$this->SetX(20);
        $this->Cell(35,0,"KLINIK KONSERVASI GIGI",0,0,'C');
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
        $this->Cell(67,5,"Tamabalan Amalgam",1,0,'L');
        $this->Cell(13,5,"",1,0,'L');
        $this->Cell(13,5,"",1,0,'L');
        $this->Cell(17,5,"",1,0,'L');
        $this->Cell(20,5,"",1,0,'L');
        $this->Ln();
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->SetFont('Times','',8);
        $this->Cell(67,5," a. 1 Permukaan",1,0,'L');
        
        if (mysqli_num_rows($execute1) > 0) {
            while ($data1=mysqli_fetch_assoc($execute1)) {
                $TK2_1_UMUM+=$data1['ip1'];
            }
                $this->Cell(13,5, number_format($TK2_1_UMUM),1,0,'C');
        }else{
            $this->Cell(13,5, $TK2_1_UMUM,1,0,'C');
        }
        if (mysqli_num_rows($execute2) > 0) {
            while ($data2=mysqli_fetch_assoc($execute2)) {
                $TK2_1_BPJS+=$data2['ip1'];
            }
                $this->Cell(13,5, number_format($TK2_1_BPJS),1,0,'C');
        }else{
            $this->Cell(13,5, $TK2_1_BPJS,1,0,'C');
        }
        if (mysqli_num_rows($execute3) > 0) {
            while ($data3=mysqli_fetch_assoc($execute3)) {
                $TK2_1_GRATIS+=$data3['ip1'];
            }
                $this->Cell(17,5, number_format($TK2_1_GRATIS),1,0,'C');
        }else{
            $this->Cell(17,5, $TK2_1_GRATIS,1,0,'C');
        }
        $this->Cell(20,5, number_format($TK2_1_GRATIS+$TK2_1_UMUM+$TK2_1_BPJS),1,0,'C');




//////////////////////////////////////////////////////////////////////////////////////
        $this->Ln();
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->SetFont('Times','',8);
        $this->Cell(67,5," b. Lebih dari 1 Permukaan",1,0,'L');
        
        if (mysqli_num_rows($execute1) > 0) {
            while ($data4=mysqli_fetch_assoc($execute4)) {
                $TK2_2_UMUM+=$data4['ip2'];
            }
                $this->Cell(13,5, number_format($TK2_2_UMUM),1,0,'C');
        }else{
            $this->Cell(13,5, $TK2_2_UMUM,1,0,'C');
        }
        if (mysqli_num_rows($execute2) > 0) {
            while ($data5=mysqli_fetch_assoc($execute5)) {
                $TK2_2_BPJS+=$data5['ip2'];
            }
                $this->Cell(13,5, number_format($TK2_2_BPJS),1,0,'C');
        }else{
            $this->Cell(13,5, $TK2_2_BPJS,1,0,'C');
        }
        if (mysqli_num_rows($execute3) > 0) {
            while ($data6=mysqli_fetch_assoc($execute6)) {
                $TK2_2_GRATIS+=$data6['ip2'];
            }
                $this->Cell(17,5, number_format($TK2_2_GRATIS),1,0,'C');
        }else{
            $this->Cell(17,5, $TK2_2_GRATIS,1,0,'C');
        }
        $this->Cell(20,5, number_format($TK2_2_GRATIS+$TK2_2_UMUM+$TK2_2_BPJS),1,0,'C');



//////////////////////////////////////////////////////////////////////////////////////
        $this->Ln();
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->SetFont('Times','',8);
        $this->Cell(67,5," c. Poles Amalgam",1,0,'L');
        
        if (mysqli_num_rows($execute7) > 0) {
            while ($data7=mysqli_fetch_assoc($execute7)) {
                $TK2_3_UMUM+=$data7['ip3'];
            }
                $this->Cell(13,5, number_format($TK2_3_UMUM),1,0,'C');
        }else{
            $this->Cell(13,5, $TK2_3_UMUM,1,0,'C');
        }
        if (mysqli_num_rows($execute8) > 0) {
            while ($data8=mysqli_fetch_assoc($execute8)) {
                $TK2_3_BPJS+=$data8['ip3'];
            }
                $this->Cell(13,5, number_format($TK2_3_BPJS),1,0,'C');
        }else{
            $this->Cell(13,5, $TK2_3_BPJS,1,0,'C');
        }
        if (mysqli_num_rows($execute9) > 0) {
            while ($data9=mysqli_fetch_assoc($execute9)) {
                $TK2_3_GRATIS+=$data9['ip3'];
            }
                $this->Cell(17,5, number_format($TK2_3_GRATIS),1,0,'C');
        }else{
            $this->Cell(17,5, $TK2_3_GRATIS,1,0,'C');
        }
        $this->Cell(20,5, number_format($TK2_3_GRATIS+$TK2_3_UMUM+$TK2_3_BPJS),1,0,'C');




//////////////////////////////////////////////////////////////////////////////////////
        $this->Ln();
        $this->SetFont('Times','',10);
        $this->SetX(30);
        $this->Cell(10,5,"2",1,0,'C');
        $this->Cell(67,5," Tambalan Composite",1,0,'L');
        $this->Cell(13,5, "",1,0,'C');
        $this->Cell(13,5, "",1,0,'C');
        $this->Cell(17,5, "",1,0,'C');
        $this->Cell(20,5, "",1,0,'C');
        
        $this->Ln();
        $this->SetFont('Times','',8);
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->SetFont('Times','',8);
        $this->Cell(67,5," a. 1 Permukaan",1,0,'L');
        
        if (mysqli_num_rows($execute10) > 0) {
            while ($data10=mysqli_fetch_assoc($execute10)) {
                $TK2_4_UMUM+=$data10['ip4'];
            }
                $this->Cell(13,5, number_format($TK2_4_UMUM),1,0,'C');
        }else{
            $this->Cell(13,5, $TK2_4_UMUM,1,0,'C');
        }
        if (mysqli_num_rows($execute11) > 0) {
            while ($data11=mysqli_fetch_assoc($execute11)) {
                $TK2_4_BPJS+=$data11['ip4'];
            }
                $this->Cell(13,5, number_format($TK2_4_BPJS),1,0,'C');
        }else{
            $this->Cell(13,5, $TK2_4_BPJS,1,0,'C');
        }
        if (mysqli_num_rows($execute12) > 0) {
            while ($data12=mysqli_fetch_assoc($execute12)) {
                $TK2_4_GRATIS+=$data12['ip4'];
            }
                $this->Cell(17,5, number_format($TK2_4_GRATIS),1,0,'C');
        }else{
            $this->Cell(17,5, $TK2_4_GRATIS,1,0,'C');
        }
        $this->Cell(20,5, number_format($TK2_4_GRATIS+$TK2_4_UMUM+$TK2_4_BPJS),1,0,'C');


        $this->Ln();
        $this->SetFont('Times','',8);
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->SetFont('Times','',8);
        $this->Cell(67,5," b. Lebih dari 1 Permukaan",1,0,'L');
        
        if (mysqli_num_rows($execute13) > 0) {
            while ($data13=mysqli_fetch_assoc($execute13)) {
                $TK2_5_UMUM+=$data13['ip5'];
            }
                $this->Cell(13,5, number_format($TK2_5_UMUM),1,0,'C');
        }else{
            $this->Cell(13,5, $TK2_5_UMUM,1,0,'C');
        }
        if (mysqli_num_rows($execute14) > 0) {
            while ($data14=mysqli_fetch_assoc($execute14)) {
                $TK2_5_BPJS+=$data14['ip5'];
            }
                $this->Cell(13,5, number_format($TK2_5_BPJS),1,0,'C');
        }else{
            $this->Cell(13,5, $TK2_5_BPJS,1,0,'C');
        }
        if (mysqli_num_rows($execute15) > 0) {
            while ($data15=mysqli_fetch_assoc($execute15)) {
                $TK2_5_GRATIS+=$data15['ip5'];
            }
                $this->Cell(17,5, number_format($TK2_5_GRATIS),1,0,'C');
        }else{
            $this->Cell(17,5, $TK2_5_GRATIS,1,0,'C');
        }
        $this->Cell(20,5, number_format($TK2_5_GRATIS+$TK2_5_UMUM+$TK2_5_BPJS),1,0,'C');



//////////////////////////////////////////////////////////////////////////////////////
        $this->Ln();
        $this->SetFont('Times','',10);
        $this->SetX(30);
        $this->Cell(10,5,"3",1,0,'C');
        $this->Cell(67,5," Tambalan GIC",1,0,'L');
        $this->Cell(13,5, "",1,0,'C');
        $this->Cell(13,5, "",1,0,'C');
        $this->Cell(17,5, "",1,0,'C');
        $this->Cell(20,5, "",1,0,'C');
        
        $this->Ln();
        $this->SetFont('Times','',8);
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->SetFont('Times','',8);
        $this->Cell(67,5," a. 1 Permukaan",1,0,'L');
        
        if (mysqli_num_rows($execute16) > 0) {
            while ($data16=mysqli_fetch_assoc($execute16)) {
                $TK2_6_UMUM+=$data16['ip6'];
            }
                $this->Cell(13,5, number_format($TK2_6_UMUM),1,0,'C');
        }else{
            $this->Cell(13,5, $TK2_6_UMUM,1,0,'C');
        }
        if (mysqli_num_rows($execute17) > 0) {
            while ($data17=mysqli_fetch_assoc($execute17)) {
                $TK2_6_BPJS+=$data17['ip6'];
            }
                $this->Cell(13,5, number_format($TK2_6_BPJS),1,0,'C');
        }else{
            $this->Cell(13,5, $TK2_6_BPJS,1,0,'C');
        }
        if (mysqli_num_rows($execute18) > 0) {
            while ($data18=mysqli_fetch_assoc($execute18)) {
                $TK2_6_GRATIS+=$data18['ip6'];
            }
                $this->Cell(17,5, number_format($TK2_6_GRATIS),1,0,'C');
        }else{
            $this->Cell(17,5, $TK2_6_GRATIS,1,0,'C');
        }
        $this->Cell(20,5, number_format($TK2_6_GRATIS+$TK2_6_UMUM+$TK2_6_BPJS),1,0,'C');


        $this->Ln();
        $this->SetFont('Times','',8);
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->SetFont('Times','',8);
        $this->Cell(67,5," b. Lebih dari 1 Permukaan",1,0,'L');
        
        if (mysqli_num_rows($execute19) > 0) {
            while ($data19=mysqli_fetch_assoc($execute19)) {
                $TK2_7_UMUM+=$data19['ip7'];
            }
                $this->Cell(13,5, number_format($TK2_7_UMUM),1,0,'C');
        }else{
            $this->Cell(13,5, $TK2_7_UMUM,1,0,'C');
        }
        if (mysqli_num_rows($execute20) > 0) {
            while ($data20=mysqli_fetch_assoc($execute20)) {
                $TK2_7_BPJS+=$data20['ip7'];
            }
                $this->Cell(13,5, number_format($TK2_7_BPJS),1,0,'C');
        }else{
            $this->Cell(13,5, $TK2_7_BPJS,1,0,'C');
        }
        if (mysqli_num_rows($execute21) > 0) {
            while ($data21=mysqli_fetch_assoc($execute21)) {
                $TK2_7_GRATIS+=$data21['ip7'];
            }
                $this->Cell(17,5, number_format($TK2_7_GRATIS),1,0,'C');
        }else{
            $this->Cell(17,5, $TK2_7_GRATIS,1,0,'C');
        }
        $this->Cell(20,5, number_format($TK2_7_GRATIS+$TK2_7_UMUM+$TK2_7_BPJS),1,0,'C');


//////////////////////////////////////////////////////////////////////////////////////
        $this->Ln();
        $this->SetFont('Times','',10);
        $this->SetX(30);
        $this->Cell(10,5,"4",1,0,'C');
        $this->Cell(67,5," Tambalan Sementara",1,0,'L');
        $this->Cell(13,5, "",1,0,'C');
        $this->Cell(13,5, "",1,0,'C');
        $this->Cell(17,5, "",1,0,'C');
        $this->Cell(20,5, "",1,0,'C');
        
        $this->Ln();
        $this->SetFont('Times','',8);
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->SetFont('Times','',8);
        $this->Cell(67,5," a. Rotation of medication",1,0,'L');
        
        if (mysqli_num_rows($execute22) > 0) {
            while ($data22=mysqli_fetch_assoc($execute22)) {
                $TK2_8_UMUM+=$data22['ip8'];
            }
                $this->Cell(13,5, number_format($TK2_8_UMUM),1,0,'C');
        }else{
            $this->Cell(13,5, $TK2_8_UMUM,1,0,'C');
        }
        if (mysqli_num_rows($execute23) > 0) {
            while ($data23=mysqli_fetch_assoc($execute23)) {
                $TK2_8_BPJS+=$data23['ip8'];
            }
                $this->Cell(13,5, number_format($TK2_8_BPJS),1,0,'C');
        }else{
            $this->Cell(13,5, $TK2_8_BPJS,1,0,'C');
        }
        if (mysqli_num_rows($execute24) > 0) {
            while ($data24=mysqli_fetch_assoc($execute24)) {
                $TK2_8_GRATIS+=$data24['ip8'];
            }
                $this->Cell(17,5, number_format($TK2_8_GRATIS),1,0,'C');
        }else{
            $this->Cell(17,5, $TK2_8_GRATIS,1,0,'C');
        }
        $this->Cell(20,5, number_format($TK2_8_GRATIS+$TK2_8_UMUM+$TK2_8_BPJS),1,0,'C');


        $this->Ln();
        $this->SetFont('Times','',8);
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->SetFont('Times','',8);
        $this->Cell(67,5," b. Direct/ Indirect Pulp Capping",1,0,'L');
        
        if (mysqli_num_rows($execute25) > 0) {
            while ($data25=mysqli_fetch_assoc($execute25)) {
                $TK2_9_UMUM+=$data25['ip9'];
            }
                $this->Cell(13,5, number_format($TK2_9_UMUM),1,0,'C');
        }else{
            $this->Cell(13,5, $TK2_9_UMUM,1,0,'C');
        }
        if (mysqli_num_rows($execute26) > 0) {
            while ($data26=mysqli_fetch_assoc($execute26)) {
                $TK2_9_BPJS+=$data26['ip9'];
            }
                $this->Cell(13,5, number_format($TK2_9_BPJS),1,0,'C');
        }else{
            $this->Cell(13,5, $TK2_9_BPJS,1,0,'C');
        }
        if (mysqli_num_rows($execute27) > 0) {
            while ($data27=mysqli_fetch_assoc($execute27)) {
                $TK2_9_GRATIS+=$data27['ip9'];
            }
                $this->Cell(17,5, number_format($TK2_9_GRATIS),1,0,'C');
        }else{
            $this->Cell(17,5, $TK2_9_GRATIS,1,0,'C');
        }
        $this->Cell(20,5, number_format($TK2_9_GRATIS+$TK2_9_UMUM+$TK2_9_BPJS),1,0,'C');


//////////////////////////////////////////////////////////////////////////////////////
        $this->Ln();
        $this->SetFont('Times','',10);
        $this->SetX(30);
        $this->Cell(10,5,"5",1,0,'C');
        $this->Cell(67,5," Devitalisasi",1,0,'L');
        $this->SetFont('Times','',8);
         if (mysqli_num_rows($execute28) > 0) {
            while ($data28=mysqli_fetch_assoc($execute28)) {
                $TK2_10_UMUM+=$data28['ip10'];
            }
                $this->Cell(13,5, number_format($TK2_10_UMUM),1,0,'C');
        }else{
            $this->Cell(13,5, $TK2_10_UMUM,1,0,'C');
        }
        if (mysqli_num_rows($execute29) > 0) {
            while ($data29=mysqli_fetch_assoc($execute29)) {
                $TK2_10_BPJS+=$data29['ip10'];
            }
                $this->Cell(13,5, number_format($TK2_10_BPJS),1,0,'C');
        }else{
            $this->Cell(13,5, $TK2_10_BPJS,1,0,'C');
        }
        if (mysqli_num_rows($execute30) > 0) {
            while ($data30=mysqli_fetch_assoc($execute30)) {
                $TK2_10_GRATIS+=$data30['ip10'];
            }
                $this->Cell(17,5, number_format($TK2_10_GRATIS),1,0,'C');
        }else{
            $this->Cell(17,5, $TK2_10_GRATIS,1,0,'C');
        }
        $this->Cell(20,5, number_format($TK2_10_GRATIS+$TK2_10_UMUM+$TK2_10_BPJS),1,0,'C');



//////////////////////////////////////////////////////////////////////////////////////
        $this->Ln();
        $this->SetFont('Times','',10);
        $this->SetX(30);
        $this->Cell(10,5,"6",1,0,'C');
        $this->Cell(67,5," Trepanasi",1,0,'L');
        $this->SetFont('Times','',8);
         if (mysqli_num_rows($execute31) > 0) {
            while ($data31=mysqli_fetch_assoc($execute31)) {
                $TK2_11_UMUM+=$data31['ip11'];
            }
                $this->Cell(13,5, number_format($TK2_11_UMUM),1,0,'C');
        }else{
            $this->Cell(13,5, $TK2_11_UMUM,1,0,'C');
        }
        if (mysqli_num_rows($execute32) > 0) {
            while ($data32=mysqli_fetch_assoc($execute32)) {
                $TK2_11_BPJS+=$data32['ip11'];
            }
                $this->Cell(13,5, number_format($TK2_11_BPJS),1,0,'C');
        }else{
            $this->Cell(13,5, $TK2_11_BPJS,1,0,'C');
        }
        if (mysqli_num_rows($execute33) > 0) {
            while ($data33=mysqli_fetch_assoc($execute33)) {
                $TK2_11_GRATIS+=$data33['ip11'];
            }
                $this->Cell(17,5, number_format($TK2_11_GRATIS),1,0,'C');
        }else{
            $this->Cell(17,5, $TK2_11_GRATIS,1,0,'C');
        }
        $this->Cell(20,5, number_format($TK2_11_GRATIS+$TK2_11_UMUM+$TK2_11_BPJS),1,0,'C');


//////////////////////////////////////////////////////////////////////////////////////
        $this->Ln();
        $this->SetFont('Times','',10);
        $this->SetX(30);
        $this->Cell(10,5,"7",1,0,'C');
        $this->Cell(67,5," Pengisian Kamar Pulpa",1,0,'L');
        $this->SetFont('Times','',8);
         if (mysqli_num_rows($execute34) > 0) {
            while ($data34=mysqli_fetch_assoc($execute34)) {
                $TK2_12_UMUM+=$data34['ip12'];
            }
                $this->Cell(13,5, number_format($TK2_12_UMUM),1,0,'C');
        }else{
            $this->Cell(13,5, $TK2_12_UMUM,1,0,'C');
        }
        if (mysqli_num_rows($execute35) > 0) {
            while ($data35=mysqli_fetch_assoc($execute35)) {
                $TK2_12_BPJS+=$data35['ip12'];
            }
                $this->Cell(13,5, number_format($TK2_12_BPJS),1,0,'C');
        }else{
            $this->Cell(13,5, $TK2_12_BPJS,1,0,'C');
        }
        if (mysqli_num_rows($execute36) > 0) {
            while ($data36=mysqli_fetch_assoc($execute36)) {
                $TK2_12_GRATIS+=$data36['ip12'];
            }
                $this->Cell(17,5, number_format($TK2_12_GRATIS),1,0,'C');
        }else{
            $this->Cell(17,5, $TK2_12_GRATIS,1,0,'C');
        }
        $this->Cell(20,5, number_format($TK2_12_GRATIS+$TK2_12_UMUM+$TK2_12_BPJS),1,0,'C');

//////////////////////////////////////////////////////////////////////////////////////
        $this->Ln();
        $this->SetFont('Times','',10);
        $this->SetX(30);
        $this->Cell(10,5,"8",1,0,'C');
        $this->Cell(67,5," Perawatan endodontik/ saluran akar",1,0,'L');
        $this->Cell(13,5," ",1,0,'L');
        $this->Cell(13,5," ",1,0,'L');
        $this->Cell(17,5," ",1,0,'L');
        $this->Cell(20,5," ",1,0,'L');

        $this->Ln();
        $this->SetFont('Times','',10);
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->Cell(67,5,"a. Rotation of medication",1,0,'L');
         if (mysqli_num_rows($execute37) > 0) {
            while ($data37=mysqli_fetch_assoc($execute37)) {
                $TK2_13_UMUM+=$data37['ip13'];
            }
                $this->Cell(13,5, number_format($TK2_13_UMUM),1,0,'C');
        }else{
            $this->Cell(13,5, $TK2_13_UMUM,1,0,'C');
        }
        if (mysqli_num_rows($execute38) > 0) {
            while ($data38=mysqli_fetch_assoc($execute38)) {
                $TK2_13_BPJS+=$data38['ip13'];
            }
                $this->Cell(13,5, number_format($TK2_13_BPJS),1,0,'C');
        }else{
            $this->Cell(13,5, $TK2_13_BPJS,1,0,'C');
        }
        if (mysqli_num_rows($execute39) > 0) {
            while ($data39=mysqli_fetch_assoc($execute39)) {
                $TK2_13_GRATIS+=$data39['ip13'];
            }
                $this->Cell(17,5, number_format($TK2_13_GRATIS),1,0,'C');
        }else{
            $this->Cell(17,5, $TK2_13_GRATIS,1,0,'C');
        }
        $this->Cell(20,5, number_format($TK2_13_GRATIS+$TK2_13_UMUM+$TK2_13_BPJS),1,0,'C');


        $this->Ln();
        $this->SetFont('Times','',10);
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->Cell(67,5," 


            ",1,0,'L');
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
                $TK2_14_UMUM+=$data40['ip14'];
            }
                $this->Cell(13,5, number_format($TK2_14_UMUM),1,0,'C');
        }else{
            $this->Cell(13,5, $TK2_14_UMUM,1,0,'C');
        }
        if (mysqli_num_rows($execute41) > 0) {
            while ($data41=mysqli_fetch_assoc($execute41)) {
                $TK2_14_BPJS+=$data41['ip14'];
            }
                $this->Cell(13,5, number_format($TK2_14_BPJS),1,0,'C');
        }else{
            $this->Cell(13,5, $TK2_14_BPJS,1,0,'C');
        }
        if (mysqli_num_rows($execute42) > 0) {
            while ($data42=mysqli_fetch_assoc($execute42)) {
                $TK2_14_GRATIS+=$data42['ip14'];
            }
                $this->Cell(17,5, number_format($TK2_14_GRATIS),1,0,'C');
        }else{
            $this->Cell(17,5, $TK2_14_GRATIS,1,0,'C');
        }
        $this->Cell(20,5, number_format($TK2_14_GRATIS+$TK2_14_UMUM+$TK2_14_BPJS),1,0,'C');


///////////////////////////////////////////////////////////        
        $this->Ln();
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->Cell(67,5,"Pasien Lama",1,0,'L');
        if (mysqli_num_rows($execute43) > 0) {
            while ($data43=mysqli_fetch_assoc($execute43)) {
                $TK2_15_UMUM+=$data43['ip15'];
            }
                $this->Cell(13,5, number_format($TK2_15_UMUM),1,0,'C');
        }else{
            $this->Cell(13,5, $TK2_15_UMUM,1,0,'C');
        }
        if (mysqli_num_rows($execute44) > 0) {
            while ($data44=mysqli_fetch_assoc($execute44)) {
                $TK2_15_BPJS+=$data44['ip15'];
            }
                $this->Cell(13,5, number_format($TK2_15_BPJS),1,0,'C');
        }else{
            $this->Cell(13,5, $TK2_15_BPJS,1,0,'C');
        }
        if (mysqli_num_rows($execute45) > 0) {
            while ($data45=mysqli_fetch_assoc($execute45)) {
                $TK2_15_GRATIS+=$data45['ip15'];
            }
                $this->Cell(17,5, number_format($TK2_15_GRATIS),1,0,'C');
        }else{
            $this->Cell(17,5, $TK2_15_GRATIS,1,0,'C');
        }
        $this->Cell(20,5, number_format($TK2_15_GRATIS+$TK2_15_UMUM+$TK2_15_BPJS),1,0,'C');

/////////////////////////////////////////////////////////
        $this->Ln();
        $this->SetFont('Times','B',10);
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'L');
        $this->Cell(67,5,"Jumlah Kunjungan",1,0,'C');
        $this->Cell(13,5, number_format($TK2_14_UMUM+$TK2_15_UMUM),1,0,'C');
        $this->Cell(13,5, number_format($TK2_14_BPJS+$TK2_15_BPJS),1,0,'C');
        $this->Cell(17,5, number_format($TK2_14_GRATIS+$TK2_15_GRATIS),1,0,'C');
        $this->Cell(20,5, number_format(($TK2_14_UMUM+$TK2_14_BPJS+$TK2_14_GRATIS)+($TK2_15_UMUM+$TK2_15_BPJS+$TK2_15_GRATIS)),1,0,'C');
?>