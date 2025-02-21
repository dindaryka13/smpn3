<?php
require 'config.php';

// Array kata kasar yang akan difilter
$kata_kasar = ['kasar1', 'kasar2', 'kasar3', 'bodoh', 'goblok', 'anjing'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = mysqli_real_escape_string($conn, $_POST['nama']);
    $tahun_lulusan = mysqli_real_escape_string($conn, $_POST['tahun_lulusan']);
    $pesan = mysqli_real_escape_string($conn, $_POST['pesan']);
    $foto = '';

    // Filter kata kasar
    foreach ($kata_kasar as $kata) {
        if (stripos($pesan, $kata) !== false) {
            echo "<script>alert('Pesan mengandung kata yang tidak pantas! Silakan periksa kembali.'); window.history.back();</script>";
            exit();
        }
    }

    // Proses upload foto jika ada
    if (!empty($_FILES['foto']['name'])) {
        $target_dir = "uploads_pesan/";
        if (!file_exists($target_dir)) {
            mkdir($target_dir, 0777, true);
        }

        $foto = basename($_FILES['foto']['name']);
        $target_file = $target_dir . $foto;
        move_uploaded_file($_FILES['foto']['tmp_name'], $target_file);
    }

    // Simpan ke database
    $query = "INSERT INTO pesan (nama, tahun_lulusan, pesan, foto) VALUES ('$nama', '$tahun_lulusan', '$pesan', '$foto')";
    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Pesan berhasil dikirim!'); window.location='13-alumni.php';</script>";
    } else {
        echo "<script>alert('Gagal menyimpan pesan!');</script>";
    }
}
?>
