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
    --spacing-sm: 1rem;
    --spacing-md: 1.5rem;
    --spacing-lg: 2rem;
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

/* Sidebar Styles */
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
    margin-bottom: var(--spacing-sm);
}

.sidebar-nav {
    display: flex;
    flex-direction: column;
    padding: var(--spacing-sm) 0;
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

.sidebar a:hover {
    background-color: var(--primary-light);
    border-left-color: var(--white);
}

.sidebar a.active {
    background-color: var(--primary-dark);
    border-left-color: var(--white);
}

.main-content {
    margin-left: var(--sidebar-width);
    padding: var(--spacing-lg);
    transition: margin-left var(--transition-speed) ease;
    width: calc(100% - var(--sidebar-width));
}

.dashboard-header {
    background-color: var(--white);
    padding: var(--spacing-lg);
    border-radius: var(--border-radius);
    margin-bottom: var(--spacing-lg);
    box-shadow: var(--shadow);
    position: relative;
}

.menu-btn {
    position: absolute;
    top: var(--spacing-lg);
    left: var(--spacing-md);
    font-size: 1.5rem;
    cursor: pointer;
    color: var(--primary);
    background: none;
    border: none;
    display: none;
}

.welcome-text {
    color: var(--primary);
    margin-bottom: var(--spacing-sm);
}

.stats-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: var(--spacing-md);
}

.stat-card {
    background-color: var(--white);
    padding: var(--spacing-md);
    border-radius: var(--border-radius);
    box-shadow: var(--shadow);
    text-align: center;
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.stat-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 4px 8px rgba(0,0,0,0.15);
}

.stat-card i {
    color: var(--primary);
    font-size: 2rem;
    margin-bottom: var(--spacing-sm);
}

.stat-card h3 {
    margin-bottom: 8px;
}

.stat-card p {
    color: #555;
    margin-bottom: 5px;
}

@media (max-width: 768px) {
    .sidebar {
        width: 0;
        overflow: hidden;
    }
    
    .main-content {
        margin-left: 0;
        width: 100%;
    }
    
    .menu-btn {
        display: block;
    }
    
    .dashboard-header {
        padding-left: 50px;
    }
    
    .sidebar.open {
        width: var(--sidebar-width);
    }
}
@media (max-width: 768px) {
    .sidebar {
        width: 0;
        overflow: hidden;
    }
    
    .main-content {
        margin-left: 0;
    }
    
    .menu-btn {
        left: 20px;
    }
    
    .stats-grid {
        grid-template-columns: 1fr;
    }
}

        /* Responsive Sidebar */
        @media (max-width: 768px) {
            .sidebar {
                width: 0;
                overflow: hidden;
            }
            .main-content {
                margin-left: 0;
            }
            .menu-btn {
                left: 20px;
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
    <a href="admin_berita.php"><i class="fas fa-comment-dots"></i>Berita</a>
    <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
</div>

<!-- Menu Button -->
<div class="menu-btn" onclick="toggleSidebar()">
    <i class="fas fa-bars"></i>
</div>

<!-- Main Content -->
<div class="main-content">
    <div class="dashboard-header">
        <h1 class="welcome-text">Selamat Datang, <?php echo $admin['name']; ?>!</h1>
        <p>Panel Admin SMPN 3 Malang</p>
    </div>

    <div class="stats-grid">
        <div class="stat-card">
            <i class="fas fa-trophy"></i>
            <h3>Prestasi</h3>
            <p>Total 24 Prestasi</p>
            <p>3 Prestasi Baru Bulan Ini</p>
        </div>
        <div class="stat-card">
            <i class="fas fa-images"></i>
            <h3>Galeri</h3>
            <p>Total 56 Foto</p>
            <p>12 Foto Ditambahkan Minggu Ini</p>
        </div>
        <div class="stat-card">
            <i class="fas fa-users"></i>
            <h3>Admin</h3>
            <p>Total 5 Admin Aktif</p>
            <p>2 Admin Online</p>
        </div>
        <div class="stat-card">
            <i class="fas fa-clock"></i>
            <h3>Aktivitas Terbaru</h3>
            <p>23 Aktivitas Hari Ini</p>
            <p>Update Terakhir: 5 menit yang lalu</p>
        </div>
    </div>
</div>

<script>
    function toggleSidebar() {
        const sidebar = document.getElementById("sidebar");
        const mainContent = document.querySelector(".main-content");
        const menuBtn = document.querySelector(".menu-btn");

        if (sidebar.style.width === "250px") {
            sidebar.style.width = "0";
            mainContent.style.marginLeft = "0";
            menuBtn.style.left = "20px";
        } else {
            sidebar.style.width = "250px";
            mainContent.style.marginLeft = "250px";
            menuBtn.style.left = "260px";
        }
    }
</script>

</body>
</html>
