<?php
// Konfigurasi database
$host = 'localhost'; // Server database
$dbname = 'pesan_kesan'; // Nama database
$username = 'root'; // Username database (default: root)
$password = ''; // Password database (default: kosong)

// Koneksi ke database menggunakan PDO
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Koneksi gagal: " . $e->getMessage());
}

// Cek apakah form dikirim
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Filter input dari user
    $name = htmlspecialchars($_POST['name']); // Nama alumni
    $year = intval($_POST['year']); // Tahun lulusan
    $message = htmlspecialchars($_POST['message']); // Pesan dan kesan

    // Validasi file kenangan
    $uploaded_files = []; // Array untuk menyimpan file yang berhasil di-upload
    if (!empty($_FILES['memory']['name'][0])) {
        $target_dir = "uploads/";
        if (!is_dir($target_dir)) {
            mkdir($target_dir); // Membuat folder uploads jika belum ada
        }

        foreach ($_FILES['memory']['tmp_name'] as $key => $tmp_name) {
            $file_name = basename($_FILES['memory']['name'][$key]);
            $target_file = $target_dir . $file_name;

            // Pindahkan file yang diunggah ke folder target
            if (move_uploaded_file($tmp_name, $target_file)) {
                $uploaded_files[] = $target_file;
            }
        }
    }

    // Daftar kata-kata terlarang (blacklist)
    $blacklist = ["buruk", "jelek", "kasar"];
    foreach ($blacklist as $bad_word) {
        $message = str_ireplace($bad_word, str_repeat("*", strlen($bad_word)), $message);
    }

    // Simpan data ke dalam database
    try {
        $stmt = $pdo->prepare("INSERT INTO pesan_kesan (nama, lulusan_tahun, pesan_kesan, kenangan) VALUES (:nama, :lulusan_tahun, :pesan_kesan, :kenangan)");
        $stmt->execute([
            ':nama' => $name,
            ':lulusan_tahun' => $year,
            ':pesan_kesan' => $message,
            ':kenangan' => implode(',', $uploaded_files)
        ]);
        echo "<p>Data berhasil disimpan!</p>";
    } catch (PDOException $e) {
        echo "Gagal menyimpan data: " . $e->getMessage();
    }

    // Menampilkan hasil input
    echo "<div style='margin: 20px auto; width: 80%; max-width: 600px; padding: 20px; background: #fff; border-radius: 8px;'>";
    echo "<h3>{$name}</h3>";
    echo "<p>Lulusan tahun: {$year}</p>";
    echo "<p>Pesan dan kesan: {$message}</p>";

    // Menampilkan file kenangan jika ada
    if (!empty($uploaded_files)) {
        echo "<p>Kenangan:</p>";
        foreach ($uploaded_files as $file) {
            echo "<img src='{$file}' alt='Kenangan' style='width: 100px; margin-right: 10px;'>";
        }
    }
    echo "</div>";
}
?>
