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
            .achievement {
            flex: 0 1 calc(30% - 20px); /* 3 gambar di baris pertama */
        }

        .achievement:nth-child(4), .achievement:nth-child(5) {
            flex: 0 1 calc(40% - 20px); /* 2 gambar di baris kedua */
        }
        .achievements-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px; /* Jarak horizontal dan vertikal antar gambar */
}

        </style>
    </head>
    <body>
        <header>
            <div class="banner2 non-akademik">
                <div class="banner-content">
                    <h2>PRESTASI</h2>
                    <h2>PRESTASI AKADEMIK SMP NEGERI 3 MALANG</h2>
                </div>
        </header>

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

        </section>

    </body>
</html>