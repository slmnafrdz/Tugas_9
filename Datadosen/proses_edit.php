<?php
include '../koneksi.php';

$vnidn = $_POST['Nidn'];
$vnama = $_POST['Nama'];
$vprodi = $_POST['Prodi'];
$vemail = $_POST['Email'];

$sqlUpdate = "UPDATE tbl_dosen SET Nama='$vnama', Prodi='$vprodi', Email='$vemail'
 WHERE Nidn='$vnidn'";
$query = mysqli_query($conn, $sqlUpdate);

if ($query) {
    header("Location: Dosen.php");
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
