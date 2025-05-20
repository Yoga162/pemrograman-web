<?php
session_start();
if (!isset($_SESSION['nama'])) {
    header("Location: proses_login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>
    <h2>Selamat datang, <?= htmlspecialchars($_SESSION['nama']) ?>!</h2>
</body>
</html>
