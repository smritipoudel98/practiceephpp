<?php
echo"<pre>";

$myFile=fopen("sample.txt","r");
// echo fread($myFile,filesize("sample.txt"));
echo fgets($myFile);//(give one line of sentence.)
echo fgets($myFile);//(give second line of sentence.)
echo fgets($myFile);//(give third line of sentence.)

fclose($myFile);
echo "</pre>";
?>