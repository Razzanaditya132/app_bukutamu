<?php
// Panggil file function.php
require_once 'function.php';

// Jika ada id
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    if (hapus_tamu($id) > 0) {
        // Jika data berhasil dihapus maka akan muncul alert
        echo "<script>alert('Data Berhasil dihapus!');</script>";
        // Redirect ke halaman buku-tamu.php
        echo "<script>window.location.href='buku-tamu.php';</script>";
    } else {
        // Jika gagal dihapus
        echo "<script>alert('Data Gagal dihapus!');</script>";
    }
}
