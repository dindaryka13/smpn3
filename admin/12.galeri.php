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

        /* Galeri */
        .prestasi-akademik {
            padding: 60px 20px;
            text-align: center;
            background-color: white;
        }

        .prestasi-akademik h2 {
            font-size: 32px;
            font-weight: bold;
            color: #2c3e50;
            margin-bottom: 50px;
        }

        /* Grid Galeri */
        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            max-width: 1200px;
            margin: auto;
            padding: 0 20px;
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
            height: auto;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .gallery-item p {
            font-size: 18px;
            color: #555;
            line-height: 1.6;
            font-weight: 500;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .banner4 {
                height: 250px;
            }
            .banner4 h2 {
                font-size: 26px;
            }
            .prestasi-akademik h2 {
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
                <h2>BERITA DAN GALERI</h2>
                <h2>GALERI SMP NEGERI 3 MALANG</h2>
            </div>
        </div>
    </header>

    <section class="prestasi-akademik">
        <h2>GALERI</h2>
        <div class="gallery">
            <div class="gallery-item">
                <img src="./img/galeri1.png" alt="Pementasan P5">
                <p>Pementasan P5</p>
            </div>
            <div class="gallery-item">
                <img src="./img/galeri2.png" alt="Peringatan Hari Pahlawan">
                <p>Peringatan Hari Pahlawan</p>
            </div>
            <div class="gallery-item">
                <img src="./img/galeri3.png" alt="Pramuka">
                <p>Pramuka</p>
            </div>
            <div class="gallery-item">
                <img src="./img/galeri4.png" alt="Kegiatan Motivasi Alumni Mengajar">
                <p>Kegiatan Motivasi Alumni Mengajar</p>
            </div>
            <div class="gallery-item">
                <img src="./img/galeri5.png" alt="Jumat Aksi">
                <p>Jumat Aksi</p>
            </div>
            <div class="gallery-item">
                <img src="./img/galeri6.png" alt="Kegiatan ANBK">
                <p>Kegiatan ANBK</p>
            </div>
            <div class="gallery-item">
                <img src="./img/kegiatan_mpls.png" alt="Kegiatan MPLS">
                <p>Kegiatan MPLS</p>
            </div>
            <div class="gallery-item">
                <img src="./img/galeri8.png" alt="Kegiatan Pembelajaran Dengan Bermain Game">
                <p>Kegiatan Pembelajaran Dengan Bermain Game</p>
            </div>
            <div class="gallery-item">
                <img src="./img/galeri9.png" alt="Kegiatan Pembelajaran di Ruang Kelas">
                <p>Kegiatan Pembelajaran di Ruang Kelas</p>
            </div>
        </div>
    </section>
</body>
</html>
