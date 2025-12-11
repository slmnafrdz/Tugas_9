<?php
include '../koneksi.php';

$vidnila = $_GET['Id_Nilai'];

$sqlDelete = "DELETE FROM tbl_nilai WHERE Id_Nilai='$vidnila'";
$query = mysqli_query($conn, $sqlDelete);
if ($query) {
    header("Location: Nilai.php");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
