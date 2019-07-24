<?php require_once '../navbar_footer/php/session_level.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Laporan</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.0.0/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets2/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets2/css/themify-icons.css">
    <link rel="stylesheet" href="../assets2/css/flag-icon.min.css">
    <link rel="stylesheet" href="../assets2/css/cs-skin-elastic.css">
    <style type="text/css">
    	#input_bulan, #input_tahun, #btn_reset, #btn_ok{
    		display: none;
    	}
    </style>
    <link href='../img/bandung.png' rel='shortcut icon'>
</head>
<body>


	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
			    <div class="modal-header">
			       	<h5 class="modal-title" id="exampleModalLabel">Filter Per Triwulan</h5>
			    </div>
			<div class="modal-body">
			    <form method="post" action="../Laporan/triwulan.php">
				  	<div class="form-group" id="input_bulan">
					    <label for="triwulan">Triwulan</label>
					    <select class="form-control" name="triwulan" id="triwulan" aria-describedby="emailHelp" required>
					    	<option></option>
					    	<option value="1">Triwulan 1 - Januari s/d Maret </option>
					    	<option value="2">Triwulan 2 - April s/d Juni</option>
					    	<option value="3">Triwulan 3 - Juli s/d September</option>
					    	<option value="4">Triwulan 4 - Oktober s/d Desember</option>
					    </select>
				  	</div>
					<div class="form-group" id="input_tahun">
					    <label for="tahun">Tahun</label>
					    <input type="number" min="2016" max="2025" class="form-control" id="tahun" name="tahun" required>
					</div>
				  <button type="reset" class="btn btn-outline-warning" id="btn_reset">RESET</button>
				  <button type="submit" class="btn btn-outline-primary" id="btn_ok">OK</button>
				</form>
			 </div>
			<div class="modal-footer">
			    <br>
			     <a href="<?php if ($_GET['page']=="index") {
			    	echo "../index.php";
			    }elseif ($_GET['page']=="Periodonti") {
			    	echo "../1 Periodonti/periodonti.php";
			    }elseif ($_GET['page']=="Prostodonti") {
			    	echo "../2 Prostodonti/prostodonti.php";
			    }elseif ($_GET['page']=="Konservasi Gigi") {
			    	echo "../3 Konservasi Gigi/konservasi Gigi.php";
			    }elseif ($_GET['page']=="Ortodonti") {
			    	echo "../4 Ortodonti/Ortodonti.php";
			    }elseif ($_GET['page']=="Pedodonti") {
			    	echo "../5 Pedodonti/Pedodonti.php";
			    }elseif ($_GET['page']=="Oral Surgery") {
			    	echo "../6 Oral Surgery/Oral Surgery.php";
			    }elseif ($_GET['page']=="Eksodonti") {
			    	echo "../7 Eksodonti/Eksodonti.php";
			    }elseif ($_GET['page']=="Endodonti") {
			    	echo "../8 Endodonti/Endodonti.php";
			    }elseif ($_GET['page']=="UGD") {
			    	echo "../9 UGD/UGD.php";
			    } ?>" class="btn btn-outline-danger">Batal</a>
			</div>
			</div>
		</div>
	</div>




	<script type="text/javascript" src="../jquery-3.3.1.js"></script>
	<script type="text/javascript" src="../bootstrap-4.0.0/dist/js/bootstrap.min.js"></script>

	<script type="text/javascript">
    	$('#exampleModal').modal({backdrop: 'static', keyboard: false});
	</script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#examplemodal').ready(function(){
				$('#input_bulan').fadeIn(1500);
			});

			$('#triwulan').change(function(){
				$('#input_tahun').fadeIn(1500);
			});

			$('#tahun').change(function(){
				$('#btn_reset').fadeIn(1500);
				$('#btn_ok').fadeIn(2500);
			});

			$('#btn_reset').click(function(){
				$('#input_tahun').fadeOut(2000);
				$('#btn_reset').fadeOut(1500);
				$('#btn_ok').fadeOut(1000);
			});


		});
	</script>
</body>
</html>

