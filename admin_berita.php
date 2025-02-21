<?php
require_once 'config.php'; // Pastikan nama file benar
// Tambah Data
if (isset($_POST['submit'])) {
    $judul = trim($_POST['judul']);
    $konten = trim($_POST['konten']);
    $tanggal = date('Y-m-d');
    $gambar = '';

    // Upload gambar jika ada
    if (!empty($_FILES['gambar']['name'])) {
        $gambar = time() . '_' . basename($_FILES['gambar']['name']);
        $upload_path = 'uploads_berita/' . $gambar;
        move_uploaded_file($_FILES['gambar']['tmp_name'], $upload_path);
    }

    $query = "INSERT INTO berita (judul, konten, gambar, tanggal) VALUES ('$judul', '$konten', '$gambar', '$tanggal')";
    if (mysqli_query($conn, $query)) {
        header("Location: admin_berita.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

// Edit Data
if (isset($_POST['update'])) {
    $id = intval($_POST['id']);
    $judul = trim($_POST['judul']);
    $konten = trim($_POST['konten']);
    $gambar_lama = trim($_POST['gambar_lama']);
    $gambar = $gambar_lama;

    // Upload gambar baru jika ada
    if (!empty($_FILES['gambar']['name'])) {
        $gambar = time() . '_' . basename($_FILES['gambar']['name']);
        move_uploaded_file($_FILES['gambar']['tmp_name'], 'uploads_berita/' . $gambar);
        if (!empty($gambar_lama) && file_exists('uploads_berita/' . $gambar_lama)) {
            unlink('uploads_berita/' . $gambar_lama); // Hapus gambar lama
        }
    }

    $query = "UPDATE berita SET judul='$judul', konten='$konten', gambar='$gambar' WHERE id=$id";
    if (mysqli_query($conn, $query)) {
        header("Location: admin_berita.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

// Hapus Data
if (isset($_GET['hapus'])) {
    $id = intval($_GET['hapus']);
    $result = mysqli_query($conn, "SELECT gambar FROM berita WHERE id=$id");
    $row = mysqli_fetch_assoc($result);
    if (!empty($row['gambar']) && file_exists('uploads_berita/' . $row['gambar'])) {
        unlink('uploads_berita/' . $row['gambar']);
    }

    mysqli_query($conn, "DELETE FROM berita WHERE id=$id");
    header("Location: admin_berita.php");
    exit();
}

// Ambil semua data berita
$berita = mysqli_query($conn, "SELECT * FROM berita ORDER BY tanggal DESC");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Admin Berita</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Lato', sans-serif;
            background-color: #f5f7fa;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 1100px;
            margin: 30px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1, h2 {
            text-align: center;
            color: #2c3e50;
        }
        form {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ced4da;
        }
        button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            color: #fff;
            cursor: pointer;
            font-weight: bold;
        }
        button[name="submit"] {
            background-color: #2c6e49;
        }
        button[name="update"] {
            background-color: #28a745;
            display: none;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #2c6e49;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f8f9fa;
        }
        img {
            max-width: 100px;
            border-radius: 5px;
        }
        .btn-edit {
            background-color:#265a3a;
            color: #000;
            padding: 5px 10px;
            text-decoration: none;
            border-radius: 5px;
        }
        .btn-hapus {
            background-color: #dc3545;
            color: white;
            padding: 5px 10px;
            text-decoration: none;
            border-radius: 5px;
        }
        
    </style>
</head>
<body>
<?php include 'index1.php'; ?>
<div class="container">
    <h1>Admin Berita</h1>

    <!-- Form Tambah/Edit -->
    <form method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" id="id">
        <input type="hidden" name="gambar_lama" id="gambar_lama">

        <label for="judul">Judul Berita:</label>
        <input type="text" name="judul" id="judul" required>

        <label for="konten">Isi Berita:</label>
        <textarea name="konten" id="konten" rows="5" required></textarea>

        <label for="gambar">Upload Gambar:</label>
        <input type="file" name="gambar" id="gambar">

        <button type="submit" name="submit" id="submit-btn">Tambah Berita</button>
        <button type="submit" name="update" id="update-btn">Update Berita</button>
    </form>

    <!-- Tabel Data Berita -->
    <h2>Daftar Berita</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Gambar</th>
                <th>Konten</th>
                <th>Tanggal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; while ($row = mysqli_fetch_assoc($berita)): ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= htmlspecialchars($row['judul']) ?></td>
                    <td>
                        <?php if (!empty($row['gambar'])): ?>
                            <img src="uploads_berita/<?= htmlspecialchars($row['gambar']) ?>" alt="Gambar Berita">
                        <?php else: ?>
                            Tidak ada gambar
                        <?php endif; ?>
                    </td>
                    <td><?= nl2br(htmlspecialchars($row['konten'])) ?></td>
                    <td><?= $row['tanggal'] ?></td>
                    <td>
                        <a href="javascript:void(0);" class="btn-edit" onclick="editData(<?= $row['id'] ?>, '<?= htmlspecialchars($row['judul']) ?>', '<?= htmlspecialchars($row['konten']) ?>', '<?= htmlspecialchars($row['gambar']) ?>')">Edit</a>
                        <a href="?hapus=<?= $row['id'] ?>" class="btn-hapus" onclick="return confirm('Yakin ingin menghapus berita ini?')">Hapus</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>

<script>
// Fungsi Edit Data
function editData(id, judul, konten, gambar) {
    document.getElementById('id').value = id;
    document.getElementById('judul').value = judul;
    document.getElementById('konten').value = konten;
    document.getElementById('gambar_lama').value = gambar;

    document.getElementById('submit-btn').style.display = 'none';
    document.getElementById('update-btn').style.display = 'block';

    window.scrollTo(0, 0);
}
</script>
</body>
</html>
