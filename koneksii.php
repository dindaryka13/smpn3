<?php
// Konfigurasi database
$db_host = 'localhost';     // Host database
$db_user = 'root';         // Username database
$db_pass = '';             // Password database
$db_name = 'smp3_website';   // Nama database

// Membuat koneksi
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

// Cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Set charset ke utf8
mysqli_set_charset($conn, "utf8");
?>