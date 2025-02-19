<?php
require_once 'config.php'; // Menghubungkan ke database

// Tambah Data
if (isset($_POST['submit'])) {
    $judul = trim($_POST['judul']);
    $deskripsi = trim($_POST['deskripsi']);

    // Validasi input kosong
    if (empty($judul) || empty($deskripsi) || empty($_FILES['gambar']['name'])) {
        echo "<script>alert('Harap isi semua data!'); window.location='perayaan.php';</script>";
        exit();
    }

    // Upload Gambar
    $gambar = $_FILES['gambar']['name'];
    $target_folder = "uploads_perayaan/";
    $target_file = $target_folder . basename($gambar);
    $file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Validasi format gambar
    $allowed_types = ['jpg', 'jpeg', 'png', 'gif'];
    if (!in_array($file_type, $allowed_types)) {
        echo "<script>alert('Format gambar tidak valid!'); window.location='perayaan.php';</script>";
        exit();
    }

    if (move_uploaded_file($_FILES['gambar']['tmp_name'], $target_file)) {
        $query = $conn->prepare("INSERT INTO perayaan (judul, deskripsi, gambar) VALUES (?, ?, ?)");
        $query->bind_param("sss", $judul, $deskripsi, $gambar);
        if ($query->execute()) {
            header("Location: perayaan.php");
            exit();
        } else {
            echo "<script>alert('Gagal menambahkan data!');</script>";
        }
    } else {
        echo "<script>alert('Gagal mengupload gambar!');</script>";
    }
}

// Hapus Data
if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];

    // Ambil nama file sebelum hapus
    $query = $conn->prepare("SELECT gambar FROM perayaan WHERE id = ?");
    $query->bind_param("i", $id);
    $query->execute();
    $result = $query->get_result();
    $row = $result->fetch_assoc();
    $file_path = "uploads_perayaan/" . $row['gambar'];

    if (file_exists($file_path)) {
        unlink($file_path);
    }

    $query = $conn->prepare("DELETE FROM perayaan WHERE id = ?");
    $query->bind_param("i", $id);
    if ($query->execute()) {
        header("Location: perayaan.php");
        exit();
    } else {
        echo "<script>alert('Gagal menghapus data!');</script>";
    }
}

// Ambil Data
$result = $conn->query("SELECT * FROM perayaan ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Kegiatan Perayaan</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        body {
            background-color: #f8f9fa;
            color: #333;
            line-height: 1.6;
            padding-bottom: 40px;
        }
        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 15px;
            background: white;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        form {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            background: #28a745;
            color: white;
            border: none;
            padding: 10px;
            width: 100%;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }
        button:hover {
            background: #218838;
        }
        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 15px;
            margin-top: 20px;
        }
        .item {
            background: white;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .item img {
            width: 100%;
            border-radius: 5px;
        }
        .content h3 {
            margin: 10px 0 5px;
            font-size: 18px;
        }
        .content p {
            font-size: 14px;
            color: #666;
        }
        .item a {
            display: block;
            text-align: center;
            background: #dc3545;
            color: white;
            padding: 8px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s;
        }
        .item a:hover {
            background: #c82333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        th {
            background: #265a3a;
            color: white;
        }
        .hapus-btn {
            background: #dc3545;
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
            text-decoration: none;
        }
        .hapus-btn:hover {
            background: #c82333;
        }
    </style>
</head>
<body>

<?php include 'index1.php'; ?>

<div class="container">
    <h2>Admin - Kegiatan Perayaan</h2>

    <!-- Form Tambah Data -->
    <form action="" method="post" enctype="multipart/form-data">
        <input type="text" name="judul" placeholder="Judul Kegiatan" required>
        <textarea name="deskripsi" placeholder="Deskripsi Kegiatan" required></textarea>
        <input type="file" name="gambar" accept="image/*" required>
        <button type="submit" name="submit">Tambah Kegiatan</button>
    </form>

    <!-- Data Kegiatan dalam Grid -->
    <h2>Data Kegiatan Perayaan</h2>
    <div class="grid-container">
        <?php while ($row = $result->fetch_assoc()) : ?>
            <div class="item">
                <img src="uploads_perayaan/<?= htmlspecialchars($row['gambar']) ?>" alt="Gambar Kegiatan">
                <div class="content">
                    <h3><?= htmlspecialchars($row['judul']) ?></h3>
                    <p><?= nl2br(htmlspecialchars($row['deskripsi'])) ?></p>
                </div>
                <a class="hapus-btn" href="perayaan.php?hapus=<?= $row['id'] ?>" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
            </div>
        <?php endwhile; ?>
    </div>

    <!-- Tabel Data Kegiatan -->
<h2>Daftar Kegiatan</h2>

<?php  
// Jalankan query ulang agar hasilnya bisa digunakan kembali
$result_table = $conn->query("SELECT * FROM perayaan ORDER BY id DESC"); 
?>

<table>
    <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Deskripsi</th>
        <th>Gambar</th>
        <th>Aksi</th>
    </tr>

    <?php  
    $no = 1;  
    while ($row = $result_table->fetch_assoc()) : 
    ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= htmlspecialchars($row['judul']) ?></td>
            <td><?= htmlspecialchars($row['deskripsi']) ?></td>
            <td><img src="uploads_perayaan/<?= htmlspecialchars($row['gambar']) ?>" width="80"></td>
            <td><a class="hapus-btn" href="perayaan.php?hapus=<?= $row['id'] ?>">Hapus</a></td>
        </tr>
    <?php endwhile; ?>
</table>


</body>
</html>
