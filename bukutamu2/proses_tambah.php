<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Membuat Buku Tamu</title>
</head>
<body>
<?php
if (isset($_POST["kirim"])) {
    require("koneksi.php");

    // Escape input untuk keamanan
    $nama = mysqli_real_escape_string($conn, $_POST["nama"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $url = mysqli_real_escape_string($conn, $_POST["url"]);
    $komentar = mysqli_real_escape_string($conn, $_POST["komentar"]);

    $sql = "INSERT INTO bukutamu (nama, email, url, komentar) VALUES ('$nama', '$email', '$url', '$komentar')";
    mysqli_query($conn, $sql);
    $num = mysqli_affected_rows($conn);

    if ($num > 0) {
        ?>
        <h2>Terima Kasih</h2>
        <strong><?php echo $nama; ?></strong>,
        komentar anda telah tersimpan.<br/>
        [<a href="tampil_data.php">Lihat Daftar Komentar</a>]
        <br/> <br/>
        <?php
    } else {
        ?>
        <hr>error<h2>
        Proses pencatatan bukutamu gagal. Silahkan Ulangi!
        <br/>
        [<a href="tambah_data.php">Kembali ke Form Pencatatan Buku Tamu</a>]
        <?php
    }
}
?>
</body>
</html>
