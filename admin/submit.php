<?php
require 'config.php';

// Fungsi filter kata kasar
function filterKata($text) {
    $badWords = ["jelek", "bodoh", "kecewa", "buruk", "kasar", "*****"];
    return str_ireplace($badWords, "***", $text);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $lulusan_tahun = $_POST['year'];

    // Filter kata kasar sebelum disimpan
    $pesan_kesan = filterKata($_POST['pesan']);

    $foto_path = "";

    // Cek apakah ada file yang diunggah
    if (!empty($_FILES["foto"]["name"])) {
        $target_dir = "uploads/";
        $foto_path = $target_dir . basename($_FILES["foto"]["name"]);

        if (!move_uploaded_file($_FILES["foto"]["tmp_name"], $foto_path)) {
            $foto_path = "";
        }
    }

    // Simpan ke database
    $stmt = $conn->prepare("INSERT INTO pesan_kesan (nama, lulusan_tahun, pesan_kesan, kenangan) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("siss", $nama, $lulusan_tahun, $pesan_kesan, $foto_path);

    if ($stmt->execute()) {
        echo "<script>
            alert('Pesan dan kesan berhasil ditambahkan!');
            window.location.href = '13-alumni.php';
        </script>";
    } else {
        echo "<script>
            alert('Terjadi kesalahan, coba lagi!');
            window.location.href = '13-alumni.php';
        </script>";
    }

    $stmt->close();
    $conn->close();
    exit();
}
?>
