<?php
require_once 'config.php';

// Ambil data visi dan misi dari database
$query = "SELECT * FROM visi_misi ORDER BY type ASC, id DESC";
$result = mysqli_query($conn, $query);

$visi = "";
$misi = "";

while ($row = mysqli_fetch_assoc($result)) {
    if ($row['type'] == 'visi') {
        $visi .= "<p>" . htmlspecialchars($row['content']) . "</p>";
    } else {
        $misi .= "<p>" . htmlspecialchars($row['content']) . "</p>";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMP Negeri 3 Malang</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        /* Banner tetap sama */
        .banner4 {
            position: relative;
            background: url(./img/PROFIL.JPG) no-repeat center center/cover;
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

        /* Perbaikan CSS hanya untuk isi konten */
        .content {
            padding: 40px; /* Menambah jarak agar lebih nyaman */
        }

        .section {
            margin-bottom: 30px; /* Jarak antar bagian */
            padding: 20px; /* Jarak dalam kotak */
            border-radius: 8px; /* Sudut lebih halus */
            background: #f0f0f0; /* Warna latar belakang lebih terang */
        }

        .section h3 {
            font-size: 24px;
            color: #333;
            margin-bottom: 15px;
            text-transform: uppercase;
        }

        .section p {
            font-size: 16px;
            line-height: 1.8;
            text-align: justify;
            color: #555;
            margin-top: 10px;
        }

        hr {
            border: 0;
            height: 2px;
            background: #ddd;
            margin: 10px 0;
        }
    </style>
</head>
<body>

<header>
    <div class="banner4">
        <div class="banner-content">
            <h2>PROFIL</h2>
            <h2>VISI DAN MISI SMP NEGERI 3 MALANG</h2>
        </div>
    </div>
</header>

<div class="content">
    <div class="section">
        <h3>VISI</h3>
        <hr/>
        <div id="visi-content">
            <?= $visi ?>
        </div>
    </div>

    <div class="section">
        <h3>MISI</h3>
        <hr/>
        <div id="misi-content">
            <?= $misi ?>
        </div>
    </div>
</div>
</body>
</html>
