<?php require_once '../navbar_footer/php/session_level.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>RSKGM | Ortodonti</title>
	<link rel="stylesheet" href="../bootstrap-3.3.7/dist/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/datatable/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="../assets2/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets2/css/themify-icons.css">
    <link rel="stylesheet" href="../assets2/css/flag-icon.min.css">
    <link rel="stylesheet" href="../assets2/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="css/index.css">
    <script src="../jquery-3.3.1.js"></script>
    <script src="../bootstrap-3.3.7/dist/js/bootstrap.js"></script>
    <script type="text/javascript" src="../Chart.js/Chart.bundle.js"></script>
    <style type="text/css">
            #container {
                width: 70%;
                margin: 15px auto;
            }
            #tabelnya, #grafiknya{
            	display: none;
            }
            .col-sm-12{
            	display: inline-block;
            	width: 100%;
            }
    </style>
    <link rel="stylesheet" href="../tambahan/style.css">

    <link href='../img/bandung.png' rel='shortcut icon'>
</head>
<body>
	<?php require '../navbar_footer/navbar_ortodonti.php'; ?>

	
	<div class="container-fluid bg">
		<div class="container">	
			<img src="../img/dental/Doc.png" class="img-fluid">
			<h4 style="color: white; text-transform: uppercase; margin-bottom: 0; display: inline;">
				<a href="Ortodonti.php" class="links">KLINIK ORTODONTI</a>
			</h4>
		</div>
	</div>
	<br>
	
	<div class="clear"></div>

	<div class="container" id="tabelnya">
	    <h4 class="mb-3">Data Tabel 
	    	<span class="fa fa-table"></span> 
	    </h4>
	    
	    <div class="container" style="border: 1px solid rgb(221, 221, 221); padding: 1% 1%; overflow-y:hidden;overflow-x:scroll;">
			<?php require 'php/tabel.php'; ?>
	    </div>
	</div>

	<br>

	<div class="container" id="grafiknya">    	
	    <h4 class="mb-3">Data Grafik <span class="fa fa-bar-chart-o"></span></h4>
	    <div id="container" style="border: 1px solid rgb(221, 221, 221); padding: 1% 1%;">
		        <canvas id="myChart" width="20" height="10"></canvas>
		</div>
	</div>


	<script type="text/javascript">
		$(document).ready(function(){
			$('#tabelnya').fadeIn(1500);
			$('#grafiknya').fadeIn(2000);
		});
	</script>


	<?php require 'grafik/data_grafik.php'; ?>
	<?php require 'grafik/grafik.php'; ?>
	<?php require '../navbar_footer/footer_table.php'; ?>