<?php
$serverName ="";
$dbUsername="";
$dbPassword="";
$dbName="";

$conn = mysqli_connect($serverName,$dbUsername,$dbPassword,$dbName);

if (!$conn){
    die("Connection failed: " .mysqli_connect_error());
}