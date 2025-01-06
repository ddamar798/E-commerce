<?php

include("config.php");

if (isset($_POST['register'])) {
    // Ambil data dari form input
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    // Validasi input (pastikan tidak kosong)
    if (empty($username) || empty($email) || empty($password)) {
        header("Location: register.php?status=empty_fields");
        exit();
    }

    // Hash password sebelum disimpan ke database
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Buat query SQL menggunakan prepared statement
    $sql = "INSERT INTO akun (username, email, password) VALUES ('$username', '$email', '$password')";
    //$stmt = mysqli_prepare($db, $sql);

    if ($stmt) {
        // Bind parameter dan eksekusi
        mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPassword);
        $query = mysqli_stmt_execute($stmt);

        // Periksa hasil query
        if ($query) {
            header("Location: dashboard.php?status=success");
            exit();
        } else {
            header("Location: dashboard.php?status=fail");
            exit();
        }
    } else {
        // Jika query gagal dipersiapkan
        header("Location: dashboard.php?status=error");
        exit();
    }
}
?>