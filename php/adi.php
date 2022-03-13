<?php

$server = "sql303.epizy.com";
$username = "epiz_30961509";
$password = "X5BsFbIcCz";
$dbname = "epiz_30961509_adityafinancedata";


$conn = mysqli_connect($server,$username,$password,$dbname);

if(!$conn){
     die("connection failed:".mysqli_connect_error());

}