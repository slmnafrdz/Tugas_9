<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Menu Data Kampus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #fff;
        }

        .menu-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-radius: 12px;
        }

        .menu-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
        }

        .menu-icon {
            font-size: 40px;
            color: #2575fc;
        }

        .list-group-item {
            border: none;
            font-weight: 500;
            transition: background 0.3s ease, color 0.3s ease;
        }

        .list-group-item:hover {
            background: #2575fc;
            color: #fff;
        }

        .fade-in {
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>
    <div class="container mt-5 fade-in">
        <div class="text-center mb-5">
            <h2 class="fw-bold">📚 CIAKAD </h2>
            <p class="text-light">Kelola Data Kampus</p>
        </div>

        <div class="row g-4">
            <div class="col-md-3">
                <div class="card menu-card text-center p-3">
                    <div class="menu-icon mb-3">👨‍🎓</div>
                    <h5 class="card-title">Data Mahasiswa</h5>
                    <a href="mahasiswa.php" class="btn btn-primary mt-3">Lihat</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card menu-card text-center p-3">
                    <div class="menu-icon mb-3">👩‍🏫</div>
                    <h5 class="card-title">Data Dosen</h5>
                    <a href="dosen.php" class="btn btn-primary mt-3">Lihat</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card menu-card text-center p-3">
                    <div class="menu-icon mb-3">📖</div>
                    <h5 class="card-title">Data Mata Kuliah</h5>
                    <a href="matkul.php" class="btn btn-primary mt-3">Lihat</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card menu-card text-center p-3">
                    <div class="menu-icon mb-3">📝</div>
                    <h5 class="card-title">Data Nilai</h5>
                    <a href="nilai.php" class="btn btn-primary mt-3">Lihat</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.querySelectorAll('.btn').forEach(btn => {
            btn.addEventListener('click', () => {
                btn.classList.add('btn-success');
                setTimeout(() => btn.classList.remove('btn-success'), 500);
            });
        });
    </script>
</body>

</html>