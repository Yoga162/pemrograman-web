<?php
  $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $db = 'db_siswa';

    $connect = mysqli_connect($hostname, $username, $password, $db);

    if (!$connect) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }

   $sql = "DELETE FROM cmi2 WHERE nim='2415323048'"; // NIM yang ingin dihapus

    if (mysqli_query($connect, $sql)) {
        echo "Data berhasil dihapus.";
    } else {
        echo "Error updating record: " . mysqli_error($connect);
    }

    mySqli_close($connect);

?>