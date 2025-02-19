<?php
session_start();
require_once 'koneksii.php'; // Sambungkan ke database

// Cek jika form disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Enkripsi password
    $profile = mysqli_real_escape_string($conn, $_POST['profile']);
    
    // Upload foto profil jika ada
    $profile_image = "";
    if(isset($_FILES['profile_image'])) {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["profile_image"]["name"]);
        if (move_uploaded_file($_FILES["profile_image"]["tmp_name"], $target_file)) {
            $profile_image = $target_file;
        }
    }
    
    // Query untuk menambah admin
    $sql = "INSERT INTO admin (username, name, password, profile, profile_image) 
            VALUES ('$username', '$name', '$password', '$profile', '$profile_image')";
    
    if (mysqli_query($conn, $sql)) {
        $success_message = "Admin berhasil ditambahkan!";
    } else {
        $error_message = "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Admin</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="password"],
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
        }
        .btn {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
        }
        .message {
            padding: 10px;
            margin-bottom: 15px;
        }
        .success {
            background-color: #dff0d8;
            color: #3c763d;
        }
        .error {
            background-color: #f2dede;
            color: #a94442;
        }
    </style>
</head>
<body>
    <h2>Tambah Admin Baru</h2>
    
    <?php if(isset($success_message)): ?>
        <div class="message success"><?php echo $success_message; ?></div>
    <?php endif; ?>
    
    <?php if(isset($error_message)): ?>
        <div class="message error"><?php echo $error_message; ?></div>
    <?php endif; ?>
    
    <form method="POST" action="" enctype="multipart/form-data">
        <div class="form-group">
            <label>Username:</label>
            <input type="text" name="username" required>
        </div>
        
        <div class="form-group">
            <label>Nama Lengkap:</label>
            <input type="text" name="name" required>
        </div>
        
        <div class="form-group">
            <label>Password:</label>
            <input type="password" name="password" required>
        </div>
        
        <div class="form-group">
            <label>Profil:</label>
            <textarea name="profile" rows="4"></textarea>
        </div>
        
        <div class="form-group">
            <label>Foto Profil:</label>
            <input type="file" name="profile_image">
        </div>
        
        <button type="submit" class="btn">Tambah Admin</button>
    </form>
</body>
</html>