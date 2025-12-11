<?php
include '../koneksi.php';

$vkodematkul = $_POST['KodeMatkul'];
$vnamamatkul = $_POST['NamaMatkul'];
$vsks = $_POST['Sks'];
$vnidn = $_POST['Nidn'];
$sqlUpdate = "UPDATE tbl_matkul SET NamaMatkul='$vnamamatkul', Sks='$vsks', Nidn='$vnidn'
 WHERE KodeMatkul='$vkodematkul'";
$query = mysqli_query($conn, $sqlUpdate);

if ($query) {
    header("Location: Matkul.php");
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
