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

        <footer class="footer">
            <div class="footer-title">
                <h2>SMP NEGERI 3 MALANG</h2>
                <p>Jl. Dr. Cipto No.20, 3, Klojen, Kec. Klojen, Kota Malang, Jawa Timur 65111</p>
            </div>
            <div class="footer-content">
                <div class="footer-section contact">
                    <h3>Kontak</h3>
                    <p>Telp: (0341) 362612</p>
                    <p>Email: smpn3mlg@smpn3-mlg.sch.id</p>
                </div>
                <div class="footer-section social">
                    <h3>Sosial Media</h3>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
                <div class="footer-section location">
                    <h3>Lokasi</h3>
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.504839634048!2d112.618639314773!3d-7.966620794262!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd629b1b1b1b1b1%3A0x1b1b1b1b1b1b1b1b!2sSMP%20Negeri%203%20Malang!5e0!3m2!1sid!2sid!4v1634567890123!5m2!1sid!2sid" 
                        allowfullscreen="" 
                        loading="lazy">
                    </iframe>
                </div>
            </div>
        </footer>
    </body>
</html>