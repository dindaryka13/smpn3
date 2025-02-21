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
    
    if (!in_array($imageFileType, ["jpg", "png", "jpeg"])) {
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
                $sql = "UPDATE galeri SET judul='$judul', deskripsi='$deskripsi', kategori='$kategori', foto='$foto_path' WHERE id='$id'";
            } else {
                $sql = "UPDATE galeri SET judul='$judul', deskripsi='$deskripsi', kategori='$kategori' WHERE id='$id'";
            }
        } else {
            $sql = "UPDATE galeri SET judul='$judul', deskripsi='$deskripsi', kategori='$kategori' WHERE id='$id'";
        }
    } else { // Create
        $foto_path = "";
        if (isset($_FILES['foto'])) {
            $foto_path = uploadFoto($_FILES['foto']);
        }
        $sql = "INSERT INTO galeri (judul, deskripsi, kategori, foto) VALUES ('$judul', '$deskripsi', '$kategori', '$foto_path')";
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
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            display: flex;
        }

        .main-content {
            margin-left: 0;
            width: 100%;
            padding: 20px;
            box-sizing: border-box;
        }

        .form-container, .table-container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
            width: 90%;
            margin-left: auto;
            margin-right: auto;
        }

        h2 {
            color: #2c6e49;
            margin-bottom: 20px;
            border-bottom: 2px solid #f0f0f0;
            padding-bottom: 10px;
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
            border-radius: 6px;
            font-size: 16px;
            transition: border-color 0.3s ease;
        }

        .form-control:focus {
            border-color: #2c6e49;
            outline: none;
        }

        .btn {
            padding: 10px 20px;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s ease;
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

        .thumbnail {
            width: 120px;
            height: 120px;
            object-fit: cover;
            border-radius: 6px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-top: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            overflow-x: auto;
        }

        table th, table td {
            padding: 12px 15px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        table th {
            background-color: #2c6e49;
            color: white;
        }

        table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        table tr:hover {
            background-color: #f1f1f1;
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
                <input type="text" name="judul" class="form-control" required value="<?php echo $edit_data ? $edit_data['judul'] : ''; ?>">
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
    </div>

    <div class="table-container">
        <h2>Data Galeri</h2>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
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

</body>
</html>
