<!DOCTYPE html>
<html>
<head>
    <title>Hasil Pendaftaran</title>
</head>
<body>
    <h2>Hasil Pendaftaran</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = htmlspecialchars($_POST['nama']);
        $email = htmlspecialchars($_POST['email']);
        $jurusan = htmlspecialchars($_POST['jurusan']);

        // Format data yang akan disimpan
        $data = "Nama: $nama | Email: $email | Jurusan: $jurusan" . PHP_EOL;

        // Nama file penyimpanan
        $file = "data_pendaftaran.txt";

        // Simpan ke file
        if (file_put_contents($file, $data, FILE_APPEND)) {
            echo "<p>Data berhasil disimpan ke file!</p>";
            echo "<p><strong>Nama:</strong> $nama</p>";
            echo "<p><strong>Email:</strong> $email</p>";
            echo "<p><strong>Jurusan:</strong> $jurusan</p>";
        } else {
            echo "<p>Gagal menyimpan data.</p>";
        }
    } else {
        echo "<p>Silakan isi formulir terlebih dahulu dari <a href='form.php'>sini</a>.</p>";
    }
    ?>
</body>
</html>
