<?php
require_once 'config.php'; // Koneksi database

// Cek apakah ID berita tersedia di URL
if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // Pastikan ID adalah integer

    // Query untuk mengambil detail berita berdasarkan ID
    $query = "SELECT * FROM berita WHERE id = $id";
    $result = mysqli_query($conn, $query);

    if ($news = mysqli_fetch_assoc($result)) {
        // Data berita ditemukan
        $judul = htmlspecialchars($news['judul']);
        $gambar = htmlspecialchars($news['gambar']);
        $konten = nl2br(htmlspecialchars($news['konten']));
        $tanggal = date('d M Y', strtotime($news['tanggal']));
    } else {
        echo "<p>Berita tidak ditemukan.</p>";
        exit;
    }
} else {
    echo "<p>ID berita tidak valid.</p>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $judul; ?></title>
    <style>
        <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f5f5f5;
        color: #333;
        margin: 0;
        padding: 0;
    }
    .container {
        width: 90%;
        max-width: 800px;
        margin: 20px auto;
        background-color: white;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
    }
    img {
        display: block;
        max-width: 600px; /* Ukuran maksimal gambar */
        height: auto;     /* Menjaga aspek rasio */
        margin: 0 auto 20px auto; /* Center gambar */
        border-radius: 10px;
    }
    h1 {
        font-size: 28px;
        margin-bottom: 10px;
        text-align: center;
    }
    p {
        line-height: 1.6;
        text-align: justify;
    }
    .back-link {
        display: inline-block;
        margin-top: 20px;
        padding: 8px 15px;
        background-color: #2c6e49;
        color: white;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }
    .back-link:hover {
        background-color: #2c6e49;
    }
</style>

    </style>
</head>
<body>

<div class="container">
    <h1><?php echo $judul; ?></h1>
    <p><strong>Tanggal: </strong><?php echo $tanggal; ?></p>
    <img src="uploads_berita/<?php echo $gambar; ?>" alt="Gambar Berita">
    <p><?php echo $konten; ?></p>

    <a href="berita.php" class="back-link">← Kembali ke Berita</a>
</div>

</body>
</html>
