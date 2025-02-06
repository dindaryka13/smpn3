<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMP Negeri 3 Malang</title>
    <link rel="stylesheet" href="style.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #f8f9fa;
        }

        /* Banner */
        .banner4 {
            position: relative;
            background: url(./img/bannerkegiatan.png) no-repeat center center/cover;
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

        /* Kegiatan Perayaan */
        .Kegiatan-kesiswaan {
            padding: 80px 20px;
            text-align: center;
            background-color: white;
        }

        .Kegiatan-kesiswaan h2 {
            font-size: 32px;
            font-weight: bold;
            color: #2c3e50;
            margin-bottom: 50px;
        }

        /* Grid untuk kegiatan */
        .achievements-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(450px, 1fr));
            gap: 40px;
            max-width: 1200px;
            margin: auto;
            padding: 0 20px;
        }

        .achievement {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            text-align: center;
        }

        .achievement:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }

        .achievement img {
            width: 100%;
            border-radius: 15px;
            margin-bottom: 20px;
            max-height: 250px;
            object-fit: cover;
        }

        .achievement p {
            font-size: 18px;
            color: #555;
            line-height: 1.8;
        }

        .achievement h3 {
            font-size: 24px;
            color: #2c3e50;
            margin: 15px 0;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .banner4 {
                height: 250px;
            }
            .banner4 h2 {
                font-size: 26px;
            }
            .Kegiatan-kesiswaan h2 {
                font-size: 28px;
            }
            .achievements-container {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="banner4">
            <div class="banner-content">
                <h2>PRESTASI</h2>
                <h2>PRESTASI NON AKADEMIK SMP NEGERI 3 MALANG</h2>
            </div>
        </div>
    </header>

    <section class="Kegiatan-kesiswaan">
        <h2>Kegiatan Perayaan</h2>
        <div class="achievements-container">
            <div class="achievement">
                <img src="./img/perayaan1.png" alt="Hari Kemerdekaan">
                <h3>Hari Kemerdekaan</h3>
                <p>Perayaan tahunan di SMP Negeri 3 Malang dengan lomba & upacara wajib.</p>
            </div>
            <div class="achievement">
                <img src="./img/perayaan2.png" alt="Ulang Tahun SMPN 3 Malang">
                <h3>Ulang Tahun SMP Negeri 3 Malang</h3>
                <p>Perayaan ulang tahun sekolah yang selalu berlangsung meriah.</p>
            </div>
            <div class="achievement">
                <img src="./img/perayaan3.png" alt="Hari Batik Nasional">
                <h3>Hari Batik Nasional</h3>
                <p>Seluruh siswa dan guru mengenakan batik & mengikuti apel bersama.</p>
            </div>
            <div class="achievement">
                <img src="./img/perayaan4.png" alt="Perayaan Maulid Nabi">
                <h3>Perayaan Maulid Nabi</h3>
                <p>Diisi dengan pertunjukan band Islami dan ceramah dari narasumber.</p>
            </div>
        </div>
    </section>
</body>
</html>
