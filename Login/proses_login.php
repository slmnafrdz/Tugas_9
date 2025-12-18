<?php
session_start();
include '../koneksi.php';
if (isset($_SERVER['REQUEST_METHOD']) == 'POST') {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $sql = "SELECT id , role FROM tbl_user WHERE username='$user' AND password='$pass'";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($result);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['login_user'] = $user;
        $_SESSION['role'] = $data['role'];
        header("Location: ../MenuKampus.php");
    } else {
        echo "Username atau Password salah!";
    }
}
