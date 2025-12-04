<?php include 'koneksi.php';
$query = mysqli_query($conn, "SELECT * FROM tbl_matkul");
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Mata Kuliah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2>Data Mata Kuliah</h2>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>KODE MATKUL</th>
                    <th>NAMA MATKUL</th>
                    <th>SKS</th>
                    <th>NIDN</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($data = mysqli_fetch_assoc($query)) : ?>
                    <tr>
                        <td><?php echo $data['KodeMatkul']; ?></td>
                        <td><?php echo $data['NamaMatkul']; ?></td>
                        <td><?php echo $data['Sks']; ?></td>
                        <td><?php echo $data['Nidn']; ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <a href="MenuKampus.php" class="btn btn-secondary">Kembali ke Menu</a>
    </div>
</body>

</html>