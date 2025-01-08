<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SMP Negeri 3 Malang</title>
        <link rel="stylesheet" href="style.css">
        <style>
            .banner4 {
                position: relative;
                background: url(./img/alumni.png) no-repeat center center/cover;
                height: 300px;
                display: flex;
                justify-content: center;
                align-items: center;
                color: white;
                text-align: center;
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
                background-color: rgba(0, 0, 0, 0); 
                padding: 20px;
                border-radius: 10px;
            }

            .banner h1 {
                font-size: 36px;
                margin-bottom: 10px;
            }

            .banner h2 {
                font-size: 24px;
            }
            
            .gallery {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                padding: 20px;
            }

            .gallery-item {
                background-color: #79cf9a;
                color: rgb(0, 0, 0);
                margin: 10px;
                border-radius: 10px;
                overflow: hidden;
                width: calc(33% - 20px); 
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }

            .gallery-item img {
                width: 100%;
                height: auto;
            }

            .gallery-item p {
                padding: 10px;
                text-align: center;
                margin: 0;
            }

            @media (max-width: 768px) {
                .gallery-item {
                    width: calc(50% - 20px);
                }
            }

            @media (max-width: 480px) {
                .gallery-item {
                    width: calc(100% - 20px); 
                }
            }

            body {
                font-family: Arial, sans-serif;
            }

            .gallery {
                display: flex;
                gap: 20px;
                padding: 20px;
            }
            .gallery-item {
                background-color: #fff3f3;
                padding: 20px;
                border-radius: 5px;
                text-align: center;
                width: 150px;
            }
            .add-item .plus-label {
                display: block;
                font-size: 36px;
                cursor: pointer;
            }

            .toggle-form-checkbox {
                display: none;
            }
        </style>
    </head>
    <body>
        <header>
            <div class="banner3 kesiswaan">
                <div class="banner-content">
                    <h2>BERITA DAN GALERI</h2>
                    <h2>GALERI SMP NEGERI 3 MALANG</h2>
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
                    <p>Peringantan Hari Pahlawan</p>
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
                    <img src="./img/galeri7.png" alt="Kegiatan MPLS">
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