<?php

$filename = 'saddam.txt';
$file = fopen($filename,'r+');

//echo "This is contents of file : ". $read .'<br>';

fseek($file,5);
$write =fwrite($file, 'saddam');
fseek($file,5, SEEK_CUR);
$write =fwrite($file, 'current');
$read = fread($file,filesize($filename));
//fclose($file);

echo $read;

