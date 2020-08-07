<?php

$filename = fopen('saddam.txt','r');

$content = fread($filename, filesize('saddam.txt'));
echo $content;