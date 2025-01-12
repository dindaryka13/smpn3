<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Filter input
    $name = htmlspecialchars($_POST['name']);
    $year = intval($_POST['year']);
    $message = htmlspecialchars($_POST['message']);

    // Validasi dan simpan file kenangan
    $uploaded_files = [];
    if (!empty($_FILES['memory']['name'][0])) {
        $target_dir = "uploads/";
        if (!is_dir($target_dir)) {
            mkdir($target_dir);
        }

        foreach ($_FILES['memory']['tmp_name'] as $key => $tmp_name) {
            $file_name = basename($_FILES['memory']['name'][$key]);
            $target_file = $target_dir . $file_name;
            if (move_uploaded_file($tmp_name, $target_file)) {
                $uploaded_files[] = $target_file;
            }
        }
    }

    // Menampilkan hasil
    echo "<div style='margin: 20px auto; width: 80%; max-width: 600px; padding: 20px; background: #fff; border-radius: 8px;'>";
    echo "<h3>{$name}</h3>";
    echo "<p>Lulusan tahun: {$year}</p>";
    echo "<p>Pesan dan kesan: {$message}</p>";
    if (!empty($uploaded_files)) {
        echo "<p>Kenangan:</p>";
        foreach ($uploaded_files as $file) {
            echo "<img src='{$file}' alt='Kenangan' style='width: 100px; margin-right: 10px;'>";
        }
    }
    echo "</div>";
}
// Daftar kata terlarang
$blacklist = ["buruk", "jelek", "kasar"];
foreach ($blacklist as $bad_word) {
    $message = str_ireplace($bad_word, str_repeat("*", strlen($bad_word)), $message);
}

?>
