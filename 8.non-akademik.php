<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SMP Negeri 3 Malang</title>
        <link rel="stylesheet" href="style.css">
        <style>
            .banner2 {
                position: relative;
                background: url(./img/non_akademik.png) no-repeat center center/cover;
                height: 300px;
                display: flex;
                justify-content: center;
                align-items: center;
                color: white;
                text-align: center;
            }

            .banner2::before {
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
            
            .prestasi-akademik {
                text-align: center;
                padding: 10px 10px;
            }

            .prestasi-akademik h2 {
                font-size: 36px;
                font-weight: bold;
                margin-bottom: 20px;
                color: #000000;
                transition: color 0.3s ease-in-out;
            }

            .prestasi-akademik h2:hover {
                color: #000000; 
            }

            .prestasi-akademik .achievements-container {
                display: flex;
                justify-content: center;
                gap: 50px 50px;
                flex-wrap: wrap;
            }

            .prestasi-akademik .achievement {
                position: relative;
                transition: transform 0.3s ease-in-out; 
            }

            .prestasi-akademik .achievement img {
                width: 400px;
                height: auto;
                border-radius: 50px;
                box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
                transition: transform 0.3s, box-shadow 0.3s; 
            }

            .prestasi-akademik .achievement img:hover {
                transform: scale(1.1);
                box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.4); 
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
            <div class="banner2 non-akademik">
                <div class="banner-content">
                    <h2>PRESTASI</h2>
                    <h2>PRESTASI NON AKADEMIK SMP NEGERI 3 MALANG</h2>
                </div>
        </header>

        <section class="prestasi-akademik">
            <h2>Prestasi Non Akademik</h2>
            <div class="achievements-container">
                <div class="achievement">
                    <img src="./img/non_akademik1.png" alt="Ghaitsa Zahira" class="resized-image">
                </div>
                <div class="achievement">
                    <img src="./img/non_akademik2.png" alt="Amir Marmora Reansyah" class="resized-image">
                </div>
                <div class="achievement">
                    <img src="./img/non_akademik3.png" alt="Allmira Sukshma Negara" class="resized-image">
                </div>
                <div class="achievement">
                    <img src="./img/non_akademik4.png" alt="Marvel Putra Dinata" class="resized-image">
                </div>
                <div class="achievement">
                    <img src="./img/non_akademik5.png" alt="Drupada Apta Gemilang" class="resized-image">
                </div>
                <div class="achievement">
                    <img src="./img/non_akademik6.png" alt="Pramesti Wikrama Cetta Suryaputri" class="resized-image">
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
