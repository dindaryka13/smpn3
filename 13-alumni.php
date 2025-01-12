<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMP Negeri 3 Malang</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet"/>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
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
            
        /* Container Styling */
        .form-container {
            background: linear-gradient(135deg, #ffffff, #f8f9fc); /* Gradien lembut */
            max-width: 600px;
            width: 100%;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin-top: 50px; /* Jarak atas */
            margin-bottom: 50px; /* Jarak bawah */
            margin-left: auto;
            margin-right: auto;
        }

        /* Heading Styling */
        .form-container h2 {
            font-size: 28px;
            font-weight: bold;
            color: #2c3e50;
            margin-bottom: 20px;
        }

        /* Form Styling */
        form {
            width: 100%;
            text-align: left;
        }

        form label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        form input[type="text"],
        form textarea,
        form select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background: #f9f9f9;
            font-size: 14px;
        }

        form select {
            appearance: none;
            cursor: pointer;
            background-image: url('data:image/svg+xml;charset=UTF-8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 140 140"><polygon points="0,40 70,140 140,40" fill="%23999" /></svg>');
            background-repeat: no-repeat;
            background-position: right 10px center;
            background-size: 10px;
        }

        form input[type="file"] {
            padding: 10px;
        }

        form button {
            width: 100%;
            background-color: #006400;
            color: white;
            font-size: 16px;
            font-weight: bold;
            padding: 10px 0;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        form button:hover {
            background-color: #004c00;
        }
    </style>
</head>
<body>
<header>
            <div class="banner4">
                <div class="banner-content">
                    <h2>BERITA DAN GALERI</h2>
                    <h2>GALERI SMP NEGERI 3 MALANG</h2>
                </div>
        </header>
    <main>
        <div class="form-container">
            <h2>TULISKAN PESAN DAN KESAN MU SAAT BERSEKOLAH DI SMP NEGERI 3 MALANG</h2>
            <form action="submit.php" method="POST" enctype="multipart/form-data">
                <label for="name">Nama</label>
                <input type="text" id="name" name="name" required>

                <label for="year">Lulusan Tahun</label>
                <select id="year" name="year" required>
                    <option value="" disabled selected>Pilih tahun</option>
                    <!-- Tambahkan daftar tahun secara dinamis -->
                    <?php
                        $current_year = date("Y");
                        for ($i = $current_year; $i >= 1970; $i--) {
                            echo "<option value='{$i}'>{$i}</option>";
                        }
                    ?>
                </select>

                <label for="message">Pesan dan Kesan</label>
                <textarea id="message" name="message" required></textarea>

                <label for="memory">Kenangan (Opsional)</label>
                <input type="file" id="memory" name="memory[]" multiple accept="image/*">

                <button type="submit">Kirim</button>
            </form>
        </div>
    </main>

</body>
</html>
