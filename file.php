<?php

$myFile=fopen("sample.txt","r");
echo fread($myFile,filesize("sample.txt"));
fclose($myFile);
?>