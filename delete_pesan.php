<?php
require 'config.php';

if (isset($_GET['hapus'])) {
    $id_hapus = mysqli_real_escape_string($conn, $_GET['hapus']);
    
    // Cek apakah data ada
    $cek_data = mysqli_query($conn, "SELECT * FROM pesan WHERE id = '$id_hapus'");
    if (mysqli_num_rows($cek_data) > 0) {
        $row = mysqli_fetch_assoc($cek_data);

        // Hapus foto dari folder jika ada
        if (!empty($row['foto']) && file_exists("uploads_pesan/" . $row['foto'])) {
            unlink("uploads_pesan/" . $row['foto']);
        }

        // Hapus data dari database
        $query_hapus = mysqli_query($conn, "DELETE FROM pesan WHERE id = '$id_hapus'");
        if ($query_hapus) {
            echo "<script>
                    alert('Data berhasil dihapus!');
                    window.location.href = document.referrer;
                  </script>";
            exit();
        } else {
            echo "<script>
                    alert('Gagal menghapus data!');
                    window.location.href = document.referrer;
                  </script>";
            exit();
        }
    }
}
?>
