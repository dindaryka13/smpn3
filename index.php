<html>
 <head>
  <title>
   SMP Negeri 3 Malang
  </title>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet"/>
  <style>
    * {
    box-sizing: border-box;
}

body {
    font-family: 'Lato', sans-serif;
    height: 100%;
    margin: 0;
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
    width: 97,2%;
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
.main-footer {
.footer {
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
}
</style>
<body>
<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
?>
<header class="main-header">
<div class="navbar">
        <div class="logo-container">
            <img src="./img/logo smp3.png" alt="Logo Sekolah" class="logo">
            <span class="school-name">SMP NEGERI 3 MALANG</span>
        </div>
        
        <div class="nav-links">
            <a href="index.php?page=home">Beranda</a>
            <div class="dropdown">
                <button class="dropbtn">Profil</button>
                <div class="dropdown-content">
                    <a href="index.php?page=sejarah">Sejarah</a>
                    <a href="index.php?page=profil-guru">Profil Guru</a>
                    <a href="index.php?page=visimisi">Visi dan Misi</a>
                </div>
            </div>
            <div class="nav-links">
                <a href="index.php?page=sarpras">Sarana Prasarana</a>
            </div> 

            <div class="nav-links">
                <a href="index.php?page=ekskul">Ekstrakurikuler</a>
            </div> 
    
            <div class="dropdown">
                <button class="dropbtn">Prestasi</button>
                <div class="dropdown-content">
                    <a href="index.php?page=akademik">Akademik</a>
                    <a href="index.php?page=non-akademik">Non Akademik</a>
                </div>
            </div>

            <div class="dropdown">
                <button class="dropbtn">Kegiatan</button>
                <div class="dropdown-content">
                    <a href="index.php?page=kesiswaan">Kesiswaan</a>
                    <a href="index.php?page=perayaan">Perayaan</a>
                </div>
            </div>
            <div class="nav-links">
                <a href="index.php?page=galeri">Galeri</a>
            </div> 
            <div class="nav-links">
                <a href="index.php?page=alumni">Alumni</a>
            </div>
        </div>
    </div>
</div>
</header>
    <?php
switch ($page) {
case 'home':
include '1-home.php';
break;
case 'sejarah':
include '2-sejarah.php';
break;
case 'profil-guru':
include '3-profil-guru.php';
break;
case 'visimisi':
include '4-visimisi.php';
break;
case 'sarpras':
include '5-sarpras.php';
break;
case 'ekskul':
include '6-ekstrakulikuler.php';
break;
case 'akademik':
    include '7.akademik.php';
    break;
    case 'non-akademik':
    include '8.non-akademik.php';
    break;
    case 'kesiswaan':
    include '9.kesiswaan.php';
    break;
    case 'perayaan':
    include '10.perayaan.php';
    break;
    case 'galeri':
    include '12.galeri.php';
    break;  
    case 'alumni':
        include '13-alumni.php';
        break;
default:
echo "<p>Halaman tidak ditemukan!</p>";
break;
}
?>
<footer class="main-footer">
<footer class="footer">
    <div class="footer-header">
        <h2>SMP NEGERI 3 MALANG</h2>
        <p>Jl. Dr. Cipto No.20, 3, Klojen, Kec. Klojen, Kota Malang, Jawa Timur 65111</p>
    </div>

    <div class="footer-container">
        <div class="footer-section">
            <h4>Navigasi</h4>
            <ul class="footer-nav">
                <li><a href="index.php?page=home">Beranda</a></li>
                <li><a href="index.php?page=sejarah">Sejarah</a></li>
                <li><a href="index.php?page=profil-guru">Profil Guru</a></li>
                <li><a href="index.php?page=sarpras">Sarana Prasarana</a></li>
                <li><a href="index.php?page=ekskul">Ekstrakurikuler</a></li>
                <li><a href="index.php?page=akademik">Prestasi Akademik</a></li>
                <li><a href="index.php?page=non-akademik">Prestasi Non Akademik</a></li>
                
            </ul>
</div>
        <div class="footer-section">
            <h4>Sosial Media</h4>
            <a href="https://www.youtube.com/@SMPN3Malang" target="_blank">
            </a>
            <a href="https://www.instagram.com/spenti_" target="_blank">
            </a>
            <h4>Kontak</h4>
            <p>Telepon: (0341) 362612</p>
            <p>Email: smpn3mlg@smpn3-mlg.sch.id</p>
        </div>
        <div class="footer-section">
            <h4>Lokasi</h4>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.504839634048!2d112.618639314773!3d-7.966620794262!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd629b1b1b1b1b1%3A0x1b1b1b1b1b1b1b1b!2sSMP%20Negeri%203%20Malang!5e0!3m2!1sid!2sid!4v1634567890123!5m2!1sid!2sid" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</footer>
            </footer>
    </body>
    </html>
