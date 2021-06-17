<?php
$serverName="localhost";
$userName="epiz_28889819";
$password="";
$dbName="test";
//connection
global $conn;
  $conn=mysqli_connect($serverName,$userName,$password,$dbName);

if(mysqli_connect_errno()){
    echo "display failed";
    exit();
}




?>