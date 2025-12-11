<?php
include '../koneksi.php';

$xkodematkul = $_GET['KodeMatkul'];
$sql = "SELECT * FROM tbl_matkul WHERE KodeMatkul='$xkodematkul'";
$query = mysqli_query($conn, $sql);
$mhs = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Data Matakuliah</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-header bg-warning text-dark">
                <h4 class="mb-0">Edit Data Matakuliah</h4>
            </div>

            <div class="card-body">
                <form action="proses_edit.php" method="post">

                    <div class="mb-3">
                        <label class="form-label">Kode Matkul</label>
                        <input type="text" name="KodeMatkul" class="form-control" value="<?= $mhs['KodeMatkul']; ?>" readonly>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">NamaMatkul</label>
                        <input type="text" name="NamaMatkul" class="form-control" value="<?= $mhs['NamaMatkul']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Sks</label>
                        <input type="text" name="Sks" class="form-control" value="<?= $mhs['Sks']; ?>" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Nidn</label>
                        <input type="text" name="Nidn" class="form-control" value="<?= $mhs['Nidn']; ?>" required>
                    </div>
                    <button type="submit" class="btn btn-warning">Update</button>
                    <a href="Matkul.php" class="btn btn-secondary">Kembali</a>
                </form>
            </div>
        </div>
    </div>

</body>

</html>