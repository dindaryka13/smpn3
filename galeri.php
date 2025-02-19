<?php
require_once 'config.php';

// Fungsi upload foto
function uploadFoto($file) {
    $target_dir = "uploads/galeri/";
    if (!file_exists($target_dir)) {
        mkdir($target_dir, 0777, true);
    }
    
    $target_file = $target_dir . basename($file["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $newFileName = $target_dir . uniqid() . '.' . $imageFileType;
    
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
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
    $sql = "DELETE FROM galeri WHERE id = '$id'";
    mysqli_query($conn, $sql);
    header("Location: galeri.php");
    exit();
}

// Handle Create/Update
if ($_SERVER['REQUEST_METHOD'] == 'POST' && !isset($_POST['delete'])) {
    $judul = mysqli_real_escape_string($conn, $_POST['judul']);
    $deskripsi = mysqli_real_escape_string($conn, $_POST['deskripsi']);
    $kategori = mysqli_real_escape_string($conn, $_POST['kategori']);
    
    if (isset($_POST['id'])) { // Update
        $id = mysqli_real_escape_string($conn, $_POST['id']);
        if (isset($_FILES['foto']) && $_FILES['foto']['size'] > 0) {
            $foto_path = uploadFoto($_FILES['foto']);
            if ($foto_path) {
                $sql = "UPDATE galeri SET judul='$judul', deskripsi='$deskripsi', 
                        kategori='$kategori', foto='$foto_path' WHERE id='$id'";
            } else {
                $sql = "UPDATE galeri SET judul='$judul', deskripsi='$deskripsi', 
                        kategori='$kategori' WHERE id='$id'";
            }
        } else {
            $sql = "UPDATE galeri SET judul='$judul', deskripsi='$deskripsi', 
                    kategori='$kategori' WHERE id='$id'";
        }
    } else { // Create
        $foto_path = "";
        if (isset($_FILES['foto'])) {
            $foto_path = uploadFoto($_FILES['foto']);
        }
        $sql = "INSERT INTO galeri (judul, deskripsi, kategori, foto) 
                VALUES ('$judul', '$deskripsi', '$kategori', '$foto_path')";
    }
    
    mysqli_query($conn, $sql);
    header("Location: galeri.php");
    exit();
}

// Get data for edit
$edit_data = null;
if (isset($_GET['edit'])) {
    $id = mysqli_real_escape_string($conn, $_GET['edit']);
    $result = mysqli_query($conn, "SELECT * FROM galeri WHERE id='$id'");
    $edit_data = mysqli_fetch_assoc($result);
}

// Get all galeri
$galeri = mysqli_query($conn, "SELECT * FROM galeri ORDER BY created_at DESC");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Galeri - SMPN 3 Malang</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            display: flex;
        }
        .main-content {
    margin-left: 0;
    width: 100%;
}


.form-container {
    width: 100%;
    max-width: 100%;
    margin: 0;
    padding: 20px;
    box-sizing: border-box;
}



.form-container h2 {
    color: #2c6e49;
    margin-bottom: 25px;
    padding-bottom: 10px;
    border-bottom: 2px solid #f0f0f0;
}

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    margin-bottom: 8px;
    font-weight: 600;
    color: #333;
}

.form-control {
    width: 100%;
    padding: 12px;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 15px;
    transition: border-color 0.3s, box-shadow 0.3s;
}

.form-control:focus {
    border-color: #2c6e49;
    box-shadow: 0 0 0 3px rgba(44, 110, 73, 0.1);
    outline: none;
}

textarea.form-control {
    resize: vertical;
    min-height: 120px;
}

input[type="file"].form-control {
    padding: 8px;
    background-color: #f8f8f8;
}

.btn {
    padding: 12px 24px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    font-weight: 600;
    transition: background-color 0.3s, transform 0.1s;
}

.btn:hover {
    transform: translateY(-2px);
}

.btn:active {
    transform: translateY(0);
}

.btn-primary {
    background-color: #2c6e49;
    color: white;
}

.btn-primary:hover {
    background-color: #3d8c5f;
}

.btn-danger {
    background-color: #e63946;
    color: white;
}

.btn-danger:hover {
    background-color: #f25b69;
}

/* Image Preview Styling */
.thumbnail {
    width: 150px;
    height: 150px;
    object-fit: cover;
    border-radius: 4px;
    display: block;
    margin-top: 12px;
    border: 1px solid #ddd;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
}

/* Form Layout for Larger Screens */
@media (min-width: 768px) {
    .form-row {
        display: flex;
        gap: 20px;
    }
    
    .form-row .form-group {
        flex: 1;
    }
    
    .form-actions {
        display: flex;
        justify-content: flex-end;
        gap: 15px;
        margin-top: 30px;
    }
}

/* Custom File Input Styling */
.file-input-container {
    position: relative;
    overflow: hidden;
    display: inline-block;
    margin-top: 5px;
}

.file-input-label {
    display: inline-block;
    padding: 10px 15px;
    background-color: #f0f0f0;
    color: #333;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.file-input-label:hover {
    background-color: #e0e0e0;
}

.file-input-container input[type="file"] {
    position: absolute;
    left: 0;
    top: 0;
    opacity: 0;
    cursor: pointer;
}

.file-name {
    display: inline-block;
    margin-left: 10px;
    font-size: 14px;
    color: #666;
}

/* Mobile Responsiveness */
@media (max-width: 767px) {
    .form-container {
        padding: 20px 15px;
    }
    
    .btn {
        width: 100%;
        margin-top: 15px;
    }
}
        .table-container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .thumbnail {
            width: 100px;
            height: 100px;
            object-fit: cover;
        }
    </style>
</head>
<body>

<!-- Load Sidebar -->
<?php include 'index1.php'; ?>

<div class="main-content">
    <div class="form-container">
        <h2><?php echo $edit_data ? 'Edit' : 'Tambah' ?> Foto Galeri</h2>
        <form method="POST" enctype="multipart/form-data">
            <?php if ($edit_data) : ?>
                <input type="hidden" name="id" value="<?php echo $edit_data['id']; ?>">
            <?php endif; ?>
            
            <div class="form-group">
                <label>Judul Foto</label>
                <input type="text" name="judul" class="form-control" required 
                       value="<?php echo $edit_data ? $edit_data['judul'] : ''; ?>">
            </div>

            <div class="form-group">
                <label>Deskripsi</label>
                <textarea name="deskripsi" class="form-control" rows="4"><?php echo $edit_data ? $edit_data['deskripsi'] : ''; ?></textarea>
            </div>

            <div class="form-group">
                <label>Foto</label>
                <input type="file" name="foto" class="form-control" <?php echo $edit_data ? '' : 'required'; ?>>
                <?php if ($edit_data && $edit_data['foto']) : ?>
                    <img src="<?php echo $edit_data['foto']; ?>" class="thumbnail">
                <?php endif; ?>
            </div>

            <button type="submit" class="btn btn-primary">
                <?php echo $edit_data ? 'Update' : 'Simpan' ?>
            </button>
        </form>
        <div class="table-container">
        <h2>Data Galeri</h2>
        <table border="1" width="100%" cellpadding="10" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $no = 1;
                while ($row = mysqli_fetch_assoc($galeri)) : ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo htmlspecialchars($row['judul']); ?></td>
                        <td><?php echo nl2br(htmlspecialchars($row['deskripsi'])); ?></td>
                        <td>
                            <?php if (!empty($row['foto'])) : ?>
                                <img src="<?php echo $row['foto']; ?>" class="thumbnail">
                            <?php else : ?>
                                Tidak ada gambar
                            <?php endif; ?>
                        </td>
                        <td>
                            <a href="?edit=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a>
                            <form method="POST" style="display:inline;">
                                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                <button type="submit" name="delete" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
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
