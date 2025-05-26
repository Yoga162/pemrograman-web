<?php
$dbname = 'db_tamu';
$host = 'localhost';
$password = '';
$username ='root';

//koneksi ke mysql
$conn = mysqli_connect($host, $username, $password, $dbname);

//membuat koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

//membuat tabel tamu
$sql = "CREATE TABLE IF NOT EXISTS bukutamu (
     id INT NOT NULL AUTO_INCREMENT,
     nama VARCHAR(50) NOT NULL,
     email VARCHAR(50) NOT NULL,
     url VARCHAR(50) NOT NULL,
     komentar TEXT,
     PRIMARY KEY (id)
     )";

if (mysqli_query($conn, $sql)) {
    echo "Tabel berhasil di buat";
}
else {
    echo "Tabel gagal di buat : " . mysqli_error($conn);
}

mysqli_close($conn);

?>