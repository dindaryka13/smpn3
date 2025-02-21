<?php
session_start();
require_once 'koneksii.php'; // Sambungkan ke database

// Cek jika form login disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = $_POST['password'];
    
    // Query untuk mencari admin
    $sql = "SELECT * FROM admin WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);
    
    if ($result && mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        
        // Verifikasi password
        if (password_verify($password, $row['password'])) {
            $_SESSION['admin_id'] = $row['id'];
            $_SESSION['admin_username'] = $row['username'];
            $_SESSION['admin_name'] = $row['name'];
            
            header("Location: dashboard.php"); // Redirect ke dashboard
            exit();
        } else {
            $error_message = "Password salah!";
        }
    } else {
        $error_message = "Username tidak ditemukan!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Admin</title>
    <style>
        body {
    font-family: 'Poppins', sans-serif;
    background-color: #f5f7fa;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-image: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
}

.login-container {
    display: flex;
    width: 800px;
    max-width: 90%;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
}

.login-welcome {
    background-color: #2c6e49;
    color: white;
    flex: 1;
    padding: 40px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    position: relative;
}

.login-welcome::after {
    content: "";
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><path d="M0,0 L100,100 L0,100 Z" fill="rgba(255,255,255,0.1)"/></svg>');
    background-size: cover;
    opacity: 0.2;
}

.school-logo {
    width: 120px;
    height: 120px;
    border-radius: 50%;
    background-color: white;
    padding: 10px;
    margin-bottom: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    z-index: 1;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
}

.school-logo img {
    max-width: 90%;
    max-height: 90%;
}

.welcome-title {
    font-size: 28px;
    font-weight: 700;
    margin-bottom: 10px;
    position: relative;
    z-index: 1;
}

.welcome-subtitle {
    font-size: 16px;
    opacity: 0.9;
    margin-bottom: 20px;
    position: relative;
    z-index: 1;
}

.login-form {
    flex: 1;
    background-color: white;
    padding: 40px;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.login-header {
    margin-bottom: 30px;
}

.login-title {
    color: #2c6e49;
    font-size: 24px;
    margin-bottom: 10px;
}

.login-subtitle {
    color: #6c757d;
    font-size: 14px;
}

.form-group {
    margin-bottom: 20px;
    position: relative;
}

.form-group label {
    display: block;
    margin-bottom: 8px;
    color: #495057;
    font-weight: 500;
    font-size: 14px;
}

.form-group input {
    width: 100%;
    padding: 12px 15px;
    border: 1px solid #dde2e5;
    border-radius: 6px;
    font-size: 14px;
    transition: all 0.3s;
    box-sizing: border-box;
}

.form-group input:focus {
    border-color: #2c6e49;
    box-shadow: 0 0 0 3px rgba(44, 110, 73, 0.15);
    outline: none;
}

.form-group i {
    position: absolute;
    top: 38px;
    right: 15px;
    color: #adb5bd;
}

.btn {
    background-color: #2c6e49;
    color: white;
    padding: 14px;
    border: none;
    border-radius: 6px;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s;
    margin-top: 10px;
    width: 100%;
}

.btn:hover {
    background-color: #225b3b;
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(44, 110, 73, 0.2);
}

.error {
    background-color: #f8d7da;
    color: #721c24;
    padding: 12px;
    margin-bottom: 20px;
    border-radius: 6px;
    border-left: 4px solid #f5c6cb;
    font-size: 14px;
}

.forgot-password {
    text-align: right;
    margin-bottom: 20px;
}

.forgot-password a {
    color: #2c6e49;
    font-size: 14px;
    text-decoration: none;
}

.forgot-password a:hover {
    text-decoration: underline;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .login-container {
        flex-direction: column;
        width: 100%;
        max-width: 400px;
    }
    
    .login-welcome {
        padding: 30px 20px;
    }
    
    .school-logo {
        width: 100px;
        height: 100px;
    }
    
    .welcome-title {
        font-size: 24px;
    }
    
    .login-form {
        padding: 30px 20px;
    }
}
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-welcome">
            <div class="school-logo">
                <!-- Replace with your actual school logo path -->
                <img src="img/logo smp3.png" alt="SMPN 3 Malang Logo">
            </div>
            <h1 class="welcome-title">Selamat Datang</h1>
            <p class="welcome-subtitle">Sistem Informasi Administrasi SMPN 3 Malang</p>
        </div>

        <div class="login-form">
            <div class="login-header">
                <h2 class="login-title">Login Admin</h2>
                <p class="login-subtitle">Silahkan masuk untuk mengakses dashboard admin</p>
            </div>
            
            <?php if(isset($error_message)): ?>
                <div class="error">
                    <i class="fas fa-exclamation-circle"></i> <?php echo $error_message; ?>
                </div>
            <?php endif; ?>
            
            <form method="POST" action="">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" placeholder="Masukkan username" required>
                    <i class="fas fa-user"></i>
                </div>
                
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Masukkan password" required>
                    <i class="fas fa-lock"></i>
                </div>
                
                <div class="forgot-password">
                    <a href="#">Lupa password?</a>
                </div>
                
                <button type="submit" class="btn">
                    <i class="fas fa-sign-in-alt"></i> Login
                </button>
            </form>
        </div>
    </div>
</body>
</html>
</body>
</html>