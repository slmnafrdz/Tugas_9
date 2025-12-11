<?php
include '../koneksi.php';

$vidnilai = $_POST['Id_Nilai'];
$vnilai = $_POST['Nilai'];
$vnilaihuruf = $_POST['NilaiHuruf'];
$vkodematkul = $_POST['KodeMatkul'];
$vnim = $_POST['Nim'];
$vnidn = $_POST['Nidn'];

$sqlUpdate = "UPDATE tbl_nilai SET Nilai='$vnilai', NilaiHuruf='$vnilaihuruf', KodeMatkul='$vkodematkul', Nim='$vnim', Nidn='$vnidn'
 WHERE Id_Nilai='$vidnilai'";
$query = mysqli_query($conn, $sqlUpdate);

if ($query) {
    header("Location: Nilai.php");
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
