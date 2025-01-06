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
            
            .berita-galeri-achievements-container {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                gap: 30px; 
                margin-top: 20px;
            }

            .berita-galeri-achievement {
                background-color: #ecf0f1;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                margin-top: 30px;
            }

            .berita-galeri-achievement img {
                width: 100%;
                border-radius: 10px;
                margin-bottom: 20px; 
            }

            .berita-galeriachievement h3 {
                margin: 15px 0;
                line-height: 1.6;
            }

            .berita-galeri {
                padding: 40px 20px;
                background-color: #ffffff;
                text-align: center;
            }

            .berita-galeri h2 {
                font-size: 32px;
                margin-bottom: 10px;
                color: #000000;
            }

            .berita-galeri h3 {
                font-size: 26px;
                margin-bottom: 30px;
                color: #2c6e49;
            }

            .berita-container {
                max-width: 1200px;
                margin: 0 auto;
                display: flex;
                flex-direction: column;
                gap: 30px;
            }

            .berita-item {
                display: flex;
                flex-direction: row;
                align-items: flex-start;
                background-color: #3ca869;
                border-radius: 15px;
                overflow: hidden;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                color: #000000;
                padding: 20px;
                width: 100%;
                margin: 0 auto;
            }

            .berita-item img {
                width: 300px;
                height: auto;
                border-radius: 10px;
                margin-right: 20px;
            }

            .berita-content {
                flex: 1;
                font-size: 18px;
                text-align: left;
                padding: 10px;
            }

            .berita-content p {
                margin: 0 0 15px;
                line-height: 1.6;
            }

            .berita-content a {
                color: #000000;
                font-weight: bold;
                text-decoration: none;
                font-size: 16px;
            }

            .berita-content a:hover {
                text-decoration: underline;
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
                    <h2>BERITA DAN GALERI</h2>
                    <h2>BERITA SMP NEGERI 3 MALANG</h2>
                   </div>
                </div>
        </header>

        <section class="berita-galeri">
            <h2>BERITA</h1>
            <div class="berita-container">
                <div class="berita-item">
                    <img src="./img/berita1.png" alt="From Zero to Hero">
                    <div class="berita-content">
                        <p>From Zero to Hero, Pentingnya Kegigihan dalam Mengejar Mimpi (Alumni Mengajar di Bintaraloka)</p>
                        <a href="https://anitamath.co/from-zero-to-hero-pentingnya-kegigihan-dalam-mengejar-mimpi-alumni-mengajar-di-bintaraloka/" target="_blank">lihat selengkapnya....</a>
                    </div>
                </div>
                <div class="berita-item">
                    <img src="./img/berita2.png" alt="Literasi">
                    <div class="berita-content">
                        <p>Menceritakan Kembali, Sebuah Pengembangan Gerakan Literasi Sekolah</p>
                        <a href="https://anitamath.co/menceritakan-kembali-sebuah-pengembangan-gerakan-literasi-sekolah/" target="_blank">lihat selengkapnya....</a>
                    </div>
                </div>
                <div class="berita-item">
                    <img src="./img/berita3.png" alt="Pilkatos">
                    <div class="berita-content">
                        <p>Pilkatos, Sebuah Cara Merayakan Demokrasi dengan Gembira</p>
                        <a href="https://anitamath.co/pilketos-sebuah-praktik-nyata-demokrasi-di-sekolah/" target="_blank">lihat selengkapnya....</a>
                    </div>
                </div>
                <div class="berita-item">
                    <img src="./img/berita4.png" alt="Pondok Ramadhan dan Pondok Kasih">
                    <div class="berita-content">
                        <p>Pondok Ramadhan dan Pondok Kasih, Sebuah Potret Moderasi Beragama di Bumi Bintaraloka</p>
                        <a href="https://anitamath.co/pondok-ramadhan-dan-pondok-kasih-potret-indahnya-moderasi-beragama-di-bumi-bintaraloka/" target="_blank">lihat selengkapnya....</a>
                    </div>
                </div>
                <div class="berita-item">
                    <img src="./img/berita5.png" alt="Lomba Tujuh Belasan">
                    <div class="berita-content">
                        <p>Lomba Tujuh Belasan, Bukan Sekedar Hura-hura dan Berbagi Ceria</p>
                        <a href="https://anitamath.co/lomba-tujuh-belasan-bukan-sekedar-hura-hura-dan-berbagi-ceria/" target="_blank">lihat selengkapnya....</a>
                    </div>
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