<?php include 'koneksi.php';

$query = mysqli_query($conn, "SELECT * FROM tbl_mahasiswa");
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2>Data Mahasiswa</h2>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>NIM</th>
                    <th>NAMA</th>
                    <th>PRODI</th>
                    <th>ANGKATAN</th>
                    <th>EMAIL</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($data = mysqli_fetch_assoc($query)) : ?>
                    <tr>
                        <td><?php echo $data['Nim']; ?></td>
                        <td><?php echo $data['Nama']; ?></td>
                        <td><?php echo $data['Prodi']; ?></td>
                        <td><?php echo $data['Angkat']; ?></td>
                        <td><?php echo $data['Email']; ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <a href="MenuKampus.php" class="btn btn-secondary">Kembali ke Menu</a>
    </div>
</body>

</html>