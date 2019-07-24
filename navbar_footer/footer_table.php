
	<div class="clear"></div>

	<footer class="footer">
		Copyright &copy; celenoteam 2018
	</footer>

	<script src="../bootstrap-3.3.7/dist/js/bootstrap.js"></script>
	<script src="../jquery-3.3.1.js"></script>

	<script src="../assets/data-table/datatables.min.js"></script>
    <script src="../assets/data-table/dataTables.bootstrap.min.js"></script>
    <script src="../assets/data-table/dataTables.buttons.min.js"></script>
    <script src="../assets/data-table/buttons.bootstrap.min.js"></script>
    <script src="../assets/data-table/jszip.min.js"></script>
    <script src="../assets/data-table/pdfmake.min.js"></script>
    <script src="../assets/data-table/vfs_fonts.js"></script>
    <script src="../assets/data-table/buttons.html5.min.js"></script>
    <script src="../assets/data-table/buttons.print.min.js"></script>
    <script src="../assets/data-table/buttons.colVis.min.js"></script>
    <script src="../assets/data-table/datatables-init.js"></script>


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