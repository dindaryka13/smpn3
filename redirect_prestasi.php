<?php
$tingkat = $_POST['tingkat'];

if ($tingkat == "Akademik") {
    header("Location: prestasi_akademik.php");
} else {
    header("Location: prestasi_non_akademik.php");
}
exit();
?>
