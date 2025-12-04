<?php
$db_host = 'localhost';
$db_user = 'root';
$db_pass = 'salman';
$db_name = 'kampus';

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
    die("gagal terhubung Mysql: " . mysqli_connect_error());
}
