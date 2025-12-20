<?php
include '../koneksi.php';
$namaFile = $_FILES['file_gambar']['name'];
$lokasiSementara = $_FILES['file_gambar']['tmp_name'];
$lokasiTujuan = '../folderFoto/' . $namaFile;

$terupload = move_uploaded_file($lokasiSementara, $lokasiTujuan);

if ($terupload) {
    $vnim = $_POST['Nim'];
    $vnama = $_POST['Nama'];
    $vprodi = $_POST['Prodi'];
    $vangkatan = $_POST['Angkatan'];
    $vemail = $_POST['Email'];
    $vimg = $lokasiTujuan;

    $querySimpan = "INSERT INTO tbl_mahasiswa (Nim, Nama, Prodi, Angkatan, Email, image) 
VALUES ('$vnim', '$vnama', '$vprodi', '$vangkatan', '$vemail', '$vimg')";

    mysqli_query($conn, $querySimpan);
    header('Location:Mahasiswa.php');
} else {
    echo "File gagal di upload";
    echo "<a href='Mahasiswa.php'>Kembali ke Form</a>";
}
