<?php
require_once 'config.php';

// Variabel untuk pesan notifikasi
$pesan = "";

// Fungsi tambah/edit
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $type = mysqli_real_escape_string($conn, $_POST['type']);
    $content = mysqli_real_escape_string($conn, $_POST['content']);

    if (isset($_POST['id']) && !empty($_POST['id'])) { // Edit
        $id = mysqli_real_escape_string($conn, $_POST['id']);
        $query = "UPDATE visi_misi SET type='$type', content='$content' WHERE id='$id'";
        $pesan = "Data berhasil diperbarui!";
    } else { // Tambah baru
        $query = "INSERT INTO visi_misi (type, content) VALUES ('$type', '$content')";
        $pesan = "Data berhasil ditambahkan!";
    }

    if (mysqli_query($conn, $query)) {
        header("Location: visi_misi.php?pesan=" . urlencode($pesan));
        exit();
    } else {
        $pesan = "Gagal menyimpan data!";
    }
}

// Fungsi hapus
if (isset($_POST['delete'])) {
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $query = "DELETE FROM visi_misi WHERE id='$id'";

    if (mysqli_query($conn, $query)) {
        header("Location: visi_misi.php?pesan=" . urlencode("Data berhasil dihapus!"));
        exit();
    } else {
        $pesan = "Gagal menghapus data!";
    }
}

// Ambil data untuk edit
$edit_data = null;
if (isset($_GET['edit'])) {
    $id = mysqli_real_escape_string($conn, $_GET['edit']);
    $result = mysqli_query($conn, "SELECT * FROM visi_misi WHERE id='$id'");
    $edit_data = mysqli_fetch_assoc($result);
}

// Ambil semua data visi & misi
$visi_misi = mysqli_query($conn, "SELECT * FROM visi_misi ORDER BY type ASC, id DESC");

// Ambil pesan dari URL jika ada
if (isset($_GET['pesan'])) {
    $pesan = $_GET['pesan'];
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Visi & Misi</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css"> <!-- Pastikan styles.css ada -->

    <style>
        /* Tata Letak */
        body { font-family: Arial, sans-serif; background-color: #f4f4f4; }
        .main-content { margin-left: 250px; padding: 20px; }
        .content-wrapper { background: white; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }

        /* Form */
        .form-group { margin-bottom: 10px; }
        .form-group label { font-weight: bold; }
        .form-group select, .form-group textarea, .form-group input { width: 100%; padding: 8px; border: 1px solid #ddd; border-radius: 4px; }

        /* Tombol */
        .btn { padding: 10px; border: none; cursor: pointer; border-radius: 4px; }
        .btn-primary { background: #2c6e49; color: white; }
        .btn-danger { background: #dc3545; color: white; }
        .btn-warning { background: #2c6e49; color: black; }

        /* Tabel */
        .table-container { margin-top: 20px; }
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 10px; text-align: left; border-bottom: 1px solid #ddd; }
        th { background: #2c6e49; color: white; }
        .action-buttons { display: flex; gap: 5px; }

        /* Pesan Notifikasi */
        .alert { padding: 10px; margin-bottom: 15px; border-radius: 5px; }
        .alert-success { background-color: #d4edda; color: #155724; }
        .alert-danger { background-color: #f8d7da; color: #721c24; }

        /* Responsif */
        @media (max-width: 768px) {
            .main-content { margin-left: 0; padding: 10px; }
            .action-buttons { flex-direction: column; }
        }
    </style>
</head>
<body>

<!-- Sidebar -->
<?php include 'index1.php'; ?>

<!-- Konten Utama -->
<div class="main-content">
    <div class="content-wrapper">
        <h2><?php echo $edit_data ? 'Edit' : 'Tambah'; ?> Visi & Misi</h2>

        <!-- Notifikasi -->
        <?php if (!empty($pesan)): ?>
            <div class="alert alert-success"><?php echo $pesan; ?></div>
        <?php endif; ?>

        <div class="form-container">
            <form method="POST">
                <?php if ($edit_data): ?>
                    <input type="hidden" name="id" value="<?php echo $edit_data['id']; ?>">
                <?php endif; ?>

                <div class="form-group">
                    <label>Jenis</label>
                    <select name="type" required>
                        <option value="visi" <?php echo ($edit_data && $edit_data['type'] == 'visi') ? 'selected' : ''; ?>>Visi</option>
                        <option value="misi" <?php echo ($edit_data && $edit_data['type'] == 'misi') ? 'selected' : ''; ?>>Misi</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Isi</label>
                    <textarea name="content" rows="3" required><?php echo $edit_data ? $edit_data['content'] : ''; ?></textarea>
                </div>

                <button type="submit" name="submit" class="btn btn-primary">
                    <?php echo $edit_data ? 'Update' : 'Simpan'; ?>
                </button>
            </form>
        </div>

        <div class="table-container">
            <h2>Daftar Visi & Misi</h2>
            <table>
                <thead>
                    <tr>
                        <th>Jenis</th>
                        <th>Isi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($visi_misi)): ?>
                        <tr>
                            <td><?php echo ucfirst($row['type']); ?></td>
                            <td><?php echo $row['content']; ?></td>
                            <td class="action-buttons">
                                <a href="?edit=<?php echo $row['id']; ?>" class="btn btn-warning">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <form method="POST" style="display: inline;">
                                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                    <button type="submit" name="delete" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')">
                                        <i class="fas fa-trash"></i> Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>
