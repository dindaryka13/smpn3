<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan & Kesan Alumni - SMPN 3 Malang</title>
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
            background: url(./img/bannerpesan.png) no-repeat center center/cover;
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
            padding: 20px;
        }

        /* Form Styling */
        .form-container {
            background: white;
            max-width: 600px;
            width: 100%;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin: 50px auto;
        }

        .form-container h2 {
            font-size: 24px;
            font-weight: bold;
            color: #2c3e50;
            margin-bottom: 20px;
        }

        form input, form textarea, form select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background: #f9f9f9;
            font-size: 14px;
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

        /* Styling untuk daftar pesan & kesan */
        .message-container {
            max-width: 900px; 
            margin: 30px auto; 
            padding: 30px; 
            background: white;
            border-radius: 10px;
            box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.1);
        }

        .message-container h2 {
            text-align: center;
            color: #2c3e50;
            font-size: 22px;
            margin-bottom: 20px;
        }

        /* Grid layout */
        .messages-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
        }

        .message-box {
            border: 1px solid #ddd;
            padding: 15px;
            border-radius: 5px;
            background: #f9f9f9;
            text-align: center;
        }

        .message-box img {
            max-width: 100%;
            height: auto;
            max-height: 200px;
            display: block;
            margin: 10px auto;
            border-radius: 5px;
        }

        .add-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background-color: #006400;
            color: white;
            text-decoration: none;
            font-size: 18px;
            font-weight: bold;
            padding: 8px 12px;
            border-radius: 50px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s ease;
        }

        .add-button span {
            font-size: 24px;
            font-weight: bold;
            margin-right: 5px;
        }

        .add-button:hover {
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
    </div>
</header>

<main>
    <div class="form-container" id="form-container">
        <h2>TULISKAN PESAN DAN KESAN MU SAAT BERSEKOLAH DI SMP NEGERI 3 MALANG</h2>
        <form action="submit.php" method="POST" enctype="multipart/form-data">
            <input type="text" name="nama" placeholder="Nama" required>
            <select name="year" required>
                <option value="" disabled selected>Pilih Tahun Lulusan</option>
                <?php for ($i = date("Y"); $i >= 1970; $i--) echo "<option value='{$i}'>{$i}</option>"; ?>
            </select>
            <textarea name="pesan" placeholder="Pesan dan Kesan" required></textarea>
            <input type="file" name="foto" accept="image/*">
            <button type="submit">Kirim</button>
        </form>
    </div>

    <div class="message-container">
        <h2>Pesan & Kesan Alumni:</h2>
        <div class="messages-grid">
            <?php include 'view.php'; ?>
        </div>
    </div>
</main>

</body>
</html>
