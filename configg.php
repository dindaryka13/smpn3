<?php
$host = "localhost";
$user = "root"; // Sesuaikan dengan username database
$pass = ""; // Sesuaikan dengan password database
$db   = "pesan_kesan"; // Nama database

$conn = new mysqli($host, $user, $pass, $db);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
