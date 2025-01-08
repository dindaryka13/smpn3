<html>
<head>
    <title>SMP Negeri 3 Malang</title>
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
        }

        .hero {
            position: relative;
            z-index: 1;
            background-size: cover;
            background-position: center;
            color: white;
            padding: 80px 0;
            text-align: center;
            background-image: url('./img/profil.jpg'); /* Gambar latar */
        }

        .hero .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1;
        }

        .hero h2 {
            position: relative;
            z-index: 2;
            font-size: 32px;
            font-weight: 700;
            line-height: 1.5;
            color: #fff;
            text-transform: uppercase;
            margin: 0 auto;
            max-width: 800px;
        }

        .content {
            padding: 40px 20px;
            max-width: 1200px;
            margin: auto;
            line-height: 1.8;
            color: #333;
        }

        .section h1 {
            font-size: 28px;
            margin-bottom: 15px;
            color: black;
            text-align: center;
        }

        .section hr {
            border: none;
            height: 2px;
            background-color: black;
            margin: 10px 0 20px;
            max-width: 80%;
            margin-left: auto;
            margin-right: auto;
        }

        .section p {
            margin-bottom: 20px;
            font-size: 18px;
            text-align: justify;
        }

        .container {
            padding: 40px 20px;
            text-align: center;
        }

        .container h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: black;
        }

        .gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-bottom: 60px;
        }

        .photo-container {
            position: relative;
            width: 300px;
            height: 200px;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .photo-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease, opacity 0.3s ease;
        }

        .photo-container:hover img {
            transform: scale(1.1);
            opacity: 0.9;
        }

        .caption {
            position: absolute;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.6);
            color: white;
            width: 100%;
            padding: 10px;
            text-align: center;
            font-size: 14px;
        }

        /* Gaya untuk Footer */
        .footer {
            background-color: #007bff;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: auto; /* Agar footer tetap di bawah */
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <div class="hero profil">
            <div class="overlay"></div>
            <h2>PROFIL<br/>SEJARAH GURU SMP NEGERI 3 MALANG</h2>
        </div>
    </header>
    <div class="content">
        <div class="section">
            <h1>Sejarah</h1>
            <hr/>
            <p>
                SMP Negeri 3 berdiri pada tanggal 17 Maret 1950 dengan nama MULOWILHELMINA. Sebagai sekolah yang didirikan oleh pemerintah Belanda diperuntukkan untuk anak-anak Belanda dan pribumi. Diberi nama Wilhelmina karena waktu itu nama jalan tempat SMP Negeri 3 adalah jalan Wilhelmina. Kemudian pada tahun 1960 namanya berubah menjadi SMP 3 Negeri yang dimiliki sepenuhnya oleh pemerintah Republik Indonesia.
            </p>
            <p>
                Keberadaannya diresmikan melalui Surat Keputusan Menteri Pendidikan, Pengajaran dan Kebudayaan Republik Indonesia No. 187/SK/B/III/1960, tanggal 25 Mei 1960. SMP Negeri 3 Malang mempunyai semboyan Bintaraloka, singkatan dari Bina Taruna Adi Loka, yang berarti tempat untuk menggodok pemuda-pemuda menjadi pribadi yang utama. Dengan semboyan tersebut diharapkan seluruh siswa SMP Negeri 3 Malang akan menjadi pribadi-pribadi yang unggul dalam karakter, terampil, mandiri dan berwawasan luas.
            </p>
        </div>
    </div>
    <div class="container">
        <h1>Dokumentasi Kegiatan SMP Negeri 3 Malang Tahun 90-an</h1>
        <div class="gallery">
            <div class="photo-container">
                <img src="./img/sej1.jpg" alt="Dokumentasi 1">
                <div class="caption">Wisata ke Candi Borobudur saat lulusan di Masa Kampanye.</div>
            </div>
            <div class="photo-container">
                <img src="./img/sej2.jpg" alt="Dokumentasi 2">
                <div class="caption">Acara lomba perayaan ulang tahun sekolah.</div>
            </div>
        </div>
    </div>
</body>
</html>
