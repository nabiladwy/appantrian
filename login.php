<?php
session_start();
include 'lib/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];

    // cari pengguna dari email
    $stmt = $conn->prepare("SELECT * FROM usser WHERE  email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetchAll();

    // Jika pengguna ditemukan, simpan ke session dan arahkan ke halaman utama
    if ($user) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username']; // Tambahkan session username
        header("Location: http://localhost/appantrian/appantrian/modul/default.php");
        exit();
    }else {
            $error_message = "Wah, kamu belum daftar akun nih!";
        }

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        /* Center card vertically and horizontally */
        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #eef2f5;
        }
        .card {
            width: 400px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            border: none;
        }
        .card-header {
            background-color: #0056b3;
            color: white;
            font-weight: bold;
            text-align: center;
            padding: 1rem;
        }
        .form-control:focus {
            border-color: #0056b3;
            box-shadow: none;
        }
        .btn-primary {
            background-color: #0056b3;
            border: none;
            transition: background-color 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #003d80;
        }
        .register-link a {
            color: #0056b3;
            text-decoration: none;
            font-weight: bold;
        }
        .register-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="card-header">
            <h2>Login</h2>
        </div>
        <div class="card-body p-4">
            <form method="POST">
                
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email" required>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary" name="btn">Login</button>
                </div>
                <?php if (isset($error_message)): ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $error_message; ?>
            </div>
        <?php endif; ?>

        <div class="text-center">
            <p>Belum punya akun? <a href="http://localhost/appantrian/appantrian/modul/regis.php" class="btn btn-link">Daftar Akun</a></p>

            </form>
        </div>
    </div>
</body>
</html>
