<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 

$folderName = 'saad';

//echo dirname($n);
$filename = __dir__.'/'.$folderName.'/'.'CV OF'.$folderName.'.text';
if (is_dir($folderName))
{ 
	if (file_exists($filename)) {
		file_put_contents($filename, " new file created from inside IF condition ",FILE_APPEND ); // Create File 
	}
	
}
else 
{
	mkdir($folderName); // Create Folder 
    file_put_contents($filename, "new File.. "); // Create File 
 
}

$link = pathinfo($filename);

echo $link['dirname'].'<br />';
echo $link['basename'].'<br />';
echo $link['extension'].'<br />';
echo $link['filename'].'<br />';



$text = file_get_contents($filename, false,null,4,13);
//echo $text;

file_put_contents('writ.text', $text);




?>
</body>
</html>



