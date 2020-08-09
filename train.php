<?php

function getmyserverinfo ( $mod = 'a+')
{

	$serverinfo =
 'SEVER ADDRESS is : '. $_SERVER['SERVER_ADDR'].
 '<br> SEVER NAME is : '. $_SERVER['SERVER_NAME'].
 '<br> SEVER PORT is : '. $_SERVER['SERVER_PORT'].
 '<br> SEVER SOFTWAREis : '. $_SERVER['SERVER_SOFTWARE'].
 '<br> SEVER PROTOCOL is : '. $_SERVER['SERVER_PROTOCOL'].
 '<br> DOCUMENT ROOT is : '. $_SERVER['DOCUMENT_ROOT'].
 '<br> HTTP REFERER is : '. $_SERVER['HTTP_REFERER'].
 '<br> SERVER ADMIN is : '. $_SERVER['SERVER_ADMIN'];

  $filename ='myserverinfo.txt';
 $myserverinfo = @fopen($filename, $mod);
 fwrite($myserverinfo, $serverinfo);
 fclose($myserverinfo);
 $myserverinfo = @fopen($filename, $mod);
 $read = @fread($myserverinfo, filesize($filename));
return $read;
 
}

echo getmyserverinfo('r+');

?>