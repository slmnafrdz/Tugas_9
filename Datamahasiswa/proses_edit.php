<?php
include '../koneksi.php';

$vnim = $_POST['Nim'];
$vnama = $_POST['Nama'];
$vprodi = $_POST['Prodi'];
$vangkatan = $_POST['Angkatan'];
$vemail = $_POST['Email'];

$sqlUpdate = "UPDATE tbl_mahasiswa SET Nama='$vnama', Prodi='$vprodi', Angkatan='$vangkatan', Email='$vemail'
 WHERE Nim='$vnim'";
$query = mysqli_query($conn, $sqlUpdate);

if ($query) {
    header("Location: Mahasiswa.php");
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
