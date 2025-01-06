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
            <div class="navbar">
                <div class="logo-container">
                    <img src="./img/LOGO.png" alt="Logo Sekolah" class="logo">
                    <span class="school-name">SMP NEGERI 3 MALANG</span>
                </div>
                <div class="nav-links">
                    <a href="1.home.html">Beranda</a>
                    <div class="dropdown">
                        <button class="dropbtn">Profil</button>
                        <div class="dropdown-content">
                            <a href="2.sejarah.html">Sejarah</a>
                            <a href="3.profil-guru.html">Profil Guru</a>
                            <a href="4.visimisi.html">Visi dan Misi</a>
                        </div>
                    </div>
                    <div class="nav-links">
                        <a href="5.sarpras.html">Sarana Prasarana</a>
                    </div> 
                    <div class="nav-links">
                        <a href="6.ekstrakulikuler.html">Ekstrakurikuler</a>
                    </div> 
                    <div class="dropdown">
                        <button class="dropbtn">Prestasi</button>
                        <div class="dropdown-content">
                            <a href="7.akademik.html">Akademik</a>
                            <a href="8.non-akademik.html">Non Akademik</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="dropbtn">Kegiatan</button>
                        <div class="dropdown-content">
                            <a href="9.kesiswaan.html">Kesiswaan</a>
                            <a href="10.perayaan.html">Perayaan</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="dropbtn">Berita dan Galeri</button>
                        <div class="dropdown-content">
                            <a href="11.berita.html">Berita</a>
                            <a href="12.galeri.html">Galeri</a>
                        </div>
                    </div>
                    <div class="nav-links">
                        <a href="13.alumni.html">Alumni</a>
                    </div> 
                </div>
            </div>
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
                    <iframe>
                        <src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.504839634048!2d112.618639314773!3d-7.966620794262!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd629b1b1b1b1b1%3A0x1b1b1b1b1b1b1b1b!2sSMP%20Negeri%203%20Malang!5e0!3m2!1sid!2sid!4v1634567890123!5m2!1sid!2sid"></src>
                        <allowfullscreen=""></allowfullscreen> 
                        <loading="lazy">
                    </iframe>
                </div>
            </div>
        </footer>
    </body>
</html>