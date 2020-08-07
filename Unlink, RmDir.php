<?php

$namefile = 'saddam.txt';

if (file_exists($namefile) and is_writable($namefile)) 
{
	
	unlink($namefile);
}
else
{
	if (file_exists($namefile)) {
		
		echo "The File Is Not writable, so I will Make It Writable then delet it";
		chmod($namefile, 0777);
	}

	else
	{
		echo "Not Found :( ,  So I will Creat it now";
		file_put_contents(__dir__ .'/'.$namefile,"created" );
		
	}

	
}