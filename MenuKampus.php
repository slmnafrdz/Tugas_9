<?php
include 'koneksi.php';
include 'Login/blok_login.php';
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Dashboard CIAKAD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f4f6f9;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        /* SIDEBAR */
        .sidebar {
            height: 100vh;
            background: #343a40;
            color: white;
            padding-top: 20px;
            position: fixed;
            width: 250px;
        }

        .sidebar h4 {
            text-align: center;
            margin-bottom: 30px;
        }

        .sidebar a {
            display: block;
            padding: 12px 20px;
            color: #adb5bd;
            text-decoration: none;
            font-size: 16px;
            transition: 0.2s;
        }

        .sidebar a:hover {
            background: #495057;
            color: white;
        }

        /* CONTENT */
        .content {
            margin-left: 260px;
            padding: 30px;
        }

        .hero-box {
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            border-radius: 15px;
            padding: 40px;
            color: white;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }

        .info-card {
            border-radius: 12px;
            padding: 20px;
            background: white;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .chart-box {
            height: 300px;
            background: white;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        /* PROFILE & SETTINGS */
        .profile-card,
        .settings-card {
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .profile-img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid #6a11cb;
        }
    </style>
</head>
<body>

    <!-- SIDEBAR -->
    <div class="sidebar">
        <h4>📚 CIAKAD</h4>
        <a href="Datamahasiswa/Mahasiswa.php">👨‍🎓 Data Mahasiswa</a>
        <a href="Datadosen/Dosen.php">👩‍🏫 Data Dosen</a>
        <a href="Datamatkul/Matkul.php">📖 Data Mata Kuliah</a>
        <a href="Datanilai/Nilai.php">📝 Data Nilai</a>
        <a href="Login/logout.php" class="text-danger">🔓 Logout</a>

        <hr style="border-color:#555;">

        <a href="#" onclick="showSection('profil')">👤 Profil</a>
        <a href="#" onclick="showSection('pengaturan')">⚙️ Pengaturan</a>
    </div>

    <!-- CONTENT -->
    <div class="content">

        <!-- DEFAULT DASHBOARD -->
        <div id="dashboard-section">
            <div class="hero-box mb-4">
                <h2>Selamat Datang di Dashboard CIAKAD</h2>
                <p>Kelola Data Kampus Politeknik Enjinering Indorama dengan mudah dan cepat.</p>
            </div>

            <div class="row mb-4">
                <div class="col-md-4">
                    <div class="info-card">
                        <h5>Jumlah Mahasiswa</h5>
                        <p class="text-primary fs-3 fw-bold">1.240</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="info-card">
                        <h5>Jumlah Dosen</h5>
                        <p class="text-success fs-3 fw-bold">54</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="info-card">
                        <h5>Program Studi</h5>
                        <p class="text-danger fs-3 fw-bold">4</p>
                    </div>
                </div>
            </div>
            <div class="chart-box">
                <h5 class="mb-3">Berita Kampus & Motivasi Mahasiswa</h5>

                <div class="row">
                    <!-- Gambar Berita -->
                    <div class="col-md-5">
                        <img src=""
                            class="img-fluid rounded mb-3" alt="Berita Kampus">
                    </div>

                    <!-- Teks Berita -->
                    <div class="col-md-7">
                        <h5 class="fw-bold">📢 Kegiatan Terbaru Kampus</h5>
                        <p>
                            Politeknik Enjinering Indorama kembali mengadakan kegiatan pengembangan soft skill
                            untuk seluruh mahasiswa. Kegiatan ini bertujuan meningkatkan kemampuan komunikasi,
                            kepemimpinan, dan kesiapan kerja mahasiswa dalam menghadapi dunia industri modern.
                        </p>

                        <hr>

                        <h5 class="fw-bold">✨ Motivasi Hari Ini</h5>
                        <p class="fst-italic">
                            “Kesuksesan bukan milik mereka yang pintar, tetapi milik mereka yang tidak pernah menyerah.”
                        </p>

                        <p class="text-primary fw-bold">
                            Teruslah belajar, berkembang, dan percaya pada prosesmu!
                        </p>
                    </div>
                </div>
            </div>

        </div>

        <!-- PROFIL -->
        <div id="profil-section" style="display:none;">
            <div class="profile-card">
                <h3 class="mb-3">👤 Profil Pengguna</h3>
                <div class="text-center mb-4">
                    <img src="WhatsApp Image 2025-12-11 at 20.00.41_2e7c6b27.jpg"
                        class="profile-img" alt="Foto Profil">
                </div>

                <p><strong>Nama:</strong> Salman Alfaridzi</p>
                <p><strong>Email:</strong> admin@kampus.ac.id</p>
                <p><strong>Role:</strong> Administrator</p>
                <p><strong>Terakhir Login:</strong> Hari ini</p>
            </div>
        </div>

        <!-- PENGATURAN -->
        <div id="pengaturan-section" style="display:none;">
            <div class="settings-card">
                <h3 class="mb-3">⚙️ Pengaturan Akun</h3>

                <form>
                    <div class="mb-3">
                        <label class="form-label">Ubah Nama</label>
                        <input type="text" class="form-control" placeholder="Masukkan nama baru">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Ubah Email</label>
                        <input type="email" class="form-control" placeholder="Masukkan email baru">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Ubah Password</label>
                        <input type="password" class="form-control" placeholder="Password baru">
                    </div>

                    <button class="btn btn-primary">Simpan Perubahan</button>
                </form>
            </div>
        </div>

    </div>

    <script>
        function showSection(section) {
            document.getElementById('dashboard-section').style.display = 'none';
            document.getElementById('profil-section').style.display = 'none';
            document.getElementById('pengaturan-section').style.display = 'none';

            if (section === 'profil') {
                document.getElementById('profil-section').style.display = 'block';
            } else if (section === 'pengaturan') {
                document.getElementById('pengaturan-section').style.display = 'block';
            }
        }
    </script>

</body>

</html>