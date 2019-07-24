<?php
    require 'data_UGD.php';
$this->Ln(10);
$this->SetFont('Times','',10);       
$this->SetX(30);
        $this->Cell(35,0,"BAGIAN UNIT GAWAT DARURAT(UGD)",0,0,'C');
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
        $this->Cell(67,5," Pemeriksaan darurat medik gigi dan mulut",1,0,'L');
        $this->Cell(13,5, number_format($total1Umum),1,0,'C');
        $this->Cell(13,5, number_format($total1BPJS),1,0,'C');
        $this->Cell(17,5, number_format($total1Gratis),1,0,'C');
        $this->Cell(20,5, number_format($total1Umum+$total1Gratis+$total1BPJS),1,0,'C');
        
//////////////////////////////////////////////////////////////////////////////////////
        $this->Ln();
        $this->SetFont('Times','',10);
        $this->SetX(30);
        $this->Cell(10,5,"2",1,0,'C');
        $this->Cell(67,5," One Day Care (observasi lebih dari 6 jam)",1,0,'L');
        $this->Cell(13,5, number_format($total2Umum),1,0,'C');
        $this->Cell(13,5, number_format($total2BPJS),1,0,'C');
        $this->Cell(17,5, number_format($total2Gratis),1,0,'C');
        $this->Cell(20,5, number_format($total2Umum+$total2Gratis+$total2BPJS),1,0,'C');

///////////////////////////////////////////////////////////////////////////////////////
        $this->Ln();
        $this->SetFont('Times','',10);
        $this->SetX(30);
        $this->Cell(10,5,"3",1,0,'C');
        $this->Cell(67,5," Debridement orafacial",1,0,'L');
        $this->Cell(13,5, "",1,0,'C');
        $this->Cell(13,5, "",1,0,'C');
        $this->Cell(17,5, "",1,0,'C');
        $this->Cell(20,5, "",1,0,'C');

        $this->Ln();
        $this->SetFont('Times','',10);
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->Cell(67,5,"a. Ringan",1,0,'L');
        $this->Cell(13,5, number_format($total3Umum),1,0,'C');
        $this->Cell(13,5, number_format($total3BPJS),1,0,'C');
        $this->Cell(17,5, number_format($total3Gratis),1,0,'C');
        $this->Cell(20,5, number_format($total3Umum+$total3Gratis+$total3BPJS),1,0,'C');

        $this->Ln();
        $this->SetFont('Times','',10);
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->Cell(67,5,"b. Sedang",1,0,'L');
        $this->Cell(13,5, number_format($total4Umum),1,0,'C');
        $this->Cell(13,5, number_format($total4BPJS),1,0,'C');
        $this->Cell(17,5, number_format($total4Gratis),1,0,'C');
        $this->Cell(20,5, number_format($total4Umum+$total4Gratis+$total4BPJS),1,0,'C');


        $this->Ln();
        $this->SetFont('Times','',10);
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->Cell(67,5,"c. Berat",1,0,'L');
        $this->Cell(13,5, number_format($total5Umum),1,0,'C');
        $this->Cell(13,5, number_format($total5BPJS),1,0,'C');
        $this->Cell(17,5, number_format($total5Gratis),1,0,'C');
        $this->Cell(20,5, number_format($total5Umum+$total5Gratis+$total5BPJS),1,0,'C');
//////////////////////////////////////////////////////////////////////////////////////
        $this->Ln();
        $this->SetFont('Times','',10);
        $this->SetX(30);
        $this->Cell(10,5,"4",1,0,'C');
        $this->Cell(67,5," Penanganan",1,0,'L');
        $this->Cell(13,5, "",1,0,'C');
        $this->Cell(13,5, "",1,0,'C');
        $this->Cell(17,5, "",1,0,'C');
        $this->Cell(20,5, "",1,0,'C');

        $this->Ln();
        $this->SetFont('Times','',10);
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->Cell(67,5,"a. Pendarahan Post ekstraksi",1,0,'L');
        $this->Cell(13,5, number_format($total6Umum),1,0,'C');
        $this->Cell(13,5, number_format($total6BPJS),1,0,'C');
        $this->Cell(17,5, number_format($total6Gratis),1,0,'C');
        $this->Cell(20,5, number_format($total6Umum+$total6Gratis+$total6BPJS),1,0,'C');

        $this->Ln();
        $this->SetFont('Times','',10);
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->Cell(67,5,"b. Hecting 1-3 jahitan",1,0,'L');
        $this->Cell(13,5, number_format($total7Umum),1,0,'C');
        $this->Cell(13,5, number_format($total7BPJS),1,0,'C');
        $this->Cell(17,5, number_format($total7Gratis),1,0,'C');
        $this->Cell(20,5, number_format($total7Umum+$total7Gratis+$total7BPJS),1,0,'C');


        $this->Ln();
        $this->SetFont('Times','',10);
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->Cell(67,5,"c. Hecting > 3 jahitan+cuttis",1,0,'L');
        $this->Cell(13,5, number_format($total8Umum),1,0,'C');
        $this->Cell(13,5, number_format($total8BPJS),1,0,'C');
        $this->Cell(17,5, number_format($total8Gratis),1,0,'C');
        $this->Cell(20,5, number_format($total8Umum+$total8Gratis+$total8BPJS),1,0,'C');
///////////////////////////////////////////////////////////////////////////////////////
        $this->Ln();
        $this->SetFont('Times','',10);
        $this->SetX(30);
        $this->Cell(10,5,"5",1,0,'C');
        $this->Cell(67,5," Ekstrasi Post Trauma",1,0,'L');
        $this->Cell(13,5, number_format($total9Umum),1,0,'C');
        $this->Cell(13,5, number_format($total9BPJS),1,0,'C');
        $this->Cell(17,5, number_format($total9Gratis),1,0,'C');
        $this->Cell(20,5, number_format($total9Umum+$total9Gratis+$total9BPJS),1,0,'C');

///////////////////////////////////////////////////////////////////////////////////////
        $this->Ln();
        $this->SetFont('Times','',10);
        $this->SetX(30);
        $this->Cell(10,5,"6",1,0,'C');
        $this->Cell(67,5," Alveolektomi (Dento Alveolar)",1,0,'L');
        $this->Cell(13,5, number_format($total10Umum),1,0,'C');
        $this->Cell(13,5, number_format($total10BPJS),1,0,'C');
        $this->Cell(17,5, number_format($total10Gratis),1,0,'C');
        $this->Cell(20,5, number_format($total10Umum+$total10Gratis+$total10BPJS),1,0,'C');

///////////////////////////////////////////////////////////////////////////////////////
        $this->Ln();
        $this->SetFont('Times','',10);
        $this->SetX(30);
        $this->Cell(10,5,"7",1,0,'C');
        $this->Cell(67,5," Open bor",1,0,'L');
        $this->Cell(13,5, number_format($total11Umum),1,0,'C');
        $this->Cell(13,5, number_format($total11BPJS),1,0,'C');
        $this->Cell(17,5, number_format($total11Gratis),1,0,'C');
        $this->Cell(20,5, number_format($total11Umum+$total11Gratis+$total11BPJS),1,0,'C');

//////////////////////////////////////////////////////////////////////////////////////
        $this->Ln();
        $this->SetFont('Times','',10);
        $this->SetX(30);
        $this->Cell(10,5,"8",1,0,'C');
        $this->Cell(67,5,"  Incisi Abses dan drainage",1,0,'L');
        $this->Cell(13,5, number_format($total12Umum),1,0,'C');
        $this->Cell(13,5, number_format($total12BPJS),1,0,'C');
        $this->Cell(17,5, number_format($total12Gratis),1,0,'C');
        $this->Cell(20,5, number_format($total12Umum+$total12Gratis+$total12BPJS),1,0,'C');


//////////////////////////////////////////////////////////////////////////////////////
        $this->Ln();
        $this->SetFont('Times','',10);
        $this->SetX(30);
        $this->Cell(10,5,"9",1,0,'C');
        $this->Cell(67,5," Curret dry socket",1,0,'L');
        $this->Cell(13,5, number_format($total13Umum),1,0,'C');
        $this->Cell(13,5, number_format($total13BPJS),1,0,'C');
        $this->Cell(17,5, number_format($total13Gratis),1,0,'C');
        $this->Cell(20,5, number_format($total13Umum+$total13Gratis+$total13BPJS),1,0,'C');
//////////////////////////////////////////////////////////////////////////////////////
        $this->Ln();
        $this->SetFont('Times','',10);
        $this->SetX(30);
        $this->Cell(10,5,"10",1,0,'C');
        $this->Cell(67,5," Reposisi dislokasi rahang",1,0,'L');
        $this->Cell(13,5, number_format($total14Umum),1,0,'C');
        $this->Cell(13,5, number_format($total14BPJS),1,0,'C');
        $this->Cell(17,5, number_format($total14Gratis),1,0,'C');
        $this->Cell(20,5, number_format($total14Umum+$total14Gratis+$total14BPJS),1,0,'C');
//////////////////////////////////////////////////////////////////////////////////////
        $this->Ln();
        $this->SetFont('Times','',10);
        $this->SetX(30);
        $this->Cell(10,5,"11",1,0,'C');
        $this->Cell(67,5," Devitalisasi",1,0,'L');
        $this->Cell(13,5, number_format($total15Umum),1,0,'C');
        $this->Cell(13,5, number_format($total15BPJS),1,0,'C');
        $this->Cell(17,5, number_format($total15Gratis),1,0,'C');
        $this->Cell(20,5, number_format($total15Umum+$total15Gratis+$total15BPJS),1,0,'C');

//////////////////////////////////////////////////////////////////////////////////////
        $this->Ln();
        $this->SetFont('Times','',10);
        $this->SetX(30);
        $this->Cell(10,5,"12",1,0,'C');
        $this->Cell(67,5," Trepanasi",1,0,'L');
        $this->Cell(13,5, number_format($total16Umum),1,0,'C');
        $this->Cell(13,5, number_format($total16BPJS),1,0,'C');
        $this->Cell(17,5, number_format($total16Gratis),1,0,'C');
        $this->Cell(20,5, number_format($total16Umum+$total16Gratis+$total16BPJS),1,0,'C');
//////////////////////////////////////////////////////////////////////////////////////
        $this->Ln();
        $this->SetFont('Times','',10);
        $this->SetX(30);
        $this->Cell(10,5,"13",1,0,'C');
        $this->Cell(67,5," Rotattion of medication",1,0,'L');
        $this->Cell(13,5, number_format($total17Umum),1,0,'C');
        $this->Cell(13,5, number_format($total17BPJS),1,0,'C');
        $this->Cell(17,5, number_format($total17Gratis),1,0,'C');
        $this->Cell(20,5, number_format($total17Umum+$total17Gratis+$total17BPJS),1,0,'C');
//////////////////////////////////////////////////////////////////////////////////////
        $this->Ln();
        $this->SetFont('Times','',10);
        $this->SetX(30);
        $this->Cell(10,5,"14",1,0,'C');
        $this->Cell(67,5," Menerima rujukan",1,0,'L');
        $this->Cell(13,5, number_format($total18Umum),1,0,'C');
        $this->Cell(13,5, number_format($total18BPJS),1,0,'C');
        $this->Cell(17,5, number_format($total18Gratis),1,0,'C');
        $this->Cell(20,5, number_format($total18Umum+$total18Gratis+$total18BPJS),1,0,'C');
//////////////////////////////////////////////////////////////////////////////////////
        $this->Ln();
        $this->SetFont('Times','',10);
        $this->SetX(30);
        $this->Cell(10,5,"15",1,0,'C');
        $this->Cell(67,5," Merujuk",1,0,'L');
        $this->Cell(13,5, number_format($total19Umum),1,0,'C');
        $this->Cell(13,5, number_format($total19BPJS),1,0,'C');
        $this->Cell(17,5, number_format($total19Gratis),1,0,'C');
        $this->Cell(20,5, number_format($total19Umum+$total19Gratis+$total19BPJS),1,0,'C');
//////////////////////////////////////////////////////////////////////////////////////
        $this->Ln();
        $this->SetFont('Times','',10);
        $this->SetX(30);
        $this->Cell(10,5,"16",1,0,'C');
        $this->Cell(67,5," Konsultasi",1,0,'L');
        $this->Cell(13,5, number_format($total20Umum),1,0,'C');
        $this->Cell(13,5, number_format($total20BPJS),1,0,'C');
        $this->Cell(17,5, number_format($total20Gratis),1,0,'C');
        $this->Cell(20,5, number_format($total20Umum+$total20Gratis+$total20BPJS),1,0,'C');
//////////////////////////////////////////////////////////////////////////////////////
        $this->Ln();
        $this->SetFont('Times','',10);
        $this->SetX(30);
        $this->Cell(10,5,"17",1,0,'C');
        $this->Cell(67,5," Pemberian resep",1,0,'L');
        $this->Cell(13,5, number_format($total21Umum),1,0,'C');
        $this->Cell(13,5, number_format($total21BPJS),1,0,'C');
        $this->Cell(17,5, number_format($total21Gratis),1,0,'C');
        $this->Cell(20,5, number_format($total21Umum+$total21Gratis+$total21BPJS),1,0,'C');
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
        $this->Cell(13,5, number_format($total22Umum),1,0,'C');
        $this->Cell(13,5, number_format($total22BPJS),1,0,'C');
        $this->Cell(17,5, number_format($total22Gratis),1,0,'C');
        $this->Cell(20,5, number_format($total22Umum+$total22Gratis+$total22BPJS),1,0,'C');

        $this->Ln();
        $this->SetFont('Times','',10);
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'C');
        $this->Cell(67,5," Pasien Lama",1,0,'L');
        $this->Cell(13,5, number_format($total23Umum),1,0,'C');
        $this->Cell(13,5, number_format($total23BPJS),1,0,'C');
        $this->Cell(17,5, number_format($total23Gratis),1,0,'C');
        $this->Cell(20,5, number_format($total23Umum+$total23Gratis+$total23BPJS),1,0,'C');


/////////////////////////////////////////////////////////
        $this->Ln();
        $this->SetFont('Times','B',10);
        $this->SetX(30);
        $this->Cell(10,5,"",1,0,'L');
        $this->Cell(67,5,"Jumlah Kunjungan",1,0,'C');
        $this->Cell(13,5, number_format($total22Umum+$total23Umum),1,0,'C');
        $this->Cell(13,5, number_format($total22BPJS+$total23BPJS),1,0,'C');
        $this->Cell(17,5, number_format($total22Gratis+$total23Gratis),1,0,'C');
        $this->Cell(20,5, number_format(($total22Umum+$total22Gratis+$total22BPJS)+($total23Umum+$total23Gratis+$total23BPJS)),1,0,'C');
?>