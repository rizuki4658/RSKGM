	<div class="clear"></div>

	<footer class="footer">
		Copyright &copy; celenoteam 2018
	</footer>

	
	<script src="../bootstrap-3.3.7/dist/js/bootstrap.js"></script>
    <script src="../jquery-3.3.1.js"></script>

    
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