
<?php require_once '../navbar_footer/php/session_level.php'; ?>
<?php
require('../phpfpdf/fpdf.php');
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
        $tgl1=date("Y-m-d");
        $tgl2=date("Y-m-d");
        $tahun=$_POST['tahun'];
        if ($_POST['bulan']==1) {
            $tgl1=$tahun."-01-01";
            $tgl2=$tahun."-01-31";
        }elseif ($_POST['bulan']==2) {
            $tgl1=$tahun."-02-01";
            $tgl2=$tahun."-02-28";
        }elseif ($_POST['bulan']==3) {
            $tgl1=$tahun."-01-01";
            $tgl2=$tahun."-03-31";
        }elseif ($_POST['bulan']==4) {
            $tgl1=$tahun."-04-01";
            $tgl2=$tahun."-04-30";
        }elseif ($_POST['bulan']==5) {
            $tgl1=$tahun."-05-01";
            $tgl2=$tahun."-05-31";
        }elseif ($_POST['bulan']==6) {
            $tgl1=$tahun."-06-01";
            $tgl2=$tahun."-06-30";
        }elseif ($_POST['bulan']==7) {
            $tgl1=$tahun."-07-01";
            $tgl2=$tahun."-07-31";
        }elseif ($_POST['bulan']==8) {
            $tgl1=$tahun."-08-01";
            $tgl2=$tahun."-08-31";
        }elseif ($_POST['bulan']==9) {
            $tgl1=$tahun."-09-01";
            $tgl2=$tahun."-09-30";
        }elseif ($_POST['bulan']==10) {
            $tgl1=$tahun."-10-01";
            $tgl2=$tahun."-10-31";
        }elseif ($_POST['bulan']==11) {
            $tgl1=$tahun."-11-01";
            $tgl2=$tahun."-11-30";
        }elseif ($_POST['bulan']==12) {
            $tgl1=$tahun."-12-01";
            $tgl2=$tahun."-12-31";
        }

$this->SetFont('Times','',10);
        
        require_once 'bulan/Periodonti.php';
        
        require_once 'bulan/Prostodonti.php';

        require_once 'bulan/Konservasi_Gigi.php';

        require_once 'bulan/Ortodonti.php';

        require_once 'bulan/Pedodonti.php';

        require_once 'bulan/Oral Surgery.php';

        require_once 'bulan/Eksodonti.php';

        require_once 'bulan/Endodonti.php';

        require_once 'bulan/UGD.php';
$this->SetFont('Times','',10);
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
$pdf->SetTitle('Laporan Rekapitulasi Kegiatan '.$bulan.' '.$tahun);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->Content();
$pdf->Output();
?>
