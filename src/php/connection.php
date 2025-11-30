<?php
$server = "localhost";
$database = "example";
$username = "root";
$password = "";


$connection = mysqli_connect($server,$username,$password,$database);

if(!$connection){
    die('Connection refused');
}
?>