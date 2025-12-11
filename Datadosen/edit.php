<?php
include '../koneksi.php';

$xnidn = $_GET['Nidn'];
$sql = "SELECT * FROM tbl_dosen WHERE Nidn='$xnidn'";
$query = mysqli_query($conn, $sql);
$mhs = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Data Dosen</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-header bg-warning text-dark">
                <h4 class="mb-0">Edit Data Dosen</h4>
            </div>

            <div class="card-body">
                <form action="proses_edit.php" method="post">

                    <div class="mb-3">
                        <label class="form-label">NIDN</label>
                        <input type="text" name="Nidn" class="form-control" value="<?= $mhs['Nidn']; ?>" readonly>
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
                        <label class="form-label">Email</label>
                        <input type="email" name="Email" class="form-control" value="<?= $mhs['Email']; ?>" required>
                    </div>

                    <button type="submit" class="btn btn-warning">Update</button>
                    <a href="Dosen.php" class="btn btn-secondary">Kembali</a>

                </form>
            </div>
        </div>
    </div>

</body>

</html>