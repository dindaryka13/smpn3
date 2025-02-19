<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php?error=Silakan login terlebih dahulu!");
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Halaman Admin</title>
</head>
<body>

<h2>Selamat datang, <?php echo $_SESSION['admin_username']; ?>!</h2>
<a href="logout.php">Logout</a>

</body>
</html>
