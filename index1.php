<?php
session_start();
require_once 'koneksi.php';

// Cek jika user sudah login
if (!isset($_SESSION['admin_id'])) {
    header("Location: login.php");
    exit();
}

// Mengambil data admin
$admin_id = $_SESSION['admin_id'];
$sql = "SELECT * FROM admin WHERE id = $admin_id";
$result = mysqli_query($conn, $sql);
$admin = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - SMPN 3 Malang</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary: #2c6e49;
            --primary-light: #3d8c5f;
            --primary-dark: #265a3a;
            --white: #ffffff;
            --gray-light: #f4f4f4;
            --shadow: 0 2px 4px rgba(0,0,0,0.1);
            --border-radius: 8px;
            --spacing-md: 1.5rem;
            --sidebar-width: 250px;
            --transition-speed: 0.3s;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: var(--gray-light);
            display: flex;
            overflow-x: hidden;
        }

        /* Sidebar */
        .sidebar {
            width: var(--sidebar-width);
            background-color: var(--primary);
            color: var(--white);
            position: fixed;
            height: 100vh;
            transition: width var(--transition-speed) ease;
            z-index: 100;
            box-shadow: 2px 0 5px rgba(0,0,0,0.1);
            overflow-y: auto;
        }

        .sidebar .logo {
            text-align: center;
            font-size: 1.5rem;
            font-weight: bold;
            padding: var(--spacing-md) 0;
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }

        .sidebar-nav {
            display: flex;
            flex-direction: column;
            padding: 1rem 0;
        }

        .sidebar a {
            display: flex;
            align-items: center;
            color: var(--white);
            text-decoration: none;
            padding: 12px var(--spacing-md);
            font-size: 1.1rem;
            transition: background var(--transition-speed) ease;
            border-left: 3px solid transparent;
        }

        .sidebar a i {
            width: 24px;
            text-align: center;
            margin-right: 12px;
        }

        .sidebar a:hover,
        .sidebar a.active {
            background-color: var(--primary-light);
            border-left-color: var(--white);
        }

        /* Main Content */
        .main-content {
            margin-left: var(--sidebar-width);
            padding: var(--spacing-md);
            transition: margin-left var(--transition-speed) ease;
            width: calc(100% - var(--sidebar-width));
        }

        /* Responsive Sidebar */
        @media (max-width: 768px) {
            .sidebar {
                width: 0;
                overflow: hidden;
            }
            .main-content {
                margin-left: 0;
                width: 100%;
            }
        }
    </style>
</head>
<body>

<!-- Sidebar -->
<div class="sidebar">
    <div class="logo">SMPN 3 Malang</div>
    <a href="dashboard.php"><i class="fas fa-home"></i> Dashboard</a>
    <a href="prestasi.php"><i class="fas fa-trophy"></i> Prestasi</a>
    <a href="galeri.php"><i class="fas fa-images"></i> Galeri</a>
    <a href="visi_misi.php"><i class="fas fa-bullseye"></i> Visi dan Misi</a>
    <a href="perayaan.php"><i class="fas fa-calendar-alt"></i> Kegiatan</a>
    <a href="pesan_kesan.php"><i class="fas fa-comment-dots"></i> Pesan Kesan</a>

    <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
</div>

<!-- Main Content -->
<div class="main-content">
