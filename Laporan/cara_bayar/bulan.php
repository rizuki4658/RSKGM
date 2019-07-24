
<?php require_once '../../navbar_footer/php/session_level.php'; ?>
<?php
require('../../phpfpdf/fpdf.php');
$bulan=$_POST['bulan'];
$tgl1=date('m/d/Y');
if ($bulan=='01' || $bulan=="Jan") {
    $bulan="Januari";
}elseif ($bulan=='02' || $bulan=="Feb") {
    $bulan="Februari";
}elseif ($bulan=='03' || $bulan=="Mar") {
    $bulan="Maret";
}elseif ($bulan=='04' || $bulan=="Apr") {
    $bulan="April;";
}elseif ($bulan=='05' || $bulan=="May") {
    $bulan="Mei";
}elseif ($bulan=='06' || $bulan=="Jun") {
    $bulan="Juni";
}elseif ($bulan=='07' || $bulan=="Jul") {
    $bulan="Juli";
}elseif ($bulan=='08' || $bulan=="Aug") {
    $bulan="Agustus";
}elseif ($bulan=='09' || $bulan=="Sep") {
    $bulan="September";
}elseif ($bulan=='10' || $bulan=="Oct") {
    $bulan="Oktober";
}elseif ($bulan=='11' || $bulan=="Nov") {
    $bulan="November";
}elseif ($bulan=='12' || $bulan=="Dec") {
    $bulan="Desember";
}
$tahun=$_POST['tahun'];
class PDF extends FPDF
{
    function Header()
    {
        $this->Image('../../img/logo.png',10,5,20,5);
        $this->SetFont('Times','B',12);
        $this->SetX(90);
        $this->Cell(35,0,"LAPORAN DATA REKAPITULASI",0,0,'C');
        //$this->Ln(5);
        //$this->SetX(90);       
        //$this->Cell(35,0,"KLINIK PERIODONTI",0,0,'C');

        //$this->SetFont('Times','B',10);
        //$this->SetX(150);
        //$this->Cell(35,0,"Tanggal: ".date("d")." ".$bulan." ".date("Y"),0,0,'C');

        $this->Ln(5);
        $this->SetFont('Times','B',12);
        $this->SetX(90);
        $this->Cell(35,0,"RUMAH SAKIT KHUSUS GIGI & MULUT",0,0,'C');
        $this->Ln(5);
        $this->SetFont('Times','',10);
        $this->SetX(90);
        $this->Cell(35,0,"Jalan Laks. Laut RE. Martadinata No. 45, Citarum, Bandung Wetan, Kota Bandung, Jawa Barat 40115",0,0,'C');
        $this->Ln(5);
        $this->SetFont('Times','',10);
        $this->SetX(90);
        $this->Cell(35,0,"website:www.rskgm.bandung.go.id/ e-mail:rskgm@bandung.go.id Telp. : (022)4234058.",0,0,'C');
        $this->SetX(80);
        
        $this->Line(10,32,285,32);
        
        $this->SetFont('Arial','B',15);
        
        //pindah baris
        $this->Ln(10);

    }
 
    //Page Content
    function Content()
    {
        require_once 'data_bulan.php';

        $this->Ln(5);
        $this->SetFont('Times','',12);       
        $this->SetX(10);
        $this->Cell(30,0,"Rekap Kegiatan Berdasarkan Cara Pembayaran",0,0,'L');
        $this->Cell(167,0, $metode,0,0,'R');
        $this->Ln(5);
        $this->SetX(12);
        $this->Cell(10,5,"No",1,0,'C');
        $this->Cell(135,5,"Nama Klinik",1,0,'C');
        $this->Cell(50,5,"Jumlah Pasien",1,0,'C');

        $this->Ln(5);
        $this->SetX(12);
        $this->Cell(10,5,"1",1,0,'C');
        $this->Cell(135,5,"Klinik Periodonti",1,0,'L');
        $this->Cell(50,5, number_format($total1)." Pasien",1,0,'R');
        
        $this->Ln(5);
        $this->SetX(12);
        $this->Cell(10,5,"2",1,0,'C');
        $this->Cell(135,5,"Klinik Prostodonti",1,0,'L');
        $this->Cell(50,5, number_format($total2)." Pasien",1,0,'R');
        
        $this->Ln(5);
        $this->SetX(12);
        $this->Cell(10,5,"3",1,0,'C');
        $this->Cell(135,5,"Klinik Konservasi Gigi",1,0,'L');
        $this->Cell(50,5, number_format($total3)." Pasien",1,0,'R');
        
        $this->Ln(5);
        $this->SetX(12);
        $this->Cell(10,5,"4",1,0,'C');
        $this->Cell(135,5,"Klinik Ortodonti",1,0,'L');
        $this->Cell(50,5, number_format($total4)." Pasien",1,0,'R');
        
        $this->Ln(5);
        $this->SetX(12);
        $this->Cell(10,5,"5",1,0,'C');
        $this->Cell(135,5,"Klinik Pedodonti",1,0,'L');
        $this->Cell(50,5, number_format($total5)." Pasien",1,0,'R');

        $this->Ln(5);
        $this->SetX(12);
        $this->Cell(10,5,"6",1,0,'C');
        $this->Cell(135,5,"Klinik Oral Surgery",1,0,'L');
        $this->Cell(50,5, number_format($total6)." Pasien",1,0,'R');
        
        $this->Ln(5);
        $this->SetX(12);
        $this->Cell(10,5,"7",1,0,'C');
        $this->Cell(135,5,"Klinik Eksodonti",1,0,'L');
        $this->Cell(50,5, number_format($total7)." Pasien",1,0,'R');
        
        $this->Ln(5);
        $this->SetX(12);
        $this->Cell(10,5,"8",1,0,'C');
        $this->Cell(135,5,"Klinik Endodonti",1,0,'L');
        $this->Cell(50,5, number_format($total8)." Pasien",1,0,'R');
        
        $this->Ln(5);
        $this->SetX(12);
        $this->Cell(10,5,"9",1,0,'C');
        $this->Cell(135,5,"Klinik Unit Gawat Darurat(UGD)",1,0,'L');
        $this->Cell(50,5, number_format($total9)." Pasien",1,0,'R');

        $this->Ln(5);
        $this->SetX(12);
        $this->Cell(145,5,"Total",1,0,'C');
        $this->Cell(50,5, number_format($total1 + $total2 + $total3 + $total4 + $total5 + $total6 + $total7 + $total8 + $total9)." Pasien",1,0,'R');          
    }
 
    //Page footer
    function Footer()
    {
        $bulan=$_POST['bulan'];
        $tgl1=date('m/d/Y');
        if ($bulan=='01' || $bulan=="Jan") {
            $bulan="Januari";
        }elseif ($bulan=='02' || $bulan=="Feb") {
            $bulan="Februari";
        }elseif ($bulan=='03' || $bulan=="Mar") {
            $bulan="Maret";
        }elseif ($bulan=='04' || $bulan=="Apr") {
            $bulan="April;";
        }elseif ($bulan=='05' || $bulan=="May") {
            $bulan="Mei";
        }elseif ($bulan=='06' || $bulan=="Jun") {
            $bulan="Juni";
        }elseif ($bulan=='07' || $bulan=="Jul") {
            $bulan="Juli";
        }elseif ($bulan=='08' || $bulan=="Aug") {
            $bulan="Agustus";
        }elseif ($bulan=='09' || $bulan=="Sep") {
            $bulan="September";
        }elseif ($bulan=='10' || $bulan=="Oct") {
            $bulan="Oktober";
        }elseif ($bulan=='11' || $bulan=="Nov") {
            $bulan="November";
        }elseif ($bulan=='12' || $bulan=="Dec") {
            $bulan="Desember";
        }
        $tahun=$_POST['tahun'];
        $this->Ln(20);
        $this->SetFont('Times','',10);
    
        $this->SetX(250);
        $this->Cell(1,10,"............................, ".date("d")." ".$bulan." ".date("Y"),0,0,'C');
        $this->Ln(20);
        $this->SetX(10);
        $this->Ln(15);
        $this->SetX(220);
        $this->Cell(1,10,"(...................................................................)",0,0,'L');
        $this->Ln(5);
       
        
        $this->SetY(-15);
        //buat garis horizontal
        $this->Line(10,$this->GetY(),285,$this->GetY());
        //Arial italic 9
        $this->SetFont('Times','',9);
        //nomor halaman
        $this->Cell(0,10,'Halaman '.$this->PageNo().' dari {nb}',0,0,'R');
        $this->SetY(283);
        $this->SetX(30);
        $this->Cell(0,10,'Laporan Rekapitulasi Kegiatan Bulan '.$bulan.' '.$tahun,0,0,'L');
    }
}
 
//contoh pemanggilan class
$pdf = new PDF('P','mm','A4');
$pdf->SetTitle('Rekapitulasi Kegiatan Berdasarkan Cara Pembayaran '.$bulan.' '.$tahun);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->Content();
$pdf->Output();
?>
