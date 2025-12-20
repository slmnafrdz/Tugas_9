<?php
include '../koneksi.php';

$xnim = $_GET['Nim'];
$sql = "SELECT * FROM tbl_mahasiswa WHERE Nim='$xnim'";
$query = mysqli_query($conn, $sql);
$mhs = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Data Mahasiswa</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-header bg-warning text-dark">
                <h4 class="mb-0">Edit Data Mahasiswa</h4>
            </div>

            <div class="card-body">
                <form action="proses_edit.php" method="post" enctype="multipart/form-data">

                    <div class="mb-3">
                        <label class="form-label">NIM</label>
                        <input type="text" name="Nim" class="form-control" value="<?= $mhs['Nim']; ?>" readonly>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" name="Nama" class="form-control" value="<?= $mhs['Nama']; ?>" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Prodi</label>
                        <select name="Prodi" class="form-select" required>
                            <option <?php if ($mhs['Prodi'] == 'TL') echo 'selected'; ?>>TL</option>
                            <option <?php if ($mhs['Prodi'] == 'TRPL') echo 'selected'; ?>>TRPL</option>
                            <option <?php if ($mhs['Prodi'] == 'TRM') echo 'selected'; ?>>TRM</option>
                            <option <?php if ($mhs['Prodi'] == 'TRMK') echo 'selected'; ?>>TRMK</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Angkatan</label>
                        <input type="text" name="Angkatan" class="form-control" value="<?= $mhs['Angkatan']; ?>" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="Email" class="form-control" value="<?= $mhs['Email']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Upload Image</label>
                        <input type="file" name="file_gambar" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-warning">Update</button>
                    <a href="Mahasiswa.php" class="btn btn-secondary">Kembali</a>

                </form>
            </div>
        </div>
    </div>

</body>

</html>