<?php
$host = "localhost"; // Ganti jika server database berbeda
$user = "root"; // Ganti dengan username database Anda
$pass = ""; // Ganti dengan password database Anda
$dbname = "smp3_website"; // Nama database

// Membuat koneksi
$conn = mysqli_connect($host, $user, $pass, $dbname);

// Cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
