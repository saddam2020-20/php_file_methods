<?php 


$name = 'saddam';

if(is_dir($name))
{

	rmdir($name);
	echo "The File Name ".$name. " Has Been Removed <br />";
}

else
{
	mkdir($name);
	$file = __dir__.'\\'.$name.'\\'.$name.'.text';
	file_put_contents($file, 'Adding From Php');
	echo "The Directory ".$name." Has been Created And The File $name has been created ";
}