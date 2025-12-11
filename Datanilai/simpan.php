<?php
include '../koneksi.php';

$vidnilai = $_POST['Id_Nilai'];
$vnilaihuruf = $_POST['NilaiHuruf'];
$vkodematkul = $_POST['KodeMatkul'];
$vnim = $_POST['Nim'];
$vnidn = $_POST['Nidn'];
$querySimpan = "INSERT INTO tbl_nilai (Id_Nilai, NilaiHuruf, KodeMatkul, Nim, Nidn) 
VALUES ('$vidnilai', '$vnilaihuruf', '$vkodematkul', '$vnim', '$vnidn')";

mysqli_query($conn, $querySimpan);  
header('Location: Nilai.php');
