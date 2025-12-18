<?php
include '../koneksi.php';
session_start();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login CIAKAD</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #1e90ff, #00bfff);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-box {
            background: white;
            width: 380px;
            padding: 35px;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
            text-align: center;
        }

        .login-box h2 {
            margin-bottom: 25px;
            color: #1e90ff;
            font-weight: 600;
        }

        .input-group {
            text-align: left;
            margin-bottom: 18px;
        }

        .input-group label {
            font-size: 14px;
            font-weight: 500;
            color: #333;
        }

        .input-group input {
            width: 100%;
            padding: 12px;
            margin-top: 5px;
            border-radius: 8px;
            border: 1px solid #ccc;
            font-size: 14px;
            transition: 0.3s;
        }

        .input-group input:focus {
            border-color: #1e90ff;
            outline: none;
            box-shadow: 0 0 5px rgba(30,144,255,0.4);
        }

        .btn-login {
            width: 100%;
            padding: 12px;
            background: #1e90ff;
            border: none;
            border-radius: 8px;
            color: white;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn-login:hover {
            background: #0b70d0;
        }

        .footer-text {
            margin-top: 15px;
            font-size: 13px;
            color: #666;
        }
    </style>
</head>

<body>

    <div class="login-box">
        <h2>Login CIAKAD</h2>

        <form action="proses_login.php" method="post">

            <div class="input-group">
                <label>Username</label>
                <input type="text" name="username" placeholder="Masukkan username" required>
            </div>

            <div class="input-group">
                <label>Password</label>
                <input type="password" name="password" placeholder="Masukkan password" required>
            </div>

            <button type="submit" class="btn-login">Login</button>

        </form>

        <p class="footer-text">© 2025 CIAKAD — Sistem Informasi Kampus</p>
    </div>

</body>
</html>
