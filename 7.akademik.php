<?php
require_once 'config.php';

// Mengambil data prestasi akademik saja
$prestasi = mysqli_query($conn, "SELECT * FROM prestasi WHERE tingkat = 'Akademik' ORDER BY tanggal DESC");
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMP Negeri 3 Malang - Prestasi Akademik</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: Arial, sans-serif; background-color: #f8f9fa; }
        /* Banner */
        .banner2 {
            position: relative;
            background: url(./img/non_akademik.png) no-repeat center center/cover;
            height: 320px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
            padding: 20px;
        }
        .banner2::before {
            content: "";
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1;
        }
        .banner-content { position: relative; z-index: 2; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5); }
        .banner2 h2 { font-size: 32px; font-weight: bold; margin: 5px 0; }
        /* Section Prestasi */
        .prestasi-akademik {
            text-align: center;
            padding: 60px 20px;
            background-color: white;
        }
        .prestasi-akademik h2 {
            font-size: 32px;
            font-weight: bold;
            color: #2c3e50;
            margin-bottom: 50px;
        }
        /* Grid Prestasi */
        .achievements-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 50px;
            max-width: 1200px;
            margin: auto;
            padding: 0 20px;
            margin-bottom: 80px;
        }
        .achievement {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
            padding: 20px;
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }
        .achievement:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }
        .achievement img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            margin-bottom: 15px;
        }
        .achievement p {
            font-size: 18px;
            color: #555;
            line-height: 1.6;
            font-weight: 500;
            margin: 5px 0;
        }
        .achievement .judul {
            font-weight: bold;
            font-size: 20px;
            color: #2c3e50;
        }
        /* Responsive Design */
        @media (max-width: 768px) {
            .banner2 { height: 250px; }
            .banner2 h2 { font-size: 26px; }
            .prestasi-akademik h2 { font-size: 28px; }
            .achievements-container { grid-template-columns: 1fr 1fr; }
        }
        @media (max-width: 480px) {
            .achievements-container { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>
    
    <header>
        <div class="banner2">
            <div class="banner-content">
                <h2>PRESTASI</h2>
                <h2>PRESTASI AKADEMIK SMP NEGERI 3 MALANG</h2>
            </div>
        </div>
    </header>

    <section class="prestasi-akademik">
    <h2>Prestasi Akademik</h2>
    <div class="achievements-container">
        <?php
        $prestasi_akademik = mysqli_query($conn, "SELECT * FROM prestasi WHERE tingkat='Akademik' ORDER BY tanggal DESC");
        if (mysqli_num_rows($prestasi_akademik) > 0): 
            while ($row = mysqli_fetch_assoc($prestasi_akademik)): ?>
                <div class="achievement">
                    <img src="<?= $row['foto'] ?>" 
                         alt="<?= htmlspecialchars($row['judul']) ?>">
                    <p class="judul"><?= htmlspecialchars($row['judul']) ?></p>
                    <p><?= htmlspecialchars($row['deskripsi']) ?></p>   
                    <p><b>Tanggal:</b> <?= date('d M Y', strtotime($row['tanggal'])) ?></p>
                </div>
            <?php endwhile; 
        else: ?>
            <p>Tidak ada prestasi akademik yang tersedia.</p>
        <?php endif; ?>
    </div>
</section>

</body>
</html>
