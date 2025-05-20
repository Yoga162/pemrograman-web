<?php
session_start();
include 'user.php';

$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'] ?? '';
    $password = $_POST['password'] ?? '';

    if (isset($users[$nama]) && $users[$nama] === $password) {
        $_SESSION['nama'] = $nama;
        header("Location: submit.php");
        exit();
    } else {
        $error = "Username atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="post">
        Nama: <input type="text" name="nama" required><br><br>
        Password: <input type="password" name="password" required><br><br>
        <button type="submit">Login</button>
    </form>
    <?php if ($error): ?>
        <p style="color:red;"><?= $error ?></p>
    <?php endif; ?>
</body>
</html>
