<?php include '../koneksi.php';
$query = mysqli_query($conn, "SELECT * FROM tbl_nilai");
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Data Nilai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2>Data Nilai Mahasiswa</h2>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID_NILAI</th>
                    <th>NILAI</th>
                    <th>NILAI HURUF</th>
                    <th>KODE MATKUL</th>
                    <th>NIM</th>
                    <th>NIDN</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($data = mysqli_fetch_assoc($query)) : ?>
                    <tr>
                        <td><?php echo $data['Id_Nilai']; ?></td>
                        <td><?php echo $data['Nilai']; ?></td>
                        <td><?php echo $data['NilaiHuruf']; ?></td>
                        <td><?php echo $data['KodeMatkul']; ?></td>
                        <td><?php echo $data['Nim']; ?></td>
                        <td><?php echo $data['Nidn']; ?></td>
                        <td>
                            <a href="edit.php?Id_Nilai=<?= $data['Id_Nilai']; ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="delet.php?Id_Nilai=<?= $data['Id_Nilai']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
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