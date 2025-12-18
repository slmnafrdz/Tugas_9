<?php 
include '../koneksi.php';
include '../Login/blok.php';

$query = mysqli_query($conn, "SELECT * FROM tbl_dosen");
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Data Dosen</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <style>
        body {
            background: #f4f7fb;
            font-family: 'Poppins', sans-serif;
        }

        .page-title {
            font-weight: 600;
            color: #1e90ff;
            margin-bottom: 25px;
        }

        .table-container {
            background: white;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        .btn-custom {
            border-radius: 8px;
            font-weight: 500;
        }

        .btn-warning {
            color: white !important;
        }

        .btn-secondary {
            background: #1e90ff;
            border: none;
        }

        .btn-secondary:hover {
            background: #0b70d0;
        }

        .top-buttons {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>

    <div class="container mt-5">

        <h2 class="page-title">📘 Data Dosen</h2>

        <div class="top-buttons d-flex gap-2">
            <a href="../MenuKampus.php" class="btn btn-secondary btn-custom">⬅ Kembali ke Menu</a>
            <a href="input.php" class="btn btn-primary btn-custom">➕ Tambah Data</a>
        </div>

        <div class="table-container">
            <table class="table table-hover align-middle">
                <thead class="table-primary">
                    <tr>
                        <th>NIDN</th>
                        <th>Nama</th>
                        <th>Prodi</th>
                        <th>Email</th>
                        <th style="width: 150px;">Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php while ($data = mysqli_fetch_assoc($query)) : ?>
                        <tr>
                            <td><?= $data['Nidn']; ?></td>
                            <td><?= $data['Nama']; ?></td>
                            <td><?= $data['Prodi']; ?></td>
                            <td><?= $data['Email']; ?></td>
                            <td>
                                <a href="edit.php?Nidn=<?= $data['Nidn']; ?>" class="btn btn-warning btn-sm btn-custom">✏ Edit</a>
                                <a href="delet.php?Nidn=<?= $data['Nidn']; ?>" 
                                   class="btn btn-danger btn-sm btn-custom"
                                   onclick="return confirm('Yakin ingin menghapus data ini?')">🗑 Hapus</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>

            </table>
        </div>

    </div>

</body>
</html>
