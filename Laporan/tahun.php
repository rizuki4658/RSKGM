
<?php require_once '../navbar_footer/php/session_level.php'; ?>
<?php
require('../phpfpdf/fpdf.php');
//$bulan=$_POST['bulan'];
$tgl1=date('m/d/Y');
/*if ($bulan=='01' || $bulan=="Jan") {
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
}*/
$tahun=$_POST['tahun'];
class PDF extends FPDF
{
    function Header()
    {
        $this->Image('../img/logo.png',10,5,20,5);
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
        $tahun=$_POST['tahun'];
        $tgl1=$tahun."-01-01";
        $tgl2=$tahun."-12-31";
        
        
$this->SetFont('Times','',10);
        
        require_once 'tahun/Periodonti.php';
        
        require_once 'tahun/Prostodonti.php';

        require_once 'tahun/Konservasi_Gigi.php';

        require_once 'tahun/Ortodonti.php';

        require_once 'tahun/Pedodonti.php';

        require_once 'tahun/Oral Surgery.php';

        require_once 'tahun/Eksodonti.php';

        require_once 'tahun/Endodonti.php';

        require_once 'tahun/UGD.php';
$this->SetFont('Times','',10);
    }
 
    //Page footer
    function Footer()
    {
        $tahun=$_POST['tahun'];
        $bulan2=date("M");
         if ($bulan2=='01' || $bulan2=="Jan") {
            $bulan2="Januari";
        }elseif ($bulan2=='02' || $bulan2=="Feb") {
            $bulan2="Februari";
        }elseif ($bulan2=='03' || $bulan2=="Mar") {
            $bulan2="Maret";
        }elseif ($bulan2=='04' || $bulan2=="Apr") {
            $bulan2="April;";
        }elseif ($bulan2=='05' || $bulan2=="May") {
            $bulan2="Mei";
        }elseif ($bulan2=='06' || $bulan2=="Jun") {
            $bulan2="Juni";
        }elseif ($bulan2=='07' || $bulan2=="Jul") {
            $bulan2="Juli";
        }elseif ($bulan2=='08' || $bulan2=="Aug") {
            $bulan2="Agustus";
        }elseif ($bulan2=='09' || $bulan2=="Sep") {
            $bulan2="September";
        }elseif ($bulan2=='10' || $bulan2=="Oct") {
            $bulan2="Oktober";
        }elseif ($bulan2=='11' || $bulan2=="Nov") {
            $bulan2="November";
        }elseif ($bulan2=='12' || $bulan2=="Dec") {
            $bulan2="Desember";
        }
        $this->Ln(20);
        $this->SetFont('Times','',10);
    
        $this->SetX(250);
        $this->Cell(1,10,"............................, ".date("d")." ".$bulan2." ".date("Y"),0,0,'C');
        $this->Ln(20);
        $this->SetX(10);
        $this->Ln(15);
        $this->SetX(220);
        $this->Cell(1,10,"(...................................................................)",0,0,'L');
        $this->Ln(5);
        //$this->SetX(220);
        //$this->Cell(1,10,"NIP.",0,0,'L');
        //atur posisi 1.5 cm dari bawah
        $this->SetY(-15);
        //buat garis horizontal
        $this->Line(10,$this->GetY(),285,$this->GetY());
        //Arial italic 9
        $this->SetFont('Times','',9);
        //nomor halaman
        $this->Cell(0,10,'Halaman '.$this->PageNo().' dari {nb}',0,0,'R');
        $this->SetY(283);
        $this->SetX(30);
        $this->SetFont('Times','I',8);
        $this->Cell(0,10,'Laporan Rekapitulasi Kegiatan Tahun '.$tahun,0,0,'L');
    }
}
 
//contoh pemanggilan class
$pdf = new PDF('P','mm','A4');
$pdf->SetTitle('Laporan Rekapitulasi Kegiatan '.$tahun);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->Content();
$pdf->Output();
?>
