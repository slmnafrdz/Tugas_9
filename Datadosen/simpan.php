<?php
include '../koneksi.php';

$vnidn = $_POST['Nidn'];
$vnama = $_POST['Nama'];
$vprodi = $_POST['Prodi'];
$vemail = $_POST['Email'];

$cek = mysqli_query($conn, "SELECT * FROM tbl_dosen WHERE Nidn='$vnidn'");
if (mysqli_num_rows($cek) > 0) {
    echo "NIDN sudah terdaftar, gunakan NIDN lain.";
} else {
    $querySimpan = "INSERT INTO tbl_dosen (Nidn, Nama, Prodi, Email) 
                    VALUES ('$vnidn', '$vnama', '$vprodi', '$vemail')";
    mysqli_query($conn, $querySimpan);
    header('Location: Dosen.php');
}
