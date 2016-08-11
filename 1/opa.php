<?php
	
	if(!empty($_POST))
	{
		$name = $_POST['name'];
		$fami = $_POST['fami'];
		
		echo "Дорогой ".$fami." ".$name." добро пожаловвать!";
	}
	
?>