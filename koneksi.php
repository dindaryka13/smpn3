<?php
$host = "localhost";
$user = "root"; // Sesuaikan dengan database Anda
$pass = ""; // Sesuaikan dengan database Anda
$db   = "smp3_website"; // Sesuaikan dengan database Anda

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
function catatAktivitas($admin_id, $deskripsi, $conn) {
    $deskripsi = mysqli_real_escape_string($conn, $deskripsi);
    $query = "INSERT INTO aktivitas (admin_id, deskripsi, created_at) 
              VALUES ('$admin_id', '$deskripsi', NOW())";
    mysqli_query($conn, $query);
}

?>
