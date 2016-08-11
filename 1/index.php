<!doctype html>

<html>


<head>
	<title>Черновик</title>
	<link rel="stylesheet" style="text/css" href="style.css">
	<script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
	<?php $bd = mysqli_connect("localhost", "prob", "prob", "prob"); ?>

	<style>
	</style>
	
	<script>
		$(document).ready(function(){
			$('form').on('submit', function(){
				
				
				var name = $('input[name=name]').val();
				var fami = $('input[name=fami]').val();
				
				$.ajax({
					url: 'opa.php',
					type: 'POST',
					data: 'name=' + name + '&fami=' + fami,
					success: function(data){
						$('span').html(data);
					}
				});
				
				return(false);
			});
		});
	</script>
</head>


<body>
	<div id="a">
		
		<form action="op.php" method="POST">
			<input name="name" placeholder="Имя" required>
			<input name="fami" placeholder="Фамилия" required>
			<input name="fami" placeholder="Фамилия" required>
			<input name="fami" placeholder="Фамилия" required>
			<input type="submit">
		</form>
		
		<span></span>

	</div>
</body>


</html>






























