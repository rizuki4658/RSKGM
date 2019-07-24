<?php
    require 'data_pedodonti.php';
$this->Ln(10);
$this->SetFont('Times','',10);       
$this->SetX(20);
        $this->Cell(35,0,"KLINIK PEDODONTI",0,0,'C');
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
        $this->Cell(67,5," Pencabutan Gigi Anak",1,0,'L');
        $this->Cell(13,5, "",1,0,'C');
        $this->Cell(13,5, "",1,0,'C');
        $this->Cell(17,5, "",1,0,'C');
        $this->Cell(20,5, "",1,0,'C');

        $this->Ln();
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->SetFont('Times','',8);
        $this->Cell(67,5," a. Dengan anastesi topikal",1,0,'L');
        $this->Cell(13,5, number_format($total1Umum),1,0,'C');
        $this->Cell(13,5, number_format($total1BPJS),1,0,'C');
        $this->Cell(17,5, number_format($total1Gratis),1,0,'C');
        $this->Cell(20,5, number_format($total1Gratis+$total1Umum+$total1BPJS),1,0,'C');

        $this->Ln();
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->SetFont('Times','',8);
        $this->Cell(67,5," b. Dengan anestesi injeksi",1,0,'L');
        $this->Cell(13,5, number_format($total2Umum),1,0,'C');
        $this->Cell(13,5, number_format($total2BPJS),1,0,'C');
        $this->Cell(17,5, number_format($total2Gratis),1,0,'C');
        $this->Cell(20,5, number_format($total2Gratis+$total2Umum+$total2BPJS),1,0,'C');
        
//////////////////////////////////////////////////////////////////////////////////////
        $this->Ln();
        $this->SetFont('Times','',10);
        $this->SetX(30);
        $this->Cell(10,5,"2",1,0,'C');
        $this->Cell(67,5," Perawatan Darurat(trepanasi)",1,0,'L');
        $this->Cell(13,5, number_format($total3Umum),1,0,'C');
        $this->Cell(13,5, number_format($total3BPJS),1,0,'C');
        $this->Cell(17,5, number_format($total3Gratis),1,0,'C');
        $this->Cell(20,5, number_format($total3Umum+$total3Gratis+$total3BPJS),1,0,'C');

///////////////////////////////////////////////////////////////////////////////////////
        $this->Ln();
        $this->SetFont('Times','',10);
        $this->SetX(30);
        $this->Cell(10,5,"3",1,0,'C');
        $this->Cell(67,5," Tambalan Sementara",1,0,'L');
        $this->Cell(13,5, "",1,0,'C');
        $this->Cell(13,5, "",1,0,'C');
        $this->Cell(17,5, "",1,0,'C');
        $this->Cell(20,5, "",1,0,'C');


        $this->Ln();
        $this->SetFont('Times','',8);
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->Cell(67,5,"a. Rotation Of Medication",1,0,'L');
        $this->Cell(13,5, number_format($total4Umum),1,0,'C');
        $this->Cell(13,5, number_format($total4BPJS),1,0,'C');
        $this->Cell(17,5, number_format($total4Gratis),1,0,'C');
        $this->Cell(20,5, number_format($total4Umum+$total4Gratis+$total4BPJS),1,0,'C');

        $this->Ln();
        $this->SetFont('Times','',8);
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->Cell(67,5,"b. Direct/Indirect Pulp Clapping",1,0,'L');
        $this->Cell(13,5, number_format($total5Umum),1,0,'C');
        $this->Cell(13,5, number_format($total5BPJS),1,0,'C');
        $this->Cell(17,5, number_format($total5Gratis),1,0,'C');
        $this->Cell(20,5, number_format($total5Umum+$total5Gratis+$total5BPJS),1,0,'C');


        $this->Ln();
        $this->SetFont('Times','',8);
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->Cell(67,5,"c. Devitalisasi",1,0,'L');
        $this->Cell(13,5, number_format($total6Umum),1,0,'C');
        $this->Cell(13,5, number_format($total6BPJS),1,0,'C');
        $this->Cell(17,5, number_format($total6Gratis),1,0,'C');
        $this->Cell(20,5, number_format($total6Umum+$total6Gratis+$total6BPJS),1,0,'C');


        $this->Ln();
        $this->SetFont('Times','',8);
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->Cell(67,5,"d. Pengisian kamar pulpa",1,0,'L');
        $this->Cell(13,5, number_format($total7Umum),1,0,'C');
        $this->Cell(13,5, number_format($total7BPJS),1,0,'C');
        $this->Cell(17,5, number_format($total7Gratis),1,0,'C');
        $this->Cell(20,5, number_format($total7Umum+$total7Gratis+$total7BPJS),1,0,'C');

//////////////////////////////////////////////////////////////////////////////////////
        $this->Ln();
        $this->SetFont('Times','',10);
        $this->SetX(30);
        $this->Cell(10,5,"4",1,0,'C');
        $this->Cell(67,5," One Visit Endodontic",1,0,'L');
        $this->Cell(13,5, number_format($total8Umum),1,0,'C');
        $this->Cell(13,5, number_format($total8BPJS),1,0,'C');
        $this->Cell(17,5, number_format($total8Gratis),1,0,'C');
        $this->Cell(20,5, number_format($total8Umum+$total8Gratis+$total8BPJS),1,0,'C');

///////////////////////////////////////////////////////////////////////////////////////
        $this->Ln();
        $this->SetFont('Times','',10);
        $this->SetX(30);
        $this->Cell(10,5,"5",1,0,'C');
        $this->Cell(67,5," Tambalan Amalgam",1,0,'L');
        $this->Cell(13,5, "",1,0,'C');
        $this->Cell(13,5, "",1,0,'C');
        $this->Cell(17,5, "",1,0,'C');
        $this->Cell(20,5, "",1,0,'C');


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
        $this->Cell(67,5,"c. Poles Amalgam",1,0,'L');
        $this->Cell(13,5, number_format($total11Umum),1,0,'C');
        $this->Cell(13,5, number_format($total11BPJS),1,0,'C');
        $this->Cell(17,5, number_format($total11Gratis),1,0,'C');
        $this->Cell(20,5, number_format($total11Umum+$total11Gratis+$total11BPJS),1,0,'C');

///////////////////////////////////////////////////////////////////////////////////////
        $this->Ln();
        $this->SetFont('Times','',10);
        $this->SetX(30);
        $this->Cell(10,5,"6",1,0,'C');
        $this->Cell(67,5," Tambalan Composite",1,0,'L');
        $this->Cell(13,5, "",1,0,'C');
        $this->Cell(13,5, "",1,0,'C');
        $this->Cell(17,5, "",1,0,'C');
        $this->Cell(20,5, "",1,0,'C');


        $this->Ln();
        $this->SetFont('Times','',8);
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->Cell(67,5,"a. 1 Permukaan",1,0,'L');
        $this->Cell(13,5, number_format($total12Umum),1,0,'C');
        $this->Cell(13,5, number_format($total12BPJS),1,0,'C');
        $this->Cell(17,5, number_format($total12Gratis),1,0,'C');
        $this->Cell(20,5, number_format($total12Umum+$total12Gratis+$total12BPJS),1,0,'C');

        $this->Ln();
        $this->SetFont('Times','',8);
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->Cell(67,5,"b. Lebih dari 1 Permukaan",1,0,'L');
        $this->Cell(13,5, number_format($total13Umum),1,0,'C');
        $this->Cell(13,5, number_format($total13BPJS),1,0,'C');
        $this->Cell(17,5, number_format($total13Gratis),1,0,'C');
        $this->Cell(20,5, number_format($total13Umum+$total13Gratis+$total13BPJS),1,0,'C');

///////////////////////////////////////////////////////////////////////////////////////
        $this->Ln();
        $this->SetFont('Times','',10);
        $this->SetX(30);
        $this->Cell(10,5,"7",1,0,'C');
        $this->Cell(67,5," Tambalan GIC",1,0,'L');
        $this->Cell(13,5, "",1,0,'C');
        $this->Cell(13,5, "",1,0,'C');
        $this->Cell(17,5, "",1,0,'C');
        $this->Cell(20,5, "",1,0,'C');


        $this->Ln();
        $this->SetFont('Times','',8);
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->Cell(67,5,"a. 1 Permukaan",1,0,'L');
        $this->Cell(13,5, number_format($total14Umum),1,0,'C');
        $this->Cell(13,5, number_format($total14BPJS),1,0,'C');
        $this->Cell(17,5, number_format($total14Gratis),1,0,'C');
        $this->Cell(20,5, number_format($total14Umum+$total14Gratis+$total14BPJS),1,0,'C');

        $this->Ln();
        $this->SetFont('Times','',8);
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->Cell(67,5,"b. Lebih dari 1 Permukaan",1,0,'L');
        $this->Cell(13,5, number_format($total15Umum),1,0,'C');
        $this->Cell(13,5, number_format($total15BPJS),1,0,'C');
        $this->Cell(17,5, number_format($total15Gratis),1,0,'C');
        $this->Cell(20,5, number_format($total15Umum+$total15Gratis+$total15BPJS),1,0,'C');

//////////////////////////////////////////////////////////////////////////////////////
        $this->Ln();
        $this->SetFont('Times','',10);
        $this->SetX(30);
        $this->Cell(10,5,"8",1,0,'C');
        $this->Cell(67,5," Pembersihan Plak",1,0,'L');
        $this->Cell(13,5, number_format($total16Umum),1,0,'C');
        $this->Cell(13,5, number_format($total16BPJS),1,0,'C');
        $this->Cell(17,5, number_format($total16Gratis),1,0,'C');
        $this->Cell(20,5, number_format($total16Umum+$total16Gratis+$total16BPJS),1,0,'C');


//////////////////////////////////////////////////////////////////////////////////////
        $this->Ln();
        $this->SetFont('Times','',10);
        $this->SetX(30);
        $this->Cell(10,5,"9",1,0,'C');
        $this->Cell(67,5," Topical aplikasi fluor",1,0,'L');
        $this->Cell(13,5, number_format($total17Umum),1,0,'C');
        $this->Cell(13,5, number_format($total17BPJS),1,0,'C');
        $this->Cell(17,5, number_format($total17Gratis),1,0,'C');
        $this->Cell(20,5, number_format($total17Umum+$total17Gratis+$total17BPJS),1,0,'C');
//////////////////////////////////////////////////////////////////////////////////////
        $this->Ln();
        $this->SetFont('Times','',10);
        $this->SetX(30);
        $this->Cell(10,5,"10",1,0,'C');
        $this->Cell(67,5," Fissure sealant",1,0,'L');
        $this->Cell(13,5, number_format($total18Umum),1,0,'C');
        $this->Cell(13,5, number_format($total18BPJS),1,0,'C');
        $this->Cell(17,5, number_format($total18Gratis),1,0,'C');
        $this->Cell(20,5, number_format($total18Umum+$total18Gratis+$total18BPJS),1,0,'C');
//////////////////////////////////////////////////////////////////////////////////////
        $this->Ln();
        $this->SetFont('Times','',10);
        $this->SetX(30);
        $this->Cell(10,5,"11",1,0,'C');
        $this->Cell(67,5," Space Maintainer",1,0,'L');
        $this->Cell(13,5, number_format($total19Umum),1,0,'C');
        $this->Cell(13,5, number_format($total19BPJS),1,0,'C');
        $this->Cell(17,5, number_format($total19Gratis),1,0,'C');
        $this->Cell(20,5, number_format($total19Umum+$total19Gratis+$total19BPJS),1,0,'C');
//////////////////////////////////////////////////////////////////////////////////////
        $this->Ln();
        $this->SetFont('Times','',10);
        $this->SetX(30);
        $this->Cell(10,5,"12",1,0,'C');
        $this->Cell(67,5," Space regainer",1,0,'L');
        $this->Cell(13,5, number_format($total20Umum),1,0,'C');
        $this->Cell(13,5, number_format($total20BPJS),1,0,'C');
        $this->Cell(17,5, number_format($total20Gratis),1,0,'C');
        $this->Cell(20,5, number_format($total20Umum+$total20Gratis+$total20BPJS),1,0,'C');
//////////////////////////////////////////////////////////////////////////////////////
        $this->Ln();
        $this->SetFont('Times','',10);
        $this->SetX(30);
        $this->Cell(10,5,"13",1,0,'C');
        $this->Cell(67,5," Fabricated crown",1,0,'L');
        $this->Cell(13,5, number_format($total21Umum),1,0,'C');
        $this->Cell(13,5, number_format($total21BPJS),1,0,'C');
        $this->Cell(17,5, number_format($total21Gratis),1,0,'C');
        $this->Cell(20,5, number_format($total21Umum+$total21Gratis+$total21BPJS),1,0,'C');
//////////////////////////////////////////////////////////////////////////////////////
        $this->Ln();
        $this->SetFont('Times','',10);
        $this->SetX(30);
        $this->Cell(10,5,"14",1,0,'C');
        $this->Cell(67,5," Kontrol",1,0,'L');
        $this->Cell(13,5, number_format($total22Umum),1,0,'C');
        $this->Cell(13,5, number_format($total22BPJS),1,0,'C');
        $this->Cell(17,5, number_format($total22Gratis),1,0,'C');
        $this->Cell(20,5, number_format($total22Umum+$total22Gratis+$total22BPJS),1,0,'C');
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
        $this->SetFont('Times','',10);
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->Cell(67,5," Pasien Baru",1,0,'L');
        $this->Cell(13,5, number_format($total23Umum),1,0,'C');
        $this->Cell(13,5, number_format($total23BPJS),1,0,'C');
        $this->Cell(17,5, number_format($total23Gratis),1,0,'C');
        $this->Cell(20,5, number_format($total23Umum+$total23Gratis+$total23BPJS),1,0,'C');

        $this->Ln();
        $this->SetFont('Times','',10);
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->Cell(67,5," Pasien Lama",1,0,'L');
        $this->Cell(13,5, number_format($total24Umum),1,0,'C');
        $this->Cell(13,5, number_format($total24BPJS),1,0,'C');
        $this->Cell(17,5, number_format($total24Gratis),1,0,'C');
        $this->Cell(20,5, number_format($total24Umum+$total24Gratis+$total24BPJS),1,0,'C');


/////////////////////////////////////////////////////////
        $this->Ln();
        $this->SetFont('Times','B',10);
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'L');
        $this->Cell(67,5,"Jumlah Kunjungan",1,0,'C');
        $this->Cell(13,5, number_format($total23Umum+$total24Umum),1,0,'C');
        $this->Cell(13,5, number_format($total23BPJS+$total24BPJS),1,0,'C');
        $this->Cell(17,5, number_format($total23Gratis+$total24Gratis),1,0,'C');
        $this->Cell(20,5, number_format(($total23Umum+$total23Gratis+$total23BPJS)+($total24Umum+$total24Gratis+$total24BPJS)),1,0,'C');
?>