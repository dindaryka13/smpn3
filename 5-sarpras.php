<!DOCTYPE html>
<html>
<head>
    <title>SMP Negeri 3 Malang</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet"/>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }

        /* Banner */
        .banner4 {
            position: relative;
            background: url(./img/sarpras.jpeg) no-repeat center center/cover;
            height: 320px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
            padding: 20px;
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
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
        }

        .banner4 h2 {
            font-size: 32px;
            font-weight: bold;
            margin: 5px 0;
        }

        .prestasi-akademik {
            text-align: center;
            padding: 20px;
        }

        .prestasi-akademik h2 {
            margin-bottom: 20px;
        }

        .prestasi-akademik .achievements-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr); /* 2 kolom per baris */
            gap: 30px; /* Jarak antar elemen */
            justify-content: center;
            max-width: 1200px; /* Lebar maksimum container */
            margin: 0 auto;
        }

        .prestasi-akademik .achievement {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            background-color: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            padding: 30px;
            transition: transform 0.3s ease-in-out;
        }

        .prestasi-akademik .achievement img {
            width: 100%;
            max-width: 800px; /* Ukuran maksimum gambar lebih besar */
            border-radius: 10px;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .prestasi-akademik .achievement img:hover {
            transform: scale(1.05);
            box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.3);
        }

        .prestasi-akademik .achievement p {
            margin-top: 10px;
            font-size: 18px; /* Perbesar teks deskripsi */
            color: #333;
        }

        @media (max-width: 768px) {
            .prestasi-akademik .achievements-container {
                grid-template-columns: 1fr; /* Satu kolom pada layar kecil */
            }

            .prestasi-akademik .achievement img {
                max-width: 100%; /* Gambar menyesuaikan ukuran layar */
            }
        }
    </style>
</head>
<body>
<header>
        <div class="banner4">
            <div class="banner-content">
                <h2>SARANA PRASARANA SMP NEGERI 3 MALANG</h2>
            </div>
        </div>
    </header>
    <section class="prestasi-akademik">
        <h2>Sarana dan Prasarana</h2>
        <div class="achievements-container">
            <div class="achievement">
                <img src="./img/perpus.jpg" alt="Ruang Kelas">
                <p>Ruang Kelas</p>
            </div>
            <div class="achievement">
                <img src="./img/lab.jpg" alt="Laboratorium IPA">
                <p>Laboratorium IPA</p>
            </div>
            <div class="achievement">
                <img src="./img/komputer.png" alt="Laboratorium Komputer">
                <p>Laboratorium Komputer</p>
            </div>
            <div class="achievement">
                <img src="./img/perpusfix.jpg" alt="Perpustakaan">
                <p>Perpustakaan</p>
            </div>
            <div class="achievement">
                <img src="./img/uks.jpg" alt="UKS">
                <p>UKS</p>
            </div>
            <div class="achievement">
                <img src="./img/lapbas.jpg" alt="Lapangan Basket">
                <p>Lapangan Basket</p>
            </div>
        </div>
    </section>
</body>
</html>
