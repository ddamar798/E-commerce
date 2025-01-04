<?php 

$host = "localhost";
$db = "perpustakaan";
$user = "";
$password = 12345678;

$dsn="mysql:host=$host;dbname=$db;charset=utf8";
try{
    $pdo=new PDO($dsn,$user,$password);
    $pdo->setAttribute((PDO::ATTR_ERRMODE == PDO::ERRMODE_EXCEPTION));
}