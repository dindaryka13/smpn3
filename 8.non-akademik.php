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

    </body>
</html>
