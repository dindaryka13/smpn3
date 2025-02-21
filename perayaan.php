<?php
require_once 'config.php'; // Koneksi database

// Tambah Data
if (isset($_POST['submit'])) {
    $judul = trim($_POST['judul']);
    $deskripsi = trim($_POST['deskripsi']);

    if (empty($judul) || empty($deskripsi) || empty($_FILES['gambar']['name'])) {
        echo "<script>alert('Harap isi semua data!'); window.location='perayaan.php';</script>";
        exit();
    }

    $gambar = $_FILES['gambar']['name'];
    $target_folder = "uploads_perayaan/";
    $target_file = $target_folder . basename($gambar);
    $file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
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

// Edit Data
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $judul = trim($_POST['judul']);
    $deskripsi = trim($_POST['deskripsi']);
    $gambar = $_FILES['gambar']['name'];

    if ($gambar) {
        $target_file = "uploads_perayaan/" . basename($gambar);
        move_uploaded_file($_FILES['gambar']['tmp_name'], $target_file);

        $query_old = $conn->prepare("SELECT gambar FROM perayaan WHERE id = ?");
        $query_old->bind_param("i", $id);
        $query_old->execute();
        $result_old = $query_old->get_result();
        $row_old = $result_old->fetch_assoc();
        if (file_exists("uploads_perayaan/" . $row_old['gambar'])) {
            unlink("uploads_perayaan/" . $row_old['gambar']);
        }

        $query = $conn->prepare("UPDATE perayaan SET judul=?, deskripsi=?, gambar=? WHERE id=?");
        $query->bind_param("sssi", $judul, $deskripsi, $gambar, $id);
    } else {
        $query = $conn->prepare("UPDATE perayaan SET judul=?, deskripsi=? WHERE id=?");
        $query->bind_param("ssi", $judul, $deskripsi, $id);
    }

    if ($query->execute()) {
        echo "<script>alert('Data berhasil diperbarui!'); window.location='perayaan.php';</script>";
    } else {
        echo "<script>alert('Gagal memperbarui data!');</script>";
    }
}

// Hapus Data
if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];

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
        body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f5f7fa;
    color: #333;
    margin: 0;
    padding: 0;
    line-height: 1.6;
}

.container {
    max-width: 1200px;
    margin: 30px auto;
    padding: 25px;
    background: white;
    border-radius: 8px;
    box-shadow: 0 2px 15px rgba(0, 0, 0, 0.08);
}

h2 {
    text-align: center;
    margin-bottom: 25px;
    color: #265a3a;
    font-weight: 600;
    padding-bottom: 10px;
    border-bottom: 2px solid #f0f0f0;
}

/* Form Styling */
form {
    background: #fff;
    padding: 25px;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
    margin-bottom: 30px;
}

input, textarea {
    width: 100%;
    padding: 12px;
    margin: 10px 0;
    border: 1px solid #e0e0e0;
    border-radius: 4px;
    font-family: inherit;
    transition: border-color 0.3s;
    box-sizing: border-box;
}

input:focus, textarea:focus {
    border-color: #265a3a;
    outline: none;
    box-shadow: 0 0 4px rgba(38, 90, 58, 0.2);
}

input[type="file"] {
    padding: 8px;
    background-color: #f8f9fa;
}

button {
    background: #265a3a;
    color: white;
    border: none;
    padding: 12px 22px;
    border-radius: 4px;
    cursor: pointer;
    font-weight: 500;
    transition: background 0.3s;
    font-size: 15px;
}

button:hover {
    background: #1c432b;
}

/* Table Styling */
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 25px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
    border-radius: 8px;
    overflow: hidden;
}

table, th, td {
    border: 1px solid #e0e0e0;
}

th, td {
    padding: 12px 15px;
    text-align: left;
}

th {
    background: #265a3a;
    color: white;
    font-weight: 500;
    text-transform: uppercase;
    font-size: 14px;
}

tr:nth-child(even) {
    background-color: #f8f9fa;
}

tr:hover {
    background-color: #f0f7f3;
}

/* Button Styling */
.action-buttons {
    display: flex;
    gap: 8px;
    justify-content: center;
}

.hapus-btn, .edit-btn {
    padding: 8px 12px;
    border-radius: 4px;
    text-decoration: none;
    color: white;
    font-size: 14px;
    display: inline-block;
    transition: background 0.3s, transform 0.1s;
}

.hapus-btn {
    background: #dc3545;
}

.edit-btn {
    background: #265a3a;
}

.hapus-btn:hover {
    background: #c82333;
    transform: translateY(-1px);
}

.edit-btn:hover {
    background: #265a3a;
    transform: translateY(-1px);
}

/* Modal Edit Form */
.edit-container {
    background: #fff;
    padding: 25px;
    border-radius: 8px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    margin-bottom: 30px;
    border-left: 4px solid #265a3a;
}

.cancel-btn {
    background: #6c757d;
    color: white;
    padding: 10px 18px;
    border-radius: 4px;
    text-decoration: none;
    margin-left: 10px;
    transition: background 0.3s;
}

.cancel-btn:hover {
    background: #5a6268;
}

/* Image Preview */
.img-preview {
    margin: 10px 0;
    background: #f8f9fa;
    padding: 15px;
    border-radius: 4px;
    display: flex;
    align-items: center;
}

.img-preview img {
    border-radius: 4px;
    border: 1px solid #e0e0e0;
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

    <!-- Modal Edit Data -->
    <?php if (isset($_GET['edit'])): 
        $id_edit = $_GET['edit'];
        $query_edit = $conn->prepare("SELECT * FROM perayaan WHERE id = ?");
        $query_edit->bind_param("i", $id_edit);
        $query_edit->execute();
        $result_edit = $query_edit->get_result();
        $row_edit = $result_edit->fetch_assoc();
    ?>
    <div style="background: #fff; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); margin-bottom: 20px;">
        <h2>Edit Kegiatan</h2>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $row_edit['id'] ?>">
            <input type="text" name="judul" value="<?= htmlspecialchars($row_edit['judul']) ?>" required>
            <textarea name="deskripsi" required><?= htmlspecialchars($row_edit['deskripsi']) ?></textarea>
            <input type="file" name="gambar" accept="image/*">
            <p>Gambar saat ini: <img src="uploads_perayaan/<?= htmlspecialchars($row_edit['gambar']) ?>" width="100"></p>
            <button type="submit" name="update">Update Kegiatan</button>
            <a href="perayaan.php" style="background: #6c757d; color: white; padding: 8px 15px; border-radius: 5px; text-decoration: none;">Batal</a>
        </form>
    </div>
    <?php endif; ?>

    <!-- Tabel Data Kegiatan -->
    <h2>Data Kegiatan Perayaan</h2>
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
        $result_table = $conn->query("SELECT * FROM perayaan ORDER BY id DESC");
        while ($row = $result_table->fetch_assoc()) : 
        ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= htmlspecialchars($row['judul']) ?></td>
            <td><?= htmlspecialchars($row['deskripsi']) ?></td>
            <td><img src="uploads_perayaan/<?= htmlspecialchars($row['gambar']) ?>" width="80"></td>
            <td>
                <a class="edit-btn" href="perayaan.php?edit=<?= $row['id'] ?>">Edit</a>
                <a class="hapus-btn" href="perayaan.php?hapus=<?= $row['id'] ?>" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>

</div>
</body>
</html>
