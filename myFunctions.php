<?php 

function isFound ( $file)
{

	if (file_exists($file)) 
{
   
	return " The File (<span> ".substr( substr($file, strlen(__dir__)+1) , 0,strpos( substr($file, strlen(__dir__)+1) ,"."))." </span> ) is Found";
	file_put_contents($file, "Added From PHP ");
	# code...
}
else
return " The File (<span> ".substr( substr($file, strlen(__dir__)+1) , 0,strpos( substr($file, strlen(__dir__)+1) ,"."))." </span> )is  Not Found";
}

function isWritable($file)
{ 
	if (is_writable($file))
	 {
		 file_put_contents($file, "Added000000 ");
		 return array('true'," The File { ".$file." } is writable ");
	}
	else
	return array('false'," But, sory File Not Writable Press 1 to make it writable ");

}


?>