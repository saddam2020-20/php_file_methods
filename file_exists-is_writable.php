<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="main.css">
	<title></title>
</head>
<body>
<?php

$file = __dir__.'\mohammed.php';
$file1 ='saddam.text';
//echo $file;
 require 'myFunctions.php';
 
 $msg = isFound($file);
 echo $msg.'<br />';
 $result = isWritable($file);

if ($result[0]=='false') {
    echo $result[1]. " 
            <script type=\"text/javascript\">
            
  document.body.appendChild(document.createElement('input'));
            </script>
        ";
    }
else
 echo $result[0];

?>


<script type="text/javascript" src="main.js"></script>
	

</body>
</html>

