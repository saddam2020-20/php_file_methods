<?php


$link = __dir__."/php";

//mkdir($link);


	$files = scandir($link);
	foreach ($files as $file)
	 {
		
		if (is_file($link . '/'.$file)) 
			# code...
	   {
	   	unlink($link . '/'.$file);
		
	}
	}
	echo "<br> deleted";

	

