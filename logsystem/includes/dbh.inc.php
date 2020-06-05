<?php 




$servername = "localhost";

$dBUesrname = "root";

$dBPassword = "";

$dBName = "logsystemtest";



$conn = mysqli_connect($servername, $dBUesrname, $dBPassword, $dBName);

if (!$conn) {
    
    die("Connection failed: ". mysqli_connect_error() );
}