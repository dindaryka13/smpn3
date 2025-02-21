<?php
require 'config.php';


if (isset($_GET['hapus'])) {
    $id_hapus = mysqli_real_escape_string($conn, $_GET['hapus']);
    $cek_data = mysqli_query($conn, "SELECT * FROM pesan WHERE id = '$id_hapus'");

    if (mysqli_num_rows($cek_data) > 0) {
        $query_hapus = mysqli_query($conn, "DELETE FROM pesan WHERE id = '$id_hapus'");
        if ($query_hapus) {
            echo "<script>alert('Data berhasil dihapus!'); window.location='admin_pesan.php';</script>";
        } else {
            echo "<script>alert('Gagal menghapus data!');</script>";
        }
    }
}


$data_pesan = mysqli_query($conn, "SELECT * FROM pesan ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Pesan & Kesan Alumni</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet"/>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1200px;
            margin: 50px auto;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h2 {
            color: #2c3e50;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: center;
        }

        th {
            background-color: #265a3a;
            color: white;
        }

        .btn-delete {
            display: inline-block;
            padding: 8px 12px;
            background-color: red;
            color: white;
            border-radius: 5px;
            text-decoration: none;
        }

        .btn-delete:hover {
            background-color: darkred;
        }

        img {
            max-width: 100px;
            height: auto;
            border-radius: 5px;
        }

        .logout-btn {
            display: block;
            width: max-content;
            margin: 20px auto;
            padding: 10px 15px;
            background-color: #d9534f;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .logout-btn:hover {
            background-color: #c9302c;
        }
    </style>
</head>
<body>

<?php include 'index1.php'; ?>

<div class="container">
    <h2>Panel Admin - Pesan & Kesan Alumni</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Tahun Lulusan</th>
            <th>Pesan & Kesan</th>
            <th>Foto</th>
            <th>Aksi</th>
        </tr>
        <?php if (mysqli_num_rows($data_pesan) > 0): ?>
            <?php while ($row = mysqli_fetch_assoc($data_pesan)): ?>
                <tr>
                    <td><?= $row['id']; ?></td>
                    <td><?= htmlspecialchars($row['nama']); ?></td>
                    <td><?= $row['tahun_lulusan']; ?></td>
                    <td><?= htmlspecialchars($row['pesan']); ?></td>
                    <td>
    <?php if (!empty($row['foto'])): ?>
        <img src="uploads_pesan/<?= htmlspecialchars($row['foto']); ?>" alt="Foto">
    <?php else: ?>
        Tidak ada foto
    <?php endif; ?>
</td>

                    <td>
                        <a href="delete_pesan.php?hapus=<?= $row['id']; ?>" class="btn-delete" onclick="return confirm('Yakin ingin menghapus data ini?');">Hapus</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr>
                <td colspan="6">Belum ada data.</td>
            </tr>
        <?php endif; ?>
    </table>
</div>

</body>
</html>
