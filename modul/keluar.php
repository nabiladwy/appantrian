<?php
session_start();

// Periksa apakah sesi aktif (id diset)
if (isset($_SESSION['id'])) {
    // Hapus semua data sesi
    session_unset();
    // Hancurkan sesi
    session_destroy();
    // Arahkan ke halaman login
    header('Location: ../login.php');
    exit; // Pastikan script berhenti setelah header
} else {
    // Jika tidak ada sesi, arahkan langsung ke login
    header('Location: ../login.php');
    exit;
}
?>
