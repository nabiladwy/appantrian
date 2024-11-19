<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background-color: #e7f0fc;
            font-family: Arial, sans-serif;
        }
        .header {
            background-color: #007bff;
            color: #ffffff;
            padding: 30px;
            text-align: center;
            border-bottom: 3px solid #0056b3;
        }
        .header h1 {
            font-size: 2.5rem;
        }
        .header p {
            margin-top: -10px;
            font-size: 1.2rem;
        }
        .card {
            border: none;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 15px;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }
        .card img {
            border-radius: 15px;
            transition: opacity 0.3s;
        }
        .card img:hover {
            opacity: 0.8;
        }
        .card h3 {
            color: #0056b3;
        }
        .btn-logout {
            background-color: #ff4d4d;
            border: none;
            font-size: 1rem;
        }
        .btn-logout:hover {
            background-color: #e60000;
        }
    </style>
</head>
<body>

<div class="header">
    <img src="../img/pluss.png" style="width:100px; margin: 30px;" alt="">
    <p>Selamat Datang! Siap Beraksi Hari Ini.</p>
    <a href="keluar.php" class="btn btn-logout" style="color: white;">Logout</a>
</div>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4 mb-4">
            <div class="card text-center">
                <div class="p-4">
                    <h3>Tambah Antrian</h3>
                    <a href="tambah_antrian.php">
                        <img src="../img/04.jpg" alt="Tambah Antrian" class="img-fluid">
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card text-center">
                <div class="p-4">
                    <h3>Daftar Antrian</h3>
                    <a href="daftar_antrian.php">
                        <img src="../img/02.jpg" alt="Daftar Antrian" class="img-fluid">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
