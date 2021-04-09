<?php

$dBservername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "solusvacci";


$conn = mysqli_connect($dBservername,$dBUsername,$dBPassword,$dBName);


if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}
