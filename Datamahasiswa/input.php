<?php
include '../koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Form Tambah Mahasiswa</title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-header bg-success text-white">
                <h4 class="mb-0">Tambah Data Mahasiswa</h4>
            </div>

            <div class="card-body">
                <form action="simpan.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label class="form-label">NIM</label>
                        <input type="text" name="Nim" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" name="Nama" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Prodi</label>
                        <select name="Prodi" class="form-select" required>
                            <option value="TL">TL</option>
                            <option value="TRPL">TRPL</option>
                            <option value="TRM">TRM</option>
                            <option value="TRMK">TRMK</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Angkatan</label>
                        <input type="text" name="Angkatan" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="Email" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Upload Image</label>
                        <input type="file" name="file_gambar" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a href="Mahasiswa.php" class="btn btn-secondary">Kembali</a>

                </form>
            </div>
        </div>
    </div>

</body>

</html>