<?php

include ("config.php");

if(isset($_POST['register'])){

    // get data form input
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // create sql query
    $sql = "INSERT INTO akun (username, email, password) VALUES ('$username', '$email', '$password')";
    $query = mysqli_query($db,$sql);

    // check

    if ($query){
        header("Location:dashboard.php?status=success");
    } else {
        header("Location:dashboard.php?status=fail");
    } 
}