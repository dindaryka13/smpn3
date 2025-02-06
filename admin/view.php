<?php
require 'config.php';

$sql = "SELECT * FROM pesan_kesan ORDER BY id DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div class='message-box'>";
        echo "<strong>" . htmlspecialchars($row['nama']) . " - " . 
             (isset($row['lulusan_tahun']) ? htmlspecialchars($row['lulusan_tahun']) : 'Tahun tidak tersedia') . "</strong>";
        echo "<p>" . (isset($row['pesan_kesan']) ? nl2br(htmlspecialchars($row['pesan_kesan'])) : 'Pesan tidak tersedia') . "</p>";

        if (!empty($row['kenangan'])) {
            echo "<img src='" . htmlspecialchars($row['kenangan']) . "' alt='Foto Kenangan'>";
        }

        echo "</div>";
    }
} else {
    echo "<p>Belum ada pesan dan kesan.</p>";
}
?>
