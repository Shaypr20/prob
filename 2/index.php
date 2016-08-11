<!doctype html>

<html>


<head>
	<title>Черновик</title>
	<link rel="stylesheet" style="text/css" href="style.css">
	<script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
	<?php $bd = mysqli_connect("localhost", "prob", "prob", "prob"); ?>

	<style>
		#a{
			word-wrap: break-word;
		}
	</style>
	
	<script>
		$(document).ready(function(){
			
		});
	</script>
</head>


<body>
	<div id="a">

	<?php
	
		require_once("deshifr.php");
		
		$a = "mama";
		
		$shi = shifr($a);
		$unshi = deshifr($shi);
		
		echo $shi;
		echo "<br>";
		echo $unshi;
		
	?>

	</div>
</body>


</html>






























