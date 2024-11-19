<?php
include '../lib/koneksi.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_pasien = $_POST['nama_pasien'];
    $nomor_antrian = $_POST['nomor_antrian'];
    $waktu_kedatangan = $_POST['waktu_kedatangan'];
    $sql = "INSERT INTO antrian (nama_pasien, nomor_antrian,
    waktu_kedatangan)  VALUES (:nama_pasien, :nomor_antrian, 
    :waktu_kedatangan)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nama_pasien', $nama_pasien);
    $stmt->bindParam(':nomor_antrian', $nomor_antrian);
    $stmt->bindParam(':waktu_kedatangan', $waktu_kedatangan);

    if ($stmt->execute()) {
        //echo "Data antrian berhasil ditambahkan!";
    } else {
        echo "Error: gagal menambahkan data.";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Antrian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
   
    <style>
        /* Style dasar untuk kesan modern */
        body {
            display: flex;
            align-items: center;
            height: 100vh;
            font-family: Arial, sans-serif;
            background-color: #f0f4f8;
            margin: 0;
        }

        .container {
            background-color: #002b5b;
            color: #ffffff;
            border-radius: 8px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            padding: 40px;
            max-width: 600px;
            width: 100%;
        }

        h2 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #ffffff;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #d9e6f2;
        }

        input[type="text"],
        input[type="number"],
        input[type="datetime-local"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: none;
            border-radius: 4px;
            background-color: #00509e;
            color: #ffffff;
            font-size: 16px;
        }

        input[type="text"]::placeholder,
        input[type="number"]::placeholder,
        input[type="datetime-local"]::placeholder {
            color: #b0c6e3;
        }

        input[type="submit"] {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 4px;
            background-color: #007bff;
            color: #ffffff;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <center><h1 class="m-5">Tambah Antrian</h1></center>
        <form method="POST" action="tambah_antrian.php">
            <label for="nama_pasien">Nama Pasien:</label>
            <input type="text" name="nama_pasien" id="nama_pasien" placeholder="Masukkan nama pasien" required>

            <label for="nomor_antrian">Nomor Antrian:</label>
            <input type="number" name="nomor_antrian" id="nomor_antrian" placeholder="Masukkan nomor antrian" required>

            <label for="waktu_kedatangan">Waktu Kedatangan:</label>
            <input type="datetime-local" name="waktu_kedatangan" id="waktu_kedatangan" required>

            <input type="submit" value="Tambah Antrian">

            <div class="mt-3 text-center">
            <button type="button" class="btn btn-light"><a href="default.php" style="color: dark; text-decoration: none;">Kembali</a></button>
                </div>
        </form>
    </div>
</body>
</html>
