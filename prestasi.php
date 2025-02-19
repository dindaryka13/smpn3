<?php
require_once 'config.php';

// Fungsi upload foto
function uploadFoto($file) {
    $target_dir = "uploads_prestasi/";
    if (!file_exists($target_dir)) {
        mkdir($target_dir, 0777, true);
    }

    $imageFileType = strtolower(pathinfo($file["name"], PATHINFO_EXTENSION));
    $newFileName = $target_dir . uniqid() . '.' . $imageFileType;

    // Validasi format file
    if (!in_array($imageFileType, ['jpg', 'jpeg', 'png'])) {
        return false;
    }

    // Validasi ukuran file (maks 2MB)
    if ($file["size"] > 2 * 1024 * 1024) {
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

    // Hapus file foto jika ada
    $query = mysqli_query($conn, "SELECT foto FROM prestasi WHERE id = '$id'");
    $row = mysqli_fetch_assoc($query);
    
    if (!empty($row['foto']) && file_exists($row['foto'])) {
        unlink($row['foto']);
    }

    // Hapus data dari database
    mysqli_query($conn, "DELETE FROM prestasi WHERE id = '$id'");
    header("Location: prestasi.php");
    exit();
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
    }

    if (isset($_POST['id']) && !empty($_POST['id'])) { // Update
        $id = mysqli_real_escape_string($conn, $_POST['id']);

        // Jika ada foto baru, hapus yang lama
        if ($foto_path) {
            $query = mysqli_query($conn, "SELECT foto FROM prestasi WHERE id = '$id'");
            $row = mysqli_fetch_assoc($query);
            if (!empty($row['foto']) && file_exists($row['foto'])) {
                unlink($row['foto']);
            }

            $sql = "UPDATE prestasi SET judul='$judul', tanggal='$tanggal', tingkat='$tingkat', deskripsi='$deskripsi', foto='$foto_path' WHERE id='$id'";
        } else {
            $sql = "UPDATE prestasi SET judul='$judul', tanggal='$tanggal', tingkat='$tingkat', deskripsi='$deskripsi' WHERE id='$id'";
        }
    } else { // Create
        $sql = "INSERT INTO prestasi (judul, tanggal, tingkat, deskripsi, foto) VALUES ('$judul', '$tanggal', '$tingkat', '$deskripsi', '$foto_path')";
    }

    mysqli_query($conn, $sql);
    header("Location: prestasi.php");
    exit();
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
<style>
    /* Base styles */
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

/* Main content area */
.main-content {
  max-width: 1200px;
  margin: 20px auto;
  padding: 0 15px;
  display: flex;
  flex-wrap: wrap;
  gap: 30px;
}

/* Form styling */
.form-container {
  background: white;
  padding: 25px;
  border-radius: 8px;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
  flex: 1;
  min-width: 300px;
}

.form-container h2 {
  margin-bottom: 20px;
  color: #265a3a;
  border-bottom: 2px solid #e9ecef;
  padding-bottom: 10px;
}

.form-group {
  margin-bottom: 15px;
}

.form-group label {
  display: block;
  margin-bottom: 5px;
  font-weight: 600;
}

.form-control {
  width: 100%;
  padding: 10px;
  border: 1px solid #ced4da;
  border-radius: 4px;
  font-size: 14px;
  transition: border-color 0.15s ease-in-out;
}

.form-control:focus {
  border-color: #86b7fe;
  outline: 0;
  box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
}

input[type="file"].form-control {
  padding: 8px;
}

textarea.form-control {
  resize: vertical;
  min-height: 100px;
}

/* Button styling */
.btn {
  display: inline-block;
  font-weight: 400;
  text-align: center;
  white-space: nowrap;
  vertical-align: middle;
  user-select: none;
  border: 1px solid transparent;
  padding: 0.375rem 0.75rem;
  font-size: 1rem;
  line-height: 1.5;
  border-radius: 0.25rem;
  transition: all 0.15s ease-in-out;
  cursor: pointer;
  margin-top: 10px;
}

.btn-primary {
  color: #fff;
  background-color: #265a3a;
  border-color:#265a3a;
}

.btn-primary:hover {
  background-color: #265a3a;
  border-color: #265a3a;
}

.btn-warning {
  color: #000;
  background-color: #2c6e49;
  border-color: #2c6e49;
  margin-right: 5px;
}

.btn-warning:hover {
  background-color: #2c6e49;
  border-color: #2c6e49;
}

.btn-danger {
  color: #fff;
  background-color: #dc3545;
  border-color: #dc3545;
}

.btn-danger:hover {
  background-color: #bb2d3b;
  border-color: #b02a37;
}

/* Table styling */
.table-container {
  width: 100%;
  margin-top: 30px;
  background: white;
  padding: 25px;
  border-radius: 8px;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
  overflow-x: auto;
}

.table-container h2 {
  margin-bottom: 20px;
  color:#265a3a;
  border-bottom: 2px solid #e9ecef;
  padding-bottom: 10px;
}

table {
  width: 100%;
  border-collapse: collapse;
  margin-bottom: 20px;
  background-color: transparent;
}

table th, table td {
  padding: 12px 15px;
  text-align: left;
  border: 1px solid #dee2e6;
}

table th {
  background-color: #f8f9fa;
  color: #495057;
  font-weight: 600;
  vertical-align: bottom;
  position: sticky;
  top: 0;
}

table tr:nth-child(even) {
  background-color: #f2f2f2;
}

table tr:hover {
  background-color: #e9ecef;
}

/* Image preview styling */
.form-container img, 
.table-container img {
  border-radius: 4px;
  object-fit: cover;
  border: 1px solid #dee2e6;
}

/* Responsive adjustments */
@media (max-width: 768px) {
  .main-content {
    flex-direction: column;
  }
  
  .form-container, .table-container {
    width: 100%;
  }
  
  table {
    display: block;
    overflow-x: auto;
    white-space: nowrap;
  }
  
  .btn {
    padding: 0.25rem 0.5rem;
    font-size: 0.875rem;
  }
}
</style>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Prestasi - SMPN 3 Malang</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body>

<?php include 'index1.php'; ?>

<div class="main-content">
    <div class="form-container">
        <h2><?php echo $edit_data ? 'Edit' : 'Tambah' ?> Prestasi</h2>
        <form method="POST" enctype="multipart/form-data">
            <?php if ($edit_data) : ?>
                <input type="hidden" name="id" value="<?php echo $edit_data['id']; ?>">
            <?php endif; ?>

            <div class="form-group">
                <label>Judul</label>
                <input type="text" name="judul" class="form-control" required value="<?php echo $edit_data ? $edit_data['judul'] : ''; ?>">
            </div>

            <div class="form-group">
                <label>Tanggal</label>
                <input type="date" name="tanggal" class="form-control" required value="<?php echo $edit_data ? $edit_data['tanggal'] : ''; ?>">
            </div>

            <div class="form-group">
                <label>Tingkat</label>
                <select name="tingkat" class="form-control" required>
                    <option value="Akademik" <?php echo $edit_data && $edit_data['tingkat'] == 'Akademik' ? 'selected' : ''; ?>>Akademik</option>
                    <option value="Non Akademik" <?php echo $edit_data && $edit_data['tingkat'] == 'Non Akademik' ? 'selected' : ''; ?>>Non Akademik</option>
                </select>
            </div>

            <div class="form-group">
                <label>Deskripsi</label>
                <textarea name="deskripsi" class="form-control" rows="4"><?php echo $edit_data ? $edit_data['deskripsi'] : ''; ?></textarea>
            </div>

            <div class="form-group">
                <label>Foto</label>
                <input type="file" name="foto" class="form-control">
                <?php if ($edit_data && !empty($edit_data['foto'])) : ?>
                    <p>Foto Saat Ini:</p>
                    <img src="<?= $edit_data['foto']; ?>" width="100px" height="100px" style="object-fit: cover;">
                <?php endif; ?>
            </div>

            <button type="submit" class="btn btn-primary"><?php echo $edit_data ? 'Update' : 'Simpan' ?></button>
        </form>
    </div>
</div>

<div class="table-container">
    <h2>Data Prestasi</h2>
    <table border="1" width="100%" cellspacing="0" cellpadding="10">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Tanggal</th>
                <th>Tingkat</th>
                <th>Deskripsi</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; while ($row = mysqli_fetch_assoc($prestasi)) : ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $row['judul']; ?></td>
                    <td><?= $row['tanggal']; ?></td>
                    <td><?= $row['tingkat']; ?></td>
                    <td><?= $row['deskripsi']; ?></td>
                    <td>
                        <?php if (!empty($row['foto'])) : ?>
                            <img src="<?= $row['foto']; ?>" width="100px" height="100px" style="object-fit: cover;">
                        <?php else : ?>
                            <span>Tidak ada foto</span>
                        <?php endif; ?>
                    </td>
                    <td>
                        <a href="prestasi.php?edit=<?= $row['id']; ?>" class="btn btn-warning">Edit</a>
                        <form method="POST" style="display:inline;">
                            <input type="hidden" name="id" value="<?= $row['id']; ?>">
                            <button type="submit" name="delete" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>

</body>
</html>
