<?php
session_start();
require_once 'config.php';

// Cek login
if (!isset($_SESSION['admin_id'])) {
    header("Location: login.php");
    exit();
}

// Fungsi upload foto
function uploadFoto($file) {
    $target_dir = "uploads_prestasi/";
    if (!file_exists($target_dir)) {
        mkdir($target_dir, 0777, true);
    }

    $imageFileType = strtolower(pathinfo($file["name"], PATHINFO_EXTENSION));
    $newFileName = $target_dir . uniqid() . '.' . $imageFileType;

    // Cek format file
    if (!in_array($imageFileType, ['jpg', 'jpeg', 'png'])) {
        return false;
    }

    if (move_uploaded_file($file["tmp_name"], $newFileName)) {
        return $newFileName;
    }
    return false;
}

// Handle Delete
if (isset($_POST['delete'])) {
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $sql = "DELETE FROM prestasi WHERE id = '$id'";
    if (mysqli_query($conn, $sql)) {
        header("Location: prestasi.php");
        exit();
    } else {
        echo "Gagal menghapus data: " . mysqli_error($conn);
    }
}

// Handle Create/Update
if ($_SERVER['REQUEST_METHOD'] == 'POST' && !isset($_POST['delete'])) {
    $judul = mysqli_real_escape_string($conn, $_POST['judul']);
    $tanggal = mysqli_real_escape_string($conn, $_POST['tanggal']);
    $tingkat = mysqli_real_escape_string($conn, $_POST['tingkat']);
    $deskripsi = mysqli_real_escape_string($conn, $_POST['deskripsi']);
    $foto_path = "";

    if (isset($_FILES['foto']) && $_FILES['foto']['size'] > 0) {
        $foto_path = uploadFoto($_FILES['foto']);
        if (!$foto_path) {
            echo "Gagal mengunggah foto! Hanya file JPG, JPEG, atau PNG yang diperbolehkan.";
            exit();
        }
    }

    if (isset($_POST['id']) && !empty($_POST['id'])) { // Update
        $id = mysqli_real_escape_string($conn, $_POST['id']);
        if ($foto_path) {
            $sql = "UPDATE prestasi SET judul='$judul', tanggal='$tanggal', tingkat='$tingkat', deskripsi='$deskripsi', foto='$foto_path' WHERE id='$id'";
        } else {
            $sql = "UPDATE prestasi SET judul='$judul', tanggal='$tanggal', tingkat='$tingkat', deskripsi='$deskripsi' WHERE id='$id'";
        }
    } else { // Create
        $sql = "INSERT INTO prestasi (judul, tanggal, tingkat, deskripsi, foto) VALUES ('$judul', '$tanggal', '$tingkat', '$deskripsi', '$foto_path')";
    }

    if (mysqli_query($conn, $sql)) {
        header("Location: PRESTASUI.php");
        exit();
    } else {
        echo "Gagal menyimpan data: " . mysqli_error($conn);
    }
}
    
// Get data for edit
$edit_data = null;
if (isset($_GET['edit'])) {
    $id = mysqli_real_escape_string($conn, $_GET['edit']);
    $result = mysqli_query($conn, "SELECT * FROM prestasi WHERE id='$id'");
    $edit_data = mysqli_fetch_assoc($result);
}

// Get all prestasi
$prestasi = mysqli_query($conn, "SELECT * FROM prestasi ORDER BY tanggal DESC");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Prestasi - SMPN 3 Malang</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f4; }
        .navbar { background: #2c6e49; color: white; padding: 1rem; display: flex; justify-content: space-between; }
        .main-content { padding: 2rem; }
        .form-container, .table-container { background: white; padding: 2rem; margin-bottom: 2rem; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        .form-group { margin-bottom: 1rem; }
        .form-control { width: 100%; padding: 0.5rem; border: 1px solid #ddd; border-radius: 4px; }
        .btn { padding: 0.5rem 1rem; border: none; border-radius: 4px; color: white; cursor: pointer; }
        .btn-primary { background: #2c6e49; }
        .btn-danger { background: #dc3545; }
        .thumbnail { width: 100px; height: 100px; object-fit: cover; }
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 1rem; border-bottom: 1px solid #ddd; }
        th { background: #2c6e49; color: white; }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="logo">SMPN 3 Malang</div>
        <div class="nav-links">
            <a href="dashboard.php">Dashboard</a>
            <a href="prestasi.php">Prestasi</a>
            <a href="galeri.php">Galeri</a>
        </div>
    </nav>

    <div class="main-content">
        <div class="form-container">
            <h2><?php echo $edit_data ? 'Edit' : 'Tambah' ?> Prestasi</h2>
            <form method="POST" enctype="multipart/form-data">
                <?php if($edit_data) : ?>
                    <input type="hidden" name="id" value="<?php echo $edit_data['id']; ?>">
                <?php endif; ?>
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="judul" class="form-control" required value="<?php echo $edit_data['judul'] ?? ''; ?>">
                </div>
                <div class="form-group">
                    <label>Tanggal</label>
                    <input type="date" name="tanggal" class="form-control" required value="<?php echo $edit_data['tanggal'] ?? ''; ?>">
                </div>
                <div class="form-group">
                    <label>Jenis</label>
                    <select name="tingkat" class="form-control" required>
                        <option value="Akademik" <?php echo ($edit_data['tingkat'] ?? '') == 'Akademik' ? 'selected' : ''; ?>>Akademik</option>
                        <option value="Non Akademik" <?php echo ($edit_data['tingkat'] ?? '') == 'Non Akademik' ? 'selected' : ''; ?>>Non Akademik</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" rows="4"><?php echo $edit_data['deskripsi'] ?? ''; ?></textarea>
                </div>
                <div class="form-group">
                    <label>Foto</label>
                    <input type="file" name="foto" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</body>
</html>
