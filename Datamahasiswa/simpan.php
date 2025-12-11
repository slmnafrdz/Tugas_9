<?php
include '../koneksi.php';

$vnim = $_POST['Nim'];
$vnama = $_POST['Nama'];
$vprodi = $_POST['Prodi'];
$vangkatan = $_POST['Angkatan'];
$vemail = $_POST['Email'];

$querySimpan = "INSERT INTO tbl_mahasiswa (Nim, Nama, Prodi, Angkatan, Email) 
VALUES ('$vnim', '$vnama', '$vprodi', '$vangkatan', '$vemail')";

mysqli_query($conn, $querySimpan);
header('Location: Mahasiswa.php');
