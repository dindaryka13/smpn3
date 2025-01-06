<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMP Negeri 3 Malang</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .banner1 {
            position: relative;
            background: url(./img/akademik.jpg) no-repeat center center/cover;
            height: 300px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
        }

        .banner1::before {
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
            text-align: center;
        }

        .banner-content h2 {
            margin: 10px 0;
            font-size: 28px;
            line-height: 1.5;
        }
        
        .prestasi-akademik {
            text-align: center;
            padding: 20px;
        }

        .prestasi-akademik h2 {
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 20px;
            color: #000000;
        }

        .prestasi-akademik .achievements-container {
            display: flex;
            justify-content: center;
            gap: 30px;
            flex-wrap: wrap;
        }

        .prestasi-akademik .achievement img {
            width: 200px;
            height: auto;
            border-radius: 15px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out; 
        }

        .prestasi-akademik .achievement img:hover {
            transform: scale(1.1);
            box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.4); 
        }
    </style>
</head>
<body>
    <div class="banner1">
        <div class="banner-content">
            <h2>PRESTASI</h2>
            <h2>PRESTASI AKADEMIK SMP NEGERI 3 MALANG</h2>
        </div>
    </div>
    <section class="prestasi-akademik">
        <h2>Prestasi Akademik</h2>
        <div class="achievements-container">
            <div class="achievement">
                <img src="./img/akademik1.png" alt="Yustira Fatimah">
            </div>
            <div class="achievement">
                <img src="./img/akademik2.png" alt="Valenia Vieya Wijaya">
            </div>
            <div class="achievement">
                <img src="./img/akademik3.png" alt="A'zahro Zifahusma'ani">
            </div>
            <div class="achievement">
                <img src="./img/akademik4.png" alt="Benaca Almeera">
            </div>
            <div class="achievement">
                <img src="./img/akademik5.png" alt="Dzakirah Thalita">
            </div>
        </div>
    </section>
</body>
</html>
