<?php
require_once 'config.php'; // Koneksi database

// Berita unggulan (berita terbaru)
$featured_query = "SELECT * FROM berita ORDER BY tanggal DESC LIMIT 1";
$featured_result = mysqli_query($conn, $featured_query);
$featured_news = mysqli_fetch_assoc($featured_result);

// Berita terbaru (4 berita setelah berita unggulan)
$latest_query = "SELECT * FROM berita ORDER BY tanggal DESC LIMIT 4 OFFSET 1";
$latest_result = mysqli_query($conn, $latest_query);
$latest_news = [];
while ($row = mysqli_fetch_assoc($latest_result)) {
    $latest_news[] = $row;
}

// Fungsi menghitung waktu lalu
function time_ago($datetime) {
    $now = new DateTime();
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);

    if ($diff->y > 0) return $diff->y . ' tahun yang lalu';
    if ($diff->m > 0) return $diff->m . ' bulan yang lalu';
    if ($diff->d > 0) return $diff->d . ' hari yang lalu';
    if ($diff->h > 0) return $diff->h . ' jam yang lalu';
    if ($diff->i > 0) return $diff->i . ' menit yang lalu';
    return 'baru saja';
}

// Format tanggal
function format_date($date) {
    return date('d M Y', strtotime($date));
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Berita</title>
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
            max-width: 1200px;
            margin: 20px auto;
        }
        h1, h2 {
            text-align: center;
        }
        .btn-selengkapnya {
            display: inline-block;
            padding: 8px 15px;
            background-color: #2c6e49;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            margin-top: 10px;
        }
        .btn-selengkapnya:hover {
            background-color: #2c6e49;
        }
        .featured-news img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            border-radius: 10px;
        }
        .news-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }
        .news-card {
            background-color: white;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .news-card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            border-radius: 10px;
        }
        .news-title {
            font-size: 18px;
            margin: 10px 0;
            color: #333;
        }
        .news-footer {
            font-size: 14px;
            color: #777;
        }
        .banner4 {
            position: relative;
            background: url(./img/bannerkegiatan.png) no-repeat center center/cover;
            height: 320px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
            padding: 20px;
        }
        .banner4::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1;
        }
        .banner-content {
            position: relative;
            z-index: 2;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
        }
        .banner4 h2 {
            font-size: 32px;
            font-weight: bold;
            margin: 5px 0;
        }
    </style>
</head>
<body>

<header>
    <div class="banner4">
        <div class="banner-content">
            <h2>BERITA DAN GALERI</h2>
            <h2>GALERI SMP NEGERI 3 MALANG</h2>
        </div>
    </div>
</header>

<div class="container">
    <h1>Portal Berita Sekolah</h1>

    <!-- Berita Unggulan -->
    <?php if ($featured_news): ?>
        <div class="featured-news">
            <h2>Berita Unggulan</h2>
            <img src="uploads_berita/<?php echo htmlspecialchars($featured_news['gambar']); ?>" alt="Gambar Berita">
            <h3><?php echo htmlspecialchars($featured_news['judul']); ?></h3>
            <p><?php echo nl2br(htmlspecialchars(substr($featured_news['konten'], 0, 200))); ?>...</p>
            <small><?php echo format_date($featured_news['tanggal']); ?> - <?php echo time_ago($featured_news['tanggal']); ?></small>
            <br>
            <a href="detail_berita.php?id=<?php echo $featured_news['id']; ?>" class="btn-selengkapnya">Lihat Selengkapnya →</a>
        </div>
    <?php else: ?>
        <p>Tidak ada berita unggulan.</p>
    <?php endif; ?>

    <!-- Berita Terbaru -->
    <h2>Berita Terbaru</h2>
    <div class="news-grid">
        <?php foreach ($latest_news as $news): ?>
            <div class="news-card">
                <img src="uploads_berita/<?php echo htmlspecialchars($news['gambar']); ?>" alt="Gambar Berita">
                <h3 class="news-title"><?php echo htmlspecialchars($news['judul']); ?></h3>
                <p><?php echo nl2br(htmlspecialchars(substr($news['konten'], 0, 100))); ?>...</p>
                <div class="news-footer">
                    <span><?php echo format_date($news['tanggal']); ?></span> • 
                    <span><?php echo time_ago($news['tanggal']); ?></span>
                </div>
                <a href="detail_berita.php?id=<?php echo $news['id']; ?>" class="btn-selengkapnya">Lihat Selengkapnya →</a>
            </div>
        <?php endforeach; ?>

        <?php if (empty($latest_news)): ?>
            <p>Tidak ada berita terbaru.</p>
        <?php endif; ?>
    </div>
</div>

</body>
</html>
