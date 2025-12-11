<?php
include '../koneksi.php';

$vkodematkul = $_POST['KodeMatkul'];
$vnamamatkul = $_POST['NamaMatkul'];
$vsks = $_POST['Sks'];
$vnidn = $_POST['Nidn'];
$querySimpan = "INSERT INTO tbl_matkul (KodeMatkul, NamaMatkul, Sks, Nidn) 
VALUES ('$vkodematkul', '$vnamamatkul', '$vsks', '$vnidn')";

mysqli_query($conn, $querySimpan);
header('Location: Matkul.php');