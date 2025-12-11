<?php
include '../koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Form Tambah Matakuliah</title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-header bg-success text-white">
                <h4 class="mb-0">Tambah Data Matakuliah</h4>
            </div>

            <div class="card-body">
                <form action="simpan.php" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Kode Matkul</label>
                        <input type="text" name="KodeMatkul" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">NamaMatkul</label>
                        <input type="text" name="NamaMatkul" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Sks</label>
                        <input type="text" name="Sks" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Nidn</label>
                        <input type="text" name="Nidn" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a href="Matkul.php" class="btn btn-secondary">Kembali</a>
                </form>
            </div>
        </div>
    </div>

</body>

</html>