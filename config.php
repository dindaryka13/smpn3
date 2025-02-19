<?php
$db_host = 'localhost';
$db_user = 'root';     // sesuaikan dengan username MySQL Anda
$db_pass = '';         // sesuaikan dengan password MySQL Anda
$db_name = 'smp3_website';  // nama database yang kita buat

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>