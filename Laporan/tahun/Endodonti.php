<?php
    require 'data_endodonti.php';
$this->Ln(10);
$this->SetFont('Times','',10);       
$this->SetX(20);
        $this->Cell(35,0,"KLINIK ENDODONTI",0,0,'C');
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

//////////////////////////////////////////////////////////////////////////////////////
        $this->Ln();
        $this->SetFont('Times','',10);
        $this->SetX(30);
        $this->Cell(10,5,"1",1,0,'C');
        $this->Cell(67,5," Tambalan Amalgam",1,0,'L');
        $this->Cell(13,5,"",1,0,'C');
        $this->Cell(13,5,"",1,0,'C');
        $this->Cell(17,5,"",1,0,'C');
        $this->Cell(20,5,"",1,0,'C');

        $this->Ln();
        $this->SetFont('Times','',8);
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->Cell(67,5,"a. 1 Permukaan",1,0,'L');
        $this->Cell(13,5, number_format($total1Umum),1,0,'C');
        $this->Cell(13,5, number_format($total1BPJS),1,0,'C');
        $this->Cell(17,5, number_format($total1Gratis),1,0,'C');
        $this->Cell(20,5, number_format($total1Umum+$total1Gratis+$total1BPJS),1,0,'C');

        $this->Ln();
        $this->SetFont('Times','',8);
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->Cell(67,5,"b. Lebih dari 1 Permukaan",1,0,'L');
        $this->Cell(13,5, number_format($total2Umum),1,0,'C');
        $this->Cell(13,5, number_format($total2BPJS),1,0,'C');
        $this->Cell(17,5, number_format($total2Gratis),1,0,'C');
        $this->Cell(20,5, number_format($total2Umum+$total2Gratis+$total2BPJS),1,0,'C');

        $this->Ln();
        $this->SetFont('Times','',8);
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->Cell(67,5,"c. Poles Amalgam",1,0,'L');
        $this->Cell(13,5, number_format($total3Umum),1,0,'C');
        $this->Cell(13,5, number_format($total3BPJS),1,0,'C');
        $this->Cell(17,5, number_format($total3Gratis),1,0,'C');
        $this->Cell(20,5, number_format($total3Umum+$total3Gratis+$total3BPJS),1,0,'C');

        $this->Ln();
        $this->SetFont('Times','',8);
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->Cell(67,5,"d. Kompleks",1,0,'L');
        $this->Cell(13,5, number_format($total4Umum),1,0,'C');
        $this->Cell(13,5, number_format($total4BPJS),1,0,'C');
        $this->Cell(17,5, number_format($total4Gratis),1,0,'C');
        $this->Cell(20,5, number_format($total4Umum+$total4Gratis+$total4BPJS),1,0,'C');
        





//////////////////////////////////////////////////////////////////////////////////////
        $this->Ln();
        $this->SetFont('Times','',10);
        $this->SetX(30);
        $this->Cell(10,5,"2",1,0,'C');
        $this->Cell(67,5," Tambalan Composite",1,0,'L');
        $this->Cell(13,5,"",1,0,'C');
        $this->Cell(13,5,"",1,0,'C');
        $this->Cell(17,5,"",1,0,'C');
        $this->Cell(20,5,"",1,0,'C');

        $this->Ln();
        $this->SetFont('Times','',8);
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->Cell(67,5,"a. 1 Permukaan",1,0,'L');
        $this->Cell(13,5, number_format($total5Umum),1,0,'C');
        $this->Cell(13,5, number_format($total5BPJS),1,0,'C');
        $this->Cell(17,5, number_format($total5Gratis),1,0,'C');
        $this->Cell(20,5, number_format($total5Umum+$total5Gratis+$total5BPJS),1,0,'C');

        $this->Ln();
        $this->SetFont('Times','',8);
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->Cell(67,5,"b. Lebih dari 1 Permukaan",1,0,'L');
        $this->Cell(13,5, number_format($total6Umum),1,0,'C');
        $this->Cell(13,5, number_format($total6BPJS),1,0,'C');
        $this->Cell(17,5, number_format($total6Gratis),1,0,'C');
        $this->Cell(20,5, number_format($total6Umum+$total6Gratis+$total6BPJS),1,0,'C');

        $this->Ln();
        $this->SetFont('Times','',8);
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->Cell(67,5,"c. Penambahan Pin",1,0,'L');
        $this->Cell(13,5, number_format($total7Umum),1,0,'C');
        $this->Cell(13,5, number_format($total7BPJS),1,0,'C');
        $this->Cell(17,5, number_format($total7Gratis),1,0,'C');
        $this->Cell(20,5, number_format($total7Umum+$total7Gratis+$total7BPJS),1,0,'C');

        $this->Ln();
        $this->SetFont('Times','',8);
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->Cell(67,5,"d. Kompleks",1,0,'L');
        $this->Cell(13,5, number_format($total8Umum),1,0,'C');
        $this->Cell(13,5, number_format($total8BPJS),1,0,'C');
        $this->Cell(17,5, number_format($total8Gratis),1,0,'C');
        $this->Cell(20,5, number_format($total8Umum+$total8Gratis+$total8BPJS),1,0,'C');






//////////////////////////////////////////////////////////////////////////////////////
        $this->Ln();
        $this->SetFont('Times','',10);
        $this->SetX(30);
        $this->Cell(10,5,"3",1,0,'C');
        $this->Cell(67,5," Tambalan GIC",1,0,'L');
        $this->Cell(13,5,"",1,0,'C');
        $this->Cell(13,5,"",1,0,'C');
        $this->Cell(17,5,"",1,0,'C');
        $this->Cell(20,5,"",1,0,'C');

        $this->Ln();
        $this->SetFont('Times','',8);
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->Cell(67,5,"a. 1 Permukaan",1,0,'L');
        $this->Cell(13,5, number_format($total9Umum),1,0,'C');
        $this->Cell(13,5, number_format($total9BPJS),1,0,'C');
        $this->Cell(17,5, number_format($total9Gratis),1,0,'C');
        $this->Cell(20,5, number_format($total9Umum+$total9Gratis+$total9BPJS),1,0,'C');

        $this->Ln();
        $this->SetFont('Times','',8);
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->Cell(67,5,"b. Lebih dari 1 Permukaan",1,0,'L');
        $this->Cell(13,5, number_format($total10Umum),1,0,'C');
        $this->Cell(13,5, number_format($total10BPJS),1,0,'C');
        $this->Cell(17,5, number_format($total10Gratis),1,0,'C');
        $this->Cell(20,5, number_format($total10Umum+$total10Gratis+$total10BPJS),1,0,'C');

        $this->Ln();
        $this->SetFont('Times','',8);
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->Cell(67,5,"c. Kompleks",1,0,'L');
        $this->Cell(13,5, number_format($total11Umum),1,0,'C');
        $this->Cell(13,5, number_format($total11BPJS),1,0,'C');
        $this->Cell(17,5, number_format($total11Gratis),1,0,'C');
        $this->Cell(20,5, number_format($total11Umum+$total11Gratis+$total11BPJS),1,0,'C');






//////////////////////////////////////////////////////////////////////////////////////
        $this->Ln();
        $this->SetFont('Times','',8);
        $this->SetX(30);
        $this->Cell(10,5,"4",1,0,'C');
        $this->Cell(67,5," Tambalan Sementara",1,0,'L');
        $this->Cell(13,5,"",1,0,'C');
        $this->Cell(13,5,"",1,0,'C');
        $this->Cell(17,5,"",1,0,'C');
        $this->Cell(20,5,"",1,0,'C');

        $this->Ln();
        $this->SetFont('Times','',8);
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->Cell(67,5,"a. Rotation Of Medication",1,0,'L');
        $this->Cell(13,5, number_format($total12Umum),1,0,'C');
        $this->Cell(13,5, number_format($total12BPJS),1,0,'C');
        $this->Cell(17,5, number_format($total12Gratis),1,0,'C');
        $this->Cell(20,5, number_format($total12Umum+$total12Gratis+$total12BPJS),1,0,'C');

        $this->Ln();
        $this->SetFont('Times','',8);
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->Cell(67,5,"b. Direct/ Indirect Pulp Capping",1,0,'L');
        $this->Cell(13,5, number_format($total13Umum),1,0,'C');
        $this->Cell(13,5, number_format($total13BPJS),1,0,'C');
        $this->Cell(17,5, number_format($total13Gratis),1,0,'C');
        $this->Cell(20,5, number_format($total13Umum+$total13Gratis+$total13BPJS),1,0,'C');






//////////////////////////////////////////////////////////////////////////////////////
        $this->Ln();
        $this->SetFont('Times','',8);
        $this->SetX(30);
        $this->Cell(10,5,"5",1,0,'C');
        $this->Cell(67,5," Devitalisasi",1,0,'L');
        $this->Cell(13,5, number_format($total14Umum),1,0,'C');
        $this->Cell(13,5, number_format($total14BPJS),1,0,'C');
        $this->Cell(17,5, number_format($total14Gratis),1,0,'C');
        $this->Cell(20,5, number_format($total14Umum+$total14Gratis+$total14BPJS),1,0,'C');






//////////////////////////////////////////////////////////////////////////////////////
        $this->Ln();
        $this->SetFont('Times','',8);
        $this->SetX(30);
        $this->Cell(10,5,"6",1,0,'C');
        $this->Cell(67,5," Trepanasi",1,0,'L');
        $this->Cell(13,5, number_format($total15Umum),1,0,'C');
        $this->Cell(13,5, number_format($total15BPJS),1,0,'C');
        $this->Cell(17,5, number_format($total15Gratis),1,0,'C');
        $this->Cell(20,5, number_format($total15Umum+$total15Gratis+$total15BPJS),1,0,'C');







//////////////////////////////////////////////////////////////////////////////////////
        $this->Ln();
        $this->SetFont('Times','',8);
        $this->SetX(30);
        $this->Cell(10,5,"7",1,0,'C');
        $this->Cell(67,5," Pengisian Kamar Pulpa",1,0,'L');
        $this->Cell(13,5, number_format($total16Umum),1,0,'C');
        $this->Cell(13,5, number_format($total16BPJS),1,0,'C');
        $this->Cell(17,5, number_format($total16Gratis),1,0,'C');
        $this->Cell(20,5, number_format($total16Umum+$total16Gratis+$total16BPJS),1,0,'C');







//////////////////////////////////////////////////////////////////////////////////////
        $this->Ln();
        $this->SetFont('Times','',10);
        $this->SetX(30);
        $this->Cell(10,5,"8",1,0,'C');
        $this->Cell(67,5," Perawatan Saluran Akar",1,0,'L');
        $this->Cell(13,5,"",1,0,'C');
        $this->Cell(13,5,"",1,0,'C');
        $this->Cell(17,5,"",1,0,'C');
        $this->Cell(20,5,"",1,0,'C');

        $this->Ln();
        $this->SetFont('Times','',8);
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->Cell(67,5,"a. Reaming/Filling",1,0,'L');
        $this->Cell(13,5, number_format($total17Umum),1,0,'C');
        $this->Cell(13,5, number_format($total17BPJS),1,0,'C');
        $this->Cell(17,5, number_format($total17Gratis),1,0,'C');
        $this->Cell(20,5, number_format($total17Umum+$total17Gratis+$total17BPJS),1,0,'C');

        $this->Ln();
        $this->SetFont('Times','',8);
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->Cell(67,5,"b. Protation Of Medication",1,0,'L');
        $this->Cell(13,5, number_format($total18Umum),1,0,'C');
        $this->Cell(13,5, number_format($total18BPJS),1,0,'C');
        $this->Cell(17,5, number_format($total18Gratis),1,0,'C');
        $this->Cell(20,5, number_format($total18Umum+$total18Gratis+$total18BPJS),1,0,'C');

        $this->Ln();
        $this->SetFont('Times','',8);
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->Cell(67,5,"c. Pengisian Saluran Akar Simple",1,0,'L');
        $this->Cell(13,5, number_format($total19Umum),1,0,'C');
        $this->Cell(13,5, number_format($total19BPJS),1,0,'C');
        $this->Cell(17,5, number_format($total19Gratis),1,0,'C');
        $this->Cell(20,5, number_format($total19Umum+$total19Gratis+$total19BPJS),1,0,'C');

        $this->Ln();
        $this->SetFont('Times','',8);
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->Cell(67,5,"d. Pengisian Saluran Akar Kompleks",1,0,'L');
        $this->Cell(13,5, number_format($total20Umum),1,0,'C');
        $this->Cell(13,5, number_format($total20BPJS),1,0,'C');
        $this->Cell(17,5, number_format($total20Gratis),1,0,'C');
        $this->Cell(20,5, number_format($total20Umum+$total1Gratis+$total20BPJS),1,0,'C');








//////////////////////////////////////////////////////////////////////////////////////
        $this->Ln();
        $this->SetFont('Times','',8);
        $this->SetX(30);
        $this->Cell(10,5,"9",1,0,'C');
        $this->Cell(67,5," Anasthesi Lokal Pada Tindakan Konservasi",1,0,'L');
        $this->Cell(13,5, number_format($total21Umum),1,0,'C');
        $this->Cell(13,5, number_format($total21BPJS),1,0,'C');
        $this->Cell(17,5, number_format($total21Gratis),1,0,'C');
        $this->Cell(20,5, number_format($total21Umum+$total21Gratis+$total21BPJS),1,0,'C');







//////////////////////////////////////////////////////////////////////////////////////
        $this->Ln();
        $this->SetFont('Times','',8);
        $this->SetX(30);
        $this->Cell(10,5,"10",1,0,'C');
        $this->Cell(67,5," Kontrol",1,0,'L');
        $this->Cell(13,5, number_format($total22Umum),1,0,'C');
        $this->Cell(13,5, number_format($total22BPJS),1,0,'C');
        $this->Cell(17,5, number_format($total22Gratis),1,0,'C');
        $this->Cell(20,5, number_format($total22Umum+$total22Gratis+$total22BPJS),1,0,'C');







//////////////////////////////////////////////////////////////////////////////////////
        $this->Ln();
        $this->SetFont('Times','',8);
        $this->SetX(30);
        $this->Cell(10,5,"11",1,0,'C');
        $this->Cell(67,5," One visit endodontic",1,0,'L');
        $this->Cell(13,5,"",1,0,'C');
        $this->Cell(13,5,"",1,0,'C');
        $this->Cell(17,5,"",1,0,'C');
        $this->Cell(20,5,"",1,0,'C');

        $this->Ln();
        $this->SetFont('Times','',8);
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->Cell(67,5,"a. Akar Tunggal",1,0,'L');
        $this->Cell(13,5, number_format($total23Umum),1,0,'C');
        $this->Cell(13,5, number_format($total23BPJS),1,0,'C');
        $this->Cell(17,5, number_format($total23Gratis),1,0,'C');
        $this->Cell(20,5, number_format($total23Umum+$total23Gratis+$total23BPJS),1,0,'C');

        $this->Ln();
        $this->SetFont('Times','',8);
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->Cell(67,5,"b. Akar Jamak",1,0,'L');
        $this->Cell(13,5, number_format($total24Umum),1,0,'C');
        $this->Cell(13,5, number_format($total24BPJS),1,0,'C');
        $this->Cell(17,5, number_format($total24Gratis),1,0,'C');
        $this->Cell(20,5, number_format($total24Umum+$total24Gratis+$total24BPJS),1,0,'C');








//////////////////////////////////////////////////////////////////////////////////////
        $this->Ln();
        $this->SetFont('Times','',8);
        $this->SetX(30);
        $this->Cell(10,5,"12",1,0,'C');
        $this->Cell(67,5," Bleaching",1,0,'L');
        $this->Cell(13,5,"",1,0,'C');
        $this->Cell(13,5,"",1,0,'C');
        $this->Cell(17,5,"",1,0,'C');
        $this->Cell(20,5,"",1,0,'C');

        $this->Ln();
        $this->SetFont('Times','',8);
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->Cell(67,5,"a. Intra coronal",1,0,'L');
        $this->Cell(13,5, number_format($total25Umum),1,0,'C');
        $this->Cell(13,5, number_format($total25BPJS),1,0,'C');
        $this->Cell(17,5, number_format($total25Gratis),1,0,'C');
        $this->Cell(20,5, number_format($total25Umum+$total25Gratis+$total25BPJS),1,0,'C');

        $this->Ln();
        $this->SetFont('Times','',8);
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->Cell(67,5,"b. Ekstra coronal",1,0,'L');
        $this->Cell(13,5, number_format($total26Umum),1,0,'C');
        $this->Cell(13,5, number_format($total26BPJS),1,0,'C');
        $this->Cell(17,5, number_format($total26Gratis),1,0,'C');
        $this->Cell(20,5, number_format($total26Umum+$total26Gratis+$total26BPJS),1,0,'C');







//////////////////////////////////////////////////////////////////////////////////////
        $this->Ln();
        $this->SetFont('Times','',8);
        $this->SetX(30);
        $this->Cell(10,5,"13",1,0,'C');
        $this->Cell(67,5," Inlay/Onlay/Uplay",1,0,'L');
        $this->Cell(13,5,"",1,0,'C');
        $this->Cell(13,5,"",1,0,'C');
        $this->Cell(17,5,"",1,0,'C');
        $this->Cell(20,5,"",1,0,'C');

        $this->Ln();
        $this->SetFont('Times','',8);
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->Cell(67,5,"a. Logam",1,0,'L');
        $this->Cell(13,5, number_format($total27Umum),1,0,'C');
        $this->Cell(13,5, number_format($total27BPJS),1,0,'C');
        $this->Cell(17,5, number_format($total27Gratis),1,0,'C');
        $this->Cell(20,5, number_format($total27Umum+$total27Gratis+$total27BPJS),1,0,'C');

        $this->Ln();
        $this->SetFont('Times','',8);
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->Cell(67,5,"b. Porslen",1,0,'L');
        $this->Cell(13,5, number_format($total28Umum),1,0,'C');
        $this->Cell(13,5, number_format($total28BPJS),1,0,'C');
        $this->Cell(17,5, number_format($total28Gratis),1,0,'C');
        $this->Cell(20,5, number_format($total28Umum+$total28Gratis+$total28BPJS),1,0,'C');







//////////////////////////////////////////////////////////////////////////////////////
        $this->Ln();
        $this->SetFont('Times','',10);
        $this->SetX(30);
        $this->Cell(10,5,"14",1,0,'C');
        $this->Cell(67,5," Dowel/Pasak",1,0,'L');
        $this->Cell(13,5,"",1,0,'C');
        $this->Cell(13,5,"",1,0,'C');
        $this->Cell(17,5,"",1,0,'C');
        $this->Cell(20,5,"",1,0,'C');

        $this->Ln();
        $this->SetFont('Times','',8);
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->Cell(67,5,"a. Cor",1,0,'L');
        $this->Cell(13,5, number_format($total29Umum),1,0,'C');
        $this->Cell(13,5, number_format($total29BPJS),1,0,'C');
        $this->Cell(17,5, number_format($total29Gratis),1,0,'C');
        $this->Cell(20,5, number_format($total29Umum+$total29Gratis+$total29BPJS),1,0,'C');

        $this->Ln();
        $this->SetFont('Times','',8);
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->Cell(67,5,"b. Pasak Siap Pakai",1,0,'L');
        $this->Cell(13,5, number_format($total30Umum),1,0,'C');
        $this->Cell(13,5, number_format($total30BPJS),1,0,'C');
        $this->Cell(17,5, number_format($total30Gratis),1,0,'C');
        $this->Cell(20,5, number_format($total30Umum+$total30Gratis+$total30BPJS),1,0,'C');

        $this->Ln();
        $this->SetFont('Times','',8);
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->Cell(67,5,"c. Pasak Serat",1,0,'L');
        $this->Cell(13,5, number_format($total31Umum),1,0,'C');
        $this->Cell(13,5, number_format($total31BPJS),1,0,'C');
        $this->Cell(17,5, number_format($total31Gratis),1,0,'C');
        $this->Cell(20,5, number_format($total31Umum+$total31Gratis+$total31BPJS),1,0,'C');







//////////////////////////////////////////////////////////////////////////////////////
        $this->Ln();
        $this->SetFont('Times','',8);
        $this->SetX(30);
        $this->Cell(10,5,"15",1,0,'C');
        $this->Cell(67,5," Acrylic Jacket",1,0,'L');
        $this->Cell(13,5, number_format($total32Umum),1,0,'C');
        $this->Cell(13,5, number_format($total32BPJS),1,0,'C');
        $this->Cell(17,5, number_format($total32Gratis),1,0,'C');
        $this->Cell(20,5, number_format($total32Umum+$total32Gratis+$total32BPJS),1,0,'C');







//////////////////////////////////////////////////////////////////////////////////////
        $this->Ln();
        $this->SetFont('Times','',8);
        $this->SetX(30);
        $this->Cell(10,5,"16",1,0,'C');
        $this->Cell(67,5," Porcelain",1,0,'L');
        $this->Cell(13,5,"",1,0,'C');
        $this->Cell(13,5,"",1,0,'C');
        $this->Cell(17,5,"",1,0,'C');
        $this->Cell(20,5,"",1,0,'C');

        $this->Ln();
        $this->SetFont('Times','',8);
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->Cell(67,5,"a. jacket metal porcelain",1,0,'L');
        $this->Cell(13,5, number_format($total33Umum),1,0,'C');
        $this->Cell(13,5, number_format($total33BPJS),1,0,'C');
        $this->Cell(17,5, number_format($total33Gratis),1,0,'C');
        $this->Cell(20,5, number_format($total33Umum+$total33Gratis+$total33BPJS),1,0,'C');

        $this->Ln();
        $this->SetFont('Times','',8);
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->Cell(67,5,"b. jacket all porcelain",1,0,'L');
        $this->Cell(13,5, number_format($total34Umum),1,0,'C');
        $this->Cell(13,5, number_format($total34BPJS),1,0,'C');
        $this->Cell(17,5, number_format($total34Gratis),1,0,'C');
        $this->Cell(20,5, number_format($total34Umum+$total34Gratis+$total34BPJS),1,0,'C');

$this->Ln(20);
$this->SetFont('Times','',10);       
$this->SetX(20);
        $this->Cell(35,0,"KLINIK ENDODONTI",0,0,'C');
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
//////////////////////////////////////////////////////////////////////////////////////
        $this->Ln();
        $this->SetFont('Times','',8);
        $this->SetX(30);
        $this->Cell(10,5,"17",1,0,'C');
        $this->Cell(67,5," Crown n Bridge",1,0,'L');
        $this->Cell(13,5,"",1,0,'C');
        $this->Cell(13,5,"",1,0,'C');
        $this->Cell(17,5,"",1,0,'C');
        $this->Cell(20,5,"",1,0,'C');

        $this->Ln();
        $this->SetFont('Times','',8);
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->Cell(67,5,"a. Cementing CB lepasan (GI)",1,0,'L');
        $this->Cell(13,5, number_format($total35Umum),1,0,'C');
        $this->Cell(13,5, number_format($total35BPJS),1,0,'C');
        $this->Cell(17,5, number_format($total35Gratis),1,0,'C');
        $this->Cell(20,5, number_format($total35Umum+$total35Gratis+$total35BPJS),1,0,'C');

        $this->Ln();
        $this->SetFont('Times','',8);
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->Cell(67,5,"b. Cementing CB lepasan (Resin)",1,0,'L');
        $this->Cell(13,5, number_format($total36Umum),1,0,'C');
        $this->Cell(13,5, number_format($total36BPJS),1,0,'C');
        $this->Cell(17,5, number_format($total36Gratis),1,0,'C');
        $this->Cell(20,5, number_format($total36Umum+$total36Gratis+$total36BPJS),1,0,'C');




//////////////////////////////////////////////////////////////////////////////////////
        $this->Ln();
        $this->SetFont('Times','',8);
        $this->SetX(30);
        $this->Cell(10,5,"18",1,0,'C');
        $this->Cell(67,5," Lain-Lain",1,0,'L');
        $this->Cell(13,5, number_format($total37Umum),1,0,'C');
        $this->Cell(13,5, number_format($total37BPJS),1,0,'C');
        $this->Cell(17,5, number_format($total37Gratis),1,0,'C');
        $this->Cell(20,5, number_format($total37Umum+$total37Gratis+$total37BPJS),1,0,'C');


//////////////////////////////////////////////////////////////////////////////////////
        $this->Ln();
        $this->SetFont('Times','',10);
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->Cell(67,5,"",1,0,'L');
        $this->Cell(13,5,"",1,0,'C');
        $this->Cell(13,5,"",1,0,'C');
        $this->Cell(17,5,"",1,0,'C');
        $this->Cell(20,5,"",1,0,'C');

        $this->Ln();
        $this->SetFont('Times','',8);
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->Cell(67,5,"Pasien Baru",1,0,'L');
        $this->Cell(13,5, number_format($total38Umum),1,0,'C');
        $this->Cell(13,5, number_format($total38BPJS),1,0,'C');
        $this->Cell(17,5, number_format($total38Gratis),1,0,'C');
        $this->Cell(20,5, number_format($total38Umum+$total38Gratis+$total38BPJS),1,0,'C');

        $this->Ln();
        $this->SetFont('Times','',8);
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->Cell(67,5,"Pasein Lama",1,0,'L');
        $this->Cell(13,5, number_format($total39Umum),1,0,'C');
        $this->Cell(13,5, number_format($total39BPJS),1,0,'C');
        $this->Cell(17,5, number_format($total39Gratis),1,0,'C');
        $this->Cell(20,5, number_format($total39Umum+$total39Gratis+$total39BPJS),1,0,'C');

        $this->Ln();
        $this->SetFont('Times','B',8);
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->Cell(67,5,"Jumlah Kunjungan",1,0,'C');
        $this->Cell(13,5, number_format($total38Umum+$total39Umum),1,0,'C');
        $this->Cell(13,5, number_format($total38BPJS+$total39BPJS),1,0,'C');
        $this->Cell(17,5, number_format($total38Gratis+$total39Gratis),1,0,'C');
        $this->Cell(20,5, number_format(($total38Umum+$total38Gratis+$total38BPJS)+($total39Umum+$total39Gratis+$total39BPJS)),1,0,'C');
?>