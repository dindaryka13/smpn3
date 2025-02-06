<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMP Negeri 3 Malang</title>
    <link rel="stylesheet" href="style.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
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

        /* Kegiatan Kesiswaan */
        .Kegiatan-kesiswaan {
            padding: 80px 20px;
            text-align: center;
            background-color: white;
        }

        .Kegiatan-kesiswaan h2 {
            font-size: 32px;
            font-weight: bold;
            color: #2c3e50;
            margin-bottom: 50px;
        }

        /* Grid untuk kegiatan */
        .achievements-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(450px, 1fr));
            gap: 40px;
            max-width: 1200px;
            margin: auto;
            padding: 0 20px;
        }

        .achievement {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            text-align: center;
        }

        .achievement:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }

        .achievement img {
            width: 100%;
            border-radius: 15px;
            margin-bottom: 20px;
            max-height: 250px;
            object-fit: cover;
        }

        .achievement p {
            font-size: 18px;
            color: #555;
            line-height: 1.8;
        }

        .achievement h3 {
            font-size: 24px;
            color: #2c3e50;
            margin: 15px 0;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .banner4 {
                height: 250px;
            }
            .banner4 h2 {
                font-size: 26px;
            }
            .Kegiatan-kesiswaan h2 {
                font-size: 28px;
            }
            .achievements-container {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="banner4">
            <div class="banner-content">
                <h2>KEGIATAN KESISWAAN</h2>
                <h2>SMP NEGERI 3 MALANG</h2>
            </div>
        </div>
    </header>

    <section class="Kegiatan-kesiswaan">
        <h2>Kegiatan Kesiswaan</h2>
        <div class="achievements-container">
            <div class="achievement">
                <img src="./img/kesiswaan1.png" alt="Jumat Aksi">
                <p><strong>Minggu ke-1</strong></p>
                <h3>Jumat Aksi</h3>
                <p>Siswa menampilkan bakat mereka, mulai dari bernyanyi, menari, hingga membaca puisi.</p>
            </div>
            <div class="achievement">
                <img src="./img/kesiswaan2.png" alt="Jumat Literasi">
                <p><strong>Minggu ke-2</strong></p>
                <h3>Jumat Literasi</h3>
                <p>Siswa menyampaikan kembali apa yang telah mereka baca dan tulis dalam buku literasi.</p>
            </div>
            <div class="achievement">
                <img src="./img/kesiswaan3.png" alt="Jumat Sehat">
                <p><strong>Minggu ke-3</strong></p>
                <h3>Jumat Sehat</h3>
                <p>Siswa membawa bekal makanan sehat dan makan bersama-sama.</p>
            </div>
            <div class="achievement">
                <img src="./img/kesiswaan4.png" alt="Jumat Pokja">
                <p><strong>Minggu ke-4</strong></p>
                <h3>Jumat Pokja</h3>
                <p>Siswa mengikuti kegiatan pokja untuk meningkatkan kerja sama dan kepemimpinan.</p>
            </div>
        </div>
    </section>
</body>
</html>
