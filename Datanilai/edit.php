<?php
include '../koneksi.php';

$xidnilai = $_GET['Id_Nilai'];
$sql = "SELECT * FROM tbl_nilai WHERE Id_Nilai='$xidnilai'";
$query = mysqli_query($conn, $sql);
$mhs = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Data Nilai</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-header bg-warning text-dark">
                <h4 class="mb-0">Edit Data Nilai</h4>
            </div>

            <div class="card-body">
                <form action="proses_edit.php" method="post">

                    <div class="mb-3">
                        <label class="form-label">Id_Nilai</label>
                        <input type="text" name="Id_Nilai" class="form-control" value="<?= $mhs['Id_Nilai']; ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nilai</label>
                        <input type="text" name="Nilai" class="form-control" value="<?= $mhs['Nilai']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">NilaiHuruf</label>
                        <input type="text" name="NilaiHuruf" class="form-control" value="<?= $mhs['NilaiHuruf']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">KodeMatkul</label>
                        <input type="text" name="KodeMatkul" class="form-control" value="<?= $mhs['KodeMatkul']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nim</label>
                        <input type="text" name="Nim" class="form-control" value="<?= $mhs['Nim']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nidn</label>
                        <input type="text" name="Nidn" class="form-control" value="<?= $mhs['Nidn']; ?>" required>
                    </div>
                    <button type="submit" class="btn btn-warning">Update</button>
                    <a href="Nilai.php" class="btn btn-secondary">Kembali</a>
                </form>
            </div>
        </div>
    </div>

</body>

</html>