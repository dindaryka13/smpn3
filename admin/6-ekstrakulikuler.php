<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            background: url(./img/banner4.png) no-repeat center center/cover;
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


        .content {
            padding: 20px;
            text-align: center;
            flex: 1; /* Agar konten dapat mengembang dan mendorong footer ke bawah */
        }

        .content img {
            width: 350px;
            height: 200px;
            object-fit: cover;
        }

        .content .item {
            display: inline-block;
            width: 30%;
            margin: 20px 1%;
            vertical-align: top;
        }

        .content .item p {
            margin-top: 10px;
            font-size: 18px;
            font-weight: bold;
        }

        .content .item hr {
            border: 0;
            border-top: 1px solid #4caf50;
            width: 50%;
            margin: 10px auto 0; /* Tengah dan jarak atas */
        }

        /* Gaya untuk Footer */
        .footer {
            background-color: #007bff;
            color: white;
            text-align: center;
            padding: 20px;
            width: 100%;
        }

        /* Responsivitas */
        @media (max-width: 768px) {
            .content .item {
                width: 45%;
                margin: 10px 2.5%;
            }
        }

        @media (max-width: 480px) {
            .content .item {
                width: 90%;
                margin: 10px 5%;
            }
        }
    </style>
</head>
<body>
<header>
        <div class="banner4">
            <div class="banner-content">
                <h2>EKSTRAKULIKULER SMP NEGERI 3 MALANG</h2>
            </div>
        </div>
    </header>
    <div class="content">
        <div class="item">
            <img alt="Badminton Image" src="./img/ekskul.jpg" width="350" height="200"/>
            <p>Badminton</p>
            <hr/>
        </div>
        <div class="item">
            <img alt="Futsal Image" src="./img/futsal.jpg" width="350" height="200"/>
            <p>Futsal</p>
            <hr/>
        </div>
        <div class="item">
            <img alt="Tennis Image" src="./img/tenis.jpg" width="350" height="200"/>
            <p>Tenis Meja</p>
            <hr/>
        </div>
        <div class="item">
            <img alt="Tari Image" src="./img/tari.jpg" width="350" height="200"/>
            <p>Tari</p>
            <hr/>
        </div>
        <div class="item">
            <img alt="Paduan Suara Image" src="./img/padsu.jpg" width="350" height="200"/>
            <p>Paduan Suara</p>
            <hr/>
        </div>
        <div class="item">
            <img alt="Teater Image" src="./img/teater.jpg" width="350" height="200"/>
            <p>Teater</p>
            <hr/>
        </div>
    </div>
</body>
</html>
