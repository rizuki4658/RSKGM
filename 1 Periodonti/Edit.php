<?php require_once '../navbar_footer/php/session_level.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>RSKGM | Periodonti</title>
	<link rel="stylesheet" href="../bootstrap-3.3.7/dist/css/bootstrap.css">
    <script src="../bootstrap-3.3.7/dist/js/bootstrap.js"></script>
    <script src="../jquery-3.3.1.js"></script>
    <link rel="stylesheet" href="css/input_edit.css">
    <link href='../img/bandung.png' rel='shortcut icon'>
    <link rel="stylesheet" href="../tambahan/style.css">

</head>
<body>
	<?php require '../navbar_footer/navbar_periodonti.php'; ?>



	
	<div class="container-fluid bg">
		<img src="../img/dental/Doc.png" class="img-fluid">
		<h4 class="judul_klinik">
			<a href="Periodonti.php" class="links">KLINIK PERIODONTI</a>
		</h4>
		<img src="../img/dental/New Project (1).png" class="img-fluids">
	</div>
	<br>
	
	<div class="container">
	    <h4 class="mb-3">Edit Data Periodonti </h4>
	    <br>
		<center>
			<table class="table">
				<form action="php/proses_edit.php" method="post">
				<?php require 'php/data_edit.php'; ?>
				<tr>
					<td colspan="4">
						<button type="submit" class="btn btn-outline-primary">EDIT</button>
						<button type="reset" class="btn btn-outline-primary">RESET</button>
					</td>
				</tr>
				</form>
			</table>
		</center>
	</div>

	<div class="clear"></div>

<?php require '../navbar_footer/footer_level.php'; ?>
