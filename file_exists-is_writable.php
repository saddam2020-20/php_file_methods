<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="main.css">
	<title></title>
</head>
<body>
<?php

$file = __dir__.'\mohammed.php';
//echo $file;


if (file_exists($file)) 
{
   
	echo " The File (<span> ".substr( substr($file, strlen(__dir__)+1) , 0,strpos( substr($file, strlen(__dir__)+1) ,"."))." </span> ) is Found";
	# code...
}
else
echo " The File (<span> ".substr( substr($file, strlen(__dir__)+1) , 0,strpos( substr($file, strlen(__dir__)+1) ,"."))." </span> )is  Not Found";
?>
</body>
</html>

