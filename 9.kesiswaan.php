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
            
            .Kegiatan-kesiswaan {
                padding: 40px 20px;
                background-color: white;
                text-align: center;
            }

            .Kegiatan-kesiswaan h2 {
                font-size: 28px;
                margin-bottom: 30px; 
                color: #2c3e50;
                line-height: 2; 
            }

            .Kegiatan-kesiswaan .achievements-container {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                gap: 30px; 
                margin-top: 20px;
            }

            .Kegiatan-kesiswaan .achievement {
                background-color: #ecf0f1;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                margin-top: 30px; 
            }

            .Kegiatan-kesiswaan .achievement img {
                width: 100%;
                border-radius: 10px;
                margin-bottom: 20px; 
            }

            .Kegiatan-kesiswaan .achievement h3 {
                margin: 15px 0;
                line-height: 1.6;
            }


            .achievement.academic {
                margin-top: 0; 
                padding: 10px; 
                box-shadow: none; 
            }

            .achievement.academic img {
                margin-bottom: 10px;
            }

            .achievement.academic h3 {
                font-size: 22px; 
                line-height: 1.4; 
            }
        </style>
    </head>
    <body>
        <header>
            <div class="banner3 kesiswaan">
                <div class="banner-content">
                    <div class="overlay"></div>
                    <h2>KEGIATAN</h2>
                    <h2>KESISWAAN SMP NEGERI 3 MALANG</h2>
                   </div>
                </div>
        </header>

        <section class="Kegiatan-kesiswaan">
            <h2>Kegiatan Kesiswaan</h2>
            <div class="achievements-container">
                <div class="achievement">
                    <img src="./img/kesiswaan1.png" alt="Jumat Aksi" class="resized-image">
                    <p>Minggu ke-1</p>
                    <h2>Jumat Aksi</h2>
                    <p>Siswa Siswi SMPN 3 Malang menunjukkan bakatnya,</p>
                    <p>mulai dari bernyanyi, menari atau membaca puisi.</p>
                </div>
                <div class="achievement">
                    <img src="./img/kesiswaan2.png" alt="Jumat Aksi" class="resized-image">
                    <p>Minggu ke-2</p>
                    <h2>Jumat Literasi</h2>
                    <p>Siswa Siswi SMPN 3 Malang menyampaikan kembali</p>
                    <p>apa yang telah dibaca dan di tulis di buku literasi nya selama satu bulan.</p>
                </div>
                <div class="achievement">
                    <img src="./img/kesiswaan3.png" alt="Jumat Aksi" class="resized-image">
                    <p>Minggu ke-3</p>
                    <h2>Jumat Sehat</h2>
                    <p>Siswa Siswi SMPN 3 Malang membawa bekal makanan sehat</p>
                    <p>dan di makan bersama-sama.</p>
                </div>
                <div class="achievement">
                    <img src="./img/kesiswaan4.png" alt="Jumat Aksi" class="resized-image">
                    <p>Minggu ke-4</p>
                    <h2>Jumat Pokja</h2>
                    <p>Siswa Siswi SMPN 3 Malang melakukan pokja.</p>
                </div>
            </div>
        </section>
    </body>
</html>