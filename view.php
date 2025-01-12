<?php
// Konfigurasi database
$host = 'localhost';
$dbname = 'pesan_kesan';
$username = 'root';
$password = '';

// Koneksi ke database
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Koneksi gagal: " . $e->getMessage());
}

// Ambil data dari database
try {
    $stmt = $pdo->query("SELECT * FROM pesan_kesan ORDER BY tanggal DESC");
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Gagal mengambil data: " . $e->getMessage());
}

// Tampilkan data
echo "<div style='width: 80%; margin: 20px auto;'>";
foreach ($data as $row) {
    echo "<div style='padding: 20px; background: #fff; margin-bottom: 10px; border-radius: 8px;'>";
    echo "<h3>{$row['nama']}</h3>";
    echo "<p>Lulusan tahun: {$row['lulusan_tahun']}</p>";
    echo "<p>Pesan dan kesan: {$row['pesan_kesan']}</p>";
    if (!empty($row['kenangan'])) {
        $files = explode(',', $row['kenangan']);
        echo "<p>Kenangan:</p>";
        foreach ($files as $file) {
            echo "<img src='{$file}' alt='Kenangan' style='width: 100px; margin-right: 10px;'>";
        }
    }
    echo "<p><small>Waktu pengisian: {$row['tanggal']}</small></p>";
    echo "</div>";
}
echo "</div>";
?>
