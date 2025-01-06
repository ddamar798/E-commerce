<?php 

$host = "localhost";
$user = "root";
$password = "";
$db = "web_toko";

// Membuat koneksi ke database
$db = mysqli_connect($host, $user, $password, $db);

// Periksa koneksi
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}