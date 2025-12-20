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

    $sqlUpdate = "UPDATE tbl_mahasiswa SET Nama='$vnama', Prodi='$vprodi', Angkatan='$vangkatan', Email='$vemail', image='$vimg'
 WHERE Nim='$vnim'";
    $query = mysqli_query($conn, $sqlUpdate);

    if ($query) {
        header("Location: Mahasiswa.php");
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
} else {
    echo "File gagal di upload";
    echo "<a href='Mahasiswa.php'>Kembali ke Form</a>";
}
