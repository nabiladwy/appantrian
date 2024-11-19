<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Antrian Pasien</title>
    <style>
        /* Reset default styling */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        /* Body styling */
        body {
            background-color: #1a1a2e; /* Dark blue background */
            color: #fff; /* White text */
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        /* Container styling */
        .container {
            width: 90%;
            max-width: 800px;
            background-color: #162447; /* Slightly lighter dark blue */
            border-radius: 10px;
            padding: 25px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }

        h2 {
            color: #00aaff; /* Bright blue for title */
            font-size: 26px;
            margin-bottom: 20px;
            text-align: center;
        }

        /* Table styling */
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 14px;
            text-align: center;
            coba
        }

        th {
            background-color: #1f4068; /* Blue shade for header */
            color: #fff;
            font-weight: bold;
        }

        td {
            border-bottom: 1px solid #444; /* Subtle line */
        }

        /* Row styling */
        tr:nth-child(even) {
            background-color: #1b1b3a; /* Slightly lighter blue */
        }

        tr:hover {
            background-color: #284c6b; /* Hover effect */
        }

        /* Link styling */
        a {
            color: #00d4ff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        /* Action button styling */
        .action-buttons a {
            padding: 7px 12px;
            border-radius: 5px;
            margin: 0 5px;
            font-weight: bold;
            display: inline-block;
        }

        .edit-button {
            background-color: #00aaff;
            color: #fff;
        }

        .delete-button {
            background-color: #ff4d4d;
            color: #fff;
        }

        .edit-button:hover {
            background-color: #008fcc;
        }

        .delete-button:hover {
            background-color: #e63939;
        }
    </style>
</head>
<body>

<div class="container">
    <?php
        include '../lib/koneksi.php';

        $sql = "SELECT * FROM antrian";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        echo "<h2>Daftar Antrian Pasien</h2>";
        echo "<table>
        <tr>
        <th>No</th>
        <th>Nama Pasien</th>
        <th>Nomor Antrian</th>
        <th>Waktu Kedatangan</th>
        <th>Status</th>
        <th style='width: 200px;'>Aksi</th>
        
        </tr>";

        $antrian = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if (count($antrian) > 0) {
            $no = 1;
            foreach ($antrian as $row) {
                echo "<tr>
                <td>".$no."</td>
                <td>".$row["nama_pasien"]."</td>
                <td>".$row["nomor_antrian"]."</td>
                <td>".$row["waktu_kedatangan"]."</td>
                <td>".$row["status"]."</td>
                <td class='action-buttons'>
                    <a href='ubah_status.php?id=".$row["id"]."' class='edit-button'>Status</a>
                    <a href='hapus_antrian.php?id=".$row["id"]."' class='delete-button'>Hapus</a>
                </td>
                </tr>";
                $no++;
            }
            echo "</table>";
        } else {
            echo "<p style='text-align: center; margin-top: 20px;'>Tidak ada antrian</p>";
        }

        $conn = null;
    ?>
</div>

</body>
</html>
