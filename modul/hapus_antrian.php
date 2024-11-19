<?php
include '../lib/koneksi.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // Validasi id sebagai integer

    $sql = "DELETE FROM antrian WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Data antrian berhasil dihapus!";
    } else {
      echo "Error: " . $conn->error; // Menampilkan pesan error dari koneksi
    }
} 

$conn->close();
?>
