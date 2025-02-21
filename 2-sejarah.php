<?php
require_once 'config.php';

// Ambil data dari tabel berita atau data lainnya
$query = "SELECT * FROM berita ORDER BY tanggal DESC";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <title>SMP Negeri 3 Malang</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet"/>
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
            background: url(./img/profil.jpg) no-repeat center center/cover;
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

        .content {
            padding: 40px 20px;
            max-width: 1200px;
            margin: auto;
            line-height: 1.8;
            color: #333;
        }

        .section h1 {
            font-size: 28px;
            margin-bottom: 15px;
            color: black;
            text-align: center;
        }

        .section hr {
            border: none;
            height: 2px;
            background-color: black;
            margin: 10px 0 20px;
            max-width: 80%;
            margin-left: auto;
            margin-right: auto;
        }

        .section p {
            margin-bottom: 20px;
            font-size: 18px;
            text-align: justify;
        }

        .container {
            padding: 40px 20px;
            text-align: center;
        }

        .container h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: black;
        }

        .gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-bottom: 60px;
        }

        .photo-container {
            position: relative;
            width: 300px;
            height: 200px;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .photo-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease, opacity 0.3s ease;
        }

        .photo-container:hover img {
            transform: scale(1.1);
            opacity: 0.9;
        }

        .caption {
            position: absolute;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.6);
            color: white;
            width: 100%;
            padding: 10px;
            text-align: center;
            font-size: 14px;
        }

        /* Gaya untuk Tabel */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 40px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table th, table td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: center;
        }

        table th {
            background-color: #007bff;
            color: white;
        }

        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        /* Footer */
        .footer {
            background-color: #007bff;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 40px;
            width: 100%;
        }
    </style>
</head>
<body>
<header>
    <div class="banner4">
        <div class="banner-content">
            <h2>PROFIL</h2>
            <h2>SEJARAH SMP NEGERI 3 MALANG</h2>
        </div>
    </div>
</header>

<div class="content">
    <div class="section">
        <h1>Sejarah</h1>
        <hr/>
        <p>
            SMP Negeri 3 berdiri pada tanggal 17 Maret 1950 dengan nama MULOWILHELMINA. Sebagai sekolah yang didirikan oleh pemerintah Belanda diperuntukkan untuk anak-anak Belanda dan pribumi. Diberi nama Wilhelmina karena waktu itu nama jalan tempat SMP Negeri 3 adalah jalan Wilhelmina. Kemudian pada tahun 1960 namanya berubah menjadi SMP 3 Negeri yang dimiliki sepenuhnya oleh pemerintah Republik Indonesia.
        </p>
        <p>
            Keberadaannya diresmikan melalui Surat Keputusan Menteri Pendidikan, Pengajaran dan Kebudayaan Republik Indonesia No. 187/SK/B/III/1960, tanggal 25 Mei 1960. SMP Negeri 3 Malang mempunyai semboyan Bintaraloka, singkatan dari Bina Taruna Adi Loka, yang berarti tempat untuk menggodok pemuda-pemuda menjadi pribadi yang utama. Dengan semboyan tersebut diharapkan seluruh siswa SMP Negeri 3 Malang akan menjadi pribadi-pribadi yang unggul dalam karakter, terampil, mandiri dan berwawasan luas.
        </p>
    </div>
</div>

<div class="container">
    <h1>Dokumentasi Kegiatan SMP Negeri 3 Malang Tahun 90-an</h1>
    <div class="gallery">
        <div class="photo-container">
            <img src="./img/sej1.jpg" alt="Dokumentasi 1">
            <div class="caption">Wisata ke Candi Borobudur saat lulusan di Masa Kampanye.</div>
        </div>
        <div class="photo-container">
            <img src="./img/sej2.jpg" alt="Dokumentasi 2">
            <div class="caption">Acara lomba perayaan ulang tahun sekolah.</div>
        </div>
    </div>
</div>

<!-- Tabel Data CRUD -->
<div class="container">
    <h1>Data Berita</h1>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Tanggal</th>
                <th>Gambar</th>
                <th>Konten</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            while ($row = mysqli_fetch_assoc($result)): ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= htmlspecialchars($row['judul']) ?></td>
                    <td><?= htmlspecialchars($row['tanggal']) ?></td>
                    <td>
                        <?php if (!empty($row['gambar'])): ?>
                            <img src="uploads_berita/<?= htmlspecialchars($row['gambar']) ?>" alt="Gambar" width="100">
                        <?php else: ?>
                            Tidak ada gambar
                        <?php endif; ?>
                    </td>
                    <td><?= nl2br(htmlspecialchars($row['konten'])) ?></td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>

<div class="footer">
    &copy; 2025 SMP Negeri 3 Malang. Hak Cipta Dilindungi.
</div>
</body>
</html>
