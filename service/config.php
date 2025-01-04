<?php 

$host = "localhost";
$db = "toko";
$user = "root";
$password = "";

$db = mysqli_connect($host,$user,$password,$db);

if (!$db) {
    die("Connection failed: ". mysqli_connect_error());
}

