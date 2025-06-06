<?php
$host="localhost";
$username="root";
$password="root";
$db_name="file_handling";

$conn=new mysqli("$host","$username","$password","$db_name");
if(!$conn){
    die("Your are not connected to the databases..");
}