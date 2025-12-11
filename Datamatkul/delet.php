<?php
include '../koneksi.php';

$vkodematkul = $_GET['KodeMatkul'];

$sqlDelete = "DELETE FROM tbl_matkul WHERE KodeMatkul='$vkodematkul'";
$query = mysqli_query($conn, $sqlDelete);
if ($query) {
    header("Location: Matkul.php");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
