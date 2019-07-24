	<div class="clear"></div>

	<footer class="footer">
		Copyright &copy; celenoteam 2018
	</footer>

	
	<script src="jquery-3.3.1.js"></script>
	<script src="bootstrap-3.3.7/dist/js/bootstrap.js"></script>
	<script language='javascript' type='text/javascript'>
		function check1(input) {
	        if (input.value != document.getElementById('email').value) {
	            input.setCustomValidity('Email Not Match.');
	        }else {
	            // input is valid -- reset the error message
	            input.setCustomValidity('');
	        }
	    }function check2(input) {
	        if(input.value != document.getElementById('password').value){
	        	input.setCustomValidity('Password Not Match.');
	        } else {
	            // input is valid -- reset the error message
	            input.setCustomValidity('');
	        }
	    }
	</script>
	<script src="script.js"></script>
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