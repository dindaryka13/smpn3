<?php
include 'config.php';

// Ambil data pesan dari database
$sql = "SELECT * FROM pesan ORDER BY tanggal DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<div class="message-box">';
        echo '<h3>' . htmlspecialchars($row['nama']) . '</h3>';
        echo '<p><strong>Tahun Lulusan:</strong> ' . htmlspecialchars($row['tahun_lulusan']) . '</p>';
        echo '<p>' . nl2br(htmlspecialchars($row['pesan'])) . '</p>';
        
        if (!empty($row['foto'])) {
            echo '<img src="uploads_pesan/' . htmlspecialchars($row['foto']) . '" alt="Foto">';
        }

        echo '<p style="font-size: 12px; color: gray;">Dikirim pada: ' . $row['tanggal'] . '</p>';
        echo '</div>';
    }
} else {
    echo "<p style='text-align: center;'>Belum ada pesan yang dikirim.</p>";
}
?>
