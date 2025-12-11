<?php
include '../koneksi.php';


$vnidn = $_GET['Nidn'];
mysqli_query($conn, "DELETE FROM tbl_matkul WHERE Nidn='$vnidn'");
$sqlDelete = "DELETE FROM tbl_dosen WHERE Nidn='$vnidn'";
$query = mysqli_query($conn, $sqlDelete);

if ($query) {
    header("Location: Dosen.php");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
