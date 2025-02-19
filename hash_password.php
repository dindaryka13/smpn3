<form method="POST">
    <input type="text" name="password" placeholder="Masukkan password" required>
    <button type="submit">Generate Hash</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password_plain = $_POST['password'];
    $password_hash = password_hash($password_plain, PASSWORD_DEFAULT);
    echo "<p>Password hash: <b>$password_hash</b></p>";
}
?>
