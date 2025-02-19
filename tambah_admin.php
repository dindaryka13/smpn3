<?php
session_start();
require "koneksi.php";

// Pastikan hanya admin yang bisa mengakses halaman ini
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: index.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash password

    $query = "INSERT INTO admin (username, password) VALUES (?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $username, $password);

    if ($stmt->execute()) {
        echo "Admin baru berhasil ditambahkan!";
    } else {
        echo "Gagal menambahkan admin: " . $conn->error;
    }
}
?>

<h2>Tambah Admin Baru</h2>
<form action="tambah_admin.php" method="POST">
    <label for="username">Username:</label>
    <input type="text" name="username" required>

    <label for="password">Password:</label>
    <input type="password" name="password" required>

    <button type="submit">Tambah Admin</button>
</form>
