<?php require_once '../../navbar_footer/php/session_level.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>RSKGM | Periodonti</title>
	<link rel="stylesheet" href="../../bootstrap-3.3.7/dist/css/bootstrap.css">
    <link rel="stylesheet" href="../../assets/css/datatable/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="../../assets2/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../assets2/css/themify-icons.css">
    <link rel="stylesheet" href="../../assets2/css/flag-icon.min.css">
    <link rel="stylesheet" href="../../assets2/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="css/index.css">
    <script src="../../jquery-3.3.1.js"></script>
    <script src="../../bootstrap-3.3.7/dist/js/bootstrap.js"></script>
    <style type="text/css">
            #container {
                width: 70%;
                margin: 15px auto;
            }
    </style>
    <link rel="stylesheet" href="../../tambahan/style.css">
    <link href='../../img/bandung.png' rel='shortcut icon'>
</head>
<body>

	<?php require '../../navbar_footer/navbar_data_user.php'; ?>
	
	<div class="container-fluid bg">
		<div class="container">
			<img src="../../img/icon/id-card.png" class="img-fluid">
			<h4 class="judul_klinik"><a href="Data_pengguna.php" class="links">DATA PENGGUNA</a></h4>
		</div>
	</div>

	<div class="clear"></div>

	<div class="container" id="tabelnya">
	    <h4 class="mb-3">Data Tabel 
	    	<span class="fa fa-table"></span> 
	    </h4>
	    
	    <div class="container" style="border: 1px solid rgb(221, 221, 221); padding: 1% 1%;">
			<?php require 'php/tabel.php'; ?>
	    </div>
	</div>
	

	<div class="clear"></div>

	<footer class="footer">
		Copyright &copy; celenoteam 2018
	</footer>

	<script src="../../bootstrap-3.3.7/dist/js/bootstrap.js"></script>
	<script src="../../jquery-3.3.1.js"></script>

	<script src="../../assets/data-table/datatables.min.js"></script>
    <script src="../../assets/data-table/dataTables.bootstrap.min.js"></script>
    <script src="../../assets/data-table/dataTables.buttons.min.js"></script>
    <script src="../../assets/data-table/buttons.bootstrap.min.js"></script>
    <script src="../../assets/data-table/jszip.min.js"></script>
    <script src="../../assets/data-table/pdfmake.min.js"></script>
    <script src="../../assets/data-table/vfs_fonts.js"></script>
    <script src="../../assets/data-table/buttons.html5.min.js"></script>
    <script src="../../assets/data-table/buttons.print.min.js"></script>
    <script src="../../assets/data-table/buttons.colVis.min.js"></script>
    <script src="../../assets/data-table/datatables-init.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
        } );
    </script>
	<script>
		$(document).ready(function(){
		  $('.dropdown-submenu a.test').on("click", function(e){
		    $(this).next('ul').toggle();
		    e.stopPropagation();
		    e.preventDefault();
		  });
		});
	</script>

</body>
</html>