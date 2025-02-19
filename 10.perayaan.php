<?php
$koneksi = mysqli_connect("localhost", "root", "", "smp3_website");

// Periksa koneksi database
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Ambil Data dari Database
$perayaan = mysqli_query($koneksi, "SELECT * FROM perayaan ORDER BY id DESC");

if (!$perayaan) {
    die("Error mengambil data: " . mysqli_error($koneksi));
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perayaan SMPN 3 Malang</title>
    <link rel="stylesheet" href="style.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }

        /* Banner */
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

        /* Container */
        .section-container {
            padding: 60px 20px;
            text-align: center;
            background-color: white;
        }
        .section-container h2 {
            font-size: 32px;
            font-weight: bold;
            color: #2c3e50;
            margin-bottom: 50px;
        }

        /* Gallery Layout */
        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            max-width: 1200px;
            margin: auto;
            padding: 0 20px;
            margin-bottom: 80px;
        }
        .gallery-item {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            text-align: center;
            padding: 20px;
        }
        .gallery-item:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }
        .gallery-item img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 20px;
        }
        .gallery-item p {
            font-size: 18px;
            color: #555;
            line-height: 1.6;
            font-weight: 500;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .banner4 {
                height: 250px;
            }
            .banner4 h2 {
                font-size: 26px;
            }
            .section-container h2 {
                font-size: 28px;
            }
            .gallery {
                grid-template-columns: 1fr 1fr;
            }
        }

        @media (max-width: 480px) {
            .gallery {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>

<header>
    <div class="banner4">
        <div class="banner-content">
            <h2>KEGIATAN PERAYAAN</h2>
            <h2>SMP NEGERI 3 MALANG</h2>
        </div>
    </div>
</header>

<section class="section-container">
    <h2>Dokumentasi Kegiatan Perayaan</h2>
    <div class="gallery">
        <?php if (mysqli_num_rows($perayaan) > 0): ?>
            <?php while ($row = mysqli_fetch_assoc($perayaan)): ?>
                <div class="gallery-item">
                    <img src="uploads_perayaan/<?= htmlspecialchars($row['gambar']) ?>" alt="<?= htmlspecialchars($row['judul']) ?>">
                    <p><?= htmlspecialchars($row['judul']) ?></p>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <p>Tidak ada dokumentasi kegiatan.</p>
        <?php endif; ?>
    </div>
</section>

</body>
</html>
