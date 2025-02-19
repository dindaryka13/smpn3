<?php
$host = "localhost";
$user = "root"; // Sesuaikan dengan database Anda
$pass = ""; // Sesuaikan dengan database Anda
$db   = "smp3_website"; // Sesuaikan dengan database Anda

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
