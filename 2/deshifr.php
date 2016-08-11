<?php
	function shifr($str)
	{
		
		require("array_code.php");
		
		
		$array_code = array_flip($array_code);
		$str = str_split($str);
		
		foreach($str as $val)
		{
			$res .= $array_code[$val];
		}
		
		echo "<pre>"; print_r($array_code);
		
		return $res;
		
	}
	
	function deshifr($str)
	{
		require("array_code.php");
		
		$str = str_split($str, 8);
		
		foreach($str as $val)
		{
			$res .= $array_code[$val];
		}
		
		return $res;
		
	}
	
?>