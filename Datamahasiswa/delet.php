<?php
include '../koneksi.php';

$vnim = $_GET['Nim'];

$sqlDelete = "DELETE FROM tbl_mahasiswa WHERE Nim='$vnim'";
$query = mysqli_query($conn, $sqlDelete);
if ($query) {
    header("Location: Mahasiswa.php");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
