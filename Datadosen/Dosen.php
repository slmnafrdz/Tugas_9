<?php include '../koneksi.php';
$query = mysqli_query($conn, "SELECT * FROM tbl_dosen");
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Data Dosen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2>Data Dosen</h2>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>NIDN</th>
                    <th>NAMA</th>
                    <th>PRODI</th>
                    <th>EMAIL</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($data = mysqli_fetch_assoc($query)) : ?>
                    <tr>
                        <td><?php echo $data['Nidn']; ?></td>
                        <td><?php echo $data['Nama']; ?></td>
                        <td><?php echo $data['Prodi']; ?></td>
                        <td><?php echo $data['Email']; ?></td>
                        <td>
                            <a href="edit.php?Nidn=<?= $data['Nidn']; ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="delet.php?Nidn=<?= $data['Nidn']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <a href="../MenuKampus.php" class="btn btn-secondary">Kembali ke Menu</a>
        <a href="input.php" class="btn btn-secondary">Tambah Data </a>
    </div>
</body>

</html>