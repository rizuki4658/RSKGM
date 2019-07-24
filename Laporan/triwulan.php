<?php require_once '../navbar_footer/php/session_level.php'; ?>
<?php
require('../phpfpdf/fpdf.php');
$triwulan=$_POST['triwulan'];
$tgl1=date('m/d/Y');

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
        $triwulan=$_POST['triwulan'];
        $tahun=$_POST['tahun'];
        if ($_POST['triwulan']==1) {
            $tgl1=$tahun."-01-01";
            $tgl2=$tahun."-03-31";
        }elseif ($_POST['triwulan']==2) {
            $tgl1=$tahun."-04-01";
            $tgl2=$tahun."-06-30";
        }elseif ($_POST['triwulan']==3) {
            $tgl1=$tahun."-07-01";
            $tgl2=$tahun."-09-30";
        }elseif ($_POST['triwulan']==4) {
            $tgl1=$tahun."-10-01";
            $tgl2=$tahun."-12-31";
        }

$this->SetFont('Times','',10);
        
        require_once 'triwulan/Periodonti.php';
        
        require_once 'triwulan/Prostodonti.php';

        require_once 'triwulan/Konservasi_Gigi.php';

        require_once 'triwulan/Ortodonti.php';

        require_once 'triwulan/Pedodonti.php';

        require_once 'triwulan/Oral Surgery.php';

        require_once 'triwulan/Eksodonti.php';

        require_once 'triwulan/Endodonti.php';

        require_once 'triwulan/UGD.php';
$this->SetFont('Times','',10);
    }
 
    //Page footer
    function Footer()
    {
        $triwulan=$_POST['triwulan'];
        $tahun=$_POST['tahun'];
        $text="";
        if ($_POST['triwulan']==1) {
            $text=": 01 Januari ". $tahun." s/d "." 31 Maret ".$tahun;
        }elseif ($_POST['triwulan']==2) {
            $text=": 01 April ". $tahun." s/d "." 30 Juni ".$tahun;
        }elseif ($_POST['triwulan']==3) {
            $text=": 01 Juli ". $tahun." s/d "." 30 September ".$tahun;
        }elseif ($_POST['triwulan']==4) {
            $text=": 01 Oktober ". $tahun." s/d "." 31 Desember ".$tahun;
        }
        $this->Ln(20);
        $this->SetFont('Times','',10);
    
        $this->SetX(250);
        $this->Cell(1,10,"............................, ".date("d")." ".""." ".date("Y"),0,0,'C');
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
        $this->Cell(0,10,'Laporan Rekapitulasi Kegiatan Triwulan Ke-'.$triwulan.' '.$text,0,0,'L');
    }
}
 
//contoh pemanggilan class
$pdf = new PDF('P','mm','A4');
$pdf->SetTitle('Laporan Rekapitulasi Kegiatan Triwulan '.$triwulan.' '.$tahun);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->Content();
$pdf->Output();
?>
