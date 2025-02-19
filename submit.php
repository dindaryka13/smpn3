<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $tahun_lulusan = $_POST['year'];
    $pesan = $_POST['pesan'];
    $foto_nama = "";

    // Cek jika ada file yang diupload
    if (!empty($_FILES['foto']['name'])) {
        $target_dir = "uploads_pesan/";
        $foto_nama = basename($_FILES["foto"]["name"]);
        $target_file = $target_dir . $foto_nama;

        move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file);
    }

    // Simpan ke database
    $sql = "INSERT INTO pesan (nama, tahun_lulusan, pesan, foto) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("siss", $nama, $tahun_lulusan, $pesan, $foto_nama);

    if ($stmt->execute()) {
        header("Location: 13-alumni.php"); // Refresh halaman setelah submit
    } else {
        echo "Terjadi kesalahan: " . $stmt->error;
    }
}
?>
