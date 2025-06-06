<?php
$file=fopen("sample1.txt","a");

// if (feof==$file){
// echo "New file is created.";
// }else{
//     echo "It will erase the existing file.";
// }
$text="hello hello";
$text="hello smriti";
$text="hello Poudel";
$text="hello laptop";
fwrite($file,$text);
echo "Written text file.";
fclose($file);  