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
                color:rgb(0, 0, 0);
                line-height: 2; 
            }

            
        .achievements-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); /* Mengatur grid lebih responsif */
            gap: 15px; /* Mengurangi jarak antar elemen */
        }

            .Kegiatan-kesiswaan .achievement {
                background-color: #ecf0f1;
                padding: 0px;
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
                    <h2>PRESTASI</h2>
                    <h2>PRESTASI NON AKADEMIK SMP NEGERI 3 MALANG</h2>
                </div>
        </header>

        <section class="Kegiatan-kesiswaan">
            <h2>Kegiatan Perayaan</h2>
            <div class="achievements-container">
                <div class="achievement">
                    <img src="./img/perayaan1.png" alt="Jumat Aksi" class="resized-image">
                    <h3>Hari Kemerdekaan</h3>
                    <p>Kegiatan Tahunan di SMP Negeri 3 yang wajib dilaksanakan.</p>
                    <p>Yaitu Perayaan Hari Kemerdekaan Indonesia.</p>
                    <p>Sekolah menggelar perlombaan dan upacara wajib.</p>
                </div>
                <div class="achievement">
                    <img src="./img/perayaan2.png" alt="Jumat Aksi" class="resized-image">
                    <h3>Perayaan Ulang Tahun SMP Negeri 3 Malang</h3>
                    <p>Perayaan Ulang Tahun SMP Negeri 3 Malang selalu di selenggarakan secara</p>
                    <p>meriah apa yang telah dibaca dan di tulis di buku literasi nya selama satu bulan.</p>
                </div>
                <div class="achievement">
                    <img src="./img/perayaan3.png" alt="Jumat Aksi" class="resized-image">
                    <h3>Hari Batik Nasional</h3>
                    <p>Merayakan Hari Batik Nasional. Siswa beserta guru dan staff</p>
                    <p>SMP Negeri 3 Malang mengenakan baju batik bebas dan melaksanakan apel.</p>
                </div>
                <div class="achievement">
                    <img src="./img/perayaan4.png" alt="Jumat Aksi" class="resized-image">
                    <h3>Perayaan Maulid Nabi</h3>
                    <p>Merayakan Maulid Nabi Muhammad dengan meriah dengan pertunjukkan band</p>
                    <p>muslim serta mengundang narasumber dari luar sekolah.</p>
                </div>
            </div>
        </section>
    </body>
</html>