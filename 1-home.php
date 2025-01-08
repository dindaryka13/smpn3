<html>
 <head>
  <title>
   SMP Negeri 3 Malang
  </title>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet"/>
  <style>
    body {
    font-family: 'Lato', sans-serif;
    height: 100%;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    box-sizing: border-box;
}
.hero {
    position: relative;
    z-index: 1; 
    background-size: cover;
    background-position: center;
    color: white;
    padding: 100px 0;
    text-align: center;
}

.hero.home {
    background-image: url('./img/g3fix.jpg');
}

.hero .overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.411); 
    z-index: 2; 
}

.hero h2 {
    position: relative; 
    z-index: 3; 
    font-size: 40px;
    font-weight: bold;
    text-transform: uppercase;
    color: white;
    margin: 0;
    padding: 20px;
}

.hero input {
    position: relative;
    z-index: 2;
}
.search-bar {
    
    margin: 30px auto;
    max-width: 700px;
    position: relative;
    display: flex;
}
.search-bar input {
    border: 1px solid #ccc;
    border-radius: 20px 0 0 20px;
    padding: 15px 20px;
    width: 100%;
}
.search-bar button {
    background-color: #2c6e49;
    border: none;
    border-radius: 0 20px 20px 0;
    color: white;
    padding: 10px 20px;
    cursor: pointer;
}
.content {
    margin: 20px auto;
    max-width: 1200px;
    padding: 0 20px;
}
.welcome {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 40px 20px;
            margin: 0 auto;
            max-width: 1200px;
        }

        .welcome h2 {
            font-size: 32px;
            margin-bottom: 20px;
        }

        .welcome-content {
            display: flex;
            align-items: center;
            text-align: justify;
        }

        .welcome-content img {
            border-radius: 10px;
            height: 400px;
            width: auto;
            margin-right: 20px;
        }

        .welcome-text {
            display: flex;
            flex-direction: column;
            max-width: 800px;
            font-size: 32px
        }

        .welcome-text .principal-name {
            font-weight: bold;
            font-size: 18px;
            margin-bottom: 10px;
        }

        .welcome-text .description {
            font-size: 16px;
            line-height: 1.6;
        }
.section-title {
    border-bottom: 2px solid #2c6e49;
    font-size: 24px;
    margin: 40px 0 20px;
    padding-bottom: 10px;
}
.cards {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    grid-template-columns: repeat(auto-fit, minmax(00px, 2fr));
    justify-content: space-between;
    align-items: stretch; 
}

.card {
    background-color: #f5f5f5;
    border-radius: 10px;
    flex: 1 1 calc(50% - 20px); 
    overflow: hidden;
    position: relative;
    display: flex;
    flex-direction: column; 
}

.card img {
    width: 100%;
    height: 200px; 
    object-fit: cover; 
}

.card-content {
    padding: 10px;
    flex-grow: 1;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.card-content h3 {
    font-size: 18px;
    margin-bottom: 10px;
}

.card-content a {
    background-color: #2c6e49;
    border-radius: 5px;
    color: white;
    padding: 10px 20px;
    text-decoration: none;
    align-self: flex-start;
}

.card-content a:hover {
    background-color: #4a7c59;
}

.stats {
    background-color: #f5f5f5;
    border-radius: 10px;
    display: flex;
    justify-content: space-around;
    margin: 40px 0;
    padding: 20px;
}

.stats div {
    text-align: center;
}

.gallery {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center;
}

.photo-container {
    width: 300px;
    height: 200px;
    overflow: hidden;
    border-radius: 10px;
    transition: transform 0.3s ease;
    margin: 20px;
}

.photo-container img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.photo-container:hover {
    transform: scale(1.1); 
}
.stats div {
    text-align: center;
}
.stats div h3 {
    font-size: 24px;
    margin: 0;
}
.stats div p {
    font-size: 14px;
    margin: 5px 0 0;
}

.content {
            flex: 1;
}

body {
    font-family: 'Lato', sans-serif;
    height: 100%;
    padding: 0;
    display: flex;
    flex-direction: column;
    align-items: stretch;
    box-sizing: border-box;
}
.header {
    background-color: #2c6e49;
    color: white;
    padding: 10px 20px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 100%;
    box-sizing: border-box;
}
.header img {
    height: 50px;
    vertical-align: middle;
}
.header h1 {
    display: inline;
    font-size: 24px;
    margin-left: 10px;
    vertical-align: middle;
    white-space: nowrap;
    font-family: 'Konkhmer Sleokchher', sans-serif;
}

.navbar {
    display: flex;
    align-items: center;
    justify-content: space-between;
    background-color: #26944D; 
    padding: 10px 20px;
    width: 100%;
}


.logo-container {
    display: flex;
    align-items: center;
}

.logo {
    width: 40px;
    height: 40px;
    margin-right: 10px;
}

.school-name {
    color: white;
    font-size: 20px;
    font-weight: bold;
}


.nav-links {
    display: flex;
    align-items: center;
}

.nav-links a, .dropbtn {
    color: white;
    text-decoration: none;
    padding: 14px 16px;
    font-size: 16px;
    background-color: #26944D;
    border: none;
    cursor: pointer;
}

.nav-links a:hover, .dropdown:hover .dropbtn {
    background-color: #006400; 
}


.dropdown {
    position: relative;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #162C1E; 
    min-width: 160px;
    top: 100%;
    left: 0;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    z-index: 2;
}

.dropdown-content a {
    color: white;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #006400; 
}

.dropdown:hover .dropdown-content {
    display: block;
}

.footer {
    flex-shrink: 0;
    background-color: #2f4f4f;
    color: white;
    padding: 30px 20px;
    text-align: center;
}

.footer-header {
    margin-bottom: 25px;
}

.footer-header h1 {
    font-size: 24px;
    font-weight: bold;
    margin: 0;
    color: #f0f0f0;
}

.footer-header p {
    font-size: 16px;
    margin: 5px 0 20px;
    color: #cccccc;
}

.footer-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: flex-start;
    gap: 20px;
    max-width: 1200px;
    margin: 0 auto;
}

.footer-section {
    flex: 1 1 250px;
    margin: 0 10px;
    text-align: left;
}

.footer-section h4 {
    font-size: 18px;
    margin-bottom: 10px;
    color: #f0f0f0;
}

.footer-section p, .footer-section a {
    font-size: 14px;
    color: #cccccc;
    text-decoration: none;
}

.footer-section a:hover {
    color: #ffffff;
}

.footer-nav {
    list-style: none;
    padding: 0;
    margin: 0;
    text-align: left;
}

.footer-nav li {
    margin-bottom: 5px;
}

.footer-nav a {
    color: #cccccc;
    text-decoration: none;
}

.footer-nav a:hover {
    color: #ffffff;
}

.social-icon {
    width: 24px;
    height: 24px;
    margin-right: 10px;
}

iframe {
    width: 350px;
    height: 200px;
    border: none;
    border-radius: 5px;
}

</style>
<header>
    <body class="home">
    <div class="hero home">
        <div class="overlay"></div>
        <h2>SMP NEGERI 3 MALANG</h2>
        <div class="search-bar">
            <input type="text" placeholder="Pencarian...">
            <button><i class="fas fa-search">Cari</i></button>
        </div>
    </div>
    </div>
</header>
    <div class="welcome">
        <h1>SELAMAT DATANG</h1>
        <div class="welcome-content">
            <img src="./img/kepsek.png" alt="Principal's Photo">
            <div class="welcome-text">
                <div class="principal-name">Dra. Mutmainah Amini S,Pd M,Pd</div>
                <div class="description">
                    <p>Assalamualaikum Wr.Wb. Puji syukur kami panjatkan ke hadirat Allah SWT, Tuhan Yang Maha Esa yang telah memberikan rahmat dan anugerah-Nya sehingga web SMPN 3 dapat muncul kembali setelah mengalami gangguan beberapa waktu yang lalu. Web SMPN 3 Malang ini berisi gambaran tentang awal berdirinya sekolah, profil umum sekolah, dan segala kegiatan.</p>
                </div>
            </div>
        </div>
        <div class="section-title">KUTIP SEKILAS</div>
        <div class="cards">
            <div class="card">
                <img src="./img/profil.jpeg" alt="Profil Image">
                <div class="card-content">
                    <h3>- Profil</h3>
                    <p>Berisi informasi mengenai Sejarah, Profil Guru, dan Visi Misi SMP Negeri 3 Malang</p>
                    <a href="2.sejarah.html">Klik untuk lihat selengkapnya</a>
                </div>
            </div>
            <div class="card">
                <img src="./img/sarpras.jpeg" alt="Sarana Prasarana Image">
                <div class="card-content">
                    <h3>- Sarana Prasarana</h3>
                    <p>Berisi informasi mengenai Sarana Prasarana yang ada di SMP Negeri 3 Malang seperti Laboratorium, Perpustakaan, UKS, dan Ruang Kelas.</p>
                    <a href="5.sarpras.html">Klik untuk lihat selengkapnya</a>
                </div>
            </div>
            <div class="card">
                <img src="./img/ekskul.jpg" alt="Ekstrakurikuler Image">
                <div class="card-content">
                    <h3>- Ekstrakurikuler</h3>
                    <p>Berisi informasi mengenai kegiatan Ekstrakurikuler yang ada di SMP Negeri 3 Malang.</p>
                    <a href="6.ekstrakulikuler.html">Klik untuk lihat selengkapnya</a>
                </div>
            </div>
            <div class="card">
                <img src="./img/kegiatan.jpeg" alt="Kegiatan Image">
                <div class="card-content">
                    <h3>- Kegiatan</h3>
                    <p>Berisi informasi mengenai Kegiatan Perayaan dan Kegiatan Kesiswaan rutin/tahunan yang terlaksana di SMP Negeri 3 Malang.</p>
                    <a href="9.kesiswaan.html">Klik untuk lihat selengkapnya</a>
                </div>
            </div>
            <div class="card">
                <img src="./img/prestasi.png" alt="Prestasi Image">
                <div class="card-content">
                    <h3>- Prestasi</h3>
                    <p>Berisi informasi mengenai Prestasi Akademik maupun Non Akademik yang dimiliki siswa-siswi SMP Negeri 3 Malang.</p>
                    <a href="7.akademik.html">Klik untuk lihat selengkapnya</a>
                </div>
            </div>
            
            <div class="card">
                <img src="./img/berita dan galeri.jpg" alt="Berita dan Galeri Image">
                <div class="card-content">
                    <h3>- Berita dan Galeri</h3>
                    <p>Berisi Berita terkini tentang kegiatan, prestasi, maupun pengumuman yang di keluarkan secara resmi dari SMP Negeri 3 Malang.</p>
                    <a href="11.berita.html">Klik untuk lihat selengkapnya</a>
                </div>
            </div>
        </div>
        <div class="section-title">ALUMNI</div>
        <div class="cards">
            <div class="card">
                <img src="./img/alumni.jpg" alt="Alumni Image">
                <div class="card-content">
                    
                    <p>Ruang khusus bagi para alumni untuk mengenang masa-masa sekolah, berbagi kesan dan pesan, serta menjalin kembali cerita yang tak terlupakan. Di sini Anda dapat menemukan kisah inspiratif, pesan penuh makna, dan foto kenangan dari alumni-alumni sebelumnya.</p>
                    <a href="13.alumni.html">Klik untuk lihat selengkapnya</a>
                </div>
            </div>
        </div>
        <div class="section-title">STASTIK PENGUNJUNG</div>
        <div class="stats">
            <div>
                <h3>10</h3>
                <p>PENGUNJUNG HARI INI</p>
            </div>
            <div>
                <h3>20</h3>
                <p>TOTAL MENGUNJUNGI</p>
            </div>
            <div>
                <h3>56</h3>
                <p>TOTAL PENGUNJUNG WEB SMP NEGERI 3 MALANG</p>
            </div>
        </div>
    </div>
</body>
